<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo e(__('user.delete')); ?> : <?php echo e($user->name); ?></h3></div>
    <div class="panel-body">
        <table class="table table-condensed">
            <tr><td><?php echo e(__('user.name')); ?></td><td><?php echo e($user->name); ?></td></tr>
            <tr><td><?php echo e(__('user.nickname')); ?></td><td><?php echo e($user->nickname); ?></td></tr>
            <tr><td><?php echo e(__('user.gender')); ?></td><td><?php echo e($user->gender); ?></td></tr>
            <tr><td><?php echo e(__('user.father')); ?></td><td><?php echo e($user->father_id ? $user->father->name : ''); ?></td></tr>
            <tr><td><?php echo e(__('user.mother')); ?></td><td><?php echo e($user->mother_id ? $user->mother->name : ''); ?></td></tr>
            <tr><td><?php echo e(__('user.childs_count')); ?></td><td><?php echo e($childsCount = $user->childs()->count()); ?></td></tr>
            <tr><td><?php echo e(__('user.spouses_count')); ?></td><td><?php echo e($spousesCount = $user->marriages()->count()); ?></td></tr>
            <tr><td><?php echo e(__('user.managed_user')); ?></td><td><?php echo e($managedUserCount = $user->managedUsers()->count()); ?></td></tr>
            <tr><td><?php echo e(__('user.managed_couple')); ?></td><td><?php echo e($managedCoupleCount = $user->managedCouples()->count()); ?></td></tr>
        </table>
        <?php if($childsCount + $spousesCount + $managedUserCount + $managedCoupleCount): ?>
            <?php echo e(__('user.replace_delete_text')); ?>

            <?php echo e(Form::open([
                'route' => ['users.destroy', $user],
                'method' => 'delete',
                'onsubmit' => 'return confirm("'.__('user.replace_confirm').'")',
            ])); ?>

            <?php echo FormField::select('replacement_user_id', $replacementUsers, [
                'label' => false,
                'placeholder' => __('user.replacement'),
            ]); ?>

            <?php echo e(Form::submit(__('user.replace_delete_button'), [
                'name' => 'replace_delete_button',
                'class' => 'btn btn-danger',
            ])); ?>

            <?php echo e(link_to_route('users.edit', __('app.cancel'), [$user], ['class' => 'btn btn-default pull-right'])); ?>

            <?php echo e(Form::close()); ?>

        <?php else: ?>
            <?php echo FormField::delete(
                ['route' => ['users.destroy', $user]],
                __('user.delete_confirm_button'),
                ['class' => 'btn btn-danger'],
                ['user_id' => $user->id]
            ); ?>

            <?php echo e(link_to_route('users.edit', __('app.cancel'), [$user], ['class' => 'btn btn-default'])); ?>

        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/partials/delete_confirmation.blade.php ENDPATH**/ ?>