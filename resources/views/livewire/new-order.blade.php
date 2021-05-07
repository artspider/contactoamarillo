<div>
  <!-- Contrato Container -->
  <div class="profile__body  block mt-20 lg:mt-32 mx-auto">

    <x-contacto-amarillo.contacto-container>
      <div class=" col-span-8 bg-white shadow-lg">
        <!-- Header -->
        <div class="card__card--header  flex flex-col justify-center px-8 py-16">
          <h2 class="ml-4 text-3xl font-bold text-white">Personaliza tu pedido</h2>
          <p class="ml-4 text-lg text-white">Permitenos recavar información sobre el proyecto que el experto
            desarrollará</p>
        </div>

        <!-- Body -->
        <div class="card__card--body mt-8 mx-12 flex flex-col">
          <!-- Titulo -->
          <div x-data="{showtitulo:false}">
            <div x-on:click="showtitulo = true" x-bind:class="{'hidden' : showtitulo}"
              class="flex items-center cursor-pointer">
              <p class="xl:text-2xl capitalize font-semibold hover:text-gray-500  w-max-content">
                @isset($title)
                {{ $title }}
                @endisset
                @empty($title)
                Sin título
                @endempty
              </p>
              <svg class="ml-2 w-4 h-4 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path
                  d="M18.363 8.464l1.433 1.431-12.67 12.669-7.125 1.436 1.439-7.127 12.665-12.668 1.431 1.431-12.255 12.224-.726 3.584 3.584-.723 12.224-12.257zm-.056-8.464l-2.815 2.817 5.691 5.692 2.817-2.821-5.693-5.688zm-12.318 18.718l11.313-11.316-.705-.707-11.313 11.314.705.709z" />
              </svg>
            </div>
            <div x-show="showtitulo" x-on:click.away="showtitulo=false">
              <input wire:model.lazy="title" x-on:keydown.esc="showtitulo=false" x-on:keydown.enter="showtitulo=false"
                type="text" class="block pl-2 w-3/4 h-12 rounded-lg mb-3 border-gray-600 border-solid border-2"
                placeholder="Escribe el titulo del proyecto">
            </div>
            @error('title')
            <p class="text-red-500 italic mb-2">
              {{ $message }}
            </p>
            @enderror
          </div>
          <!-- Termina Titulo -->

          <!-- Experto -->
          <div class="md:flex items-center my-4">
            <p class="my-2 xl:text-lg inline-flex text-gray-500">
              Encargado a: <span class="mx-4 font-semibold text-gray-900">{{ $this->expert->nombre }}
              </span>
            </p>
            <div class="flex items-center">
              <p class="xl:text-lg  text-gray-500">| Fecha de entrega:</p>
              <!-- Fecha de entrega -->
              <p class="ml-4 xl:text-lg font-semibold text-gray-900">{{$dias->format('d-m-Y')}}</p>
            </div>

            @error('fecha_entrega')
            <p class="text-red-500 italic mb-2">
              {{ $message }}
            </p>
            @enderror
          </div>
          <!-- Termina Experto -->

          <div class="mb-4">
            <p class=" xl:text-lg inline-flex text-gray-500">El compromiso del experto es: </p>
            <p class="xl:text-lg font-semibold text-gray-900">{{$service->titulo}}</p>
          </div>

          <div class="mb-4">
            <p class=" xl:text-lg inline-flex text-gray-500">Este servicio incluye: </p>
            <p class="xl:text-lg font-semibold text-gray-900">{{$service->producto_a_entregar}}</p>
          </div>

          <hr class="mt-2 mb-6 border-t-2 border-solid border-gray-400 ">
          <div x-data="{editdescripcion:false}">
            <div class="flex items-center">
              <div x-on:click="editdescripcion=true" class="flex items-center cursor-pointer">
                <p class="my-2  xl:text-xl font-semibold">Descripción</p>
                <svg class="ml-2 w-4 h-4 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24">
                  <path
                    d="M18.363 8.464l1.433 1.431-12.67 12.669-7.125 1.436 1.439-7.127 12.665-12.668 1.431 1.431-12.255 12.224-.726 3.584 3.584-.723 12.224-12.257zm-.056-8.464l-2.815 2.817 5.691 5.692 2.817-2.821-5.693-5.688zm-12.318 18.718l11.313-11.316-.705-.707-11.313 11.314.705.709z" />
                </svg>
              </div>
            </div>
            <p x-show="!editdescripcion" class=" w-3/4 mb-1 text-gray-500 font-semibold">
              @isset($description)
              {{ $description }}
              @endisset
              @empty($description)
              Describe los detalles del servicio, incluyendo los requisitos.
              @endempty
            </p>
            <div x-show="editdescripcion ">
              <p class="ml-2 text-red-500 font-semibold">Presiona &lt;esc&gt; para terminar de editar</p>
              <textarea wire:model.lazy="description" x-on:click.away="editdescripcion = false"
                x-on:keydown.escape="editdescripcion = false"
                class="block pl-2 w-3/4 h-40 rounded-lg  border-gray-600 border-solid border-2"
                placeholder="Escribe la descripción del proyecto">
              </textarea>
            </div>
            @error('description')
            <p class="text-red-500 italic mt-0 mb-3">
              {{ $message }}
            </p>
            @enderror
          </div>

          <div class="flex justify-end botonera mb-6">
            <button wire:click="createOrder"
              class="btn py-4 px-8 bg-gray-800 text-white hover:bg-gray-700 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">

              Enviar
            </button>
          </div>

        </div>
    </x-contacto-amarillo.contacto-container>
  </div>
  <!-- Termina Contrato Container -->
</div>