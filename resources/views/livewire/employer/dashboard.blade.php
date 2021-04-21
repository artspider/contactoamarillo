<div class=" min-h-screen flex flex-col mb-8">
  <div>
    <x-employer.hero>
      <input id="inputSearch" class="w-full rounded pl-10 focus:text-black focus:bg-white" type="text"
        placeholder="Prueba 'crear una aplicaciòn'">
      <svg class="absolute w-5 top-3 left-3" width="16" height="16" viewBox="0 0 16 16"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M15.8906 14.6531L12.0969 10.8594C12.025 10.7875 11.9313 10.75 11.8313 10.75H11.4187C12.4031 9.60938 13 8.125 13 6.5C13 2.90937 10.0906 0 6.5 0C2.90937 0 0 2.90937 0 6.5C0 10.0906 2.90937 13 6.5 13C8.125 13 9.60938 12.4031 10.75 11.4187V11.8313C10.75 11.9313 10.7906 12.025 10.8594 12.0969L14.6531 15.8906C14.8 16.0375 15.0375 16.0375 15.1844 15.8906L15.8906 15.1844C16.0375 15.0375 16.0375 14.8 15.8906 14.6531ZM6.5 11.5C3.7375 11.5 1.5 9.2625 1.5 6.5C1.5 3.7375 3.7375 1.5 6.5 1.5C9.2625 1.5 11.5 3.7375 11.5 6.5C11.5 9.2625 9.2625 11.5 6.5 11.5Z">
        </path>
      </svg>
    </x-employer.hero>
  </div>
  <main>
    <x-employer.container>

      <x-employer.section>
        <div class="flex justify-between items-center">
          <h2 class="font-bold text-2xl mt-8 mb-5 text-center lg:text-left">Nuestras categorias</h2>
          <a href="{{ url('/categorias') }}"
            class="text-blue-400 mt-8 mb-5 border-b hover:text-blue-600 hover:border-b hover:border-blue-600">Ver
            todas</a>
        </div>

        <div class="carousel bg-white mb-8 h-96"
          data-flickity='{"setGallerySize": false, "initialIndex": 3, "imagesLoaded": true, "percentPosition": false, "watchCSS": true }'>
          @forelse ($categorias as $categoria)
          <a href="/employer/category/{{$categoria->id}}"
            class="carousel-cell border-gray-400 w-64 h-full my-4 ml-3 mr-3 hover:bg-gray-50">
            <div class="card-zoom h-84 flex flex-row">
              <img class="h-84 block bg-no-repeat bg-cover rounded-t-lg card-zoom-image"
                src="/img/category_img/{{$categoria->image}}-1.jpg" alt="{{$categoria->id}}" />

            </div>
            <p class="carousel-cell__text text-center mt-2 font-bold">{{$categoria->nombre}}</p>
          </a>
          @empty

          @endforelse
        </div>

      </x-employer.section>

      <x-employer.section>
        <h2 class="font-bold text-2xl mt-16 mb-5">
          ¿Cómo encontrar un freelancer que vuelva realidad tu
          proyecto?
        </h2>
        <x-employer.wrapperSection>
          <x-employer.itemGetFreelancer>
            <x-slot name="iconSrc">
              <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M0 0v19h24v-19h-24zm22 17h-20v-15h20v15zm-6.599 4l2.599 3h-12l2.599-3h6.802zm-6.401-16l6 4.674-2.538.427 1.538 3.095-1.571.804-1.546-3.157-1.883 1.759v-7.602z" />
              </svg>
            </x-slot>
            <x-slot name="nameItem">
              Publicar un trabajo
            </x-slot>
            <x-slot name="descriptionItem">
              Es fácil. Simplemente publica un trabajo que necesitas terminar y recibe ofertas
              competitivas de freelancers en cuestión de minutos.
            </x-slot>
          </x-employer.itemGetFreelancer>

          <x-employer.itemGetFreelancer>
            <x-slot name="iconSrc">
              <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M19.5 15c-2.483 0-4.5 2.015-4.5 4.5s2.017 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.017-4.5-4.5-4.5zm2.5 5h-2v2h-1v-2h-2v-1h2v-2h1v2h2v1zm-7.18 4h-14.815l-.005-1.241c0-2.52.199-3.975 3.178-4.663 3.365-.777 6.688-1.473 5.09-4.418-4.733-8.729-1.35-13.678 3.732-13.678 6.751 0 7.506 7.595 3.64 13.679-1.292 2.031-2.64 3.63-2.64 5.821 0 1.747.696 3.331 1.82 4.5z" />
              </svg>
            </x-slot>
            <x-slot name="nameItem">
              Encuentra a tu freelancer ideal
            </x-slot>
            <x-slot name="descriptionItem">
              Independientemente de tus necesidades, habrá un freelancer que haga el trabajo: desde
              diseño web, desarrollo de aplicaciones móviles, asistentes virtuales y diseño gráfico (y
              mucho más).
            </x-slot>
          </x-employer.itemGetFreelancer>

          <x-employer.itemGetFreelancer>
            <x-slot name="iconSrc">
              <svg class="w-8 h-8 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                  d="M22 4h-20c-1.104 0-2 .896-2 2v12c0 1.104.896 2 2 2h20c1.104 0 2-.896 2-2v-12c0-1.104-.896-2-2-2zm0 13.5c0 .276-.224.5-.5.5h-19c-.276 0-.5-.224-.5-.5v-6.5h20v6.5zm0-9.5h-20v-1.5c0-.276.224-.5.5-.5h19c.276 0 .5.224.5.5v1.5zm-9 6h-9v-1h9v1zm-3 2h-6v-1h6v1zm10-2h-3v-1h3v1z" />
              </svg>
            </x-slot>
            <x-slot name="nameItem">
              Paga de manera segura
            </x-slot>
            <x-slot name="descriptionItem">
              Con pagos seguros y cientos de profesionales evaluados entre los cuales elegir, tenemos
              la forma más simple y segura para encargar trabajo en línea.
            </x-slot>
          </x-employer.itemGetFreelancer>
        </x-employer.wrapperSection>
      </x-employer.section>

      <x-employer.section>
        <h2 class="font-bold text-2xl mt-8 mb-5 text-center lg:text-left">Lo que has visto recientemente y
          más</h2>
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
    </x-employer.container>
  </main>
</div>