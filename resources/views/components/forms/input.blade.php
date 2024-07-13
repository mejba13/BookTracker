@props(['label','name','type'])

@php

    $defaults = [
        'type' => $type,
        'id' => $name,
        'name' => $name,
        'class' => 'block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6',
        'value' => old($name)
     ];

@endphp

<div class="sm:col-span-2">
        <x-forms.field :$label :$name>
        <input {{ $attributes($defaults) }}>
        </x-forms.field>
</div>
