@php
    $bookList = [
        [
            'name' => 'Tất cả',
            'list' => 'all',
        ],
        [
            'name' => 'Mới cập nhật',
            'list' => 'new',
        ],
        [
            'name' => 'Truyện HOT',
            'list' => 'hot',
        ],
        [
            'name' => 'Truyện Full',
            'list' => 'full',
        ],
        [
            'name' => 'Miễn phí',
            'list' => 'full',
        ],
        [
            'name' => 'Trả phí',
            'list' => 'full',
        ],
    ];
@endphp

<header>
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8 border-b border-gray" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{ route('client.home') }}">
                <img id="logo" class="h-8 w-auto" src="{{ asset('logo-light.svg') }}">
            </a>
        </div>
        <div class="flex items-center gap-2 lg:hidden">
            <button type="button" data-dropdown-toggle="searchMobile" data-dropdown-delay="0"
                class="p-2 text-gray-700 rounded-lg hover:text-black hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                @svg('tabler-search', 'h-5 w-5')
            </button>
            {{-- Search modal --}}
            <div id="searchMobile" class="z-10 hidden bg-white rounded-lg shadow w-96 dark:bg-gray-700 p-4">
                <form class="flex items-center max-w-sm mx-auto">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <input type="text" id="simple-search" name="search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-1.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tìm kiếm" required />
                    </div>
                    <button type="submit"
                        class="p-2 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        @svg('tabler-search', ['class' => 'h-4 w-4'])
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
            <button id="theme-toggle-mobile"
                class="p-2 text-gray-700 rounded-lg hover:text-black hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                @svg('tabler-moon', ['class' => 'h-5 w-5', 'id' => 'theme-toggle-dark-icon-mobile'])
                @svg('tabler-sun', ['class' => 'h-5 w-5 hidden', 'id' => 'theme-toggle-light-icon-mobile'])
            </button>
            <a href="{{ route('auth.login') }}"
                class="p-2 text-gray-700 rounded-lg hover:text-black hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                @svg('tabler-login', 'h-5 w-5')
            </a>
            <button
                class="p-2 text-gray-700 rounded-lg hover:text-black hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                @svg('tabler-menu', 'h-5 w-5')
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            <a href="{{ route('client.home') }}"
                class="font-semibold leading-6 text-gray-900 uppercase dark:text-gray-300 dark:hover:text-white">Trang chủ</a>
            <button type="button" data-dropdown-toggle="bookList" data-dropdown-delay="0"
                class="font-semibold flex items-center gap-2 leading-6 text-gray-900 uppercase dark:text-gray-300 dark:hover:text-white">
                Danh sách truyện
                @svg('tabler-caret-down-filled', 'h-4 w-4 ml-1')
            </button>
            <div id="bookList" class="z-10 hidden bg-white rounded-lg shadow w-96 dark:bg-gray-700">
                <div class="py-2 grid grid-cols-2 text-gray-700 dark:text-gray-200 gap-2">
                    @foreach ($bookList as $item)
                        <a href="{{ route('client.books.index', ['list' => $item['list']]) }}"
                            class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            @svg('tabler-chevron-right', 'h-4 w-4 mr-1')
                            {{ $item['name'] }}
                        </a>
                    @endforeach
                </div>
            </div>
            <button type="button" data-dropdown-toggle="categories" data-dropdown-delay="0"
                class="font-semibold flex items-center gap-2 leading-6 text-gray-900 uppercase dark:text-gray-300 dark:hover:text-white">
                Thể loại
                @svg('tabler-caret-down-filled', 'h-4 w-4 ml-1')
            </button>
            <div id="categories"
                class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-96 dark:bg-gray-700">
                <div class="py-2 grid grid-cols-2 text-gray-700 dark:text-gray-200 gap-2">
                    @foreach ($categories as $category)
                        <a href="{{ route('client.books.index', ['category' => $category->slug]) }}"
                            class="flex items-center gap-2 px-4 py-3 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                            @svg('tabler-chevron-right', 'h-4 w-4 mr-1')
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="hidden lg:flex lg:flex-1 lg:justify-end lg:items-center lg:gap-2">
            <button type="button" data-dropdown-toggle="search" data-dropdown-delay="0"
                class="rounded-lg p-2 text-gray-700 hover:bg-gray-100 hover:text-black dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                @svg('tabler-search', 'h-5 w-5')
            </button>
            <div id="search" class="z-10 hidden bg-white rounded-lg shadow w-96 dark:bg-gray-700 p-4">
                <form action="{{ route('client.books.index') }}" class="flex items-center max-w-sm mx-auto">
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <input type="text" id="simple-search" name="search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-1.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Tìm kiếm" required />
                    </div>
                    <button type="submit"
                        class="p-2 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        @svg('tabler-search', ['class' => 'h-4 w-4'])
                        <span class="sr-only">Search</span>
                    </button>
                </form>
            </div>
            <button id="theme-toggle-desktop"
                class="p-2 text-gray-700 rounded-lg hover:text-black hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-700">
                @svg('tabler-moon', ['class' => 'w-5 h-5', 'id' => 'theme-toggle-dark-icon-desktop'])
                @svg('tabler-sun', ['class' => 'w-5 h-5 hidden', 'id' => 'theme-toggle-light-icon-desktop'])
            </button>
            <a href="{{ route('auth.login') }}"
                class="px-3 py-1.5 rounded-lg flex items-center gap-2 leading-6 bg-black text-white hover:bg-gray-700 dark:bg-gray-700 dark:text-gray-300 dark:hover:text-white dark:hover:bg-gray-600">
                @svg('tabler-login', 'h-5 w-5')
            </a>
        </div>
    </nav>
</header>

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
