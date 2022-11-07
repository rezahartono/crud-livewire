<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="/dist/bootstrap/css/bootstrap.min.css">
    @stack('styles')
    @livewireStyles
    <link rel="stylesheet" href="/dist/main/css/main-app.css">
</head>

<body>
    {{-- @include('template.navbar') --}}
    @yield('main-content')

    <script src="/dist/main/js/jquery-3.6.1.min.js"></script>
    <script src="/dist/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/09f62db77c.js" crossorigin="anonymous"></script>
    @stack('scripts')
    @livewireScripts
    <script src="/dist/main/js/main-app.js"></script>
</body>

</html>
