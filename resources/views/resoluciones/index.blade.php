<x-app-layout>
    @include('resoluciones.create')
    <div class="flex justify-center">
        <div class="w-full lg:w-1/2 bg-white shadow-md rounded-lg overflow-hidden">
            <h1 class="px-6 py-4 font-bold">Tabla de Resoluciones</h1>
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                        <th scope="col" class="py-3 px-6">ID</th>
                        <th scope="col" class="py-3 px-6">Nombre</th>
                        <th scope="col" class="py-3 px-6">Apellido Paterno</th>
                        <th scope="col" class="py-3 px-6">Apellido Materno</th>
                        <th scope="col" class="py-3 px-6">DNI</th>
                        <th scope="col" class="py-3 px-6">Editar</th>
                        <th scope="col" class="py-3 px-6">Eliminar</th>
                    </tr>
                </thead>
                </tbody>
                @forelse ($resoluciones as $resolucion)
                    <tr class="bg-gray-100 border-b border-black">
                        <td class="py-4 px-6">{{ $resolucion->id }}</td>
                        <td class="py-4 px-6">{{ $resolucion->nombres }}</td>
                        <td class="py-4 px-6">{{ $resolucion->ap_paterno }}</td>
                        <td class="py-4 px-6">{{ $resolucion->ap_materno }}</td>
                        <td class="py-4 px-6">{{ $resolucion->dni }}</td>
                        <td class="py-4 px-8">
                            <a href="{{ url('/edit-resolucion/' . $resoluciones->id) }}" name="create-outline"
                                class="mx-8">
                                <ion-icon name="create-outline"></ion-icon>
                            </a>
                        </td>
                        <td class="py-4 px-8">
                            <form action="{{ url('delete-resolucion/' . $resoluciones->id) }}" method="POST">

                                @csrf
                                @method('DELETE')
                                <x-primary-button class="ml-2">Eliminar</x-primary-button>
                            </form>
                        </td>
                    </tr>
                @empty
                @endforelse
                </tbody>
            </table>

        </div>
    </div>
</x-app-layout>