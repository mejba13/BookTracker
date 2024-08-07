<div class="group relative">
    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
        <a href="/books/{{ $book->id }}"><img src="{{ $book->book_cover_image }}" alt="Front of men&#039;s Basic Tee in black." class="h-full w-full object-cover object-center lg:h-full lg:w-full"></a>
    </div>
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-sm text-gray-700">
                <a href="/books/{{ $book->id }}">
                    <span aria-hidden="true" class="absolute inset-0  text-3xl text-gray-500"></span>
                    {{ $book->title }}
                </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{ $book->author }}</p>
        </div>
        <p class="text-sm font-medium text-gray-900">${{ $book->price }}</p>
    </div>
</div>

