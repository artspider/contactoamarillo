<div>
  <div x-data="{ smodal: false }" x-cloak>

    <div x-show="smodal == true">
      <div
        class="fixed top-0 z-70 flex justify-center w-full h-screen items-center bg-gray-900 bg-opacity-40 antialiased">
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
                  @isset($employer)
                  <img src="{{ $employer->users()->first()->profile_photo_url }}" alt="{{ $employer->nombre }}"
                    class="h-20 w-24 rounded-full object-top object-fill  mx-auto" />
                  @endisset
                </div>
                <p class="text-sm">
                  @isset($employer)
                  {{ $employer->nombre }}
                  @endisset
                </p>
              </div>

              <div class=" text-sm pt-2 ">
                <p class="text-gray-800 font-bold mb-1">Describe lo siguiente:</p>
                <ul class="text-gray-500 list-disc list-inside ">
                  <li>Tu presupuesto</li>
                  <li>Tiempo de entrega</li>
                  <li>Tu curriculum</li>
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
            <a wire:click="sendMsgToEmployer"
              class="btn  text-white bg-gray-900 hover:bg-gray-700 rounded-lg px-4 py-2 my-3 " href="">Enviar</a>
          </div>


        </div>
      </div>

    </div>

    <x-slot name="header">
      <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
        {{ __('Bolsa de trabajo') }}
      </h2>
    </x-slot>

    {{ Breadcrumbs::render('jobsbag') }}

    <div class="py-12">

      <x-contacto-amarillo.contacto-container>

        @forelse ($projects as $project)

        <div class="col-span-5 flex flex-col  ">
          <div class="w-full">
            <div class=" bg-white rounded-md shadow-md pb-4">
              <div class="bg-gray-800 rounded-t-md px-4 py-2">
                <div class="flex flex-row items-center justify-between ">
                  <h3 class="text-gray-300 text-sm font-semibold lg:text-lg lg:flex lg:flex-row">
                    {{$project->categoria->nombre}} &gt <span class="text-gray-500 ml-1">
                      {{ $project->subcategoria->name }}
                  </h3>
                  <p class="text-gray-500 text-sm">{{ $project->created_at->diffForHumans() }}</p>
                </div>
                <p class="text-gray-500 text-sm">
                  $ {{ $project->budget }} dlls
                </p>
              </div>

              <p class="text-gray-500 mx-4 my-4 leading-normal">{{ $project->description }}</p>

              <div class="mx-4">
                <p class="text-gray-700">Empleador: <span class="text-gray-500"> {{$project->employer->nombre}}
                  </span> </p>
                <p class="text-gray-700 text-sm">
                  Tiempo de entrega <span class="text-gray-500">
                    {{ $project->delivery_time}} días </span>
                </p>
              </div>
              <div class=" text-right mx-4 mt-2">
                <x-contacto-amarillo.contacto-button color="gray"
                  wire:click="sendEmployerId({{$project->employer->id}})" x-on:click="smodal=true">
                  contactar
                </x-contacto-amarillo.contacto-button>
              </div>
            </div>
          </div>
        </div>

        <div class="col-span-3 flex"></div>
        @empty

        @endforelse




      </x-contacto-amarillo.contacto-container>

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