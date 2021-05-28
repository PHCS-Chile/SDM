<div>
    
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        
        
        <p class="font-bold p-4 bg-gray-200 text-gray-700"><?php echo e($asignacionfinal->agente->name); ?> - <?php echo e($rutejecutivo); ?></p>


        
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID Evaluación
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <p>Estado</p>
                <div class="col-span-6 sm:col-span-3">
                    
                    <select id="filtroEstado" name="filtroEstado" autocomplete="" wire:model="filtroEstado" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="0">Todos</option>
                        <?php $__currentLoopData = $estados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($estado->id); ?>"><?php echo e($estado->name); ?></option>                        
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>                   
                </div> 
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <p>Chat</p>
                <div class="col-span-6 sm:col-span-3">
                    
                    <select id="filtroChat" name="filtroChat" wire:model="filtroChat" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option>Todos</option>
                        <option>Con Chat</option>
                        <option>Sin Chat</option>            
                    </select>
                </div> 
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Fecha Chat
            </th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                <div class="pt-2 relative mx-auto text-gray-600">
                <input class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-xs-sm focus:outline-none" type="search" name="search" placeholder="Móvil" wire:model="searchMovil">                
              </div>
            </th>           

            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ConnID
            </th>            
            <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Ir</span>
            </th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">   
          
        <?php $__currentLoopData = $evaluaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $evaluacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            
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
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                      <?php echo e($evaluacion->id); ?>

                    </span>
                </td>                
                <td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full <?php echo e(( $evaluacion->estado->id == 2) ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800'); ?>">
                      <?php echo e($evaluacion->estado->name); ?>

                    </span>
                    
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <?php if($evaluacion->image_path): ?>                        
                        
                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>

                    <?php endif; ?>                    
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?php echo e($evaluacion->fecha_grabacion); ?></div>
                </td>                
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?php echo e($evaluacion->movil); ?></div>
                </td>
               
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-900"><?php echo e($evaluacion->connid); ?></div>
                </td>                
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="<?php echo e(route('evaluacions.index', ['evaluacionid'=>$evaluacion->id])); ?>" class="text-indigo-600 hover:text-indigo-900">Ir</a>
                </td>
            </tr>
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <!-- More items... -->
        </tbody>
    </table>
</div>
<?php /**PATH C:\wamp64\www\sdmweb\resources\views/livewire/ejecutivo-evaluaciones.blade.php ENDPATH**/ ?>