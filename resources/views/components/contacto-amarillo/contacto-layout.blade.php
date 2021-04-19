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
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/utils.js') }}" defer></script>
    <script src="{{ mix('js/sweetmessages.js') }}"></script>

</head>

<body class="bg-light-back h-screen antialiased leading-none">

    <x-contacto-amarillo.contacto-header>
        <x-contacto-amarillo.contacto-profilenav />

        <x-contacto-amarillo.contacto-menuitem class="border-black hover:border-gray-600 border-solid border-b border-t"
            routeInMenu="dashboard">
            <x-slot name="image">
                <svg class="h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </x-slot>
            <p class=" ml-4">Inicio</p>
        </x-contacto-amarillo.contacto-menuitem>

        @role('Expert')
        <x-contacto-amarillo.contacto-menuitem class="border-black hover:border-gray-600 border-solid border-b border-t"
            routeInMenu="dashboard">
            <x-slot name="image">
                <svg class="h-6 w-6 fill-current " xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                    clip-rule="evenodd">
                    <path
                        d="M3 24h19v-23h-1v22h-18v1zm17-24h-18v22h18v-22zm-1 1h-16v20h16v-20zm-2 16h-12v1h12v-1zm0-3h-12v1h12v-1zm0-3h-12v1h12v-1zm-7.348-3.863l.948.3c-.145.529-.387.922-.725 1.178-.338.257-.767.385-1.287.385-.643 0-1.171-.22-1.585-.659-.414-.439-.621-1.04-.621-1.802 0-.806.208-1.432.624-1.878.416-.446.963-.669 1.642-.669.592 0 1.073.175 1.443.525.221.207.386.505.496.892l-.968.231c-.057-.251-.177-.449-.358-.594-.182-.146-.403-.218-.663-.218-.359 0-.65.129-.874.386-.223.258-.335.675-.335 1.252 0 .613.11 1.049.331 1.308.22.26.506.39.858.39.26 0 .484-.082.671-.248.187-.165.322-.425.403-.779zm3.023 1.78l-1.731-4.842h1.06l1.226 3.584 1.186-3.584h1.037l-1.734 4.842h-1.044z" />
                </svg>
            </x-slot>
            <p class=" ml-4">Bolsa de trabajo</p>
        </x-contacto-amarillo.contacto-menuitem>
        @endrole

        <x-contacto-amarillo.contacto-menuitem class="border-black hover:border-gray-600 border-solid border-b border-t"
            routeInMenu="dashboard">
            <x-slot name="image">
                <svg class="h-6 w-6 " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
            </x-slot>
            <p class=" ml-4">Notificaciones</p>
        </x-contacto-amarillo.contacto-menuitem>

        @role('Employer')
        <x-contacto-amarillo.contacto-menuitem class="border-t border-gray-600 hover:border-gray-600 border-solid"
            routeInMenu="dashboard">
            <x-slot name="image">
                <svg class="h-6 w-6 fill-current " xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                    clip-rule="evenodd">
                    <path
                        d="M24 23h-20c-2.208 0-4-1.792-4-4v-15.694c.313-1.071 1.285-2.306 3-2.306 1.855 0 2.769 1.342 2.995 2.312l.005 1.688h18v18zm-2-16h-16v11s-.587-1-1.922-1c-1.104 0-2.078.896-2.078 2s.896 2 2 2h18v-14zm-2 12h-12v-10h12v10zm-8-9h-3v8h10v-8h-6v3h6v1h-2v3h-1v-3h-3v3h-1v-7z" />
                </svg>
            </x-slot>
            <p class=" ml-4">Publicar proyecto</p>
        </x-contacto-amarillo.contacto-menuitem>

        <x-contacto-amarillo.contacto-menuitem class="hover:border-gray-600 border-solid" routeInMenu="dashboard">
            <x-slot name="image">
                <svg class="h-6 w-6 fill-current " xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                    clip-rule="evenodd">
                    <path
                        d="M24 23h-20c-2.208 0-4-1.792-4-4v-15.694c.313-1.071 1.285-2.306 3-2.306 1.855 0 2.769 1.342 2.995 2.312l.005 1.688h18v18zm-2-16h-16v11s-.587-1-1.922-1c-1.104 0-2.078.896-2.078 2s.896 2 2 2h18v-14zm-2 12h-12v-10h12v10zm-8-9h-3v8h10v-8h-6v3h6v1h-2v3h-1v-3h-3v3h-1v-7z" />
                </svg>
            </x-slot>
            <p class=" ml-4">Proyectos</p>
        </x-contacto-amarillo.contacto-menuitem>
        @endrole

        @role('Expert')
        <x-contacto-amarillo.contacto-menuitem class="border-t border-gray-600 hover:border-gray-600 border-solid "
            routeInMenu="dashboard">
            <x-slot name="image">
                <svg class="h-6 w-6 fill-current " xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                    clip-rule="evenodd">
                    <path
                        d="M24 23h-20c-2.208 0-4-1.792-4-4v-15.694c.313-1.071 1.285-2.306 3-2.306 1.855 0 2.769 1.342 2.995 2.312l.005 1.688h18v18zm-2-16h-16v11s-.587-1-1.922-1c-1.104 0-2.078.896-2.078 2s.896 2 2 2h18v-14zm-2 12h-12v-10h12v10zm-8-9h-3v8h10v-8h-6v3h6v1h-2v3h-1v-3h-3v3h-1v-7z" />
                </svg>
            </x-slot>
            <p class=" ml-4">Proyectos</p>
        </x-contacto-amarillo.contacto-menuitem>

        <x-contacto-amarillo.contacto-menuitem class="hover:border-gray-600 border-solid " routeInMenu="profile">
            <x-slot name="image">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </x-slot>
            <p class=" ml-4">Perfil</p>
        </x-contacto-amarillo.contacto-menuitem>

        {{-- <x-contacto-amarillo.contacto-menuitem class="border-gray-600 hover:border-gray-600 border-solid "
            routeInMenu="dashboard">
            <x-slot name="image">
                <svg class="h-6 w-6 fill-current " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M22 9v1.528c-.476.69-3.815 1.971-9.77 1.971-6.239 0-9.736-1.358-10.23-2.088v-1.411h20zm2-2h-24v3.491c0 2.657 6.154 4.009 12.23 4.009 5.922 0 11.77-1.284 11.77-3.895v-3.605zm-2 8.074v4.926h-20v-5.001c-.823-.337-1.478-.711-2-1.096v8.097h24v-7.949c-.583.402-1.262.741-2 1.023zm-8 1.958c0 1.087-.896 1.968-2 1.968s-2-.881-2-1.968v-1.032h4v1.032zm-5-15.032c-1.104 0-2 .896-2 2v2h2v-1.5c0-.276.224-.5.5-.5h5c.276 0 .5.224.5.5v1.5h2v-2c0-1.104-.896-2-2-2h-6z" />
                </svg>
            </x-slot>
            <p class=" ml-4">Portafolio</p>
        </x-contacto-amarillo.contacto-menuitem> --}}

        <x-contacto-amarillo.contacto-menuitem class=" border-gray-600 hover:border-gray-600 border-solid"
            routeInMenu="ability">
            <x-slot name="image">
                <svg class="h-6 w-6 fill-current " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M4.104 0l-4.104 4.152 18.888 18.799 5.112 1.049-.961-5.203-18.935-18.797zm15.946 21.502c-.167.166-.436.166-.602 0l-17.262-17.124c-.167-.167-.167-.435-.001-.603.166-.166.437-.166.603 0l17.262 17.126c.167.165.166.435 0 .601zm1.544-2.132c.166.166.166.437 0 .603-.166.165-.436.166-.602 0l-17.263-17.126c-.165-.165-.165-.435 0-.601.167-.166.436-.166.601-.001l17.264 17.125zm-2.855-14.067c-.195-.195-.195-.512 0-.707s.512-.195.707 0 .195.512 0 .707-.511.196-.707 0zm-7.734 12.641l-6.055 6.056-4.95-4.908 6.059-6.059 1.419 1.41-.407.407.707.707-.707.707-.707-.707-.707.707.707.707-.707.707-.707-.707-.707.707.707.707-.707.707-.707-.707-.707.708 2.121 2.121 4.657-4.657 1.398 1.387zm2.035-11.892l6.052-6.052 4.908 4.95-6.013 6.014-1.398-1.388 4.625-4.625-2.121-2.121-2.121 2.12.707.707-.708.708-.707-.707-.707.707.707.707-.707.707-.707-.708-.39.39-1.42-1.409z" />
                </svg>
            </x-slot>
            <p class=" ml-4">Habilidades</p>
        </x-contacto-amarillo.contacto-menuitem>

        <x-contacto-amarillo.contacto-menuitem class="border-gray-600 hover:border-gray-600 border-solid"
            routeInMenu="services">
            <x-slot name="image">
                <svg class="h-6 w-6 fill-current " xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                    clip-rule="evenodd">
                    <path
                        d="M7 24h-5v-9h5v1.735c.638-.198 1.322-.495 1.765-.689.642-.28 1.259-.417 1.887-.417 1.214 0 2.205.499 4.303 1.205.64.214 1.076.716 1.175 1.306 1.124-.863 2.92-2.257 2.937-2.27.357-.284.773-.434 1.2-.434.952 0 1.751.763 1.751 1.708 0 .49-.219.977-.627 1.356-1.378 1.28-2.445 2.233-3.387 3.074-.56.501-1.066.952-1.548 1.393-.749.687-1.518 1.006-2.421 1.006-.405 0-.832-.065-1.308-.2-2.773-.783-4.484-1.036-5.727-1.105v1.332zm-1-8h-3v7h3v-7zm1 5.664c2.092.118 4.405.696 5.999 1.147.817.231 1.761.354 2.782-.581 1.279-1.172 2.722-2.413 4.929-4.463.824-.765-.178-1.783-1.022-1.113 0 0-2.961 2.299-3.689 2.843-.379.285-.695.519-1.148.519-.107 0-.223-.013-.349-.042-.655-.151-1.883-.425-2.755-.701-.575-.183-.371-.993.268-.858.447.093 1.594.35 2.201.52 1.017.281 1.276-.867.422-1.152-.562-.19-.537-.198-1.889-.665-1.301-.451-2.214-.753-3.585-.156-.639.278-1.432.616-2.164.814v3.888zm3.79-19.913l3.21-1.751 7 3.86v7.677l-7 3.735-7-3.735v-7.719l3.784-2.064.002-.005.004.002zm2.71 6.015l-5.5-2.864v6.035l5.5 2.935v-6.106zm1 .001v6.105l5.5-2.935v-6l-5.5 2.83zm1.77-2.035l-5.47-2.848-2.202 1.202 5.404 2.813 2.268-1.167zm-4.412-3.425l5.501 2.864 2.042-1.051-5.404-2.979-2.139 1.166z" />
                </svg>
            </x-slot>
            <p class=" ml-4">Servicios</p>
        </x-contacto-amarillo.contacto-menuitem>

        <x-contacto-amarillo.contacto-menuitem class="border-gray-600 hover:border-gray-600 border-solid"
            routeInMenu="education">
            <x-slot name="image">
                <svg class="h-6 w-6 fill-current " xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                    clip-rule="evenodd">
                    <path
                        d="M22 9.74l-2 1.02v7.24c-1.007 2.041-5.606 3-8.5 3-3.175 0-7.389-.994-8.5-3v-7.796l-3-1.896 12-5.308 11 6.231v8.769l1 3h-3l1-3v-8.26zm-18 1.095v6.873c.958 1.28 4.217 2.292 7.5 2.292 2.894 0 6.589-.959 7.5-2.269v-6.462l-7.923 4.039-7.077-4.473zm-1.881-2.371l9.011 5.694 9.759-4.974-8.944-5.066-9.826 4.346z" />
                </svg>
            </x-slot>
            <p class=" ml-4">Educación</p>
        </x-contacto-amarillo.contacto-menuitem>
        @endrole

        @role('Employer')
        <x-contacto-amarillo.contacto-menuitem class="border-gray-600 hover:border-gray-600 border-solid"
            routeInMenu="dashboard">
            <x-slot name="image">
                <svg class="h-6 w-6 fill-current " xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                    clip-rule="evenodd">
                    <path
                        d="M22 9.74l-2 1.02v7.24c-1.007 2.041-5.606 3-8.5 3-3.175 0-7.389-.994-8.5-3v-7.796l-3-1.896 12-5.308 11 6.231v8.769l1 3h-3l1-3v-8.26zm-18 1.095v6.873c.958 1.28 4.217 2.292 7.5 2.292 2.894 0 6.589-.959 7.5-2.269v-6.462l-7.923 4.039-7.077-4.473zm-1.881-2.371l9.011 5.694 9.759-4.974-8.944-5.066-9.826 4.346z" />
                </svg>
            </x-slot>
            <p class=" ml-4">Buscar experto</p>
        </x-contacto-amarillo.contacto-menuitem>
        @endrole

        <!-- Cuenta -->
        <x-contacto-amarillo.contacto-menuitem class="border-gray-600 hover:border-gray-600 border-solid border-t"
            routeInMenu="profile.show">
            <x-slot name="image">
                <svg class="h-6 w-6 fill-current " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M14 18.597v.403h-10v-.417c-.004-1.112.044-1.747 1.324-2.043 1.403-.324 2.787-.613 2.122-1.841-1.973-3.637-.563-5.699 1.554-5.699 2.077 0 3.521 1.985 1.556 5.699-.647 1.22.688 1.51 2.121 1.841 1.284.297 1.328.936 1.323 2.057zm6-9.597h-4v2h4v-2zm0 4h-4v2h4v-2zm0 4h-4v2h4v-2zm-4-12v2h6v14h-20v-14h6v-2h-8v18h24v-18h-8zm-6-4v6h4v-6h-4zm2 4c-.552 0-1-.448-1-1s.448-1 1-1 1 .448 1 1-.448 1-1 1z" />
                </svg>
            </x-slot>
            <p class=" ml-4">Cuenta</p>
        </x-contacto-amarillo.contacto-menuitem>

        <!-- Logout -->
        <div
            class="bg-black text-white hover:bg-main-yellow hover:text-black p-3 border-gray-600 hover:border-gray-600 border-solid border-b ">

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-contacto-amarillo.contacto-logoutnav />
            </form>
        </div>
    </x-contacto-amarillo.contacto-header>

    <div class=" min-h-screen flex flex-col">
        <!-- Page Heading -->
        @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mt-20 mx-auto py-6 px-6">
                {{ $header }}
            </div>
        </header>
        @endif

        <main>
            {{ $slot }}
        </main>
    </div>
    <x-contacto-amarillo.contacto-footer />

    <script src="{{ mix('js/alpine-functions.js') }}"></script>

    @livewireScripts
    @stack('modals')


</body>

</html>