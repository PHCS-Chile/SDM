{{--
Plantilla: Pauta Ventas Remotas
Versión 1
--}}
<div class="flex space-x-4 pt-6 px-6">
    <div class="flex-1 w-1/4 py-8 px-6 bg-white shadow-xl sm:rounded-lg overflow-y-scroll h-screen">

        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                <div>
                    <label for="comentario_interno" class="block text-sm font-medium text-gray-700">
                        Comentario Interno
                    </label>
                    <div class="mt-1">
                        <textarea id="comentario_interno" name="comentario_interno" wire:model.defer="comentario_interno" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí el comentario interno">{{$comentario_interno}}</textarea>
                    </div>
                </div>
                <div>
                    <label for="descripcion_caso" class="block text-sm font-medium text-gray-700">
                        Descripción del Caso
                    </label>
                    <div class="mt-1">
                        <textarea id="descripcion_caso" name="descripcion_caso" wire:model.defer="descripcion_caso" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la descripción del caso">{{$descripcion_caso}}</textarea>
                    </div>
                </div>
                <div>
                    <label for="respuesta_ejecutivo" class="block text-sm font-medium text-gray-700">
                        Respuesta del Ejecutivo
                    </label>
                    <div class="mt-1">
                        <textarea id="respuesta_ejecutivo" name="respuesta_ejecutivo" wire:model.defer="respuesta_ejecutivo" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la Respuesta del Ejecutivo">{{$respuesta_ejecutivo}}</textarea>
                    </div>
                </div>
                <small class="text-red-600 font-bold">{{ $errors->first('respuesta_ejecutivo') }}</small>
                <div>
                    <label for="retroalimentacion" class="block text-sm font-medium text-gray-700">
                        Retroalimentación
                    </label>
                    <div class="mt-1">
                        <textarea id="retroalimentacion" name="retroalimentacion" wire:model.defer="retroalimentacion" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-48 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la retroalimentación">{{$retroalimentacion}}</textarea>
                    </div>
                </div>
                <small class="text-red-600 font-bold">{{ $errors->first('retroalimentacion') }}</small>
                <div></div>

                <div>
                    <label for="comentario_interno" class="block text-sm font-medium text-gray-700">
                        Comentario Calidad
                    </label>
                    <div class="mt-1">
                        <textarea id="comentario_interno" name="comentario_interno" wire:model.defer="comentario_interno" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-48 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí el comentario de calidad">{{$comentario_interno}}</textarea>
                    </div>
                </div>
                <small class="text-red-600 font-bold">{{ $errors->first('comentario_interno') }}</small>
                <button type="submit"  wire:click="save" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <!-- Heroicon name: check -->
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    Guardar
                </button>

                <button type="submit"  wire:click="ici" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    <!-- Heroicon name: check -->
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                    </svg>
                    Discrepancia
                </button>
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
            Fecha Grabación Adjunta: {{ $grabacion ? $grabacion->created_at : '-'}}
        </div>
        <div class="mt-2 flex items-center text-sm text-gray-500">
            <!-- Heroicon name: calendar -->
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
            </svg>
            Fecha Evaluación: {{$evaluacion->created_at}}
        </div>
        <div class="mt-2 flex items-center text-sm text-gray-500">
            <!-- Heroicon name: calendar -->
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
            </svg>
            Fecha Modificación: {{$evaluacion->updated_at}}
        </div>
        <div class="mt-2 flex items-center text-sm text-gray-500">
            <!-- Heroicon name: calendar -->
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
            </svg>
            PENC: {{$evaluacion->penc}}
        </div>
        <div class="mt-2 flex items-center text-sm text-gray-500">
            <!-- Heroicon name: calendar -->
            <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
            </svg>
            PEC: {{$evaluacion->pec}}
        </div>


        @if($evaluacion->ici)
            <div class="mt-2 flex items-center text-sm text-gray-500">
                <!-- Heroicon name: calendar -->
                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                </svg>
                % de Discrepancia: {{$evaluacion->ici}}
            </div>
            {{--            <p class="text-gray-500 font-bold">% de Discrepancia: </p>&nbsp <p> {{$evaluacion->ici}}</p>--}}
        @endif
    </div>

    <div class="w-3/4 p-6 bg-gray-50 overflow-hidden shadow-xl sm:rounded-lg overflow-y-scroll h-screen">
        <div>
            <form wire:submit.prevent="save">

                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-1 md:gap-6">
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-green-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Atributos PENC</p>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">1 - Presentación del Ejecutivo - ({{$presentacion1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="presentacion2" name="presentacion2" wire:model.defer="presentacion2" wire:click="xsaludo" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$presentacion2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="presentacion2" class="font-medium text-gray-700">No Saluda cordialmente</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="presentacion3" name="presentacion3" wire:model.defer="presentacion3" wire:click="xsaludo" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$presentacion3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="presentacion3" class="font-medium text-gray-700">No se identifica frente al Cliente</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">2 - Frases de Enganche y Conexión - ({{$frasesenganche1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="frasesenganche2" name="frasesenganche2" wire:model.defer="frasesenganche2" wire:click="xdisposicion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$frasesenganche2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="frasesenganche2" class="font-medium text-gray-700">No realiza frase de conexión</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="frasesenganche3" name="frasesenganche3" wire:model.defer="frasesenganche3" wire:click="xdisposicion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$frasesenganche3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="frasesenganche3" class="font-medium text-gray-700">No realiza frase de enganche</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">3 - Personalización - ({{$personalizacion1}})</legend>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="personalizacion2" name="personalizacion2" wire:model.defer="personalizacion2" wire:click="xcordialidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$personalizacion2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="personalizacion2" class="font-medium text-gray-700">No Personaliza</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="personalizacion3" name="personalizacion3" wire:model.defer="personalizacion3" wire:click="xcordialidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$personalizacion3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="personalizacion3" class="font-medium text-gray-700">Personaliza incorrectamente</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">4 - Detección de Necesidades - ({{$deteccion1}})</legend>
                                        <div class="hidden mt-4">
                                            <span class="text-gray-700">Detección de Necesidades Padre</span>
                                            <div class="mt-1 text-sm">
                                                <label class="inline-flex items-center">
                                                    <input type="radio" class="form-radio" name="deteccion1" wire:model.defer="deteccion1" value="Si" {{ $deteccion1 == "Si" ? 'checked' : '' }}>
                                                    <p class="ml-2">Si</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="deteccion1" wire:model.defer="deteccion1" value="No" {{ $deteccion1 == "No" ? 'checked' : '' }}>
                                                    <p class="ml-2">No</p>
                                                </label>
                                                <label class="inline-flex items-center ml-6">
                                                    <input type="radio" class="form-radio" name="deteccion1" wire:model.defer="deteccion1" value="No Aplica" {{ $deteccion1 == "No Aplica" ? 'checked' : '' }}>
                                                    <p class="ml-2">No Aplica</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="mt-2 space-y-2">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="deteccion2" name="deteccion2" wire:model.defer="deteccion2" wire:click="xmanejosilencios" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$deteccion2}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="deteccion2" class="font-medium text-gray-700">No Aplica</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="deteccion3" name="deteccion3" wire:model.defer="deteccion3" wire:click="xmanejosilencios" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$deteccion3}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="deteccion3" class="font-medium text-gray-700">No Valida las necesidades del Cliente</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="deteccion4" name="deteccion4" wire:model.defer="deteccion4" wire:click="xmanejosilencios" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" {{$deteccion4}}>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="deteccion4" class="font-medium text-gray-700">No sondea posibilidad de hacer negocio con multilínea</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-yellow-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Atributos PEC</p>
                                </div>
                            </div>
                            <div class="pt-6"></div>
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-blue-50 space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Caracterización Complementaria</p>
                                    <div class="mt-4">
                                        <span class="text-gray-700 text-sm">Despedida e información de cierre</span>
                                        <div class="mt-1 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="despedida1" wire:model.lazy="despedida1" value="Si" {{ $despedida1 == "Si" ? 'checked' : '' }}>
                                                <p class="ml-2">Sí</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="despedida1" wire:model.lazy="despedida1" value="No" {{ $despedida1 == "No" ? 'checked' : '' }}>
                                                <p class="ml-2">No</p>
                                            </label>
                                        </div>
                                        <small class="text-red-600 font-bold">{{ $errors->first('despedida1') }}</small>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
