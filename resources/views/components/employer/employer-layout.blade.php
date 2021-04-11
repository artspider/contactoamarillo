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

        </x-employer.headerEmployer>

        <div class=" min-h-screen flex flex-col">
            <!-- Page Heading -->
            <div>
                    <x-employer.hero>
                        <input class="w-full" type="search" name="" id="">
                    </x-employer.hero>
            </div>
            <main>
                    <x-employer.container>
                        <x-employer.section>
                            <h2 class="font-bold text-2xl mt-8 mb-5">Servicios populares</h2>
                                <x-employer.sliderWrapper>
                                    
                                    
                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/flagged/photo-1574857127280-f70bf547a03e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80
                                        </x-slot>

                                        <x-slot name="jobName">
                                            Fotografía
                                        </x-slot>
                                    </x-employer.sliderItem>

                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1592646917398-bbdca1a0dae7?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=634&q=80
                                        </x-slot>

                                        <x-slot name="jobName">
                                            Model
                                        </x-slot>
                                    </x-employer.sliderItem>  

                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1598387746216-506f6bd47aad?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80
                                        </x-slot>

                                        <x-slot name="jobName">
                                            Diseño gráfico
                                        </x-slot>
                                    </x-employer.sliderItem>  

                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1536148935331-408321065b18?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=633&q=80
                                        </x-slot>

                                        <x-slot name="jobName">
                                            Web Developer
                                        </x-slot>
                                    </x-employer.sliderItem>  

                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1541788968749-7683d395688d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2134&q=80
                                        </x-slot>

                                        <x-slot name="jobName">
                                           Música y audio 
                                        </x-slot>
                                    </x-employer.sliderItem>

                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NHx8c29jaWFsJTIwbWVkaWF8ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60
                                        </x-slot>

                                        <x-slot name="jobName">
                                            Redes sociales y publicidad web
                                        </x-slot>
                                    </x-employer.sliderItem>

                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1518578315474-bc9ce7151ce4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80
                                        </x-slot>

                                        <x-slot name="jobName">
                                            Cartoonist
                                        </x-slot>
                                    </x-employer.sliderItem>

                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=750&q=80
                                        </x-slot>

                                        <x-slot name="jobName">
                                            Asesoría para empresas
                                        </x-slot>
                                    </x-employer.sliderItem>

                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1581094480465-4e6c25fb4a52?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80
                                        </x-slot>

                                        <x-slot name="jobName">
                                            Ingeniría y arquitectura
                                        </x-slot>
                                    </x-employer.sliderItem>


                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1546514714-df0ccc50d7bf?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=667&q=80
                                        </x-slot>

                                        <x-slot name="jobName">
                                            Ventas freelancer
                                        </x-slot>
                                    </x-employer.sliderItem>


                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1517048676732-d65bc937f952?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80
                                        </x-slot>

                                        <x-slot name="jobName">
                                            Marketing y publicidad
                                        </x-slot>
                                    </x-employer.sliderItem>


                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1599999905123-b5e8ca9c91b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80
                                        </x-slot>
                                            
                                        <x-slot name="jobName">
                                            Soporte administrativo
                                        </x-slot>
                                    </x-employer.sliderItem>


                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1555436169-20e93ea9a7ff?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80
                                        </x-slot>
                                            
                                        <x-slot name="jobName">
                                            Enseñanza
                                        </x-slot>
                                    </x-employer.sliderItem>


                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1573497490701-f84eda04e280?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80
                                        </x-slot>
                                            
                                        <x-slot name="jobName">
                                            Diseño editorial
                                        </x-slot>
                                    </x-employer.sliderItem>


                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1616267626443-4e0e6adcaf11?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=751&q=80
                                        </x-slot>
                                            
                                        <x-slot name="jobName">
                                            Vídeo y animación
                                        </x-slot>
                                    </x-employer.sliderItem>


                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1503387837-b154d5074bd2?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=889&q=80
                                        </x-slot>
                                            
                                        <x-slot name="jobName">
                                            Redación y edición de textos
                                        </x-slot>
                                    </x-employer.sliderItem>


                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1612776572997-76cc42e058c3?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=625&q=80
                                        </x-slot>
                                            
                                        <x-slot name="jobName">
                                            Investigación
                                        </x-slot>
                                    </x-employer.sliderItem>


                                    <x-employer.sliderItem2>
                                        <x-slot name="imgSource">
                                            https://images.unsplash.com/photo-1576267421707-b255b46fc4fb?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80
                                        </x-slot>
                                            
                                        <x-slot name="jobName">
                                            Traducciones
                                        </x-slot>
                                    </x-employer.sliderItem>

                                </x-employer.sliderWrapper>
                        </x-employer.section>
                    </x-employer.container>
            </main>
        </div>

    <x-contacto-amarillo.contacto-footer />

    <script src="{{ mix('js/alpine-functions.js') }}"></script>
    @livewireScripts
    @stack('modals')


</body>
