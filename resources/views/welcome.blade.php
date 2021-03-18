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



  </div>
</body>

</html>