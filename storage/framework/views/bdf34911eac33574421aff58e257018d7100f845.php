<?php $__env->startSection('subtitle', trans('user.marriages')); ?>

<?php $__env->startSection('user-content'); ?>

<div class="row">
    <?php $__currentLoopData = $marriages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marriage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-md-4">
        <div class="panel panel-default">
            <table class="table table-condensed">
                <tr><th class="col-xs-5"><?php echo e(trans('couple.husband')); ?></th><td><?php echo e($marriage->husband->profileLink()); ?></th></tr>
                <tr><th><?php echo e(trans('couple.wife')); ?></th><td><?php echo e($marriage->wife->profileLink()); ?></th></tr>
                <tr><th><?php echo e(trans('couple.marriage_date')); ?></th><td><?php echo e($marriage->marriage_date); ?></th></tr>
                <?php if($marriage->divorce_date): ?>
                <tr><th><?php echo e(trans('couple.divorce_date')); ?></th><td><?php echo e($marriage->divorce_date); ?></th></tr>
                <?php endif; ?>
                <tr><th><?php echo e(trans('couple.childs_count')); ?></th><td><?php echo e($marriage->childs_count); ?></th></tr>
                
            </table>
            <div class="panel-footer">
                <?php echo e(link_to_route('couples.show', trans('couple.show'), [$marriage->id], ['class' => 'btn btn-default btn-xs'])); ?>

            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user-profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/marriages.blade.php ENDPATH**/ ?>