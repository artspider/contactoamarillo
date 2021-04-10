<div>
    <x-jet-form-section submit="updateSocials">
        <x-slot name="title">
            {{ __('Redes sociales') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Comparte tus redes sociales.') }}
        </x-slot>

        <x-slot name="form">
            <div class="col-span-6 sm:col-span-4">
                <label for="facebook" class="block font-medium text-sm text-gray-700">Facebook</label>
                <input wire:model="facebook" type="text"
                    class="mt-1 resize-none block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="Twitter" class="block font-medium text-sm text-gray-700">Twitter</label>
                <input wire:model="twitter" type="text"
                    class="mt-1 resize-none block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="Dribbble" class="block font-medium text-sm text-gray-700">Dribbble</label>
                <input wire:model="dribbble" type="text"
                    class="mt-1 resize-none block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="GitHub" class="block font-medium text-sm text-gray-700">GitHub</label>
                <input wire:model="github" type="text"
                    class="mt-1 resize-none block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
            </div>

            <x-slot name="actions">
                <x-jet-action-message class="mr-3" on="saved">
                    {{ __('Actualizado.') }}
                </x-jet-action-message>

                <x-jet-button wire:loading.attr="disabled" wire:target="">
                    {{ __('Actualizar') }}
                </x-jet-button>
            </x-slot>
        </x-slot>
    </x-jet-form-section>
</div>