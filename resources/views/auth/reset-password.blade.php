<x-contacto-amarillo.contacto-guest title="Reset Password">
    {{-- <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Reset Password') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card> --}}
    <div class="container mx-auto my-16">
      <div class="flex flex-wrap justify-center mx-6">
          <div class="w-full max-w-sm ">
            <div class="flex flex-col break-words bg-white border-2 rounded shadow-md">
              <div class="font-semibold bg-main-yellow text-gray-800 py-3 px-6 mb-0">
                  {{ __('Reset Password') }}
              </div>
              <div class="mx-6 my-6 flex flex-col">
                <x-jet-validation-errors class="mb-4" />
                <p class="text-gray-700 text-justify leading-normal mb-4">
                  Estas por crear una nueva contraseña. Por favor ingresa la información solicitada y después haz clic en el botón
                </p>
                <form method="POST" action="{{ route('password.update') }}">
                  @csrf
      
                  <input type="hidden" name="token" value="{{ $request->route('token') }}">
      
                  <div class="block">
                      <x-jet-label for="email" value="{{ __('Email') }}" />
                      <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                  </div>
      
                  <div class="mt-4">
                      <x-jet-label for="password" value="{{ __('Password') }}" />
                      <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                  </div>
      
                  <div class="mt-4">
                      <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                      <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                  </div>
      
                  <div class="flex items-center justify-end mt-4">
                      <x-jet-button>
                          {{ __('Reset Password') }}
                      </x-jet-button>
                  </div>
              </form>
              </div>
            </div>
          </div>
      </div>
    </div>
</x-contacto-amarillo.contacto-guest>
