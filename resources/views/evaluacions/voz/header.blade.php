{{--
Plantilla: Header resumen para Call Voz
Versión 1
--}}
@if(Auth::user()->perfil == 1 || Auth::user()->perfil == 2)
    <data></data>
    <div class="p-6">
        <div class=" p-5 bg-white  shadow-xl sm:rounded-lg ">
            <div class="md:grid md:grid-cols-1 md:gap-6">

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="flex-1 min-w-0">



                        <div class="flex">
                            <div class="w-3/4">
                                <div class="flex">
                                    <div class="flex-1 w-4/4 bg-red sm:rounded-lg">
                                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                                            Monitoreo - {{$evaluacionfinal->asignacion->agente->servicio->name}} {{$evaluacionfinal->asignacion->agente->habilidad}}
                                            <a href="{{ route('asignacions.ejecutivoevaluaciones', [$evaluacionfinal->asignacion->id, $evaluacionfinal->rut_ejecutivo]) }}" role="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-700 hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2">
                                                <i class="fas fa-arrow-left fa-fw fa-lg mr-2"></i> Volver a Base del Agente
                                            </a>
                                        </h2>
                                    </div>

                                </div>

                                <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">


                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: briefcase -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
                                        </svg>
                                        ID Evaluación: {{$evaluacionfinal->id}}
                                    </div>
                                    <div class="hidden mt-2 flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: briefcase -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd" />
                                        </svg>
                                        Centro/Habilidad: {{$evaluacionfinal->asignacion->agente->servicio->name}} - {{$evaluacionfinal->asignacion->agente->habilidad}}
                                    </div>
                                    <div class="block">
                                        <button class="mt-2 flex items-center text-sm text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" onclick="CopyToClipboard('ctc_movil')">
                                            <!-- Heroicon name: location-marker -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                            </svg>
                                            Movil:&nbsp; <span id="ctc_movil" class="text-gray-500">{{$evaluacionfinal->movil}}</span>
                                        </button>
                                        <div id="ctc_movil_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-sm px-3 py-3" role="alert">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                            </svg>
                                            <p>Teléfono copiado al portapapeles.</p>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <button class="mt-2 flex items-center text-sm text-gray-500 bg-gray-100 hover:bg-gray-200 rounded-xl p-1 shadow-md transition-all focus: border-transparent" onclick="CopyToClipboard('ctc_connid')">
                                            <!-- Heroicon name: currency-dollar -->
                                            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1V4zm2 2V5h1v1H5zM3 13a1 1 0 011-1h3a1 1 0 011 1v3a1 1 0 01-1 1H4a1 1 0 01-1-1v-3zm2 2v-1h1v1H5zM13 3a1 1 0 00-1 1v3a1 1 0 001 1h3a1 1 0 001-1V4a1 1 0 00-1-1h-3zm1 2v1h1V5h-1z" clip-rule="evenodd" />
                                                <path d="M11 4a1 1 0 10-2 0v1a1 1 0 002 0V4zM10 7a1 1 0 011 1v1h2a1 1 0 110 2h-3a1 1 0 01-1-1V8a1 1 0 011-1zM16 9a1 1 0 100 2 1 1 0 000-2zM9 13a1 1 0 011-1h1a1 1 0 110 2v2a1 1 0 11-2 0v-3zM7 11a1 1 0 100-2H4a1 1 0 100 2h3zM17 13a1 1 0 01-1 1h-2a1 1 0 110-2h2a1 1 0 011 1zM16 17a1 1 0 100-2h-3a1 1 0 100 2h3z" />
                                            </svg>
                                            ConnID:&nbsp; <span id="ctc_connid" class="text-gray-500">{{$evaluacionfinal->connid}}</span>
                                        </button>
                                        <div id="ctc_connid_alert" class="transition duration-350 ease-in-out hidden shadow-md rounded-md flex fixed items-center bg-green-500 text-white text-sm px-3 py-3" role="alert">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                            </svg>
                                            <p>CONNID copiado al portapapeles.</p>
                                        </div>
                                    </div>
                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: calendar -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                        </svg>
                                        Fecha Grabación: {{$evaluacionfinal->fecha_grabacion}}
                                    </div>
                                    <div class="mt-2 flex items-center text-sm text-gray-500">
                                        <!-- Heroicon name: calendar -->
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                        </svg>
                                        <p class="text-gray-500 font-bold">Estado de Evaluación: </p>&nbsp <p> {{$evaluacionfinal->estado->name}}</p>&nbsp&nbsp
                                        <p class="text-gray-500 font-bold">PENC: </p>&nbsp <p> {{$evaluacionfinal->penc}}</p>&nbsp&nbsp
                                        <p class="text-gray-500 font-bold">PEC Usuario: </p>&nbsp <p> {{$evaluacionfinal->pecu}}</p>&nbsp&nbsp
                                        <p class="text-gray-500 font-bold">PEC Negocio: </p>&nbsp <p> {{$evaluacionfinal->pecn}}</p>&nbsp&nbsp
                                        <p class="text-gray-500 font-bold">PEC Cumplimiento: </p>&nbsp <p> {{$evaluacionfinal->pecc}}</p>&nbsp&nbsp
                                        @if($evaluacionfinal->ici)
                                            <p class="text-gray-500 font-bold">% de Discrepancia: </p>&nbsp <p> {{$evaluacionfinal->ici}}</p>
                                        @endif
                                    </div>



                                    @if(Auth::user()->perfil  == 2)
                                        <form action="{{route('evaluacions.guardaeval', $evaluacionfinal->id)}}" method="POST">
                                            @csrf


                                            <button type="submit" name="descartarEval" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                                <!-- Heroicon name: check -->

                                                <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                                                </svg>
                                                Descartar Evaluación
                                            </button>
                                            @if($evaluacionfinal->estado_id > 1)
                                                <button type="submit" name="enviarRevision" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                                    <!-- Heroicon name: check -->
                                                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    Enviar a Revisión
                                                </button>
                                            @endif
                                        </form>

                                    @endif
                                    @if(Auth::user()->perfil  == 1)
                                        <form action="{{route('evaluacions.guardaeval', $evaluacionfinal->id)}}" method="POST">
                                            @csrf
                                            <div class="flex flex-row inline-flex items-center border-1 m-2">
                                                <div><p class="text-gray-600 font-bold">Cambia de estado: &nbsp&nbsp</p></div>
                                                <div class="text-sm text-gray-500">
                                                    <select id="cambioestado" name="cambioestado" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                        @foreach($estados as $estado)
                                                            <option value="{{$estado->id}}" {{ ( $estado->name == $evaluacionfinal->estado->name) ? 'selected' : '' }}>{{$estado->name}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                &nbsp&nbsp
                                                <div>
                                                    <button type="submit" name="form3" class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                        Guardar
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    @endif
                                </div>


                            </div>

                            <div class="w-1/4 p-3 border border-solid border-gray-300 rounded shadow">
                                <h2 class="font-bold text-xl">Audio de la conversacion</h2>
                                @if (!$grabacion)
                                    <p>Esta evaluación aún no tiene asociada una grabación.</p>
                                    <br>
                                    <form action="{{ route('evaluacions.grabacion', [$evaluacionfinal->id]) }}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="evaluacionid" value="{{ $evaluacionfinal->id }}">
                                        Elegir una grabación para subir:
                                        <input type="file" name="grabacion" id="grabacion">
                                        <button type="submit"  class="mt-5 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-700 hover:bg-green-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Guardar Grabacion
                                        </button>
                                    </form>
                                @else
                                    <audio controls>
                                        <source src="{{ asset('storage/uploads/' . $grabacion->nombre) }}" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <form action="{{ route('evaluacions.eliminar_grabacion', [$evaluacionfinal->id]) }}" method="post" onsubmit="return confirm('¿Seguro que quieres eliminar la grabación? ESTA ACCIÓN ES IRREVERSIBLE!');">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="ml-4 mt-5 inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-700 hover:bg-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Eliminar Grabacion
                                        </button>
                                    </form>
                                @endif

                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    @endif
