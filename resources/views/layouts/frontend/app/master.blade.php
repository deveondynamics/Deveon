<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    @include('layouts.frontend.app.meta')
    @include('layouts.frontend.app.css')
    @yield('css')

</head>

<body>


@include('layouts.frontend.app.pre-nav')

@include('layouts.frontend.app.navbar')


<div id="smooth-wrapper">


        <div id="smooth-content">


@yield('content')


@include('layouts.frontend.app.footer')

        </div>
    </div>





    @include('layouts.frontend.app.script')
@yield('script')
</body>

</html>
