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
  <script src="{{ mix('js/app.js') }}" defer></script>
</head>

<body class="bg-light-back h-screen antialiased leading-none">
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
  </div>
</body>

</html>