<div class="bg-gray-200 rounded-2xl h-24 mx-2  flex justify-around items-center">
    <!-- Rectangulo -->
    <div class="pl-1">
        <div class=" bg-main-yellow rounded-xl h-16 w-16 flex items-center justify-center sm:h-14 sm:w-14">
            <p class="text-lg">{{$numberRank}}</p>
        </div>
    </div>
    <!-- RANK -->
    <div class="text-black h-5/6 flex flex-col justify-center w-1/2">
        <p class="text-base font-semibold">Rank</p>
        <p class="text-xs text-gray-400">{{$topPercentage}}</p>
    </div>
</div>