
<?php $__env->startSection('title', __('user.upcoming_birthday')); ?>
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $memories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $memory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div style="margin: 2px; width:96%" class="card">
            <h5 class="card-header"><?php echo e($memory->memory_title); ?></h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><?php echo e($memory->memory_description); ?>

                </p>
                <?php if(Auth::user()->id == $memory->user_id): ?>
                    <a href="<?php echo e(route('edit.memory', $memory->id)); ?>" class="btn btn-primary">تعديل</a>
                    <a href="<?php echo e(route('delete.memory', $memory->id)); ?>" class="btn btn-primary">امسح</a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/memory/memory_view.blade.php ENDPATH**/ ?>