

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1 class="mb-4">Edit Recipe</h1>

    
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?php echo e(route('recipes.update', $recipe->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        
        <div class="mb-3">
            <label class="form-label">Recipe Name</label>
            <input
                type="text"
                name="name"
                class="form-control"
                value="<?php echo e(old('name', $recipe->name)); ?>"
                required
            >
        </div>

        
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea
                name="description"
                class="form-control"
                rows="3"
                required
            ><?php echo e(old('description', $recipe->description)); ?></textarea>
        </div>

        
        <div class="mb-3">
            <label class="form-label">Ingredients</label>
            <textarea
                name="ingredients"
                class="form-control"
                rows="4"
                required
            ><?php echo e(old('ingredients', $recipe->ingredients)); ?></textarea>
        </div>

        
        <div class="mb-3">
            <label class="form-label">Instructions</label>
            <textarea
                name="instructions"
                class="form-control"
                rows="4"
                required
            ><?php echo e(old('instructions', $recipe->instructions)); ?></textarea>
        </div>

        
        <button type="submit" class="btn btn-primary">
            Update Recipe
        </button>

        <a href="<?php echo e(route('recipes.index')); ?>" class="btn btn-secondary">
            Cancel
        </a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\jobelle\recipe_meal_planner\resources\views/recipes/edit.blade.php ENDPATH**/ ?>