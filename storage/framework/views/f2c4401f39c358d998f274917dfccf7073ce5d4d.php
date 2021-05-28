<div>
    <div class="flex flex-col max-w-7xl mx-auto sm:px-6 lg:px-8 pt-10">
        <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <p class="font-bold p-4 bg-gray-200 text-gray-700"><?php echo e($asignacionfinal->agente->name); ?></p>
                            <div class="p-2 flex items-start">
                              <div class="flex items-center h-5">
                                <input id="norecorridos" name="norecorridos" type="checkbox" wire:model="filtroNoRecorridos" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                              </div>
                              <div class="ml-3 text-sm">
                                <label for="norecorridos" class="font-medium text-gray-700">Filtra Agentes Recorridos</label>
                              </div>
                            </div>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Ejecutivo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Base
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Chat en Blanco
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Chat Completo
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Chat Descartado
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Ir</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                        <?php $__currentLoopData = $baseasignacions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evaluacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <tr class="
                        <?php $__currentLoopData = $evaluacionescompletas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evaluacioncompleta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($evaluacioncompleta->rut_ejecutivo == $evaluacion->rut_ejecutivo): ?>
                                bg-yellow-50
                                <?php if($filtroNoRecorridos == 1): ?>
                                    hidden
                                <?php endif; ?>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        ">

                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900"><?php echo e($evaluacion->rut_ejecutivo); ?></div>
                            </td>


                            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cuenta-ejecutivo', ['rutejecutivo' => $evaluacion->rut_ejecutivo, 'asignacionid' => $evaluacion->asignacion_id])->html();
} elseif ($_instance->childHasBeenRendered('Mzh6EHo')) {
    $componentId = $_instance->getRenderedChildComponentId('Mzh6EHo');
    $componentTag = $_instance->getRenderedChildComponentTagName('Mzh6EHo');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Mzh6EHo');
} else {
    $response = \Livewire\Livewire::mount('cuenta-ejecutivo', ['rutejecutivo' => $evaluacion->rut_ejecutivo, 'asignacionid' => $evaluacion->asignacion_id]);
    $html = $response->html();
    $_instance->logRenderedChild('Mzh6EHo', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="<?php echo e(route('asignacions.ejecutivoevaluaciones', ['asignacionid'=>$evaluacion->asignacion_id, 'rutejecutivo'=>$evaluacion->rut_ejecutivo])); ?>" class="text-indigo-600 hover:text-indigo-900">Ir</a>
                            </td>

                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- More items... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH C:\wamp64\www\sdmweb\resources\views/livewire/asignacion-index.blade.php ENDPATH**/ ?>