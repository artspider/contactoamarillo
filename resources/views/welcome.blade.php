<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
  <meta http-equiv="ScreenOrientation" content="autoRotate:disabled" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>{{ config("app.name", "Contacto-Amarillo") }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet" />

  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}"></script>
</head>

<body class="bg-light-back h-screen antialiased leading-none">
  <script>
  </script>
  <div id="content flex flex-col min-h-screen w-full">
    <header
      class=" w-full fixed z-50 top-0 left-0 transition duration-700 mx-auto bg-black lg:flex lg:flex-row justify-between "
      id="home" x-data="{ isOpen: false}" @keydown.escape="isOpen = false"
      :class="{ 'shadow-lg bg-gray-900' : isOpen, 'bg-black' : !isOpen }">
      <div class="container flex justify-between mx-auto " :class="{ 'flex-col': isOpen }">
        <div class=" h-10 lg:h-20 flex relative w-full ">
          <x-contactoamarillo.logo />
          <x-contactoamarillo.hamburguer-menu />
          <x-contactoamarillo.list-menu />
        </div>
      </div>
    </header>

    <main class="main__body h-screen mt-10 md:mt-10 lg:mt-20 md:pb-52 ">
      <div class="container mx-auto flex flex-col justify-center ">
        <div class="main__title w-3/5 lg:w-5/12 xl:w-1/2 ml-4 xl:ml-0 mr-10  text-black text-5xl font-bold ">
          <p class="main__title--text mt-28 md:mt-40 lg:mt-32 xl:mt-36 2xl:mt-64 text-4xl md:text-6xl leading-tight">
            Haz realidad todos tus proyectos.
          </p>
        </div>
        <div class="flex flex-col flex-shrink lg:ml-0 md:justify-start lg:pb-20">
          <a class="btn btn--primary w-3/5 md:w-1/2 lg:w-2/5 mx-4 xl:mx-0 mt-8 xl:mt-14 px-4 py-6 lg:py-8 lg:text-xl text-center font-bold rounded-md text-sm"
            href="#">Contrata a uno de nuestros expertos</a>
        </div>
      </div>
    </main>

    <!-- como funciona -->
    <div class="como__funciona container mx-auto my-16" id="como__funciona" x-data="{ option: 1 }">
      <p class="text-black text-center mx-4  text-3xl lg:text-5xl font-bold mb-8 xl:mb-16">
        ¿Cómo funciona?
      </p>

      <div class="como--seleccion flex justify-between mx-4 xl:mx-0 mb-8 xl:mb-12">
        <a class="btn--registro btn w-1/2 rounded-md text-xs lg:text-base tracking-tight lg:tracking-wide text-center font-bold py-4 lg:py-8 mr-1 lg:mr-8"
          href="#" @click="option = 1" @click.prevent
          :class="{ 'bg-black text-white': option==1, 'bg-main-yellow text-black': option==2 }">
          Busco profesionista
        </a>
        <a class="btn--registro btn w-1/2 rounded-md text-xs lg:text-base tracking-tight lg:tracking-wide text-center font-bold py-4 lg:py-8 ml-1 lg:ml-8"
          href="#" @click="option = 2" @click.prevent
          :class="{ 'bg-main-yellow text-black': option==1, 'bg-black text-white': option==2 }">
          Soy un experto
        </a>
      </div>

      <!-- pasos empleador -->
      <div class="pasos__profesionista grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 place-items-center
        gap-4 font-semibold" :class="{'flex': option==1, 'hidden' : option==2 }">

        <x-contactoamarillo.pasoitem paso="pasos-item1">
          Registrate y llena todos los campos del formulario de usuario
        </x-contactoamarillo.pasoitem>

        <x-contactoamarillo.pasoitem paso="pasos-item2">
          Selecciona el perfil del profesionista que necesitas
        </x-contactoamarillo.pasoitem>

        <x-contactoamarillo.pasoitem paso="pasos-item3">
          Contacta al profesionista para elaborar tu proyecto
        </x-contactoamarillo.pasoitem>

        <x-contactoamarillo.pasoitem paso="pasos-item4">
          Califica tu experiencia con el profesionista
        </x-contactoamarillo.pasoitem>
      </div>
      <!-- Termina pasos empleador -->

      <!-- pasos experto -->
      <div class="pasos__experto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 place-items-center
      gap-4 font-semibold" :class="{'hidden': option==1, 'flex' : option==2 }">

        <x-contactoamarillo.pasoitem paso="pasos-item1">
          Registrate y llena todos los campos del formulario de
          profesionista
        </x-contactoamarillo.pasoitem>

        <x-contactoamarillo.pasoitem paso="pasos-item2">
          Selecciona tus habilidades, así te encontrarán mas facilmente
        </x-contactoamarillo.pasoitem>

        <x-contactoamarillo.pasoitem paso="pasos-item3">
          Suscribete
        </x-contactoamarillo.pasoitem>

        <x-contactoamarillo.pasoitem paso="pasos-item4">
          Revisa y contesta los mensajes de tus clientes lo mas rápido
          posible
        </x-contactoamarillo.pasoitem>

        <x-contactoamarillo.pasoitem paso="pasos-item5">
          Entrega tu trabajo en tiempo y forma para recibir una excelente
          reseña
        </x-contactoamarillo.pasoitem>

        <x-contactoamarillo.pasoitem paso="pasos-item6">
          Los costos, pagos y recibos los negocias con tu cliente
        </x-contactoamarillo.pasoitem>
      </div>
      <!-- Termina pasos experto -->
    </div>

    <div class="expertos container bg-light-back mb-16 mx-auto" id="nuestros__expertos">
      <div class="expertos--header flex justify-start mt-20 mx-4 xl:mx-0 mb-6">
        <svg class=" w-8 h-12 lg:w-12 lg:h-16 " xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 246 353">
          <image id="Capa_1" data-name="Capa 1"
            xlink:href="data:img/png;base64,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" />
        </svg>
        <p class="text-black text-center text-3xl xl:text-5xl tracking-tight font-bold ml-2">
          Nuestros expertos
        </p>
      </div>

      <div class="expertos-cards flex justify-evenly flex-wrap md:flex-no-wrap ">
        <div class="card1 bg-white mx-4 my-4 rounded-lg shadow-lg xl:w-2/5 ">
          <div class="header--card1 flex items-center mt-6 mb-2 ">
            <img class="h-24 w-24 ml-6" src="./img/avatar1.png" alt="avatar1" />
            <div class="info--header-card1 text-sm ml-6">
              <p class="nombre font-semibold mb-2">Luis Fernando Flores</p>
              <p class="carrera font-semibold mb-2">Ingeniero en Sistemas</p>
              <p class="cedula font-semibold">Cédula Prof. 09825772</p>
            </div>
          </div>

          <div class="pills-cards flex-wrap ml-6 mb-6">
            <span
              class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1">#edición</span>
            <span
              class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1">#diseño</span>
            <span
              class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1">#programación</span>
          </div>

          <p class="descripcion--expertos-cards leading-6 text-justify  font-semibold mx-6 mb-6">
            Full stack developer, experto en desarrollo de aplicaciones móviles en lenguajes nativos
            o frameworks cross plataform. Egresado de la carrera de sistemas en la BUAP.
          </p>
          <div class="mx-6">
            <button class="contactar--expertos-card btn btn--secondary  font-bold w-full rounded-md py-6 mb-6">
              Contactar
            </button>
          </div>
        </div>

        <div class="card1 bg-white mx-4 my-4 rounded-lg shadow-lg xl:w-2/5 ">
          <div class="header--card1 flex items-center mt-6 mb-2 ">
            <img class="h-24 w-24 ml-6" src="./img/avatar2.png" alt="avatar1" />
            <div class="info--header-card1 text-sm ml-6">
              <p class="nombre font-semibold mb-2">Carla Sannit Gómez</p>
              <p class="carrera font-semibold mb-2">Licenciada en Administración</p>
              <p class="cedula font-semibold">Cédula Prof. 09825772</p>
            </div>
          </div>

          <div class="pills-cards flex-wrap ml-6 mb-6">
            <span
              class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1">#RH</span>
            <span
              class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1">#Hoteleria</span>
            <span
              class="inline-block bg-black rounded-full px-3 py-3 text-xs font-semibold text-gray-100 mr-1 mb-1">#RP</span>
          </div>

          <p class="descripcion--expertos-cards leading-6 text-justify  font-semibold mx-6 mb-6">
            Egresada de la Universidad de Guadalupe, en Monterrey. Especialista es administración de personal y
            Relaciones Públicas. Experiencia mayormente en hoteleria.
          </p>
          <div class="mx-6">
            <button class="contactar--expertos-card btn btn--secondary  font-bold w-full rounded-md py-6 mb-6">
              Contactar
            </button>
          </div>
        </div>

      </div>
    </div>

    <x-contactoamarillo.signupform />
    <footer class=" w-full h-32 flex flex-col justify-center text-center"
      style="background-image: url('img/bg-footer-sm.png')">
      <p class="footer--brand text-sm font-bold">Contacto-Amarillo - 2020</p>
      <p class="footer--tm text-xs tracking-tight font-semi-bold">
        Todos los derechos reservados
      </p>
      <div class="footer--redes"></div>
      <div class="footer--back2top absolute bottom-0 right-0 mr-4 mb-4 text-xs tracking-tight font-semi-bold">

      </div>
    </footer>
  </div>


</body>

</html>