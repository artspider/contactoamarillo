<x-slot name="header">
  <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
    {{ __('Perfil del experto') }}
  </h2>
</x-slot>


<div x-data={open:false} x-cloak>

  <div x-show="open">
    <div
      class="fixed top-0 z-20  flex justify-center w-full h-screen items-center bg-gray-900 bg-opacity-40 antialiased">
      <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

      <div @click.away="open = false" class=" w-full md:w-1/2 border-solid border-4 border-main-yellow fixed">
        <div class="modal--header bg-main-yellow px-4 py-3 flex items-center justify-between">
          <p class="text-gray-700 font-bold text-lg">Envía un mensaje a:</p>
          <svg @click="open = false" class="text-gray-700 font-bold text-lg cursor-pointer"
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

  <div class="lg:grid lg:grid-cols-10 max-w-7xl px-6 my-4 mx-auto">
    <div class="lg:col-span-4 row-span-6">
      <!-- Perfil -->
      <div class="bg-white w-full md:w-10/12 rounded-md shadow-md pb-2 mb-8">
        <div class=" bg-white rounded-lg shadow-lg text-center py-4">
          <img src="{{$expert->users->profile_photo_url}}" alt="" class="w-36 h-36 rounded-full  object-cover mx-auto ">
          <p class="text-xl w-max font-bold tracking-wide mx-auto mt-4 ">{{$expert->nombre}}</p>
          <p class=" h-10 text-sm text-gray-600 font-semibold tracking-wide mt-1 ">{{$expert->especialidad}}</p>
          <div class="flex items-center justify-center mt-1">
            <p class="mr-2">stars</p>
            <p class="text-sm">4.7 <span class="text-sm text-gray-600">(330 Reviews)</span></p>
          </div>
          <div class="w-full">
            <x-contacto-amarillo.contacto-button @click="open=true" tracking="tighter" class="pl-5 mt-4 w-5/12">
              solicitar cotización
            </x-contacto-amarillo.contacto-button>
          </div>
          <hr class="border border-solid border-gray-600 my-6 mx-4">
          <div class="flex justify-between items-center mx-8">
            <div class="flex items-center">
              <svg class="w-4 h-4 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M12 0c-4.198 0-8 3.403-8 7.602 0 6.243 6.377 6.903 8 16.398 1.623-9.495 8-10.155 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.342-3 3-3 3 1.343 3 3-1.343 3-3 3z" />
              </svg>
              <p class="text-sm font-semibold text-gray-600">De:</p>
            </div>

            <p>{{$expert->perfiles->estado}},
              {{$expert->perfiles->pais}}</p>
          </div>
          <div class="flex justify-between items-center mx-8 mt-2">
            <div class="flex items-center">
              <svg class="w-4 h-4 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M10.119 16.064c2.293-.53 4.427-.994 3.394-2.946-3.147-5.941-.835-9.118 2.488-9.118 3.388 0 5.643 3.299 2.488 9.119-1.065 1.964 1.149 2.427 3.393 2.946 1.985.458 2.118 1.428 2.118 3.107l-.003.828h-1.329c0-2.089.083-2.367-1.226-2.669-1.901-.438-3.695-.852-4.351-2.304-.239-.53-.395-1.402.226-2.543 1.372-2.532 1.719-4.726.949-6.017-.902-1.517-3.617-1.509-4.512-.022-.768 1.273-.426 3.479.936 6.05.607 1.146.447 2.016.206 2.543-.66 1.445-2.472 1.863-4.39 2.305-1.252.29-1.172.588-1.172 2.657h-1.331c0-2.196-.176-3.406 2.116-3.936zm-10.117 3.936h1.329c0-1.918-.186-1.385 1.824-1.973 1.014-.295 1.91-.723 2.316-1.612.212-.463.355-1.22-.162-2.197-.952-1.798-1.219-3.374-.712-4.215.547-.909 2.27-.908 2.819.015.935 1.567-.793 3.982-1.02 4.982h1.396c.44-1 1.206-2.208 1.206-3.9 0-2.01-1.312-3.1-2.998-3.1-2.493 0-4.227 2.383-1.866 6.839.774 1.464-.826 1.812-2.545 2.209-1.49.345-1.589 1.072-1.589 2.334l.002.618z" />
              </svg>
              <p class="text-sm font-semibold text-gray-600">Miembro desde:</p>
            </div>
            <p>{{$expert->created_at->diffForHumans()}}</p>
          </div>
        </div>
      </div>
      <!-- -->

      <!-- Descripcion -->
      <div class="bg-white w-full md:w-10/12 rounded-md shadow-md px-8 py-6 mb-8">
        <h2 class="text-xl font-bold mb-4">Descripción</h2>
        <p class="text-lg text-gray-600 tracking-wide leading-snug ">{{$expert->perfiles->quien_soy}}</p>
        <hr class="border border-solid border-gray-600 my-6">
        <h2 class="text-xl font-bold mb-4">Idiomas</h2>
        <div class="">
          @forelse ($expert->languages as $language)
          <div class="text-base text-gray-700 font-semibold">
            <p class="mb-4">
              {{ $language->language }} - <span class="text-gray-400">{{ $language->level }}</span>
            </p>
          </div>
          @empty
          <p>Aún no has agrgado un lenguaje</p>
          @endforelse
        </div>

        <hr class="border border-solid border-gray-600 my-6">
        <h2 class="text-xl font-bold mb-4">Habilidades</h2>
        <div class="">
          @forelse ($expert->tags as $tag)
          <x-contacto-amarillo.contacto-pill>
            {{ $tag->name }}
          </x-contacto-amarillo.contacto-pill>
          @empty
          <p>Aún no has agregado habilidades</p>
          @endforelse
        </div>

        <hr class="border border-solid border-gray-600 my-6">
        <h2 class="text-xl font-bold mb-4">Educación</h2>
        <div class="">
          @forelse ($expert->titulos as $titulo)
          <div class="text-base text-gray-700 font-semibold mb-4">
            <p class="mb-1">
              {{$titulo->carrera}}
            </p>
            <p>{{$titulo->escuela}}</p>
            <p>{{$titulo->fecha_terminacion}}</p>
          </div>
          @empty
          @endforelse
        </div>

        <hr class="border border-solid border-gray-600 my-6">
        <h2 class="text-xl font-bold mb-4">Certificaciones</h2>
        <div class="">
          @forelse ($expert->certifications as $certification)
          <div class="text-base text-gray-700 font-semibold mb-4">
            <p class="mb-1">
              {{$certification->certificado}}
            </p>
            <p>{{$certification->emisor}}</p>
            <p>{{$certification->anio_de_emision}}</p>
          </div>
          @empty
          @endforelse
        </div>
      </div>
      <!-- -->



    </div>

    <div class="lg:col-span-6 col-start-5">
      <div class="flex flex-row flex-wrap justify-between ">
        @forelse ($expert->services as $service)
        <x-servicecard-small>
          <x-slot name="ruta">
            /expert/showservice/{{$service->id}}
          </x-slot>
          <x-slot name="srcImage">
            @isset($service->imagenes()->first()->ruta)

            {{ asset('storage/' . $service->imagenes()->first()->ruta) }}
            @endisset
            @empty ($service->imagenes()->first()->ruta)
            https://cdn.dribbble.com/users/1615584/screenshots/14947408/media/b9701a4bb0c77c22a8a3150bd91ac80e.jpg?compress=1&resize=1000x750
            @endempty

          </x-slot>

          <x-slot name="imageUserSrc">
            {{ asset('storage/' . $service->expert->users()->first()->profile_photo_path )}}
          </x-slot>
          <x-slot name="nameAuthor">
            {{$service->expert->nombre}}
          </x-slot>
          <x-slot name="review">
            4.9
          </x-slot>
          <x-slot name="completedProjects">
            112
          </x-slot>

          {{$service->titulo}}

          <x-slot name="price">
            {{$service->precio}}
          </x-slot>
        </x-servicecard-small>

        @empty

        @endforelse
      </div>
    </div>


  </div>
</div>

@push('modals')
<script>
  Livewire.on('success', (message) => {
    thimsg = message
    Toast.fire({
      icon: 'success',
      title: thimsg,
    })
  })

  Livewire.on('error', (message) => {
    thimsg = message
    Toast.fire({
      icon: 'error',
      title: thimsg,
    })
  })
</script>
@endpush