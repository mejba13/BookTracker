@props(['label', 'name'])
<x-forms.label :$label :$name/>
    <div class="mt-2.5">
     {{ $slot }}
    </div>
<x-forms.error :error="$errors->first($name)" />
