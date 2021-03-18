<header
    class=" w-full fixed z-50 top-0 left-0 transition duration-700 mx-auto bg-black lg:flex lg:flex-row justify-between "
    id="home" x-data="{ isOpen: false}" @keydown.escape="isOpen = false"
    :class="{ 'shadow-lg bg-gray-900' : isOpen, 'bg-black' : !isOpen }">
    <div class="container flex justify-between mx-auto " :class="{ 'flex-col': isOpen }">
        <div class=" h-10 lg:h-20 flex relative w-full ">
        </div>
    </div>
</header>