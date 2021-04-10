<header x-data="menu()" x-cloak
    class="bg-black h-16 xl:h-20 flex items-center justify-between  w-full 2xl:pl-16 2xl:pr-16 z-30 flex-shrink-0 fixed top-0 ">
    <div x-on:click="open" class=" cursor-pointer text-main-yellow font-semibold flex items-center ml-4">
        <x-contacto-amarillo.contacto-imgmenu>
            <p class="ml-4 2xl:hidden">Menú</p>
        </x-contacto-amarillo.contacto-imgmenu>
    </div>
    <x-contacto-amarillo.contacto-logo />

    <div x-show="isOpen()" x-on:click.away="close" class="fixed top-0 left-0 w-full bg-black h-full md:w-2/6">
        {{$slot}}
    </div>
</header>