<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
{{ __('Inicio') }}
</h2>
</x-slot>
    
    <p class="font-bold text-2xl"></p>
    <div class="flex flex-col mx-auto sm:px-6 lg:px-8 pt-10">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    @livewire('ejecutivo-evaluaciones', ['asignacionid' => $asignacionfinal->id, 'rutejecutivo' => $rutejecutivo])
                </div>
            </div>
        </div>
    </div>

    


</x-app-layout>



