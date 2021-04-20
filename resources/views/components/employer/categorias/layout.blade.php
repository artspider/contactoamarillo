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
    <script src="{{ mix('js/mijs.js') }}"></script>
    <script src="{{ mix('js/alpine-functions.js') }}"></script>
    <script src="{{ mix('js/sweetmessages.js') }}"></script>
    <script src="{{ mix('js/dropzone.js') }}" defer></script>
    <script src="https://cdn.tiny.cloud/1/rsh2ef7sa2rdxifljcs73npyps8fmnoht5ojg0ak1lqljuh8/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea',
            plugins: [
                'advlist autolink link image lists charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
                'table emoticons template paste help'
            ],
            inycomments_author: 'Author name',
            menubar: 'edit view'
        });
    </script>
</head>

<body class="bg-light-back min-h-full antialiased leading-none relative ">
    
        <x-employer.headerEmployer>
            <x-employer.menuEmployer x-data="menu()">
                <x-employer.topMenu>
                    <x-employer.employerMenuItemUSer>
                        <x-slot name="name">
                            Carlos Carbajal
                        </x-slot>
                        <x-slot name="memberSince">
                            Member since 2020
                        </x-slot>     
                    </x-employer.employerMenuItemUSer>
                </x-employer.topMenu><!-- TOP MENU -->

                <x-employer.botMenu>

                </x-employer.botMenu><!-- BOT MENU -->

            </x-employer.menuEmployer>
        </x-employer.headerEmployer>

        <main class=" min-h-screen flex flex-col">
                {{$slot}}
        </main>

    <x-contacto-amarillo.contacto-footer />

    <script src="{{ mix('js/alpine-functions.js') }}"></script>
    @livewireScripts
    @stack('modals')


</body>
