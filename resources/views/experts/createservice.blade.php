<x-contacto-amarillo.contacto-layout title="Crear servicio">
    <x-slot name="header">
        <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
            {{ __('Crear nuevo servicio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <livewire:create-service />
    </div>

    @push('modals')

    @endpush
</x-contacto-amarillo.contacto-layout>