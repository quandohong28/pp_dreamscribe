<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon.svg') }}" type="image/x-icon">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('dist/flowbite.min.js') }}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-50 dark:bg-gray-800 text-sm font-light montserrat-normal">

    @yield('content')

    <script src="{{ asset('dist/flowbite.min.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggleBtnMobile = document.getElementById('theme-toggle-mobile');
            const themeToggleDarkIconMobile = document.getElementById('theme-toggle-dark-icon-mobile');
            const themeToggleLightIconMobile = document.getElementById('theme-toggle-light-icon-mobile');

            const themeToggleBtnDesktop = document.getElementById('theme-toggle-desktop');
            const themeToggleDarkIconDesktop = document.getElementById('theme-toggle-dark-icon-desktop');
            const themeToggleLightIconDesktop = document.getElementById('theme-toggle-light-icon-desktop');

            const logo = document.getElementById('logo');

            function updateLogo() {
                if (document.documentElement.classList.contains('dark')) {
                    logo.src = "{{ asset('logo-dark.svg') }}";
                } else {
                    logo.src = "{{ asset('logo-light.svg') }}";
                }
            }

            function updateToggleIcons() {
                const isDarkMode = document.documentElement.classList.contains('dark');
                // Update mobile icons
                if (isDarkMode) {
                    themeToggleLightIconMobile.classList.remove('hidden');
                    themeToggleDarkIconMobile.classList.add('hidden');
                } else {
                    themeToggleDarkIconMobile.classList.remove('hidden');
                    themeToggleLightIconMobile.classList.add('hidden');
                }
                // Update desktop icons
                if (isDarkMode) {
                    themeToggleLightIconDesktop.classList.remove('hidden');
                    themeToggleDarkIconDesktop.classList.add('hidden');
                } else {
                    themeToggleDarkIconDesktop.classList.remove('hidden');
                    themeToggleLightIconDesktop.classList.add('hidden');
                }
            }

            if (localStorage.getItem('color-theme') === 'dark' ||
                (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }

            updateLogo();
            updateToggleIcons();

            themeToggleBtnMobile.addEventListener('click', function() {
                document.documentElement.classList.toggle('dark');
                updateToggleIcons();
                updateLogo();
                localStorage.setItem('color-theme', document.documentElement.classList.contains('dark') ?
                    'dark' : 'light');
            });

            themeToggleBtnDesktop.addEventListener('click', function() {
                document.documentElement.classList.toggle('dark');
                updateToggleIcons();
                updateLogo();
                localStorage.setItem('color-theme', document.documentElement.classList.contains('dark') ?
                    'dark' : 'light');
            });
        });
    </script>
</body>

</html>