<div class="bg-indigo-900 h-460 w-full mt-16 lg:h-64 lg:bg-black lg:bg-cover lg:bg-no-repeat bg-center">
  <x-employer.container>

    <h1 class="text-white text-lg text-center md:text-xl lg:pt-14 lg:w-11/12 lg:text-left lg:font-bold ml-3">
      Busca tu experto ideal, {{Auth::user()->name}}
    </h1>

    <div class="w-full mx-auto lg:w-1/2 lg:ml-3">
      {{-- <input class="w-full" wire:model="search" type="text" name="" id=""> --}}
      <div x-data="{ open: @entangle('showDelete') }" class="w-full relative  xl:mt-6">

        <div class="relative w-full bg-red-400">
          <input wire:model="search" id="inputSearch"
            class="w-full bg-gray-100 rounded shadow pl-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent focus:text-black focus:bg-white"
            type="text" placeholder="Prueba con 'Andriod Studio'">
          <svg class="absolute w-5 top-3 left-3 " width="16" height="16" viewBox="0 0 16 16"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M15.8906 14.6531L12.0969 10.8594C12.025 10.7875 11.9313 10.75 11.8313 10.75H11.4187C12.4031 9.60938 13 8.125 13 6.5C13 2.90937 10.0906 0 6.5 0C2.90937 0 0 2.90937 0 6.5C0 10.0906 2.90937 13 6.5 13C8.125 13 9.60938 12.4031 10.75 11.4187V11.8313C10.75 11.9313 10.7906 12.025 10.8594 12.0969L14.6531 15.8906C14.8 16.0375 15.0375 16.0375 15.1844 15.8906L15.8906 15.1844C16.0375 15.0375 16.0375 14.8 15.8906 14.6531ZM6.5 11.5C3.7375 11.5 1.5 9.2625 1.5 6.5C1.5 3.7375 3.7375 1.5 6.5 1.5C9.2625 1.5 11.5 3.7375 11.5 6.5C11.5 9.2625 9.2625 11.5 6.5 11.5Z">
            </path>
          </svg>
          <svg wire:click="cleanSearch" x-show="open" class="absolute top-3 right-48 w-4 h-4 fill-current"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
          </svg>
          <button wire:click="doSearch"
            class="bg-main-yellow absolute border border-transparent outline-none right-0 h-full w-1/5 font-bold text-black  hover:yellow-600">
            Buscar
          </button>

        </div>

      </div>
    </div>


  </x-employer.container>
  <div class="mt-8"></div>
  <x-employer.container>
    <div class="w-full flex flex-row space-x-4">
      @forelse ($results as $item)

      <div class="  w-1/5 bg-white rounded-lg shadow-lg text-center py-4">
        <img src="{{$item->users->profile_photo_url}}" alt="" class="w-36 h-36 rounded-full  object-cover mx-auto ">
        <p class="text-xl w-max font-bold tracking-wide mx-auto mt-4 ">{{$item->nombre}}</p>
        <p class=" h-10 text-sm text-gray-400 font-semibold tracking-wide mt-1 ">{{$item->especialidad}}</p>
        <div class="flex items-center justify-center mt-1">
          <p class="mr-2">stars</p>
          <p class="text-sm">4.7 <span class="text-sm text-gray-400">(330 Reviews)</span></p>
        </div>
        <x-contacto-amarillo.contacto-button class="mt-4 ">
          Contactar
        </x-contacto-amarillo.contacto-button>
        <hr class="border border-solid border-gray-300 my-4 mx-4">
        <div class="flex items-center mx-4">
          <svg class="w-4 h-4 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M12 0c-4.198 0-8 3.403-8 7.602 0 6.243 6.377 6.903 8 16.398 1.623-9.495 8-10.155 8-16.398 0-4.199-3.801-7.602-8-7.602zm0 11c-1.657 0-3-1.343-3-3s1.342-3 3-3 3 1.343 3 3-1.343 3-3 3z" />
          </svg>
          <p class="text-sm font-semibold text-gray-400">De: <span>{{$item->perfiles->estado}},
              {{$item->perfiles->pais}}</span></p>
        </div>
        <div class="flex items-center mx-4 mt-2">
          <svg class="w-4 h-4 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M10.119 16.064c2.293-.53 4.427-.994 3.394-2.946-3.147-5.941-.835-9.118 2.488-9.118 3.388 0 5.643 3.299 2.488 9.119-1.065 1.964 1.149 2.427 3.393 2.946 1.985.458 2.118 1.428 2.118 3.107l-.003.828h-1.329c0-2.089.083-2.367-1.226-2.669-1.901-.438-3.695-.852-4.351-2.304-.239-.53-.395-1.402.226-2.543 1.372-2.532 1.719-4.726.949-6.017-.902-1.517-3.617-1.509-4.512-.022-.768 1.273-.426 3.479.936 6.05.607 1.146.447 2.016.206 2.543-.66 1.445-2.472 1.863-4.39 2.305-1.252.29-1.172.588-1.172 2.657h-1.331c0-2.196-.176-3.406 2.116-3.936zm-10.117 3.936h1.329c0-1.918-.186-1.385 1.824-1.973 1.014-.295 1.91-.723 2.316-1.612.212-.463.355-1.22-.162-2.197-.952-1.798-1.219-3.374-.712-4.215.547-.909 2.27-.908 2.819.015.935 1.567-.793 3.982-1.02 4.982h1.396c.44-1 1.206-2.208 1.206-3.9 0-2.01-1.312-3.1-2.998-3.1-2.493 0-4.227 2.383-1.866 6.839.774 1.464-.826 1.812-2.545 2.209-1.49.345-1.589 1.072-1.589 2.334l.002.618z" />
          </svg>
          <p class="text-sm font-semibold text-gray-400">Miembro desde: <span>{{$item->created_at->diffForHumans()}},
            </span></p>
        </div>
      </div>

      @empty
      vacio
      @endforelse
    </div>
  </x-employer.container>
</div>
@push('modals')
<script>
  algoliaStart();
</script>
@endpush