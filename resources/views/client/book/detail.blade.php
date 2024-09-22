@extends('layouts.client')

@section('title', $book->title)

@section('content')
    <div
        class="font-normal min-h-screen bg-white dark:bg-slate-900 rounded-lg m-4 py-8 px-4 lg:px-64 text-gray-500 dark:text-gray-400">
        {{-- Thông tin chi tiết - thiếu phần tác giả --}}
        <div class="flex flex-col md:flex-row gap-12 mb-8">
            <div class="relative w-[280px] h-[400px]">
                <img src="{{ asset('storage/uploads/books/' . $book->cover_image) }}"
                    class="w-full h-full object-cover shadow-lg" alt="{{ $book->title }}">
                <a href="#"
                    class="absolute w-full bottom-0 p-4 bg-red-500 text-white flex items-center justify-center gap-2 hover:bg-red-600 font-semibold">
                    Yêu thích
                    @svg('tabler-heart', 'h-5 w-5')
                </a>
            </div>
            <div>
                <h1 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">{{ $book->title }}</h1>
                <div class="grid grid-cols-2 gap-x-24 gap-y-4 mb-4">
                    <div class="flex items-center gap-4">
                        <span class="flex items-center gap-1 dark:text-white">{{ $book->view }} @svg('tabler-eye', 'h-5 w-5')</span>
                        <span class="flex items-center gap-1 dark:text-white">{{ $book->like }} @svg('tabler-heart', 'h-5 w-5 text-red-500')</span>
                    </div>
                    <p>Số chap: {{ $book->number_chapter }} chapters</p>
                    <div>
                        Thể loại:
                        <a href="{{ route('client.books.index', ['category' => $book->category]) }}"
                            class="inline bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1">{{ $book->category->name }}</a>
                    </div>
                    <p>Ngày đăng: {{ $book->published_date }}</p>
                    <div>
                        <p>Cập nhật mới nhất:</p>
                        {{ $book->updated_at }}
                    </div>
                    <div class="flex items-start gap-4">
                        <span>Giá:</span>
                        <div>
                            <p class="mb-2 line-through">
                                {{ $book->price == 0 ? 'Miễn phí' : number_format($book->price) . ' VNĐ' }}</p>
                            <p class="font-semibold">
                                {{ $book->discount_price == 0 ? 'Miễn phí' : number_format($book->discount_price) . ' VNĐ' }}
                            </p>
                        </div>
                    </div>
                    <p>Tác giả:
                        <a href="#"
                            class="inline bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1">{{ $book->author->fullname }}</a>
                    </p>
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

        {{-- Mô tả - xong --}}
        <div class="mb-8">
            <h2 class="uppercase font-semibold text-gray-900 dark:text-white mb-2">Mô tả</h2>
            <p>{{ $book->description }}</p>
        </div>

        {{-- Danh sách chương - thiếu lịch sử đọc --}}
        <div class="mb-8">
            <h2 class="uppercase font-semibold text-gray-900 dark:text-white mb-2">Danh sách chương</h2>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                # Chap
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

        {{-- Bình luận - chưa render --}}
        <div class="mb-8">
            <h2 class="uppercase font-semibold text-gray-900 dark:text-white mb-2">Bình luận</h2>
            <div
                class="p-4 mb-4 bg-white border border-gray-200 rounded-lg shadow-sm sm:p-6 dark:border-gray-700 dark:bg-gray-800 xl:mb-0">
                <form class="overflow-y-auto lg:max-h-[60rem] 2xl:max-h-fit">

                    {{-- Danh sách bình luận --}}
                    <article class="mb-5">
                        <div class="flex items-center justify-between mb-2">
                            <div class="flex items-center">
                                <p
                                    class="inline-flex items-center mr-3 text-sm font-semibold text-gray-900 dark:text-white">
                                    <img class="w-6 h-6 mr-2 rounded-full"
                                        src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                        alt="Bonnie avatar">Bonnie Green
                                </p>
                                <span class="inline bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1 mr-3">Thần
                                    chiếu</span>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    01/03/2023 4:15 PM
                                </p>
                            </div>
                        </div>
                        <p class="mb-3 text-gray-900 dark:text-white">Hello everyone,</p>
                        <p class="mb-2 text-gray-900 dark:text-white">
                            Thank you for the workshop, it was very productive meeting. I can't wait to
                            start working on this new project with you guys. But first things first, I'am
                            waiting for the offer and pitch deck from you. It would be great to get it by
                            the end o the month.
                        </p>
                        <p class="mb-3 text-gray-900 dark:text-white">Cheers!</p>
                        <div class="flex items-center mb-2 space-x-2">
                            <button type="button"
                                class="py-1.5 px-3 inline-flex items-center rounded-lg bg-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600 dark:bg-gray-700">
                                @svg('tabler-thumb-up-filled', 'h-4 w-4 me-2 text-blue-600')
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">14</span>
                            </button>
                            <button type="button"
                                class="py-1.5 px-3 inline-flex items-center rounded-lg bg-gray-100 hover:bg-gray-200 dark:hover:bg-gray-600 dark:bg-gray-700">
                                @svg('tabler-thumb-down', 'h-4 w-4 me-2')
                                <span class="text-sm font-medium text-gray-500 dark:text-gray-400">14</span>
                            </button>
                        </div>
                    </article>

                    {{-- Bình luận của tôi --}}
                    <div class="w-full border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                        <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                            <textarea id="comment" rows="8"
                                class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                placeholder="Bình luận của bạn" required></textarea>
                        </div>
                        <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                            <button type="submit"
                                class="inline-flex items-center py-2 px-4 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700">
                                Gửi
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        {{-- Truyện cùng danh mục - xong --}}
        <div class="mb-8">
            <div class="flex items-center justify-between mb-4 me-4">
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
