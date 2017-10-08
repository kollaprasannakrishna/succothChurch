<!DOCTYPE html>
<html lang="en">
<head>
    @include('stylesAndJs.header')
    @yield('styles')
</head>
<body>

<div id="preloader"></div>
<div id="wrapper">
    @include('partials._nav')
    @yield('carousel')

    @yield('content')

    @include('partials._footer')
    @include('stylesAndJs.footer')
</div>
    @yield('scripts')
</body>
</html>
