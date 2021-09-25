<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title'); ?> 
        Update category
     <?php $__env->endSlot(); ?>
    <div class='container'>
        <div class='row mt-2'>
            <h1>Update category: <?php echo e($category->name); ?></h1>
        </div>
        <div class='row mt-2'>
            <div class='col-8'>
                <form action="/categories/<?php echo e($category->id); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <label>ID</label>
                    <input type="text" readonly class="form-control" value='<?php echo e($category->id); ?>'>
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value='<?php echo e($category->name); ?>'>
                    <button class="form-control btn btn-success mt-2">Save</button>
                    <button name="delete" class="form-control btn btn-danger mt-2">Delete</button>
                </form>
            </div>
        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\Lazar Milosavljević\Desktop\domaci\laravel domaci\nije gotovo\clothes\resources\views/updateCategory.blade.php ENDPATH**/ ?>