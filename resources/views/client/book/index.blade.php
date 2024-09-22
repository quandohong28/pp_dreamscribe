@extends('layouts.client')

@section('title', 'Danh sách truyện')

@section('content')
    <div class="grid grid-cols-1 lg:grid-cols-3 p-4 gap-4 dark:text-gray-300">
        <!-- Filter -->
        <div id="filter-collapse" data-accordion="collapse" class="bg-white dark:bg-slate-800 rounded-lg">
            <h2 id="filter-collapse-heading">
                <button type="button"
                    class="flex items-center justify-between w-full p-4 font-medium rtl:text-right rounded-lg bg-white dark:text-gray-300 dark:bg-slate-800"
                    data-accordion-target="#filter-collapse-body" aria-expanded="true" aria-controls="filter-collapse-body">
                    <span class="font-semibold uppercase">Bộ lọc</span>
                    @svg('tabler-chevron-down', 'w-4 h-4')
                </button>
            </h2>
            <div class="p-8" id="filter-collapse-body" class="hidden" aria-labelledby="accordion-collapse-heading">
                <form action="{{ route('client.books.index') }}" class="mb-8">
                    <label for="search" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Tìm theo
                        tên</label>
                    <div class="flex items-center gap-1">
                        <div class="w-full">
                            <input type="text" id="simple-search" name="search"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 py-1.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Tìm kiếm" required />
                        </div>
                        <button type="submit"
                            class="p-2 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            @svg('tabler-search', ['class' => 'h-4 w-4'])
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </form>
                <form action="{{ route('client.books.index') }}" method="get">
                    <div class="mb-4">
                        <label for="category" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Thể
                            loại</label>
                        <select name="category" id="category"
                            class="block w-full py-1.5 px-3 border border-gray-300 bg-white dark:bg-slate-800 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="">Tất cả</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->slug }}"
                                    {{ request()->query('category') === $category->slug ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Danh
                            sách</label>
                        <div class="mt-2 ms-4">
                            <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Truyện HOT</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Miễn phí</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Truyện VIP</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Trạng
                            thái</label>
                        <div class="mt-2 ms-4">
                            <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Tất
                                    cả</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Đang tiến
                                    hành</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Hoàn
                                    thành</label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="sort" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Sắp
                            xếp</label>
                        <div class="mt-2 ms-4">
                            <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Mặc
                                    định</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-1" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Mới
                                    nhất</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="default-radio-2" type="radio" value="" name="default-radio"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="default-radio-2" class="ms-2 text-sm text-gray-900 dark:text-gray-300">Cũ
                                    nhất</label>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-end items-center gap-4">
                        <button>
                            <a href="{{ route('client.books.index') }}"
                                class="inline-flex justify-center py-1.5 px-3 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-900 hover:bg-gray-700 ">
                                Xóa bộ lọc
                            </a>
                        </button>
                        <button type="submit"
                            class="inline-flex justify-center py-1.5 px-3 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700">
                            Lọc
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Danh sách truyện đã lọc -->
        <div class="lg:col-span-2 bg-white dark:bg-slate-800 rounded-lg p-8">
            <p class="font-semibold uppercase mb-2">Danh sách truyện</p>
            <p class="mb-4 italic">Kết quả tìm kiếm "harry"</p>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @foreach ($books as $book)
                    @component('components.book', ['book' => $book])
                        
                    @endcomponent
                @endforeach
            </div>
        </div>
    </div>
@endsection
