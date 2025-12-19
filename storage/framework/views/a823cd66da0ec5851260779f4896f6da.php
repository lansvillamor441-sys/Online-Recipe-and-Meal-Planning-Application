<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\AppLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2>Create Meal Plan</h2>
     <?php $__env->endSlot(); ?>

    <div class="py-6">
        <form action="<?php echo e(route('mealplans.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-4">
                <label>Week Name</label>
                <input type="text" name="week_name" class="w-full border p-2 rounded" required>
            </div>

            <h3>Select Recipes</h3>
            <div class="grid grid-cols-2 gap-2">
                <?php $__currentLoopData = $recipes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recipe): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="border p-2 rounded">
                        <input type="checkbox" name="items[<?php echo e($loop->index); ?>][recipe_id]" value="<?php echo e($recipe->id); ?>">
                        <input type="hidden" name="items[<?php echo e($loop->index); ?>][day]" value="Monday">
                        <input type="hidden" name="items[<?php echo e($loop->index); ?>][meal_type]" value="Lunch">
                        <?php echo e($recipe->title); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <button class="bg-green-600 text-black px-4 py-2 mt-4 rounded">Save Meal Plan</button>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\jobelle\recipe_meal_planner\resources\views/mealplans/create.blade.php ENDPATH**/ ?>