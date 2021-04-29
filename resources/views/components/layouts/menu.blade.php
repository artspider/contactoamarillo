<!-- Top Menu -->
<!-- Icono cerrar -->
<div class="bg-gray-800 flex justify-center items-center relative">
  <div id="closeXX" class=" absolute top-4 right-4 cursor-pointer" x-on:click="close()">
    <svg class="text-main-yellow w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
      viewBox="0 0 24 24">
      <path
        d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.151 17.943l-4.143-4.102-4.117 4.159-1.833-1.833 4.104-4.157-4.162-4.119 1.833-1.833 4.155 4.102 4.106-4.16 1.849 1.849-4.1 4.141 4.157 4.104-1.849 1.849z" />
    </svg>
  </div>
</div>
<!-- End Icono cerrar -->
{{$profile}}
<!-- End top Menu -->

<div class=" h-full bg-main-yellow rounded-tr-medium flex flex-col  ">
  {{$slot}}
</div>