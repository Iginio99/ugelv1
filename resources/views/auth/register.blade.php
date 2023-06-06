<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <fieldset class="border border-gray-300 p-4">
            <legend class="text-base font-medium text-gray-700">Información Personal</legend>
            <!-- Tipo de Persona -->
            <div>
                <x-input-label for="tip-persona" :value="__('Tipo de Persona')" />
                <select
                    class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="option1">--------</option>
                    <option value="option2">Persona Jurídica</option>
                    <option value="option3">Persona Natural</option>
                    <x-input-error :messages="$errors->get('tip-persona')" class="mt-2" />
                </select>
            </div>
            <!-- Tipo de Documento -->
            <div>
                <x-input-label for="tip-documento" :value="__('Tipo de Documento')" />
                <select
                    class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="option1">--------</option>
                    <option value="option2">DNI</option>
                    <option value="option3">Carnet de Extranjeria</option>
                    <x-input-error :messages="$errors->get('tip-persona')" class="mt-2" />
                </select>
            </div>
            <!-- Numero de Documento -->
            <div>
                <x-input-label for="nun-doc" :value="__('Número de Documento')" />
                <x-text-input id="nun-doc" class="block mt-1 w-full" type="text" name="nun-doc" :value="old('nun-doc')"
                    required autofocus autocomplete="nun-doc" />
                <x-input-error :messages="$errors->get('nun-doc')" class="mt-2" />
            </div>
        </fieldset>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
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

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('¿Ya esta registrado?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Registrar') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
