<form {{ $attributes(["class" => "mx-auto mt-16 max-w-xl sm:mt-20", "method" => "GET"]) }}>
    @if ($attributes->get('method', 'GET') !==  'GET')
        @csrf
        @method($attributes->get('method'))
    @endif

    {{ $slot }}
</form>
