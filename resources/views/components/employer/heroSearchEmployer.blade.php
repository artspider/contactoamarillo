<div>
    <div class="bg-indigo-900 h-460 w-full mt-16 lg:h-64 lg:bg-black lg:bg-cover lg:bg-no-repeat bg-center">
        <x-employer.container>
            {{$slot}}
        </x-employer.container>
    </div>

    <x-employer.container>
        <div id="divDeleteWhenSearch" class="flex flex-col items-center justify-center md:flex-row">
            <!-- <img class="w-40 h-40" src="../../../../public/img/ud_designer.svg" alt="Error en la ruta al parecer"> -->
            {{$results}}
            <img class="w-96 h-auto 2xl:w-900" src="https://i.ibb.co/VqFxh71/13.png" alt="">
            <h1 class="font-bold text-lg text-center sm:text-xl xl:w-96 xl:text-2xl 2xl:text-3xl">Tenemos muchos
                expertos esperando por tu idea para volverla realidad!</h1>
        </div>
    </x-employer.container>
</div>