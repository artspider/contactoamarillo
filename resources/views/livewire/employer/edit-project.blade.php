<div>
    <div x-data="{ smodal: @entangle('smodal') }" x-cloak>
        <div x-show="smodal">
            <div
                class="fixed top-0 z-20  flex justify-center w-full h-screen items-center bg-gray-900 bg-opacity-40 antialiased">
                <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                <div @click.away="smodal = false"
                    class=" w-full md:w-1/2 border-solid border-4 border-main-yellow fixed">
                    <div class="modal--header bg-main-yellow px-4 py-3 flex items-center ">
                        <svg class="w-6 h-6 fill-current text-gray-700 mr-4" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M20 0v2h-18v18h-2v-20h20zm4 22.15l-1.85 1.85-8.906-9.196 1.85-1.85 8.906 9.196zm-6.718-5.902l-2.188-2.189-.745.746 2.188 2.189.745-.746zm.147 5.752h-11.429v-16h16v11.21l2 2.065v-15.275h-20v20h15.366l-1.937-2zm.86-11.987c.253.825.898 1.471 1.724 1.723-.825.252-1.471.897-1.724 1.723-.251-.826-.897-1.471-1.723-1.723.826-.252 1.472-.898 1.723-1.723zm-8.017 4.243c.333 1.095 1.191 1.951 2.285 2.285-1.094.334-1.952 1.191-2.285 2.285-.335-1.094-1.191-1.951-2.285-2.285 1.095-.334 1.951-1.19 2.285-2.285zm3.138-3.739c.177.584.635 1.041 1.219 1.219-.584.178-1.042.635-1.219 1.219-.179-.584-.636-1.041-1.22-1.219.584-.178 1.041-.635 1.22-1.219z" />
                        </svg>
                        <p class="text-gray-700 font-bold text-lg">Proyecto actualizado</p>
                    </div>
                    <div class="modal--body bg-white w-full flex p-4">
                        <p class="text-gray-700 font-semibold tracking-wider leading-relaxed">
                            ¡Tu proyecto ha sido actualizado! Regresa ahora al listado de proyectos.
                        </p>
                    </div>
                    <div class="modal--footer bg-gray-50 flex justify-end pr-4">
                        <a wire:click="sendMsgAndClose"
                            class="btn  text-white bg-gray-900 hover:bg-gray-700 rounded-lg px-4 py-2 my-3 "
                            href="">Aceptar</a>
                    </div>


                </div>
            </div>
        </div>
        <div class="pt-24"></div>
        <x-contacto-amarillo.contacto-container>
            <x-contacto-amarillo.contacto-card grid="col-span-6">
                <h2 class="text-2xl font-semibold mb-8">¿Qué proyecto quieres crear?</h2>
                <div class="flex flex-col justify-between">
                    <p class="text-base text-gray-800 font-semibold uppercase mr-4">
                        Define el proyecto que deseas crear; trata de especificar los detalles:
                    </p>
                    <div class="w-full border-2 border-gray-300">
                        <p class="mx-3 mt-2 text-2xl text-gray-400">Quiero:</p>
                        <textarea id="textA" wire:model="description"
                            class="w-full h-32 resize-none overflow-auto text-xl text-gray-800 focus:border-main-yellow border-none borderninguno focus:ring-0"
                            placeholder="llevar a cabo lo siguiente"></textarea>

                    </div>
                </div>
                <div class="my-4 text-sm font-semibold text-red-500">
                    @error('title') <span class="error">{{ $message }}</span> @enderror
                </div>

                <hr class="my-8 border border-gray-300">

                <div class="mt-4 flex flex-col lg:flex-row  justify-between lg:items-center">
                    <p class="uppercase">Categoria</p>
                    <select wire:model="categoriaId"
                        class="w-full lg:w-2/5 text-sm uppercase tracking-tight font-bold border-2 border-gray-300 focus:border-transparent focus:ring-2 focus:ring-yellow-300 rounded-lg py-1 px-3 mb-1 mt-2 lg:mt-0 outline-none "
                        name="clasificacion" id="clasificacion" placeholder="Selecciona una categoria">
                        {{-- <option value=" ">Selecciona una categoria</option> --}}
                        @isset($categorias)
                        @foreach ($categorias as $categoria)
                        @if ($catSelected==$categoria['id'])
                        <option selected value=" {{ $categoria['id'] }}  ">
                            {{ $categoria['nombre'] }}
                        </option>
                        @else
                        <option value=" {{ $categoria['id'] }}  ">
                            {{ $categoria['nombre'] }}
                        </option>
                        @endif

                        @endforeach
                        @endisset
                    </select>

                    <select wire:model="subcategoriaId"
                        class="w-full lg:w-2/5 text-sm uppercase font-bold border-2 border-gray-300 focus:ring-2 focus:border-transparent focus:ring-yellow-300 rounded-lg py-1 px-4 mb-1 mt-2 lg:mt-0"
                        name="clasificacion" id="clasificacion" placeholder="Selecciona una Subcategoria">
                        {{-- <option value=" ">Selecciona una subcategoria</option> --}}
                        @isset($subcategorias)
                        @foreach ($subcategorias as $subcategoria)
                        @if ($subcatSelected==$subcategoria['id'])
                        <option selected value=" {{ $subcategoria['id'] }}  ">
                            {{ $subcategoria['name'] }}
                        </option>
                        @else
                        <option value=" {{ $subcategoria['id'] }}  ">
                            {{ $subcategoria['name'] }}
                        </option>
                        @endif
                        @endforeach
                        @endisset
                    </select>
                </div>

                <hr class="my-8 border border-gray-300">
                <div class="mt-4 flex flex-col justify-between">
                    <p class="text-base text-gray-800 font-semibold uppercase mr-4">
                        Indica, ¿en cuanto tiempo deseas que se lleve a cabo el proyecto?
                    </p>
                    <div class="w-full lg:w-3/4 mt-2">
                        <div class="w-full">
                            <p class="text-sm font-bold mt-2">{{$delivery_time}} Días</p>
                            <input wire:model="delivery_time" type="range" min="1" max="90" class="slider" id="myRange">
                            <div class="flex justify-between text-sm font-bold text-gray-400">
                                <p>1</p>
                                <p>45</p>
                                <p>90</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-8 border border-gray-300">
                <div class="mt-4 flex flex-col justify-between">
                    <p class="text-base text-gray-800 font-semibold uppercase mr-4">
                        ¿Cuál es el presupuesto que destinarás a este proyecto?
                    </p>
                    <div class="mt-2 relative items-center border border-gray-900 focus:border-transparent w-1/4">
                        <p class="absolute top-3 left-5">$</p>
                        <input wire:model="budget"
                            class="pl-8 fit-input w-full border border-transparent focus:border-transparent 
              focus:ring-2 focus:ring-yellow-300 focus:outline-none focus:shadow-none focus:border-0 focus:bg-transparent" type="number"
                            min="5" name="" id="" placeholder="0" />
                        <p class="absolute top-3 right-10">MXN</p>
                    </div>

                    <hr class="my-8 border border-gray-300">
                    <div class=" text-right">
                        <x-button wire:click="saveproyect">Guardar cambios</x-button>
                    </div>


            </x-contacto-amarillo.contacto-card>
        </x-contacto-amarillo.contacto-container>
    </div>
</div>
@push('modals')
<script>
    Livewire.on('success', message => {
              thimsg = message;
              Toast.fire({
                  icon: 'success',
                  title: thimsg
              });
          });
  
          Livewire.on('error', message => {
              thimsg = message;
              Toast.fire({
                  icon: 'error',
                  title: thimsg
              });
          })
  
</script>
@endpush