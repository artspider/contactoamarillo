<div class="bg-gray-100 rounded-3xl h-20 w-5/6 flex justify-around items-center">
    <!-- Rectangulo -->
    <div class="pl-1">
        <div class=" bg-main-yellow rounded-xl h-12 w-12 flex items-center justify-center sm:h-14 sm:w-14">
            <p class="text-lg sm:text-2xl">{{$numberRank}}</p>
        </div>
    </div>
    <!-- RANK -->
    <div class="text-black h-5/6 flex flex-col justify-center w-1/2">
        <p class="text-sm sm:text-lg">Rank</p>
        <p class="text-2xs sm:text-xs text-gray-400">{{$topPercentage}}</p>
    </div>
</div>