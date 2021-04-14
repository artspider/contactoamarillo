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

        <div class="min-h-screen flex flex-col w-full">

            <x-employer.categorias.categorieHero>
                <x-slot name="nameCategory">
                    Diseño Grafico
                </x-slot>

                <x-slot name="srcImage">
                    https://images.unsplash.com/photo-1497091071254-cc9b2ba7c48a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1506&q=80
                </x-slot>
                <x-slot name="descriptionCategory">
                    Los mejores diseñadores a tu alcance
                </x-slot>
            </x-employer.categorias.categorieHero>

            <x-employer.categorias.wrapperSubCategory>
                <h2 class="text-4xl text-center w-full mb-14">Subcategorías</h2>

                <div class="lg:flex lg:justify-between lg:flex-wrap w-full">
                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1561070791-2526d30994b5?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=700&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Branding e imagen coorporativa
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1612036781697-175d3edab7ce?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Comics y ánime
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Diseño de facturas
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1611605698323-b1e99cfd37ea?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=967&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Diseño de logo
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1544013679-25117c6fab34?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Diseño de serigrafía
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1609951734391-b79a50460c6c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Diseño publicitario
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1588786849380-aec72328ff83?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Diseño textil
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1614036634955-ae5e90f9b9eb?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1051&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Manual de marca
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1559087316-47ce212113b7?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=708&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Packaging
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1505373877841-8d25f7d46678?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Presentaciones e infografías
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1566554001689-b53a88dbd138?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=698&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Tarjetas personalizadas
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1614583225154-5fcdda07019e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1068&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Vectorización
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    <x-employer.categorias.subcategory>
                        <x-slot name="imgSrc">
                            https://images.unsplash.com/photo-1610187224249-1c5aa1841c2c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80
                        </x-slot>

                        <x-slot name="nameSubcategory">
                            Volantes, papeleria y empaques
                        </x-slot>
                    </x-employer.categorias.subcategory>

                    
                </div>

            </x-employer.categorias.wrapperSubCategory>


        </div>

    <x-contacto-amarillo.contacto-footer />

    <script src="{{ mix('js/alpine-functions.js') }}"></script>
    @livewireScripts
    @stack('modals')


</body>
