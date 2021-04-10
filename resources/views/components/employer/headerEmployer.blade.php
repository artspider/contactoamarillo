<header class="bg-black h-16 text-white xl:h-24 fixed z-40 w-full">
    <x-employer.container>
        <div class="flex justify-between items-center ">
            <div x-on:click="open" class=" cursor-pointer text-main-yellow font-semibold flex items-center ml-4">
                <x-contacto-amarillo.contacto-imgmenu>
                    <p class="hidden ">Contacto Amarillo</p>
                    <!-- md:block -->
                </x-contacto-amarillo.contacto-imgmenu>
                <x-employer.logo/>
            </div><!-- IZQ -->
            
            <div class="mr-4 md:hidden">Logout</div>
            <x-employer.navTabletandMore>

            </x-employer.navTabletandMore>
        </div>
    </x-employer.container>
</header>