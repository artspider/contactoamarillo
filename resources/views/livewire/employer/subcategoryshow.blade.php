<div>
    <div x-data="{ subcat: @entangle('subcatselected') }" class="flex flex-col mb-8">
        <div class="mt-32 mb-8">
            <x-employer.container>
                <x-employer.categorias.titleCategory>
                    {{ $categoria->nombre }}
                </x-employer.categorias.titleCategory>
                <x-employer.categorias.gridContainerSubCategory>
                    @forelse ($subcategorias as $subcategoria)
                    <x-employer.categorias.subCenlace id="{{$subcategoria->id}}">
                        {{$subcategoria->name}}
                        <x-slot name="path">
                            #
                        </x-slot>
                    </x-employer.categorias.subCenlace>
                    @empty

                    @endforelse

                </x-employer.categorias.gridContainerSubCategory>
            </x-employer.container>

        </div>
        <div x-show="subcat!==0">
            <x-employer.container>

                @isset($subcategoria_)
                <h2 class="text-4xl w-full mb-14 mt-12 pl-6">
                    {{$subcategoria_->name}}</h2>
                @endisset

            </x-employer.container>

            <div class="flex flex-row flex-wrap justify-between w-11/12 mx-auto">
                @isset($services)
                @foreach ($services as $service)
                <x-employer.categorias.cardItem2 ruta="/expert/showservice/{{$service->id}}">
                    <x-slot name="srcImage">
                        @isset($service->imagenes()->first()->ruta)

                        {{ asset('storage/' . $service->imagenes()->first()->ruta) }}
                        @endisset
                        @empty($service->imagenes()->first()->ruta)
                        https://cdn.dribbble.com/users/1615584/screenshots/14947408/media/b9701a4bb0c77c22a8a3150bd91ac80e.jpg?compress=1&resize=1000x750
                        @endempty

                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/8.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        {{$service->expert->nombre}}
                    </x-slot>
                    <x-slot name="review">
                        4.9
                    </x-slot>
                    <x-slot name="completedProjects">
                        112
                    </x-slot>

                    {{$service->titulo}}

                    <x-slot name="price">
                        {{$service->precio}}
                    </x-slot>
                </x-employer.categorias.cardItem2>
                @endforeach


                @endisset

            </div>
        </div>
    </div>
</div>