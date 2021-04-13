<header x-data="menu2()" class="bg-black h-16 text-white xl:h-24 fixed z-40 w-full" >
    <x-employer.container>
        <div class="flex justify-between items-center ">
            <div x-on:click="open" class=" cursor-pointer text-main-yellow font-semibold flex items-center ml-4" id="botonHeader">
                <x-contacto-amarillo.contacto-imgmenu>
                    <p class="hidden ">Contacto Amarillo</p>
                    <!-- md:block -->
                </x-contacto-amarillo.contacto-imgmenu>
                <x-employer.logo/>
            </div><!-- IZQ -->
            
            <div id="menuEmplo" x-show="isOpen()" x-on:click.away="close" class="fixed top-0 left-0 w-full bg-black h-full sm:w-1/2 md:w-80">
                {{$slot}}
            </div>
            <div class="mr-4 lg:hidden">Logout</div>
            <x-employer.navTabletandMore>

            </x-employer.navTabletandMore>
        </div>
    </x-employer.container>
</header>