<div>
    <div x-data=descripcion()>
        <x-contacto-amarillo.contacto-card grid="col-span-5">
            <h2 class="text-xl font-semibold mb-8">Descripción del servicio</h2>
            <div class="mb-4">
                <p class="text-base text-gray-800 font-semibold uppercase mb-4">
                    Breve descripción del servicio a ofrecer
                </p>
                {{-- <textarea wire:model="descripcion" id="mytextarea"
                placeholder="Puedes describir con detalles tu servicio"></textarea> --}}
                <!-- Create the editor container -->
                <div id="editor">
                    {!! $descripcion !!}
                </div>
            </div>
            <div class="my-4 text-sm font-semibold text-red-500">
                @error('descripcion') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="flex justify-between">
                <x-contacto-amarillo.contacto-button color="red" onclick="location.href='{{ url('services') }}'"
                    class="mt-4">cancelar
                </x-contacto-amarillo.contacto-button>
                <x-button x-on:click="quillShow()" class="mt-4">Actualizar</x-button>
            </div>
        </x-contacto-amarillo.contacto-card>
    </div>
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
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow'
        });
        Livewire.on('showquill', postId => {
            var quill = new Quill('#editor', {
                theme: 'snow'
            });
        })

    </script>


@endpush
