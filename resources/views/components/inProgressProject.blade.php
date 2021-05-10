@props(['typeProject' => "You don't have any project", 'daysRemaing' => '0 day remaing'])

<div class="flex w-11/12 items-center my-3 pl-4">
    <div><img class="w-16 rounded-full" src="{{$srcImg}}" alt=""></div>
    <div class="pl-8">
        {{$slot}}
        <p class="text-xs text-gray-500">{{$daysRemaing}}</p>
    </div>
</div>