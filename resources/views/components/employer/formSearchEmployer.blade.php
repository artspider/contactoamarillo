<form action="#" class="flex flex-col py-3 h-432 pt-10 justify-between">
    <h1 class="text-white text-lg">Hola, {{$nameUser}}, ¿qué perfil estas buscando hoy?</h1>
    {{$slot}}
    <input type="submit" value="Buscar" class="bg-main-yellow text-black text-2xl w-full h-14 rounded-2xl font-semibold">
</form>