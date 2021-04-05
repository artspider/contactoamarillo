<section class="mb-6 ">
    <p class="font-semibold mb-3 text-center">Recommended Projects</p>

    <div class="md:items-center h-96 bg-gray-50 rounded-3xl shadow-lg flex flex-col justify-center lg:h-96 lg:w-96 ">
        <div class="w-11/12 mx-auto"> 
            <div class="flex justify-between w-full items-center">
                <div class="flex items-center">   
                    <div class="mr-7"><img class="rounded-full w-16" src="https://randomuser.me/api/portraits/men/81.jpg" alt=""></div>
                
                    <div>
                        <p class="font-bold mb-1">{{$nameAutorProject}}</p>
                        <p class="text-sm text-gray-500">{{$lastUpdate}}</p>
                    </div>
                </div>
                <div>
                    <p class="rounded-full py-2 px-4 font-black bg-main-yellow">{{$typeProject}}</p>
                </div>
            </div>
            <div class="mx-auto w-full pt-7 mb-3">
                <p class="text-gray-900 font-bold text-lg leading-none text-justify">{{$topicProject}}</p>
                <p class="pt-4 text-gray-500 text-justify">{{$descriptionProject}}</p>
            </div>
            <div class="bg-main-yellow flex justify-around px-5 py-5 rounded-2xl mx-2 mt-4">
                <div class="flex items-center">
                    <p class="self-start pt-1">$</p>
                    <p class="text-4xl mr-1 font-bold">{{$priceProject}}</p>
                    <p class="self-end pb-2 text-gray-500">/ {{$typeOfPay}}</p>
                </div>
                <div class="bg-black px-4 text-white rounded-full text-sm flex items-center">{{$hiring}}</div>
            </div>
        </div>
    </div>
</section>