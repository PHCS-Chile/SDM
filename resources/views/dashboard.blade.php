{{--
Plantilla: dashboard
Versión 3
--}}

<x-app-layout>

    {{-- Header --}}
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">{{ __('Inicio') }}</h2>
    </x-slot>

    {{-- Contenido --}}
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
{{--                <x-jet-welcome />--}}
                @if(Auth::user()->perfil == 1 || Auth::user()->perfil == 2)
                <div class="flex items-center bg-gray-100 text-gray-500">
                    <div class=" w-full">
                        <div class="grid grid-cols-12 gap-4">
                            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                    </div>
                                    <div class="flex flex-col flex-grow ml-4">
                                        <div class="text-sm text-gray-500">Tus Evaluaciones de hoy</div>
                                        <div class="font-bold text-lg">{{$evaluacionesdehoy}}</div>
                                    </div>
                                </div>
                            </div>


                            @if(Auth::user()->perfil == 1)
                            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                <a href="{{ route('usuario.notificaciones') }}">
                                    <div class="flex flex-row bg-white shadow-sm rounded p-4 hover:bg-opacity-50 hover:shadow-md transition">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col flex-grow ml-4">
                                            <div class="text-sm text-gray-500">Notificaciones sin revisar</div>
                                            <div class="font-bold text-lg">{{ Notificacion::where('activa', true)->where('leida', false)->count() }}</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endif

                            <div class="col-span-12 sm:col-span-6 md:col-span-3">
                                <a href="#">
                                    <div class="flex flex-row bg-white shadow-sm rounded p-4 hover:bg-opacity-50 hover:shadow-md transition">
                                        <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-blue-100 text-blue-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                                            </svg>
                                        </div>
                                        <div class="flex flex-col flex-grow ml-4">
                                            <div class="text-sm text-gray-500">Historial de cambios</div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="hidden col-span-12 sm:col-span-6 md:col-span-3">
                                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-green-100 text-green-500">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path></svg>
                                    </div>
                                    <div class="flex flex-col flex-grow ml-4">
                                        <div class="text-sm text-gray-500">Orders</div>
                                        <div class="font-bold text-lg">230</div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden col-span-12 sm:col-span-6 md:col-span-3">
                                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-orange-100 text-orange-500">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                                    </div>
                                    <div class="flex flex-col flex-grow ml-4">
                                        <div class="text-sm text-gray-500">New Clients</div>
                                        <div class="font-bold text-lg">190</div>
                                    </div>
                                </div>
                            </div>
                            <div class="hidden col-span-12 sm:col-span-6 md:col-span-3">
                                <div class="flex flex-row bg-white shadow-sm rounded p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 h-12 w-12 rounded-xl bg-red-100 text-red-500">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <div class="flex flex-col flex-grow ml-4">
                                        <div class="text-sm text-gray-500">Revenue</div>
                                        <div class="font-bold text-lg">$ 32k</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
