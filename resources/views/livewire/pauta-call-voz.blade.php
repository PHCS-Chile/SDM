{{--
Plantilla: Pauta Call Voz
Versión en esteroides
--}}
<div>
    @if(Auth::user()->perfil == 1 || Auth::user()->perfil == 2)
        <script src="{{ asset('js/clipboard.js') }}" type="text/javascript"></script>
        <div class="p-6">
            <div class=" p-5 bg-white  shadow-xl sm:rounded-lg ">
                <div class="md:grid md:grid-cols-1 md:gap-6">

                    <!-- This example requires Tailwind CSS v2.0+ -->
                    <div class="lg:flex lg:items-center lg:justify-between">
                        <div class="flex-1 min-w-0">
                            <div class="flex">
                                <div class="w-1/4">
                                    <div class="flex flex-col">

                                        <div class="flex-1 w-4/4 bg-red sm:rounded-lg">
                                            <h2 class="text-xl font-bold leading-7 text-gray-900 sm:text-xl sm:truncate">
                                                {{ \App\Models\Evaluacion::servicioHabilidad($evaluacion_id, " ", "Monitoreo") }}
                                            </h2>
                                        </div>
                                        <div class="mt-1 flex items-center text-xs text-gray-500">
                                            <!-- Heroicon name: briefcase -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
                                            </svg>
                                            ID Evaluación: {{ $evaluacion['id'] }}
                                        </div>
                                        <div class="hidden mt-1 flex items-center text-xs text-gray-500">
                                            <!-- Heroicon name: briefcase -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd" />
                                            </svg>
                                            Centro/Habilidad: {{ \App\Models\Evaluacion::servicioHabilidad($evaluacion_id, " - ") }}
                                        </div>
                                        <div class="block">
                                            <input id="ctc_movil" value="{{ $evaluacion['movil'] }}" class="sr-only">
                                            <button class="ctc mt-1 flex items-center text-xs text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" data-clipboard-target="#ctc_movil" onclick="CopyToClipboard('ctc_movil')">
                                                <!-- Heroicon name: location-marker -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                                </svg>
                                                Movil:&nbsp; <span id="ctc_movil" class="text-gray-500">{{ $evaluacion['movil'] }}</span>
                                            </button>
                                            <div id="ctc_movil_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-xs px-3 py-3" role="alert">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                                </svg>
                                                <p>Teléfono copiado al portapapeles.</p>
                                            </div>
                                        </div>
                                        <div class="block">
                                            <input id="ctc_connid" value="{{ $evaluacion['connid'] }}" class="sr-only">
                                            <button class="ctc mt-1 flex items-center text-xs text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" data-clipboard-target="#ctc_connid" onclick="CopyToClipboard('ctc_connid')">
                                                <!-- Heroicon name: currency-dollar -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clip-rule="evenodd" />
                                                    <path d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zM10 7a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zM16 9a1 1 0 100 2 1 1 0 000-2zM9 13a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zM7 11a1 1 0 100-2H4a1 1 0 100 2h3zM17 13a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zM16 17a1 1 0 100-2h-3a1 1 0 100 2h3z" />
                                                </svg>
                                                ConnID:&nbsp; <span id="ctc_connid" class="text-gray-500">{{ Str::limit($evaluacion['connid'],30) }}</span>
                                            </button>
                                            <div id="ctc_connid_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-xs px-3 py-3" role="alert">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                                </svg>
                                                <p>CONNID copiado al portapapeles.</p>
                                            </div>
                                        </div>
                                        <div class="mt-1 flex items-center text-xs text-gray-500">
                                            <!-- Heroicon name: calendar -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                            </svg>
                                            Fecha Grabación: {{ $evaluacion['fecha_grabacion'] }}
                                        </div>
                                        @if(Auth::user()->perfil == 2)
                                            <div class="mt-1 flex items-center text-xs text-gray-500">
                                                <!-- Heroicon name: calendar -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                                <p class="text-gray-500 font-bold">Estado de Evaluación: </p>&nbsp <p> {{ $evaluacion['estado_id'] }}</p>&nbsp&nbsp
                                            </div>

                                        @endif
                                        @if(Auth::user()->perfil  == 1)
                                            <div class="flex items-center text-xs text-gray-500">
                                                <!-- Heroicon name: calendar -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                                <form action="{{route('evaluacions.guardaeval', $evaluacion['id'])}}" method="POST">
                                                    @csrf
                                                    <div class="flex flex-row inline-flex items-center border-1">
                                                        <h2 class="font-bold text-sm mt-2">Estado:</h2>
                                                        {{--                                                <div><p class="text-gray-600 font-bold">Cambia de estado: &nbsp&nbsp</p></div>--}}
                                                        <div class="text-xs text-gray-500">
                                                            <select id="cambioestado" wire:model="evaluacion.estado_id" name="cambioestado" class="mt-1 block w-full py-1 px-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-xs">
                                                                @foreach($estados_evaluacion as $estado)
                                                                    <option value="{{ $estado->id }}">{{ $estado->name }}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div class="w-1/2 px-5 py-1">
                                    <div class="p-3 border border-solid border-gray-200 rounded-md bg-gray-50 shadow-md">
                                        <div class="flex">
                                            <div class="w-2/4">
                                                <div class="flex flex-col">
                                                    <h2 class="font-bold text-base">Audio de la conversacion</h2>

                                                    @if(!isset($grabaciones) || count($grabaciones->where('url', NULL)) > 0)
                                                        <audio src="" controls id="reproductor">
                                                            {{--                                        <source src="{{ asset('storage/uploads/' . $grabacion_activa->nombre) }}" type="audio/mpeg">--}}
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    @else
                                                        <i class="text-gray-500">Sin grabación.</i>
                                                    @endif
                                                </div>
                                                <div class="flex flex-col mt-3">
                                                    <h3 class="font-bold text-sm">Link externo</h3>
                                                    @livewire('vinculos', ['evaluacionId' => $evaluacion['id']])
                                                </div>
                                            </div>

                                            <div class="w-2/4">
                                                <div class="flex flex-col">
                                                    @if(count($grabaciones->where('nombre', '<>', '')) > 0)
                                                        <h2 class="font-bold text-sm">Grabaciones:</h2>
                                                        <div class="">
                                                            <form class="flex space-x-2" action="{{ route('evaluacions.eliminar_grabacion', [$evaluacion['id']]) }}" method="POST" onsubmit="return confirm('¿Seguro que quieres eliminar la grabación? ESTA ACCIÓN ES IRREVERSIBLE!');">
                                                                @method("DELETE")
                                                                @csrf

                                                                <select name="grabacionActiva" id="grabacionActiva" class="text-sm py-0 w-2/4 border border-gray-300 rounded-md shadow-sm focus:outline-none">
                                                                    @foreach($grabaciones->all() as $posicion => $grabacion)
                                                                        <option class="grabacion" value="{{ $posicion . "_" . $grabacion->id }}">Grabación {{ $posicion + 1 }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <script src="{{ asset('js/scripts.js') }}"></script>
                                                                <script>
                                                                    grabaciones = [
                                                                            @foreach($grabaciones->all() as $grabacion)
                                                                        ["{{ asset('storage/uploads/' . $grabacion->nombre) }}"],
                                                                        @endforeach
                                                                    ];
                                                                    reproductor();
                                                                    function reproductor() {
                                                                        $('#reproductor')[0].src = grabaciones[0];
                                                                    }
                                                                    $('#grabacionActiva').change(function () {
                                                                        $('#reproductor')[0].src = grabaciones[$("#grabacionActiva").val().substring(0, $("#grabacionActiva").val().indexOf("_"))]
                                                                    });
                                                                </script>

                                                                <div class="w-2/4 text-right">

                                                                    <button class="items-center px-2 py-1.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-red-700 hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                                        </svg>
                                                                    </button>


                                                                </div>
                                                            </form>

                                                        </div>
                                                    @endif


                                                    <h2 class="font-bold text-sm mt-2">Agregar nueva:</h2>
                                                    <div class="flex flex-row content-evenly">
                                                        <form  class="flex" action="{{ route('evaluacions.grabacion', [$evaluacion['id']]) }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <input type="hidden" name="evaluacionid" value="{{ $evaluacion['id'] }}">
                                                            <input class="w-64 inline-flex text-sm py-1" type="file" name="grabacion" id="grabacion" accept=".mp3,.wav,.ogg,.m4a">
                                                            <button type="submit"  class="inline-flex items-center px-4 py-0 border border-transparent rounded-md shadow-sm text-xs text-white bg-green-700 hover:bg-green-500 focus:outline-none transition-colors duration-150 sm:text-xs font-medium">
                                                                Subir
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="w-1/4 text-right">

                                    <div class="flex flex-col">
                                        <div>
                                            @if(Auth::user()->perfil  == 1)
                                                <div class="inline-flex gap-1 items-center">
                                                    <div class="text-xs">Volver:</div>
                                                    <div class="w-px-150 pb-0.5">
                                                        <form action="{{ route('evaluacions.atras_desbloqueando', $evaluacion['id']) }}" method="GET">
                                                            <input type="hidden" name="url" value="{{ url()->previous() }}">
                                                            <input type="hidden" name="formulario" value="2">
                                                            <button type="submit" role="button" class="inline-flex items-center px-2 py-0.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                                Base Agente
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="w-px-150 pb-0.5">
                                                        <form action="{{ route('evaluacions.atras_desbloqueando', $evaluacion['id']) }}" method="GET">
                                                            <input type="hidden" name="url" value="{{ url()->previous() }}">
                                                            <input type="hidden" name="formulario" value="3">
                                                            <button type="submit" role="button" class="inline-flex items-center px-2 py-0.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                                Calidad
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="w-px-150 pb-0.5">
                                                        <form action="{{ route('evaluacions.atras_desbloqueando', $evaluacion['id']) }}" method="GET">
                                                            <input type="hidden" name="url" value="{{ url()->previous() }}">
                                                            <input type="hidden" name="formulario" value="4">
                                                            <button type="submit" role="button" class="inline-flex items-center px-2 py-0.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                                Reportes
                                                            </button>
                                                        </form>
                                                    </div>
                                                    <div class="w-px-150 pb-0.5">
                                                        <form action="{{ route('evaluacions.atras_desbloqueando', $evaluacion['id']) }}" method="GET">
                                                            <input type="hidden" name="url" value="{{ url()->previous() }}">
                                                            <input type="hidden" name="formulario" value="5">
                                                            <button type="submit" role="button" class="inline-flex items-center px-2 py-0.5 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                                Avances
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="w-px-150 p-0.5">
                                                    <form action="{{ route('evaluacions.atras_desbloqueando', $evaluacion['id']) }}" method="GET">
                                                        <input type="hidden" name="url" value="{{ url()->previous() }}">
                                                        <input type="hidden" name="formulario" value="2">
                                                        <button type="submit" role="button" class="inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                                                            </svg>
                                                            Volver a Base del Agente
                                                        </button>
                                                    </form>
                                                </div>
                                            @endif

                                            <div class="flex flex-row space-x-2 w-80 mt-4 items-center text-center">
                                                <span class="bg-gray-300 h-px flex-row t-2 top-2"></span>
                                            </div>

                                            <div class="w-px-150 pb-0.5">
                                                <button modal-target="historial" class="modal-open inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    Historial
                                                </button>
                                            </div>
                                            @if(Auth::user()->perfil  == 1)
                                                <div class="w-px-150 p-0.5">
                                                    <button modal-target="respuestas-centro" class="modal-open inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                        </svg>
                                                        Respuestas del centro
                                                    </button>
                                                </div>
                                            @endif
                                            <form action="{{route('evaluacions.guardaeval', $evaluacion['id'])}}" method="POST">
                                                @csrf
                                                @if(Auth::user()->perfil  == 1)
                                                    <div class="w-px-150 pb-0.5">
                                                        <button type="submit" name="descartarEval" class="inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                            <!-- Heroicon name: check -->

                                                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                            </svg>
                                                            Descartar Evaluación
                                                        </button>
                                                    </div>
                                                @endif
                                                @if(Auth::user()->perfil  == 2)
                                                    @if($evaluacion['estado_id'] > 1)
                                                        <div class="w-px-150 pb-0.5">
                                                            <button type="submit" name="enviarRevision" class="inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                                                <!-- Heroicon name: check -->
                                                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                                </svg>
                                                                Enviar a Revisión
                                                            </button>
                                                        </div>
                                                    @endif
                                                @endif
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($evaluacion['user_completa'])
                                <div class="align-baseline text-left w-full -mb-4 text-gray-800 text-xs">Evaluada por <strong>{{ $evaluacion['user_completa'] }}</strong> el <strong>{{ date('d-m-Y H:i', strtotime($evaluacion['fecha_completa'])) }}</strong></div>
                            @endif
                            <div class="align-baseline text-right w-full -mb-4 text-gray-800 text-xs">Bloqueada para <strong>{{ App\Models\User::find($bloqueo->user_id)->name }}</strong> hasta las <strong>{{ $bloqueo->created_at->add(new DateInterval('PT' . \App\Models\Bloqueo::DURACION . 'M'))->format('H:i') }}</strong></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Modal -->
{{--        @include('evaluacions.voz.modal_historial', ['modal' => $modales[0]])--}}
        {{--        @include('evaluacions.voz.modal_centro', ['modal' => $modales[1], 'respuestas_ph' => $evaluacionfinal->respuestas])--}}


    <!-- Inicializacion de campos 'copy to clipboard' -->
        <script>
            new ClipboardJS('.ctc');
        </script>

    @endif

    <div class="flex space-x-4 pt-6 px-6">
        <div class="flex-1 w-1/4 py-8 px-6 bg-white shadow-xl sm:rounded-lg overflow-y-scroll h-screen">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div class="@if(in_array(177, $requeridos) && !$respuestas[177]) border-l-4 border-red-600 px-2 bg-red-50 @endif">
                        <label for="comentario_interno" class="block text-sm font-medium text-gray-700">
                            Comentario Interno
                            <svg xmlns="http://www.w3.org/2000/svg" class="@if($respuestas[177]) opacity-100 @else opacity-0 @endif text-green-500 inline h-5 w-5 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </label>
                        <div class="mt-1">
                            <textarea id="comentario_interno" name="comentario_interno" wire:model.lazy="respuestas.177" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí el comentario interno"></textarea>
                        </div>
                    </div>
                    <div class="@if(in_array(199, $requeridos) && !$respuestas[199]) border-l-4 border-red-600 px-2 bg-red-50 @endif">
                        <label for="descripcion_caso" class="block text-sm font-medium text-gray-700">
                            Descripción del Caso
                            <svg xmlns="http://www.w3.org/2000/svg" class="@if($respuestas[199]) opacity-100 @else opacity-0 @endif text-green-500 inline h-5 w-5 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </label>
                        <div class="mt-1">
                            <textarea id="descripcion_caso" name="descripcion_caso" wire:model.lazy="respuestas.199" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la descripción del caso"></textarea>
                        </div>
                    </div>
                    <div class="@if(in_array(200, $requeridos) && !$respuestas[200]) border-l-4 border-red-600 px-2 bg-red-50 @endif">
                        <label for="respuesta_ejecutivo" class="block text-sm font-medium text-gray-700">
                            Respuesta del Ejecutivo
                            <svg xmlns="http://www.w3.org/2000/svg" class="@if($respuestas[200]) opacity-100 @else opacity-0 @endif text-green-500 inline h-5 w-5 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </label>
                        <div class="mt-1">
                            <textarea id="respuesta_ejecutivo" name="respuesta_ejecutivo" wire:model.lazy="respuestas.200" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la Respuesta del Ejecutivo"></textarea>
                        </div>
                    </div>
                    <small class="text-red-600 font-bold">{{ $errors->first('respuesta_ejecutivo') }}</small>
                    <div class="@if(in_array(176, $requeridos) && !$respuestas[176]) border-l-4 border-red-600 px-2 bg-red-50 @endif">
                        <label for="retroalimentacion" class="block text-sm font-medium text-gray-700">
                            Retroalimentación
                            <svg xmlns="http://www.w3.org/2000/svg" class="@if($respuestas[176]) opacity-100 @else opacity-0 @endif text-green-500 inline h-5 w-5 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </label>
                        <div class="mt-1">
                            <textarea id="retroalimentacion" name="retroalimentacion" wire:model.lazy="respuestas.176" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-48 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la retroalimentación"></textarea>
                        </div>
                    </div>
                    <small class="text-red-600 font-bold">{{ $errors->first('retroalimentacion') }}</small>
                    <div></div>
                    <div>
                        <label for="comentario_calidad" class="block text-sm font-medium text-gray-700">
                            Comentario Calidad
                            <svg xmlns="http://www.w3.org/2000/svg" class="@if($evaluacion['comentario_calidad']) opacity-100 @else opacity-0 @endif text-green-500 inline h-5 w-5 transition-all" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </label>
                        <div class="mt-1">
                            <textarea id="comentario_calidad" name="comentario_calidad" wire:model.lazy="evaluacion.comentario_calidad" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-48 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí el comentario de calidad"></textarea>
                        </div>
                    </div>
                    <small class="text-red-600 font-bold">{{ $errors->first('comentario_calidad') }}</small>
                    <div></div>

                    <button wire:click="save" type="button" class="opacity-100 disabled:opacity-40 @if(!$pauta_ok) cursor-not-allowed @endif inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none" @if(!$pauta_ok) disabled @endif>
                        <!-- Heroicon name: check -->
                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                        Guardar
                    </button>

                    @if(Auth::user()->perfil  == 1 && in_array($evaluacion['estado_id'], [2, 3]))
                        <button type="submit"  wire:click="ici" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <!-- Heroicon name: check -->
                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Discrepancia
                        </button>
                    @endif

                    <div wire:loading>
                        Guardando...
                    </div>
                </div>
            </div>


            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                Fecha Grabación Adjunta: <strong class="ml-3">{{ $grabaciones->first() ? $grabacion->created_at : '-'}}</strong>
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                Fecha Evaluación: <strong class="ml-3">{{ $evaluacion['created_at'] ?? ""}}</strong>
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                </svg>
                Fecha Modificación: <strong class="ml-3">{{ $evaluacion['updated_at'] ?? "" }}</strong>
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                PENC: <strong class="ml-3">{{ $evaluacion['penc'] ?? "No calculado" }}</strong>
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                PEC Usuario: <strong class="ml-3">{{ $evaluacion['pecu'] ?? "No calculado" }}</strong>
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                PEC Negocio: <strong class="ml-3">{{ $evaluacion['pecn'] ?? "No calculado" }}</strong>
            </div>
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                PEC Cumplimiento: <strong class="ml-3">{{ $evaluacion['pecc'] ?? "No calculado" }}</strong>
            </div>


            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                Puntaje ICI: <strong class="ml-3">{{ intval($evaluacion['ici'] ?? "No calculado") }}</strong>
            </div>
            {{--            <p class="text-gray-500 font-bold">% de Discrepancia: </p>&nbsp <p> {{$evaluacion->ici}}</p>--}}
        </div>

        <div class="w-3/4 p-6 bg-gray-50 overflow-hidden shadow-xl sm:rounded-lg overflow-y-scroll h-screen">
            <div class="mb-10">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="mt-5 md:mt-0 md:col-span-1 ">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-2 py-5 bg-white space-y-6 sm:p-3">
                                <p class="font-bold text-xl">Gestión 1</p>

                                @include('componentes.formularios.pauta_radio', [
                                    'titulo' => 'Motivo del Llamado',
                                    'atributo_id' => 179,
                                    'name' => 'motivo',
                                    'opciones' => $escalas['motivo']['escalas']
                                ])

                                @include('componentes.formularios.pauta_select', [
                                    'titulo' => 'Tipo de Gestión',
                                    'atributo_id' => 180,
                                    'name' => 'tipogestion1',
                                    'opciones' => $escalas['gestiones']['escalas']
                                ])

                                @include('componentes.formularios.pauta_radio', [
                                    'titulo' => 'Detección de necesidades/sondeo/analisis/revisión',
                                    'atributo_id' => 183,
                                    'name' => 'deteccion1',
                                    'opciones' => $escalas['booleana']['escalas']
                                ])

                                @include('componentes.formularios.pauta_radio', [
                                    'titulo' => 'Entrega de información correcta y completa',
                                    'atributo_id' => 187,
                                    'name' => 'infocorrecta1',
                                    'opciones' => $escalas['booleana']['escalas']
                                ])

                                @include('componentes.formularios.pauta_radio', [
                                    'titulo' => 'Gestiona según proced. en sistema',
                                    'atributo_id' => 191,
                                    'name' => 'gestiona1',
                                    'opciones' => $escalas['booleana']['escalas']
                                ])

                                @include('componentes.formularios.pauta_select', [
                                    'titulo' => 'Ejecutivo Resuelve el problema de origen en línea',
                                    'atributo_id' => 195,
                                    'name' => 'resolucion1',
                                    'opciones' => $escalas['resoluciones']['escalas']
                                ])

                            </div>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-1 ">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <p class="font-bold text-xl">Gestión 2</p>

                                @include('componentes.formularios.pauta_select', [
                                    'titulo' => 'Tipo de Gestión',
                                    'atributo_id' => 181,
                                    'name' => 'tipogestion2',
                                    'opciones' => $escalas['gestiones']['escalas']
                                ])

                                @include('componentes.formularios.pauta_radio', [
                                    'titulo' => 'Detección de necesidades/sondeo/analisis/revisión',
                                    'atributo_id' => 184,
                                    'name' => 'deteccion2',
                                    'opciones' => $escalas['booleana']['escalas']
                                ])

                                @include('componentes.formularios.pauta_radio', [
                                    'titulo' => 'Entrega de información correcta y completa',
                                    'atributo_id' => 188,
                                    'name' => 'infocorrecta2',
                                    'opciones' => $escalas['booleana']['escalas']
                                ])

                                @include('componentes.formularios.pauta_radio', [
                                    'titulo' => 'Gestiona según proced. en sistema',
                                    'atributo_id' => 192,
                                    'name' => 'gestiona2',
                                    'opciones' => $escalas['booleana']['escalas']
                                ])

                                @include('componentes.formularios.pauta_select', [
                                    'titulo' => 'Ejecutivo Resuelve el problema de origen en línea',
                                    'atributo_id' => 196,
                                    'name' => 'resolucion2',
                                    'opciones' => $escalas['resoluciones']['escalas']
                                ])

                            </div>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-1 ">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <p class="font-bold text-xl">Gestión 3</p>

                                @include('componentes.formularios.pauta_select', [
                                    'titulo' => 'Tipo de Gestión',
                                    'atributo_id' => 182,
                                    'name' => 'tipogestion3',
                                    'opciones' => $escalas['gestiones']['escalas']
                                ])

                                @include('componentes.formularios.pauta_radio', [
                                    'titulo' => 'Detección de necesidades/sondeo/analisis/revisión',
                                    'atributo_id' => 185,
                                    'name' => 'deteccion3',
                                    'opciones' => $escalas['booleana']['escalas']
                                ])

                                @include('componentes.formularios.pauta_radio', [
                                    'titulo' => 'Entrega de información correcta y completa',
                                    'atributo_id' => 189,
                                    'name' => 'infocorrecta3',
                                    'opciones' => $escalas['booleana']['escalas']
                                ])

                                @include('componentes.formularios.pauta_radio', [
                                    'titulo' => 'Gestiona según proced. en sistema',
                                    'atributo_id' => 193,
                                    'name' => 'gestiona3',
                                    'opciones' => $escalas['booleana']['escalas']
                                ])

                                @include('componentes.formularios.pauta_select', [
                                    'titulo' => 'Ejecutivo Resuelve el problema de origen en línea',
                                    'atributo_id' => 197,
                                    'name' => 'resolucion3',
                                    'opciones' => $escalas['resoluciones']['escalas']
                                ])

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <form wire:submit.prevent="save">

                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-2 md:gap-6">
                            <div class="mt-5 md:mt-0 md:col-span-1 ">
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-green-50 space-y-6 sm:p-6">
                                        <p class="font-bold text-xl">Atributos PENC</p>

                                        @include('componentes.formularios.pauta_grupo_padre', [
                                            'titulo' => '1 - Protocolo de Saludo y Despedida',
                                            'padre' => 97,
                                        ])

                                        @include('componentes.formularios.pauta_grupo_padre', [
                                            'titulo' => '2 - Disposición para la atención',
                                            'padre' => 101,
                                        ])

                                        @include('componentes.formularios.pauta_grupo_padre', [
                                            'titulo' => '3 - Cordialidad y reducción de conflicto',
                                            'padre' => 104,
                                        ])

                                        @include('componentes.formularios.pauta_grupo_padre', [
                                            'titulo' => '4 - Manejo de Silencios',
                                            'padre' => 109,
                                        ])

                                        @include('componentes.formularios.pauta_grupo_padre', [
                                            'titulo' => '5 - Seguridad y Dominio en la conversación con el Cliente',
                                            'padre' => 113,
                                        ])

                                        @include('componentes.formularios.pauta_grupo_padre', [
                                            'titulo' => '6 - Comunicación simple y empática',
                                            'padre' => 118,
                                        ])

                                        @include('componentes.formularios.pauta_grupo_padre', [
                                            'titulo' => '7 - Educar al Cliente en Canales de Autotención',
                                            'padre' => 122,
                                        ])

                                        @include('componentes.formularios.pauta_grupo_padre', [
                                            'titulo' => '8 - Aseguramiento',
                                            'padre' => 126,
                                        ])

                                        @include('componentes.formularios.pauta_grupo_padre', [
                                            'titulo' => '9 - Ofrecimiento Comercial',
                                            'padre' => 132,
                                        ])

                                        @include('componentes.formularios.pauta_grupo_padre', [
                                            'titulo' => '10 - Frases de Enganche y Argumentación',
                                            'padre' => 142,
                                        ])


                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-1 ">
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-yellow-50 space-y-6 sm:p-6">
                                        <p class="font-bold text-xl">Atributos PEC</p>

                                        @include('componentes.formularios.pauta_grupo', [
                                            'titulo' => 'Usuario', 'elementos' => [146, 147, 148, 149, 150, 151],
                                        ])

                                        @include('componentes.formularios.pauta_grupo', [
                                            'titulo' => 'Negocio', 'elementos' => [152, 153, 154, 155, 156, 157, 158, 159],
                                        ])

                                        @include('componentes.formularios.pauta_grupo', [
                                            'titulo' => 'Cumplimiento', 'elementos' => [160, 161, 162, 163, 164, 165],
                                        ])


                                        <fieldset>
                                            @include('componentes.formularios.pauta_select', [
                                                'titulo' => 'Responsable PEC',
                                                'atributo_id' => 166,
                                                'name' => 'pec_responsable',
                                                'opciones' => $escalas['pecresponsables']['escalas']
                                            ])
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="pt-6"></div>
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-blue-50 space-y-6 sm:p-6">
                                        <p class="font-bold text-xl">Caracterización Complementaria</p>
                                        <fieldset>

                                            @include('componentes.formularios.pauta_select', [
                                                'titulo' => 'Ruidos o problemas de calidad en el audio',
                                                'atributo_id' => 168,
                                                'name' => 'otro_ruidoenllamada',
                                                'opciones' => $escalas['ruidos']['escalas']
                                            ])

                                            @include('componentes.formularios.pauta_radio', [
                                                'titulo' => 'Uso de frases tipo o scripts para la comunicación',
                                                'atributo_id' => 169,
                                                'name' => 'otro_frasesyscripts',
                                                'opciones' => $escalas['booleana']['escalas']
                                            ])

                                            @include('componentes.formularios.pauta_select', [
                                                'titulo' => 'Tipo de Negocio',
                                                'atributo_id' => 171,
                                                'name' => 'otro_tiponegocio',
                                                'opciones' => $escalas['tiposnegocio']['escalas']
                                            ])

                                            @include('componentes.formularios.pauta_radio', [
                                                'titulo' => 'Ofrecimiento de más de una Línea',
                                                'atributo_id' => 172,
                                                'name' => 'otro_ofrecimientomultilinea',
                                                'opciones' => $escalas['booleana']['escalas']
                                            ])

                                            @include('componentes.formularios.pauta_radio', [
                                                'titulo' => 'Ofrecimiento de equipo',
                                                'atributo_id' => 173,
                                                'name' => 'otro_ofrecimientoequipo',
                                                'opciones' => $escalas['booleana']['escalas']
                                            ])

                                            @include('componentes.formularios.pauta_radio', [
                                                'titulo' => 'Ofrecimiento de accesorios',
                                                'atributo_id' => 174,
                                                'name' => 'otro_ofrecimientoaccesorio',
                                                'opciones' => $escalas['booleana']['escalas']
                                            ])

                                        </fieldset>
                                    </div>
                                </div>
                                <div class="pt-6"></div>
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="pt-4 bg-red-50 space-y-2 sm:p-6">
                                        <p class="font-bold text-xl">Ingresa Reclamos a plataforma Back Office</p>
                                        <fieldset>

                                            @include('componentes.formularios.pauta_radio', [
                                                'titulo' => '',
                                                'atributo_id' => 322,
                                                'name' => 'reclamos1',
                                                'opciones' => $escalas['no_aplica']['escalas']
                                            ])


                                            <div class="@if($respuestas[322] == 'No Aplica') hidden @endif">

                                                @include('componentes.formularios.pauta_radio', [
                                                    'titulo' => 'Valida correctamente los datos para derivar correctamente al back',
                                                    'atributo_id' => 323,
                                                    'name' => 'reclamos2',
                                                    'opciones' => $escalas['booleana']['escalas']
                                                ])

                                                @include('componentes.formularios.pauta_radio', [
                                                    'titulo' => 'Ingresa ticket y observaciones según procedimiento',
                                                    'atributo_id' => 324,
                                                    'name' => 'reclamos3',
                                                    'opciones' => $escalas['booleana']['escalas']
                                                ])

                                                @include('componentes.formularios.pauta_radio', [
                                                    'titulo' => 'Informa correctamente plazos de respuesta',
                                                    'atributo_id' => 325,
                                                    'name' => 'reclamos4',
                                                    'opciones' => $escalas['booleana']['escalas']
                                                ])

                                                @include('componentes.formularios.pauta_radio', [
                                                    'titulo' => 'Indica número de reclamo',
                                                    'atributo_id' => 326,
                                                    'name' => 'reclamos5',
                                                    'opciones' => $escalas['booleana']['escalas']
                                                ])

                                                @include('componentes.formularios.pauta_radio', [
                                                    'titulo' => 'Menciona canales de consulta para el reclamo',
                                                    'atributo_id' => 327,
                                                    'name' => 'reclamos6',
                                                    'opciones' => $escalas['booleana']['escalas']
                                                ])

                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>

    @if ($pauta_ok)
        <div class="fixed @if($evaluacion['estado_id'] == 20) visible opacity-100 @else hidden opacity-0 @endif bottom-1 right-1 bg-yellow-100 border border border-yellow-500 text-yellow-700 px-4 py-1 shadow-lg transition-all">
            <p class="font-bold text-sm">Tienes progreso autoguardado sin enviar.</p>
            <p class="text-sm">La evaluación no se marcará como "Completada" hasta que se presione el botón "Guardar".</p>
        </div>
    @else
        <div class="fixed visible opacity-100 bottom-1 right-1 bg-red-100 border border border-red-500 text-red-700 px-4 py-1 shadow-lg transition-all">
            <p class="font-bold text-sm">Faltan campos por completar.</p>
            <p class="text-sm">Complete los campos campos resaltados en rojo antes de Guardar la pauta.</p>
        </div>
    @endif

</div>
