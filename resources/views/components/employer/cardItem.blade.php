<a href="#" class="inline-block hover:bg-gray-50 w-72 border-2 border-gray-400 h-auto shadow-md mr-8">
    <div class="flex flex-col h-auto">
        <div class="w-full h-44"><img class="object-cover border border-gray-400" src="{{$srcImage}}" alt=""></div>
        <div class="p-4">
            <div class="flex mt-10">
                <div class="mr-3"><img class="w-7 h-7 rounded-full" src="{{$imageUserSrc}}" alt=""></div>
                <div>
                    <p class="bold">{{$nameAuthor}}</p>
                    <p class="text-gray-500 text-sm">{{$memberSince}}</p>
                </div>
            </div>
            <div class="mt-3">
                <p class="text-lg font-bold text-gray-700 leading-5">{{$slot}}</p>
            </div>
            <div class="flex justify-between mt-2 items-center">
                <p class="text-gray-500 my-2"><span class="text-main-yellow font-bold text-lg">&#9733; 5.0 </span>(105)</p>
                <div class="text-gray-600 text-sm">A PARTIR DE <span class="text-lg font-bold">${{$price}}</span></div>
            </div>
        </div>
        
    </div>
</a>