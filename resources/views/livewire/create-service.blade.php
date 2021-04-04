<div>
    <!-- grid grid-cols-1 lg:grid-cols-8 gap-4 -->
    <x-contacto-amarillo.contacto-container>
        <div x-data="{step: @entangle('step')}" class="col-span-6">
            <!-- Opciones (pasos) -->
            <div class="flex justify-center col-span-7 text-base font-bold mb-8">
                <p class="mr-10">
                    <span class="   rounded-full py-1 px-3"
                        x-bind:class="{ 'bg-main-yellow' : step === 1, 'bg-black text-light-gray' : step !== 1 }">1</span>
                    Overview
                </p>
                <p class="mr-10">
                    <span class="   rounded-full py-1 px-3"
                        x-bind:class="{ 'bg-main-yellow' : step === 2, 'bg-black text-light-gray' : step !== 2 }">2</span>
                    Precio
                </p>
                <p class="mr-10">
                    <span class="   rounded-full py-1 px-3"
                        x-bind:class="{ 'bg-main-yellow' : step === 3, 'bg-black text-light-gray' : step !== 3 }">3</span>
                    Descripción
                </p>
                <p class="mr-10">
                    <span class="   rounded-full py-1 px-3"
                        x-bind:class="{ 'bg-main-yellow' : step === 4, 'bg-black text-light-gray' : step !== 4 }">4</span>
                    Galeria
                </p>
                <p class="mr-10">
                    <span class="   rounded-full py-1 px-3"
                        x-bind:class="{ 'bg-main-yellow' : step === 5, 'bg-black text-light-gray' : step !== 5 }">5</span>
                    Publicar
                </p>
            </div>
            <!-- Termina Opciones -->

            <div x-show="step===1">
                <livewire:createservice.overview>
            </div>

            <div x-show="step===2">
                <livewire:createservice.precio>
            </div>

            <div x-show="step===3">
                <livewire:createservice.descripcion>
            </div>

            <div x-show="step===4">
                <livewire:createservice.galeria>
            </div>

        </div>
    </x-contacto-amarillo.contacto-container>
</div>
