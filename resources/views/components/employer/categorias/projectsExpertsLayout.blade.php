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

        <div class=" min-h-screen flex flex-col">
            <!-- Page Heading -->
            <x-employer.container>
                <h2 class="text-4xl w-full mb-14 mt-36 pl-6">Diseño de logo</h2>
            </x-employer.container>
            

            <div class="flex flex-row flex-wrap justify-between w-11/12 mx-auto">
                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14947408/media/b9701a4bb0c77c22a8a3150bd91ac80e.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/8.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Scarlett Matthews
                    </x-slot>
                    <x-slot name="review">
                        4.9
                    </x-slot>
                    <x-slot name="completedProjects">
                        112
                    </x-slot>

                        I will do flat minimalist logo design, and web design

                    <x-slot name="price">
                        25
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/653699/screenshots/15462767/media/0b27dffa61aeea0e5c203140ab905dec.png?compress=1&resize=800x600
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/11.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Carlos Carbajal
                    </x-slot>
                    <x-slot name="review">
                        5.0
                    </x-slot>
                    <x-slot name="completedProjects">
                        112
                    </x-slot>

                    I will made your professional web site

                    <x-slot name="price">
                        30
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14340346/media/40e8056eda183eada80ec9ccfa70dfe4.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/3.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Armando castro
                    </x-slot>
                    <x-slot name="review">
                        4.6
                    </x-slot>
                    <x-slot name="completedProjects">
                        20
                    </x-slot>

                        I will design UI UX design for mobile app and website using adobe xd

                    <x-slot name="price">
                        20
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14670971/media/af3d8e13defaf5c749cd8dcb0297cc07.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/1.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Esther Fleming
                    </x-slot>
                    <x-slot name="review">
                        4.9
                    </x-slot>
                    <x-slot name="completedProjects">
                        25
                    </x-slot>

                        I will do 2 banner design

                    <x-slot name="price">
                        20
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14947408/media/b9701a4bb0c77c22a8a3150bd91ac80e.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/8.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Scarlett Matthews
                    </x-slot>
                    <x-slot name="review">
                        4.9
                    </x-slot>
                    <x-slot name="completedProjects">
                        112
                    </x-slot>

                        I will do flat minimalist logo design, and web design

                    <x-slot name="price">
                        25
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/653699/screenshots/15462767/media/0b27dffa61aeea0e5c203140ab905dec.png?compress=1&resize=800x600
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/11.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Carlos Carbajal
                    </x-slot>
                    <x-slot name="review">
                        5.0
                    </x-slot>
                    <x-slot name="completedProjects">
                        112
                    </x-slot>

                    I will made your professional web site

                    <x-slot name="price">
                        30
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14340346/media/40e8056eda183eada80ec9ccfa70dfe4.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/3.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Armando castro
                    </x-slot>
                    <x-slot name="review">
                        4.6
                    </x-slot>
                    <x-slot name="completedProjects">
                        20
                    </x-slot>

                        I will design UI UX design for mobile app and website using adobe xd

                    <x-slot name="price">
                        20
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14670971/media/af3d8e13defaf5c749cd8dcb0297cc07.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/1.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Esther Fleming
                    </x-slot>
                    <x-slot name="review">
                        4.9
                    </x-slot>
                    <x-slot name="completedProjects">
                        25
                    </x-slot>

                        I will do 2 banner design

                    <x-slot name="price">
                        20
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14947408/media/b9701a4bb0c77c22a8a3150bd91ac80e.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/8.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Scarlett Matthews
                    </x-slot>
                    <x-slot name="review">
                        4.9
                    </x-slot>
                    <x-slot name="completedProjects">
                        112
                    </x-slot>

                        I will do flat minimalist logo design, and web design

                    <x-slot name="price">
                        25
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/653699/screenshots/15462767/media/0b27dffa61aeea0e5c203140ab905dec.png?compress=1&resize=800x600
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/11.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Carlos Carbajal
                    </x-slot>
                    <x-slot name="review">
                        5.0
                    </x-slot>
                    <x-slot name="completedProjects">
                        112
                    </x-slot>

                    I will made your professional web site

                    <x-slot name="price">
                        30
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14340346/media/40e8056eda183eada80ec9ccfa70dfe4.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/3.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Armando castro
                    </x-slot>
                    <x-slot name="review">
                        4.6
                    </x-slot>
                    <x-slot name="completedProjects">
                        20
                    </x-slot>

                        I will design UI UX design for mobile app and website using adobe xd

                    <x-slot name="price">
                        20
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14670971/media/af3d8e13defaf5c749cd8dcb0297cc07.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/1.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Esther Fleming
                    </x-slot>
                    <x-slot name="review">
                        4.9
                    </x-slot>
                    <x-slot name="completedProjects">
                        25
                    </x-slot>

                        I will do 2 banner design

                    <x-slot name="price">
                        20
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14947408/media/b9701a4bb0c77c22a8a3150bd91ac80e.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/8.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Scarlett Matthews
                    </x-slot>
                    <x-slot name="review">
                        4.9
                    </x-slot>
                    <x-slot name="completedProjects">
                        112
                    </x-slot>

                        I will do flat minimalist logo design, and web design

                    <x-slot name="price">
                        25
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/653699/screenshots/15462767/media/0b27dffa61aeea0e5c203140ab905dec.png?compress=1&resize=800x600
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/11.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Carlos Carbajal
                    </x-slot>
                    <x-slot name="review">
                        5.0
                    </x-slot>
                    <x-slot name="completedProjects">
                        112
                    </x-slot>

                    I will made your professional web site

                    <x-slot name="price">
                        30
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14340346/media/40e8056eda183eada80ec9ccfa70dfe4.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/3.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Armando castro
                    </x-slot>
                    <x-slot name="review">
                        4.6
                    </x-slot>
                    <x-slot name="completedProjects">
                        20
                    </x-slot>

                        I will design UI UX design for mobile app and website using adobe xd

                    <x-slot name="price">
                        20
                    </x-slot>
                </x-employer.categorias.cardItem2>

                <x-employer.categorias.cardItem2>
                    <x-slot name="srcImage">
                        https://cdn.dribbble.com/users/1615584/screenshots/14670971/media/af3d8e13defaf5c749cd8dcb0297cc07.jpg?compress=1&resize=1000x750
                    </x-slot>
                    <x-slot name="imageUserSrc">
                        https://randomuser.me/api/portraits/men/1.jpg
                    </x-slot>
                    <x-slot name="nameAuthor">
                        Esther Fleming
                    </x-slot>
                    <x-slot name="review">
                        4.9
                    </x-slot>
                    <x-slot name="completedProjects">
                        25
                    </x-slot>

                        I will do 2 banner design

                    <x-slot name="price">
                        20
                    </x-slot>
                </x-employer.categorias.cardItem2>
            </div>

        </div>

    <x-contacto-amarillo.contacto-footer />

    <script src="{{ mix('js/alpine-functions.js') }}"></script>
    @livewireScripts
    @stack('modals')


</body>
