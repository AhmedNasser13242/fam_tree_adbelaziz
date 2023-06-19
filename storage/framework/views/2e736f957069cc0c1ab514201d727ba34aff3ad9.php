<div class="panel panel-default table-responsive">
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th style="width: 35%"><?php echo e(trans('user.siblings')); ?></th>
                <th class="text-center" colspan="<?php echo e($sibling->childs->count()); ?>"><?php echo e($sibling->profileLink('chart')); ?> (<?php echo e($sibling->gender); ?>)</th>
            </tr>
            <tr>
                <th><?php echo e(trans('user.nieces')); ?> & <?php echo e(trans('user.grand_childs')); ?></th>
                <td>
                    <ol style="padding-left: 15px">
                        <?php $__currentLoopData = $sibling->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="margin-top: 10px;">
                            <?php echo e($child->profileLink('chart')); ?> (<?php echo e($child->gender); ?>)
                            <ul style="padding-left: 18px">
                                <?php $__currentLoopData = $child->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($grand->profileLink('chart')); ?> (<?php echo e($grand->gender); ?>)</li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ol>
                </td>
            </tr>
        </tbody>
    </table>
</div><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/partials/chart-sibling.blade.php ENDPATH**/ ?>