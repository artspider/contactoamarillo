<header x-data="menu()" x-cloak class=" bg-black h-16 text-white xl:h-24 fixed z-40 w-full">
    <x-employer.container>
        <div class="flex justify-between items-center ">
            <div x-on:click="open" class=" cursor-pointer text-main-yellow font-semibold flex items-center ml-4"
                id="botonHeader">
                <x-contacto-amarillo.contacto-imgmenu>
                    <p class="hidden ">Contacto Amarillo</p>
                    <!-- md:block -->
                </x-contacto-amarillo.contacto-imgmenu>
                <x-employer.logo />
            </div><!-- IZQ -->


            <div x-show="show" x-on:click.away="close"
                class="h-full w-full bg-gray-800 flex flex-col text-white fixed top-16 xl:top-24 left-0 z-40 sm:w-1/2 md:w-80  shadow-md">
                <div class="h-1/4 bg-gray-800 flex justify-center items-center relative">
                    {{$slot}}
                </div>
                <x-employer.botMenu />
            </div>
            <div class="mr-4 lg:hidden">Logout</div>
            <x-employer.navTabletandMore>
            </x-employer.navTabletandMore>
        </div>
    </x-employer.container>
</header>