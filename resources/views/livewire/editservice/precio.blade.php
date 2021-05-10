<div>
    <x-contacto-amarillo.contacto-card grid="col-span-5">
        <h2 class="text-xl font-semibold mb-8">Precio, tiempo y entregables</h2>
        <div class="flex items-center mb-4">
            <p class="text-base text-gray-800 font-semibold uppercase mr-4 w-1/3">
                Tiempo de entrega
            </p>
            <select wire:model="tiempoDeEntrega"
                class="w-2/3 text-sm uppercase font-bold border-2 border-gray-300 focus:ring-2 focus:ring-yellow-300 rounded-lg py-1 px-4 mb-1"
                name="" id="">
                <option value=" ">Tiempo de entrega</option>
                @isset($tiempoDeEntregaData) @foreach ($tiempoDeEntregaData as $tiempoDeEntrega)
                <option value=" {{ $tiempoDeEntrega }}  ">
                    {{ $tiempoDeEntrega }}
                </option>
                @endforeach @endisset
            </select>
        </div>
        <div class="my-4 text-sm font-semibold text-red-500">
            @error('tiempoDeEntrega')
            <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="flex items-top mb-4">
            <p class="text-base text-gray-800 font-semibold uppercase mr-4 w-1/3">
                Entregables
            </p>
            <div class="w-2/3">
                <textarea wire:model="entregables"
                    class="w-full resize-none focus:ring-2 focus:ring-yellow-300 focus:outline-none focus:shadow-none focus:border-0 focus:bg-transparent"
                    name="" id="" cols="30" rows="10"
                    placeholder="Puede ser el sitioweb, portafolio, documento de texto, imagenes psd, etc"></textarea>
            </div>
        </div>
        <div class="my-4 text-sm font-semibold text-red-500">
            @error('entregables') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="flex items-center">
            <p class="text-base text-gray-800 font-semibold uppercase mr-4 w-1/3">
                Precio
            </p>
            {{-- <input wire:model="precio" class="fit-input w-2/3" type="number" step="5" min="5" max="10000" value=""
                placeholder="$" /> --}}

            <div class="relative items-center border border-gray-900 focus:border-transparent w-2/3">
                <p class="absolute top-3 left-5">$</p>
                <input wire:model="precio"
                    class="pl-8 fit-input w-full border border-transparent focus:border-transparent 
                        focus:ring-2 focus:ring-yellow-300 focus:outline-none focus:shadow-none focus:border-0 focus:bg-transparent"
                    type="number" step="5" min="5" max="10000" value="" placeholder="$" />
                <p class="absolute top-3 right-10">MXN</p>
            </div>
        </div>
        <div class="my-4 text-sm font-semibold text-red-500">
            @error('precio') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div class="flex justify-between">
            <x-contacto-amarillo.contacto-button color="red" onclick="location.href='{{ url('services') }}'"
                class="mt-4">cancelar
            </x-contacto-amarillo.contacto-button>
            <x-button wire:click="savePrecio" class="mt-4">Actualizar</x-button>
        </div>
    </x-contacto-amarillo.contacto-card>
</div>