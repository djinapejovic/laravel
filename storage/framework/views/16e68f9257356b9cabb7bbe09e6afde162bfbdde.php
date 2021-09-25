<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []]); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title'); ?> 
        Categories
     <?php $__env->endSlot(); ?>

    <div class='container'>
        <div class='row mt-2'>
            <div class='col-7'>
                <table class='table table-dark'>
                    <thead>
                        <tr>
                        
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($category->id); ?></td>
                            <td><?php echo e($category->name); ?></td>
                            <td><?php echo e($category->created_at); ?></td>
                            <td><?php echo e($category->updated_at); ?></td>
                            <td>
                                <a href="/categories/<?php echo e($category->id); ?>">
                                    <button class='btn btn-light'>Update</button>
                                </a>
                            </td>
                        </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <div class='col-5'>
                <form action="/categories" method="post">
                    <?php echo csrf_field(); ?>
                    <label>Name</label>
                    <input type="text" name="name" class='form-control'>
                    <button class='btn btn-primary form-control mt-3'>Create</button>
                </form>
            </div>

        </div>
    </div>
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?><?php /**PATH D:\domaci\laravel domaci\gotovo\odeca\resources\views/categories.blade.php ENDPATH**/ ?>