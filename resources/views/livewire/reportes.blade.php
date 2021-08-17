{{--
Plantilla: livewire/reportes
Versión 1
--}}

<div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 pt-10">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="px-8">
            <div class="mb-4 inline-block float-right">
                <label for="pagination">Mostrar</label>
                <select id="pagination" name="pagination" autocomplete="" wire:model="pagination" class="mt-1 block w-auto py-2 pl-2 pr-7 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="25">25 Resultados</option>
                    <option value="50">50 Resultados</option>
                    <option value="100">100 Resultados</option>
                </select>
            </div>

            <div class="mb-4 inline-block">
                <label for="filtroPeriodo">Periodo</label>
                <select id="filtroPeriodo" name="filtroPeriodo" autocomplete="" wire:model="filtroPeriodo" class="mt-1 block w-auto py-2 pl-2 pr-7 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="0">Todos</option>
                    @foreach($periodos as $periodo)
                        <option value="{{$periodo->id}}">{{$periodo->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4 inline-block">
                <label for="filtroMercado">Mercado</label>
                <select id="filtroMercado" name="filtroMercado" autocomplete="" wire:model="filtroMercado" class="mt-1 block w-auto py-2 pl-2 pr-7 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="0">Todos</option>
                    <option value="Hogar">Hogar</option>
                    <option value="Movil">Movil</option>
                    <option value="Temp">Temp</option>
                </select>
            </div>

            <div class="mb-4 inline-block">
                <label for="filtroEstudio">Estudio</label>
                <select id="filtroEstudio" name="filtroEstudio" autocomplete="" wire:model="filtroEstudio" class="mt-1 block w-auto py-2 pl-2 pr-7 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="0">Todos</option>
                    @foreach($estudios as $estudio)
                        <option value="{{$estudio->id}}">{{$estudio->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4 inline-block">
                <label for="filtroServicio">Servicio</label>
                <select id="filtroServicio" name="filtroServicio" autocomplete="" wire:model="filtroServicio" class="mt-1 block w-auto py-2 pl-2 pr-7 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option value="0">Todos</option>
                    @foreach($servicios as $servicio)
                        <option value="{{$servicio->id}}">{{$servicio->name}}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">


            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-1 py-1">
                            <label for="todo" class="sr-only">Marcar todo</label>
                            <input id="todo" type="checkbox" wire:model="marcarTodo" wire:click="marcarTodo">
                        </th>
                        <th scope="col" class="px-2 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Agente
                        </th>
                        <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Reporte
                        </th>
                        <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fecha conversación
                        </th>
                        <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Móvil
                        </th>
                        <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Fecha evaluación
                        </th>

                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($evaluaciones as $evaluacion)
                        <tr>
                            <td class="px-1 py-1 whitespace-nowrap text-right">
                                <label for="evaluacion_{{ $evaluacion->id }}" class="sr-only">Marcar</label>
                                <input id="evaluacion_{{ $evaluacion->id }}" type="checkbox" wire:model="evaluacionesSeleccionadas.{{ $evaluacion->id }}" value="{{ $evaluacion->id }}">
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $evaluacion->id }}
                                </div>
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $evaluacion->asignacion->agente->name }}
                                </div>
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $evaluacion->estado->name }}
                                </div>
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    @if ($estado = $estados->firstWhere('id', $evaluacion->estado_reporte))
                                    {{ $estado }}
                                    @else
                                    -
                                    @endif
                                </div>
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $evaluacion->fecha_grabacion }}
                                </div>
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $evaluacion->movil }}
                                </div>
                            </td>
                            <td class="px-6 py-1 whitespace-nowrap">
                                <div class="text-sm text-gray-900">
                                    {{ $evaluacion->fecha_completa }}
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

