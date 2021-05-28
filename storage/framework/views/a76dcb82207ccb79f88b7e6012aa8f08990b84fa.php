<div>

    <?php
        $saludo1 = '';
        $saludo2 = '';
        $saludo3 = '';
        $saludo4 = '';
        $saludo5 = '';
        $saludo6 = '';
        $frases1 = '';
        $frases2 = '';
        $frases3 = '';
        $frases4 = '';
        $frases5 = '';
        $cordialidad1 = '';
        $cordialidad2 = '';
        $cordialidad3 = '';
        $cordialidad4 = '';
        $cordialidad5 = '';
        $gestionplanillas1 = '';
        $gestionplanillas2 = '';
        $gestionplanillas3 = '';
        $gestionplanillas4 = '';
        $gestionplanillas5 = '';
        $ortografia1 = '';
        $ortografia2 = '';
        $ortografia3 = '';
        $ortografia4 = '';
        $ortografia5 = '';
        $ortografia6 = '';
        $ortografia7 = '';
        $personalizacion1 = '';
        $personalizacion2 = '';
        $personalizacion3 = '';
        $personalizacion4 = '';
        $seguridad1 = '';
        $seguridad2 = '';
        $seguridad3 = '';
        $manejosilecios1 = '';
        $manejosilecios2 = '';
        $manejosilecios3 = '';
        $manejosilecios4 = '';
        $aseguramiento1 = '';
        $aseguramiento2 = '';
        $aseguramiento3 = '';
        $aseguramiento4 = '';
        $ofrecimiento1 = '';
        $ofrecimiento2 = '';
        $ofrecimiento3 = '';
        $ofrecimiento4 = '';
        $ofrecimiento5 = '';
        $ofrecimiento6 = '';
        $ofrecimiento7 = '';
        $motivo1 = '';
        $motivo2 = '';
        $motivo3 = '';
        $gestion1 = '';
        $gestion2 = '';
        $gestion3 = '';
        $deteccion1 = '';
        $deteccion2 = '';
        $deteccion3 = '';
        $infocorrecta1 = '';
        $infocorrecta2 = '';
        $infocorrecta3 = '';
        $procedimiento1 = '';
        $procedimiento2 = '';
        $procedimiento3 = '';
        $resolucion1 = '';
        $resolucion2 = '';
        $resolucion3 = '';
        $pecu_deteccion = '';
        $pecu_infocorrecta = '';
        $pecu_procedimiento = '';
        $pecu_pocoprofesional = '';
        $pecu_manipulacliente = '';
        $pecu_cierreinteraccion = '';
        $pecn_redaccion = '';
        $pecn_ortografia = '';
        $pecn_beneficio = '';
        $pecn_fraude = '';
        $pecn_nosondea = '';
        $pecn_tipificacion = '';
        $pecn_factibilidad = '';
        $pecn_otragestion = '';
        $pecc_infoconfidencial = '';
        $pecc_novalidadatos = '';
        $pecc_cierre = '';
        $pecc_infoerronea = '';
        $asistentevirtual1 = '';
        $asistentevirtual2 = '';
        $asistentevirtual3 = '';
        $gestionesanteriores1 = '';
        $gestionesanteriores2 = '';
        $gestionesanteriores3 = '';
        $usuarios1 = '';
        $usuarios2 = '';
        $usuarios3 = '';




        foreach($respuestas as $respuesta){
            if($respuesta->atributo_id == 1){$saludo1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 2){$saludo2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 3){$saludo3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 4){$saludo4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 5){$saludo5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 6){$saludo6 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 7){$frases1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 8){$frases2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 9){$frases3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 10){$frases4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 11){$frases5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 12){$cordialidad1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 13){$cordialidad2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 14){$cordialidad3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 15){$cordialidad4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 16){$cordialidad5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 17){$gestionplanillas1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 18){$gestionplanillas2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 19){$gestionplanillas3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 20){$gestionplanillas4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 21){$gestionplanillas5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 22){$ortografia1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 23){$ortografia2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 24){$ortografia3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 25){$ortografia4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 26){$ortografia5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 27){$ortografia6 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 28){$ortografia7 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 29){$personalizacion1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 30){$personalizacion2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 31){$personalizacion3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 32){$personalizacion4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 33){$seguridad1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 34){$seguridad2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 35){$seguridad3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 36){$manejosilecios1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 37){$manejosilecios2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 38){$manejosilecios3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 39){$manejosilecios4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 40){$aseguramiento1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 41){$aseguramiento2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 42){$aseguramiento3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 43){$aseguramiento4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 44){$ofrecimiento1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 45){$ofrecimiento2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 46){$ofrecimiento3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 47){$ofrecimiento4 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 48){$ofrecimiento5 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 49){$ofrecimiento6 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 50){$ofrecimiento7 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 51){$motivo1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 52){$motivo2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 53){$motivo3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 54){$gestion1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 55){$gestion2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 56){$gestion3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 57){$deteccion1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 58){$deteccion2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 59){$deteccion3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 60){$infocorrecta1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 61){$infocorrecta2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 62){$infocorrecta3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 63){$procedimiento1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 64){$procedimiento2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 65){$procedimiento3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 66){$resolucion1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 67){$resolucion2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 68){$resolucion3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 69){$pecu_deteccion = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 70){$pecu_infocorrecta = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 71){$pecu_procedimiento = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 72){$pecu_pocoprofesional = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 73){$pecu_manipulacliente = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 74){$pecu_cierreinteraccion = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 75){$pecn_redaccion = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 76){$pecn_ortografia = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 77){$pecn_beneficio = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 78){$pecn_fraude = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 79){$pecn_nosondea = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 80){$pecn_tipificacion = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 81){$pecn_factibilidad = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 82){$pecn_otragestion = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 83){$pecc_infoconfidencial = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 84){$pecc_novalidadatos = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 85){$pecc_cierre = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 86){$pecc_infoerronea = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 87){$asistentevirtual1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 88){$asistentevirtual2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 89){$asistentevirtual3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 90){$gestionesanteriores1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 91){$gestionesanteriores2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 92){$gestionesanteriores3 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 93){$usuarios1 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 94){$usuarios2 = $respuesta->respuesta_text;}
            if($respuesta->atributo_id == 95){$usuarios3 = $respuesta->respuesta_text;}



        }

    ?>

    <div class="p-6">
        <div class=" p-5 bg-white  shadow-xl sm:rounded-lg ">


            <div class="md:grid md:grid-cols-1 md:gap-6">

                <!-- This example requires Tailwind CSS v2.0+ -->
                <div class="lg:flex lg:items-center lg:justify-between">
                    <div class="flex-1 min-w-0">
                        <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                            Call Center Auditoria - Whatsapp
                        </h2>
                        <div class="mt-1 flex flex-col sm:flex-row sm:flex-wrap sm:mt-0 sm:space-x-6">
                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: briefcase -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd" />
                                    <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z" />
                                </svg>
                                ID Evaluación: <?php echo e($evaluacionfinal->id); ?> - Servicio: <?php echo e($evaluacionfinal->asignacion->agente->servicio->name); ?>

                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: location-marker -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                </svg>
                                Movil: <?php echo e($evaluacionfinal->movil); ?>

                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: currency-dollar -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z" />
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd" />
                                </svg>
                                ConnID: <?php echo e($evaluacionfinal->connid); ?>

                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: calendar -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                </svg>
                                Fecha Evaluación: <?php echo e($evaluacionfinal->created_at); ?>

                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: calendar -->
                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                </svg>
                                Fecha Modificación: <?php echo e($evaluacionfinal->updated_at); ?>

                            </div>
                            <div class="mt-2 flex items-center text-sm text-gray-500">
                                <!-- Heroicon name: calendar -->
                                <label for="country" class="block">Estado de Evaluación: <?php echo e($evaluacionfinal->estado->name); ?> - <?php echo e($evaluacionfinal->subestado->name); ?></label>
                                <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option>Completa</option>
                                    <option>Revisada</option>
                                    <option>Incompleta</option>
                                </select>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="flex space-x-4 pt-6 px-6">

        <div class="flex-1 w-1/4 py-8 px-6 bg-white shadow-xl sm:rounded-lg overflow-y-scroll h-screen">
            <?php if($evaluacionfinal->image_path): ?>
                <?php echo $evaluacionfinal->image_path; ?>

            <?php else: ?>
                <form action="<?php echo e(route('evaluacions.guardaeval', [$evaluacionfinal->asignacion_id, $evaluacionfinal->id])); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <p class="text-red-600 font-bold">No hay un Chat ingresado.</p>
                    Inserta el texto aca y haz click en guardar

                    <div class="mt-1">
                        <textarea id="textochatinput" name="textochatinput" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Inserta el Texto copiado desde Copycat aquí"></textarea>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">
                        Recuerda que el texto tiene que tener las etiquetas html como por ejemplo < div >
                    </p>
                    <button type="submit" name="form1" class="bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Guardar
                    </button>

                </form>
            <?php endif; ?>
        </div>
        <div class="w-3/4 p-6 bg-gray-50 overflow-hidden shadow-xl sm:rounded-lg">

            <form action="<?php echo e(route('evaluacions.guardaeval', [$evaluacionfinal->asignacion_id, $evaluacionfinal->id])); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-10">
                    <div class="md:grid md:grid-cols-3 md:gap-6">
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Caracterización de Gestión y Resolución</p>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Motivo del Llamado</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="motivo1" value="Reclamo" <?php echo e($motivo1 == "Reclamo" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Reclamo</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="motivo1" value="Consulta" <?php echo e($motivo1 == "Consulta" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Consulta</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="motivo1" value="Requerimiento" <?php echo e($motivo1 == "Requerimiento" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Requerimiento</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                        <select id="gestion1" name="gestion1" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>- Seleccione una opción -</option>
                                            <?php $__currentLoopData = $gestiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($gestion->name); ?>" <?php echo e(( $gestion->name == $gestion1) ? 'selected' : ''); ?>>
                                                    <?php echo e($gestion->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Detección de necesidades/sondeo/analisis/revisión</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="deteccion1" value="Si" <?php echo e($deteccion1 == "Si" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Sí</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="deteccion1" value="No" <?php echo e($deteccion1 == "No" ? 'checked' : ''); ?>>
                                                <p class="ml-2">No</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Entrega de información correcta y completa</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="infocorrecta1" value="Si" <?php echo e($infocorrecta1 == "Si" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Sí</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="infocorrecta1" value="No" <?php echo e($infocorrecta1 == "No" ? 'checked' : ''); ?>>
                                                <p class="ml-2">No</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Gestiona según proced. en sistema</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="procedimiento1" value="Si" <?php echo e($procedimiento1 == "Si" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Sí</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="procedimiento1" value="No" <?php echo e($procedimiento1 == "No" ? 'checked' : ''); ?>>
                                                <p class="ml-2">No</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="resolucion1" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                        <select id="resolucion1" name="resolucion1" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>- Seleccione una opción -</option>
                                            <?php $__currentLoopData = $resoluciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resolucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($resolucion->name); ?>" <?php echo e(( $resolucion->name == $resolucion1) ? 'selected' : ''); ?>>
                                                    <?php echo e($resolucion->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Caracterización de Gestión y Resolución</p>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Motivo del Llamado</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="motivo2" value="Reclamo" <?php echo e($motivo2 == "Reclamo" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Reclamo</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="motivo2" value="Consulta" <?php echo e($motivo2 == "Consulta" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Consulta</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="motivo2" value="Requerimiento" <?php echo e($motivo2 == "Requerimiento" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Requerimiento</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="gestion2" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                        <select id="gestion2" name="gestion2" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>- Seleccione una opción -</option>
                                            <?php $__currentLoopData = $gestiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($gestion->name); ?>" <?php echo e(( $gestion->name == $gestion2) ? 'selected' : ''); ?>>
                                                    <?php echo e($gestion->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Detección de necesidades/sondeo/analisis/revisión</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="deteccion2" value="Si" <?php echo e($deteccion2 == "Si" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Sí</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="deteccion2" value="No" <?php echo e($deteccion2 == "No" ? 'checked' : ''); ?>>
                                                <p class="ml-2">No</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Entrega de información correcta y completa</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="infocorrecta2" value="Si" <?php echo e($infocorrecta2 == "Si" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Sí</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="infocorrecta2" value="No" <?php echo e($infocorrecta2 == "No" ? 'checked' : ''); ?>>
                                                <p class="ml-2">No</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Gestiona según proced. en sistema</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="procedimiento2" value="Si" <?php echo e($procedimiento2 == "Si" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Sí</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="procedimiento2" value="No" <?php echo e($procedimiento2 == "No" ? 'checked' : ''); ?>>
                                                <p class="ml-2">No</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="resolucion2" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                        <select id="resolucion2" name="resolucion2" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>- Seleccione una opción -</option>
                                            <?php $__currentLoopData = $resoluciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resolucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($resolucion->name); ?>" <?php echo e(( $resolucion->name == $resolucion2) ? 'selected' : ''); ?>>
                                                    <?php echo e($resolucion->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Caracterización de Gestión y Resolución</p>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Motivo del Llamado</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="motivo3" value="Reclamo" <?php echo e($motivo3 == "Reclamo" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Reclamo</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="motivo3" value="Consulta" <?php echo e($motivo3 == "Consulta" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Consulta</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="motivo3" value="Requerimiento" <?php echo e($motivo3 == "Requerimiento" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Requerimiento</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="gestion3" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                        <select id="gestion3" name="gestion3" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>- Seleccione una opción -</option>
                                            <?php $__currentLoopData = $gestiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($gestion->name); ?>" <?php echo e(( $gestion->name == $gestion3) ? 'selected' : ''); ?>>
                                                    <?php echo e($gestion->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Detección de necesidades/sondeo/analisis/revisión</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="deteccion3" value="Si" <?php echo e($deteccion3 == "Si" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Sí</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="deteccion3" value="No" <?php echo e($deteccion3 == "No" ? 'checked' : ''); ?>>
                                                <p class="ml-2">No</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Entrega de información correcta y completa</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="infocorrecta3" value="Si" <?php echo e($infocorrecta3 == "Si" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Sí</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="infocorrecta3" value="No" <?php echo e($infocorrecta3 == "No" ? 'checked' : ''); ?>>
                                                <p class="ml-2">No</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <span class="text-gray-700">Gestiona según proced. en sistema</span>
                                        <div class="mt-2 text-sm">
                                            <label class="inline-flex items-center">
                                                <input type="radio" class="form-radio" name="procedimiento3" value="Si" <?php echo e($procedimiento3 == "Si" ? 'checked' : ''); ?>>
                                                <p class="ml-2">Sí</p>
                                            </label>
                                            <label class="inline-flex items-center ml-6">
                                                <input type="radio" class="form-radio" name="procedimiento3" value="No" <?php echo e($procedimiento3 == "No" ? 'checked' : ''); ?>>
                                                <p class="ml-2">No</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="resolucion1" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                        <select id="resolucion1" name="resolucion1" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option>- Seleccione una opción -</option>
                                            <?php $__currentLoopData = $resoluciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resolucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($resolucion->name); ?>" <?php echo e(( $resolucion->name == $resolucion1) ? 'selected' : ''); ?>>
                                                    <?php echo e($resolucion->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-10 sm:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-6">
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Atributos PENC</p>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">1 - Cumple con Scripts de saludo y despedida - (<?php echo e($saludo6); ?>)</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo1" name="saludo1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($saludo1); ?>>
                                                </div>

                                                <div class="ml-3 text-sm">
                                                    <label for="saludo1" class="font-medium text-gray-700">No saluda o indica nombre al iniciar la conversación</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo2" name="saludo2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($saludo2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="saludo2" class="font-medium text-gray-700">No usa preguntas o frases de conexión inicial</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo3" name="saludo3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($saludo3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="saludo3" class="font-medium text-gray-700">No Valida contexto indicado previamente</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo4" name="saludo4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($saludo4); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="saludo4" class="font-medium text-gray-700">No se despide y/o realiza de forma poco cordial</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="saludo5" name="saludo5" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($saludo5); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="saludo5" class="font-medium text-gray-700">No agradece contacto al despedirse</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">2 - Se comunica de forma simple y cercana - (<?php echo e($frases5); ?>)</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="frases1" name="frases1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($frases1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="frases1" class="font-medium text-gray-700">Utiliza frases formales y/o poco cercanas</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="frases2" name="frases2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($frases2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="frases2" class="font-medium text-gray-700">Utiliza conceptos técnicos</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="frases3" name="frases3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($frases3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="frases3" class="font-medium text-gray-700">Utiliza frases coloquiales y/o abreviaturas</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="frases4" name="frases4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($frases4); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="frases4" class="font-medium text-gray-700">Utiliza más de un emoticón por comentario</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">3 - Demuestra cordialidad y/o reduce conflictos - (<?php echo e($cordialidad5); ?>)</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad1" name="cordialidad1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($cordialidad1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad1" class="font-medium text-gray-700">No manifesta dispoción para atender</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad2" name="cordialidad2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($cordialidad2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad2" class="font-medium text-gray-700">No demuestra interes frente a dificultades</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad3" name="cordialidad3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($cordialidad3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad3" class="font-medium text-gray-700">No pide disculpas en caso de reclamos</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="cordialidad4" name="cordialidad4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($cordialidad4); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="cordialidad4" class="font-medium text-gray-700">No reduce el conflicto frente a cliente alterados</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">4 - Gestión de plantillas e información - (<?php echo e($gestionplanillas5); ?>)</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionplanillas1" name="gestionplanillas1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionplanillas1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionplanillas1" class="font-medium text-gray-700">No Entrega la información de manera ordenada</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionplanillas2" name="gestionplanillas2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionplanillas2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionplanillas2" class="font-medium text-gray-700">Usa plantillas o imágenes en exceso</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionplanillas3" name="gestionplanillas3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionplanillas3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionplanillas3" class="font-medium text-gray-700">Usa plantillas o información irrelevantes para la gestión</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionplanillas4" name="gestionplanillas4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionplanillas4); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionplanillas4" class="font-medium text-gray-700">Vuelve a solicitar la misma información mas de una vez</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">5 - Ortografía y redacción - (<?php echo e($ortografia7); ?>)</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionplanillas1" name="gestionplanillas1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionplanillas1" class="font-medium text-gray-700">Errores de escrituras y aplicación de reglas ortográficas (español)</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionplanillas2" name="gestionplanillas2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionplanillas2" class="font-medium text-gray-700">Errores semánticos y/o sintácticos</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionplanillas3" name="gestionplanillas3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionplanillas3" class="font-medium text-gray-700">Escritura incorrecta de palabras técnicas o de origen extranjero</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionplanillas4" name="gestionplanillas4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia4); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionplanillas4" class="font-medium text-gray-700">Mal uso de reglas de puntuación (puntos y coma)</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionplanillas4" name="gestionplanillas4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia5); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionplanillas4" class="font-medium text-gray-700">Mal uso del acento diacrítico</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionplanillas4" name="gestionplanillas4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia6); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionplanillas4" class="font-medium text-gray-700">Uso incorrecto de Mayúsculas/Minúsculas</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>

                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">6 - Se refiere al Cliente por su nombre - (<?php echo e($personalizacion4); ?>)</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="personalizacion1" name="personalizacion1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($personalizacion1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="personalizacion1" class="font-medium text-gray-700">No personaliza durante la conversación</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="personalizacion2" name="personalizacion2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($personalizacion2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="personalizacion2" class="font-medium text-gray-700">Trata al cliente por un nombre/usuario erróneo</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="personalizacion3" name="personalizacion3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($personalizacion3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="personalizacion3" class="font-medium text-yellow-500">N/A Cliente no entrega el nombre</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">7 - Proyecta seguridad y dominio de la información - (<?php echo e($seguridad3); ?>)</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="seguridad1" name="seguridad1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($seguridad1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="seguridad1" class="font-medium text-gray-700">Proyecta inseguridad o falta de conocimientos</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="seguridad2" name="seguridad2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($seguridad2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="seguridad2" class="font-medium text-gray-700">Se autocorrige o se contradice en la conversación</label>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">8 - Maneja correctamente los tiempos de espera - (<?php echo e($manejosilecios4); ?>)</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="manejosilecios1" name="manejosilecios1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($manejosilecios1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="manejosilecios1" class="font-medium text-gray-700">No menciona la necesidad de dejar en espera</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="manejosilecios2" name="manejosilecios2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($manejosilecios2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="manejosilecios2" class="font-medium text-gray-700">No retoma la conversación en los tiempos definidos</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="manejosilecios3" name="manejosilecios3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($manejosilecios3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="manejosilecios3" class="font-medium text-gray-700">No agradece el tiempo de espera</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">9 - Asegura la comprensión de información entregada - (<?php echo e($aseguramiento4); ?>)</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="aseguramiento1" name="aseguramiento1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($aseguramiento1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="aseguramiento1" class="font-medium text-gray-700">No realiza aseguramiento de lo informado</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="aseguramiento2" name="aseguramiento2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($aseguramiento2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="aseguramiento2" class="font-medium text-gray-700">No realiza resumen de condiciones comerciales nuevas</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="aseguramiento3" name="aseguramiento3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($aseguramiento3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="aseguramiento3" class="font-medium text-gray-700">No confirma aceptación explícita de cambios comerciales</label>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">10 - Ofrece nuevos productos/servicios - (<?php echo e($ofrecimiento7); ?>)</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimiento1" name="ofrecimiento1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ofrecimiento1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimiento1" class="font-medium text-gray-700">No realiza ofrecimiento comercial a titular</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimiento2" name="ofrecimiento2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ofrecimiento2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimiento2" class="font-medium text-gray-700">No argumenta o intenta revertir objeciones</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimiento3" name="ofrecimiento3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ofrecimiento3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimiento3" class="font-medium text-gray-700">Realiza ofrecimiento comercial a usuario no autorizado</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimiento4" name="ofrecimiento4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ofrecimiento4); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimiento4" class="font-medium text-yellow-500">N/A No cumple cond. Comerciales para ofrecer</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimiento5" name="ofrecimiento5" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ofrecimiento5); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimiento5" class="font-medium text-yellow-500">N/A Sin factibilidad técnica</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="ofrecimiento6" name="ofrecimiento6" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ofrecimiento6); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="ofrecimiento6" class="font-medium text-yellow-500">N/A Problemas técnicos o comeciales pendientes</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 md:mt-0 md:col-span-1 ">
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Atributos PEC</p>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">Usuario</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_deteccion" name="pecu_deteccion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_deteccion); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_deteccion" class="font-medium text-gray-700">Error grave en la detección de necesidades y en el analisis de la información</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_infocorrecta" name="pecu_infocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_infocorrecta); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_infocorrecta" class="font-medium text-gray-700">Error grave en la gestión por Info incorrecta o incompleta</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_procedimiento" name="pecu_procedimiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_procedimiento); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_procedimiento" class="font-medium text-gray-700">Error grave en la gestión por no resolver o resolver de forma errónea</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_pocoprofesional" name="pecu_pocoprofesional" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_pocoprofesional); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_pocoprofesional" class="font-medium text-gray-700">Atención Irrespetuosa y Gestión poco Profesional</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_manipulacliente" name="pecu_manipulacliente" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_manipulacliente); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_manipulacliente" class="font-medium text-gray-700">Manipula al Cliente para concretar venta</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecu_cierreinteraccion" name="pecu_cierreinteraccion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_cierreinteraccion); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecu_cierreinteraccion" class="font-medium text-gray-700">Cierre anticipado de la Interacción</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">Negocio</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_redaccion" name="pecn_redaccion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_redaccion); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_redaccion" class="font-medium text-gray-700">Redacción</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_ortografia" name="pecn_ortografia" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_ortografia); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_ortografia" class="font-medium text-gray-700">Ortografía</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_beneficio" name="pecn_beneficio" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_beneficio); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_beneficio" class="font-medium text-gray-700">Entrega Beneficio o Excepción comercial fuera de Procedimiento</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_fraude" name="pecn_fraude" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_fraude); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_fraude" class="font-medium text-gray-700">Fraude</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_nosondea" name="pecn_nosondea" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_nosondea); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_nosondea" class="font-medium text-gray-700">No Sondea motivo de renuncia o no Retiene</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_tipificacion" name="pecn_tipificacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_tipificacion); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_tipificacion" class="font-medium text-gray-700">No Tipifica en sistema o lo realiza de manera incorrecta.</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_factibilidad" name="pecn_factibilidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_factibilidad); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_factibilidad" class="font-medium text-gray-700">Validación de Factibilidad Técnica y Comercial</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecn_otragestion" name="pecn_otragestion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_otragestion); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecn_otragestion" class="font-medium text-gray-700">Otra Gestión Indebida</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">Cumplimiento</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_infoconfidencial" name="pecc_infoconfidencial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecc_infoconfidencial); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_infoconfidencial" class="font-medium text-gray-700">Entrega información confidencial</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_novalidadatos" name="pecc_novalidadatos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecc_novalidadatos); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_novalidadatos" class="font-medium text-gray-700">No valida correctamente los datos personales del Cliente</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_cierre" name="pecc_cierre" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecc_cierre); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_cierre" class="font-medium text-gray-700">No realiza cierre de negocio según procedimiento</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="pecc_infoerronea" name="pecc_infoerronea" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecc_infoerronea); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="pecc_infoerronea" class="font-medium text-gray-700">Omite o Indica erróneamente información que es regulada legalmente</label>
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="pt-6"></div>
                            <div class="shadow overflow-hidden sm:rounded-md">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <p class="font-bold text-xl">Caracterización Complementaria</p>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">Asistente Virtual</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="asistentevirtual1" name="asistentevirtual1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($asistentevirtual1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="asistentevirtual1" class="font-medium text-gray-700">No comprende el motivo del Cliente</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="asistentevirtual2" name="asistentevirtual2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($asistentevirtual2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="asistentevirtual2" class="font-medium text-gray-700">Cliente insiste mas de una vez en contacto con ejecutivo</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="asistentevirtual3" name="asistentevirtual3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($asistentevirtual3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="asistentevirtual3" class="font-medium text-gray-700">Deriva de forma incorrecta al ejecutivo</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">Gestiones anteriores</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionesanteriores1" name="gestionesanteriores1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionesanteriores1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionesanteriores1" class="font-medium text-gray-700">Abandonos previos por parte de otros ejecutivos</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionesanteriores2" name="gestionesanteriores2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionesanteriores2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionesanteriores2" class="font-medium text-gray-700">Abandonos previos por parte del Cliente</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="gestionesanteriores3" name="gestionesanteriores3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionesanteriores3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="gestionesanteriores3" class="font-medium text-gray-700">Más de una conversación reciente por el mismo motivo (NO FCR)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <legend class="text-base font-medium text-gray-900">Usuarios</legend>
                                        <div class="mt-4 space-y-4">
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="usuarios1" name="usuarios1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($usuarios1); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="usuarios1" class="font-medium text-gray-700">Cliente molesto por la atención de la asistente virtual</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="usuarios2" name="usuarios2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($usuarios2); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="usuarios2" class="font-medium text-gray-700">Cliente molesto por la atención de los ejecutivos del canal</label>
                                                </div>
                                            </div>
                                            <div class="flex items-start">
                                                <div class="flex items-center h-5">
                                                    <input id="usuarios3" name="usuarios3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($usuarios3); ?>>
                                                </div>
                                                <div class="ml-3 text-sm">
                                                    <label for="usuarios3" class="font-medium text-gray-700">Cliente solicita ser contactado telefónicamente</label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <button type="submit" name="form2" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        <!-- Heroicon name: check -->
                                        <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                        Guardar Evaluación
                                    </button>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
<?php /**PATH C:\wamp64\www\sdmweb\resources\views/livewire/pauta-whatsapp.blade.php ENDPATH**/ ?>