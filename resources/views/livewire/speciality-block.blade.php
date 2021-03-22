<div x-data="subareaListen()" class="cursor-pointer h-64 bg-yellow-100  overflow-auto text-base m-2 py-2">
    @foreach ($subcategories as $key => $item)

    <p x-on:click="togleTagClass({{$key}}, event)" id="subcat{{ $key }}" class="mb-2 px-2 cursor-pointer ">{{$item}}</p>

    @endforeach
</div>