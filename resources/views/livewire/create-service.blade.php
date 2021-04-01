<div>
    <!-- grid grid-cols-1 lg:grid-cols-8 gap-4 -->
    <x-contacto-amarillo.contacto-container>
        @if ($step == 1)
            <div class="flex justify-center col-span-7 text-base font-bold mb-8">
                <p class="mr-10">
                    <span class="bg-main-yellow rounded-full py-1 px-3">1</span>
                    Overview
                </p>
                <p class="mr-10">
                    <span class="bg-black text-light-gray rounded-full py-1 px-3">2</span>
                    Precio
                </p>
                <p class="mr-10">
                    <span class="bg-black text-light-gray rounded-full py-1 px-3">3</span>
                    Descripción
                </p>
                <p class="mr-10">
                    <span class="bg-black text-light-gray rounded-full py-1 px-3">4</span>
                    Galería
                </p>
                <p>
                    <span class="bg-black text-light-gray rounded-full py-1 px-3">5</span>
                    Publicar
                </p>
            </div>
            <x-contacto-amarillo.contacto-card grid="col-span-5">
                <h2 class="text-xl font-semibold mb-8">Datos generales</h2>
                <div class="flex justify-between">
                    <p class="text-base text-gray-800 font-semibold uppercase mr-4">
                        Titulo
                    </p>
                    <div class="w-10/12 border-2 border-gray-300">
                        <p class="mx-3 mt-2 text-2xl text-gray-400">Yo voy a:</p>
                        <textarea wire:model="titulo"
                            class="border-none resize-none overflow-auto text-xl text-gray-800" name="title" id=""
                            cols="43" rows="5" placeholder="hacer algo en lo que realmente soy bueno"></textarea>
                    </div>
                </div>
                <div class="my-4 text-sm font-semibold text-red-500">
                    @error('titulo') <span class="error">{{ $message }}</span> @enderror
                </div>

                <div class="mt-4 flex justify-between items-center">
                    <p class="uppercase">Categoria</p>
                    <select wire:model="categoriaId"
                        class="w-2/5 text-sm uppercase tracking-tight font-bold border-2 border-gray-300 focus:ring-2 focus:ring-yellow-300 rounded-lg py-1 px-3 mb-1"
                        name="clasificacion" id="clasificacion" placeholder="Selecciona una categoria">
                        <option value=" ">Selecciona una categoria</option>
                        @isset($categorias)
                            @foreach ($categorias as $categoria)
                                <option value=" {{ $categoria['id'] }}  ">
                                    {{ $categoria['nombre'] }}
                                </option>
                            @endforeach
                        @endisset
                    </select>

                    <select wire:model="subcategoriaId"
                        class="w-2/5 text-sm uppercase font-bold border-2 border-gray-300 focus:ring-2 focus:ring-yellow-300 rounded-lg py-1 px-4 mb-1"
                        name="clasificacion" id="clasificacion" placeholder="Selecciona una Subcategoria">
                        <option value=" ">Selecciona una subcategoria</option>
                        @isset($subcategorias) @foreach ($subcategorias as $subcategoria)
                            <option value=" {{ $subcategoria['id'] }}  ">
                                {{ $subcategoria['name'] }}
                            </option>
                        @endforeach @endisset
                    </select>
                </div>

                @isset($servicetags)
                    <p class="pt-4">Selecciona hasta 5 etiquetas</p>
                    <div x-data="ServiceTagListen()" class="my-4">
                        @foreach ($servicetags as $tag)
                            <x-contacto-amarillo.contacto-pill wire:ignore id="tag{{ $tag['id'] }}"
                                x-on:click="togleTagClass({{ $tag['id'] }},event)"
                                class="mb-2 cursor-pointer hover:bg-gray-500">
                                {{ $tag['name'] }}
                            </x-contacto-amarillo.contacto-pill>
                        @endforeach
                    </div>
                    <div class="my-4 text-sm font-semibold text-red-500">
                        @error('arraytags') <span class=" error">{{ $message }}</span> @enderror
                    </div>
                @endisset
                <div class="flex justify-end">
                    <x-button wire:click="saveOverview" class="mt-4">Guardar & Contnuar</x-button>
                </div>
            </x-contacto-amarillo.contacto-card>

            <div class="bg-blue-100 rounded-md shadow-md h-32 col-span-2 relative">
                <div class="w-8 h-8 bg-blue-100 transform rotate-45 absolute top-2 -left-1"></div>
            </div>
        @endif

        @if ($step == 2)
            <div class="flex justify-center col-span-7 text-base font-bold mb-8">
                <p class="mr-10">
                    <span class="bg-black text-light-gray rounded-full py-1 px-3">1</span>
                    Overview
                </p>
                <p class="mr-10">
                    <span class=" bg-main-yellow rounded-full py-1 px-3">2</span>
                    Precio
                </p>
                <p class="mr-10">
                    <span class="bg-black text-light-gray rounded-full py-1 px-3">3</span>
                    Descripción
                </p>
                <p class="mr-10">
                    <span class="bg-black text-light-gray rounded-full py-1 px-3">4</span>
                    Galería
                </p>
                <p>
                    <span class="bg-black text-light-gray rounded-full py-1 px-3">5</span>
                    Publicar
                </p>
            </div>
            <x-contacto-amarillo.contacto-card grid="col-span-5">
                <h2 class="text-xl font-semibold mb-8">Precio, tiempo y entregables</h2>
                <div class="flex items-center mb-4">
                    <p class="text-base text-gray-800 font-semibold uppercase mr-4 w-1/3">
                        Tiempo de entrega
                    </p>
                    <select wire:model="tiempoDeEntrega"
                        class="w-2/3 text-sm uppercase font-bold border-2 border-gray-300 focus:ring-2 focus:ring-yellow-300 rounded-lg py-1 px-4 mb-1"
                        name="" id="">
                        <option value=" ">Tiempo de entrega</option>
                        @isset($tiempoDeEntregaData) @foreach ($tiempoDeEntregaData as $tiempoDeEntrega)
                            <option value=" {{ $tiempoDeEntrega }}  ">
                                {{ $tiempoDeEntrega }}
                            </option>
                        @endforeach @endisset
                    </select>

                </div>
                <div class="my-4 text-sm font-semibold text-red-500">
                    @error('tiempoDeEntrega') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex items-top mb-4">
                    <p class="text-base text-gray-800 font-semibold uppercase mr-4 w-1/3">
                        Entregables
                    </p>
                    <div class="w-2/3">
                        <textarea wire:model="entregables"
                            class="w-full resize-none focus:ring-2 focus:ring-yellow-300 focus:outline-none focus:shadow-none focus:border-0 focus:bg-transparent"
                            name="" id="" cols="30" rows="10"
                            placeholder="Puede ser el sitioweb, portafolio, documento de texto, imagenes psd, etc"></textarea>
                    </div>
                </div>
                <div class="my-4 text-sm font-semibold text-red-500">
                    @error('entregables') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex items-center">
                    <p class="text-base text-gray-800 font-semibold uppercase mr-4 w-1/3">
                        Precio
                    </p>
                    <input wire:model="precio" class="fit-input w-2/3" type="number" step="5" min="5" max="10000"
                        value="" placeholder="$" />
                </div>
                <div class="my-4 text-sm font-semibold text-red-500">
                    @error('precio') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-end">
                    <x-button wire:click="savePrecio" class="mt-4">Guardar & Continuar</x-button>
                </div>
            </x-contacto-amarillo.contacto-card>
            <div class="bg-blue-100 rounded-md shadow-md h-32 col-span-2 relative">
                <div class="w-8 h-8 bg-blue-100 transform rotate-45 absolute top-2 -left-1"></div>
            </div>
        @endif

        @if ($step == 3)
            <x-contacto-amarillo.contacto-card grid="col-span-5">
                <h2 class="text-xl font-semibold mb-8">Descripción del servicio</h2>
                <div class="mb-4">
                    <p class="text-base text-gray-800 font-semibold uppercase mb-4">
                        Breve descripción del servicio a ofrecer
                    </p>
                    <textarea wire:model="descripcion" id="mytextarea"
                        placeholder="Puedes describir con detalles tu servicio"></textarea>
                </div>
                <div class="my-4 text-sm font-semibold text-red-500">
                    @error('descripcion') <span class="error">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-between">
                    <x-button wire:click="saveDescripcionBack" class="mt-4 bg-green-500">Atrás</x-button>
                    <x-button wire:click="saveDescripcion" class="mt-4">Guardar & Continuar</x-button>
                </div>
            </x-contacto-amarillo.contacto-card>
            <div class="bg-blue-100 rounded-md shadow-md h-32 col-span-2 relative">
                <div class="w-8 h-8 bg-blue-100 transform rotate-45 absolute top-2 -left-1"></div>
            </div>
        @endif

        @if ($step == 4)
            <x-contacto-amarillo.contacto-card grid="col-span-5">
                <h2 class="text-xl font-semibold">Crea la galeria de tu servicio</h2>
                <p class="text-sm text-gray-600 mb-8">
                    Agrega contenido único, quiza parte de tu portafolio, y muestra lo que
                    puedes ofrecer
                </p>
                <div class="flex items-center bg-gray-200 rounded-sm shadow-md p-6">
                    <svg class="w-10 h-10 fill-current text-gray-800 mr-4" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                            d="M12 1l-12 22h24l-12-22zm-1 8h2v7h-2v-7zm1 11.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z" />
                    </svg>
                    <p class="tracking-wide leading-relaxed text-justify">
                        <span class="font-bold">¡Importante!</span> Asegurate que el contenido
                        sea de tu autoria o que el autor te haya permitido usarlo, para evitar
                        demandas por derechos de autor.
                    </p>
                </div>

                <hr />
                <div class="bg-red-400 bg-transparent mt-8">
                    <form class="dropzone" action="/submitfoto" wire:submit.prevent="submitFoto" id="dropzoneimg">
                        @csrf
                    </form>
                </div>
                <div class="my-4 text-sm font-semibold text-red-500">
                    @error('arraytags') <span class=" error">{{ $message }}</span> @enderror
                </div>
                <div class="flex justify-end">
                    <x-button wire:click="saveIamgenesBack" class="mt-4 bg-green-500">Atrás</x-button>
                    <x-button wire:click="saveIamgenes" class="mt-4">Guardar & finalizar</x-button>
                </div>
            </x-contacto-amarillo.contacto-card>
            <div class="bg-blue-100 rounded-md shadow-md h-32 col-span-2 relative">
                <div class="w-8 h-8 bg-blue-100 transform rotate-45 absolute top-2 -left-1"></div>
            </div>
        @endif

    </x-contacto-amarillo.contacto-container>
</div>

@push('modals')

    <script>
        Window.Dropzone.options.dropzoneimg = {}

    </script>
@endpush
