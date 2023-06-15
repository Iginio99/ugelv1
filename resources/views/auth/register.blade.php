<x-guest-layout>
    <h1 class="font-extrabold text-center flex justify-center text-3xl text-black py-5">
        REGISTRO DE USUARIO
    </h1>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="max-w-5xl mx-auto grid grid-cols-3">
            <fieldset class="border border-gray-300 p-4">
                <legend class="text-base font-medium text-gray-700">Información Personal</legend>
                <!-- Nombres -->
                <div>
                    <x-input-label for="name" :value="__('Nombres')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                        required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <!-- Apellido Paterno-->
                <div>
                    <x-input-label for="ape_paterno" :value="__('Apellido Paterno')" />
                    <x-text-input id="ape_paterno" class="block mt-1 w-full" type="text" name="ape_paterno"
                        :value="old('ape_paterno')" required autofocus autocomplete="ape_paterno" />
                    <x-input-error :messages="$errors->get('ape_paterno')" class="mt-2" />
                </div>
                <!-- Apellido Materno-->
                <div>
                    <x-input-label for="ape_materno" :value="__('Apellido Materno')" />
                    <x-text-input id="ape_materno" class="block mt-1 w-full" type="text" name="ape_materno"
                        :value="old('ape_materno')" required autofocus autocomplete="ape_materno" />
                    <x-input-error :messages="$errors->get('ape_materno')" class="mt-2" />
                </div>

                <!-- Sexo -->
                <div>
                    <x-input-label for="sexo" :value="__('Sexo')" />
                    <select
                        class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="option1">--------</option>
                        <option value="option2">Masculino</option>
                        <option value="option3">Femenino</option>
                    </select>
                    <x-input-error :messages="$errors->get('sexo')" class="mt-2" />
                </div>
                <!-- Lugar de nacimiento -->
                <div>
                    <x-input-label for="lugar_nacimiento" :value="__('Lugar de Nacimiento')" />
                    <x-text-input id="lugar_nacimiento" class="block mt-1 w-full" type="text" name="lugar_nacimiento"
                        :value="old('lugar_nacimiento')" required autofocus autocomplete="lugar_nacimiento" />
                    <x-input-error :messages="$errors->get('lugar_nacimiento')" class="mt-2" />
                </div>
                <!-- Fecha de Nacimiento -->
                <div>
                    <x-input-label for="fecha_nacimiento" :value="__('Fecha de Nacimiento')" />
                    <x-text-input id="fecha_nacimiento" class="block mt-1 w-full" type="date" name="fecha_nacimiento"
                        :value="old('fecha_nacimiento')" required autofocus autocomplete="fecha_nacimiento" />
                    <x-input-error :messages="$errors->get('fecha_nacimiento')" class="mt-2" />
                </div>
                <div>
                    <x-input-label for="celular" :value="__('Celular')" />
                    <x-text-input id="celular" class="block mt-1 w-full" type="text" name="celular"
                        :value="old('celular')" required autofocus autocomplete="celular" />
                    <x-input-error :messages="$errors->get('celular')" class="mt-2" />
                </div>
            </fieldset>

            <fieldset class="border border-gray-300 p-4">
                <legend class="text-base font-medium text-gray-700">Detalles de Registro</legend>
                <!-- Tipo de Persona -->
                <div>
                    <x-input-label for="tipo_persona" :value="__('Tipo de Persona')" />
                    <select
                        class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="option1">--------</option>
                        <option value="option2">Persona Jurídica</option>
                        <option value="option3">Persona Natural</option>
                        <x-input-error :messages="$errors->get('tipo_persona')" class="mt-2" />
                    </select>
                </div>
                <!-- Tipo de Documento -->
                <div>
                    <x-input-label for="tipo_documento" :value="__('Tipo de Documento')" />
                    <select
                        class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="option1">--------</option>
                        <option value="option2">DNI</option>
                        <option value="option3">Carnet de Extranjeria</option>
                        <x-input-error :messages="$errors->get('tipo_documento')" class="mt-2" />
                    </select>
                </div>
                <!-- Numero de Documento -->
                <div>
                    <x-input-label for="numero_documento" :value="__('Número de Documento')" />
                    <x-text-input id="numero_documento" class="block mt-1 w-full" type="text" name="numero_documento"
                        :value="old('numero_documento')" required autofocus autocomplete="numero_documento" />
                    <x-input-error :messages="$errors->get('numero_documento')" class="mt-2" />
                </div>
                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
            </fieldset>
            <fieldset class="border border-gray-300 p-4">
                <legend class="text-base font-medium text-gray-700">Dirección</legend>
                <!-- Departamento -->
                <div>
                    <x-input-label for="departamento" :value="__('Departamento')" />
                    <x-text-input id="departamento" class="block mt-1 w-full" type="text" name="departamento"
                        :value="old('departamento')" required autofocus autocomplete="departamento" />
                    <x-input-error :messages="$errors->get('departamento')" class="mt-2" />
                </div>
                <!-- Provincia -->
                <div>
                    <x-input-label for="provincia" :value="__('Provincia')" />
                    <x-text-input id="provincia" class="block mt-1 w-full" type="text" name="provincia"
                        :value="old('provincia')" required autofocus autocomplete="provincia" />
                    <x-input-error :messages="$errors->get('provincia')" class="mt-2" />
                </div>
                <!-- Distrito -->
                <div>
                    <x-input-label for="distrito" :value="__('Distrito')" />
                    <x-text-input id="distrito" class="block mt-1 w-full" type="text" name="distrito"
                        :value="old('distrito')" required autofocus autocomplete="distrito" />
                    <x-input-error :messages="$errors->get('distrito')" class="mt-2" />
                </div>
                <!-- Dirección -->
                <div>
                    <x-input-label for="direccion" :value="__('Dirección')" />
                    <x-text-input id="direccion" class="block mt-1 w-full" type="text" name="direccion"
                        :value="old('direccion')" required autofocus autocomplete="direccion" />
                    <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                </div>
            </fieldset>
        </div>
        <div class="max-w-5xl mx-auto py-8">
            <div class="flex items-center mb-4">
                <input type="checkbox" id="terms" class="mr-2">
                <label for="terms" class="text-sm text-gray-700">
                "he leído y acepto los"
                    <a href="{{ url('/clausula') }}" class="text-blue-500 underline">Cláusula Informativa Del
                        Tratamiento De Datos Personales</a>
                "y la"
                <a href="{{ url('/terminos') }}" class="text-blue-500 underline">términos y condiciones</a>
                ", y doy mi consentimiento para el procesamiento de mis datos personales."
                </label>
            </div>
            <div class="flex items-end justify-end mt-4 py-5">
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                    href="{{ route('login') }}">
                    {{ __('¿Ya esta registrado?') }}
                </a>

                <x-primary-button class="ml-4">
                    {{ __('Registrar') }}
                </x-primary-button>
            </div>
        </div>
    </form>
</x-guest-layout>
