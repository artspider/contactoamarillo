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
            <div class="container flex justify-between mx-auto ">
                <div class=" h-10 lg:h-20 flex relative w-full ">
                    <x-contactoamarillo.logo />
                </div>
            </div>
        </header>
        {{$slot}}
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