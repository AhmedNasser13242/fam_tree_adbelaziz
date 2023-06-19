<?php $__env->startSection('content'); ?>
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $couple)): ?>
        <div class="pull-right">
            <?php echo e(link_to_route('couples.edit', trans('couple.edit'), $couple, ['class' => 'btn btn-info'])); ?>

        </div>
    <?php endif; ?>
    <h2 class="page-header">
        <?php echo e($couple->husband->name); ?> & <?php echo e($couple->wife->name); ?> <small><?php echo e(trans('couple.detail')); ?></small>
    </h2>

    <?php echo $__env->make('couples.partials.stat', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <h4 class="page-header"><?php echo e(trans('user.childs')); ?> & <?php echo e(trans('user.grand_childs')); ?></h4>
    <?php if($couple->childs->isEmpty()): ?>
        <i><?php echo e(trans('app.childs_were_not_recorded')); ?></i>
    <?php else: ?>
        <?php $no = 0; ?>
        <?php $__currentLoopData = $couple->childs->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunkedChild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="row">
                <?php $__currentLoopData = $chunkedChild; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <h4><strong><?php echo e(++$no); ?>. <?php echo e($child->profileLink()); ?> (<?php echo e($child->gender); ?>)</strong></h4>
                        <ul style="padding-left: 35px">
                            <?php $__currentLoopData = $child->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($grand->profileLink()); ?> (<?php echo e($grand->gender); ?>)</li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(!$loop->last): ?>
                    <div class="clearfix"></div>
                    <hr>
                <?php endif; ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/couples/show.blade.php ENDPATH**/ ?>