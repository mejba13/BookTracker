<x-layout>
    <x-slot name="pagetitle">All books list</x-slot>
    <div class="mx-auto max-w-6xl py-32 sm:py-48 lg:py-32">
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">All books list</h1>
            <ul role="list" class="divide-y divide-gray-100">
                <x-book-card/>
                <x-book-card/>
                <x-book-card/>
                <x-book-card/>
                <x-book-card/>
                <x-book-card/>
            </ul>
        </div>
</x-layout>
