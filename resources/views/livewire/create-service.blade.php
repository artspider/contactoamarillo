<div>
  <!-- grid grid-cols-1 lg:grid-cols-8 gap-4 -->
  <x-contacto-amarillo.contacto-container>
    <x-contacto-amarillo.contacto-card grid="col-span-5">
      <div class="flex justify-between">
        <p class="text-base text-gray-800 font-semibold uppercase mr-4">
          Titulo del servicio
        </p>
        <div class="border-2 border-gray-800">
          <p class="mx-3 mt-2 text-2xl text-gray-400">Yo voy a:</p>
          <textarea
            class="border-none resize-none overflow-auto text-xl text-gray-800"
            name="title"
            id=""
            cols="43"
            rows="5"
            placeholder="a hacer algo en lo que realmente soy bueno"
          ></textarea>
        </div>
      </div>

      <div class="mt-4 flex justify-between items-center">
        <p class="w-1/12">Categoria</p>
        <select
          wire:model="categoriaId"
          class="w-5/12 font-bold border border-gray-300 rounded-lg py-1 px-4 mb-1"
          name="clasificacion"
          id="clasificacion"
          placeholder="Selecciona una categoria"
        >
          <option value=" ">Selecciona una categoria</option>
          @isset($categorias) @foreach ($categorias as $categoria)
          <option value=" {{ $categoria['id'] }}  ">
            {{ $categoria['nombre'] }}
          </option>
          @endforeach @endisset
        </select>

        <select
          wire:model="subcategoriaId"
          class="font-bold w-5/12 focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mb-1"
          name="clasificacion"
          id="clasificacion"
          placeholder="Selecciona una Subcategoria"
        >
          <option value=" ">Selecciona una subcategoria</option>
          @isset($subcategorias) @foreach ($subcategorias as $subcategoria)
          <option value=" {{ $subcategoria['id'] }}  ">
            {{ $subcategoria['name'] }}
          </option>
          @endforeach @endisset
        </select>
      </div>

      @isset($tags)
      <div class="my-4">
        @foreach($tags as $tag)
        <x-contacto-amarillo.contacto-pill class="mb-2 cursor-pointer">
          {{ $tag['name'] }}
        </x-contacto-amarillo.contacto-pill>
        @endforeach
      </div>
      @endisset
    </x-contacto-amarillo.contacto-card>

    <div class="bg-blue-100 rounded-md shadow-md h-32 col-span-2 relative">
      <div
        class="w-8 h-8 bg-blue-100 transform rotate-45 absolute top-2 -left-1"
      ></div>
    </div>

    <x-contacto-amarillo.contacto-card grid="col-span-5">
      <h2 class="text-xl font-semibold mb-8">Precio, tiempo y entregables</h2>
      <div class="flex items-center mb-4">
        <p class="text-base text-gray-800 font-semibold uppercase mr-4 w-1/3">
          Tiempo de entrega
        </p>
        <select class="w-2/3" name="" id="">
          <option value=" ">Tiempo de entrega</option>
        </select>
      </div>
      <div class="flex items-top mb-4">
        <p class="text-base text-gray-800 font-semibold uppercase mr-4 w-1/3">
          Entregables
        </p>
        <div class="w-2/3">
          <textarea
            class="w-full resize-none focus:bg-yellow-50 focus:ring-2 focus:ring-yellow-300 focus:outline-none focus:shadow-none focus:border-0 focus:bg-transparent"
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Puede ser el sitioweb, portafolio, documento de texto, imagenes psd, etc"
          ></textarea>
        </div>
      </div>
      <div class="flex items-center">
        <p class="text-base text-gray-800 font-semibold uppercase mr-4 w-1/3">
          Precio
        </p>
        <input
          class="fit-input w-2/3"
          type="number"
          step="5"
          min="5"
          max="10000"
          value=""
          placeholder="$"
        />
      </div>
    </x-contacto-amarillo.contacto-card>

    <x-contacto-amarillo.contacto-card grid="col-span-5">
      <h2 class="text-xl font-semibold mb-8">Descripción del servicio</h2>
      <div class="mb-4">
        <p class="text-base text-gray-800 font-semibold uppercase mb-4">
          Breve descripción del servicio a ofrecer
        </p>
        <textarea id="mytextarea">Hello, World!</textarea>
      </div>
    </x-contacto-amarillo.contacto-card>

    <x-contacto-amarillo.contacto-card grid="col-span-5">
      <h2 class="text-xl font-semibold">Crea la galeria de tu servicio</h2>
      <p class="text-sm text-gray-600 mb-8">
        Agrega contenido único, quiza parte de tu portafolio, y muestra lo que
        puedes ofrecer
      </p>
      <div class="flex items-center bg-gray-200 rounded-sm shadow-md p-6">
        <svg
          class="w-10 h-10 fill-current text-gray-800 mr-4"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
        >
          <path
            d="M12 1l-12 22h24l-12-22zm-1 8h2v7h-2v-7zm1 11.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z"
          />
        </svg>
        <p class="tracking-wide leading-relaxed text-justify">
          <span class="font-bold">¡Importante!</span> Asegurate que el contenido
          sea de tu autoria o que el autor te haya permitido usarlo, para evitar
          demandas por derechos de autor.
        </p>
      </div>
    </x-contacto-amarillo.contacto-card>
  </x-contacto-amarillo.contacto-container>
</div>
