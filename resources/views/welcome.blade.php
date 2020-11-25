<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div>
            <h1>Prueba laravel</h1>
            <div class="">
                <p><a href="{{ route('register') }}" class="text-sm text-gray-700 underline">Registro</a></p>
            </div>
            <div class="">
                <p><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Ingresar</a></p>
            </div>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>






