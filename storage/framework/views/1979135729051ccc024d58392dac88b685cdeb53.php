<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('users.partials.action-buttons', ['user' => $user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <h2 class="page-header">
        <?php echo e($user->name); ?> <small><?php echo $__env->yieldContent('subtitle'); ?></small>
    </h2>
    <?php echo $__env->yieldContent('user-content'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/layouts/user-profile.blade.php ENDPATH**/ ?>