<div>
    <form wire:submit.prevent="save">

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-2 md:gap-6">
                <div class="mt-5 md:mt-0 md:col-span-1 ">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-green-50 space-y-6 sm:p-6">
                            <p class="font-bold text-xl">Atributos PENC</p>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">1 - Cumple con Scripts de saludo y despedida - (<?php echo e($saludo6); ?>)</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="saludo1" name="saludo1" wire:model.lazy="saludo1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($saludo1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="saludo1" class="font-medium text-gray-700">No saluda o indica nombre al iniciar la conversación</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="saludo2" name="saludo2" wire:model.lazy="saludo2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($saludo2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="saludo2" class="font-medium text-gray-700">No usa preguntas o frases de conexión inicial</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="saludo3" name="saludo3" wire:model.lazy="saludo3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($saludo3); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="saludo3" class="font-medium text-gray-700">No Valida contexto indicado previamente</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="saludo4" name="saludo4" wire:model.lazy="saludo4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($saludo4); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="saludo4" class="font-medium text-gray-700">No se despide y/o realiza de forma poco cordial</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="saludo5" name="saludo5" wire:model.lazy="saludo5" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($saludo5); ?>>
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
                                            <input id="frases1" name="frases1" wire:model.lazy="frases1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($frases1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="frases1" class="font-medium text-gray-700">Utiliza frases formales y/o poco cercanas</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="frases2" name="frases2" wire:model.lazy="frases2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($frases2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="frases2" class="font-medium text-gray-700">Utiliza conceptos técnicos</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="frases3" name="frases3" wire:model.lazy="frases3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($frases3); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="frases3" class="font-medium text-gray-700">Utiliza frases coloquiales y/o abreviaturas</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="frases4" name="frases4" wire:model.lazy="frases4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($frases4); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="frases4" class="font-medium text-gray-700">Utiliza más de un emoticón por comentario</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">3 - Utiliza Frases de Cordialidad y de reducción de conflicto - (<?php echo e($cordialidad5); ?>)</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="cordialidad1" name="cordialidad1" wire:model.lazy="cordialidad1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($cordialidad1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="cordialidad1" class="font-medium text-gray-700">No utiliza frases para expresar disposición para atender</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="cordialidad2" name="cordialidad2" wire:model.lazy="cordialidad2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($cordialidad2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="cordialidad2" class="font-medium text-gray-700">No utiliza frases para manifestar interés frente a dificultades</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="cordialidad3" name="cordialidad3" wire:model.lazy="cordialidad3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($cordialidad3); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="cordialidad3" class="font-medium text-gray-700">No pide disculpas en caso de reclamos de nuestra responsabilidad</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="cordialidad4" name="cordialidad4" wire:model.lazy="cordialidad4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($cordialidad4); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="cordialidad4" class="font-medium text-gray-700">No reduce el conflicto frente a cliente alterados</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">4 - Gestión de información y uso de Plantillas - (<?php echo e($gestionplanillas5); ?>)</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionplanillas1" name="gestionplanillas1" wire:model.lazy="gestionplanillas1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionplanillas1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionplanillas1" class="font-medium text-gray-700">No Entrega la información de manera ordenada</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionplanillas2" name="gestionplanillas2" wire:model.lazy="gestionplanillas2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionplanillas2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionplanillas2" class="font-medium text-gray-700">Vuelve a solicitar la misma información mas de una vez</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionplanillas3" name="gestionplanillas3" wire:model.lazy="gestionplanillas3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionplanillas3); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionplanillas3" class="font-medium text-gray-700">Usa plantillas o imágenes en exceso</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionplanillas4" name="gestionplanillas4" wire:model.lazy="gestionplanillas4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionplanillas4); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionplanillas4" class="font-medium text-gray-700">Usa plantillas o información irrelevantes para la gestión</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">5 - Mantiene una buena redacción y ortografía - (<?php echo e($ortografia7); ?>)</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia1" name="ortografia1" wire:model.lazy="ortografia1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia1" class="font-medium text-gray-700">Errores semánticos y/o sintácticos</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia2" name="ortografia2" wire:model.lazy="ortografia2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia2" class="font-medium text-gray-700">Mal uso de reglas de puntuación (puntos y coma)</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia3" name="ortografia3" wire:model.lazy="ortografia3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia3); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia3" class="font-medium text-gray-700">Errores de escrituras y aplicación de reglas ortográficas (español)</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia4" name="ortografia4" wire:model.lazy="ortografia4" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia4); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia4" class="font-medium text-gray-700">Escritura incorrecta de palabras técnicas o de origen extranjero</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia5" name="ortografia5" wire:model.lazy="ortografia5" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia5); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia5" class="font-medium text-gray-700">Mal uso del acento diacrítico</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ortografia6" name="ortografia6" wire:model.lazy="ortografia6" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ortografia6); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ortografia6" class="font-medium text-gray-700">Uso incorrecto de Mayúsculas/Minúsculas</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">6 - Se refiere al Cliente por su nombre - (<?php echo e($personalizacion4); ?>)</legend>
                                <div class="hidden mt-4">
                                    <span class="text-gray-700">Personalizacion Padre</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="personalizacion4" wire:model.lazy="personalizacion4" value="Si" <?php echo e($personalizacion4 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Si</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="personalizacion4" wire:model.lazy="personalizacion4" value="No" <?php echo e($personalizacion4 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="personalizacion4" wire:model.lazy="personalizacion4" value="No Aplica" <?php echo e($personalizacion4 == "No Aplica" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No Aplica</p>
                                        </label>
                                    </div>
                                    <small class="text-red-600 font-bold"><?php echo e($errors->first('personalizacion4')); ?></small>
                                </div>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="personalizacion1" name="personalizacion1" wire:model.lazy="personalizacion1" wire:click="xpersonalizacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($personalizacion1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="personalizacion1" class="font-medium text-gray-700">No personaliza durante la conversación</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="personalizacion2" name="personalizacion2" wire:model.lazy="personalizacion2" wire:click="xpersonalizacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($personalizacion2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="personalizacion2" class="font-medium text-gray-700">Trata al cliente por un nombre/usuario erróneo</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="personalizacion3" name="personalizacion3" wire:model.lazy="personalizacion3" wire:click="xpersonalizacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($personalizacion3); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="personalizacion3" class="font-medium text-yellow-500">No Aplica</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">7 - Proyecta seguridad y dominio de la información - (<?php echo e($seguridad3); ?>)</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="seguridad1" name="seguridad1" wire:model.lazy="seguridad1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($seguridad1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="seguridad1" class="font-medium text-gray-700">Proyecta inseguridad o falta de conocimientos</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="seguridad2" name="seguridad2" wire:model.lazy="seguridad2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($seguridad2); ?>>
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
                                            <input id="manejosilecios1" name="manejosilecios1" wire:model.lazy="manejosilecios1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($manejosilecios1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="manejosilecios1" class="font-medium text-gray-700">No menciona la necesidad de dejar en espera</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="manejosilecios2" name="manejosilecios2" wire:model.lazy="manejosilecios2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($manejosilecios2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="manejosilecios2" class="font-medium text-gray-700">No retoma la conversación en los tiempos definidos</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="manejosilecios3" name="manejosilecios3" wire:model.lazy="manejosilecios3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($manejosilecios3); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="manejosilecios3" class="font-medium text-gray-700">No agradece el tiempo de espera</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">9 - Realiza aseguramiento de lo informado - (<?php echo e($aseguramiento3); ?>)</legend>
                                <div class="hidden mt-4">
                                    <span class="text-gray-700">Aseguramiento Padre</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="aseguramiento3" wire:model.lazy="aseguramiento3" value="Si" <?php echo e($aseguramiento3 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Si</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="aseguramiento3" wire:model.lazy="aseguramiento3" value="No" <?php echo e($aseguramiento3 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="aseguramiento3" wire:model.lazy="aseguramiento3" value="No Aplica" <?php echo e($aseguramiento3 == "No Aplica" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No Aplica</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('aseguramiento3')); ?></small>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="aseguramiento1" name="aseguramiento1" wire:model.lazy="aseguramiento1" wire:click="xaseguramiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($aseguramiento1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="aseguramiento1" class="font-medium text-gray-700">No realiza aseguramiento de lo informado</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="aseguramiento2" name="aseguramiento2" wire:model.lazy="aseguramiento2" wire:click="xaseguramiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($aseguramiento2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="aseguramiento2" class="font-medium text-yellow-500">No Aplica</label>
                                        </div>
                                    </div>

                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">10 - Ofrece nuevos productos/servicios - (<?php echo e($ofrecimiento5); ?>)</legend>
                                <div class="hidden mt-4">
                                    <span class="text-gray-700">Ofrecimiento Padre</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="ofrecimiento5" wire:model.lazy="ofrecimiento5" value="Si" <?php echo e($ofrecimiento5 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Si</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="ofrecimiento5" wire:model.lazy="ofrecimiento5" value="No" <?php echo e($ofrecimiento5 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="ofrecimiento5" wire:model.lazy="ofrecimiento5" value="No Aplica" <?php echo e($ofrecimiento5 == "No Aplica" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No Aplica</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('ofrecimiento5')); ?></small>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ofrecimiento1" name="ofrecimiento1" wire:model.lazy="ofrecimiento1" wire:click="xofrecimiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ofrecimiento1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ofrecimiento1" class="font-medium text-gray-700">No realiza ofrecimiento comercial a titular</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ofrecimiento2" name="ofrecimiento2" wire:model.lazy="ofrecimiento2" wire:click="xofrecimiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ofrecimiento2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ofrecimiento2" class="font-medium text-gray-700">No argumenta o intenta revertir objeciones</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ofrecimiento3" name="ofrecimiento3" wire:model.lazy="ofrecimiento3" wire:click="xofrecimiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ofrecimiento3); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ofrecimiento3" class="font-medium text-gray-700">Realiza ofrecimiento comercial a usuario no autorizado</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="ofrecimiento4" name="ofrecimiento4" wire:model.lazy="ofrecimiento4" wire:click="xofrecimiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($ofrecimiento4); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="ofrecimiento4" class="font-medium text-yellow-500">No Aplica</label>
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
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">Usuario</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_deteccion" name="pecu_deteccion" wire:model.lazy="pecu_deteccion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_deteccion); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_deteccion" class="font-medium text-gray-700">Error grave en la detección de necesidades y en el analisis de la información</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_infocorrecta" name="pecu_infocorrecta" wire:model.lazy="pecu_infocorrecta" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_infocorrecta); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_infocorrecta" class="font-medium text-gray-700">Error grave en la gestión por Info incorrecta o incompleta</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_procedimiento" name="pecu_procedimiento" wire:model.lazy="pecu_procedimiento" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_procedimiento); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_procedimiento" class="font-medium text-gray-700">Error grave en la gestión por no resolver o resolver de forma errónea</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_pocoprofesional" name="pecu_pocoprofesional" wire:model.lazy="pecu_pocoprofesional" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_pocoprofesional); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_pocoprofesional" class="font-medium text-gray-700">Atención Irrespetuosa y Gestión poco Profesional</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_manipulacliente" name="pecu_manipulacliente" wire:model.lazy="pecu_manipulacliente" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_manipulacliente); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_manipulacliente" class="font-medium text-gray-700">Manipula al Cliente para concretar venta</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_cierreinteraccion" name="pecu_cierreinteraccion" wire:model.lazy="pecu_cierreinteraccion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_cierreinteraccion); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_cierreinteraccion" class="font-medium text-gray-700">Cierre anticipado de la Interacción</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecu_provocacierre" name="pecu_provocacierre" wire:model.lazy="pecu_provocacierre" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecu_provocacierre); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecu_provocacierre" class="font-medium text-gray-700">Provoca o incita el cierre por inactividad</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">Negocio</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_beneficio" name="pecn_beneficio" wire:model.lazy="pecn_beneficio" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_beneficio); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecn_beneficio" class="font-medium text-gray-700">Entrega Beneficio o Excepción comercial fuera de Procedimiento</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_fraude" name="pecn_fraude" wire:model.lazy="pecn_fraude" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_fraude); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecn_fraude" class="font-medium text-gray-700">Fraude</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_nosondea" name="pecn_nosondea" wire:model.lazy="pecn_nosondea" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_nosondea); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecn_nosondea" class="font-medium text-gray-700">No Sondea motivo de renuncia o no Retiene</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_tipificacion" name="pecn_tipificacion" wire:model.lazy="pecn_tipificacion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_tipificacion); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecn_tipificacion" class="font-medium text-gray-700">No Tipifica en sistema o lo realiza de manera incorrecta.</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_factibilidad" name="pecn_factibilidad" wire:model.lazy="pecn_factibilidad" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_factibilidad); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecn_factibilidad" class="font-medium text-gray-700">Validación de Factibilidad Técnica y Comercial</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecn_otragestion" name="pecn_otragestion" wire:model.lazy="pecn_otragestion" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecn_otragestion); ?>>
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
                                            <input id="pecc_infoconfidencial" name="pecc_infoconfidencial" wire:model.lazy="pecc_infoconfidencial" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecc_infoconfidencial); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecc_infoconfidencial" class="font-medium text-gray-700">Entrega información confidencial</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecc_novalidadatos" name="pecc_novalidadatos" wire:model.lazy="pecc_novalidadatos" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecc_novalidadatos); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecc_novalidadatos" class="font-medium text-gray-700">No valida correctamente los datos personales del Cliente</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecc_cierre" name="pecc_cierre" wire:model.lazy="pecc_cierre" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecc_cierre); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="pecc_cierre" class="font-medium text-gray-700">No realiza cierre de negocio según procedimiento</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="pecc_infoerronea" name="pecc_infoerronea" wire:model.lazy="pecc_infoerronea" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($pecc_infoerronea); ?>>
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
                        <div class="px-4 py-5 bg-blue-50 space-y-6 sm:p-6">
                            <p class="font-bold text-xl">Caracterización Complementaria</p>
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">Asistente Virtual</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="asistentevirtual1" name="asistentevirtual1" wire:model.lazy="asistentevirtual1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($asistentevirtual1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="asistentevirtual1" class="font-medium text-gray-700">No comprende el motivo del Cliente</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="asistentevirtual2" name="asistentevirtual2" wire:model.lazy="asistentevirtual2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($asistentevirtual2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="asistentevirtual2" class="font-medium text-gray-700">Cliente insiste mas de una vez en contacto con ejecutivo</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="asistentevirtual3" name="asistentevirtual3" wire:model.lazy="asistentevirtual3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($asistentevirtual3); ?>>
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
                                            <input id="gestionesanteriores1" name="gestionesanteriores1" wire:model.lazy="gestionesanteriores1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionesanteriores1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionesanteriores1" class="font-medium text-gray-700">Abandonos previos por parte de otros ejecutivos</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionesanteriores2" name="gestionesanteriores2" wire:model.lazy="gestionesanteriores2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionesanteriores2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="gestionesanteriores2" class="font-medium text-gray-700">Abandonos previos por parte del Cliente</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="gestionesanteriores3" name="gestionesanteriores3" wire:model.lazy="gestionesanteriores3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($gestionesanteriores3); ?>>
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
                                            <input id="usuarios1" name="usuarios1" wire:model.lazy="usuarios1" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($usuarios1); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="usuarios1" class="font-medium text-gray-700">Cliente molesto por la atención de la asistente virtual</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="usuarios2" name="usuarios2" wire:model.lazy="usuarios2" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($usuarios2); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="usuarios2" class="font-medium text-gray-700">Cliente molesto por la atención de los ejecutivos del canal</label>
                                        </div>
                                    </div>
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="usuarios3" name="usuarios3" wire:model.lazy="usuarios3" type="checkbox" value="checked" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" <?php echo e($usuarios3); ?>>
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="usuarios3" class="font-medium text-gray-700">Cliente solicita ser contactado telefónicamente</label>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>




                        </div>

                    </div>
                    <div class="pt-6">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <div>
                                    <label for="comentario_interno" class="block text-sm font-medium text-gray-700">
                                        Comentario Interno
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="comentario_interno" name="comentario_interno" wire:model.lazy="comentario_interno" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-30 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la descripción del caso"><?php echo e($comentario_interno); ?></textarea>
                                    </div>
                                </div>


                                <div>
                                    <label for="retroalimentacion" class="block text-sm font-medium text-gray-700">
                                        Retroalimentación
                                    </label>
                                    <div class="mt-1">
                                        <textarea id="retroalimentacion" name="retroalimentacion" wire:model.lazy="retroalimentacion" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 h-48 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Escribe aquí la retroalimentación"><?php echo e($retroalimentacion); ?></textarea>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('retroalimentacion')); ?></small>
                                <div></div>
                                <button type="submit"  wire:click="save" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    <!-- Heroicon name: check -->
                                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                    Guardar Evaluación
                                </button>
                                <?php if(Auth::user()->perfil  == 1 && $marca_ici == 0): ?>
                                    <div>
                                        <button type="submit"  wire:click="ici" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            <!-- Heroicon name: check -->
                                            <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                            </svg>
                                            Discrepancia %
                                        </button>
                                    </div>
                                <?php endif; ?>


                                <div wire:loading>
                                    Guardando...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="mb-10 pt-6">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="mt-5 md:mt-0 md:col-span-1 ">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <p class="font-bold text-xl">Gestión 1</p>
                                <div class="mt-4">
                                    <span class="text-gray-700">Motivo del Llamado</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="motivo" wire:model.lazy="motivo" value="Reclamo" <?php echo e($motivo == "Reclamo" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Reclamo</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="motivo" wire:model.lazy="motivo" value="Consulta" <?php echo e($motivo == "Consulta" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Consulta</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="motivo" wire:model.lazy="motivo" value="Requerimiento" <?php echo e($motivo == "Requerimiento" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Requerimiento</p>
                                        </label>
                                    </div>
                                    <small class="text-red-600 font-bold"><?php echo e($errors->first('motivo')); ?></small>
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="gestion1" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                    <select id="gestion1" name="gestion1" wire:model.lazy="gestion1" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        <?php $__currentLoopData = $gestiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($gestion->name); ?>" <?php echo e(( $gestion->name == $gestion1) ? 'selected' : ''); ?>>
                                                <?php echo e($gestion->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('gestion1')); ?></small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Detección de necesidades/sondeo/analisis/revisión</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="deteccion1" wire:model.lazy="deteccion1" value="Si" <?php echo e($deteccion1 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="deteccion1" wire:model.lazy="deteccion1" value="No" <?php echo e($deteccion1 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('deteccion1')); ?></small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Entrega de información correcta y completa</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="infocorrecta1" wire:model.lazy="infocorrecta1" value="Si" <?php echo e($infocorrecta1 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="infocorrecta1" wire:model.lazy="infocorrecta1" value="No" <?php echo e($infocorrecta1 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('infocorrecta1')); ?></small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Gestiona según proced. en sistema</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="procedimiento1" wire:model.lazy="procedimiento1" value="Si" <?php echo e($procedimiento1 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="procedimiento1" wire:model.lazy="procedimiento1" value="No" <?php echo e($procedimiento1 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('procedimiento1')); ?></small>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="resolucion1" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                    <select id="resolucion1" name="resolucion1" wire:model.lazy="resolucion1" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        <?php $__currentLoopData = $resoluciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resolucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($resolucion->name); ?>" <?php echo e(( $resolucion->name == $resolucion1) ? 'selected' : ''); ?>>
                                                <?php echo e($resolucion->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('resolucion1')); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-1 ">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <p class="font-bold text-xl">Gestión 2</p>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="gestion2" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                    <select id="gestion2" name="gestion2" wire:model.lazy="gestion2" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        <?php $__currentLoopData = $gestiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($gestion->name); ?>" <?php echo e(( $gestion->name == $gestion2) ? 'selected' : ''); ?>>
                                                <?php echo e($gestion->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('gestion2')); ?></small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Detección de necesidades/sondeo/analisis/revisión</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="deteccion2" wire:model.lazy="deteccion2" value="Si" <?php echo e($deteccion2 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="deteccion2" wire:model.lazy="deteccion2" value="No" <?php echo e($deteccion2 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('deteccion2')); ?></small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Entrega de información correcta y completa</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="infocorrecta2" wire:model.lazy="infocorrecta2" value="Si" <?php echo e($infocorrecta2 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="infocorrecta2" wire:model.lazy="infocorrecta2" value="No" <?php echo e($infocorrecta2 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('infocorrecta2')); ?></small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Gestiona según proced. en sistema</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="procedimiento2" wire:model.lazy="procedimiento2" value="Si" <?php echo e($procedimiento2 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="procedimiento2" wire:model.lazy="procedimiento2" value="No" <?php echo e($procedimiento2 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('procedimiento2')); ?></small>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="resolucion2" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                    <select id="resolucion2" name="resolucion2" wire:model.lazy="resolucion2" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        <?php $__currentLoopData = $resoluciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resolucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($resolucion->name); ?>" <?php echo e(( $resolucion->name == $resolucion2) ? 'selected' : ''); ?>>
                                                <?php echo e($resolucion->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('resolucion2')); ?></small>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5 md:mt-0 md:col-span-1 ">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                <p class="font-bold text-xl">Gestión 3</p>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="gestion3" class="block text-sm font-medium text-gray-700">Tipo de Gestión</label>
                                    <select id="gestion3" name="gestion3" wire:model.lazy="gestion3" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        <?php $__currentLoopData = $gestiones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($gestion->name); ?>" <?php echo e(( $gestion->name == $gestion3) ? 'selected' : ''); ?>>
                                                <?php echo e($gestion->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('gestion3')); ?></small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Detección de necesidades/sondeo/analisis/revisión</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="deteccion3" wire:model.lazy="deteccion3" value="Si" <?php echo e($deteccion3 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="deteccion3" wire:model.lazy="deteccion3" value="No" <?php echo e($deteccion3 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('deteccion3')); ?></small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Entrega de información correcta y completa</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="infocorrecta3" wire:model.lazy="infocorrecta3" value="Si" <?php echo e($infocorrecta3 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="infocorrecta3" wire:model.lazy="infocorrecta3" value="No" <?php echo e($infocorrecta3 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('infocorrecta3')); ?></small>
                                <div class="mt-4">
                                    <span class="text-gray-700">Gestiona según proced. en sistema</span>
                                    <div class="mt-2 text-sm">
                                        <label class="inline-flex items-center">
                                            <input type="radio" class="form-radio" name="procedimiento3" wire:model.lazy="procedimiento3" value="Si" <?php echo e($procedimiento3 == "Si" ? 'checked' : ''); ?>>
                                            <p class="ml-2">Sí</p>
                                        </label>
                                        <label class="inline-flex items-center ml-6">
                                            <input type="radio" class="form-radio" name="procedimiento3" wire:model.lazy="procedimiento3" value="No" <?php echo e($procedimiento3 == "No" ? 'checked' : ''); ?>>
                                            <p class="ml-2">No</p>
                                        </label>
                                    </div>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('procedimiento3')); ?></small>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="resolucion3" class="block text-sm font-medium text-gray-700">Ejecutivo Resuelve el problema de origen en línea</label>
                                    <select id="resolucion3" name="resolucion3" wire:model.lazy="resolucion3" autocomplete="" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option></option>
                                        <?php $__currentLoopData = $resoluciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resolucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($resolucion->name); ?>" <?php echo e(( $resolucion->name == $resolucion3) ? 'selected' : ''); ?>>
                                                <?php echo e($resolucion->name); ?>

                                            </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                                <small class="text-red-600 font-bold"><?php echo e($errors->first('resolucion3')); ?></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php /**PATH C:\wamp64\www\sdmweb_devel\resources\views/livewire/pauta-digital.blade.php ENDPATH**/ ?>