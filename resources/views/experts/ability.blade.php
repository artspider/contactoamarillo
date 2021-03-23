<x-contacto-amarillo.contacto-layout title="Habilidades">
    <x-slot name="header">
        <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
            {{ __('Habilidades') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <livewire:ability />
    </div>

    @push('modals')

    @endpush
</x-contacto-amarillo.contacto-layout>