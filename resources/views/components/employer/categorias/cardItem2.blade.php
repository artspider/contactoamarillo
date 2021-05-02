<a href="{{$ruta}}"
    class="flex flex-col w-11/12 mb-10 bg-transparent mx-auto h-48 shadow hover:shadow-md sm:w-758 md:w-96 md:h-460">
    <div class="flex h-3/4 md:flex-col md:h-5/6">
        <img class="object-cover w-1/3 h-full rounded-l-lg border-yellow-600 border-l-8 lg:rounded-r-lg md:h-3/4 md:w-full"
            src="{{$srcImage}}" alt="">

        <div class="w-2/3 h-full flex flex-col justify-around items-start pl-5 bg-gray-100 md:h-1/4 md:w-full">
            <p class="text-base font-bold">{{$slot}}</p>
            <p class="text-sm py-1 px-2 bg-gray-200 text-center rounded-full">Desde ${{$price}}</p>
        </div>
    </div>

    <div class="h-1/4 bg-main-yellow py-3 px-4 flex justify-between items-center rounded-b-lg md:h-1/6">
        <div class="flex items-center">
            <img class="w-7 h-7 rounded-full mr-3" src="{{$imageUserSrc}}" alt="">
            <p class="text-sm">{{$nameAuthor}}</p>
        </div>
        <p class="text-gray-500 my-2"><span class="text-black font-bold text-lg">&#9733; 5.0 </span>(105)</p>
    </div>
</a>



<!--     <div class="w-1/3 h-28 lg:h-3/4 lg:w-full">
        <img class="object-cover w-full h-full rounded-l-lg border-yellow-600 border-l-8 lg:rounded-r-lg" src="https://cdn.dribbble.com/users/1615584/screenshots/14973122/media/347fdfd34ad38b7d5bf0cb690d66dd10.jpg?compress=1&resize=1000x750" alt="">
    </div> -->