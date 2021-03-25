<x-contacto-amarillo.contacto-guest title="Verify-Email">
    {{-- <div class="container mx-auto my-auto ">
        <div class="flex justify-center mt-46 mx-6">
            <div class="w-full max-w-sm ">

              <div class="mb-4 text-sm text-gray-600">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
              </div>

              @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
              @endif

              <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                  <div>
                      <x-jet-button type="submit">
                          {{ __('Resend Verification Email') }}
                      </x-jet-button>
                  </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                        {{ __('Log Out') }}
                    </button>
                </form>
              </div>
            </div>
        </div>
    </div> --}}

    <div class="mail-confirmation w-1/3 bg-white rounded-md shadow-md  mx-auto mt-40">
      <div class="confirmation__top flex items-center justify-around bg-main-yellow h-1/3">
        <x-contacto-amarillo.contacto-mailverification>
        </x-contacto-amarillo.contacto-mailverification>
        <h2 class="text-2xl text-gray-800 font-bold">Confirma tu correo </h2>
      </div>
      <div class="confirmation__body m-8 ">
        <h3 class="text-gray-700 text-xl font-semibold mt-6 mb-4 ">Hey {{Auth::user()->name}}, </h3>
        <p class="text-gray-600 leading-relaxed text-justify">¡Gracias por registrarte! Antes de comenzar, ¿podrías verificar tu dirección de correo electrónico haciendo
           clic en el enlace que le acabamos de enviar? Si no recibiste el correo electrónico, con gusto te enviaremos otro.
        </p>
        
        @if (session('status') == 'verification-link-sent')
          <div class="my-4 font-medium text-green-600 leading-relaxed text-justify">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
          </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
          <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            
            <div>
              <x-jet-button type="submit">
                {{ __('Resend Verification Email') }}
              </x-jet-button>
            </div>
          </form>
  
          <form method="POST" action="{{ route('logout') }}">
            @csrf
  
            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
              {{ __('Logout') }}
            </button>
          </form>
        </div>
      </div>      
    </div>
    
</x-contacto-amarillo.contacto-guest>