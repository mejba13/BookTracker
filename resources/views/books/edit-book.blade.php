<x-layout>
    <x-slot name="pagetitle">edit book </x-slot>
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <x-page-heading>Edit Book</x-page-heading>
        </div>
        <x-forms.form action="/books/{{ $book->id }}" method="POST">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <x-forms.input label="Title" type="text" value="{{ $book->title }}" name="title" placeholder="Book Title" />
                <x-forms.input label="Author" type="text" value="{{ $book->author }}" name="author" placeholder="Author" />
                <x-forms.input label="Price" type="text" value="{{ $book->price }}" name="price" placeholder="Price" />
                <x-forms.input label="Book Cover Image" value="{{ $book->book_cover_image }}" type="text"  name="book_cover_image" placeholder="Book Cover Image" />
                <x-forms.input label="Published Date"  value="{{ $book->published_date }}" type="date" name="published_date" placeholder="Published Date" />
                <x-forms.input label="ISBN" name="isbn" value="{{ $book->isbn }}" type="text" placeholder="isbn number" />
            </div>

           <div class="flex max-w-lg justify-center gap-6">
               <x-forms.button>Book update</x-forms.button>
               <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
           </div>

        </x-forms.form>
    </div>

    <form method="POST" action="/books/{{ $book->id }}" id="delete-form" class="hidden">
        @csrf
        @method("DELETE")
    </form>

</x-layout>
