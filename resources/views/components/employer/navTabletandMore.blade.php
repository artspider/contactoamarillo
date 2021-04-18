<div class="hidden xl:block w-900">
    <ul class="flex text-white font-bold justify-around items-center">
        <li class="hover:underline hover:text-main-yellow"><a href="/employer/dashboard">Inicio</a></li>
        <li class="hover:underline hover:text-main-yellow"><a href="/notifications">Notificaciones</a></li>
        <li class="hover:underline hover:text-main-yellow"><a href="/publish-Project">Publicar proyecto</a></li>
        <li class="hover:underline hover:text-main-yellow"><a href="/proyects">Proyectos</a></li>
        <li class="hover:underline hover:text-main-yellow"><a href="/search-expert">Buscar experto</a></li>
        <li class="hover:underline hover:text-main-yellow"><a href="/account">Cuenta</a></li>
        <li class="border-white border px-3 py-2 rounded-md hover:bg-white hover:text-black">
            <!-- Logout -->


            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a class="flex items-center focus:outline-none duration-150 ease-in-out" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); this.closest('form').submit();">

                    <p>Cerrar sesión</p>
                </a>
            </form>

        </li>
    </ul>
</div>