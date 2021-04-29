<header x-data="menu()" x-cloak
    class="bg-black w-full h-16 xl:h-20 flex flex-shrink-0 items-center justify-between 2xl:pl-16 2xl:pr-16 z-30 fixed top-0 ">
    <!-- Icono Menu -->
    <div x-on:click="open" class=" cursor-pointer text-main-yellow font-semibold flex items-center ml-4">
        <x-contacto-amarillo.contacto-imgmenu>
            <p class="ml-4 2xl:hidden">Menú</p>
        </x-contacto-amarillo.contacto-imgmenu>
    </div>
    <!-- Termina Icono Menu -->

    <x-contacto-amarillo.contacto-logo />

    <!-- Menu -->
    <div x-show="isOpen()" x-on:click.away="close" class="fixed top-0 left-0 w-full bg-black h-full md:w-1/5 ">
        {{$slot}}
    </div>
    <!-- Termina Menu -->
</header>