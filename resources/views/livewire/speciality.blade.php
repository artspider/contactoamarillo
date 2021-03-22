<div>
    <div>
        <label class="block text-sm text-gray-600" for="clasificacion">Área</label>
        <select wire:model="CategoriaId"
            class="w-full focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mb-1"
            name="clasificacion" id="clasificacion" placeholder="Clasificación">
            <option value=" "> Selecciona una categoria </option>
            @foreach ($categorias as $item)
            <option value=" {{ $item['id'] }}  "> {{ $item['nombre'] }} </option>
            @endforeach
        </select>
        <div class="my-4 ">
            <ul class="flex flex-wrap">
                @isset($specialities)
                @foreach ($specialities as $key => $item)
                <li wire:click="removeSelected({{$key}})">
                    <x-contacto-amarillo.contacto-pill class="mb-2 cursor-pointer"> {{ $item }} </x-pill>
                </li>
                @endforeach
                @endisset
            </ul>
        </div>
    </div>
</div>

@push('modals')
<script>
    Livewire.on('totalcaterror', message => {
        thimsg = message;
        Toast.fire({
            icon: 'error',
            title: thimsg
        });
    })
    Livewire.on('success', message => {
        thimsg = message;
        Toast.fire({
            icon: 'success',
            title: thimsg
        });
    })
</script>
@endpush