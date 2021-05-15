<div class="h-auto mb-5 flex-1 mr-5">
    <label for="{{$label}}" class="text-white text-sm md:text-base">{{$label}}</label>
    <div class="relative mt-1 h-auto w-full">
        <input wire:model={{$wiremodel}} type="text" id="{{$label}}" placeholder="{{$placeholder}}"
            class="bg-white w-full h-14 rounded-2xl  pl-14 md:text-lg lg:w-full focus:bg-gray-100">
        <div class="absolute top-4 left-4">
            {{$imgInput}}
        </div>
    </div>
</div>