<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Liga') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="max-w-lg mx-auto mt-10">
                        <form action="{{ route('ligas.store') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                            @csrf
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="nombre">
                                    Nombre de la Liga
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="nombre" name="nombre" type="text" required>
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="es_liguilla">
                                    ¿Se decide por liguilla?
                                </label>
                                <select class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="es_liguilla" name="es_liguilla" required onchange="toggleLiguillaOptions()">
                                    <option value="0">No</option>
                                    <option value="1">Sí</option>
                                </select>
                            </div>

                            <div id="liguilla_options" class="hidden">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="num_equipos_califican">
                                        Número de equipos que califican
                                    </label>
                                    <select class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="num_equipos_califican" name="num_equipos_califican">
                                        <option value="2">2</option>
                                        <option value="4">4</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="liguilla_a_dos_partidos">
                                        ¿Liguilla a dos partidos?
                                    </label>
                                    <select class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="liguilla_a_dos_partidos" name="liguilla_a_dos_partidos">
                                        <option value="0">No</option>
                                        <option value="1">Sí</option>
                                    </select>
                                </div>

                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="criterio_desempate">
                                        Criterio de desempate
                                    </label>
                                    <select class="shadow border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="criterio_desempate" name="criterio_desempate">
                                        <option value="goles_visitante">Goles de visitante</option>
                                        <option value="posicion_tabla">Posición en tabla general</option>
                                        <option value="gana_partido">Un solo partido</option>
                                    </select>
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                    Crear Liga
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function toggleLiguillaOptions() {
            var liguilla = document.getElementById('es_liguilla').value;
            var liguillaOptions = document.getElementById('liguilla_options');
            if (liguilla === '1') {
                liguillaOptions.classList.remove('hidden');
            } else {
                liguillaOptions.classList.add('hidden');
            }
        }
    </script>
</x-app-layout>
