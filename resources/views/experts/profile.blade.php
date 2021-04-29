<x-layouts.master title="Profile">
    <x-slot name="header">
        <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
            {{ __('Perfil') }}
        </h2>
    </x-slot>

    {{ Breadcrumbs::render('profile') }}

    <div class="py-12">
        <x-contacto-amarillo.contacto-container>
            <div class="col-span-8 flex flex-col">
            </div>
        </x-contacto-amarillo.contacto-container>

    </div>

    @push('modals')

    @endpush
    </x-contacto-amarillo.contacto-layout>