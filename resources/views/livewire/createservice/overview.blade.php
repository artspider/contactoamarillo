<div>
    <x-contacto-amarillo.contacto-card grid="col-span-5">
        <h2 class="text-xl font-semibold mb-8">Datos generales</h2>
        <div class="flex justify-between">
            <p class="text-base text-gray-800 font-semibold uppercase mr-4">
                Titulo
            </p>
            <div class="w-10/12 border-2 border-gray-300">
                <p class="mx-3 mt-2 text-2xl text-gray-400">Yo voy a:</p>
                <textarea wire:model="titulo" class="border-none resize-none overflow-auto text-xl text-gray-800"
                    name="title" id="" cols="43" rows="5"
                    placeholder="hacer algo en lo que realmente soy bueno"></textarea>
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
                x-on:click="togleTagClass($event.currentTarget.getAttribute('pk'),event)" pk="{{ $tag['id'] }}"
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
            <x-button wire:click="saveOverview" class="mt-4">Guardar & Continuar</x-button>
        </div>
    </x-contacto-amarillo.contacto-card>
</div>
@push('modals')
<script>
    Livewire.on('subcatselected', idinview => {
            thisid = idinview;
            elementId = "tag" + idinview;
            console.log("emite");
            togleWireClass(thisid, elementId);
        });

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