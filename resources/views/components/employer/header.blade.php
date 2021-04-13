<header x-data="menu()"
    x-cloak
    class="bg-black h-16 xl:h-20 flex items-center justify-between  w-full md:max-w-screen-md 2xl:pl-16 2xl:pr-16 z-50 flex-shrink-0 sticky top-0 ">
    <div x-on:click="open" class=" cursor-pointer text-main-yellow font-semibold flex items-center ml-4">
        <x-contacto-amarillo.contacto-imgmenu>
            <p class="ml-4 xl:hidden">Menú</p>
        </x-contacto-amarillo.contacto-imgmenu>
    </div><!-- IZQ -->
    <x-contacto-amarillo.contacto-logo />

    <div id="menuEmplo" x-show="isOpen()" x-on:click.away="close" class="fixed top-0 left-0 w-full bg-black h-full sm:w-1/2 md:w-80">
        {{$slot}}
    </div>
</header>