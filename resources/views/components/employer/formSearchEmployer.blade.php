<form action="#" class="flex flex-col h-432 pt-12 justify-between lg:h-460">
    <h1 class="text-white text-lg text-center md:text-xl lg:pt-10 lg:text-2xl lg:font-bold">Hola, {{$nameUser}}, ¿qué perfil estas buscando hoy?</h1>
    <div class="h-72 flex flex-col justify-between lg:w-1000 lg:mx-auto lg:bg-gray-900 lg:py-8 lg:rounded-xl">
        <div class="lg:flex justify-around pt-7">
            {{$slot}}
        </div><!-- Contiene los 2 inputSearch -->
        <input type="submit" value="Buscar" class="bg-main-yellow text-black text-2xl w-full h-14 rounded-2xl font-semibold cursor-pointer hover:bg-yellow-500 lg:w-2/4 lg:mx-auto">
    </div><!-- Parte abajo -->
</form>