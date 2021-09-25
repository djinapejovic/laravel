<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title'); ?> 
        Clothes
     <?php $__env->endSlot(); ?>
    <div class='container'>
        <div class='row mt-2 mb-2 d-flex justify-content-center'>
            <div class='col-7'>
                <h1>All clothes</h1>
            </div>
            <div class='col-5'>
                <a href="/clothes/create">
                    <button class='btn btn-primary mt-2'>Create</button>
                </a>
            </div>
        </div>
        <?php $__currentLoopData = $clothes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clothe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class='row mt-2 d-flex justify-content-center border-top'>
            <div class='col-8'>
                <h3><?php echo e($clothe->name); ?></h3>
                <span><b>Price</b>: <?php echo e($clothe->price); ?></span>
                <br>
                <span><b>Category</b>: <?php echo e((isset($clothe->category))?$clothe->category->name:'NA'); ?></span>
                <p>
                    <?php echo e($clothe->description); ?>

                </p>
                <a href="/clothes/<?php echo e($clothe->id); ?>">
                    <button class='btn btn-success form-control'>Update</button>
                </a>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\Lazar Milosavljević\Desktop\domaci\laravel domaci\gotovo\clothes\resources\views/clothes.blade.php ENDPATH**/ ?>