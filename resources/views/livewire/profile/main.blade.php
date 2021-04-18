<x-slot name="header">
  <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
    {{ __('Perfil') }}
  </h2>
</x-slot>

{{ Breadcrumbs::render('profile') }}

@isset($profile)
<div x-data={open:false}>
  <div x-show="!open" class="lg:grid lg:grid-cols-10 max-w-7xl px-6 my-4 gap-4 mx-auto">
    <div class="lg:col-span-3 row-span-6">
      <!-- Perfil -->
      <div class="bg-white w-10/12 rounded-md shadow-md pb-2 mb-8">
        <div class="relative">
          <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
            class="w-full h-80 object-top object-cover mx-auto" />
          <a href="#" @click="open = true" class="absolute top-2 right-2">
            <x-icons.edit
              class="text-gray-400 hover:text-black bg-yellow-200 hover:bg-main-yellow mx-auto p-2 rounded-full">
            </x-icons.edit>
          </a>
        </div>
        <div class="bg-black text-main-yellow text-lg font-semibold pl-4 py-1">
          Stars
        </div>
        <div class="m-4">
          <h3 class="text-lg font-bold mb-2">{{ $expert->nombre }}</h3>
          <p class="text-sm text-gray-700 font font-semibold text-justify leading-relaxed mb-3">
            @isset($profile->quien_soy)
            {{ $profile->quien_soy }}
            @endisset

          </p>
          <x-icons.habilities class="text-gray-700">{{ str_replace(',', ', ', $expert->especialidad) }}
          </x-icons.habilities>
          <x-icons.location class="text-gray-700">
            @isset($profile->estado)
            {{ $profile->estado }}, {{ $profile->pais }}
            @endisset
          </x-icons.location>
          <x-icons.contact class="text-gray-700">{{ $expert->email }}</x-icons.contact>
        </div>
      </div>

      <!-- Curriculum -->
      <div x-data="{ isUploading: false, progress: 0 }" x-on:livewire-upload-start="isUploading = true"
        x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
        x-on:livewire-upload-progress="progress = $event.detail.progress"
        class="bg-white w-10/12 rounded-md shadow-md p-4 mb-8">
        <h2 class="text-xl font-bold mb-4">Curriculum</h2>
        @isset($curriculum)
        <div class="text-blue-600 flex items-center">
          <svg class="h6 w-6 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M6 12h10v1h-10v-1zm7.816-3h-7.816v1h9.047c-.45-.283-.863-.618-1.231-1zm-7.816-2h6.5c-.134-.32-.237-.656-.319-1h-6.181v1zm13 3.975v2.568c0 4.107-6 2.457-6 2.457s1.518 6-2.638 6h-7.362v-20h9.5c.312-.749.763-1.424 1.316-2h-12.816v24h10.189c3.163 0 9.811-7.223 9.811-9.614v-3.886c-.623.26-1.297.421-2 .475zm4-6.475c0 2.485-2.015 4.5-4.5 4.5s-4.5-2.015-4.5-4.5 2.015-4.5 4.5-4.5 4.5 2.015 4.5 4.5zm-2.156-.882l-.696-.696-2.116 2.169-.992-.941-.696.697 1.688 1.637 2.812-2.866z" />
          </svg>
          <a href="{{ asset('storage/' . $curriculum) }}" target="_blank">
            Tu curriculum</a>
        </div>

        @endisset
        @empty($curriculum)
        <p class="text-sm text-gray-700 text-justify leading-relaxed mb-3">
          Adjunta tu currículo en Word/PDF para conocer más sobre ti.
        </p>
        <label class="w-max text-sm text-red-500 flex items-center cursor-pointer" href="#">
          <svg class="h-4 w-4 fill-current mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm6 13h-5v5h-2v-5h-5v-2h5v-5h2v5h5v2z" />
          </svg>
          <p> Agregar</p>
          <input wire:model="curriculum" type='file' class="hidden" />
        </label>
        <!-- Progress Bar -->
        <div class="pt-2" x-show="isUploading">
          <progress max="100" x-bind:value="progress"></progress>
        </div>
        @endempty

      </div>

      <!-- Redes sociales -->
      <div class="bg-white w-10/12 rounded-md shadow-md p-4">
        <h2 class="text-xl font-bold mb-4">Redes sociales</h2>

        <div class="flex items-center mb-4">
          <svg class="w-6 h-6 fill-current mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z" />
          </svg>
          <p class="text-xs">{{$profile->facebook}}</p>
        </div>

        <div class="flex items-center mb-4">
          <svg class="w-6 h-6 fill-current mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z" />
          </svg>
          <p class="text-xs">{{$profile->twitter}}</p>
        </div>

        <div class="flex items-center mb-2">
          <svg class="w-6 h-6 fill-current mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M13.01 13.188c.617 1.613 1.072 3.273 1.361 4.973-2.232.861-4.635.444-6.428-.955 1.313-2.058 2.989-3.398 5.067-4.018zm-.53-1.286c-.143-.32-.291-.638-.447-.955-1.853.584-4.068.879-6.633.883l-.01.17c0 1.604.576 3.077 1.531 4.223 1.448-2.173 3.306-3.616 5.559-4.321zm-3.462-5.792c-1.698.863-2.969 2.434-3.432 4.325 2.236-.016 4.17-.261 5.791-.737-.686-1.229-1.471-2.426-2.359-3.588zm7.011.663c-1.117-.862-2.511-1.382-4.029-1.382-.561 0-1.102.078-1.621.21.873 1.174 1.648 2.384 2.326 3.625 1.412-.598 2.52-1.417 3.324-2.453zm7.971-1.773v14c0 2.761-2.238 5-5 5h-14c-2.762 0-5-2.239-5-5v-14c0-2.761 2.238-5 5-5h14c2.762 0 5 2.239 5 5zm-4 7c0-4.418-3.582-8-8-8s-8 3.582-8 8 3.582 8 8 8 8-3.582 8-8zm-6.656-1.542c.18.371.348.745.512 1.12 1.439-.248 3.018-.233 4.734.049-.084-1.478-.648-2.827-1.547-3.89-.922 1.149-2.16 2.055-3.699 2.721zm1.045 2.437c.559 1.496.988 3.03 1.279 4.598 1.5-1.005 2.561-2.61 2.854-4.467-1.506-.261-2.883-.307-4.133-.131z" />
          </svg>
          <p class="text-xs">{{$profile->dribbble}}</p>
        </div>
      </div>
    </div>

    <div class="lg:col-span-7 col-start-4">
      <!-- Reseñas -->
      <!-- 
      <div class="">
        <h2 class="text-xl font-bold mb-4">Reseñas</h2>
        <div class="flex flex-wrap justify-between">
          <div class="w-56 max-h-72 rounded-md shadow-md bg-main-yellow p-4 mr-2">
            <div class="flex justify-between">
              <div class="bg-black w-16 rounded-tl-lg rounded-tr-full rounded-bl-full rounded-br-md p-4">
                <svg class="w-4 h-4 mx-auto text-main-yellow fill-current" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24">
                  <path
                    d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                </svg>
              </div>
              <div class="w-1/2 flex justify-evenly items-center">
                <p>4.6</p>
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path
                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
                </svg>
              </div>
            </div>
            <h2 class="text-lg text-gray-900 font-semibold mt-3 mb-2">
              Amazing template
            </h2>
            <p class="text-sm text-gray-600 font-semibold mb-4">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Molestias blanditiis vero provident.
            </p>
            <div class="flex items-center">
              <img src="https://randomuser.me/api/portraits/men/26.jpg" "
            class=" rounded-full h-12 w-12 object-cover mr-4">
              <div>
                <p class="text-sm text-gray-600">Sergio Santana</p>
                <p class="text-xs text-gray-600">publicada hace</p>
              </div>
            </div>
          </div>
          <div class="w-56 max-h-72 rounded-md shadow-md bg-main-yellow p-4 mx-2">
            <div class="flex justify-between">
              <div class="bg-black w-16 rounded-tl-lg rounded-tr-full rounded-bl-full rounded-br-md p-4">
                <svg class="w-4 h-4 mx-auto text-main-yellow fill-current" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24">
                  <path
                    d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                </svg>
              </div>
              <div class="w-1/2 flex justify-evenly items-center">
                <p>4.6</p>
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path
                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
                </svg>
              </div>
            </div>
            <h2 class="text-lg text-gray-900 font-semibold mt-3 mb-2">
              Amazing template
            </h2>
            <p class="text-sm text-gray-600 font-semibold mb-4">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Molestias blanditiis vero provident.
            </p>
            <div class="flex items-center">
              <img src="https://randomuser.me/api/portraits/men/26.jpg" "
            class=" rounded-full h-12 w-12 object-cover mr-4">
              <div>
                <p class="text-sm text-gray-600">Sergio Santana</p>
                <p class="text-xs text-gray-600">publicada hace</p>
              </div>
            </div>
          </div>
          <div class="w-56 max-h-72 rounded-md shadow-md bg-main-yellow p-4 mx-2">
            <div class="flex justify-between">
              <div class="bg-black w-16 rounded-tl-lg rounded-tr-full rounded-bl-full rounded-br-md p-4">
                <svg class="w-4 h-4 mx-auto text-main-yellow fill-current" xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24">
                  <path
                    d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z" />
                </svg>
              </div>
              <div class="w-1/2 flex justify-evenly items-center">
                <p>4.6</p>
                <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path
                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z" />
                </svg>
              </div>
            </div>
            <h2 class="text-lg text-gray-900 font-semibold mt-3 mb-2">
              Amazing template
            </h2>
            <p class="text-sm text-gray-600 font-semibold mb-4">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Molestias blanditiis vero provident.
            </p>
            <div class="flex items-center">
              <img src="https://randomuser.me/api/portraits/men/26.jpg" "
            class=" rounded-full h-12 w-12 object-cover mr-4">
              <div>
                <p class="text-sm text-gray-600">Sergio Santana</p>
                <p class="text-xs text-gray-600">publicada hace</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      -->
      <div class="mt-8 lg:mt-0 lg:flex lg:justify-between">
        <!-- Lenguajes -->
        <div class="w-full lg:w-2/5 ">
          <h2 class="bg-black text-main-yellow text-xl font-bold rounded-tl-md rounded-tr-md p-4">
            Lenguajes
          </h2>
          <div class="bg-white w-full rounded-b-md shadow-md p-4">
            @forelse ($languages as $language)
            <div class="text-base text-gray-700 font-semibold">
              <p class="mb-4">
                {{ $language->language }} - {{ $language->level }}
              </p>
            </div>
            @empty
            <p>Aún no has agrgado un lenguaje</p>
            @endforelse
          </div>
        </div>

        <!-- Habilidades -->
        <div class="mt-8 lg:mt-0 w-full lg:w-1/2">
          <h2 class="text-black bg-main-yellow text-xl font-bold rounded-tl-md rounded-tr-md p-4">
            Habilidades
          </h2>
          <div class="bg-white w-full rounded-b-md shadow-md p-4">
            @forelse ($tags as $tag)
            <x-contacto-amarillo.contacto-pill>
              {{ $tag->name }}</x-contacto-amarillo.contacto-pill>
            @empty
            <p>Aún no has agregado habilidades</p>
            @endforelse
          </div>
        </div>
      </div>

      <!-- Certificaciones y premios -->
      <div class="mt-8 lg:mt-14 w-full ">
        <h2 class="text-black  text-xl font-bold rounded-tl-md rounded-tr-md p-4">
          Certificaciones y premios
        </h2>
        <!-- component -->
        <table class="border-collapse w-full">
          <thead>
            <tr>
              <th class="p-3 font-bold uppercase text-black bg-main-yellow border border-gray-300 hidden lg:table-cell">
                Certifiación
              </th>
              <th class="p-3 font-bold uppercase text-black bg-main-yellow border border-gray-300 hidden lg:table-cell">
                Emisor
              </th>
              <th class="p-3 font-bold uppercase text-black bg-main-yellow border border-gray-300 hidden lg:table-cell">
                Año de emisión
              </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($certifications as $certification)
            <tr
              class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
              <td
                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span
                  class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Certificación</span>
                {{$certification->certificado}}
              </td>
              <td
                class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                <span
                  class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Emisor</span>
                {{$certification->emisor}}
              </td>
              <td
                class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                <span
                  class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Año</span>
                <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">{{$certification->anio_de_emision}}</span>
              </td>
            </tr>
            @empty
            <p>Aún no has agregado ningún certificado</p>
            @endforelse
          </tbody>
        </table>
      </div>

      <!-- Educación -->
      <div class="mt-8 lg:mt-14 w-full">
        <h2 class="text-black text-xl font-bold rounded-tl-md rounded-tr-md p-4">
          Educación
        </h2>
        <!-- component -->
        <table class="border-collapse w-full">
          <thead>
            <tr>
              <th class="p-3 font-bold uppercase bg-black text-main-yellow border border-gray-300 hidden lg:table-cell">
                Título
              </th>
              <th class="p-3 font-bold uppercase bg-black text-main-yellow border border-gray-300 hidden lg:table-cell">
                Institución
              </th>
              <th class="p-3 font-bold uppercase bg-black text-main-yellow border border-gray-300 hidden lg:table-cell">
                Año de terminacion
              </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($titulos as $titulo)
            <tr
              class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">
              <td
                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static">
                <span
                  class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Título</span>
                {{$titulo->carrera}}
              </td>
              <td
                class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                <span
                  class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">Institución</span>
                {{$titulo->escuela}}
              </td>
              <td
                class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static">
                <span
                  class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase">finalizo</span>
                <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">{{$titulo->fecha_terminacion}}</span>
              </td>
            </tr>
            @empty
            <p>Aún no has agregado títulos</p>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div x-show="open">
    <livewire:profile.edit />
  </div>
</div>
@endisset

@empty($profile)
<div>
  <livewire:profile.edit />
</div>
@endempty

@push('modals')
<script>
  Livewire.on('success', (message) => {
    thimsg = message
    Toast.fire({
      icon: 'success',
      title: thimsg,
    })
  })

  Livewire.on('error', (message) => {
    thimsg = message
    Toast.fire({
      icon: 'error',
      title: thimsg,
    })
  })
</script>
@endpush