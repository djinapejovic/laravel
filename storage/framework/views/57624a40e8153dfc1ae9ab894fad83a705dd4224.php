<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title'); ?> 
        Create clothe
     <?php $__env->endSlot(); ?>
    <div class='container'>
        <div class="row mt-2">
            <h1>Create new clothe</h1>
        </div>
        <div class='row mt-2'>
            <div class="col-12">
                <form action="/clothes" method="post">
                
                    <?php echo csrf_field(); ?>
                    <label>Name</label>
                    <input type="text" name="name" required class='form-control'>
                    <label>Price</label>
                    <input type="number" min='100' name="price" required class='form-control'>
                    <label>Category</label>
                    <select name="category_id" required class='form-control'>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>">
                            <?php echo e($category->name); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <label>Description</label>
                    <textarea required name="description" class='form-control' cols="30" rows="10"></textarea>
                    <button class='btn btn-primary form-control mt-2'>Save</button>
                </form>
            </div>

        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\domaci\laravel domaci\gotovo\odeca\resources\views/createClothe.blade.php ENDPATH**/ ?>