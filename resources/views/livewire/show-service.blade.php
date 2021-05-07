<div>
  <div x-data="{ smodal: false }" x-cloak>
    <div x-show="smodal">
      <div
        class="fixed top-0 z-20  flex justify-center w-full h-screen items-center bg-gray-900 bg-opacity-40 antialiased">
        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

        <div @click.away="smodal = false" class=" w-full md:w-1/2 border-solid border-4 border-main-yellow fixed">
          <div class="modal--header bg-main-yellow px-4 py-3 flex items-center justify-between">
            <p class="text-gray-700 font-bold text-lg">Envía un mensaje a:</p>
            <svg @click="smodal = false" class="text-gray-700 font-bold text-lg cursor-pointer"
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
              <path
                d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.151 17.943l-4.143-4.102-4.117 4.159-1.833-1.833 4.104-4.157-4.162-4.119 1.833-1.833 4.155 4.102 4.106-4.16 1.849 1.849-4.1 4.141 4.157 4.104-1.849 1.849z" />
            </svg>
          </div>
          <div class="modal--body bg-white w-full flex py-4">
            <div class="w-1/3 flex flex-col items-center divide-y-2 divide-gray-100 divide-solid ">
              <div class="flex flex-col items-center mb-2">
                <div class=" h-20 w-20 rounded-full bg-red-400 mb-1">
                  @isset($expert)
                  <img src="{{ $expert->users()->first()->profile_photo_url }}" alt="{{ $expert->nombre }}"
                    class="h-20 w-24 rounded-full object-top object-fill  mx-auto" />
                  @endisset
                </div>
                <p class="text-sm">
                  @isset($expert)
                  {{ $expert->nombre }}
                  @endisset
                </p>
              </div>

              <div class=" text-sm pt-2 ">
                <p class="text-gray-800 font-bold mb-1">Describe lo siguiente:</p>
                <ul class="text-gray-500 list-disc list-inside ">
                  <li>Descripción del proyecto</li>
                  <li>Instrucciones específicas</li>
                  <li>Tu presupuesto</li>
                </ul>
              </div>
            </div>
            <div class="flex flex-col border border-gray-800 mr-3">
              <textarea wire:model="message" class="modal--msj h-4/5 border-0" placeholder="Escribe aqui tu mensaje..."
                id="modal--msj" name="modal--msj" cols="50"></textarea>
              <div class="flex justify-end border-t border-gray-800 ">
                <svg class=" w-6 h-6 my-2 mr-2 cursor-pointer " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path
                    d="M9 1v7.5c0 1.933-1.566 3.5-3.5 3.5s-3.5-1.567-3.5-3.5v-6c0-1.381 1.119-2.5 2.5-2.5s2.5 1.119 2.5 2.5v4.5c0 .828-.672 1.5-1.5 1.5s-1.5-.672-1.5-1.5v-4h1v4c0 .275.225.5.5.5s.5-.225.5-.5v-4.5c0-.827-.673-1.5-1.5-1.5s-1.5.673-1.5 1.5v6c0 1.378 1.121 2.5 2.5 2.5s2.5-1.122 2.5-2.5v-7.5h1zm2 0v2c3.282 0 3.772 2.946 3 6 0 0 6-1.65 6 2.457v10.543h-15v-8.025c-.715-.065-1.39-.269-2-.582v10.607h19v-13.386c0-1.843-5.583-9.614-11-9.614z" />
                </svg>
              </div>
            </div>
          </div>
          <div class="modal--footer bg-gray-50 flex justify-end pr-4">
            <a wire:click="sendMsgToExpert"
              class="btn  text-white bg-gray-900 hover:bg-gray-700 rounded-lg px-4 py-2 my-3 " href="">Enviar</a>
          </div>


        </div>
      </div>
    </div>

    <x-slot name="header">
      <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight mt-6">
        {{ __('Servicio') }}
      </h2>
    </x-slot>

    <div class="py-12">
      <x-contacto-amarillo.contacto-container>
        <div class="service lg:col-span-5  ">
          <h2 class="text-4xl text-gray-800 font-bold ">{{ $service->titulo }}</h2>
          <div class="expertDetail flex items-center mt-2 ">
            <img class="w-10 h-10 rounded-full mr-3"
              src=" {{ asset('storage/' . $service->expert->users()->first()->profile_photo_path )}}"
              alt="{{$service->expert->nombre}}">
            <p class="font-bold tracking-tight">{{$service->expert->nombre}} </p>
            <p class="text-gray-400 text-xl mx-2">|</p>
            <svg class="w-6 h-6 fill-current text-main-yellow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
            </svg>
            <p class="text-main-yellow font-bold ml-2">4.3</p>
            <p class="ml-1 ">(33)</p>
          </div>

          <x-swiper-carousel>
            @forelse ($service->imagenes as $imagen)
            <div class="swiper-slide">
              <img src="{{ asset('storage/' . $imagen->ruta )}}" alt="{{$imagen->id}}">
            </div>
            @empty

            @endforelse
          </x-swiper-carousel>


          <div class="aboutservice mt-10">
            <h3 class="text-xl font-bold text-gray-700">Acerca de este servicio</h3>
            <div class="service-description text-lg text-gray-700 font-semibold tracking-wider mt-8">
              <livewire:show-descrpition :description="$service->descripcion" />
            </div>
          </div>


          <div class="salesman  mt-10  ">
            <h3 class="text-xl font-bold text-gray-700 ">Vendedor</h3>
            <div class="flex items-center mt-6">
              <div class="">
                <img class="w-28 h-28 rounded-full mr-3"
                  src=" {{ asset('storage/' . $service->expert->users()->first()->profile_photo_path )}}"
                  alt="{{$service->expert->nombre}}">
              </div>
              <div class="ml-4 h-full flex flex-col content-between ">
                <p class="text-gray-800 text-lg font-bold tracking-tight">{{$service->expert->nombre}} </p>
                <div class="flex items-center  mb-3">
                  <svg class="w-6 h-6 fill-current text-main-yellow" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24">
                    <path
                      d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
                  </svg>
                  <p class="text-main-yellow text-lg font-bold ml-2">4.3</p>
                  <p class=" ml-1 ">(33)</p>
                </div>
                <x-contacto-amarillo.contacto-button color="gray" wire:click="sendExpertId({{$service->expert->id}})"
                  x-on:click="smodal=true">
                  Contactame
                </x-contacto-amarillo.contacto-button>
              </div>
            </div>
            <div class="border mt-6">
              <div class="text-lg font-semiblod flex m-6">
                <p class="w-1/2 text-gray-500">De: <span class="text-gray-800 font-bold">{{$profile->pais}}</span> </p>
                <p class="w-1/2 text-gray-500">Miembro desde: <span
                    class="text-gray-800 font-bold">{{ $service->expert->created_at->diffForHumans() }}</span></p>
              </div>
              <hr class="border border-gray-400 mx-6">
              <div class="my-6 mx-6">
                <p class="text-lg font-semiblod text-gray-500 tracking-wider">
                  {{$profile->quien_soy}}
                </p>
              </div>
            </div>
          </div>

          <div class="reviews mt-10">
            <h3 class="text-xl font-bold text-gray-700 ">Reseñas</h3>
          </div>

        </div>

        <div class="price lg:col-span-3  ">
          <div class="border p-6">
            <h2 class="text-xl text-gray-700 font-bold underline">Precio & entrega</h2>
            <div class="text-lg font-semibold flex justify-between pt-6">
              <p class="text-gray-700">Precio: </p>
              <p class="text-gray-400">${{ $service->precio }}</p>
            </div>
            <div class="flex items-center mt-6">
              <svg class="w-6 h-6 fill-current mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M24 2v22h-24v-22h3v1c0 1.103.897 2 2 2s2-.897 2-2v-1h10v1c0 1.103.897 2 2 2s2-.897 2-2v-1h3zm-2 6h-20v14h20v-14zm-2-7c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-14 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2zm6.687 13.482c0-.802-.418-1.429-1.109-1.695.528-.264.836-.807.836-1.503 0-1.346-1.312-2.149-2.581-2.149-1.477 0-2.591.925-2.659 2.763h1.645c-.014-.761.271-1.315 1.025-1.315.449 0 .933.272.933.869 0 .754-.816.862-1.567.797v1.28c1.067 0 1.704.067 1.704.985 0 .724-.548 1.048-1.091 1.048-.822 0-1.159-.614-1.188-1.452h-1.634c-.032 1.892 1.114 2.89 2.842 2.89 1.543 0 2.844-.943 2.844-2.518zm4.313 2.518v-7.718h-1.392c-.173 1.154-.995 1.491-2.171 1.459v1.346h1.852v4.913h1.711z" />
              </svg>
              <p class="text-lg text-gray-700 font-semibold">Entrega en <span> {{$service->tiempo_de_entrega}} </span>
              </p>
            </div>
            <div class="mt-4">
              <p class="text-lg text-gray-700 font-semibold mb-2 ">Entregables:</p>
              <p class="text-lg text-gray-700 tracking-wider">
                {{$service->producto_a_entregar}}
              </p>
            </div>
            <a href="/employer/neworder/{{$service->id}}"
              class="mt-6 text-base inline-flex items-center justify-center w-full  py-4 bg-gray-800 border border-transparent rounded-md font-semibold  text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
              Ordenar
            </a>
          </div>

        </div>
      </x-contacto-amarillo.contacto-container>
    </div>
  </div>
</div>