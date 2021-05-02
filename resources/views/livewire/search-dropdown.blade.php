<div x-data="{ open: @entangle('showDelete') }" class="w-full relative  xl:mt-10">

  <div class="relative w-full bg-red-400">
    <input wire:model="search" id="inputSearch"
      class="w-full bg-gray-100 rounded shadow pl-10 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-600 focus:border-transparent focus:text-black focus:bg-white"
      type="text" placeholder="Prueba 'crear una aplicaciòn'">
    <svg class="absolute w-5 top-3 left-3 " width="16" height="16" viewBox="0 0 16 16"
      xmlns="http://www.w3.org/2000/svg">
      <path
        d="M15.8906 14.6531L12.0969 10.8594C12.025 10.7875 11.9313 10.75 11.8313 10.75H11.4187C12.4031 9.60938 13 8.125 13 6.5C13 2.90937 10.0906 0 6.5 0C2.90937 0 0 2.90937 0 6.5C0 10.0906 2.90937 13 6.5 13C8.125 13 9.60938 12.4031 10.75 11.4187V11.8313C10.75 11.9313 10.7906 12.025 10.8594 12.0969L14.6531 15.8906C14.8 16.0375 15.0375 16.0375 15.1844 15.8906L15.8906 15.1844C16.0375 15.0375 16.0375 14.8 15.8906 14.6531ZM6.5 11.5C3.7375 11.5 1.5 9.2625 1.5 6.5C1.5 3.7375 3.7375 1.5 6.5 1.5C9.2625 1.5 11.5 3.7375 11.5 6.5C11.5 9.2625 9.2625 11.5 6.5 11.5Z">
      </path>
    </svg>
    <svg wire:click="cleanSearch" x-show="open" class="absolute top-3 right-36 w-4 h-4 fill-current"
      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path
        d="M24 20.188l-8.315-8.209 8.2-8.282-3.697-3.697-8.212 8.318-8.31-8.203-3.666 3.666 8.321 8.24-8.206 8.313 3.666 3.666 8.237-8.318 8.285 8.203z" />
    </svg>
    <button wire:click="doSearch"
      class="absolute border border-transparent outline-none right-0 h-full w-1/5 font-bold bg-black text-white   hover:bg-gray-900">
      Buscar
    </button>

  </div>
  {{-- <div class="absolute bg-white rounded w-full border  ">
    <div class="flex items-center pt-6 pl-4">
      <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
        <path
          d="M7 16.462l1.526-.723c1.792-.81 2.851-.344 4.349.232 1.716.661 2.365.883 3.077 1.164 1.278.506.688 2.177-.592 1.838-.778-.206-2.812-.795-3.38-.931-.64-.154-.93.602-.323.818 1.106.393 2.663.79 3.494 1.007.831.218 1.295-.145 1.881-.611.906-.72 2.968-2.909 2.968-2.909.842-.799 1.991-.135 1.991.72 0 .23-.083.474-.276.707-2.328 2.793-3.06 3.642-4.568 5.226-.623.655-1.342.974-2.204.974-.442 0-.922-.084-1.443-.25-1.825-.581-4.172-1.313-6.5-1.6v-5.662zm-1 6.538h-4v-8h4v8zm15-11.497l-6.5 3.468v-7.215l6.5-3.345v7.092zm-7.5-3.771v7.216l-6.458-3.445v-7.133l6.458 3.362zm-3.408-5.589l6.526 3.398-2.596 1.336-6.451-3.359 2.521-1.375zm10.381 1.415l-2.766 1.423-6.558-3.415 2.872-1.566 6.452 3.558z" />
      </svg>
      <p class=" ">Servicios</p>
    </div>

    <ul>
      @forelse ($searchResults as $searchResult)
      <li class="border-gray-700 pl-10">
        <a href="#" class="block hover:bg-gray-300 p-3">{{$searchResult->titulo}}</a>
  </li>
  @empty
  <li class="border-gray-700 pl-10">
    Ningún resultado
  </li>
  @endforelse

  </ul>
</div> --}}
</div>