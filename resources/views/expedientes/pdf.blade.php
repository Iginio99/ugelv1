<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
</head>
<body>
    <div class="max-w-3xl mx-auto">
        <h3 class="px-6 py-4 font-bold">Registro de expedientes</h3>
        
        <form method="POST" action="{{ url('update-expediente/.').$expediente->id }}" enctype="multipart/form-data" class="grid grid-cols-3 gap-6 bg-white shadow-md rounded-lg py-8">
                @csrf
                @method('PUT')
            <fieldset class="border border-gray-300 p-4">
                <legend class="text-base font-medium text-gray-700">Información Personal</legend>
            <div>
                <x-form-label for="dni" :value="__('DNI')" />
                <x-form-text id="dni" class="" type="text" name="dni" :value="$expediente->dni" autofocus />
                <x-input-error :messages="$errors->get('dni')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <x-form-label for="ap_paterno" :value="__('Apellido Paterno')" />
                <x-form-text id="ap_paterno" class="" type="text" name="ap_paterno" :value="$expediente->ap_paterno" autofocus />
                <x-input-error :messages="$errors->get('ap_paterno')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <x-form-label for="ap_materno" :value="__('Apellido Materno')" />
                <x-form-text id="ap_materno" class="" type="text" name="ap_materno" :value="$expediente->ap_materno"
                    autofocus />
                <x-input-error :messages="$errors->get('ap_materno')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
    
            <div>
                <x-form-label for="nombres" :value="__('Nombres')" />
                <x-form-text id="nombres" class="" type="text" name="nombres" :value="$expediente->nombres" autofocus />
                <x-input-error :messages="$errors->get('nombres')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <x-form-label for="tipo_doc" :value="__('Tipo de Documento')" />
                <x-form-text id="tipo_doc" class="" type="text" name="tipo_doc" :value="$expediente->tipo_doc"
                    autofocus />
                <x-input-error :messages="$errors->get('tipo_doc')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <x-form-label for="numero" :value="__('Número de Documento')" />
                <x-form-text id="numero" class="" type="text" name="numero" :value="$expediente->numero" autofocus />
                <x-input-error :messages="$errors->get('numero')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
        </fieldset>
    
        <fieldset class="border border-gray-300 p-4">
            <legend class="text-base font-medium text-gray-700">Datos de Expedientes </legend>
            <div>
                <x-form-label for="periodo1" :value="__('Periodo')" />
                <x-form-text id="periodo1" class="" type="text" name="periodo1" :value="$expediente->periodo1"
                    autofocus />
                <x-input-error :messages="$errors->get('periodo1')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <x-form-label for="fecha_de_exp_a_devolver" :value="__('Fecha de expediente a devolver')" />
                <x-form-text id="fecha_de_exp_a_devolver" class="" type="date" name="fecha_de_exp_a_devolver"
                    :value="$expediente->fecha_de_exp_a_devolver" autofocus />
                <x-input-error :messages="$errors->get('fecha_de_exp_a_devolver')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <x-form-label for="proveido" :value="__('Proveido')" />
                <x-form-text id="proveido" class="" type="text" name="proveido" :value="$expediente->proveido"
                    autofocus />
                <x-input-error :messages="$errors->get('proveido')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <x-form-label for="fecha_proveido" :value="__('Fecha proveido')" />
                <x-form-text id="fecha_proveido" class="" type="date" name="fecha_proveido" :value="$expediente->fecha_proveido"
                    autofocus />
                <x-input-error :messages="$errors->get('fecha_proveido')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <x-form-label for="num_exp_solicitud_devolucion" :value="__('N° exp solicitud de devolución')" />
                <x-form-text id="num_exp_solicitud_devolucion" class="" type="text"
                    name="num_exp_solicitud_devolucion" :value="$expediente->num_exp_solicitud_devolucion" autofocus />
                <x-input-error :messages="$errors->get('num_exp_solicitud_devolucion')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <x-form-label for="periodo2" :value="__('Periodo')" />
                <x-form-text id="periodo2" class="" type="text" name="periodo2" :value="$expediente->periodo2"
                    autofocus />
                <x-input-error :messages="$errors->get('periodo2')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <x-form-label for="fecha_devolucion" :value="__('Fecha devolución')" />
                <x-form-text id="fecha_devolucion" class="" type="date" name="fecha_devolucion"
                    :value="$expediente->fecha_devolucion" autofocus />
                <x-input-error :messages="$errors->get('fecha_devolucion')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
                <x-form-label for="fecha_registro" :value="__('Fecha Registro')" />
                <x-form-text id="fecha_registro" class="" type="date" name="fecha_registro" :value="$expediente->fecha_registro"
                    autofocus />
                <x-input-error :messages="$errors->get('fecha_registro')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
            </div>
        </fieldset>
        <fieldset class="border border-gray-300 p-4">
            <legend class="text-base font-medium text-gray-700">Observación</legend>
            <div>
                <x-form-label for="observacion" :value="__('Observacion')" />
                <x-form-text id="observacion" class="" type="text" name="observacion" :value="$expediente->observacion"
                    autofocus />
                <x-input-error :messages="$errors->get('observacion')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
        </fieldset>
        
            <div>
                <x-form-label for="firma" :value="__('Firma')" />
                <x-form-text id="firma" class="" type="file" name="firma" :value="$expediente->firma" autofocus />
                <x-input-error :messages="$errors->get('firma')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
            <div>
            </div>
            <div>
                <x-form-label for="foto" :value="__('Foto')" />
                <x-form-text id="foto" class="" type="file" name="foto" :value="$expediente->foto" autofocus />
                <x-input-error :messages="$errors->get('foto')" class="border border-gray-300 rounded-md py-2 px-4 w-full focus:outline-none focus:ring-blue-500 focus:border-blue-500" />
            </div>
        </form>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Documento</title>
    <!-- Agrega el enlace al archivo CSS de Tailwind CSS aquí -->
    <!-- Por ejemplo, si estás usando la versión CDN de Tailwind CSS: -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
</head>
<body class="bg-gray-100">
    <div class="max-w-3xl mx-auto px-4 py-8">
        <h3 class="text-2xl font-bold mb-4">Registro de expedientes</h3>
        
        <form method="POST" action="{{ url('update-expediente/.').$expediente->id }}" enctype="multipart/form-data" class="grid grid-cols-1 md:grid-cols-3 gap-6 bg-white shadow-md rounded-lg py-8">
            @csrf
            @method('PUT')
            <fieldset class="border border-gray-300 p-4 col-span-1 md:col-span-3">
                <legend class="text-base font-medium text-gray-700">Información Personal</legend>
                <!-- Agrega tus campos y estilos de Tailwind CSS aquí -->
                <!-- Ejemplo de campo: -->
                <div class="mt-4">
                    <x-form-label for="dni" :value="__('DNI')" />
                    <x-form-text id="dni" class="block mt-1 w-full rounded-md border-gray-300" type="text" name="dni" :value="$expediente->dni" autofocus />
                    <x-input-error :messages="$errors->get('dni')" class="mt-2 text-red-500" />
                </div>
                <!-- Repite el mismo patrón para otros campos de Información Personal -->
            </fieldset>
    
            <!-- Agrega el resto de los fieldsets y campos aquí, aplicando las clases de Tailwind CSS según sea necesario -->
    
            <div class="col-span-1 md:col-span-3 mt-4">
                <x-form-label for="firma" :value="__('Firma')" />
                <x-form-text id="firma" class="block mt-1 w-full rounded-md border-gray-300" type="file" name="firma" :value="$expediente->firma" autofocus />
                <x-input-error :messages="$errors->get('firma')" class="mt-2 text-red-500" />
            </div>
    
            <div class="col-span-1 md:col-span-3 mt-4">
                <x-form-label for="foto" :value="__('Foto')" />
                <x-form-text id="foto" class="block mt-1 w-full rounded-md border-gray-300" type="file" name="foto" :value="$expediente->foto" autofocus />
                <x-input-error :messages="$errors->get('foto')" class="mt-2 text-red-500" />
            </div>
    
            <div class="col-span-1 md:col-span-3 mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Guardar
                </button>
            </div>
        </form>
    </div>
</body>
</html>