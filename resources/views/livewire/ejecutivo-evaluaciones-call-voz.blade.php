{{--
Plantilla: Ejecutivo-Evaluaciones Call Voz
Versión 1
--}}
<div>

    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">


        <p class="font-bold p-4 bg-gray-200 text-gray-700">{{$asignacionfinal->agente->name}}</p>



        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID Evaluación
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <p>Estado</p>
                <div class="col-span-6 sm:col-span-3">

                    <select id="filtroEstado" name="filtroEstado" autocomplete="" wire:model="filtroEstado" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="0">Todos</option>
                        @foreach($estados as $estado)
                            <option value="{{$estado->id}}">{{$estado->name}}</option>
                        @endforeach
                    </select>
                </div>
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                RUT EJECUTIVO
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-xs-sm focus:outline-none" type="search" name="search" placeholder="Móvil" wire:model="searchMovil">
                </div>
            </th>

            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ConnID
            </th>
            <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                VER
            </th>
            <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                GRABACIÓN
            </th>
            <th scope="col" class="text-center px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ICI
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">

        @foreach($evaluaciones as $evaluacion)

            <tr class="
            @foreach($evaluacionescompletas as $evaluacioncompleta)
            @if($evaluacioncompleta->rut_ejecutivo == $evaluacion->rut_ejecutivo)
                bg-yellow-50
@if($filtroNoRecorridos == 1)
                hidden
@endif
            @endif
            @endforeach
                ">
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                      {{$evaluacion->id}}
                    </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ ( $evaluacion->estado->id == 2) ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                      {{$evaluacion->estado->name}}
                    </span>

                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$evaluacion->rut_ejecutivo}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$evaluacion->movil}}</div>
                </td>

                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900">{{$evaluacion->connid}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a class="inline-flex items-center h-8 px-2 m-2 text-sm text-indigo-100 transition-colors duration-150 bg-green-700 rounded focus:shadow-outline hover:bg-green-900" href="{{route('evaluacions.index', ['evaluacionid'=>$evaluacion->id])}}" disabled>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </a>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a class="hover:opacity-50 opacity-30 inline-flex items-center h-8 px-2 m-0.5 text-sm text-indigo-100 transition-colors duration-150 bg-red-800 rounded-md focus:shadow-outline" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                        </svg>
                    </a>
                    <a class="hover:opacity-50 opacity-30 inline-flex items-center h-8 px-2 m-0.5 text-sm text-indigo-100 transition-colors duration-150 bg-red-800 rounded-md focus:shadow-outline" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </a>
                </td>
                <td class="text-center">
                    @if(Auth::user()->perfil  == 1)
                        @if($evaluacion->respuestas->max('origen_id') == 2)
                            <form method="POST" action="{{ route('evaluacions.resetici', [$evaluacion->id]) }}" onsubmit="return confirm('¿Seguro quieres borrar la ICI? (Acción irreversible)');">
                                @method('DELETE')
                                @csrf
                        @endif
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded disabled:opacity-30 @if($evaluacion->respuestas->max('origen_id') == 1) cursor-not-allowed" disabled @else " @endif>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                        @if($evaluacion->respuestas->max('origen_id') == 2)
                            </form>
                        @endif
                    @endif
                </td>
            </tr>

        @endforeach

        <!-- More items... -->
        </tbody>
    </table>
</div>
