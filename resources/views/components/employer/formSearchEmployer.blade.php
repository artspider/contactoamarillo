<form action="#" class="flex flex-col  h-432 pt-12 justify-between">
    <h1 class="text-white text-lg text-center">Hola, {{$nameUser}}, ¿qué perfil estas buscando hoy?</h1>
    <div class="h-72 flex flex-col justify-between">
        <div class="">
            {{$slot}}
        </div><!-- Contiene los 2 inputSearch -->
        <input type="submit" value="Buscar" class="bg-main-yellow text-black text-2xl w-full h-14 rounded-2xl font-semibold cursor-pointer hover:bg-yellow-500">
    </div><!-- Parte abajo -->
</form>