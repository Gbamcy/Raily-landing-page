<!doctype html>
<html lang="en">
<head>
    @include('partials.meta')
    @include('partials.css')
    <title>@yield('raily-app')</title>
</head>
<body>
   @include('partials.navigation')
   @yield('content')
   @include('partials.footer')
   @include('partials.js')
</body>
</html>
