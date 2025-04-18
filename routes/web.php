<?php

use App\Http\Controllers\Main\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

Route::get('/', function () {
    return redirect()->route('home');
  });
  
  Route::get('/sabeer', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('optimize');
    $exitCode = Artisan::call('optimize:clear');
    $exitCode = Artisan::call('route:cache');
    
  
    return "Cache is cleared"; // you can replce your redirect
  });



  Route::get('/', [HomeController::class, 'index'])->name('home');