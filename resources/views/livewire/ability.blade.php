<div>

    <div class="alpinefunction" x-data="abilityListen()">
        <section id="habildades"
            class="profile__body max-w-7xl  my-4 grid grid-cols-1 lg:grid-cols-8 gap-4 mx-auto sm:px-6 lg:px-8">
            <article
                class="especializacion flex flex-wrap  lg:col-span-6 text-sm lg:text-xl bg-white rounded-lg shadow-lg p-4">
                <div class="w-1/2 mr-8">
                    <div class="flex items-center mb-4">
                        <h2 class="mr-2 ">Área de especialidad</h2>
                        <span class="text-base text-gray-600">(Máximo 3)</span>
                    </div>
                    <livewire:speciality />
                </div>
                <div class="  w-1/3 ">
                    <div>
                        <div class="flex  items-center">
                            <p class="mr-2">Subarea</p>
                            <span class="text-base text-gray-600">(puedes selecionar varias)</span>
                        </div>
                        <livewire:speciality-block />
                    </div>

                </div>
            </article>

            <article
                class="flex items-center  lg:col-span-2 lg:col-end-9 text-center  w-full max-h-96 bg-white rounded-lg shadow-lg p-4">
                <div class="mx-auto">
                    <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                        class="rounded-full h-32 w-32 object-cover mx-auto">

                    <h2 class="text-2xl font-serif mt-4 mb-3">{{Auth::user()->name}}</h2>
                    <p class="mb-1">Miembro desde {{Auth::user()->created_at->diffForHumans()}}</p>
                    <p>{{Auth::user()->email}}</p>
                </div>

            </article>

            <article
                class="habilidades__especialidad lg:col-span-6 text-sm lg:text-xl bg-white rounded-lg shadow-lg p-4">

                <h2 class="text-xl font-serif mb-4">Habilidades</h2>
                <label class="block text-sm text-gray-600" for="clasificacion">Categoria</label>
                <select wire:model="CategoriaId"
                    class="w-2/3 focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mb-1"
                    name="clasificacion" id="clasificacion" placeholder="Clasificación">
                    <option value=" "> Selecciona una categoria </option>
                    @foreach ($categorias as $item)
                    <option value=" {{ $item['id'] }}  "> {{ $item['nombre'] }} </option>
                    @endforeach
                </select>


                <label class="block text-sm text-gray-600 mt-4" for="clasificacion_nivel2">Subcategoría</label>
                <select wire:model="subcategoriaId"
                    class="w-2/3 focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-1 px-4 mb-1"
                    name="clasificacion_nivel2" id="clasificacion_nivel2" placeholder="Clasificación">
                    <option value=" "> Selecciona una subcategoria </option>
                    @isset($subcategorias)
                    @foreach ($subcategorias as $item)
                    <option value=" {{ $item['id'] }}  "> {{ $item['name'] }} </option>
                    @endforeach
                    @endisset
                </select>


                <div class="habilidades--group mt-4 mb-4">
                    <p class="text-sm text-gray-600">Estas son las habilidades tienes en tu portafolio (clic para
                        eliminarlas)
                    </p>
                    @isset($habilidades)
                    @foreach ($habilidades as $habilidad)
                    <span wire:ignore wire:key="{{ $habilidad['id'] }}" id="tagrem{{ $habilidad['id'] }}"
                        x-on:click="togleTagRemoveClass({{ $habilidad['id'] }}, event)"
                        {{-- wire:click="removeTag({{ $habilidad['id'] }})" --}}
                        class="cursor-pointer habilidades--single inline-block rounded-full bg-gray-600 text-sm text-white px-8 py-1 mb-4">
                        {{ $habilidad['name'] }}
                    </span>
                    @endforeach
                    @endisset
                </div>

                @isset($subcategoriaTags)
                <div class="mt-6">
                    <p class="text-sm text-gray-600">Estas son las habilidades que puedes agregar </p>
                    @foreach ($tagsDisponibles as $key => $tag)
                    <span wire:ignore id="tag{{ $key }}" x-on:click="togleTagClass({{$key}},event)"
                        {{-- wire:click="addAbility({{ $key }})" --}} class="cursor-pointer habilidades--single inline-block ro rounded-full text-sm text-black px-8 py-1 mb-4
              border-gray-600 border-solid border-2">
                        {{ $tag }}
                    </span>
                    @endforeach
                </div>
                @endisset

            </article>

        </section>
    </div>
</div>