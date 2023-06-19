<div class="panel panel-default">
    <div class="panel-heading">
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $user)): ?>
        <div class="pull-right" style="margin: -3px -6px">
            <?php if(Auth::user()->role=='admin'): ?>
            <?php echo e(link_to_route('users.show', __('user.add_child'), [$user->id, 'action' => 'add_child'], ['class' => 'btn btn-success btn-xs'])); ?>

            <?php else: ?>
            <div></div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <h3 class="panel-title"><?php echo e(__('user.childs')); ?> (<?php echo e($user->childs->count()); ?>)</h3>
    </div>

    <ul class="list-group">
        <?php $__empty_1 = true; $__currentLoopData = $user->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <li class="list-group-item">
                <?php echo e($child->profileLink()); ?> (<?php echo e($child->gender); ?>)
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <li class="list-group-item"><?php echo e(__('app.childs_were_not_recorded')); ?></li>
        <?php endif; ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', $user)): ?>
        <?php if(request('action') == 'add_child'): ?>
        <li class="list-group-item">
            <?php echo e(Form::open(['route' => ['family-actions.add-child', $user->id]])); ?>

            <div class="row">
                <div class="col-md-8">
                    <?php echo FormField::text('add_child_name', ['label' => __('user.child_name')]); ?>

                </div>
                <div class="col-md-4">
                    <?php echo FormField::radios('add_child_gender_id', [1 => __('app.male'), 2 => __('app.female')], ['label' => __('user.child_gender')]); ?>

                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <?php echo FormField::select('add_child_parent_id', $usersMariageList, ['label' => __('user.add_child_from_existing_couples', ['name' => $user->name]), 'placeholder' => __('app.unknown')]); ?>

                </div>
                <div class="col-md-4">
                    <?php echo FormField::text('add_child_birth_order', ['label' => __('user.birth_order'), 'type' => 'number', 'min' => 1]); ?>

                </div>
            </div>

            <?php echo e(Form::submit(__('user.add_child'), ['class' => 'btn btn-success btn-sm'])); ?>

            <?php echo e(link_to_route('users.show', __('app.cancel'), [$user->id], ['class' => 'btn btn-default btn-sm'])); ?>

            <?php echo e(Form::close()); ?>

        </li>
        <?php endif; ?>
        <?php endif; ?>
    </ul>
</div>
<?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/partials/childs.blade.php ENDPATH**/ ?>