<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('dist/flowbite.min.js') }}"></script>
</head>

<body class="bg-gray-50 dark:bg-gray-800 text-sm font-light">
    @include('partials.client.header')

    <div class="px-48 py-4">
        @yield('content')
    </div>

    @include('partials.client.footer')

    <script src="{{ asset('dist/flowbite.min.js') }}"></script>

</body>

</html>