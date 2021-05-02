<div {{$attributes->merge(['class' => 'pl-6 text-black hover:bg-black hover:text-white p-2'])}}>
    <a class="flex items-center focus:outline-none duration-150 ease-in-out" href="{{ route($routeInMenu  ) }}">
        <span class="mr-3"> {{ $image }} </span>
        {{ $slot }}
    </a>
</div>