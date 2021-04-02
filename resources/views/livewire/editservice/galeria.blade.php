<div>
    <x-contacto-amarillo.contacto-card grid="col-span-5">
        <h2 class="text-xl font-semibold">Crea la galeria de tu servicio</h2>
        <p class="text-sm text-gray-600 mb-8">
            Agrega contenido único, quiza parte de tu portafolio, y muestra lo que
            puedes ofrecer
        </p>
        <div class="flex items-center bg-gray-200 rounded-sm shadow-md p-6">
            <svg class="w-10 h-10 fill-current text-gray-800 mr-4" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path
                    d="M12 1l-12 22h24l-12-22zm-1 8h2v7h-2v-7zm1 11.25c-.69 0-1.25-.56-1.25-1.25s.56-1.25 1.25-1.25 1.25.56 1.25 1.25-.56 1.25-1.25 1.25z" />
            </svg>
            <p class="tracking-wide leading-relaxed text-justify">
                <span class="font-bold">¡Importante!</span> Asegurate que el contenido
                sea de tu autoria o que el autor te haya permitido usarlo, para evitar
                demandas por derechos de autor.
            </p>
        </div>
        <div class="flex flex-between mt-8">
            @forelse ($imagenes as $imagen)
                <div class="relative  h-48 w-48">
                    <img class="h-48 w-48 rounded-sm" src="{{ asset('storage/' . $imagen->ruta) }}" />
                    <a class="absolute bg-black p-2 rounded-md bottom-2 right-2" href="#"
                        onclick="confirmAction('deleteImage', {{ $imagen->id }});">
                        <svg class="w-4 h-4 fill-current text-red-500 hover:text-red-600" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                                d="M3 8v16h18v-16h-18zm5 12c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm5 0c0 .552-.448 1-1 1s-1-.448-1-1v-8c0-.552.448-1 1-1s1 .448 1 1v8zm4-15.375l-.409 1.958-19.591-4.099.409-1.958 5.528 1.099c.881.185 1.82-.742 2.004-1.625l5.204 1.086c-.184.882.307 2.107 1.189 2.291l5.666 1.248z" />
                        </svg>
                    </a>
                </div>
            @empty
                <p>Ninguna imagen en tu galeria</p>
            @endforelse
        </div>

        <hr />
        <div class="bg-red-400 bg-transparent mt-8">
            <form class="dropzone" action="/submitfoto/{{ $serviceId }}" wire:submit.prevent="submitFoto"
                id="dropzoneimg">
                @csrf
            </form>
        </div>
        <div class="my-4 text-sm font-semibold text-red-500">
            @error('arraytags') <span class=" error">{{ $message }}</span> @enderror
        </div>
        <div class="flex justify-between">
            <x-contacto-amarillo.contacto-button color="red" onclick="location.href='{{ url('services') }}'"
                class="mt-4">cancelar
            </x-contacto-amarillo.contacto-button>
            <x-button wire:click="updateImage" class="mt-4">Actualizar</x-button>
        </div>
    </x-contacto-amarillo.contacto-card>
</div>
@push('modals')
    <script>
        Livewire.on('success', message => {
            thimsg = message;
            Toast.fire({
                icon: 'success',
                title: thimsg
            });
        });

        Livewire.on('error', message => {
            thimsg = message;
            Toast.fire({
                icon: 'error',
                title: thimsg
            });
        })

    </script>
@endpush
