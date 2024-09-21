<a href="{{ route('client.books.detail', ['slug' => $book->slug]) }}" class="relative mb-2 min-w-[180px] max-w-[180px] min-h-[260px] max-h-[260px] transition-all duration-300 hover:scale-105">
    <img src="{{ asset('storage/uploads/books/' . $book->cover_image) }}" class="w-full h-full object-cover shadow hover:border">
    <div class="text-white absolute bottom-0 left-0 right-0 p-2 bg-black opacity-50 text-xs">
        <p class="font-semibold line-clamp-2 mb-1">{{ $book->title }}</p>
        <p>{{ $book->number_chapter }} chapter</p>
        <div class="flex items-center gap-2">
            <span class="flex items-center gap-1">{{ $book->likes }} @svg('tabler-heart', 'h-3 w-3')</span>
            <span class="flex items-center gap-1">{{ $book->views }} @svg('tabler-eye', 'h-3 w-3')</span>
        </div>
    </div>
    <div class="absolute top-0 right-0">
        <span class="bg-gray-100 text-gray-800 text-xs font-medium px-2.5 py-1">{{ $book->category->name }}</span>
    </div>
</a>