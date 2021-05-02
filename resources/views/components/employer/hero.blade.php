<div id="heroIMG"
  class="h-96 bg-indigo-900 md:bg-transparent md:bg-bg1 bg-cover bg-no-repeat mt-16 xl:h-screen bg-center">
  <x-employer.container>
    <div class="flex pt-60 h-2/3 ">
      <div
        class=" w-full flex flex-col justify-around  md:w-3/6 lg:w-2/5 md:justify-center md:items-start  rounded-xl p-9 shadow-lg">
        <div>
          <h1 class="text-4xl font-bold text-white">Encuentra los servicios <span class="font-italic">freelance</span>
            ideales para tu negocio</h1>
        </div>

        {{$slot}}
      </div>
    </div>
  </x-employer.container>
</div>