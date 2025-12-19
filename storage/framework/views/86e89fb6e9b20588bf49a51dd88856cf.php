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
            ✏️ Edit Recipe
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow rounded p-6">

                <!-- Validation Errors -->
                <?php if($errors->any()): ?>
                    <div class="mb-4">
                        <ul class="list-disc list-inside text-red-600">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <!-- Edit Recipe Form -->
                <form action="<?php echo e(route('recipes.update', $recipe)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <!-- Recipe Name -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-1">
                            Recipe Name
                        </label>
                        <input
                            type="text"
                            name="name"
                            value="<?php echo e(old('name', $recipe->name)); ?>"
                            class="w-full border rounded px-3 py-2"
                            required
                        >
                    </div>

                    <!-- Ingredients -->
                    <div class="mb-4">
                        <label class="block text-gray-700 font-semibold mb-1">
                            Ingredients
                        </label>
                        <textarea
                            name="ingredients"
                            rows="4"
                            class="w-full border rounded px-3 py-2"
                            required
                        ><?php echo e(old('ingredients', $recipe->ingredients)); ?></textarea>
                    </div>

                    <!-- Instructions -->
                    <div class="mb-6">
                        <label class="block text-gray-700 font-semibold mb-1">
                            Instructions
                        </label>
                        <textarea
                            name="instructions"
                            rows="5"
                            class="w-full border rounded px-3 py-2"
                            required
                        ><?php echo e(old('instructions', $recipe->instructions)); ?></textarea>
                    </div>

                    <!-- Buttons -->
                    <div class="flex justify-between items-center">

                        <!-- Back Button -->
                        <a href="<?php echo e(route('recipes.index')); ?>"
                           class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded">
                            ← Back
                        </a>

                        <!-- Save Button -->
                        <button type="submit"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded">
                            💾 Update Recipe
                        </button>
                    </div>
                </form>

                <!-- Delete Recipe -->
                <form action="<?php echo e(route('recipes.destroy', $recipe)); ?>"
                      method="POST"
                      class="mt-4"
                      onsubmit="return confirm('Are you sure you want to delete this recipe?');">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>

                    <button type="submit"
                            class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                        🗑 Delete Recipe
                    </button>
                </form>

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
<?php /**PATH C:\Online Recipe and Meal Planning Application\recipe_meal_planner\resources\views/recipes/edit.blade.php ENDPATH**/ ?>