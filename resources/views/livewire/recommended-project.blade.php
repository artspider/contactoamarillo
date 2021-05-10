<p class="text-lg lg:text-xl font-bold mb-2">Proyecto recomendado</p>
<div class="flex flex-col  lg:w-96 bg-white rounded-3xl shadow-lg ">
    <div class="w-full mx-auto px-6 py-4">
        <div class="flex justify-between w-full items-center">
            <div class="flex items-center">
                <div class="mr-7"><img class="rounded-full w-16"
                        src="{{$recommendedProject->employer->users()->first()->profile_photo_url}}" alt="">
                </div>

                <div>
                    <p class="font-bold mb-1">{{$recommendedProject->employer->nombre}}</p>
                    <p class="text-sm text-gray-500">{{$recommendedProject->updated_at->diffForHumans()}}</p>
                </div>
            </div>
            <div class="">
                <p class="text-xs text-center rounded-full py-2 px-2 font-black bg-main-yellow">
                    {{$recommendedProject->subcategoria->name}}
                </p>
            </div>
        </div>
        <div class="mx-auto w-full pt-7 mb-2">
            <p class="text-gray-900 font-bold text-lg text-justify tracking-wide leading-snug">
                {{ Illuminate\Support\Str::limit($recommendedProject->description,120)  }}
            </p>

        </div>
        <div class="bg-main-yellow flex justify-around  py-5 mt-6 rounded-2xl w-full">
            <div class="flex items-center">
                <p class="self-start pt-1 text-gray-500">$</p>
                <p class="text-4xl mr-1 font-bold">{{$recommendedProject->budget}}</p>
                <p class="self-end pb-2 text-gray-500">/ {{$recommendedProject->delivery_time}} días</p>
            </div>
            <div class="bg-black px-4 text-white rounded-full text-sm flex items-center">Contactar</div>
        </div>
    </div>
</div>