 <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header'); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
<?php echo e(__('Inicio')); ?>

</h2>
 <?php $__env->endSlot(); ?>
    
    <p class="font-bold text-2xl"></p>
    <div class="flex flex-col mx-auto sm:px-6 lg:px-8 pt-10">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ejecutivo-evaluaciones', ['asignacionid' => $asignacionfinal->id, 'rutejecutivo' => $rutejecutivo])->html();
} elseif ($_instance->childHasBeenRendered('QX0Ygb5')) {
    $componentId = $_instance->getRenderedChildComponentId('QX0Ygb5');
    $componentTag = $_instance->getRenderedChildComponentTagName('QX0Ygb5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QX0Ygb5');
} else {
    $response = \Livewire\Livewire::mount('ejecutivo-evaluaciones', ['asignacionid' => $asignacionfinal->id, 'rutejecutivo' => $rutejecutivo]);
    $html = $response->html();
    $_instance->logRenderedChild('QX0Ygb5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                </div>
            </div>
        </div>
    </div>

    


 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 



<?php /**PATH C:\wamp64\www\sdmweb\resources\views/asignacions/ejecutivoevaluaciones.blade.php ENDPATH**/ ?>