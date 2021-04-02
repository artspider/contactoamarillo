<div class="flex justify-center col-span-7 text-base font-bold mb-8">
  <a href="#" x-on:click.prevent="step=1">
    <p class="mr-10">
      <span
        class=" {{
          $step == 1 ? 'bg-main-yellow' : 'bg-black text-light-gray'
        }}  rounded-full py-1 px-3"
        >1</span
      >
      Overview
    </p>
  </a>
  <a href="#" x-on:click.prevent="step=2">
    <p class="mr-10">
      <span
        class="{{
          $step == 2 ? 'bg-main-yellow' : 'bg-black text-light-gray'
        }}  rounded-full py-1 px-3"
        >2</span
      >
      Precio
    </p>
  </a>
  <a href="#" x-on:click.prevent="step=3">
    <p class="mr-10">
      <span
        class="{{
          $step == 3 ? 'bg-main-yellow' : 'bg-black text-light-gray'
        }}  rounded-full py-1 px-3"
        >3</span
      >
      Descripción
    </p>
  </a>
  <a href="#" x-on:click.prevent="step=4">
    <p class="mr-10">
      <span
        class="{{
          $step == 4 ? 'bg-main-yellow' : 'bg-black text-light-gray'
        }}  rounded-full py-1 px-3"
        >4</span
      >
      Galería
    </p>
  </a>
  <a href="#" x-on:click.prevent="step=5">
    <p>
      <span
        class="{{
          $step == 5 ? 'bg-main-yellow' : 'bg-black text-light-gray'
        }}  rounded-full py-1 px-3"
        >5</span
      >
      Publicar
    </p>
  </a>
</div>
