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
            <?php echo e(__('Add New Recipe')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded shadow">

            <!-- Display Validation Errors -->
            <?php if($errors->any()): ?>
                <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>- <?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="POST" action="<?php echo e(route('recipes.store')); ?>" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

                <!-- Recipe Title -->
                <div class="mb-4">
                    <label class="block font-medium">Title</label>
                    <input type="text" name="title" class="w-full border rounded p-2" value="<?php echo e(old('title')); ?>" required>
                </div>

                <!-- Ingredients -->
                <div class="mb-4">
                    <label class="block font-medium">Ingredients (one per line)</label>
                    <textarea name="ingredients" class="w-full border rounded p-2" rows="5" required><?php echo e(old('ingredients')); ?></textarea>
                </div>

                <!-- Instructions -->
                <div class="mb-4">
                    <label class="block font-medium">Instructions</label>
                    <textarea name="instructions" class="w-full border rounded p-2" rows="5" required><?php echo e(old('instructions')); ?></textarea>
                </div>

                <!-- Cuisine -->
                <div class="mb-4">
                    <label class="block font-medium">Cuisine</label>
                    <input type="text" name="cuisine" class="w-full border rounded p-2" value="<?php echo e(old('cuisine')); ?>">
                </div>

                <!-- Category -->
                <div class="mb-4">
                    <label class="block font-medium">Category</label>
                    <select name="category" class="w-full border rounded p-2">
                        <option value="Breakfast" <?php echo e(old('category') == 'Breakfast' ? 'selected' : ''); ?>>Breakfast</option>
                        <option value="Lunch" <?php echo e(old('category') == 'Lunch' ? 'selected' : ''); ?>>Lunch</option>
                        <option value="Dinner" <?php echo e(old('category') == 'Dinner' ? 'selected' : ''); ?>>Dinner</option>
                        <option value="Dessert" <?php echo e(old('category') == 'Dessert' ? 'selected' : ''); ?>>Dessert</option>
                    </select>
                </div>

                <!-- Image Upload (optional) -->
                <div class="mb-4">
                    <label class="block font-medium">Recipe Image</label>
                    <input type="file" name="image" accept="image/*">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-green-600 text-black px-4 py-2 rounded hover:bg-green-700">
                    Save Recipe
                </button>
            </form>

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
<?php /**PATH C:\jobelle\recipe_meal_planner\resources\views/recipes/create.blade.php ENDPATH**/ ?>