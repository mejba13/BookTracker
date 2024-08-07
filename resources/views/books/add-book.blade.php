<x-layout>
    <x-slot name="pagetitle">Contact</x-slot>
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <x-page-heading>Add New Book</x-page-heading>
        </div>
        <div>
            @if(session('success'))
                <div class="alert">
                    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>

                        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                                <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                        <div class="sm:flex sm:items-start">
                                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                                <div class="mt-2">
                                                    <p class="text-sm text-gray-500">  {{ session('success') }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                        <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endif
        </div>
        <x-forms.form action="/books" method="POST" enctype="multipart/form-data">
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <x-forms.input label="Title" type="text" name="title" placeholder="Book Title" />
                <x-forms.input label="Author" type="text" name="author" placeholder="Author" />
                <x-forms.input label="Price" type="text" name="price" placeholder="Price" />
                <x-forms.input label="Book Cover Image" type="file"  name="book_cover_image" placeholder="Book Cover Image" />
                <x-forms.input label="Published Date" type="date" name="published_date" placeholder="Published Date" />
                <x-forms.input label="ISBN" name="isbn" type="text" placeholder="isbn number" />
            </div>
            <x-forms.button>Add Book</x-forms.button>
        </x-forms.form>
    </div>

</x-layout>
