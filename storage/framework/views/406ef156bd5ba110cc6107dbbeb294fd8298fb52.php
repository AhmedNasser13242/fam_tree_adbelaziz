<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo e(__('user.update_photo')); ?></h3></div>
    <?php echo e(Form::open(['route' => ['users.photo-upload', $user], 'method' => 'patch', 'files' => true])); ?>

    <div class="panel-body text-center">
        <?php echo e(userPhoto($user, ['style' => 'width:100%;max-width:300px'])); ?>

    </div>
    <div class="panel-body">
        <?php echo FormField::file('photo', ['required' => true, 'label' => __('user.reupload_photo'), 'info' => ['text' => 'Format jpg, maks: 200 Kb.', 'class' => 'warning']]); ?>

    </div>
    <div class="panel-footer">
        <?php echo Form::submit(__('user.update_photo'), ['class' => 'btn btn-success']); ?>

        <?php echo e(link_to_route('users.show', __('app.cancel'), [$user], ['class' => 'btn btn-default'])); ?>

    </div>
    <?php echo e(Form::close()); ?>

</div>
<?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/partials/update_photo.blade.php ENDPATH**/ ?>