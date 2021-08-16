{{--
Plantilla: livewire/reportes
Versión 1
--}}

<div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 pt-10">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">



            <div class="mb-4">
                <label for="filtroEstudio">Estudio</label>
                <select id="filtroEstudio" name="filtroEstudio" autocomplete="" wire:model="filtroEstudio" class="mt-1 block w-auto py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="0">Todos</option>
                    @foreach($estudios as $estudio)
                        <option value="{{$estudio->id}}">{{$estudio->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-1 py-1">
                            <label for="todo" class="sr-only">Marcar todo</label>
                            <input id="todo" type="checkbox" wire:model="marcarTodo" wire:click="marcarTodo">
                        </th>
                        <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Estudio
                        </th>
                        <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Centro
                        </th>
                        <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Habilidad
                        </th>
                        <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Reporte
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($evaluaciones as $index => $evaluacion)
                        <tr>
                            <td class="px-1 py-1 whitespace-nowrap text-right">
                                <label for="evaluacion_{{ $evaluacion->id }}" class="sr-only">Marcar todo</label>
                                <input id="evaluacion_{{ $evaluacion->id }}" type="checkbox" wire:model="evaluacionesSeleccionadas.{{ $index }}" value="{{ $evaluacion->id }}">
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $evaluacion->asignacion->estudio->name }}
                                </div>
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $evaluacion->asignacion->agente->servicio->name }}
                                </div>
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $evaluacion->asignacion->agente->habilidad }}
                                </div>
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $evaluacion->estado->name }}
                                </div>
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">

                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <!-- More items... -->
                    </tbody>
                </table>
                {{ $evaluaciones->links() }}
            </div>
        </div>
    </div>
</div>

