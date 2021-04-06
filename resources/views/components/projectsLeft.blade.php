<div class="bg-gray-100 rounded-3xl h-24 w-5/6 flex flex-col justify-around">
    <div class="flex justify-around items-center">
        <!-- Rectangulo -->
        <div class="pl-1">
            <div class=" bg-main-yellow rounded-xl h-12 w-12 flex items-center justify-center sm:h-14 sm:w-14">
                <p class="text-lg sm:text-2xl">{{$numberProjects}}</p>
            </div>
        </div>
        <!-- RANK -->
        <div class="text-black h-5/6 flex flex-col justify-center w-1/2">
            <p class="text-sm sm:text-lg">Projects</p>
            <p class="text-2xs sm:text-xs text-gray-400">{{$projectsFinished}}</p>
        </div>
    </div>
    <div class="flex justify-evenly">
        <div class="rounded-full bg-gray-400 text-2xs px-1 py-1 sm:text-xs">{{$advantage1}}</div>
        <div class="rounded-full bg-gray-400 text-2xs px-1 py-1 sm:text-xs">{{$advantage2}}</div>
    </div>
</div>