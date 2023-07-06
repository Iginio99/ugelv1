<div class="max-w-3xl mx-auto">
    <form method="POST" action="{{ url('find-acta') }}" enctype="multipart/form-data"
        class="grid grid-cols-2 gap-1 bg-white-50 shadow-md rounded-lg py-4">
        @csrf
        <div>
            <x-form-label for="dni" :value="__('Ingresar Datos:') " />
            <x-form-text id="dni" class="" type="text" name="dni" :value="old('dni')" autofocus />
            <x-input-error :messages="$errors->get('dni')"
                class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
        </div>
        <div class="flex justify-end items-center">
            <x-primary-button
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                {{ __('Buscar') }}
            </x-primary-button>
        </div>
    </form>
</div>
