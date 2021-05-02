<div>
  <x-slot name="header">
    <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
      {{ __('Encuentra Servicios') }}
    </h2>

  </x-slot>

  <div x-data="{ subcat: @entangle('subcatselected') }" class="flex flex-col mb-8">
    <div class="mt-8 mb-8">
      <x-employer.container>
        <div class="lg:flex items-center  ">
          <h2 class="text-2xl font-semibold lg:w-1/3 2xl:w-1/4 lg:mt-10">Resultados para "{{$search}}"</h2>
          <div class="w-full lg:w-1/2 ">
            <livewire:search-dropdown />
          </div>
        </div>

        <p class="text-semibold text-gray-700 my-6">{{$results->count()}} Servicios disponibles</p>

      </x-employer.container>

      <div class="flex flex-row flex-wrap justify-between w-11/12 mx-auto">
        @forelse ($results as $service)
        <x-employer.categorias.cardItem2>
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
        </x-employer.categorias.cardItem2>

        @empty

        @endforelse
      </div>
    </div>

  </div>