@props(['active' => false])

<a class="{{ $active ? 'px-4 py-1 text-sm font-semibold text-white shadow-sm bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600' : 'text-sm font-semibold leading-6 text-gray-900' }}" aria-current="{{ $active ? 'page' : false}}" {{ $attributes }}>{{ $slot }}</a>
