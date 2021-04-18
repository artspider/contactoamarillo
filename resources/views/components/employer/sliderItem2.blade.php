@props(['id'=>'3'])

<a href="/categoria/{{$id}}" class="inline-block px-3 hover:bg-gray-50">
        <div class="card-zoom">
            <img class="object-cover h-full w-full card-zoom-image" src="{{$imgSource}}" alt="">
            <div class="bg-gradient-to-t from-black w-full h-32 absolute z-10 bottom-0"></div>
            <p class="absolute bottom-5 left-12 z-20 text-white card-zoom-text w-36">{{$jobName}}</p>
        </div>
</a>
