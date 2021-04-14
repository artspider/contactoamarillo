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
            <div>
                    <x-employer.hero>
                        <input class="w-full" type="search" name="" >
                    </x-employer.hero>
            </div>
            <main>
                    <x-employer.container>
                        <x-employer.section>
                            <div class="flex justify-between items-center">
                                <h2 class="font-bold text-2xl mt-8 mb-5 text-center lg:text-left">Nuestras categorias</h2>
                                <a href="{{ url('/categorias') }}" class="text-blue-400 mt-8 mb-5 border-b hover:text-blue-600 hover:border-b hover:border-blue-600">Ver todas</a>
                            </div>
                                <x-employer.sliderWrapper class="h-432">
                                    
                                    
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

                        <x-employer.section>
                            <h2 class="font-bold text-2xl mt-8 mb-5">¿Cómo encontrar un freelancer que vuelva realidad tu proyecto?</h2>
                            <x-employer.wrapperSection>
                                <x-employer.itemGetFreelancer>
                                    <x-slot name="iconSrc">
                                        https://www.flaticon.com/svg/vstatic/svg/3603/3603870.svg?token=exp=1618242807~hmac=13aedeec0af884a58e1f1c6aa6668e7d
                                    </x-slot>
                                    <x-slot name="nameItem">
                                        Publicar un trabajo
                                    </x-slot>
                                    <x-slot name="descriptionItem">
                                        Es fácil. Simplemente publica un trabajo que necesitas terminar y recibe ofertas competitivas de freelancers en cuestión de minutos.
                                    </x-slot>
                                </x-employer.itemGetFreelancer>

                                <x-employer.itemGetFreelancer>
                                    <x-slot name="iconSrc">
                                        https://www.flaticon.com/svg/vstatic/svg/1584/1584961.svg?token=exp=1618243181~hmac=19daa77b3b66ddcebce59a1a7fef95cd
                                    </x-slot>
                                    <x-slot name="nameItem">
                                        Encuentra a tu freelancer ideal
                                    </x-slot>
                                    <x-slot name="descriptionItem">
                                        Independientemente de tus necesidades, habrá un freelancer que haga el trabajo: desde diseño web, desarrollo de aplicaciones móviles, asistentes virtuales y diseño gráfico (y mucho más).
                                    </x-slot>
                                </x-employer.itemGetFreelancer>

                                <x-employer.itemGetFreelancer>
                                    <x-slot name="iconSrc">
                                        https://www.flaticon.es/svg/vstatic/svg/1086/1086741.svg?token=exp=1618243240~hmac=0a581aa04caa488e197861013a65d1a8
                                    </x-slot>
                                    <x-slot name="nameItem">
                                        Paga de manera segura
                                    </x-slot>
                                    <x-slot name="descriptionItem">
                                        Con pagos seguros y cientos de profesionales evaluados entre los cuales elegir, tenemos la forma más simple y segura para encargar trabajo en línea.
                                    </x-slot>
                                </x-employer.itemGetFreelancer>
                            </x-employer.wrapperSection>
                        </x-employer.section>

                        
                        <!--  AQUIIIIIIIIIIIII EMPIEZA -->

                        <x-employer.section>
                            <h2 class="font-bold text-2xl mt-8 mb-5 text-center lg:text-left">Lo que has visto recientemente y más</h2>
                                <x-employer.sliderWrapper class="h-auto">
                                    <x-employer.cardItem>
                                        <x-slot name="srcImage">
                                            https://cdn.dribbble.com/users/653699/screenshots/15462767/media/0b27dffa61aeea0e5c203140ab905dec.png?compress=1&resize=800x600
                                        </x-slot>
                                        <x-slot name="imageUserSrc">
                                            https://randomuser.me/api/portraits/men/11.jpg
                                        </x-slot>
                                        <x-slot name="nameAuthor">
                                            Carlos Carbajal
                                        </x-slot>
                                        <x-slot name="memberSince">
                                            Miembro desde: 2020
                                        </x-slot>
                                        
                                        I will made your professional web site

                                        <x-slot name="price">
                                            30
                                        </x-slot>
                                    </x-employer.cardItem>

                                    <x-employer.cardItem>

                                        <x-slot name="srcImage">
                                            https://cdn.dribbble.com/users/1615584/screenshots/14947408/media/b9701a4bb0c77c22a8a3150bd91ac80e.jpg?compress=1&resize=1000x750
                                        </x-slot>
                                        <x-slot name="imageUserSrc">
                                            https://randomuser.me/api/portraits/men/8.jpg
                                        </x-slot>
                                        <x-slot name="nameAuthor">
                                            Scarlett Matthews
                                        </x-slot>
                                        <x-slot name="memberSince">
                                            Miembro desde: 2021
                                        </x-slot>
                                        
                                        I will do flat minimalist logo design, and web design

                                        <x-slot name="price">
                                            25
                                        </x-slot>
                                    </x-employer.cardItem>

                                    <x-employer.cardItem>

                                        <x-slot name="srcImage">
                                            https://cdn.dribbble.com/users/1615584/screenshots/14340346/media/40e8056eda183eada80ec9ccfa70dfe4.jpg?compress=1&resize=1000x750
                                        </x-slot>
                                        <x-slot name="imageUserSrc">
                                            https://randomuser.me/api/portraits/men/3.jpg
                                        </x-slot>
                                        <x-slot name="nameAuthor">
                                            Armando castro
                                        </x-slot>
                                        <x-slot name="memberSince">
                                            Miembro desde: 2020
                                        </x-slot>
                                        
                                        I will design UI UX design for mobile app and website using adobe xd

                                        <x-slot name="price">
                                            23
                                        </x-slot>
                                    </x-employer.cardItem>

                                    <x-employer.cardItem>
                                        <x-slot name="srcImage">
                                            https://cdn.dribbble.com/users/1615584/screenshots/14670971/media/af3d8e13defaf5c749cd8dcb0297cc07.jpg?compress=1&resize=1000x750
                                        </x-slot>
                                        <x-slot name="imageUserSrc">
                                            https://randomuser.me/api/portraits/men/1.jpg
                                        </x-slot>
                                        <x-slot name="nameAuthor">
                                            Esther Fleming
                                        </x-slot>
                                        <x-slot name="memberSince">
                                            Miembro desde: 2018
                                        </x-slot>
                                        
                                        I will do 2 banner design

                                        <x-slot name="price">
                                            10
                                        </x-slot>
                                    </x-employer.cardItem>

                                    <x-employer.cardItem>
                                        <x-slot name="srcImage">
                                            https://cdn.dribbble.com/users/774375/screenshots/14909545/media/9ff01c63cba69e2e2dc1936207ec6c91.png?compress=1&resize=1000x750
                                        </x-slot>
                                        <x-slot name="imageUserSrc">
                                            https://randomuser.me/api/portraits/men/15.jpg
                                        </x-slot>
                                        <x-slot name="nameAuthor">
                                            Antonio Alexander
                                        </x-slot>
                                        <x-slot name="memberSince">
                                            Miembro desde: 2021
                                        </x-slot>
                                        
                                        I will do minimalist modern and business logo design

                                        <x-slot name="price">
                                            23
                                        </x-slot>
                                    </x-employer.cardItem>

                                    <x-employer.cardItem>
                                        <x-slot name="srcImage">
                                            https://cdn.dribbble.com/users/24078/screenshots/13972510/media/84fffa5c27472436f50ad8ac544dea31.jpg?compress=1&resize=1000x750
                                        </x-slot>
                                        <x-slot name="imageUserSrc">
                                            https://randomuser.me/api/portraits/women/90.jpg
                                        </x-slot>
                                        <x-slot name="nameAuthor">
                                            Shelly Lynch
                                        </x-slot>
                                        <x-slot name="memberSince">
                                            Miembro desde: 2020
                                        </x-slot>
                                        
                                        I will do flat minimalist logo design

                                        <x-slot name="price">
                                            15
                                        </x-slot>
                                    </x-employer.cardItem>

                                    <x-employer.cardItem>
                                        <x-slot name="srcImage">
                                            https://cdn.dribbble.com/users/1615584/screenshots/14282211/media/715273fd7f22b5834da83dac3fd2a346.jpg?compress=1&resize=1000x750
                                        </x-slot>
                                        <x-slot name="imageUserSrc">
                                            https://randomuser.me/api/portraits/women/12.jpg
                                        </x-slot>
                                        <x-slot name="nameAuthor">
                                            Lynche Test
                                        </x-slot>
                                        <x-slot name="memberSince">
                                            Miembro desde: 2021
                                        </x-slot>
                                        
                                        I will do minimalist logo design in 24hrs

                                        <x-slot name="price">
                                            25
                                        </x-slot>
                                    </x-employer.cardItem>

                                    <x-employer.cardItem>
                                        <x-slot name="srcImage">
                                            https://cdn.dribbble.com/users/24078/screenshots/14562865/media/130e993838dec40962316d5fde601ec2.jpg?compress=1&resize=1000x750
                                        </x-slot>
                                        <x-slot name="imageUserSrc">
                                            https://randomuser.me/api/portraits/men/51.jpg
                                        </x-slot>
                                        <x-slot name="nameAuthor">
                                            Rafael Robinson
                                        </x-slot>
                                        <x-slot name="memberSince">
                                            Miembro desde: 2020
                                        </x-slot>
                                        
                                        I will do a modern minimalist logo design

                                        <x-slot name="price">
                                            20
                                        </x-slot>
                                    </x-employer.cardItem>

                                    <x-employer.cardItem>
                                        <x-slot name="srcImage">
                                            https://cdn.dribbble.com/users/1615584/screenshots/14973122/media/347fdfd34ad38b7d5bf0cb690d66dd10.jpg?compress=1&resize=1000x750
                                        </x-slot>
                                        <x-slot name="imageUserSrc">
                                            https://randomuser.me/api/portraits/women/50.jpg
                                        </x-slot>
                                        <x-slot name="nameAuthor">
                                            Vicki Oliver
                                        </x-slot>
                                        <x-slot name="memberSince">
                                            Miembro desde: 2021
                                        </x-slot>
                                        
                                        I will do a modern app mobile

                                        <x-slot name="price">
                                            50
                                        </x-slot>
                                    </x-employer.cardItem>

                                    <x-employer.cardItem>
                                        <x-slot name="srcImage">
                                            https://cdn.dribbble.com/users/1615584/screenshots/15432419/media/87f1671eef1b077519fd9ca76ee0a089.jpg?compress=1&resize=1000x750
                                        </x-slot>
                                        <x-slot name="imageUserSrc">
                                        https://randomuser.me/api/portraits/men/17.jpg
                                        </x-slot>
                                        <x-slot name="nameAuthor">
                                            Judd Day
                                        </x-slot>
                                        <x-slot name="memberSince">
                                            Miembro desde: 2021
                                        </x-slot>
                                        
                                        I will develop mobile app for you in react native

                                        <x-slot name="price">
                                            200
                                        </x-slot>
                                    </x-employer.cardItem>
                                </x-employer.sliderWrapper>
                        </x-employer.section>

                        <x-employer.section>
                        </x-employer.section>
                        <!-- AQUIIIIIIIIIIIII TERMINA -->
                    </x-employer.container>

                    <x-employer.section>
                    <div class="relative bg-bg8 h-300 bg-center bg-no-repeat bg-cover shadow-md lg:h-758 2xl:bg-center">
                    
                        <div class="h-full w-full flex items-end justify-center pb-8 lg:justify-start lg:items-center lg:pb-0">
                            <div class="text-center w-auto flex flex-col justify-center items-center bg-white rounded-md p-2 md:p-5 lg:pl-14 text-black lg:w-96 lg:bg-transparent lg:text-white 2xl:w-auto 2xl:pl-32">
                                <p class="text-2xl mb-3 font-bold lg:text-4xl">Así que, ¿que estas esperando?</p>
                                <p class="mb-3 lg:text-lg">Comienza a encontrar el freelancer perfecto</p>
                                <a href="#heroIMG" class="text-xl text-white bg-black rounded py-6 px-10 font-bold transition-all lg:bg-white lg:text-black lg:mt-6">Buscar freelancer</a>
                            </div>
                        </div>
                    </div>
                    </x-employer.section>
            </main>
        </div>

    <x-contacto-amarillo.contacto-footer />

    <script src="{{ mix('js/alpine-functions.js') }}"></script>
    @livewireScripts
    @stack('modals')


</body>
