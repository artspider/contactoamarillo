<x-contacto-amarillo.contacto-layout title="Habilidades">
    <x-slot name="header">
        <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
            {{ __('Habilidades') }}
        </h2>
    </x-slot>

    @if (session()->has('error'))
    <script>
        Toast.fire({
            icon: 'error',
            title: "{{ session("error") }}"
        }
        )
    </script>
    @endif
    @if (session()->has('success'))
    <script>
        Toast.fire({
            icon: 'success',
            title: "{{ session("success") }}"
        }
        )
    </script>
    @endif

    <div class="py-12">
        <livewire:ability />
    </div>

    @push('modals')

    @endpush
</x-contacto-amarillo.contacto-layout>