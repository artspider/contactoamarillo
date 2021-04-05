<x-contacto-amarillo.contacto-layout title="Dashboard">
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <x-searchComp placeholder="Buscar proyectos"></x-searchComp>
        </div>
    </x-slot>

    <!-- Aquì va menuside -->
            <x-dashboard-n>
                <x-overview >
                        <x-usuarioMob>
                            Hello,
                            <x-slot name="nombre">
                                Carlos Carbajal
                            </x-slot>

                            <x-slot name="sourc">
                                https://randomuser.me/api/portraits/men/75.jpg
                            </x-slot>
                        </x-usuarioMob>

                        <div class="lg:flex justify-around">    
                            <x-aboutYou>
                                <x-earnings>
                                    <!-- Aqui deberia ir la una grafica por ahora esta como img -->
                                    <x-slot name="graph">
                                        https://cdn140.picsart.com/268891729036211.png?type=webp&to=min&r=640
                                    </x-slot>

                                    <x-slot name="money">
                                        8,900
                                    </x-slot>

                                    <x-slot name="improvement">
                                        +10 since last month
                                    </x-slot>
                                </x-earnings>

                                <x-containerRank>
                                    <x-rankUser>
                                        <x-slot name="numberRank">
                                            98
                                        </x-slot>

                                        <x-slot name="topPercentage">
                                            In top 30%
                                        </x-slot>
                                    </x-rankUser>

                                    <x-projectsLeft>
                                        <x-slot name="numberProjects">
                                            31
                                        </x-slot>

                                        <x-slot name="projectsFinished">
                                            8 this month
                                        </x-slot>

                                        <x-slot name="advantage1">
                                            mobile app
                                        </x-slot>

                                        <x-slot name="advantage2">
                                            branding
                                        </x-slot>
                                    </x-projectsLeft>

                                </x-containerRank>
                            </x-aboutYou>

                            <x-yourProjects>
                                <x-inProgressProject>
                                    <x-slot name="srcImg">
                                        https://randomuser.me/api/portraits/women/2.jpg
                                    </x-slot>

                                    <x-slot name="typeProject">
                                        Logo design for Bakery
                                    </x-slot>

                                    <x-slot name="daysRemaing">
                                        1 day remaing
                                    </x-slot>

                                </x-inProgressProject>
                                    
                                <x-inProgressProject>
                                    <x-slot name="srcImg">
                                        https://randomuser.me/api/portraits/men/41.jpg
                                    </x-slot>

                                    <x-slot name="typeProject">
                                        Personal branding project
                                    </x-slot>

                                    <x-slot name="daysRemaing">
                                        5 days remaing
                                    </x-slot>
                                </x-inProgressProject>

                                <x-slot name="pathProjects">
                                    #
                                </x-slot>
                            </x-yourProjects>
                        </div>

                        <div class="lg:flex justify-around"> 
                            <x-recommendedProjects>
                                <x-slot name="nameAutorProject">
                                        Thomas Martin
                                </x-slot>
                                <x-slot name="lastUpdate">
                                        Updated 10m ago
                                </x-slot>
                                <x-slot name="typeProject">
                                        Design
                                </x-slot>
                                <x-slot name="topicProject">
                                    Need a designer to form branding essentials for my business.
                                </x-slot>
                                <x-slot name="descriptionProject">
                                    Looking for a talented brand designer to create all the branding materials for my new startup 
                                </x-slot>
                                <x-slot name="priceProject">
                                    8,350 
                                </x-slot>
                                <x-slot name="typeOfPay">
                                    month
                                </x-slot>
                                <x-slot name="hiring">
                                    Full time
                                </x-slot>
                            </x-recommendedProjects>

                            <x-invoices>
                                <x-paymentsMade>
                                    <x-slot name="srcImg">
                                        https://randomuser.me/api/portraits/women/8.jpg
                                    </x-slot>
                                </x-paymentsMade>

                                <x-paymentsMade>
                                    <x-slot name="srcImg">
                                        https://randomuser.me/api/portraits/men/8.jpg
                                    </x-slot>
                                </x-paymentsMade>
                            </x-invoices>
                        </div>
                </x-overview>
            </x-dashboard-n>


        <!-- Pero creo que aqui deberia de ir cada menuItemUser -->


        <!-- Y cada menuItem NORMAL -->
        <!-- Y cada menuItem NORMAL -->
        <!-- Y cada menuItem NORMAL -->
        <!-- Y cada menuItem NORMAL -->
        <!-- Y cada menuItem NORMAL -->
        <!-- Y cada menuItem NORMAL -->
        <!-- Y cada menuItem NORMAL -->

    @push('modals')
    <script>

    </script>
    @endpush
</x-contacto-amarillo.contacto-layout>