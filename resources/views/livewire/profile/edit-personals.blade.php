<div>
  <x-jet-form-section submit="updatePersonals">
    <x-slot name="title">
      {{ __('Datos personales') }}
    </x-slot>

    <x-slot name="description">
      {{ __('Indicanos tus datos personales.') }} </x-slot>}

    <x-slot name="form">
      <!-- Pais -->
      <div class="col-span-6 sm:col-span-4">
        <label for="pais" class="block font-medium text-sm text-gray-700">País</label>
        <select wire:model.lazy="country" name="pais" id="pais"
          class="mt-1 resize-none block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
          @forelse ($countries as $country)
          <option value="{{ $country->name }}">{{ $country->name }}</option>
          @empty
          <option value="">No hay datos cargados</option>
          @endforelse
        </select>
      </div>

      <!-- estado -->
      <div class="col-span-6 sm:col-span-4 bg-red-300 py-2" wire:loading wire:target="country">
        Buscando estados...
      </div>
      @isset($states)
      <div class="col-span-6 sm:col-span-4">
        <label for="estado" class="block font-medium text-sm text-gray-700">Estado</label>
        <select wire:model="state" name="estado" id="estado"
          class="mt-1 resize-none block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
          @foreach ($states as $state)
          <option value="{{ $state }}">{{ $state }}</option>
          @endforeach
        </select>
      </div>
      @endisset

      @empty($states)

      @endempty

      <div class="col-span-6 sm:col-span-4 antialiased sans-serif">
        <label for="birthday" class="block font-medium text-sm text-gray-700">Fecha de nacimiento</label>

        <input
          class="mt-1 resize-none block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
          wire:model="birthday" type="date" id="birthday" name="birthday" value="2018-07-22" min="1965-01-01">
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
</div>

@push('modals')

@endpush