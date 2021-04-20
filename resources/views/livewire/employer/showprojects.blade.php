<div>
    {{-- The best athlete wants his opponent at his best. --}}
</div>
@push('modals')
<script>
    Livewire.on('success', message => {
            thimsg = message;
            Toast.fire({
                icon: 'success',
                title: thimsg
            });
        });

        Livewire.on('error', message => {
            thimsg = message;
            Toast.fire({
                icon: 'error',
                title: thimsg
            });
        })

</script>
@endpush