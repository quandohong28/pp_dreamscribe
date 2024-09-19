<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('logo-light.svg') }}" type="image/x-icon">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-gray-50 dark:bg-gray-800 text-sm">
    @include('partials.admin.header')

    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        @include('partials.admin.sidebar')

        <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>

        <div class="min-h-screen relative bg-gray-50 lg:ms-64 dark:bg-gray-900">
            @yield('content')
        </div>

    </div>

    <div class="overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
        @include('partials.admin.footer')
    </div>

    <script src="{{ asset('dist/flowbite.min.js') }}"></script>
</body>

</html>
