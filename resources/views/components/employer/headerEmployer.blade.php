<header x-data="menu()" x-cloak class=" bg-black h-16 text-white xl:h-24 fixed z-40 w-full">
  <x-employer.container>
    <div class="flex justify-between items-center ">

      <!-- Icono Menu -->
      <div x-on:click="open" class="flex lg:hidden cursor-pointer text-main-yellow font-semibold  items-center ml-4">
        <x-contacto-amarillo.contacto-imgmenu>
          <p class="ml-4 2xl:hidden">Menú</p>
        </x-contacto-amarillo.contacto-imgmenu>
      </div>
      <!-- Termina Icono Menu -->

      <x-contacto-amarillo.contacto-logo />
      {{--
      <div x-on:click="open" class=" cursor-pointer text-main-yellow font-semibold flex items-center ml-4"
        id="botonHeader">
        <x-contacto-amarillo.contacto-imgmenu>
          <p class="hidden ">Contacto Amarillo</p>
          <!-- md:block -->
        </x-contacto-amarillo.contacto-imgmenu>
        <x-employer.logo />
      </div><!-- IZQ --> --}}

      <!-- Menu -->
      <div x-show="isOpen()" x-on:click.away="close" class="fixed top-0 left-0 w-full bg-black h-full md:w-1/5 ">
        {{$slot}}
      </div>
      <!-- Termina Menu -->


      <div class="mr-4 lg:hidden">Logout</div>
      <x-employer.navTabletandMore>
      </x-employer.navTabletandMore>
    </div>
  </x-employer.container>
</header>