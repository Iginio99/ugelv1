<x-guest-layout>
    <h1 class="font-extrabold text-center flex justify-center text-3xl text-black py-5">
        REGISTRO DE USUARIO
    </h1>
    <div id="app-register">
        <div v-if=pop_up>
            @include('clausula')
        </div>
        <div v-if=terminos>
            @include('terminos')
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="max-w-5xl mx-auto grid grid-cols-3">

                <fieldset class="border border-gray-300 p-4">
                    <legend class="text-base font-medium text-gray-700">Información Personal</legend>
                    <!-- Nombres -->
                    <div>
                        <x-input-label for="name" :value="__('Nombres')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="role" :value="__('Rol')" />
                        <x-text-input id="role" class="block mt-1 w-full" type="text" name="role"
                            :value="old('role')" required autofocus autocomplete="role" />
                        <x-input-error :messages="$errors->get('role')" class="mt-2" />
                    </div>
                </fieldset>

                <fieldset class="border border-gray-300 p-4">
                    <legend class="text-base font-medium text-gray-700">Detalles de Registro</legend>
  
 
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

                </fieldset>
            </div>
            <div class="max-w-5xl mx-auto py-8">
                <div class="flex items-center mb-4">
                    <input type="checkbox" v-model="aceptar" class="mr-2">
                    <label for="terms" class="text-sm text-gray-700">
                        "he leído y acepto los"
                        <a class="text-blue-500 underline" @click="openPopUp">Cláusula Informativa Del
                            Tratamiento De Datos Personales</a>
                        "y la"

                        <a @click="openTerminos" class="text-blue-500 underline">términos y condiciones</a>
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
    </div>
</x-guest-layout>
<script>
    const {
        createApp
    } = Vue

    createApp({
        data() {
            return {
                pop_up: false,
                terminos: false,
                aceptar: '',
            }
        },
        methods: {
            openPopUp() {
                this.pop_up = true;
            },
            closePopUp() {
                this.pop_up = false;
            },
            openTerminos() {
                this.terminos = true;
            },
            closeTerminos() {
                this.terminos = false;
            },
            aceptarTerminosYCondiciones() {
                if (aceptar.checked){
                    this.terminos = true;
                };
            }
        }
    }).mount('#app-register')
</script>
