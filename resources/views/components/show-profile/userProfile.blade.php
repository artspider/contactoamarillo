<div class="w-full rounded-lg h-72 relative md:h-96 lg:h-40">
        <div class="bg-testProfile bg-cover bg-center h-full w-full absolute z-10"></div>
        <div class="bg-black bg-opacity-80 h-full w-full absolute z-20"></div>
        <div class="absolute z-30 text-white flex flex-col w-full h-full items-center lg:flex-row lg:justify-around">
            <div class="mt-5 md:mt-8 lg:flex lg:mt-0 xl:mt-3">
                <img class="rounded-full border-8 border-white w-24 mx-auto md:w-32 lg:absolute lg:top-20 lg:left-5 xl:left-10" src="{{$userImgPicture}}" alt="">
                <div class="flex flex-col items-center md:mt-3 lg:ml-40 lg:items-start xl:ml-48 lg:mt-0 2xl:ml-24">
                    <p class="text-2xl font-black md:text-3xl">{{$nameUser}}</p>
                    <p class="font-medium text-lg md:text-xl">{{$degreeUser}}</p>
                    <div class="h-6 mt-3 flex w-1/4 justify-between mx-auto md:h-8 md:w-1/3 lg:justify-start lg:m-0 lg:mt-2 xl:mt-5">
                            <a class="rounded-full h-6 w-6 bg-black flex justify-center items-center md:h-8 md:w-8 lg:mr-2" href="#">
                                <svg class=" fill-current text-white w-6 h-6 md:h-8 md:w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M13.718 10.528c0 .792-.268 1.829-.684 2.642-1.009 1.98-3.063 1.967-3.063-.14 0-.786.27-1.799.687-2.58 1.021-1.925 3.06-1.624 3.06.078zM24 12c0 6.627-5.373 12-12 12S0 18.627 0 12 5.373 0 12 0s12 5.373 12 12zm-5-1.194c0-3.246-2.631-5.601-6.256-5.601C7.777 5.205 5 8.354 5 12.278c0 3.672 2.467 6.517 7.024 6.517 2.52 0 4.124-.726 5.122-1.288l-.687-.991c-1.022.593-2.251 1.136-4.256 1.136-3.429 0-5.733-2.199-5.733-5.473 0-5.714 6.401-6.758 9.214-5.071 2.624 1.642 2.524 5.578.582 7.083-1.034.826-2.199.799-1.821-.756 0 0 1.212-4.489 1.354-4.975h-1.364l-.271.952c-.278-.785-.943-1.295-1.911-1.295-2.018 0-3.722 2.19-3.722 4.783 0 1.73.913 2.804 2.38 2.804 1.283 0 1.95-.726 2.364-1.373-.3 2.898 5.725 1.557 5.725-3.525z"></path>
                                </svg>
                            </a>
                            <a class="rounded-full h-6 w-6 bg-black flex justify-center items-center md:h-8 md:w-8 lg:mr-2" href="tel:{{$mobileNumberUser}}">
                                <svg class=" fill-current text-white w-6 h-6 md:h-8 md:w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm3.445 17.827c-3.684 1.684-9.401-9.43-5.8-11.308L10.698 6l1.746 3.409-1.042.513c-1.095.587 1.185 5.04 2.305 4.497l1.032-.505 1.76 3.397-1.054.516z"></path>
                                </svg>
                            </a>
                            <a class="rounded-full h-6 w-6 bg-black flex justify-center items-center md:h-8 md:w-8" href="mailto:{{$emailUser}}">
                                <svg class=" fill-current text-white w-6 h-6 md:h-8 md:w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M12 .02c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zM18.99 7L12 12.666 5.009 7H18.99zM19 17H5V8.495l7 5.673 7-5.672V17z"></path>
                                </svg>
                            </a>
                    </div>
                </div><!-- Nombre redes -->
            </div>
            <a href="#">
                <div class="mt-4 bg-main-yellow px-3 py-4 font-bold text-black rounded-xl md:px-4 md:py-5 md:text-lg lg:ml-60">CONTRATAME</div> 
            </a>
            
        </div>
</div>