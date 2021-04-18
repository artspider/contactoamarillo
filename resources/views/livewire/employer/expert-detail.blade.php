<x-slot name="header">
  <h2 class="font-semibold text-sm xl:text-base text-gray-800 leading-tight">
    {{ __('Expert profile') }}
  </h2>
</x-slot>
{{ Breadcrumbs::render('profile-show',$expert->id) }}


<div class="w-4/5 block mt-4 mb-8  mx-auto  ">

  <!-- Header del perfil-->
  <div x-data="{ smodal: false }" x-cloak
    class="card__card--header  sm:h-auto lg:h-36 relative block lg:flex align-middle">
    <div x-show="smodal" @click.away="smodal = false"
      class=" w-full md:w-1/3 top-60 left-0 md:left-1/3 z-50 border-solid border-4 border-main-yellow fixed">
      <div class="modal--header bg-main-yellow pl-4 py-3">
        <p class="text-gray-700 font-bold text-lg">Envíame un mensaje</p>
      </div>
      <div class="modal--body bg-white w-full">
        <textarea wire:model="mensaje" class="modal--msj w-full p-4" placeholder="Escribe aqui tu mensaje..."
          id="modal--msj" name="modal--msj" rows="4" cols="50"></textarea>
      </div>
      <div class="modal--footer bg-gray-50 flex justify-end pr-4">
        <a wire:click="sendMsgToExpert" class="btn  text-white bg-gray-900 hover:bg-gray-700 rounded-lg px-4 py-2 my-3 "
          href="">Enviar</a>
      </div>
    </div>

    <div class="w-auto lg:w-1/3 h-24 md:h-36 relative lg:absolute lg:ml-8 mt-16 pt-4 lg:pt-0">
      <img
        class="profile--avatar top-0 left-0 w-24 md:w-36 h-24 md:h-36 rounded-full border-8 border-gray-200 mx-auto lg:mx-0"
        src="{{ Auth::user()->profile_photo_url}} " alt="avatar" />
    </div>

    <div
      class="card__card--header__bio  z-10 flex flex-col justify-center text-white mt-6 mx-auto lg:mt-0 ml-0 lg:ml-52 lg:mr-0  w-full lg:w-2/5 xl:w-1/2">
      <p class="text-2xl  2xl:text-3xl font-bold leading-8 text-center lg:text-left">
        {{ $expert->nombre }}
      </p>
      <p class=" text-base font-semibold text-center lg:text-left mt-1">
        Tu historia en una línea
      </p>
      <p class=" text-base font-semibold text-center lg:text-left ">Miembro desde
        {{Auth::user()->created_at->diffForHumans()}} </p>
    </div>

    <div
      class="card__card--hireme w-full lg:w-1/4 xl:w-2/6 flex justify-center lg:justify-end items-center xl:mr-10 2xl:mr-8">
      <a x-on:click="smodal=true"
        class="btn tooltip top text-black font-semibold rounded-lg bg-main-yellow p-4 mb-4 lg:mb-0">
        <span class="tiptext text-red-500 font-semibold">¡Envíame un mensaje!</span>
        Contactame
      </a>
    </div>

  </div>

  <div class="card__card--body grid grid-cols-1 lg:grid-cols-2 lg:gap-1 mt-8">
    <!-- Lado izquierdo -->
    <div class="card__card--body__col1 bg-white mt-14 mr-1 ml-2 lg:mr-0 lg:ml-0 ">
      <!-- Servicios -->
      <div class="servicios rounded-md shadow-lg p-6">
        <div class="servicios__top flex items-center text-gray-700 ">
          <svg class="w-8 h-8 bg-red-300" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
            <path
              d="M6.178 4c-.914-1.493-2.944-3-6.178-3v-1c4.011 0 6.415 2.11 7.314 4h6.159l10.527 10.625-9.375 9.375-10.625-10.581v-6.242l-.282-.128c-1.043-.476-2.226-1.015-3.718-1.015v-1c1.641 0 2.943.564 4 1.044v-2.078h2.178zm10.944 9.109c-.415-.415-.865-.617-1.378-.617-.578 0-1.227.241-2.171.804-.682.41-1.118.584-1.456.584-.361 0-1.083-.408-.961-1.218.052-.345.25-.697.572-1.02.652-.651 1.544-.848 2.276-.106l.744-.744c-.476-.476-1.096-.792-1.761-.792-.566 0-1.125.227-1.663.677l-.626-.627-.698.699.653.652c-.569.826-.842 2.021.076 2.938 1.011 1.011 2.188.541 3.413-.232.6-.379 1.083-.563 1.475-.563.589 0 1.18.498 1.078 1.258-.052.386-.26.763-.621 1.122-.451.451-.904.679-1.347.679-.418 0-.747-.192-1.049-.462l-.739.739c.463.458 1.082.753 1.735.753.544 0 1.087-.201 1.612-.597l.54.538.697-.697-.52-.521c.743-.896 1.157-2.209.119-3.247zm-9.405-7.109c-.051.445-.215.83-.49 1.114-.387.398-.797.57-1.227.599.008.932.766 1.685 1.699 1.685.938 0 1.699-.761 1.699-1.699 0-.932-.751-1.69-1.681-1.699z" />
          </svg>
          <p class="text-2xl font-semibold tracking-wider">
            Servicios
          </p>
        </div>
      </div>

      <!-- Contacto -->
      <div class="contacto rounded-md shadow-lg p-6">
        <div class="contacto__top flex items-center text-gray-700 ">
          <svg class=" fill-current h-10 w-10 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M22 5v14H2V5h20zm2-2H0v18h24V3zM14 16.597V17H4v-.417c-.004-1.112.044-1.747 1.324-2.043 1.403-.324 2.787-.613 2.122-1.841C5.473 9.062 6.883 7 9 7c2.077 0 3.521 1.985 1.556 5.699-.647 1.22.688 1.51 2.121 1.841 1.284.297 1.328.936 1.323 2.057zM20 7h-4v2h4V7zm0 4h-4v2h4v-2zm0 4h-4v2h4v-2z" />
          </svg>
          <p class="text-2xl font-semibold tracking-wider">
            Contacto
          </p>
        </div>
        <div class="contacto__body mt-6">
          <div class="contacto__body__email flex items-center">
            <svg class="fill-content text-gray-600 h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M12.042 23.648C4.229 23.648 0 18.772 0 12.477 0 5.75 4.762.352 13.276.352 19.49.352 24 4.39 24 9.953c0 8.712-10.33 11.012-9.812 6.042-.71 1.108-1.854 2.354-4.053 2.354-2.516 0-4.08-1.842-4.08-4.807 0-4.444 2.921-8.199 6.379-8.199 1.659 0 2.8.876 3.277 2.221l.464-1.632h2.338c-.244.832-2.321 8.527-2.321 8.527-.648 2.666 1.35 2.713 3.122 1.297 3.329-2.58 3.501-9.327-.998-12.141C13.495.724 2.521 2.513 2.521 12.308c0 5.611 3.95 9.381 9.829 9.381 3.436 0 5.542-.93 7.295-1.948l1.177 1.698c-1.711.966-4.461 2.209-8.78 2.209zM9.698 9.343c-.715 1.34-1.177 3.076-1.177 4.424 0 3.61 3.522 3.633 5.252.239.712-1.394 1.171-3.171 1.171-4.529 0-2.917-3.495-3.434-5.246-.134z" />
            </svg>
            <p>{{ $expert->email }}</p>
          </div>
          <div class="contacto__body__telefono flex items-center mt-4">
            <svg class="fill-content text-gray-600 h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M18.48 22.926l-1.193.658C10.308 27.205-1.795 6.09 5.008 2.1l1.145-.637L9.867 7.93l-1.139.632c-2.067 1.245 2.76 9.707 4.879 8.545l1.162-.642 3.711 6.461zM8.672 0l-1.68.975 3.714 6.466 1.681-.975L8.672 0zm8.613 14.997l-1.68.975 3.714 6.467L21 21.464l-3.715-6.467z" />
            </svg>
            <p>{{ $expert->telefono }}</p>
          </div>
          <div class="contacto__body__telefono flex items-center mt-4">
            <svg class="fill-content text-gray-600 h-5 w-5 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path d="M21 13v10h-6v-6H9v6H3V13H0L12 1l12 12h-3zm-1-5.907V2h-3v2.093l3 3z" />
            </svg>
            <p>
              {{ $expert->ciudad }} ,
              {{ $expert->estado }}.
            </p>
          </div>
        </div>
      </div>

      <!-- habilidades -->
      <div class="skils rounded-md shadow-lg p-6">
        <div class="skills__top flex items-center text-gray-700 ">
          <svg class=" fill-current h-8 w-8 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M23.27 19.743L11.324 7.798c-.557-.557-.842-1.331-.783-2.115.115-1.485-.395-3.009-1.529-4.146C7.982.509 6.637 0 5.289 0c-.507 0-1.015.072-1.506.216l3.17 3.17c.344 1.589-1.959 3.918-3.566 3.567l-3.17-3.17C.072 4.275 0 4.783 0 5.292c0 1.347.51 2.691 1.537 3.721 1.135 1.136 2.66 1.646 4.146 1.53.783-.06 1.557.226 2.113.783L19.743 23.27c.468.468 1.103.73 1.763.73C22.874 24 24 22.892 24 21.506c0-.638-.244-1.276-.73-1.763zM21.5 22.5c-.553 0-1-.448-1-1s.447-1 1-1 1 .448 1 1-.447 1-1 1zM13.125 6.747L19.848 0 24 4.128l-6.722 6.771-1.012-1.012 5.488-5.533c.165-.165.165-.435-.001-.602-.166-.165-.436-.165-.601 0l-5.489 5.533-.935-.936 5.495-5.539c.166-.166.166-.437 0-.603-.168-.166-.436-.166-.603.001l-5.494 5.539-1.001-1zm-3.187 9.521l-5.308 5.35c-.166.166-.437.166-.603 0-.165-.166-.166-.436 0-.602l5.308-5.351-.936-.935-5.301 5.343c-.165.168-.435.167-.601.001-.166-.167-.166-.436 0-.602l5.3-5.343-1.004-1.004-5.745 5.787L0 24l5.203-.937 5.743-5.786-1.008-1.009z" />
          </svg>
          <p class="text-2xl font-semibold tracking-wider">
            Habilidades
          </p>
        </div>

        <div class="skills__body mt-6">
          <ul class=" list-disc list-inside text-gray-700 tracking-wider leading-loose ">
            @empty($tags)
            <p>No has añadido ninguna habilidad</p>
            @endempty
            @if(!empty($tags))
            @foreach ($tags as $tag)
            <li>{{ $tag->name }}</li>

            @endforeach
            @endif
          </ul>
        </div>
      </div>

      <!-- Educacion -->
      <div class="educacion rounded-md shadow-lg p-6">
        <div class="educacion__top flex items-center text-gray-700 ">
          <svg class=" fill-current h-10 w-10 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M20 12.875v5.068C20 20.697 14.211 22 11 22c-3.052 0-9-1.392-9-4.057v-6.294l9 4.863 9-3.637zM11.917 2L-1 7.75l12 6.5 11-4.417V17h2V8.75L11.917 2zM25 22h-4c.578-1 1-2.5 1-4h2c0 1.516.391 2.859 1 4z" />
          </svg>
          <p class="text-2xl font-semibold tracking-wider">
            Educación
          </p>
        </div>

        <div class="educacion__body mt-6 ">
          @empty($educacion)
          <p>No has añadido ninguna escuela</p>
          @endempty

          @if(!empty($educacion))
          @foreach ($educacion as $item)
          <div class="mb-4">
            <p class="font-semibold text-gray-800 ">
              {{ $item->escuela }}
            </p>
            <p class="text-sm text-gray-600">
              {{ $item->carrera }}
            </p>
            <p class="text-sm text-gray-600">
              {{ $item->fecha_terminacion }}
            </p>
          </div>
          @endforeach
          @endif
        </div>
      </div>

    </div>

    <!-- Lado derecho -->
    <div class="card__card--body__col2 bg-white  mt-14 mr-2 lg:mr-0 ml-1">
      <!-- About -->
      <div class="about rounded-md shadow-lg p-6">
        <div class="about__top flex items-center text-gray-700 ">
          <svg class=" fill-current h-10 w-10 mr-4" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
            clip-rule="evenodd" viewBox="0 0 24 24">
            <path
              d="M7 16.488l1.526-.723c1.792-.81 2.851-.344 4.349.232 1.716.661 2.365.883 3.077 1.164 1.278.506.688 2.177-.592 1.838-.778-.206-2.812-.795-3.38-.931-.64-.154-.93.602-.323.818 1.106.393 2.663.79 3.494 1.007.831.218 1.295-.145 1.881-.611.906-.72 2.968-2.909 2.968-2.909.842-.799 1.991-.135 1.991.72 0 .23-.083.474-.276.707-2.328 2.793-3.06 3.642-4.568 5.226-.623.655-1.342.974-2.204.974-.442 0-.922-.084-1.443-.25-1.825-.581-4.172-1.313-6.5-1.6v-5.662zm-1 6.538H2v-8h4v8zm1-7.869v-1.714c-.006-1.557.062-2.447 1.854-2.861 1.963-.453 4.315-.859 3.384-2.577C9.477 2.913 11.451.026 14.415.026c2.907 0 4.93 2.78 2.177 7.979-.904 1.708 1.378 2.114 3.384 2.577 1.799.415 1.859 1.311 1.853 2.879 0 .13-.011 1.171 0 1.665-.483-.309-1.442-.552-2.187.106-.535.472-.568.504-1.783 1.629-1.75-.831-4.456-1.883-6.214-2.478-.896-.304-2.04-.308-2.962.075L7 15.157z" />
          </svg>
          <p class="text-2xl font-semibold tracking-wider">
            Acerca de mi
          </p>
        </div>
        <div class="about__body mt-6">
          <div class="about__body__habilidades text-gray-700">
            <p>
              {{ $profile->quien_soy }}
            </p>
          </div>
        </div>
      </div>

      <!-- Lenguajes -->
      <div class="lenguajes rounded-md shadow-lg p-6">
        <div class="lenguajes__top flex items-center text-gray-700 ">
          <svg class="fill-current w-10 h-10 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M14.748 11.191c.03.473.084.909.158 1.298-.998.183-1.038-.801-.158-1.298zm-7.461.274h1.708l-.856-2.451-.852 2.451zm16.713-.458c0 6.052-6.732 11.705-15.968 9.458-1.678 1.027-5.377 2.065-7.978 2.535.971-1.912 2.048-4.538 1.993-6.368-1.308-1.562-2.047-3.575-2.047-5.625 0-5.781 5.662-10.007 12-10.007 6.299 0 12 4.195 12 10.007zm-12.749 2.993l-2.47-6.5h-1.302l-2.479 6.5h1.392l.535-1.5h2.438l.537 1.5h1.349zm6.837-3.937c.062-.243.1-.426.135-.605l-1.1-.214-.109.5c-.371-.054-.767-.061-1.166-.021.009-.268.025-.531.049-.784h1.229v-1.042h-1.081c.054-.265.099-.424.144-.575l-1.075-.322c-.079.263-.145.521-.211.897h-1.226v1.042h1.092c-.028.337-.046.686-.051 1.038-1.206.443-1.718 1.288-1.718 2.053 0 .904.714 1.7 1.842 1.598 1.401-.128 2.337-1.186 2.885-2.487.567.327.805.876.591 1.385-.197.471-.78.919-1.892.896v1.121c1.234.019 2.448-.45 2.925-1.583.464-1.107-.067-2.317-1.263-2.897zm-2.144 1.841c.293-.303.522-.688.697-1.075-.253-.021-.522-.014-.79.021.017.378.048.731.093 1.054z" />
          </svg>
          <p class="text-2xl font-semibold tracking-wider">
            Lenguajes
          </p>
        </div>

        <div class="lenguajes__body mt-6 ">
          @empty($languages)
          <p>No has añadido ninguna escuela</p>
          @endempty

          @if(!empty($languages))
          @foreach ($languages as $language)
          <div class="mb-4">
            <p class="font-semibold text-gray-800 ">
              {{ $language->language }}
            </p>
            <p class="text-sm text-gray-600">
              {{ $language->level }}
            </p>

          </div>
          @endforeach
          @endif
        </div>
      </div>

      <!-- Redes Sociales -->
      <div class="redes rounded-md shadow-lg p-6">
        <div class="redes__top flex items-center text-gray-700 ">
          <svg class=" fill-current h-10 w-10 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path
              d="M5 7c2.761 0 5 2.239 5 5s-2.239 5-5 5-5-2.239-5-5 2.239-5 5-5zm11.122 12.065c-.073.301-.122.611-.122.935 0 2.209 1.791 4 4 4s4-1.791 4-4-1.791-4-4-4c-1.165 0-2.204.506-2.935 1.301l-5.488-2.927c-.23.636-.549 1.229-.943 1.764l5.488 2.927zM24 4c0-2.209-1.791-4-4-4s-4 1.791-4 4c0 .324.049.634.122.935l-5.488 2.927c.395.535.713 1.127.943 1.764l5.488-2.927C17.796 7.494 18.835 8 20 8c2.209 0 4-1.791 4-4z" />
          </svg>
          <p class="text-2xl font-semibold tracking-wider">
            Redes sociales
          </p>
        </div>

        <div class="redes__body mt-6">
          <div class="flex mb-4">
            <svg class=" fill-current h-6 w-6 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10S2 17.514 2 12 6.486 2 12 2zm0-2C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm-2 10H8v2h2v6h3v-6h1.82l.18-2h-2v-.833c0-.478.096-.667.558-.667H15V6h-2.404C10.798 6 10 6.792 10 8.308V10z" />
            </svg>
            <p class="text-gray-700">
              <a href="{{ $profile->facebook }}" target="_blank">{{ $profile->facebook }}</a>
            </p>
          </div>

          <div class="flex mb-4">
            <svg class=" fill-current h-6 w-6 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162S8.597 18.163 12 18.163s6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zM12 16c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
            <p class="text-gray-700">
              <a href="{{ $profile->github }}" target="_blank">{{ $profile->github }}</a>
            </p>
          </div>

          <div class="flex mb-4">
            <svg class=" fill-current h-6 w-6 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
              <path
                d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10S2 17.514 2 12 6.486 2 12 2zm0-2C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm6.5 8.778c-.441.196-.916.328-1.414.388.509-.305.898-.787 1.083-1.362-.476.282-1.003.487-1.564.597-.448-.479-1.089-.778-1.796-.778-1.59 0-2.758 1.483-2.399 3.023-2.045-.103-3.86-1.083-5.074-2.572-.645 1.106-.334 2.554.762 3.287-.403-.013-.782-.124-1.114-.308-.027 1.14.791 2.207 1.975 2.445-.346.094-.726.116-1.112.042.313.978 1.224 1.689 2.3 1.709-1.037.812-2.34 1.175-3.647 1.021 1.09.699 2.383 1.106 3.773 1.106 4.572 0 7.154-3.861 6.998-7.324.482-.346.899-.78 1.229-1.274z" />
            </svg>
            <p class="text-gray-700">
              <a href="https://www.twitter.com/{{ $profile->twitter }}" target="_blank">{{ $profile->twitter }}</a>
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>