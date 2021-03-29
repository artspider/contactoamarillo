<div>
    @forelse ($services as $item)
        $item
    @empty
        <x-contacto-amarillo.contacto-container>
            Agrega un nuevo sitio
        </x-contacto-amarillo.contacto-container>
    @endforelse
</div>
