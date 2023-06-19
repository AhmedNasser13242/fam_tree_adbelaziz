<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo e(trans('user.profile')); ?></h3>
    </div>
    <div class="panel-body text-center">
        <?php echo e(userPhoto($user, ['style' => 'width:100%;max-width:300px'])); ?>

    </div>
    <table class="table">
        <tbody>
            <tr>
                <th class="col-sm-4"><?php echo e(trans('user.name')); ?></th>
                <td class="col-sm-8"><?php echo e($user->profileLink()); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('user.nickname')); ?></th>
                <td><?php echo e($user->nickname); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('user.gender')); ?></th>
                <td><?php echo e($user->gender); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('user.dob')); ?></th>
                <td><?php echo e($user->dob); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('user.birth_order')); ?></th>
                <td><?php echo e($user->birth_order); ?></td>
            </tr>
            <?php if($user->dod): ?>
                <tr>
                    <th><?php echo e(trans('user.dod')); ?></th>
                    <td><?php echo e($user->dod); ?></td>
                </tr>
            <?php endif; ?>
            <tr>
                <th><?php echo e(trans('user.age')); ?></th>
                <td>
                    <?php if($user->age): ?>
                        <?php echo $user->age_string; ?>

                    <?php endif; ?>
                </td>
            </tr>
            <?php if($user->email): ?>
                <tr>
                    <th><?php echo e(trans('user.email')); ?></th>
                    <td><?php echo e($user->email); ?></td>
                </tr>
            <?php endif; ?>
            <tr>
                <th><?php echo e(trans('user.phone')); ?></th>
                <td><?php echo e($user->phone); ?></td>
            </tr>
            <tr>
                <th><?php echo e(trans('user.address')); ?></th>
                <td><?php echo nl2br($user->address); ?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/partials/profile.blade.php ENDPATH**/ ?>