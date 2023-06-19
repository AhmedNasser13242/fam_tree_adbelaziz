<?php $__env->startSection('title', __('user.upcoming_birthday')); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default text-center">
                <div class="panel-heading text-left">
                    <h3 class="panel-title"><?php echo e(__('birthday.upcoming')); ?></h3>
                </div>
                <table class="table table-condensed">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td class="text-left"><?php echo e(__('user.name')); ?></td>
                            <td><?php echo e(__('birthday.birthday')); ?></td>
                            <td><?php echo e(__('user.age')); ?></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                        ?>
                        <?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($no++); ?></td>
                                <td class="text-left"><?php echo e(link_to_route('users.show', $user->name, $user->user_id)); ?></td>
                                <td>
                                    <?php echo e($user->birthday->format('j M')); ?>

                                    (<?php echo e(__('birthday.remaining', ['count' => $user->birthday_remaining])); ?>)
                                </td>
                                <td><?php echo e(__('birthday.age_years', ['age' => $user->age])); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="4"><?php echo e(__('birthday.no_upcoming', ['days' => 60])); ?></td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/birthdays/index.blade.php ENDPATH**/ ?>