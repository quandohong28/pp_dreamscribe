@extends('layouts.client')

@section('title', 'Trang chủ')

@section('content')
    <div class="bg-white dark:bg-slate-900 dark:text-gray-300 p-8 rounded-lg m-4">
        <h1 class="uppercase font-semibold flex items-center gap-1">
            Truyện
            <span class=" text-xs font-medium me-2 px-2.5 py-0.5 rounded bg-red-600 text-white">hot</span>
        </h1>
        <div class="relative w-full overflow-hidden">
            <div class="flex gap-4 overflow-x-auto no-scrollbar snap-x snap-mandatory py-8 bg-cover bg-center">
                @foreach ($hotBooks as $book)
                    @component('components.book', ['book' => $book])
                    @endcomponent
                @endforeach
            </div>
        </div>

    </div>
    <div class="p-4 grid lg:grid-cols-3 grid-cols-1 gap-4">
        <div class="lg:col-span-2 min-h-screen bg-white dark:bg-slate-900 dark:text-gray-300 p-8 rounded-lg">
            <div class="mb-8">
                <h1 class="uppercase font-semibold mb-4 flex items-center gap-1">Top
                    <span
                        class="bg-gray-800 text-gray-100 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-gray-100 dark:text-gray-800">miễn
                        phí</span>
                </h1>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 lg:gap-8">
                    @foreach ($freeBooks as $book)
                        @component('components.book', ['book' => $book])
                        @endcomponent
                    @endforeach
                </div>
            </div>
            <div class="mb-8">
                <h1 class="uppercase font-semibold mb-4 flex items-center gap-1">
                    Top truyện
                    <span class="bg-yellow-200 text-yellow-800 text-xs font-semibold px-2.5 py-0.5 rounded">VIP</span>
                </h1>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 lg:gap-8">
                    @foreach ($vipBooks as $book)
                        @component('components.book', ['book' => $book])
                        @endcomponent
                    @endforeach
                </div>
            </div>
            <div class="mb-8">
                <h1 class="uppercase font-semibold mb-4 flex items-center gap-1">Tất cả truyện</h1>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 lg:gap-8 mb-4">
                    @foreach ($allBooks as $book)
                        @component('components.book', ['book' => $book])
                        @endcomponent
                    @endforeach
                </div>
                <nav class="flex flex-col md:flex-row justify-between items-start md:items-center space-y-3 md:space-y-0"
                    aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                        Đang hiển thị
                        <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                        của
                        <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                    </span>
                    <ul class="inline-flex items-stretch -space-x-px">
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                @svg('tabler-arrow-narrow-left', 'w-5 h-5')
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="flex items-center justify-center text-sm z-10 py-2 px-3 leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center text-sm py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                @svg('tabler-arrow-narrow-right', 'w-5 h-5')
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="min-h-screen bg-white dark:bg-slate-900 dark:text-gray-300 p-8 rounded-lg">
            <div class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="uppercase font-semibold flex items-center gap-1">
                        Yêu thích
                        @svg('tabler-heart', 'h-5 w-5 text-red-600')
                    </h1>
                    <a href="{{ route('client.books.index', ['filter' => 'favourite']) }}" class="text-sm text-blue-500">Xem
                        thêm</a>
                </div>
                @for ($i = 0; $i < 5; $i++)
                    <a href="" class="flex items-start gap-4 mb-4">
                        <img class="w-20 border-gray-100 hover:border-gray-700 border-2 transition-all duration-300 dark:border-gray-800 dark:hover:border-gray-300"
                            src="https://plus.unsplash.com/premium_photo-1667682997863-62ee7e76cca3?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8"
                            alt="">
                        <div>
                            <p class="font-semibold mb-2 line-clamp-2">Tên truyện dài vãi cả Lorem ipsum dolor sit amet,
                                consectetur adipisicing elit. Quia, nesciunt?</p>
                            <span class="bg-gray-700 text-gray-100 text-xs font-medium px-2.5 py-1">Truyện tranh</span>
                            <p class="mt-2">300 chapter</p>
                            <div class="flex items-center gap-2">
                                <span class="flex items-center gap-1">203 @svg('tabler-heart', 'h-3 w-3')</span>
                                <span class="flex items-center gap-1">1204 @svg('tabler-eye', 'h-3 w-3')</span>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
            <div class="mb-8">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="uppercase font-semibold flex items-center gap-1">
                        Lịch sử đọc truyện
                        @svg('tabler-history', 'h-5 w-5')
                    </h1>
                    <a href="{{ route('client.books.index', ['filter' => 'favourite']) }}" class="text-sm text-blue-500">Xem
                        thêm</a>
                </div>
                @for ($i = 0; $i < 5; $i++)
                    <a href="" class="flex items-start gap-4 mb-4">
                        <img class="w-20 border-gray-100 hover:border-gray-700 border-2 transition-all duration-300 dark:border-gray-800 dark:hover:border-gray-300"
                            src="https://plus.unsplash.com/premium_photo-1667682997863-62ee7e76cca3?w=900&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxmZWF0dXJlZC1waG90b3MtZmVlZHwyfHx8ZW58MHx8fHx8"
                            alt="">
                        <div>
                            <p class="font-semibold mb-2">Tên truyện dài</p>
                            <p>300 chapter</p>
                            <div class="flex items-center gap-2">
                                <span class="flex items-center gap-1">203 @svg('tabler-heart', 'h-3 w-3')</span>
                                <span class="flex items-center gap-1">1204 @svg('tabler-eye', 'h-3 w-3')</span>
                            </div>
                        </div>
                    </a>
                @endfor
            </div>
        </div>
    </div>
@endsection
