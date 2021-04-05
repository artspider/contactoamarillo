<x-jet-form-section submit="updatePresentation">
  <x-slot name="title">
    {{ __('Presentación') }}
  </x-slot>

  <x-slot name="description">
    {{
      __(
        'Presentate con la comunidad de ContactoAmarillo e indica que puedes hacer por los clientes.'
      )
    }}
  </x-slot>

  <x-slot name="form">
    <!-- Quien soy -->
    <div class="col-span-6 sm:col-span-4">
      <label for="quien_soy" class="block font-medium text-sm text-gray-700"
        >¿Quién soy?</label
      >
      <textarea
        wire:model.defer="quien_soy"
        name="quien_soy"
        id="quien_soy"
        cols="30"
        rows="10"
        class="mt-1 resize-none block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
        >{{ $quien_soy }}</textarea
      >
    </div>
  </x-slot>

  <x-slot name="actions">
    <x-jet-action-message class="mr-3" on="saved">
      {{ __('Actualizado.') }}
    </x-jet-action-message>

    <x-jet-button wire:loading.attr="disabled" wire:target="quien_soy">
      {{ __('Actualizar') }}
    </x-jet-button>
  </x-slot>
</x-jet-form-section>
