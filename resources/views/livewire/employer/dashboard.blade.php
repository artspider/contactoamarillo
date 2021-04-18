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
        <x-employer.sliderWrapper class="h-432">
          @forelse ($categorias as $categoria)
          <x-employer.sliderItem2 id="/category/{{$categoria->id}}">
            <x-slot name="imgSource">
              /img/category_img/{{$categoria->image}}.jpg
            </x-slot>

            <x-slot name="jobName">
              {{$categoria->nombre}}
            </x-slot>
          </x-employer.sliderItem2>
          @empty

          @endforelse
        </x-employer.sliderWrapper>
      </x-employer.section>

      <x-employer.section>
        <h2 class="font-bold text-2xl mt-8 mb-5">
          ¿Cómo encontrar un freelancer que vuelva realidad tu
          proyecto?
        </h2>
        <x-employer.wrapperSection>
          <x-employer.itemGetFreelancer>
            <x-slot name="iconSrc">
              https://www.flaticon.com/svg/vstatic/svg/3603/3603870.svg?token=exp=1618242807~hmac=13aedeec0af884a58e1f1c6aa6668e7d
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
              https://www.flaticon.com/svg/vstatic/svg/1584/1584961.svg?token=exp=1618243181~hmac=19daa77b3b66ddcebce59a1a7fef95cd
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
              https://www.flaticon.es/svg/vstatic/svg/1086/1086741.svg?token=exp=1618243240~hmac=0a581aa04caa488e197861013a65d1a8
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