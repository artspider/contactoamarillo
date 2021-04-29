<div class="bg-gray-200 rounded-2xl h-32 mx-2 flex flex-col justify-around">
    <div class="flex justify-around items-center">
        <!-- Rectangulo -->
        <div class="pl-1">
            <div class=" bg-main-yellow rounded-xl h-16 w-16 flex items-center justify-center sm:h-14 sm:w-14">
                <p class="text-lg sm:text-2xl">{{$numberProjects}}</p>
            </div>
        </div>
        <!-- RANK -->
        <div class="text-black h-5/6 flex flex-col justify-center w-1/2">
            <p class="text-base font-semibold">Projects</p>
            <p class="text-xs text-gray-400">{{$projectsFinished}}</p>
        </div>
    </div>
    <div class="flex justify-evenly">
        <div class="rounded-full bg-gray-400 text-xs lg:text-sm px-3 py-2">{{$advantage1}}</div>
        <div class="rounded-full bg-gray-400 text-xs lg:text-sm px-3 py-2">{{$advantage2}}</div>
    </div>
</div>