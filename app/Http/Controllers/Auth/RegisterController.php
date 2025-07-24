<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
     public function register()
    {
            if (Auth::check()) {
                $user = Auth::user();
                $currentUser = User::find($user->id);
                // Check if the user has role 'super-admin' or 'admin'
                if ($currentUser->hasRole('admin')) {
                    return view('admin.dashboard');
                }
                else if($currentUser->hasRole('instructor'))
                {
                    return view('admin.dashboard');
                }
                else if($currentUser->hasRole('student'))
                {
                    return view('admin.dashboard');
                }
                 else {
                    return redirect()->route('frontend.home');
                }
            } 
            else {
        return view('auth.register');
            }
        
    }

     public function registerAttempt(Request $request){
    
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                ->letters()
                ->mixedCase()
                ->numbers()
                ->symbols()
            ],
            // 'confirm-password' => 'required|same:password',
            'terms' => 'required|string|max:255',
        ];
        
        // Make 'g-recaptcha-response' nullable if CAPTCHA is not enabled
        // if (config('captcha.version') !== 'no_captcha') {
        //     $rules['g-recaptcha-response'] = 'required|captcha';
        // } else {
        //     $rules['g-recaptcha-response'] = 'nullable';
        // }
        
        $validate = Validator::make($request->all(), $rules);
        if($validate->fails()){
            return Redirect::back()->withErrors($validate)->withInput($request->all())->with('error', 'Validation Error!');
        }
        try{
            // Begin a transaction
            DB::beginTransaction();
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

            
            $username = $this->generateUsername($request->name);

            while (User::where('username', $username)->exists()) {
                $username = $this->generateUsername($request->name);
            }
            $user->username = $username;
            $user->save();
    
            $user->syncRoles('student');

            $profile = new Profile();
            $profile->user_id = $user->id;
            $profile->first_name = $request->name;
            $profile->save();

            // Attempt to authenticate
            Auth::attempt(['email' => $request->email, 'password' => $request->password]);
            
            if (Auth::check()) {

                // VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
                //     return (new MailMessage)
                //         ->subject('Verify Email Address')
                //         ->line('Click the button below to verify your email address.')
                //         ->action('Verify Email Address', $url);
                // });
            }
            // app('notificationService')->notifyUsers([$user], 'Welcome to ' . Helper::getCompanyName());
            // $user->sendEmailVerificationNotification();
    
            // Commit the transaction
            DB::commit();

            // if ($user->hasRole('super-admin') || $user->hasRole('admin')) {
            //     return redirect()->route('dashboard')->with('success', "Login successfully!");
            // } else {
            //     return redirect()->route('frontend.dashboard')->with('success', "Login successfully!");
            // }
            return redirect()->route('frontend.dashboard')->with('success','Your account has been created successfully.');
        } catch (\Throwable $th) {
            DB::rollback();
            // Log the error for debugging
            Log::error('User registration failed', ['error' => $th->getMessage()]);
            return redirect()->back()->withInput($request->all())->with('error', "Something went wrong! Please try again later");
            // throw $th;
        }
    }

     public function generateUsername($name)
    {
        $name = strtolower(str_replace(' ', '', $name));
        $username = $name . rand(1000, 9999);
        return $username;
    }



}

