<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no" />
  <meta http-equiv="ScreenOrientation" content="autoRotate:disabled" />

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <title>
    @isset($title)
    {{ $title }} -
    @endisset
    {{ config('app.name', 'Contacto-Amarillo') }}
  </title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
  <link href="{{ mix('css/dropzone.css') }}" rel="stylesheet" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet" />
  <!-- Scripts -->
  <script src="{{ mix('js/app.js') }}" defer></script>
  <script src="{{ mix('js/utils.js') }}" defer></script>
  <script src="{{ mix('js/sweetmessages.js') }}"></script>
</head>

<body class="bg-light-back min-h-full antialiased leading-none relative ">
  <x-employer.headerEmployer>
    <x-employer.employerMenuItemUSer>
      <x-slot name="name">
        Carlos Carbajal
      </x-slot>
      <x-slot name="memberSince">
        Member since 2020
      </x-slot>
    </x-employer.employerMenuItemUSer>
  </x-employer.headerEmployer>

  {{$slot}}

  <x-contacto-amarillo.contacto-footer />

  <script src="{{ mix('js/alpine-functions.js') }}"></script>
  @livewireScripts
  @stack('modals')


</body>

</html>