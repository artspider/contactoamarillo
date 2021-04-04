<div>
  <div x-data="{isCertEdit: @entangle('isCertEdit') }" x-cloak>
    <!-- Add Certification -->
    <div
      x-show="!isCertEdit"
      class="profile--certification--add p-4 bg-white rounded-lg shadow-lg"
    >
      <p class="text-lg font-semibold">Certificaciones</p>
      <div class="certification--certificado my-4">
        <label class="block text-sm font-thin mb-1" for="Certificado"
          >Certificado
        </label>
        <input
          wire:model.debounce.500ms="certificado"
          type="text"
          name="certificado"
          class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
          placeholder="Certificado o premio"
        />
        @error('certificado')
        <p class="text-red-500 text-sm italic">
          {{ $message }}
        </p>
        @enderror
      </div>

      <div class="certification--emisor my-4">
        <label class="block text-sm font-thin mb-1" for="emisor">Emisor </label>
        <input
          wire:model.debounce.500ms="emisor"
          type="text"
          name="emisor"
          class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
          placeholder="Entidad emisora P.E. Microsoft"
        />
        @error('emisor')
        <p class="text-red-500 text-sm italic">
          {{ $message }}
        </p>
        @enderror
      </div>

      <div class="certification--anio my-4">
        <label class="block text-sm font-thin mb-1" for="anio">Año </label>
        <input
          wire:model.debounce.500ms="anio"
          type="text"
          name="anio"
          class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
          placeholder="Año en el que el certificado fue emitido (4 dígitos)"
        />
        @error('anio')
        <p class="text-red-500 text-sm italic">
          {{ $message }}
        </p>
        @enderror
      </div>

      <div class="certification--url my-4">
        <label class="block text-sm font-thin mb-1" for="url">URL </label>
        <input
          wire:model.debounce.500ms="url"
          type="text"
          name="url"
          class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
          placeholder="Enlace donde podemos encontrar tu certificado"
        />
        @error('url')
        <p class="text-red-500 text-sm italic">
          {{ $message }}
        </p>
        @enderror
      </div>

      <div class="flex justify-start">
        <x-button wire:click="saveCertification" class="mt-4">Guardar</x-button>
      </div>
    </div>
    <!-- Termina Add certificacion-->

    <!-- Edit Certification -->
    <div
      x-show="isCertEdit"
      class="profile--certification--add p-4 bg-red-300 rounded-lg shadow-lg"
    >
      <p class="text-lg font-semibold">Certificaciones</p>
      <div class="certification--certificado my-4">
        <label class="block text-sm font-thin mb-1" for="Certificado"
          >Certificado
        </label>
        <input
          wire:model.debounce.500ms="certificado"
          type="text"
          name="certificado"
          class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
          placeholder="Certificado o premio"
        />
        @error('certificado')
        <p class="text-red-500 text-sm italic">
          {{ $message }}
        </p>
        @enderror
      </div>

      <div class="certification--emisor my-4">
        <label class="block text-sm font-thin mb-1" for="emisor">Emisor </label>
        <input
          wire:model.debounce.500ms="emisor"
          type="text"
          name="emisor"
          class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
          placeholder="Entidad emisora P.E. Microsoft"
        />
        @error('emisor')
        <p class="text-red-500 text-sm italic">
          {{ $message }}
        </p>
        @enderror
      </div>

      <div class="certification--anio my-4">
        <label class="block text-sm font-thin mb-1" for="anio">Año </label>
        <input
          wire:model.debounce.500ms="anio"
          type="text"
          name="anio"
          class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
          placeholder="Año en el que el certificado fue emitido (4 dígitos)"
        />
        @error('anio')
        <p class="text-red-500 text-sm italic">
          {{ $message }}
        </p>
        @enderror
      </div>

      <div class="certification--url my-4">
        <label class="block text-sm font-thin mb-1" for="url">URL </label>
        <input
          wire:model.debounce.500ms="url"
          type="text"
          name="url"
          class="focus:outline-none text-sm focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mr-6 mb-1 w-4/5"
          placeholder="Enlace donde podemos encontrar tu certificado"
        />
        @error('url')
        <p class="text-red-500 text-sm italic">
          {{ $message }}
        </p>
        @enderror
      </div>

      <div class="flex justify-start">
        <x-contacto-amarillo.contacto-button
          wire:click="cancelEditCertification"
          color="red"
          class="mt-4 mr-4"
          >Cancelar</x-contacto-amarillo.contacto-button
        >
        <x-button wire:click="updateCertification" class="mt-4"
          >Guardar</x-button
        >
      </div>
    </div>
    <!-- End Edit Certification -->

    <!-- Show Certificacion -->
    <div
      class="profile--certification--add p-4 mt-8 bg-white rounded-lg shadow-lg"
    >
      @forelse ($certificaciones as $certificacion)
      <div class="educacion--group mt-2 ml-4">
        <p class="text-base font-semibold mb-1">
          {{ $certificacion->certificado }}
        </p>
        <p class="text-sm text-gray-500 items-baseline">
          {{ $certificacion->emisor }} - {{ $certificacion->anio_de_emision }}
        </p>
        <div class="flex justify-between">
          <p class="text-sm text-gray-500">{{ $certificacion->url }}</p>
          <div>
            <!-- Boton Eliminar certificacion -->
            <button
              x-on:click="confirmAction('removeCertificacion', {{$certificacion->id}})"
              x-show="!isCertEdit"
              class="btn mr-4"
            >
              <svg
                class="text-red-400 hover:text-red-500 h-4 w-4 fill-current"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
              >
                <path
                  d="M3 8v16h18v-16h-18zm5 12c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm4-15.375l-.409 1.958-19.591-4.099.409-1.958 5.528 1.099c.881.185 1.82-.742 2.004-1.625l5.204 1.086c-.184.882.307 2.107 1.189 2.291l5.666 1.248z"
                />
              </svg>
            </button>
            <!-- End Boton Eliminar certificacion -->

            <!-- Boton Editar certificacion -->
            <button
              wire:click="toEditForm( {{ $certificacion->id }} )"
              class="btn mr-4"
              x-show="!isCertEdit"
            >
              <svg
                class="w-4 h-5 fill-current hover:text-gray-500"
                height="512"
                viewBox="0 0 488.471 488.471"
                width="512"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M288.674 62.363L351.035.002l137.362 137.361-62.361 62.361zM245.547 105.541L0 351.088V488.47h137.382L382.93 242.923z"
                />
              </svg>
            </button>
            <!-- End Boton Editar certificacion -->
          </div>
        </div>
      </div>
      @empty
      <p class="text-sm text-gray-700">
        Aún no has agregado ningún certificado
      </p>

      @endforelse
    </div>
    <!-- End Show Certificacion -->
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
