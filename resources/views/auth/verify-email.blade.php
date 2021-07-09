<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-white">
           {{__ ('¡Gracias por registrarse! Antes de comenzar, ¿podría verificar su dirección de correo electrónico haciendo clic en el vínculo que le enviamos por correo electrónico? Si no recibió el correo electrónico, con gusto le enviaremos otro'). }}       
        </div>


       @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-blue-900">
           {{__ ('Se envió un nuevo vínculo de verificación a la dirección de correo electrónico que proporcionó durante el registro')}}         
            </div>
        @endif
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                
                <div>
                    <x-jet-button type="submit">
                        {{ __('Reenviar correo electrónico de verificación') }}
                    </x-jet-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-white hover:text-blue-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>
