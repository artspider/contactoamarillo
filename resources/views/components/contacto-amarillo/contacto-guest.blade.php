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
        {{$title}} -
        @endisset
        {{ config("app.name", "Contacto-Amarillo") }}
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet" />
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/mijs.js') }}"></script>
    <script src="{{ mix('js/sweetmessages.js') }}"></script>
</head>

<body class="bg-light-back h-screen antialiased leading-none">
    <div id="content flex flex-col min-h-screen w-full">
        <header "
        class=" bg-black h-16 xl:h-20 flex items-center justify-between w-full 2xl:pl-16 2xl:pr-16 z-50 flex-shrink-0">
            <div class="container flex items-center justify-between mx-auto ">
                <div class=" h-10 lg:h-20 flex relative w-full ">
                    <x-contactoamarillo.logo />
                </div>
                <nav class="menu__lista  md:w-full md:h-full md:right-0 lg:flex lg:justify-end lg:items-center">
                    <ul
                        class="flex h-full  items-center justify-end text-white font-semibold ml-6 lg:mr-4 pt-10 pb-6 lg:pt-0 lg:pb-0">
                        <li
                            class="ml-2 mr-8 px-3 py-2 lg:mr-0 lg:my-0 rounded bg-red-700 text-white hover:bg-red-500 hover:text-white">
                            <a href=" / ">Registrate</a> </li>
                    </ul>
                </nav>
                <!-- Termina Menu lista -->
            </div>
        </header>
        {{$slot}}
        <x-contacto-amarillo.contacto-footer />
    </div>
</body>

</html>