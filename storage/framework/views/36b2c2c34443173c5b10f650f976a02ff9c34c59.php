<div class="pull-right btn-group" role="group">
    
    <?php if(Auth::user()->role == 'admin'): ?>
        <?php echo e(link_to_route('users.edit', trans('app.edit'), [$user->id], ['class' => 'btn btn-info'])); ?>

    <?php else: ?>
        <div></div>
    <?php endif; ?>
    
    <?php echo e(link_to_route('users.show', trans('app.show_profile') . ' ' . $user->name, [$user->id], ['class' => Request::segment(3) == null ? 'btn btn-default active' : 'btn btn-default'])); ?>

    <?php echo e(link_to_route('users.chart', trans('app.show_family_chart'), [$user->id], ['class' => Request::segment(3) == 'chart' ? 'btn btn-default active' : 'btn btn-default'])); ?>

    <?php echo e(link_to_route('users.tree', trans('app.show_family_tree'), [$user->id], ['class' => Request::segment(3) == 'tree' ? 'btn btn-default active' : 'btn btn-default'])); ?>

    <?php echo e(link_to_route('users.marriages', trans('app.show_marriages'), [$user->id], ['class' => Request::segment(3) == 'marriages' ? 'btn btn-default active' : 'btn btn-default'])); ?>

    <?php if($user->yod): ?>
        <?php echo e(link_to_route('users.death', trans('user.death'), [$user->id], ['class' => Request::segment(3) == 'death' ? 'btn btn-default active' : 'btn btn-default'])); ?>

    <?php endif; ?>

</div>
<?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/partials/action-buttons.blade.php ENDPATH**/ ?>