<form action="#" class="flex flex-col h-432 pt-12 justify-between lg:pt-0  lg:h-64">
    <h1 class="text-white text-lg text-center md:text-xl lg:pt-14 lg:text-1xl lg:w-11/12 lg:text-left lg:font-bold lg:mx-auto">Busca tu experto ideal, {{$nameUser}}</h1>
    <div class="h-72 flex flex-col justify-between lg:h-44 lg:flex-row lg:items-center lg:w-11/12 lg:mx-auto lg:py-8 lg:rounded-xl">
        <div class="lg:flex justify-center items-start flex-1">
            {{$slot}}
        </div><!-- Contiene los 2 inputSearch -->
        <input type="submit" value="Buscar" class="bg-main-yellow text-black text-2xl w-full h-14 rounded-2xl font-semibold cursor-pointer hover:bg-yellow-500 lg:w-1/6 lg:mx-auto lg:mt-2">
    </div><!-- Parte abajo -->
</form>