@extends('componentes.modal')

{{-- El ID del DIV que tiene la clase .modal --}}
@section('id', 'historial')

{{-- El título del modal --}}
@section('titulo')
    <p class="text-base font-bold">Historial de cambios</p>
@endsection

{{-- El cuerpo del modal --}}
@section('cuerpo')
    @foreach($historial as $cambio)
        <p><strong>{{ \App\Models\User::find($cambio->user_id)->name }}</strong>: {{ $cambio->detalle }}</p>
    @endforeach
@endsection

{{-- El footer del modal --}}
@section('footer')
    <div class="flex justify-end pt-2">
        <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Cerrar</button>
    </div>
@endsection
