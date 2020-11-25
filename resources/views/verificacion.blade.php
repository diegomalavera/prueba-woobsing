<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Verificación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                    {{ __('Verificación') }}
                    </div>
                    <div class="mt-6 text-gray-500">
                        {{ __('Pagina para verificación de usuario') }}
                        <form action="{{ route('verify') }}" method="POST">
                            @csrf
                            <x-jet-button class="ml-4">
                                {{ __('Verificar') }}
                            </x-jet-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
