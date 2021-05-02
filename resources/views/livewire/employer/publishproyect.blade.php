<div>
  <div class="pt-24"></div>
  <x-contacto-amarillo.contacto-container>
    <x-contacto-amarillo.contacto-card grid="col-span-6">
      <h2 class="text-2xl font-semibold mb-8">¿Qué proyecto quieres crear?</h2>
      <div class="flex flex-col justify-between">
        <p class="text-base text-gray-800 font-semibold uppercase mr-4">
          Define el proyecto que deseas crear; trata de especificar los detalles:
        </p>
        <div class="w-full border-2 border-gray-300">
          <p class="mx-3 mt-2 text-2xl text-gray-400">Quiero que:</p>
          <textarea id="textA" wire:model="description"
            class="w-full h-32 resize-none overflow-auto text-xl text-gray-800 focus:border-main-yellow border-none borderninguno focus:ring-0"
            placeholder="me ayudes a llevar a cabo lo siguiente"></textarea>

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
          class="w-full lg:w-2/5 text-sm uppercase font-bold border-2 border-gray-300 focus:ring-2 focus:border-transparent focus:ring-yellow-300 rounded-lg py-1 px-4 mb-1 mt-2 lg:mt-0"
          name="clasificacion" id="clasificacion" placeholder="Selecciona una Subcategoria">
          <option value=" ">Selecciona una subcategoria</option>
          @isset($subcategorias) @foreach ($subcategorias as $subcategoria)
          <option value=" {{ $subcategoria['id'] }}  ">
            {{ $subcategoria['name'] }}
          </option>
          @endforeach @endisset
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
        <input wire:model="budget"
          class="w-1/4 mt-2 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
          type="number" min="5" name="" id="" placeholder="$dolares">
      </div>

      <hr class="my-8 border border-gray-300">
      <div class=" text-right">
        <x-button wire:click="saveproyect">Crear proyecto</x-button>
      </div>


    </x-contacto-amarillo.contacto-card>
  </x-contacto-amarillo.contacto-container>
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