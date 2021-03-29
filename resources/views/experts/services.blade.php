<x-contacto-amarillo.contacto-layout title="Services">
    <x-slot name="header">
        <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
            {{ __('Servicios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <livewire:services />
    </div>

    @push('modals')

    @endpush
</x-contacto-amarillo.contacto-layout>