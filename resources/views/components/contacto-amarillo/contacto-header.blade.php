<header x-data="menu()"
    class="bg-black h-16 xl:h-20 flex items-center justify-between  w-full 2xl:pl-16 2xl:pr-16 z-50 flex-shrink-0">
    <div x-on:click="open" class=" cursor-pointer text-main-yellow font-semibold flex items-center ml-4">
        <x-contacto-amarillo.contacto-imgmenu>
            <p class="ml-4">Menú</p>
        </x-contacto-amarillo.contacto-imgmenu>
    </div>
    <x-contacto-amarillo.contacto-logo />
</header>