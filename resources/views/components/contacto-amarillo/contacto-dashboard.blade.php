<x-contacto-amarillo.contacto-layout>
    <script>
        Toast.fire({
  icon: 'success',
  title: 'Signed in successfully'
});
    </script>
    <x-contacto-amarillo.contacto-header />

    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
    </h2>
    </x-slot> --}}



    @push('modals')
    <script>

    </script>
    @endpush
</x-contacto-amarillo.contacto-layout>