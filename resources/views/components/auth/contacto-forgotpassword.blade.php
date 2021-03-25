<x-contacto-amarillo.contacto-guest title="Forgot Password">
  <div class="forgot-password w-1/3 bg-white rounded-md shadow-md  mx-auto mt-40">
    <div class="forgot-password__top flex items-center justify-around bg-main-yellow h-1/3">
      <x-contacto-amarillo.contacto-forgotpassimagen>
      </x-contacto-amarillo.contacto-forgotpassimagen>
      <h2 class="text-2xl text-gray-800 font-bold">¿Olvidaste tu contraseña?</h2>
    </div>
    <div class="forgot-password__body m-8 ">
      <h3 class="text-gray-700 text-xl font-semibold mt-6 mb-4 ">No te procupes, </h3>
        <p class="text-gray-600 leading-relaxed text-justify">Simplemente dinos tu dirección de correo electrónico y te enviaremos un enlace para restablecer la contraseña permitiendoté elegir una nueva.
        </p>

        @if (session('status'))
        <div class="my-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
        @endif

        <x-jet-validation-errors class="my-4" />

        <form method="POST" action="{{ route('password.email') }}" class="my-6">
        @csrf

        <div class="block">
            <x-jet-label for="email" value="{{ __('E-Mail Address') }}" />
            <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-jet-button>
                {{ __('Email Password Reset Link') }}
            </x-jet-button>
        </div>
      </form>
    </div>
  </div>
</x-contacto-amarillo.contacto-guest>