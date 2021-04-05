<x-slot name="header">
  <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
    {{ __('Perfil') }}
  </h2>
</x-slot>

<div x-data="{open: true}" x-cloak class="py-12">
  <div
    x-show="!open"
    class="lg:grid lg:grid-cols-10 max-w-7xl my-4 gap-4 mx-auto"
  >
    <div class="lg:col-span-3 row-span-6">
      <!-- Perfil -->
      <div class="bg-white w-10/12 rounded-md shadow-md pb-2 mb-8">
        <div class="relative">
          <img
            src="{{ Auth::user()->profile_photo_url }}"
            alt="{{ Auth::user()->name }}"
            class="w-full h-44 object-cover mx-auto"
          />
          <a href="#" class="absolute top-2 right-2">
            <x-icons.edit
              class="text-gray-400 hover:text-black bg-yellow-200 hover:bg-main-yellow mx-auto p-2 rounded-full"
            ></x-icons.edit>
          </a>
        </div>
        <div class="bg-black text-main-yellow text-lg font-semibold pl-4 py-1">
          Stars
        </div>
        <div class="m-4">
          <h3 class="text-lg font-bold mb-2">{{ $expert->nombre }}</h3>
          <p
            class="text-sm text-gray-700 font font-semibold text-justify leading-relaxed mb-3"
          >
            {{ $profile->quien_soy }}
          </p>
          <x-icons.habilities class="text-gray-700"
            >{{ str_replace(',', ', ', $expert->especialidad) }}
          </x-icons.habilities>
          <x-icons.location class="text-gray-700"
            >{{ $profile->estado }}, {{ $profile->pais }}
          </x-icons.location>
          <x-icons.contact
            class="text-gray-700"
            >{{ $expert->email }}</x-icons.contact
          >
        </div>
      </div>

      <!-- Curriculum -->
      <div class="bg-white w-10/12 rounded-md shadow-md p-4 mb-8">
        <h2 class="text-xl font-bold mb-4">Curriculum</h2>
        <p class="text-sm text-gray-700 text-justify leading-relaxed mb-3">
          Adjunta tu currículo en Word/PDF para conocer más sobre ti.
        </p>
        <p>+ Agregar</p>
      </div>

      <!-- Redes sociales -->
      <div class="bg-white w-10/12 rounded-md shadow-md p-4">
        <h2 class="text-xl font-bold mb-4">Redes sociales</h2>

        <div class="flex items-center mb-4">
          <svg
            class="w-6 h-6 fill-current mr-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
          >
            <path
              d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.889v1.111h3l-.238 3h-2.762v8h-3v-8h-2v-3h2v-1.923c0-2.022 1.064-3.077 3.461-3.077h2.539v3z"
            />
          </svg>
          <p>Facebook</p>
        </div>

        <div class="flex items-center mb-4">
          <svg
            class="w-6 h-6 fill-current mr-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
          >
            <path
              d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-.139 9.237c.209 4.617-3.234 9.765-9.33 9.765-1.854 0-3.579-.543-5.032-1.475 1.742.205 3.48-.278 4.86-1.359-1.437-.027-2.649-.976-3.066-2.28.515.098 1.021.069 1.482-.056-1.579-.317-2.668-1.739-2.633-3.26.442.246.949.394 1.486.411-1.461-.977-1.875-2.907-1.016-4.383 1.619 1.986 4.038 3.293 6.766 3.43-.479-2.053 1.08-4.03 3.199-4.03.943 0 1.797.398 2.395 1.037.748-.147 1.451-.42 2.086-.796-.246.767-.766 1.41-1.443 1.816.664-.08 1.297-.256 1.885-.517-.439.656-.996 1.234-1.639 1.697z"
            />
          </svg>
          <p>Twitter</p>
        </div>

        <div class="flex items-center mb-2">
          <svg
            class="w-6 h-6 fill-current mr-4"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
          >
            <path
              d="M15.233 5.488c-.843-.038-1.097-.046-3.233-.046s-2.389.008-3.232.046c-2.17.099-3.181 1.127-3.279 3.279-.039.844-.048 1.097-.048 3.233s.009 2.389.047 3.233c.099 2.148 1.106 3.18 3.279 3.279.843.038 1.097.047 3.233.047 2.137 0 2.39-.008 3.233-.046 2.17-.099 3.18-1.129 3.279-3.279.038-.844.046-1.097.046-3.233s-.008-2.389-.046-3.232c-.099-2.153-1.111-3.182-3.279-3.281zm-3.233 10.62c-2.269 0-4.108-1.839-4.108-4.108 0-2.269 1.84-4.108 4.108-4.108s4.108 1.839 4.108 4.108c0 2.269-1.839 4.108-4.108 4.108zm4.271-7.418c-.53 0-.96-.43-.96-.96s.43-.96.96-.96.96.43.96.96-.43.96-.96.96zm-1.604 3.31c0 1.473-1.194 2.667-2.667 2.667s-2.667-1.194-2.667-2.667c0-1.473 1.194-2.667 2.667-2.667s2.667 1.194 2.667 2.667zm4.333-12h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm.952 15.298c-.132 2.909-1.751 4.521-4.653 4.654-.854.039-1.126.048-3.299.048s-2.444-.009-3.298-.048c-2.908-.133-4.52-1.748-4.654-4.654-.039-.853-.048-1.125-.048-3.298 0-2.172.009-2.445.048-3.298.134-2.908 1.748-4.521 4.654-4.653.854-.04 1.125-.049 3.298-.049s2.445.009 3.299.048c2.908.133 4.523 1.751 4.653 4.653.039.854.048 1.127.048 3.299 0 2.173-.009 2.445-.048 3.298z"
            />
          </svg>
          <p>Instagram</p>
        </div>
      </div>
    </div>

    <div class="lg:col-span-7 col-start-4">
      <!-- Reseñas -->
      <div class="">
        <h2 class="text-xl font-bold mb-4">Reseñas</h2>
        <div class="flex flex-wrap justify-between">
          <div
            class="w-56 max-h-72 rounded-md shadow-md bg-main-yellow p-4 mr-2"
          >
            <div class="flex justify-between">
              <div
                class="bg-black w-16 rounded-tl-lg rounded-tr-full rounded-bl-full rounded-br-md p-4"
              >
                <svg
                  class="w-4 h-4 mx-auto text-main-yellow fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"
                  />
                </svg>
              </div>
              <div class="w-1/2 flex justify-evenly items-center">
                <p>4.6</p>
                <svg
                  class="w-6 h-6"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"
                  />
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
          <div
            class="w-56 max-h-72 rounded-md shadow-md bg-main-yellow p-4 mx-2"
          >
            <div class="flex justify-between">
              <div
                class="bg-black w-16 rounded-tl-lg rounded-tr-full rounded-bl-full rounded-br-md p-4"
              >
                <svg
                  class="w-4 h-4 mx-auto text-main-yellow fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"
                  />
                </svg>
              </div>
              <div class="w-1/2 flex justify-evenly items-center">
                <p>4.6</p>
                <svg
                  class="w-6 h-6"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"
                  />
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
          <div
            class="w-56 max-h-72 rounded-md shadow-md bg-main-yellow p-4 mx-2"
          >
            <div class="flex justify-between">
              <div
                class="bg-black w-16 rounded-tl-lg rounded-tr-full rounded-bl-full rounded-br-md p-4"
              >
                <svg
                  class="w-4 h-4 mx-auto text-main-yellow fill-current"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M9.983 3v7.391c0 5.704-3.731 9.57-8.983 10.609l-.995-2.151c2.432-.917 3.995-3.638 3.995-5.849h-4v-10h9.983zm14.017 0v7.391c0 5.704-3.748 9.571-9 10.609l-.996-2.151c2.433-.917 3.996-3.638 3.996-5.849h-3.983v-10h9.983z"
                  />
                </svg>
              </div>
              <div class="w-1/2 flex justify-evenly items-center">
                <p>4.6</p>
                <svg
                  class="w-6 h-6"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                >
                  <path
                    d="M12 .587l3.668 7.568 8.332 1.151-6.064 5.828 1.48 8.279-7.416-3.967-7.417 3.967 1.481-8.279-6.064-5.828 8.332-1.151z"
                  />
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

      <div class="flex justify-between">
        <!-- Lenguajes -->
        <div class="mt-14 w-2/5">
          <h2
            class="bg-black text-main-yellow text-xl font-bold rounded-tl-md rounded-tr-md p-4"
          >
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
        <div class="mt-14 w-1/2">
          <h2
            class="text-black bg-main-yellow text-xl font-bold rounded-tl-md rounded-tr-md p-4"
          >
            Habilidades
          </h2>
          <div class="bg-white w-full rounded-b-md shadow-md p-4">
            @forelse ($tags as $tag)
            <x-contacto-amarillo.contacto-pill>
              {{ $tag->name }}</x-contacto-amarillo.contacto-pill
            >
            @empty
            <p>Aún no has agregado habilidades</p>
            @endforelse
          </div>
        </div>
      </div>

      <!-- Educación -->
      <div class="mt-14 w-full">
        <h2
          class="text-black text-xl font-bold rounded-tl-md rounded-tr-md p-4"
        >
          Educación
        </h2>
        <!-- component -->
        <table class="border-collapse w-full">
          <thead>
            <tr>
              <th
                class="p-3 font-bold uppercase bg-black text-main-yellow border border-gray-300 hidden lg:table-cell"
              >
                Título
              </th>
              <th
                class="p-3 font-bold uppercase bg-black text-main-yellow border border-gray-300 hidden lg:table-cell"
              >
                Institución
              </th>
              <th
                class="p-3 font-bold uppercase bg-black text-main-yellow border border-gray-300 hidden lg:table-cell"
              >
                Año de terminacion
              </th>
            </tr>
          </thead>
          <tbody>
            @forelse ($titulos as $titulo)
            <tr
              class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0"
            >
              <td
                class="w-full lg:w-auto p-3 text-gray-800 text-center border border-b block lg:table-cell relative lg:static"
              >
                <span
                  class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"
                  >Título</span
                >
                {{$titulo->carrera}}
              </td>
              <td
                class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static"
              >
                <span
                  class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"
                  >Institución</span
                >
                {{$titulo->escuela}}
              </td>
              <td
                class="w-full lg:w-auto p-3 text-gray-800 border border-b text-center block lg:table-cell relative lg:static"
              >
                <span
                  class="lg:hidden absolute top-0 left-0 bg-blue-200 px-2 py-1 text-xs font-bold uppercase"
                  >finalizo</span
                >
                <span
                  class="rounded bg-red-400 py-1 px-3 text-xs font-bold"
                  >{{$titulo->fecha_terminacion}}</span
                >
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
