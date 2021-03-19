{{-- <a {{ $attributes->merge(['class' => $classes]) }}>
{{ $slot }}
</a> --}}
@props(['route'])

<li {{ $attributes->merge(['class' => "mr-8 px-2 py-2 lg:mx-0 lg:my-0 rounded hover:bg-gray-800" ]) }}>
    <a class="transition duration-700 " href="{{$route}}"> {{$slot}} </a>
</li>