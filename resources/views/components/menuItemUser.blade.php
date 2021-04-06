<div>
    <div id="xxx" class=" absolute top-4 right-4 cursor-pointer " x-on:click="close()"> 
        <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.151 17.943l-4.143-4.102-4.117 4.159-1.833-1.833 4.104-4.157-4.162-4.119 1.833-1.833 4.155 4.102 4.106-4.16 1.849 1.849-4.1 4.141 4.157 4.104-1.849 1.849z" />
        </svg>
    </div>
    <div class="h-1/3 w-1/3 mx-auto">
        <img class="rounded-full" src="https://randomuser.me/api/portraits/women/86.jpg">
    </div>

    <div class="text-center">
        <p class="text-2xl pt-6 font-bold">{{$name}}</p>
        <div class="inline-block">
            <p class="bg-main-yellow py-2 px-4 mt-2 rounded-full text-gray-800 font-semibold">{{$typeAcc}}</p>
        </div>
    </div>
</div>