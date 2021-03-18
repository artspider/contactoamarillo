<!-- Boton menu hamburguesa -->
<div class="menu__ham lg:hidden absolute right-0 mt-2 pr-4">
    <button type="button" class="  text-gray-500 lg:hidden focus:text-white focus:outline-none "
        x-on:click="isOpen=!isOpen" :class="{ 'transition transform-180': isOpen }">
        <svg viewBox="0 0 20 20" fill="currentColor" class="menu w-6 h-6">
            <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd">
            </path>
        </svg>
    </button>
</div>
<!-- Termina boton menu hamburguesa -->