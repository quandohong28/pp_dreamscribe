<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('logo-light.svg') }}" type="image/x-icon">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('dist/flowbite.min.js') }}"></script>

</head>

<body class="bg-gray-50 dark:bg-gray-800 text-sm">
    @include('partials.admin.header')

    <div class="flex pt-16">
        <aside>
            @include('partials.admin.sidebar')
        </aside>

        <main class="min-h-screen w-full lg:ml-64 p-4 bg-gray-50 dark:bg-gray-900">
            @yield('content')
        </main>
    </div>

    <footer class="bg-gray-50 dark:bg-gray-900 lg:ml-64">
        @include('partials.admin.footer')
    </footer>

    <script src="{{ asset('dist/flowbite.min.js') }}"></script>
</body>

</html>