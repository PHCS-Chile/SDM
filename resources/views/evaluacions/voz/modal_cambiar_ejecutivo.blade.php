<div id="{{ $modal['id'] }}" class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    <div class="modal-container bg-white w-11/12 md:max-w-xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-xs z-50">
            <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
            <span class="text-xs">(Esc)</span>
        </div>
        <!-- Add margin if you want to see some of the overlay behind the modal-->
        <div class="modal-content py-4 text-left px-6">
            <form class="w-full" method="POST" action="{{ route('evaluacion.cambiar_ejecutivo', [$modal['evaluacion_id']]) }}">
                @csrf
                <input type="hidden" name="evaluacion_id" value="{{ $modal['evaluacion_id'] }}">

                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-base font-bold mb-4 text-2xl">{{ $modal['titulo'] }}</p>
                    <div class="modal-close cursor-pointer z-50">
                        <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
                        </svg>
                    </div>
                </div>

                <div class="flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="nombre_nuevo_ejecutivo-{{ $modal['evaluacion_id'] }}">
                            Nombre
                        </label>
                    </div>
                    <div class="w-2/3">
                        <input oninput="validarNombre{{ $modal['evaluacion_id'] }}(this)" class="bg-gray-50 appearance-none border border-gray-400 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="nombre_nuevo_ejecutivo" id="nombre_nuevo_ejecutivo-{{ $modal['evaluacion_id'] }}" type="text" value="{{ $modal['nombre_ejecutivo'] }}">
                    </div>
                </div>

                <div class="flex md:items-center mb-6">
                    <div class="w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="rut_nuevo_ejecutivo-{{ $modal['evaluacion_id'] }}">
                            RUT
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="bg-gray-50 appearance-none border-2 border-gray-400 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="rut_nuevo_ejecutivo" id="rut_nuevo_ejecutivo-{{ $modal['evaluacion_id'] }}" type="text" value="{{ $modal['rut_ejecutivo'] }}">
                    </div>
                </div>


                <!--Footer-->
                <div class="space-x-2 flex justify-end pt-2">
                    <button type="button" class="modal-close px-3 bg-red-500 py-1.5 rounded-lg text-white hover:bg-indigo-400">Cancelar</button>
                    <button id="guardar_nuevo_ejecutivo-{{ $modal['evaluacion_id'] }}" type="submit" class="px-3 bg-green-500 py-1.5 rounded-lg text-white hover:bg-green-400 @if($modal['nombre_ejecutivo']) guardar-activo @else guardar-inactivo @endif" @if(!$modal['nombre_ejecutivo']) disabled @endif>Guardar</button>
                </div>


            </form>
        </div>
    </div>
    <style>
        .guardar-activo {
            cursor: pointer;
            opacity: 1;
        }

        .guardar-inactivo {
            cursor: not-allowed;
            opacity: 0.3;
        }
    </style>
    <script>
        var nombreNuevoEjecutivo{{ $modal['evaluacion_id'] }} = document.getElementById("nombre_nuevo_ejecutivo-{{ $modal['evaluacion_id'] }}");
        var guardarNuevoEjecutivo{{ $modal['evaluacion_id'] }} = document.getElementById("guardar_nuevo_ejecutivo-{{ $modal['evaluacion_id'] }}");

        function validarNombre{{ $modal['evaluacion_id'] }}(object) {
            if (object.value === "") {
                desactivarGuardar{{ $modal['evaluacion_id'] }}();
            } else {
                activarGuardar{{ $modal['evaluacion_id'] }}();
            }
        }

        function activarGuardar{{ $modal['evaluacion_id'] }}() {
            guardarNuevoEjecutivo{{ $modal['evaluacion_id'] }}.classList.remove("guardar-inactivo");
            guardarNuevoEjecutivo{{ $modal['evaluacion_id'] }}.classList.add("guardar-activo");
            guardarNuevoEjecutivo{{ $modal['evaluacion_id'] }}.disabled = false;
        }

        function desactivarGuardar{{ $modal['evaluacion_id'] }}() {
            guardarNuevoEjecutivo{{ $modal['evaluacion_id'] }}.classList.remove("guardar-activo");
            guardarNuevoEjecutivo{{ $modal['evaluacion_id'] }}.classList.add("guardar-inactivo");
            guardarNuevoEjecutivo{{ $modal['evaluacion_id'] }}.disabled = true;
        }
    </script>
</div>

