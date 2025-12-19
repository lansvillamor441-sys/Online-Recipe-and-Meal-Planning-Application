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
        <h2>My Meal Plans</h2>
     <?php $__env->endSlot(); ?>

    <div class="py-6">
        <a href="<?php echo e(route('mealplans.create')); ?>" class="bg-blue-500 text-black px-4 py-2 rounded">
            ➕ Create New Meal Plan
        </a>

        <div class="mt-6">
            <?php $__empty_1 = true; $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <div class="border-b py-3 flex justify-between">
                    <div>
                        <h3 class="font-bold"><?php echo e($plan->week_name); ?></h3>
                        <p><?php echo e($plan->items->count()); ?> recipes</p>
                    </div>
                    <div class="flex gap-2">
                        <a href="<?php echo e(route('mealplans.show', $plan)); ?>" class="text-blue-600">View</a>
                        <a href="<?php echo e(route('mealplans.edit', $plan)); ?>" class="text-green-600">Edit</a>
                        <form action="<?php echo e(route('mealplans.destroy', $plan)); ?>" method="POST">
                            <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
                            <button class="text-red-600" onclick="return confirm('Delete?')">Delete</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>No meal plans yet.</p>
            <?php endif; ?>
        </div>
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
<?php /**PATH C:\Online Recipe and Meal Planning Application\recipe_meal_planner\resources\views/mealplans/index.blade.php ENDPATH**/ ?>