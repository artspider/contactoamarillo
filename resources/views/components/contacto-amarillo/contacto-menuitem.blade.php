<div {{$attributes->merge(['class' => 'bg-black text-white hover:bg-main-yellow hover:text-black p-3'])}}>
    <a class="flex items-center focus:outline-none duration-150 ease-in-out" href="{{ route($routeInMenu) }}">
        {{ $image }}
        {{ $slot }}
    </a>
</div>