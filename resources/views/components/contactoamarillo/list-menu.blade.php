<!-- Menu lista -->
<nav class="menu__lista md:w-full md:h-full md:absolute md:right-0 lg:flex lg:justify-end lg:items-center"
    @click.away="isOpen = false" x-show.transition="true" :class="{  'block shadow-3xl': isOpen,'hidden' : !isOpen }">
    <ul
        class="flex flex-col lg:h-full lg:flex-row lg:items-center lg:justify-end text-white font-semibold ml-6 lg:mr-4 pt-10 pb-6 lg:pt-0 lg:pb-0">
        <x-contactoamarillo.nav-link route="/">Home</x-contactoamarillo.nav-link>
        <x-contactoamarillo.nav-link route="#como__funciona">¿Cómo funciona?</x-contactoamarillo.x-nav-link>
            <x-contactoamarillo.nav-link route="#nuestros__expertos">Nuestros expertos</x-contactoamarillo.nav-link>
            <x-contactoamarillo.nav-link route="#registro">Registrate</x-contactoamarillo.nav-link>
            <x-contactoamarillo.nav-link route="/login"
                class="ml-1 md:ml-2 md:px-3 bg-red-700 text-white hover:bg-red-500 hover:text-white">
                Ingresa</x-contactoamarillo.nav-link>
    </ul>
</nav>
<!-- Termina Menu lista -->