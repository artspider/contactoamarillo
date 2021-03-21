<div>

    @if (session()->has('success'))
    <script>
        Toast.fire({
            icon: 'success',
            title: "{{ session("success") }}"
        }
        )
    </script>
    @endif
    <label class="block text-sm text-gray-600" for="clasificacion">Área</label>
    <select wire:model="CategoriaId"
        class="w-1/2 focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mb-1"
        name="clasificacion" id="clasificacion" placeholder="Clasificación">
        <option value=" "> Selecciona una categoria </option>
        @foreach ($categorias as $item)
        <option value=" {{ $item['id'] }}  "> {{ $item['nombre'] }} </option>
        @endforeach
    </select>
    @if (session()->has('error'))
    <div>
        <p>Solo hasta 3 Areas de especializacion</p>
    </div>
    @endif
    <div>
        <ul>
            @isset($specialities)
            @foreach ($specialities as $item)
            <li>
                <x-contacto-amarillo.contacto-pill> {{ $item }} </x-pill>
            </li>
            @endforeach
            @endisset
        </ul>
    </div>
</div>