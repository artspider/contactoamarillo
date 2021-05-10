<div>
  <x-slot name="header">
    <div class="flex justify-between items-center">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Dashboard') }}
      </h2>

    </div>
  </x-slot>

  {{ Breadcrumbs::render('dashboard') }}

  <div class="lg:grid lg:grid-cols-10 lg:gap-4  max-w-7xl px-6 my-4 mx-auto">
    <!-- Saludo Usuario -->
    <div
      class=" col-span-10 text-black bg-black px-4 md:px-10 mb-5 mt-10 flex justify-between items-center h-48 rounded-xl shadow-md">
      <div class="text-2xl font-bold my-12 text-main-yellow lg:text-4xl ">
        <p>Hola<span class="block"> {{Auth::user()->name}}
            <svg class=" fill-current text-gray-300 w-6 h-6 inline-block lg:w-9 lg:h-9" viewBox="0 0 499.859 499.859"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M469.223 270.371c9.237-9.218 14.329-21.48 14.335-34.53.007-13.05-5.071-25.318-14.298-34.546a48.44 48.44 0 00-15.946-10.611l20.045-19.969c9.258-9.214 14.365-21.481 14.38-34.543s-5.062-25.342-14.298-34.578l-.519-.519a48.52 48.52 0 00-25.169-13.37c.56-2.968.857-6.007.86-9.094.015-13.06-5.063-25.339-14.298-34.573l-.637-.637c-9.221-9.221-21.48-14.299-34.52-14.299-8.804 0-17.248 2.323-24.645 6.665a48.603 48.603 0 00-11.268-17.559l-.42-.422c-19.033-19.03-50.004-19.033-69.039.001L163.331 148.244l16.204-66.917c6.402-26.44-8.045-53.401-33.605-62.715-14.384-5.242-30.346-4.048-43.792 3.271S79.026 41.96 75.618 56.886l-2.222 9.736C62.768 113.177 45.2 159.96 21.18 205.668 3.181 239.918-3.674 279.973 1.878 318.455c5.744 39.816 23.855 75.938 52.376 104.458 35.01 35.011 81.542 54.286 131.049 54.284h.126c49.552-.032 96.113-19.373 131.105-54.458l37.349-37.448zm-173.93 131.182c-29.328 29.406-68.353 45.616-109.883 45.644h-.106c-41.491 0-80.495-16.155-109.837-45.497-23.906-23.905-39.085-54.173-43.897-87.528-4.656-32.273 1.086-65.852 16.167-94.549 25.228-48.006 43.702-97.237 54.907-146.325l2.222-9.735c1.514-6.633 5.639-12.077 11.615-15.33s12.789-3.761 19.18-1.433c11.194 4.079 17.522 15.887 14.718 27.467l-28.77 118.803c-3.413 12.246 12.364 25.887 25.185 14.137L315 39.001c7.337-7.339 19.276-7.337 26.601-.014l.42.421c3.554 3.555 5.511 8.279 5.511 13.306s-1.958 9.752-5.511 13.307L238.659 169.382c-5.858 5.857-5.858 15.355 0 21.213s15.356 5.858 21.213 0l125.982-125.98c3.554-3.555 8.279-5.512 13.306-5.512s9.752 1.957 13.307 5.512l.637.637a18.695 18.695 0 015.512 13.327 18.697 18.697 0 01-5.544 13.317c-37.611 37.461-89.049 88.677-126.281 125.783-5.87 5.847-5.888 15.344-.042 21.214a14.953 14.953 0 0010.627 4.414c3.829 0 7.659-1.457 10.585-4.372 25.028-24.931 93.218-92.857 117.168-116.678 7.337-7.301 19.261-7.287 26.581.031l.518.519c3.561 3.561 5.518 8.294 5.512 13.329s-1.975 9.764-5.548 13.32c-36.483 36.339-94.262 93.883-130.424 129.934-5.869 5.848-5.887 15.345-.04 21.214a14.955 14.955 0 0010.626 4.413c3.829 0 7.66-1.458 10.586-4.373l68.783-68.524 9.78-9.68c7.337-7.262 19.245-7.229 26.544.068a18.691 18.691 0 015.511 13.316 18.685 18.685 0 01-5.518 13.303L332.675 364.072zM451.123 374.497c3.26-7.615-.271-16.433-7.886-19.692-7.616-3.262-16.433.27-19.693 7.886-5.032 11.754-12.214 22.345-21.346 31.477-11.157 11.156-24.34 19.323-39.184 24.274-7.859 2.621-12.105 11.116-9.484 18.976 2.096 6.284 7.948 10.258 14.228 10.258 1.573 0 3.173-.249 4.748-.774 19.3-6.438 36.428-17.042 50.906-31.521 11.845-11.847 21.169-25.602 27.711-40.884zM490.765 382.77c-7.615-3.264-16.433.261-19.697 7.876-7.009 16.349-17.003 31.079-29.704 43.78-14.772 14.772-32.148 25.807-51.644 32.796-7.798 2.796-11.854 11.384-9.058 19.183 2.196 6.126 7.967 9.941 14.121 9.941 1.68 0 3.389-.284 5.062-.884 23.698-8.496 44.804-21.895 62.732-39.823 15.412-15.411 27.545-33.301 36.064-53.173 3.264-7.614-.262-16.432-7.876-19.696z" />
            </svg>
          </span></p>
      </div>
      <div>
        <div class="w-full ">
          @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
          {{-- <img class="rounded-full" src="{{ Auth::user()->profile_photo_url }}"
          alt="{{ Auth::user()->name }}">
          --}}
          <button
            class="flex text-sm mx-auto border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
            <img class="h-20 w-20 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
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
      </div>
    </div>
    <!-- Termina Saludo Usuario -->

    <!-- Ganacias y Ranking -->
    <div class=" md:col-span-4 h-60 text-black  mb-5 flex  items-center">
      <x-earnings>
        <!-- Aqui deberia ir la una grafica por ahora esta como img -->
        <x-slot name="graph">
          https://cdn140.picsart.com/268891729036211.png?type=webp&to=min&r=640
        </x-slot>

        <x-slot name="money">
          {{$earnings}}
        </x-slot>

        <x-slot name="improvement">
          +{{$earnThisMonth}} este mes
        </x-slot>
      </x-earnings>

      <x-containerRank>
        <x-rankUser>
          <x-slot name="numberRank">
            98
          </x-slot>

          <x-slot name="topPercentage">
            In top 30%
          </x-slot>
        </x-rankUser>

        <x-projectsLeft>
          <x-slot name="numberProjects">
            {{count($this->projects)}}
          </x-slot>

          <x-slot name="projectsFinished">
            {{$projectsThisMonth}} Este mes
          </x-slot>

          <x-slot name="advantage1">
            mobile app
          </x-slot>

          <x-slot name="advantage2">
            branding
          </x-slot>
        </x-projectsLeft>

      </x-containerRank>
    </div>
    <!-- Termina Ganacias y Ranking -->

    <!-- tus Proyectos -->
    <div class="md:col-span-4  h-60 text-black mb-5 ">
      <p class="text-lg lg:text-xl font-bold mb-2 ">Tus proyectos</p>
      <div class="py-2 h-5/6 bg-white rounded-2xl shadow-lg  ">
        @forelse ($nextProjects as $project)
        <x-inProgressProject>
          <x-slot name="srcImg">
            {{$project->employer->users()->first()->profile_photo_url}}
          </x-slot>
          <a href="expert/showorder/{{$project->id}}">
            <p class="font-bold mb-1"> {{$project->titulo}}</p>
          </a>

          <x-slot name="daysRemaing">
            Restan {{ \Carbon\Carbon::now()->diffInDays($project->fecha_entrega) }} días
          </x-slot>

        </x-inProgressProject>
        @empty

        @endforelse

        <div class="mb-4 mr-4 flex justify-end">
          {{-- <x-button>
              Ver todos
            </x-button> --}}
          <a href="expert/showorders"> Ver todos</a>
        </div>

      </div>
    </div>
    <!-- Termina tus Proyectos -->

    <!-- Facturas recientes & Join us -->
    <div class="md:col-span-5 text-black mb-5 ">
      <p class="text-lg lg:text-xl font-bold mb-2">Recent Invoices</p>

      <div class=" md:items-center bg-gray-50 rounded-2xl shadow-lg flex flex-col justify-center ">
        <x-paymentsMade>
          <x-slot name="srcImg">
            https://randomuser.me/api/portraits/women/8.jpg
          </x-slot>
        </x-paymentsMade>
        <x-paymentsMade>
          <x-slot name="srcImg">
            https://randomuser.me/api/portraits/men/8.jpg
          </x-slot>
        </x-paymentsMade>

      </div>
      <x-joinUS>
      </x-joinUS>
    </div>
    <!-- Termina Facturas recientes -->

    <!-- Proyectos recomendados -->
    <div class="md:col-span-3 text-black mb-5 ">
      <livewire:recommended-project />

    </div>
    <!-- Termina Proyectos recomendados -->

  </div>
</div>
@push('modals')
<script>

</script>
@endpush