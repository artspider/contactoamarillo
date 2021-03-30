<div>
    @forelse ($services as $item)
        $item
    @empty
    <script>window.location = "{{ route('createservice') }}";</script>
    @endforelse
</div>
