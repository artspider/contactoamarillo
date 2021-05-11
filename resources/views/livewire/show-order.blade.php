<div>
  <x-slot name="header">
    <div class="flex justify-between items-center">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Order') }}
      </h2>

    </div>
  </x-slot>

  {{ Breadcrumbs::render('showorder', $order->id) }}

  <div x-cloak x-data="{tab:'3'}">

    <div class="flex pt-12 profile__body max-w-7xl  mx-auto sm:px-6 mb-0">
      <div x-on:click="tab='1'" :class="{ 'bg-gray-800 text-white': tab == '1' }"
        class=" border border-gray-500 p-4 cursor-pointer">
        Actividad
      </div>
      <div x-on:click="tab='2'" :class="{ 'bg-gray-800 text-white': tab == '2' }"
        class=" border border-gray-500 p-4 cursor-pointer">Detalles
      </div>
      <div x-on:click="tab='3'" :class="{ 'bg-gray-800 text-white': tab == '3' }"
        class=" border border-gray-500 p-4 cursor-pointer">Entrega
      </div>
    </div>

    <div x-show="tab=='1'">
      <div class="py-2">
        <x-contacto-amarillo.contacto-container>
          <div class="col-span-5 flex flex-col">
            <div class="w-full  mb-5 rounded-md shadow-md p-8">

              <x-order.makeit>
                {{$order->created_at->isoFormat('D MMMM YYYY, h:mm a')}}
              </x-order.makeit>
              <div class="ml-16 text-right inline-block border border-gray-200 w-11/12 my-4"></div>
              <x-order.requirements-send>
                {{$order->created_at->isoFormat('D MMMM YYYY, h:mm a')}}
              </x-order.requirements-send>
              <div class="ml-16 text-right inline-block border border-gray-200 w-11/12 my-4"></div>
              <x-order.start>
                {{$order->created_at->isoFormat('D MMMM YYYY, h:mm a')}}
              </x-order.start>
              <div class="ml-16 text-right inline-block border border-gray-200 w-11/12 my-4"></div>
              <x-order.deliverit>
                <x-slot name="deliver">
                  {{$deliver_date}}
                </x-slot>
                {{$order->created_at->isoFormat('D MMMM YYYY, h:mm a')}}
              </x-order.deliverit>
              @forelse ($activitiesm as $activity)

              <div class="ml-16 text-right inline-block border border-gray-200 w-11/12 my-4"></div>
              @if ($activity->sender == 1)
              <x-order.message who="{{$order->employer->nombre}}"
                dateSend="{{ \Carbon\Carbon::parse($activity->created_at)->isoFormat('D MMMM YYYY, h:mm a') }}"
                photo="{{ $order->employer->users->profile_photo_url }}">
                {{$activity->message}}
              </x-order.message>


              @else
              <x-order.message who="Yo"
                dateSend="{{ \Carbon\Carbon::parse($activity->created_at)->isoFormat('D MMMM YYYY, h:mm a') }}"
                photo="{{ Auth::user()->profile_photo_url }}">
                {{$activity->message}}
              </x-order.message>

              @endif

              @empty

              @endforelse

            </div>

            <div x-data="{ files: null }">
              <div class="h-32 w-full border-l-4 border-t border-b border-r border-main-yellow p-2">
                <textarea wire:model="message" class="w-full h-14 rounded-md overflow-x-auto" type="text" name="" id=""
                  name="" id="" cols="30" rows="10"></textarea>
                <div class="flex items-center justify-end mt-2">


                  <template x-if="files !== null">
                    <div class="flex flex-col items-center space-y-1 mr-2">
                      <template x-for="(_,index) in Array.from({ length: files.length })">
                        <div class="flex items-center space-x-2">
                          <span class="font-medium text-gray-900" x-text="files[index].name"></span>
                          <span class="text-xs text-gray-500" x-text="Math.round(files[index].size/1024)">
                          </span>
                          <p class="text-xs self-end text-gray-500">kb</p>
                        </div>

                        {{-- <div class="flex flex-row items-center space-x-2">
                          <template x-if="files[index].type.includes('audio/')"><i
                              class="far fa-file-audio fa-fw"></i></template>
                          <template x-if="files[index].type.includes('application/')"><i
                              class="far fa-file-alt fa-fw"></i></template>
                          <template x-if="files[index].type.includes('image/')"><i
                              class="far fa-file-image fa-fw"></i></template>
                          <template x-if="files[index].type.includes('video/')"><i
                              class="far fa-file-video fa-fw"></i></template>
                          <span class="font-medium text-gray-900" x-text="files[index].name">Uploading</span>
                          <span class="text-xs self-end text-gray-500" x-text="filesize(files[index].size)">...</span>
                        </div> --}}
                      </template>
                    </div>
                  </template>

                  <label for="attachment">
                    <svg class="mr-2 w-6 h-6 fill-current text-gray-600 cursor-pointer"
                      xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <path
                        d="M21.586 10.461l-10.05 10.075c-1.95 1.949-5.122 1.949-7.071 0s-1.95-5.122 0-7.072l10.628-10.585c1.17-1.17 3.073-1.17 4.243 0 1.169 1.17 1.17 3.072 0 4.242l-8.507 8.464c-.39.39-1.024.39-1.414 0s-.39-1.024 0-1.414l7.093-7.05-1.415-1.414-7.093 7.049c-1.172 1.172-1.171 3.073 0 4.244s3.071 1.171 4.242 0l8.507-8.464c.977-.977 1.464-2.256 1.464-3.536 0-2.769-2.246-4.999-5-4.999-1.28 0-2.559.488-3.536 1.465l-10.627 10.583c-1.366 1.368-2.05 3.159-2.05 4.951 0 3.863 3.13 7 7 7 1.792 0 3.583-.684 4.95-2.05l10.05-10.075-1.414-1.414z" />
                    </svg>
                  </label>
                  <input wire:model="attachments"
                    x-on:change="files = $event.target.files; console.log($event.target.files);" class=" hidden "
                    multiple type="file" name="" id="attachment">

                  <x-contacto-amarillo.contacto-button x-on:click="files=null" color="gray" wire:click="sendMessage">
                    <x-slot name="is_disabled">
                      {{$is_disabled}}
                    </x-slot>
                    enviar
                  </x-contacto-amarillo.contacto-button>
                  </form>
                </div>
              </div>
            </div>

          </div>
          <div class="col-span-3 w-full flex flex-col">
            <div class="w-full bg-white mb-5 rounded-md shadow-md p-8">
              <p class="text-lg font-semibold tracking-wide">Arcvhivos Adjuntos en esta actividad</p>
              <livewire:show-attachment :id="$order->id" />
            </div>
          </div>
        </x-contacto-amarillo.contacto-container>
      </div>
    </div>

    <div x-show="tab==3">
      <div class="py-2">
        <x-contacto-amarillo.contacto-container>
          <div class="col-span-5 flex flex-col">
            <div class="w-full bg-white mb-5 rounded-md shadow-md p-8">
              <h1 class="text-xl font-bold tracking-wide mb-4">Adjunta los entregables que aparecen en la orden</h1>
              <ul class=" list-disc list-outside tracking-wide leading-relaxed mb-8">
                <li>Haz clic en el boton púrpura para seleccionar tus archivos, sube uno a la vez.</li>
                <li>Dale un nombre a cada archivo que adjuntes, escribelo en el cuadro de texto. No te preocupes por la
                  extensión del archivo, escribe solo el título.</li>
                <li>Haz clic en el botón adjuntar.</li>
                <li>Cuando estes listo para realizar la entrega, presiona el bóton enviar entrega. </li>
              </ul>

              <div x-data="{ boxfile:null }" x-cloak>
                <div class="flex items-center">
                  <label for="fileToSend">
                    <div class="rounded-full bg-purple-300 hover:bg-purple-400 mr-4 w-24 h-24 pt-2 cursor-pointer ">
                      <svg class="w-20 h-20 mx-auto text-purple-600 fill-current " xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path
                          d="M17.281 8.991l3.706 1.97-2.261 2.013.011.006 2.25 3.09-2.25 1.228v3.096l-6.75 3.606-6.75-3.606v-3.091l-2.25-1.225 2.234-3.075-2.234-1.966 3.747-2.043c-.108.371-.197.808-.245 1.272l-1.769.964 1.181 1.04.624-.345c.056.339.146.672.279.984l-.823.456 6.028 3.124 5.978-3.119-.812-.451c.145-.299.245-.618.31-.944l.531.293 1.234-1.098-1.707-.907c-.05-.464-.146-.9-.262-1.272zm-4.798 8.217v5.393l5.256-2.807v-1.951l-3.502 1.91-1.754-2.545zm-6.247.639v1.947l5.249 2.804v-5.388l-1.748 2.543-3.501-1.906zm-1.772-2.103l4.96 2.7 1.099-1.599-4.983-2.582-1.076 1.481zm8.989 1.11l1.096 1.59 4.96-2.706-1.073-1.475-4.983 2.591zm-1.199-1.691h-.625l.003-2.728h.625l-.003 2.728zm-1.159-1.424h-.625l.009-1.739h.625l-.009 1.739zm2.358-.014h-.626l-.009-1.725h.625l.01 1.725zm-3.094-2.468l-.318-.734c-.732.269-2.155 2.284-2.155 2.284-1.195-2.607.161-4.846 1.243-5.659-.083-.699-.644-4.168 2.817-7.113l.041-.035.041.035c3.462 2.945 2.901 6.414 2.817 7.113 1.083.813 2.438 3.052 1.243 5.659 0 0-1.423-2.015-2.155-2.284l-.317.734-1.629.005-1.628-.005zm1.628-9.919c-1.093.923-2.432 3.393-1.854 6.223-.726.6-1.58 1.454-1.712 3.089.577-.77 1.419-1.21 2.091-1.356 0 0 .424.782.507.973l.968.003.969-.003c.083-.191.507-.973.507-.973.671.146 1.513.586 2.091 1.356-.133-1.635-.967-2.472-1.693-3.072.586-2.722-.771-5.295-1.861-6.229l-.013-.011zm-.044 5.693c-.284-.001-.515-.231-.515-.516 0-.285.231-.515.515-.515.284 0 .514.23.514.515 0 .285-.23.515-.514.516zm0-1.844c-.569 0-1.029-.462-1.03-1.031.001-.57.461-1.031 1.03-1.031s1.029.461 1.029 1.031c0 .569-.46 1.03-1.029 1.031zm0-1.434c.214 0 .388.174.388.389 0 .215-.174.389-.388.389-.215 0-.389-.174-.389-.389 0-.215.174-.389.389-.389z" />
                      </svg>
                    </div>
                  </label>
                  <input wire:model="fileToSend"
                    x-on:change="boxfile = $event.target.files[0]; console.log($event.target.files[0].name);  Livewire.emit('fileToSend', $event.target.files[0].name);"
                    type="file" name="" id="fileToSend" class="hidden">

                  <div class="relative flex w-1/2">
                    <input wire:model="filenameToSend"
                      class="h-16 w-full pr-10 bg-purple-100 rounded-md shadow-md border border-transparent focus:bg-white focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                      type="text" name="" id="filenameToSend" placeholder="Escribe el título del archivo adjunto">
                    <svg class="w-6 h-6 fill-current absolute top-5 right-3 text-purple-600 cursor-pointer "
                      wire:click="cleanInputfileToSend" x-on:click="boxfile=null" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24">
                      <path
                        d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 16.094l-4.157-4.104 4.1-4.141-1.849-1.849-4.105 4.159-4.156-4.102-1.833 1.834 4.161 4.12-4.104 4.157 1.834 1.832 4.118-4.159 4.143 4.102 1.848-1.849z" />
                    </svg>
                  </div>
                  <x-contacto-amarillo.contacto-button color="gray" wire:click="entregaAttach"
                    class="ml-6 w-1/4 h-16 pl-12">
                    <x-slot name="is_disabled">
                      {{$filenameToSendButton}}
                    </x-slot>
                    Adjuntar
                  </x-contacto-amarillo.contacto-button>
                </div>

                <div>
                  <template x-if="boxfile !== null">

                    <div class="flex flex-col items-center space-y-1 mr-2">

                      <div class="flex items-center space-x-2">
                        <span class="font-medium text-gray-900" x-text="boxfile.name"></span>
                        <span class="text-xs text-gray-500" x-text="Math.round(boxfile.size/1024)">
                        </span>
                        <p class="text-xs self-end text-gray-500">kb</p>
                      </div>
                    </div>
                  </template>
                </div>
              </div>

            </div>
          </div>
          <div class="col-span-3 flex flex-col w-full">
            <div class="w-full bg-white mb-5 rounded-md shadow-md p-8">
              <p class="text-lg font-semibold tracking-wide">Arcvhivos Adjuntos en esta entrega</p>
            </div>
          </div>
        </x-contacto-amarillo.contacto-container>
      </div>
    </div>



  </div>
  <script>

  </script>