<div {{$attributes->merge(['class'=>'flex flex-col bg-white m-auto p-auto'])}}>
  <div class="flex overflow-x-scroll pb-10 hide-scroll-bar md:overflow-x-auto mt-8 h-full">
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