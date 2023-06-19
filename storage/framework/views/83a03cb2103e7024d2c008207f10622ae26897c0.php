<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo e(trans('user.siblings')); ?></h3></div>
    <table class="table">
        <tbody>
            <?php $__currentLoopData = $user->siblings(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sibling): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td>
                    <?php echo e($sibling->profileLink()); ?> (<?php echo e($sibling->gender); ?>)
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/partials/siblings.blade.php ENDPATH**/ ?>