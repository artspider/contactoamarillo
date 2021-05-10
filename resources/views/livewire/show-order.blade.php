<div>
  <x-slot name="header">
    <div class="flex justify-between items-center">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Order') }}
      </h2>

    </div>
  </x-slot>

  {{ Breadcrumbs::render('showorder', $order->id) }}

  <div x-cloak x-data="{tab:'1'}">

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
          <div class="col-span-6 flex flex-col">
            <div class="w-11/12  mb-5 rounded-md shadow-md p-8">
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
            <div class="h-32 w-11/12 border-l-4 border-t border-b border-r border-main-yellow p-2">
              <textarea wire:model="message" class="w-full h-14 rounded-md overflow-x-auto" type="text" name="" id=""
                name="" id="" cols="30" rows="10"></textarea>
              <div class="flex items-center justify-end mt-2">
                <svg class="mr-2 w-6 h-6 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24">
                  <path
                    d="M21.586 10.461l-10.05 10.075c-1.95 1.949-5.122 1.949-7.071 0s-1.95-5.122 0-7.072l10.628-10.585c1.17-1.17 3.073-1.17 4.243 0 1.169 1.17 1.17 3.072 0 4.242l-8.507 8.464c-.39.39-1.024.39-1.414 0s-.39-1.024 0-1.414l7.093-7.05-1.415-1.414-7.093 7.049c-1.172 1.172-1.171 3.073 0 4.244s3.071 1.171 4.242 0l8.507-8.464c.977-.977 1.464-2.256 1.464-3.536 0-2.769-2.246-4.999-5-4.999-1.28 0-2.559.488-3.536 1.465l-10.627 10.583c-1.366 1.368-2.05 3.159-2.05 4.951 0 3.863 3.13 7 7 7 1.792 0 3.583-.684 4.95-2.05l10.05-10.075-1.414-1.414z" />
                </svg>
                <x-contacto-amarillo.contacto-button color="gray" wire:click="sendMessage">
                  <x-slot name="is_disabled">
                    {{$is_disabled}}
                  </x-slot>
                  enviar
                </x-contacto-amarillo.contacto-button>
              </div>
            </div>
          </div>
        </x-contacto-amarillo.contacto-container>
      </div>
    </div>
  </div>
</div>