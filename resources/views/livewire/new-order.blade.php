<div>
  <div x-data="{ smodal: @entangle('smodal') }" x-cloak>

    <div x-show="smodal">
      <div
        class="fixed top-0 z-20  flex justify-center w-full h-screen items-center bg-gray-900 bg-opacity-40 antialiased">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div @click.away="smodal = false" class=" w-full md:w-1/2 border-solid border-4 border-main-yellow fixed">
          <div class="modal--header bg-main-yellow px-4 py-3 flex items-center ">
            <svg class="w-6 h-6 fill-current text-gray-700 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M20 0v2h-18v18h-2v-20h20zm4 22.15l-1.85 1.85-8.906-9.196 1.85-1.85 8.906 9.196zm-6.718-5.902l-2.188-2.189-.745.746 2.188 2.189.745-.746zm.147 5.752h-11.429v-16h16v11.21l2 2.065v-15.275h-20v20h15.366l-1.937-2zm.86-11.987c.253.825.898 1.471 1.724 1.723-.825.252-1.471.897-1.724 1.723-.251-.826-.897-1.471-1.723-1.723.826-.252 1.472-.898 1.723-1.723zm-8.017 4.243c.333 1.095 1.191 1.951 2.285 2.285-1.094.334-1.952 1.191-2.285 2.285-.335-1.094-1.191-1.951-2.285-2.285 1.095-.334 1.951-1.19 2.285-2.285zm3.138-3.739c.177.584.635 1.041 1.219 1.219-.584.178-1.042.635-1.219 1.219-.179-.584-.636-1.041-1.22-1.219.584-.178 1.041-.635 1.22-1.219z" />
            </svg>
            <p class="text-gray-700 font-bold text-lg">Orden creada</p>
          </div>
          <div class="modal--body bg-white w-full flex p-4">
            <p class="text-gray-700 font-semibold tracking-wider leading-relaxed">Tu orden, junto con los detalles de la
              misma, ha sido
              creada y almacenada. Se ha notificado
              al experto de la nueva orden. Puedes contactarlo para afinar detalles. </p>
          </div>
          <div class="modal--footer bg-gray-50 flex justify-end pr-4">
            <a wire:click="sendMsgAndClose"
              class="btn  text-white bg-gray-900 hover:bg-gray-700 rounded-lg px-4 py-2 my-3 " href="">Aceptar</a>
          </div>


        </div>
      </div>
    </div>

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

            <!-- Servicio -->
            <div class="mb-4">
              <p class=" xl:text-lg inline-flex text-gray-500">El compromiso del experto es: </p>
              <p class="xl:text-lg font-semibold text-gray-900">{{$service->titulo}}</p>
            </div>

            <div class="mb-4">
              <p class=" xl:text-lg inline-flex text-gray-500">Este servicio incluye: </p>
              <p class="xl:text-lg font-semibold text-gray-900">{{$service->producto_a_entregar}}</p>
            </div>
            <!-- Termina Servicio -->

            <!-- Descripcion d la orden -->
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
            <!-- Termina Descripcion -->

            <!-- Boton aceptar - Crear nueva orden -->
            <div class="flex justify-end botonera mb-6">
              <button wire:click="createOrder"
                class="btn py-4 px-8 bg-gray-800 text-white hover:bg-gray-700 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                Enviar
              </button>
            </div>
            <!-- Termina Boton aceptar -->

          </div>
      </x-contacto-amarillo.contacto-container>
    </div>
    <!-- Termina Contrato Container -->
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