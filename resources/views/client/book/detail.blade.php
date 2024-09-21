@extends('layouts.client')

@section('title', $book->title)

@section('content')
    <div class="min-h-screen bg-white dark:bg-slate-900 rounded-lg m-4 py-8 px-4 lg:px-64 text-gray-500 dark:text-gray-400">
        {{-- Thông tin chi tiết --}}
        <div class="flex flex-col md:flex-row justify-between gap-12 mb-8">
            <div class="relative w-[280px] h-[400px]">
                <img src="{{ asset('storage/uploads/books/' . $book->cover_image) }}"
                    class="w-full h-full object-cover shadow-lg" alt="{{ $book->title }}">
                <a href="#"
                    class="absolute w-full bottom-0 p-4 bg-black opacity-50 text-white flex items-center justify-center gap-2 hover:text-red-500 hover:bg-gray-300 font-semibold">
                    Yêu thích
                    @svg('tabler-heart', 'h-5 w-5')
                </a>
            </div>
            <div>
                <h1 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">{{ $book->title }}</h1>
                <div class="grid grid-cols-2 gap-4 mb-4">
                    <div class="flex items-center gap-4">
                        <span class="flex items-center gap-1 text-red-500">{{ $book->likes }} @svg('tabler-heart', 'h-5 w-5')</span>
                        <span class="flex items-center gap-1 dark:text-white">{{ $book->views }} @svg('tabler-eye', 'h-5 w-5')</span>
                    </div>
                    <p>{{ $book->number_chapter }} chapters</p>
                    <div>
                        Thể loại:
                        <a href="{{ route('client.books.index', ['category' => $book->category]) }}"
                            class="inline bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1">{{ $book->category->name }}</a>
                    </div>
                    <p>Ngày đăng: {{ $book->published_date }}</p>
                    <p>Cập nhật mới nhất: {{ $book->updated_at }}</p>
                    <p>Phân loại: {{ $book->price == 0 ? 'Miễn phí' : 'VIP' }}</p>
                    <p>Giá: {{ $book->price == 0 ? 'Miễn phí' : number_format($book->price) . ' VNĐ' }}</p>
                    <p>Tác giả: {{ $book->author->fullname }}</p>
                    <p>Quốc gia: {{ $book->country->name }}</p>
                    <p>Tình trạng: {{ $book->is_completed == 1 ? 'Hoàn thành' : 'Đang cập nhật' }}</p>
                </div>

                <div class="flex items-center gap-4 mt-auto">
                    <a href="{{ route('client.books.chapter', ['slug' => $book->slug, 'chapter' => $book->chapters->first()->slug]) }}"
                        class="bg-black text-white px-4 py-2 rounded hover:bg-gray-700 dark:bg-gray-100 dark:text-black">Đọc
                        từ đầu</a>

                    <a href="{{ route('client.books.chapter', ['slug' => $book->slug, 'chapter' => $book->chapters->last()->slug]) }}"
                        class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Đọc mới nhất</a>
                </div>
            </div>
        </div>

        {{-- Mô tả --}}
        <div class="mb-8">
            <h2 class="uppercase font-semibold text-gray-900 dark:text-white mb-2">Mô tả</h2>
            <p>{{ $book->description }}</p>
        </div>

        {{-- Danh sách chương --}}
        <div class="mb-8">
            <h2 class="uppercase font-semibold text-gray-900 dark:text-white mb-2">Danh sách chương</h2>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tiêu đề
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ngày đăng
                            </th>
                            <th scope="col" class="px-6 py-3"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($book->chapters as $chapter)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <td class="px-6 py-4 font-semibold">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="px-6 py-4 font-normal text-blue-600 dark:text-blue-400">
                                    <a
                                        href="{{ route('client.books.chapter', ['slug' => $book->slug, 'chapter' => $chapter->slug]) }}">
                                        {{ $chapter->title }}
                                    </a>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $chapter->published_date }}
                                </td>
                                <td class="px-6 py-4">
                                    @svg('tabler-history', 'h-5 w-5')
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

        {{-- Truyện cùng danh mục --}}
        <div class="mb-8">
            <div class="flex items-center justify-between mb-4">
                <h2 class="uppercase font-semibold text-gray-900 dark:text-white mb-2">Truyện cùng danh mục</h2>
                <a href="{{ route('client.books.index', ['category' => $book->category]) }}"
                    class="text-blue-600 dark:text-blue-400">Xem thêm</a>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($book->category->books->where('id', '!=', $book->id)->take(20) as $relatedBook)
                    @component('components.book', ['book' => $relatedBook])
                    @endcomponent
                @endforeach
            </div>
        </div>
    </div>
@endsection
