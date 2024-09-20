@php
    $navItems = [
        [
            'name' => 'Bảng điều khiển',
            'icon' => 'tabler-dashboard',
            'url' => 'dashboard',
        ],
        [
            'name' => 'Truyện',
            'icon' => 'tabler-book',
            'children' => [
                [
                    'name' => 'Danh mục truyện',
                    'icon' => 'tabler-category',
                    'url' => 'categories.index',
                ],
                [
                    'name' => 'Tất cả truyện',
                    'icon' => 'tabler-book',
                    'url' => 'books.index',
                ],
                [
                    'name' => 'Thêm truyện',
                    'icon' => 'tabler-plus',
                    'url' => 'books.create',
                ],
                [
                    'name' => 'Tác giả',
                    'icon' => 'tabler-user',
                    'url' => 'authors.index',
                ],
                [
                    'name' => 'Quốc gia',
                    'icon' => 'tabler-flag',
                    'url' => 'countries.index',
                ],
            ],
        ],
        [
            'name' => 'Người dùng',
            'icon' => 'tabler-users',
            'children' => [
                [
                    'name' => 'Danh sách người dùng',
                    'icon' => 'tabler-users',
                    'url' => 'users.index',
                ],
                [
                    'name' => 'Thêm người dùng',
                    'icon' => 'tabler-user-plus',
                    'url' => 'users.create',
                ],
                [
                    'name' => 'Cấp bậc',
                    'icon' => 'tabler-military-rank',
                    'url' => 'ranks.index',
                ],
            ],
        ],
        [
            'name' => 'Ví',
            'icon' => 'tabler-wallet',
            'children' => [
                [
                    'name' => 'Tiền tệ',
                    'icon' => 'tabler-currency-dollar',
                    'url' => 'currencies.index',
                ],
                [
                    'name' => 'Giao dịch',
                    'icon' => 'tabler-exchange',
                    'url' => 'transactions.index',
                ],
            ],
        ],
        [
            'name' => 'Mã giảm giá',
            'icon' => 'tabler-tag',
            'url' => 'vouchers.index',
        ],
    ];
@endphp

<aside id="sidebar"
    class="fixed overflow-hidden top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">
                    <li>
                        <form action="#" method="GET" class="lg:hidden">
                            <label for="mobile-search" class="sr-only">Search</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                    <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input type="text" name="email" id="mobile-search"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-200 dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Search">
                            </div>
                        </form>
                    </li>

                    @foreach ($navItems as $item)
                        @if (isset($item['children']))
                            <li>
                                <button type="button"
                                    class="flex items-center gap-3 w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                    aria-controls="dropdown-{{ $item['name'] }}"
                                    data-collapse-toggle="dropdown-{{ $item['name'] }}">
                                    @svg($item['icon'], ['class' => 'w-5 h-5 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-gray-200'])
                                    <span sidebar-toggle-item>{{ $item['name'] }}</span>
                                    <span class="ms-auto">
                                        @svg('tabler-caret-down-filled', ['class' => 'w-4 h-4 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-gray-200'])
                                    </span>
                                </button>
                                <ul id="dropdown-{{ $item['name'] }}" class="hidden py-2 space-y-2">
                                    @foreach ($item['children'] as $child)
                                        <li
                                            class="flex items-center ps-8 p-2 gap-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">
                                            @svg($child['icon'], ['class' => 'w-5 h-5 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-gray-200'])
                                            <a href="{{ route($child['url']) }}">{{ $child['name'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li>
                                <a href="{{ route($item['url']) }}"
                                    class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                                    @svg($item['icon'], ['class' => 'w-5 h-5 text-gray-500 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-gray-200'])
                                    <span class="ml-3" sidebar-toggle-item>{{ $item['name'] }}</span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</aside>
