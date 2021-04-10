<x-contacto-amarillo.contacto-layout title="Dashboard">
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Show profile') }}
            </h2>

            <x-searchComp placeholder="Buscar proyectos"></x-searchComp>
        </div>
    </x-slot>


    <div class="lg:flex lg:justify-center xl:justify-end">
        <x-container>
            <x-show-profile.userProfile>
                <x-slot name="userImgPicture">
                    https://randomuser.me/api/portraits/men/66.jpg
                </x-slot>
                <x-slot name="nameUser">
                    Carlos Carbajal
                </x-slot>
                <x-slot name="userImgPicture">
                    https://randomuser.me/api/portraits/men/66.jpg
                </x-slot>
                <x-slot name="degreeUser">
                    Ingeniero en Sistemas Computacionales
                </x-slot>
                <x-slot name="mobileNumberUser">
                    7331165626
                </x-slot>
                <x-slot name="emailUser">
                    stormblack10@hotmail.com
                </x-slot>
            </x-show-profile.userProfile>
                

            <x-show-profile.containerMobile><!-- 91% -->
                
                <div class="xl:flex xl:justify-center">
                    <div class="xl:w-full">
                        <x-show-profile.card>
                            <x-show-profile.contact>
                                <x-slot name="email">
                                    carloscarbajal@outlook.com
                                </x-slot>

                                <x-slot name="cellphoneNumber">
                                    7331165626
                                </x-slot>

                                <x-slot name="address">
                                    Iguala de la Independencia, Guerrero
                                </x-slot>

                            </x-show-profile.contact>
                        </x-show-profile.card>

                        <x-show-profile.card>
                            <x-show-profile.education>
                                <x-show-profile.educationItem>
                                    <x-slot name="university">
                                        Instituto tecnologico de Iguala
                                    </x-slot>
                                    <x-slot name="degree">
                                        Ingeniero en Sistemas Computacionales
                                    </x-slot>
                                    <x-slot name="startDate">
                                        2017
                                    </x-slot>
                                    <x-slot name="finishDate">
                                        2022
                                    </x-slot>
                                </x-show-profile.educationItem>
                            </x-show-profile.education>
                        </x-show-profile.card>

                        <x-show-profile.card>
                            <x-show-profile.aboutMe>
                                Soy egresado de la carrera de Ingeneria en Sistemas Computacionales en la ciudad de Iguala, GRO. 
                                Me considero una persona muy apasionada por el aprendizaje, me apasiona el desarrollo web y siempre intento seguir actualizandome con nuevas tecnologias para estar a la altura de cualquier necesidad del mundo exterior.
                            </x-show-profile.aboutMe>
                        </x-show-profile.card><!-- Parte IZQ -->
                    </div>
                

                    <div class="xl:w-full">
                        <x-show-profile.card>
                            <x-show-profile.workExpirienceSlot>
                                <x-show-profile.workExpirience>
                                    <x-slot name="place">
                                        Freelancer
                                    </x-slot>
                                    <x-slot name="typeOfExpirience">
                                        Creacion de una pagina web para consultar criptomonedas
                                    </x-slot>
                                    <x-slot name="startDate">
                                        2020
                                    </x-slot>
                                    <x-slot name="finishDate">
                                        2020
                                    </x-slot>
                                </x-show-profile.workExpirience>

                                <x-show-profile.workExpirience>
                                    <x-slot name="place">
                                        Freelancer
                                    </x-slot>
                                    <x-slot name="typeOfExpirience">
                                        Desarrrolle el frontend de una blog de café
                                    </x-slot>
                                    <x-slot name="startDate">
                                        2019
                                    </x-slot>
                                    <x-slot name="finishDate">
                                        2020
                                    </x-slot>
                                </x-show-profile.workExpirience>
                            </x-show-profile.workExpirienceSlot>
                        </x-show-profile.card>

                        <x-show-profile.card>
                            <x-show-profile.socialMediaUser>
                                <x-slot name="facebookURL">
                                    www.facebook.com/BL4NCO1/
                                </x-slot>

                                <x-slot name="instagramURL">
                                www.instagram.com/xamazing7/
                                </x-slot>

                                <x-slot name="twitterURL">
                                    https://twitter.com/iDontHavexd
                                </x-slot>

                            </x-show-profile.socialMediaUser>
                        </x-show-profile.card>

                        <x-show-profile.card>
                            <x-show-profile.habilidadesSlot>
                                <x-show-profile.habilidadItem>
                                    <x-slot name="nameSkill">
                                        Diseñador
                                    </x-slot>
                                </x-show-profile.habilidadItem>

                                <x-show-profile.habilidadItem>
                                    <x-slot name="nameSkill">
                                        Desarrollador Frontend
                                    </x-slot>
                                </x-show-profile.habilidadItem>

                                <x-show-profile.habilidadItem>
                                    <x-slot name="nameSkill">
                                        Ingles
                                    </x-slot>
                                </x-show-profile.habilidadItem>

                                <x-show-profile.habilidadItem>
                                    <x-slot name="nameSkill">
                                        Photoshop
                                    </x-slot>
                                </x-show-profile.habilidadItem>

                                <x-show-profile.habilidadItem>
                                    <x-slot name="nameSkill">
                                        Figma
                                    </x-slot>
                                </x-show-profile.habilidadItem>

                            </x-show-profile.habilidadesSlot>
                        </x-show-profile.card><!-- Parte DER -->
                    </div>
                </div>





                            






            </x-show-profile.containerMobile>
        </x-container>
    </div>
    @push('modals')
    <script>

    </script>
    @endpush
</x-contacto-amarillo.contacto-layout>