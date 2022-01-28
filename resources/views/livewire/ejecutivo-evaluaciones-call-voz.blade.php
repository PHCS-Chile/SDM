{{--
Plantilla: Ejecutivo-Evaluaciones Call Voz
Versión 4
--}}
<div>

    <script src="{{ asset('js/clipboard.js') }}" type="text/javascript"></script>
    @if($asignacionfinal->estudio_id == 5)
        <link rel="stylesheet" href="https://unpkg.com/js-datepicker/dist/datepicker.min.css">
        <script src="https://unpkg.com/js-datepicker"></script>
    @endif
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">


        <p class="font-bold p-4 bg-gray-200 text-gray-700">{{$asignacionfinal->agente->name}}</p>



        <tr>
            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                &nbsp;<br>ID
            </th>
            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <p>Estado</p>
                <div class="col-span-6 sm:col-span-3">

                    <select id="filtroEstado" name="filtroEstado" autocomplete="" wire:model="filtroEstado" class="pr-6 mt-1 block py-1 pl-1 border border-gray-300 text-xs bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                        <option value="0" class="">Todos</option>
                        @foreach($estados as $estado)
                            <option value="{{$estado->id}}">{{$estado->name}}</option>
                        @endforeach
                    </select>
                </div>
            </th>
            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                &nbsp;<br>Evaluador
            </th>
            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <label for="filtroEstadoGrabacion">Grabación</label>
                <select id="filtroEstadoGrabacion" name="filtroEstadoGrabacion" autocomplete="" wire:model="filtroEstadoGrabacion" class="mt-1 block w-full py-1 pl-1 pr-6 text-xs border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="0">Todos</option>
                    @foreach($grabacionestados as $estado)
                        <option value="{{$estado->id}}">{{$estado->name}}</option>
                    @endforeach
                </select>
            </th>
            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-tighter">
                <label for="filtroFecha" class="block text-transparent select-none">Fecha Grabación</label>
                <input id="filtroFecha" class="border border-gray-300 bg-white py-1 px-1 mt-1 rounded-lg text-xs focus:outline-none" placeholder="Fecha Grabación" wire:model="filtroFecha">
            </th>
            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-tighter">
                <label for="searchMovil" class="block text-transparent select-none">Móvil</label>
                <input id="searchMovil" class="w-28 border border-gray-300 bg-white py-1 px-1 mt-1 rounded-lg focus:outline-none" placeholder="Móvil" wire:model="searchMovil">
            </th>
            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-tighter">
                <label for="filtroConnid" class="block text-transparent select-none">ConnID</label>
                <input id="filtroConnid" class="block border border-gray-300 bg-white py-1 px-1 mt-1 rounded-lg text-xs focus:outline-none" placeholder="ConnID" wire:model="filtroConnid">
            </th>
            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                &nbsp;<br>Ejecutivo
            </th>
            <th scope="col" class="text-center px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                &nbsp;<br>VER
            </th>
            <th scope="col" class="text-center px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider text-center">
                &nbsp;<br>GRABACIÓN
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">

        @foreach($evaluaciones as $evaluacion)

            <tr class="hover:bg-gray-50">
                <td class="px-3 py-1 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                      {{$evaluacion->id}}
                    </span>
                </td>
                <td class="px-3 py-1 whitespace-nowrap">
                    @if($evaluacion->fecha_grabacion == NULL || $evaluacion->connid == NULL || $evaluacion->movil == NULL)
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                          Faltan datos
                        </span>
                    @else
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ ( $evaluacion->estado->id == 2) ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                      {{$evaluacion->estado->name}}
                    </span>
                    @endif
                </td>
                <td class="px-3 py-1 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                      {{$evaluacion->user_completa}}
                    </span>
                </td>
                <td class="px-3 py-1 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full @if($evaluacion->estado_conversacion == 8) bg-green-100 text-green-800 @elseif(in_array($evaluacion->estado_conversacion, [9, 14, 15, 16])) bg-yellow-100 text-yellow-800 @else bg-gray-100 text-gray-800 @endif">
                      {{$grabacionestados->firstWhere('id', $evaluacion->estado_conversacion)->name}}
                    </span>

                </td>
                <td class="px-3 py-1 whitespace-nowrap">
                    @if($evaluacion->fecha_grabacion == NULL)
                        <button class="flex items-center text-sm text-yellow-500 bg-yellow-100 hover:bg-yellow-200 rounded-xl p-1 pr-2 shadow-md transition-all focus: border-transparent">
                            <!-- Heroicon name: currency-dollar -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                             <span class="text-gray-500">Por completar</span>
                        </button>
                    @else
                        <button class="ctc flex items-center text-sm text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" data-clipboard-target="#ctc_fecha_{{ $evaluacion->id }}" onclick="CopyToClipboard('ctc_fecha_{{ $evaluacion->id }}')">
                            <!-- Heroicon name: currency-dollar -->
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentC   olor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                            </svg>
                            <span id="ctc_fecha_{{ $evaluacion->id }}" class="text-gray-500">{{date('d-m-Y H:i', strtotime($evaluacion->fecha_grabacion))}}</span>
                        </button>
                        <div id="ctc_fecha_{{ $evaluacion->id }}_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-sm px-3 py-3" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                            <p>Fecha copiada al portapapeles.</p>
                        </div>
                    @endif

                </td>
                <td class="px-3 py-1 whitespace-nowrap">
                    @if($evaluacion->movil == NULL)
                        <button class="flex items-center text-sm text-yellow-500 bg-yellow-100 hover:bg-yellow-200 rounded-xl p-1 pr-2 shadow-md transition-all focus: border-transparent">
                            <!-- Heroicon name: currency-dollar -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-500">Por completar</span>
                        </button>
                    @else
                        <input id="ctc_movil_{{ $evaluacion->id }}" value="{{$evaluacion->movil}}" class="sr-only">
                        <button class="ctc flex items-center text-sm text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" data-clipboard-target="#ctc_movil_{{ $evaluacion->id }}" onclick="CopyToClipboard('ctc_movil_{{ $evaluacion->id }}')">
                            <!-- Heroicon name: currency-dollar -->
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span id="ctc_movil_{{ $evaluacion->id }}" class="text-gray-500">{{$evaluacion->movil}}</span>
                        </button>
                        <div id="ctc_movil_{{ $evaluacion->id }}_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-sm px-3 py-3" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                            <p>Móvil copiado al portapapeles.</p>
                        </div>
                    @endif
                </td>

                <td class="px-3 py-1 whitespace-nowrap text-center">
                    @if($evaluacion->connid == NULL)
                        <button class="text-center flex items-center text-sm text-yellow-500 bg-yellow-100 hover:bg-yellow-200 rounded-xl p-1 pr-2 shadow-md transition-all focus: border-transparent">
                            <!-- Heroicon name: currency-dollar -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-shrink-0 mr-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span class="text-gray-500">Por completar</span>
                        </button>
                    @else
                        <input id="ctc_connid_{{ $evaluacion->id }}" value="{{$evaluacion->connid}}" class="sr-only">
                        <button class="ctc flex items-center text-sm text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" data-clipboard-target="#ctc_connid_{{ $evaluacion->id }}" onclick="CopyToClipboard('ctc_connid_{{ $evaluacion->id }}')">
                            <!-- Heroicon name: currency-dollar -->
                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clip-rule="evenodd" />
                                <path d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zM10 7a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zM16 9a1 1 0 100 2 1 1 0 000-2zM9 13a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zM7 11a1 1 0 100-2H4a1 1 0 100 2h3zM17 13a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zM16 17a1 1 0 100-2h-3a1 1 0 100 2h3z" />
                            </svg>
                            <span id="ctc_connid_{{ $evaluacion->id }}" class="text-gray-500">{{Str::limit($evaluacion->connid,15)}}</span>
                        </button>

                        <div id="ctc_connid_{{ $evaluacion->id }}_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-sm px-3 py-3" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                            </svg>
                            <p>ConnID copiado al portapapeles.</p>
                        </div>
                    @endif
                </td>
                <td class="px-3 py-1 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                      {{$evaluacion->nombre_ejecutivo}}
                    </span>
                </td>
                <td class="px-3 py-1 whitespace-nowrap text-right text-sm font-medium">
                    @if($evaluacion->fecha_grabacion == NULL || $evaluacion->connid == NULL || $evaluacion->movil == NULL)
                        <button modal-target="completar-evaluacion-{{ $evaluacion->id }}" class="modal-open text-xs inline-flex items-center py-1.5 px-2 mx-2 my-0.5 transition-colors duration-150 text-blue-700 bg-gray-50 border border-blue-700 hover:bg-blue-700 hover:text-white rounded focus:shadow-outline">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                            </svg>
                            Completar
                        </button>
                    @else
                        <a class="text-xs inline-flex items-center py-1.5 px-2 mx-2 my-0.5 transition-colors duration-150 text-white bg-green-600 border border-green-700 hover:bg-green-700 hover:text-white rounded focus:shadow-outline " href="{{route('evaluacions.index', ['evaluacionid'=>$evaluacion->id])}}" disabled>
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            Ver
                        </a>
                    @endif
                </td>
                <td class="px-3 py-1 whitespace-nowrap text-right text-sm font-medium inline-flex">

                    @if($evaluacion->fecha_grabacion != NULL && $evaluacion->connid != NULL && $evaluacion->movil != NULL)
                    <button modal-target="problemas-grabacion-{{ $evaluacion->id }}" class="font-bold modal-open text-xs inline-flex items-center py-1.5 px-2 mx-2 my-0.5 transition-colors duration-150 text-red-700 bg-gray-50 border border-red-700 hover:bg-red-700 hover:text-white rounded focus:shadow-outline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                        </svg>
                    </button>
                    @endif

{{--                    @if($evaluacion->fecha_grabacion != NULL && $evaluacion->connid != NULL && $evaluacion->movil != NULL)--}}
{{--                        <form method="post" action="{{ route('evaluacions.grabacion_no_evaluable', [$evaluacion->id]) }}" onsubmit="return confirm('Está a punto de marcar la grabación como NO EVALUABLE. Está de acuerdo?')">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}
{{--                            <button type="submit" class="hover:opacity-100 opacity-70 inline-flex items-center px-2 py-1.5 my-0.5 mx-0.5 text-sm text-indigo-100 transition-colors duration-150 bg-red-800 rounded-md focus:shadow-outline disabled:opacity-20" {{ $evaluacion->estado_conversacion == 10 ? 'disabled' : '' }}>--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                        </form>--}}
{{--                        @if($evaluacion->estado_conversacion == 7 || $evaluacion->estado_conversacion == 9 || $evaluacion->estado_conversacion == 10)--}}
{{--                            <form method="post" action="{{ route('evaluacions.sin_grabacion', [$evaluacion->id]) }}" onsubmit="return confirm('Está a punto de marcar la evaluación como SIN GRABACIÓN. Está de acuerdo?')">--}}
{{--                                @csrf--}}
{{--                                @method('DELETE')--}}
{{--                                <button type="submit" class="hover:opacity-100 opacity-70 inline-flex items-center py-1.5 px-2 my-0.5 mx-0.5 text-sm text-indigo-100 transition-colors duration-150 bg-red-800 rounded-md focus:shadow-outline disabled:opacity-20" {{ $evaluacion->estado_conversacion == 9 ? 'disabled' : '' }}>--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                                    </svg>--}}
{{--                                </button>--}}
{{--                            </form>--}}
{{--                        @endif--}}
{{--                    @endif--}}
                </td>

            </tr>
            @if($evaluacion->fecha_grabacion == NULL || $evaluacion->connid == NULL || $evaluacion->movil == NULL)
                @include('evaluacions.voz.modal_completar_evaluacion', ['modal' => ['id' => 'completar-evaluacion-' . $evaluacion->id, 'template' => 'evaluacions.voz.modal_completar_evaluacion', 'titulo' => 'Completar datos de la evaluación', 'fecha_grabacion' => $evaluacion->fecha_grabacion, 'movil' => $evaluacion->movil, 'connid' => $evaluacion->connid, 'evaluacion_id' => $evaluacion->id]])
            @else
                @include('evaluacions.voz.modal_problemas_grabacion', ['modal' => ['id' => 'problemas-grabacion-' . $evaluacion->id, 'template' => 'evaluacions.voz.modal_problemas_grabacion', 'titulo' => 'Reportar problemas con la grabación', 'evaluacion_id' => $evaluacion->id, 'estado_conversacion' => $evaluacion->estado_conversacion]])
            @endif

        @endforeach

        <!-- More items... -->
        </tbody>
    </table>
    <script>
        function esconderAlerta(containerid) {
            document.getElementById(containerid + "_alert").style.display = "none";
        }

        function CopyToClipboard(containerid) {
            document.getElementById(containerid + "_alert").style.display = "flex";
            setTimeout(function() {
                esconderAlerta(containerid);
            }, 1000);
        }
        new ClipboardJS('.ctc');
    </script>

    <!-- Modal -->

</div>


