<div id="heroIMG"
    class="h-96 bg-indigo-900 md:bg-transparent md:bg-bg1 bg-cover bg-no-repeat mt-16 xl:h-screen bg-center">
    <x-employer.container>
        <div class="flex items-center h-full">
            <div
                class="text-white w-full flex flex-col justify-around  md:w-3/6 lg:w-2/5 md:justify-center md:items-start bg-white rounded-xl p-9 shadow-lg">
                <div>
                    <h1 class="text-4xl font-bold text-black">Encuentra los servicios <span
                            class="font-italic">freelance</span> ideales para tu negocio</h1>
                </div>

                <div class="w-full xl:mt-10">
                    <div class="relative">
                        {{$slot}}
                    </div>
                    <button
                        class="w-full py-5 font-bold bg-black text-white mt-4 rounded hover:bg-gray-900">Buscar</button>
                </div>
            </div>
        </div>
    </x-employer.container>
</div>