<?php $__env->startSection('subtitle', trans('app.family_chart')); ?>

<?php $__env->startSection('user-content'); ?>
<div class="panel panel-default table-responsive">
    <table class="table table-bordered table-striped">
        <tbody>
            <tr>
                <th style="width: 9%"><?php echo e(trans('user.grand_father')); ?> & <?php echo e(trans('user.grand_mother')); ?></th>
                <td class="text-center">
                    <?php echo e($fatherGrandpa ? $fatherGrandpa->profileLink('chart') : '?'); ?>

                </td>
                <td class="text-center">
                    <?php echo e($fatherGrandma ? $fatherGrandma->profileLink('chart') : '?'); ?>

                </td>
                <td class="text-center">
                    <?php echo e($motherGrandpa ? $motherGrandpa->profileLink('chart') : '?'); ?>

                </td>
                <td class="text-center">
                    <?php echo e($motherGrandma ? $motherGrandma->profileLink('chart') : '?'); ?>

                </td>
            </tr>
            <tr>
                <th><?php echo e(trans('user.father')); ?> & <?php echo e(trans('user.mother')); ?></th>
                <td class="text-center" colspan="2">
                    <?php echo e($father ? $father->profileLink('chart') : '?'); ?>

                </td>
                <td class="text-center" colspan="2">
                    <?php echo e($mother ? $mother->profileLink('chart') : '?'); ?>

                </td>
            </tr>
            <tr>
                <th>&nbsp;</th>
                <td class="text-center lead" colspan="4">
                    <strong><?php echo e($user->profileLink('chart')); ?> (<?php echo e($user->gender); ?>)</strong>
                </td>
            </tr>
            <tr>
                <th><?php echo e(trans('user.childs')); ?> & <?php echo e(trans('user.grand_childs')); ?></th>
                <td colspan="4">
                    <?php $no = 0; ?>
                    <?php $__currentLoopData = $childs->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunkedChild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="">
                        <?php $__currentLoopData = $chunkedChild; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <h4><strong><?php echo e(++$no); ?>. <?php echo e($child->profileLink('chart')); ?> (<?php echo e($child->gender); ?>)</strong>
                            </h4>
                            <ul style="padding-left: 30px">
                                <?php $__currentLoopData = $child->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($grand->profileLink('chart')); ?> (<?php echo e($grand->gender); ?>)</li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php if(! $loop->last): ?>
                        <div class="clearfix"></div>
                        <hr>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<h4 class="page-header">
    <?php echo e(trans('user.siblings')); ?>, <?php echo e(trans('user.nieces')); ?>, & <?php echo e(trans('user.grand_childs')); ?>

</h4>
<?php $__currentLoopData = $siblings->chunk(3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunkedSiblings): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="row">
    <?php $__currentLoopData = $chunkedSiblings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sibling): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col-sm-4">
        <?php echo $__env->make('users.partials.chart-sibling', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user-profile-wide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/chart.blade.php ENDPATH**/ ?>