<div>
  <x-slot name="header">
    <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
      {{ __('Notificaciones') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <x-contacto-amarillo.contacto-container>
      <!-- Contactos -->
      <div class="col-span-3 bg-white border-r border-gray-300">
        <div class="my-3 mx-3 ">
          <div class="relative text-gray-600 focus-within:text-gray-400">
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
              <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                viewBox="0 0 24 24" class="w-6 h-6 text-gray-500">
                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </span>
            <input aria-placeholder="Busca tus amigos o contacta nuevos" placeholder="Busca un usuario "
              class="py-2 pl-10 block w-full rounded bg-gray-100 outline-none focus:text-gray-700" type="search"
              name="search" required autocomplete="search" />
          </div>
        </div>

        <ul class="overflow-auto" style="height: 500px;">
          <h2 class="ml-2 mb-2 text-gray-600 text-lg my-2">Chats</h2>
          @forelse ($contacts as $contact)
          <li>

            @if ($contact->id == $selected->id)
            <div wire:click="selectSender({{$contact}})"
              class="bg-gray-100 border-b border-gray-300 px-3 py-2 cursor-pointer flex items-center text-sm focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
              <img class="h-10 w-10 rounded-full object-cover" src="{{ $contact->users()->first()->profile_photo_url }}"
                alt="{{ $contact->users()->first()->nombre }}" />
              <div class="w-full pb-2">

                <div class="flex justify-between">
                  <span class="block ml-2 font-semibold text-base text-gray-600 ">{{ $contact->nombre }}</span>
                  <span
                    class="block ml-2 text-sm text-gray-600">{{$contact->messages()->latest()->first()->created_at->diffForHumans()}}</span>
                </div>
                <span
                  class="block ml-2 text-sm text-gray-600">{{\Illuminate\Support\Str::limit($contact->messages()->latest()->first()->descripcion, 30)}}</span>
              </div>
            </div>
            @else
            <div wire:click="selectSender({{$contact}})"
              class="hover:bg-gray-100 border-b border-gray-300 px-3 py-2 cursor-pointer flex items-center text-sm focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
              <img class="h-10 w-10 rounded-full object-cover" src="{{ $contact->users()->first()->profile_photo_url }}"
                alt="{{ $contact->users()->first()->nombre }}" />
              <div class="w-full pb-2">
                <div class="flex justify-between">
                  <span class="block ml-2 font-semibold text-base text-gray-600 ">{{ $contact->nombre }}</span>
                  <span
                    class="block ml-2 text-sm text-gray-600">{{$contact->messages()->latest()->first()->created_at->diffForHumans()}}</span>
                </div>
                <span
                  class="block ml-2 text-sm text-gray-600">{{\Illuminate\Support\Str::limit($contact->messages()->latest()->first()->descripcion, 30)}}</span>
              </div>
            </div>
            @endif


          </li>
          @empty

          @endforelse
        </ul>
      </div>

      <!-- Chat -->
      <div class="col-span-5 bg-white">
        <div class="w-full">
          <!-- Loged employer -->
          <div class="flex items-center border-b border-gray-300 pl-3 py-3">
            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
              alt="username" />
            <span class="block ml-2 font-bold text-base text-gray-600">{{ Auth::user()->name, }}</span>
            <span class="connected text-green-500 ml-2">
              <svg width="6" height="6">
                <circle cx="3" cy="3" r="3" fill="currentColor"></circle>
              </svg>
            </span>
          </div>


          <div id="chat" class="w-full overflow-y-auto p-10 relative" style="height: 700px;" ref="toolbarChat">
            <ul>
              @forelse ($messages as $message)
              @if ($message->sender == 2)
              <li class="clearfix2">
                <div class="w-full flex justify-start">
                  <div class="bg-gray-100 rounded px-5 py-2 my-2 text-gray-700 relative" style="max-width: 300px;">
                    yo:
                    <span class="block text-left">
                      {{$message->descripcion}}</span>
                    <span class="block text-xs text-left">{{$message->created_at}}</span>
                  </div>
                </div>
              </li>
              @else
              <div class="w-full flex justify-end">
                <div class="bg-gray-100 rounded px-5 py-2 my-2 text-gray-700 relative" style="max-width: 300px;">
                  {{$employerName[0]}}:
                  <span class="block text-right">
                    {{$message->descripcion}}</span>
                  <span class="block text-xs text-right ">{{$message->created_at}}</span>
                </div>
              </div>
              @endif

              @empty

              @endforelse

            </ul>
          </div>

          <!-- Enviar mensaje y Attachments -->
          <div class="w-full py-3 px-3 flex items-center justify-between border-t border-gray-300">
            <button class="outline-none focus:outline-none">
              <svg class="text-gray-400 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
            </button>
            <button class="outline-none focus:outline-none ml-1">
              <svg class="text-gray-400 h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
              </svg>
            </button>

            <input wire:model.defer="message" aria-placeholder="Escribe un mensaje aquí"
              placeholder="Escribe un mensaje aquí"
              class="py-2 mx-3 pl-5 block w-full rounded-full bg-gray-100 outline-none focus:text-gray-700" type="text"
              name="message" required />

            <button wire:click="sendMessage()" class="outline-none focus:outline-none" type="submit">
              <svg class="text-gray-400 h-7 w-7 origin-center transform rotate-90" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20" fill="currentColor">
                <path
                  d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z" />
              </svg>
            </button>
          </div>

        </div>
      </div>

    </x-contacto-amarillo.contacto-container>
  </div>
</div>