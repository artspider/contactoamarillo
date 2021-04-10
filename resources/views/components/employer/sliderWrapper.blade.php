<!-- <div class="h-432 relative mt-10 mb-24 flex items-center justify-between flex-grow overflow-x-auto">
    <button class="h-8 w-8 rounded-full bg-white absolute text-black content-center left-6 top-36"><</button>
        {{$slot}}
    <button class="h-8 w-8 rounded-full bg-white absolute text-black content-center right-6 top-36">></button>
    
</div> -->

<div class="flex flex-col bg-white m-auto p-auto h-432"> 
      <div class="flex overflow-x-scroll pb-10 hide-scroll-bar mt-8 h-full">
        <div class="flex flex-nowrap lg:ml-10 md:ml-20 ml-10 ">
          {{$slot}}
        </div>
      </div>
</div>

<style>
.hide-scroll-bar {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
.hide-scroll-bar::-webkit-scrollbar {
  display: none;
}
</style>