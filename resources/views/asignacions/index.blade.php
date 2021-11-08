    {{--
    Plantilla: asignacions/index
    Versión 2
    --}}

    <x-app-layout>

        {{-- Header --}}
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Inicio') }}</h2>
        </x-slot>

        {{-- Breadcrumb --}}
        <div class="breadcrumb">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                {!! Breadcrumbs::render('asignaciones', $estudio, $periodo) !!}
            </div>
        </div>

        {{-- Contenido TODO: Revisar consistencia de tags HTML --}}
        @if(Auth::user()->perfil == 1 || Auth::user()->perfil == 2)

        <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 pt-10">

            <form action="{{route('asignacions.periodo')}}" method="POST">
            @csrf
                <input type="hidden" name="estudioid" value="{{ $estudio->id }}">
            <strong class="flex flex-row inline-flex mr-10" style="font-size: 26px; font-weight: 600">{{ $estudio->name }}</strong>
            <div class="flex flex-row inline-flex items-center my-5">

                <div>
                    <p class="text-gray-600 font-bold">Periodo:&nbsp&nbsp</p>
                </div>

                <div>
                    <div class="text-sm text-gray-500">
                        <select id="seleccionPeriodo" name="seleccionPeriodo" class="py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            @foreach($periodos as $unPeriodo)
                                <option value="{{$unPeriodo->periodo_id}}" {{ ($unPeriodo->periodo_id == $periodo->periodo_id) ? 'selected' : '' }}>{{$unPeriodo->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                &nbsp&nbsp
                <div>
                    <button type="submit" name="seleccionPeriodoForm" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        <!-- Heroicon name: check -->

                        Ir
                    </button>
                </div>
                <div>
                    Completas: {{$totalcompletas}} - Asignacion: {{$totalasignacion}}
                </div>
            </div>
            </form>
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Centro
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Habilidad
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Asignacion
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Completas
                                </th>
                                @if($estudio->id == 1)
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Chat En Blanco
                                    </th>
                                @endif
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Base
                                </th>
                                @if($estudio->id == 1)
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Agentes
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Agentes Recorridos
                                </th>
                                @endif
                                <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Ir</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($asignacions as $asignacion)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$asignacion->agente->servicio->name}}
                                            </div>

                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{$asignacion->agente->habilidad}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                      {{$asignacion->n_asignacion}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                      {{$asignacion->completas->count()}}
                                    </span>
                                </td>
                                @if($estudio->id == 1)
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                      {{$asignacion->chatenblanco->count()}}
                                    </span>
                                </td>
                                @endif
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                      {{$asignacion->base->count()}}
                                    </span>
                                </td>
                                @if($estudio->id == 1)
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                      {{$asignacion->agentes->count()}}
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                      {{$asignacion->agentescompletas->count()}}
                                    </span>
                                </td>
                                @endif
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    @if($estudio->id == 1)
                                        <a href="{{route('asignacions.listar', $asignacion->id)}}" class="text-indigo-600 hover:text-indigo-900">Ir</a>
                                    @elseif($estudio->id == 2)
                                        <a href="{{route('asignacions.ejecutivoevaluacionescallvoz', $asignacion->id)}}" class="text-indigo-600 hover:text-indigo-900">Ir</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            <!-- More items... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </x-app-layout>



