<x-contacto-amarillo.contacto-layout title="Editar servicio">
    <x-slot name="header">
        <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
            {{ __('Editar Servicio') }}
        </h2>
    </x-slot>

    <!-- grid grid-cols-1 lg:grid-cols-8 gap-4 -->
    <x-contacto-amarillo.contacto-container>
        <div x-data="{step:1}" class="col-span-6">
            <div x-show="step===1">
                <x-contacto-amarillo.contacto-steps step=1 />
                <livewire:editservice.overview :id="$id">
            </div>

            <div x-show="step===2">
                <x-contacto-amarillo.contacto-steps step=2 />
                <livewire:editservice.precio :id="$id">
            </div>

            <div x-show="step===3">
                <x-contacto-amarillo.contacto-steps step=3 />
                <livewire:editservice.descripcion :id="$id">
            </div>

            <div x-show="step===4">
                <x-contacto-amarillo.contacto-steps step=4 />
                <livewire:editservice.galeria :id="$id">
            </div>


        </div>

    </x-contacto-amarillo.contacto-container>
</x-contacto-amarillo.contacto-layout>
