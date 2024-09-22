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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggleBtn = document.getElementById('theme-toggle');
            const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

            const logo = document.getElementById('logo');

            function updateLogo() {
                logo.src = document.documentElement.classList.contains('dark') ? "{{ asset('logo-dark.svg') }}" : "{{ asset('logo-light.svg') }}";
            }

            function updateToggleIcons() {
                const isDarkMode = document.documentElement.classList.contains('dark');
                // Update  icons
                if (isDarkMode) {
                    themeToggleLightIcon.classList.remove('hidden');
                    themeToggleDarkIcon.classList.add('hidden');
                } else {
                    themeToggleDarkIcon.classList.remove('hidden');
                    themeToggleLightIcon.classList.add('hidden');
                }
            }

            // Kiểm tra và thiết lập chế độ tối
            if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }

            updateLogo();
            updateToggleIcons();

            themeToggleBtn.addEventListener('click', function() {
                document.documentElement.classList.toggle('dark');
                updateToggleIcons();
                updateLogo();
                localStorage.setItem('color-theme', document.documentElement.classList.contains('dark') ? 'dark' : 'light');
            });
        });
    </script>

</body>

</html>