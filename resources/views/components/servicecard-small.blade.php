<div class="flex flex-col w-1/333 mb-10 bg-transparent mx-auto  shadow hover:shadow-md  ">
    <a href="{{$ruta}}">
        <div class="flex  h-36 md:flex-col">
            <img class="object-cover w-1/3 h-full rounded-l-lg border-yellow-600 border-l-8 lg:rounded-r-lg  md:w-full"
                src="{{$srcImage}}" alt="">
        </div>

        <div class="w-2/3  flex flex-col items-start px-2 py-2 bg-gray-100  md:w-full">
            <p class="text-sm font-bold tracking-tight text-justify mb-2">
                {{ \Illuminate\Support\Str::limit($slot, 52, $end='...') }}
            </p>
            <p class="text-sm py-1 px-2 bg-gray-200 text-center rounded-full">Desde ${{$price}}</p>
        </div>

        <div class=" bg-main-yellow py-2 px-2  rounded-b-lg ">

            <div class="flex items-center">
                <img class="w-7 h-7 rounded-full mr-3" src="{{$imageUserSrc}}" alt="">
                <p class="text-sm">{{$nameAuthor}}</p>
            </div>
            <div>
                <p class="text-gray-500 text-xs my-2  text-right"><span class="text-black font-bold text-sm">&#9733; 5.0
                    </span>(105)
                </p>
            </div>
        </div>
    </a>
</div>