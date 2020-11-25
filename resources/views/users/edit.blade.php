<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                    {{ __('Editar usuario') }}
                    </div>
                    <div class="mt-6 text-gray-500">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('usuarios.update', $user->id) }}" method="POST">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-1">
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="name">{{ __('Nombre') }}</label>
                                        <input id="name" type="text" name="name" value="{{ $user->name }}" class="form-input rounded-md shadow-sm mt-1 block w-full" autocomplete="name" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="lastname">{{ __('Apellido') }}</label>
                                        <input id="lastname" type="text" name="lastname" value="{{ $user->lastname }}" class="form-input rounded-md shadow-sm mt-1 block w-full" autocomplete="lastname" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="phone">{{ __('Telefono') }}</label>
                                        <input id="phone" type="text" name="phone" value="{{ $user->phone }}" class="form-input rounded-md shadow-sm mt-1 block w-full" autocomplete="phone" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="address">{{ __('dirección') }}</label>
                                        <input id="address" type="text" name="address" value="{{ $user->address }}" class="form-input rounded-md shadow-sm mt-1 block w-full" autocomplete="address" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email">{{ __('Correo') }}</label>
                                        <input id="email" type="email" name="email" value="{{ $user->email }}" class="form-input rounded-md shadow-sm mt-1 block w-full" autocomplete="email" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="password">{{ __('Clave') }}</label>
                                        <input id="password" type="password" name="password" class="form-input rounded-md shadow-sm mt-1 block w-full" autocomplete="off" />
                                    </div>
                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="rols_id">{{ __('Rol') }}</label>
                                        <select id="rols_id" name="rols_id" class="select-input rounded-md shadow-sm mt-1 block w-full">
                                            <option value=""></option>
                                            @foreach ($rols as $rol)
                                                <option value="{{ $rol->id }}" @if($user->rols_id == $rol->id) selected @endif>{{ $rol->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <x-jet-button class="ml-4">
                                    {{ __('Guardar') }}
                                </x-jet-button>
                            </div>
                            @csrf
                            @method('PUT')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
