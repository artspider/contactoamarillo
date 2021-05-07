<div>
  <div x-data="descripcion()" x-init="init($refs.wysiwyg)" x-cloak>
    <x-contacto-amarillo.contacto-card grid="col-span-5">
      <h2 class="text-xl font-semibold mb-8">Descripción del servicio</h2>
      <div class="mb-10">
        <p class="text-base text-gray-800 font-semibold uppercase mb-4">
          Breve descripción del servicio a ofrecer
        </p>
        <div class="w-full max-w-6xl mx-auto rounded-xl bg-white shadow-lg p-5 text-black">
          <div class="border border-gray-200 overflow-hidden rounded-md">
            <div class="w-full flex border-b border-gray-200 text-xl text-gray-600">
              <button
                class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                @click="format('bold')">
                <i class="mdi mdi-format-bold"></i>
              </button>
              <button
                class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                @click="format('italic')">
                <i class="mdi mdi-format-italic"></i>
              </button>
              <button
                class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50"
                @click="format('underline')">
                <i class="mdi mdi-format-underline"></i>
              </button>
              <button
                class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                @click="format('formatBlock','P')">
                <i class="mdi mdi-format-paragraph"></i>
              </button>
              <button
                class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                @click="format('formatBlock','H1')">
                <i class="mdi mdi-format-header-1"></i>
              </button>
              <button
                class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                @click="format('formatBlock','H2')">
                <i class="mdi mdi-format-header-2"></i>
              </button>
              <button
                class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50"
                @click="format('formatBlock','H3')">
                <i class="mdi mdi-format-header-3"></i>
              </button>
              <button
                class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                @click="format('insertUnorderedList')">
                <i class="mdi mdi-format-list-bulleted"></i>
              </button>
              <button
                class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 mr-1 hover:text-indigo-500 active:bg-gray-50"
                @click="format('insertOrderedList')">
                <i class="mdi mdi-format-list-numbered"></i>
              </button>
              <button
                class="outline-none focus:outline-none border-l border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                @click="format('justifyLeft')">
                <i class="mdi mdi-format-align-left"></i>
              </button>
              <button
                class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                @click="format('justifyCenter')">
                <i class="mdi mdi-format-align-center"></i>
              </button>
              <button
                class="outline-none focus:outline-none border-r border-gray-200 w-10 h-10 hover:text-indigo-500 active:bg-gray-50"
                @click="format('justifyRight')">
                <i class="mdi mdi-format-align-right"></i>
              </button>
            </div>
            <div class="w-full">
              <iframe id="wysiwyg" x-ref="wysiwyg" class="w-full h-96 overflow-y-auto"></iframe>
            </div>
          </div>
        </div>



      </div>
      <div class="my-4 text-sm font-semibold text-red-500">
        @error('descripcion') <span class="error">{{ $message }}</span> @enderror
      </div>
      <div class="flex justify-between">
        <x-button wire:click="saveDescripcionBack" class="mt-4 bg-green-500">Atrás</x-button>
        <x-button x-on:click="saveDesc()" class="mt-4">Guardar & Continuar
        </x-button>
      </div>
    </x-contacto-amarillo.contacto-card>
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

<script>
  Livewire.on('initDesc', message => {
            thimsg = message;
            window.initDesc(thimsg);
        })
</script>
@endpush