<div class="w-full mt-10">
    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
    {{-- <img class="rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"> --}}
    <button
        class="flex text-sm mx-auto border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
        <img class="h-16 w-16 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
            alt="{{ Auth::user()->name }}" />
    </button>
    @else
    <span class="inline-flex rounded-md">
        <button type="button"
            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
            {{ Auth::user()->name }}

            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
            </svg>
        </button>
    </span>
    @endif
</div>
<div class="text-center mt-3 mb-10">
    <p class="text-xl font-semibold text-gray-300">{{ Auth::user()->name }}</p>
    <div class="inline-block">
        <p class="bg-main-yellow py-2 px-4 mt-2 rounded-lg text-gray-700 font-semibold">
            {{ Auth::user()->created_at->diffForHumans()}}</p>
    </div>
</div>