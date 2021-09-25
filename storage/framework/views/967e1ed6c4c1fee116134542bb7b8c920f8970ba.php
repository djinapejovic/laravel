<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title'); ?> 
        Update clothe
     <?php $__env->endSlot(); ?>
    <div class='container'>
        <div class="row mt-2">
            <h1>Update clothe: <?php echo e($clothe->name); ?></h1>
        </div>
        <div class='row mt-2'>
            <div class="col-12">
                <form action="/clothes/<?php echo e($clothe->id); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <label>Name</label>
                    <input type="text" name="name" class='form-control' value='<?php echo e($clothe->name); ?>'>
                    <label>Price</label>
                    <input type="number" name="price" class='form-control' value='<?php echo e($clothe->price); ?>'>
                    <label>Category</label>
                    <select name="category_id" class='form-control'>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>" <?php echo e(($clothe->category_id==$category->id)?'selected':''); ?>  >
                            <?php echo e($category->name); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <label>Description</label>
                    <textarea name="description" class='form-control' cols="30" rows="10">
                    <?php echo e($clothe->description); ?>


                    </textarea>
                    <button class='btn btn-success form-control mt-2'>Save</button>
                    <button name='delete' class='btn btn-danger form-control mt-2'>Delete</button>
                </form>
            </div>

        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH C:\Users\Lazar Milosavljević\Desktop\domaci\laravel domaci\gotovo\odeca\resources\views/updateClothe.blade.php ENDPATH**/ ?>