<div>
    <div wire:init="pageLoaded" x-data="subareaListen()" class="cursor-pointer h-64  overflow-auto text-base m-2 py-2">
        @foreach ($subcategories as $key => $item)

        <p wire:ignore x-on:click="togleTagClass({{$key}}, event)" id="subcat{{ $key }}"
            class="mb-2 px-2 cursor-pointer ">
            {{$item}}</p>

        @endforeach
    </div>
</div>
@push('modals')
<script>
    Livewire.on('subcatselected', idinview => {
        thisid = idinview;
        elementId = "subcat" + idinview;
        togleWireClass(thisid,elementId);
    });
</script>
@endpush