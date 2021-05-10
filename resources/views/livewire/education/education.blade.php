<div>
    @if (session()->has('error'))
    <script>
        Toast.fire({
                icon: 'error',
                title: "{{ session('error') }}"
            })

    </script>
    @endif
    @if (session()->has('success'))
    <script>
        Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}"
            })

    </script>
    @endif

    {{-- <div class="" x-data="{educationListen(); isEditing: @entangle('showEditing')}"> --}}
    <div x-data="educationListen()" x-init="{isEditing:@entangle('showEditing')}">
        <!-- Educacion Add -->
        <div class="profile--educacion--edit p-4 bg-white rounded-lg shadow-lg" x-show="!isEditing ">
            <p class=" text-lg font-semibold">Educación</p>
            <div class="educacion--institucion my-4">
                <label class="block text-sm font-thin mb-1" for="Institución">Institución</label>
                <input wire:model.debounce.500ms="escuela" type="text" name="universidad"
                    class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
                    placeholder="Instituto o escuela de la que egresaste">
                </input>
                @error('escuela')
                <p class="text-red-500 text-sm italic ">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="educacion--nivel mb-4">
                <p class="text-sm font-thin mb-1">Título o carrera</p>
                <input wire:model.debounce.500ms="carrera" type="text" name="profesion"
                    class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
                    placeholder="Título o  profesión">
                </input>
                @error('carrera')
                <p class="text-red-500 text-sm italic ">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class=" flex justify-start w-full">
                <div class="educacion--fecha mb-4 w-2/3">
                    <p class="text-sm font-thin mb-1">Año de terminación</p>
                    <input wire:model.debounce.500ms="fecha_terminacion" type="text" name="aterminacion"
                        class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-full"
                        placeholder="El año en que egresaste, deben ser 4 dígitos">
                    </input>
                    @error('fecha_terminacion')
                    <p class="text-red-500 text-sm italic ">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class=" flex justify-start items-center ml-2">
                    <input class="appearance-none checked:border-transparent checked:bg-gray-700 " type="checkbox"
                        name="sigue_estudiando" id="" value="1" wire:model.debounce.500ms="sigue_estudiando">

                    <label for="sigue_estudiando" class="text-sm font-thin ml-4 mb-1">Aún sigo estudiando</label>
                </div>
                @error('sigue_estudiando')
                <p class="text-red-500 text-sm italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="mt-4 ">
                <!-- Guardar -->
                {{-- <button type="submit" wire:click="createCarrera" x-on:click="isAddEducation = false"
                    class=" btn text-sm text-white bg-gray-800 font-medium shadow-lg rounded-lg px-4 py-3 mr-4"
                    wire:loading.attr="createCarrera" wire:loading.class="bg-green-300">
                    Guardar
                </button> --}}
                <x-button wire:click="createCarrera" x-on:click="isAddEducation = false"
                    wire:loading.attr="createCarrera" wire:loading.class="bg-gray-700" class="mt-4">Guardar</x-button>
            </div>
        </div>

        <!-- Educacion Edit -->
        <div class="profile--educacion--edit p-4 bg-red-300 rounded-lg shadow-lg" x-show="isEditing">
            <p class=" text-lg font-semibold">Educación</p>
            <div class="educacion--institucion my-4">
                <label class="block text-sm font-thin mb-1" for="Institución">Institución</label>
                <input wire:model.debounce.500ms="escuela" type="text" name="universidad"
                    class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
                    placeholder="Instituto o escuela de la que egresaste">
                </input>
                @error('escuela')
                <p class="text-red-100 text-sm italic ">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="educacion--nivel mb-4">
                <p class="text-sm font-thin mb-1">Título o carrera</p>
                <input wire:model.debounce.500ms="carrera" type="text" name="profesion"
                    class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
                    placeholder="Título o  profesión">
                </input>
                @error('carrera')
                <p class="text-red-100 text-sm italic ">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class=" flex justify-start w-full">
                <div class="educacion--fecha mb-4 w-2/3">
                    <p class="text-sm font-thin mb-1">Año de terminación</p>
                    <input wire:model.debounce.500ms="fecha_terminacion" type="text" name="aterminacion"
                        class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-full"
                        placeholder="El año en que egresaste, deben ser 4 dígitos">
                    </input>
                    @error('fecha_terminacion')
                    <p class="text-red-100 text-sm italic ">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <div class=" flex justify-start items-center ml-2">
                    <input class="appearance-none checked:border-transparent checked:bg-gray-700 " type="checkbox"
                        name="sigue_estudiando" id="" value="1" wire:model.debounce.500ms="sigue_estudiando">

                    <label for="sigue_estudiando" class="text-sm font-thin ml-4 mb-1">Aún sigo estudiando</label>
                </div>
                @error('sigue_estudiando')
                <p class="text-red-100 text-sm italic mt-4">
                    {{ $message }}
                </p>
                @enderror
            </div>

            <div class="flex">
                <div class="mt-4 ">
                    <!-- Boton Modificar -->
                    {{-- x-on:click="isEditing = false" --}}
                    <button type="submit" wire:click="educacionUpdate"
                        class=" btn text-sm text-white bg-green-500 font-medium shadow-lg rounded-lg px-4 py-3 mr-4"
                        wire:loading.attr="disabled" wire:loading.class="bg-green-300">
                        Modificar
                    </button>
                </div>

                <div class="mt-4 ">
                    <!-- Boton Cancelar -->
                    <button type="submit" x-on:click="closeEdit()" wire:click="$emitUp('doresets')"
                        class=" btn text-sm text-white bg-red-500 font-medium shadow-lg rounded-lg px-4 py-3 mr-4"
                        wire:loading.attr="disabled" wire:loading.class="bg-green-300">
                        Cancelar
                    </button>
                </div>
            </div>



        </div>

        <!-- Educacion Show -->
        <div class="profile--educacion--show bg-white rounded-lg shadow-lg py-4 mt-8">
            <div class="educacion--group mt-2 ml-4 ">
                @empty($educacion)
                <p class="text-base">No has añadido ningun título</p>
                @endempty
                @if (!empty($educacion))
                @foreach ($educacion as $key => $item)
                <!-- Show Escuelas -->
                <div class="show">
                    <div class="educacion--institucion text-base font-semibold pb-1 ">
                        {{ $item->escuela }}
                    </div>
                    <div class="educacion--nivel text-sm pb-1">
                        {{ $item->carrera }}
                    </div>
                    <div class="educacion--fecha flex justify-between pb-4">
                        <p class="text-sm">{{ $item->fecha_terminacion }}</p>
                        <div class="botonera ">
                            <!-- Boton Eliminar carrera -->
                            {{-- wire:click="educacionDelete( {{ $item->id }} )" --}}
                            <button x-on:click="deleteItem({{ $item->id }})" class="btn mr-4 " x-show="!isEditing">
                                <svg class="text-red-500 h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M3 8v16h18v-16h-18zm5 12c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm4-15.375l-.409 1.958-19.591-4.099.409-1.958 5.528 1.099c.881.185 1.82-.742 2.004-1.625l5.204 1.086c-.184.882.307 2.107 1.189 2.291l5.666 1.248z" />
                                </svg>
                            </button>
                            <!-- Boton Editar carrera -->
                            <button wire:click="toEditForm( {{ $item->id }} )" class="btn mr-4" x-on:click="openEdit()"
                                x-show="!isEditing">
                                <svg class=" w-4 h-5 fill-current hover:text-gray-500 " height="512"
                                    viewBox="0 0 488.471 488.471" width="512" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M288.674 62.363L351.035.002l137.362 137.361-62.361 62.361zM245.547 105.541L0 351.088V488.47h137.382L382.93 242.923z" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>

    </div>
</div>
@push('modals')
@endpush