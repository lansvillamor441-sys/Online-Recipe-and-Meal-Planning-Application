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
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e($mealplan->week_name); ?> - Meal Plan
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <!-- Shopping List Button -->
            <div class="mb-4">
                <a href="<?php echo e(route('mealplans.shopping-list', $mealplan)); ?>"
                   class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">
                    🛒 View Shopping List
                </a>
            </div>

            <!-- Meal Plan Recipes -->
            <div class="bg-white shadow-sm rounded p-4">
                <?php if($mealplan->items->count() == 0): ?>
                    <p>No recipes added to this meal plan yet.</p>
                <?php else: ?>
                    <?php $__currentLoopData = $mealplan->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="border-b py-3">
                            <h3 class="text-lg font-bold">
                                <?php echo e($item->meal_type); ?> - <?php echo e($item->day); ?>

                            </h3>
                            <p class="text-gray-700"><?php echo e($item->recipe->title); ?></p>
                            <p class="text-sm text-gray-500">Cuisine: <?php echo e($item->recipe->cuisine ?? 'N/A'); ?></p>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>

            <!-- Back Button -->
            <div class="mt-4">
                <a href="<?php echo e(route('mealplans.index')); ?>" 
                   class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                    ← Back to Meal Plans
                </a>
            </div>

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
<?php /**PATH C:\jobelle\recipe_meal_planner\resources\views/mealplans/show.blade.php ENDPATH**/ ?>