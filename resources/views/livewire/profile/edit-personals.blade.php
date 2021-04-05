<x-jet-form-section submit="updatePersonals">
  <x-slot name="title">
    {{ __('Datos personales') }}
  </x-slot>

  <x-slot name="description">
    {{ __('Indicanos tus datos personales.') }} </x-slot
  >}

  <x-slot name="form">
    <!-- Pais -->
    <div class="col-span-6 sm:col-span-4">
      <label for="pais" class="block font-medium text-sm text-gray-700"
        >País</label
      >
      <select
        wire:model="country"
        name="pais"
        id="pais"
        class="mt-1 resize-none block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
      >
        @forelse ($countries as $country)
        <option value="{{ $country }}">{{ $country->name }}</option>
        @empty
        <option value="">No hay datos cargados</option>
        @endforelse
      </select>
    </div>

    <!-- Ciudad -->
    <div class="col-span-6 sm:col-span-4">
      <label for="ciudad" class="block font-medium text-sm text-gray-700"
        >Ciudad</label
      >
      <select
        name="ciudad"
        id="ciudad"
        class="mt-1 resize-none block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
      >
        @isset($states) @endisset @empty($states)
        <option value="">No has seleccionado un país</option>
        @endempty
      </select>
    </div>
  </x-slot>

  <x-slot name="actions">
    <x-jet-action-message class="mr-3" on="saved">
      {{ __('Actualizado.') }}
    </x-jet-action-message>

    <x-jet-button wire:loading.attr="disabled" wire:target="">
      {{ __('Actualizar') }}
    </x-jet-button>
  </x-slot>
</x-jet-form-section>
