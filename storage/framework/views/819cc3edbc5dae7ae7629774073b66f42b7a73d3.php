<?php $__env->startSection('subtitle', trans('app.family_tree')); ?>

<?php $__env->startSection('user-content'); ?>

<?php
$childsTotal = 0;
$grandChildsTotal = 0;
$ggTotal = 0;
$ggcTotal = 0;
$ggccTotal = 0;
?>

<div id="wrapper">
    <span class="label"><?php echo e(link_to_route('users.tree', $user->name, [$user->id], ['title' => $user->name.' ('.$user->gender.')'])); ?></span>
        <?php if($childsCount = $user->childs->count()): ?>
        <?php $childsTotal += $childsCount ?>
        <div class="branch lv1">
            <?php $__currentLoopData = $user->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="entry <?php echo e($childsCount == 1 ? 'sole' : ''); ?>">
                <span class="label"><?php echo e(link_to_route('users.tree', $child->name, [$child->id], ['title' => $child->name.' ('.$child->gender.')'])); ?></span>
                <?php if($grandsCount = $child->childs->count()): ?>
                <?php $grandChildsTotal += $grandsCount ?>
                <div class="branch lv2">
                    <?php $__currentLoopData = $child->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="entry <?php echo e($grandsCount == 1 ? 'sole' : ''); ?>">
                        <span class="label"><?php echo e(link_to_route('users.tree', $grand->name, [$grand->id], ['title' => $grand->name.' ('.$grand->gender.')'])); ?></span>
                        <?php if($ggCount = $grand->childs->count()): ?>
                        <?php $ggTotal += $ggCount ?>
                        <div class="branch lv3">
                            <?php $__currentLoopData = $grand->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="entry <?php echo e($ggCount == 1 ? 'sole' : ''); ?>">
                                <span class="label"><?php echo e(link_to_route('users.tree', $gg->name, [$gg->id], ['title' => $gg->name.' ('.$gg->gender.')'])); ?></span>
                                <?php if($ggcCount = $gg->childs->count()): ?>
                                <?php $ggcTotal += $ggcCount ?>
                                <div class="branch lv4">
                                    <?php $__currentLoopData = $gg->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ggc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="entry <?php echo e($ggcCount == 1 ? 'sole' : ''); ?>">
                                        <span class="label"><?php echo e(link_to_route('users.tree', $ggc->name, [$ggc->id], ['title' => $ggc->name.' ('.$ggc->gender.')'])); ?></span>
                                        <?php if($ggccCount = $ggc->childs->count()): ?>
                                        <?php $ggccTotal += $ggccCount ?>
                                        <div class="branch lv5">
                                            <?php $__currentLoopData = $ggc->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ggcc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="entry <?php echo e($ggccCount == 1 ? 'sole' : ''); ?>">
                                                <span class="label"><?php echo e(link_to_route('users.tree', $ggcc->name, [$ggcc->id], ['title' => $ggcc->name.' ('.$ggcc->gender.')'])); ?></span>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="container">
<hr>
<div class="row">
    <div class="col-md-1">&nbsp;</div>
    <?php if($childsTotal): ?>
    <div class="col-md-1 text-right"><?php echo e(trans('app.child_count')); ?></div>
    <div class="col-md-1 text-left"><strong style="font-size:30px"><?php echo e($childsTotal); ?></strong></div>
    <?php endif; ?>
    <?php if($grandChildsTotal): ?>
    <div class="col-md-1 text-right"><?php echo e(trans('app.grand_child_count')); ?></div>
    <div class="col-md-1 text-left"><strong style="font-size:30px"><?php echo e($grandChildsTotal); ?></strong></div>
    <?php endif; ?>
    <?php if($ggTotal): ?>
    <div class="col-md-1 text-right">Jumlah Cicit</div>
    <div class="col-md-1 text-left"><strong style="font-size:30px"><?php echo e($ggTotal); ?></strong></div>
    <?php endif; ?>
    <?php if($ggcTotal): ?>
    <div class="col-md-1 text-right">Jumlah Canggah</div>
    <div class="col-md-1 text-left"><strong style="font-size:30px"><?php echo e($ggcTotal); ?></strong></div>
    <?php endif; ?>
    <?php if($ggccTotal): ?>
    <div class="col-md-1 text-right">Jumlah Wareng</div>
    <div class="col-md-1 text-left"><strong style="font-size:30px"><?php echo e($ggccTotal); ?></strong></div>
    <?php endif; ?>
    <div class="col-md-1">&nbsp;</div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/tree.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user-profile-wide', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/tree.blade.php ENDPATH**/ ?>