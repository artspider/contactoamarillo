<x-contacto-amarillo.contacto-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-sm xl:text-xl text-gray-800 leading-tight">
            {{ __('Educación') }}
        </h2>
    </x-slot>

    {{ Breadcrumbs::render('education') }}

    @if (session()->has('error'))
    <script>
        Toast.fire({
                icon: 'error',
                title: "{{ session('error') }}"
            })

    </script>
    @endif
    @if (session()->has('success'))
    <script>
        Toast.fire({
                icon: 'success',
                title: "{{ session('success') }}"
            })

    </script>
    @endif

    <div x-data="{}" x-cloak class="py-12">
        <section id="education"
            class="profile__body max-w-7xl my-4 grid grid-cols-2 grid-rows-4 gap-4 mx-auto sm:px-6 lg:px-8">
            <article class="education__language text-sm lg:text-xl">
                <livewire:education.lang />
                <div class="mx-auto text-sm lg:text-xl mt-8">
                    <livewire:education.certification-component />
                </div>
            </article>
            <article class="educaction__education">
                <div class="mx-auto text-sm lg:text-xl">
                    <livewire:education.education />
                </div>
            </article>

        </section>
    </div>
</x-contacto-amarillo.contacto-layout>