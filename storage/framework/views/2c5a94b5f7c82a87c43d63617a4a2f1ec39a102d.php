<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo e(__('app.login_account')); ?></h3></div>
    <div class="panel-body">
        <?php echo FormField::email('email', ['label' => __('auth.email'), 'placeholder' => __('app.example').' nama@mail.com']); ?>

        <?php echo FormField::password('password', ['label' => __('auth.password'), 'placeholder' => '******', 'value' => '']); ?>

    </div>
</div>
<?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/partials/edit_login_account.blade.php ENDPATH**/ ?>