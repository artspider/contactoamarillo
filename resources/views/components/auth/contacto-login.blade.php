<x-contacto-amarillo.contacto-guest title="Habilidades">
    <div class="container mx-auto my-16">
        <div class="flex flex-wrap justify-center mx-6">
            <div class="w-full max-w-sm ">
                <div class="flex flex-col break-words bg-white border-2 rounded shadow-md">
                    <div class="font-semibold bg-main-yellow text-gray-800 py-3 px-6 mb-0">
                        {{ __('Login') }}
                    </div>
                    <div class="mx-6 mt-6 flex flex-col">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div>
                                <x-jet-label for="email" value="{{ __('Email') }}" />
                                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus />
                            </div>

                            <div class="mt-4">
                                <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" />
                            </div>

                            <div class="block mt-4">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Recordarme') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                    href="{{ route('password.request') }}">
                                    {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                                @endif

                                <x-jet-button class="ml-4">
                                    {{ __('Login') }}
                                </x-jet-button>
                            </div>
                        </form>
                    </div>
                    <div class=" h-10 font-semibold bg-main-yellow text-gray-800 py-3 px-6 mb-0 mt-4">
                        <p class="hidden ">login</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-contacto-amarillo.contacto-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
    </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus />
        </div>

        <div class="mt-4">
            <x-jet-label for="password" value="{{ __('Password') }}" />
            <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />
        </div>

        <div class="block mt-4">
            <label for="remember_me" class="flex items-center">
                <x-jet-checkbox id="remember_me" name="remember" />
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-jet-button class="ml-4">
                {{ __('Log in') }}
            </x-jet-button>
        </div>
    </form>
    </x-jet-authentication-card> --}}
</x-contacto-amarillo.contacto-guest>