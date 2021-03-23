<div>
    <div wire:init="pageLoaded" x-data="subareaListen()" class="cursor-pointer h-64  overflow-auto text-base m-2 py-2">
        @forelse ($subcategories as $key => $item)
        <p wire:ignore x-on:click="togleTagClass({{$key}}, event)" id="subcat{{ $key }}"
            class="mb-2 px-2 cursor-pointer ">
            {{$item}}
        </p>
        @empty
        <p class="mb-2 px-2">Nada que mostrar</p>
        @endforelse
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