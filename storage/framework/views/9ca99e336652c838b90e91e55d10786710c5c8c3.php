<!-- Nav tabs -->
<ul class="nav nav-pills nav-stacked">
    <li class="<?php echo e(request('tab') == null ? 'active' : ''); ?>">
        <?php echo link_to_route('users.edit', __('user.edit'), [$user->id]); ?>

    </li>
    <li class="<?php echo e(request('tab') == 'contact_address' ? 'active' : ''); ?>">
        <?php echo link_to_route('users.edit', __('app.address').' &amp; '.__('app.contact'), [$user->id, 'tab' => 'contact_address']); ?>

    </li>
    <li class="<?php echo e(request('tab') == 'login_account' ? 'active' : ''); ?>">
        <?php echo link_to_route('users.edit', __('app.login_account'), [$user->id, 'tab' => 'login_account']); ?>

    </li>
    <li class="<?php echo e(request('tab') == 'death' ? 'active' : ''); ?>">
        <?php echo link_to_route('users.edit', __('user.death'), [$user->id, 'tab' => 'death']); ?>

    </li>
</ul>
<br>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $user)): ?>
<?php echo e(link_to_route('users.edit', __('user.delete'), [$user, 'action' => 'delete'], ['class' => 'btn btn-danger', 'id' => 'del-user-'.$user->id])); ?>

<?php endif; ?>
<?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/partials/edit_nav_tabs.blade.php ENDPATH**/ ?>