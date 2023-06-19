<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><?php echo e(__('app.address')); ?> &amp; <?php echo e(__('app.contact')); ?></h3></div>
    <div class="panel-body">
        <?php echo FormField::textarea('address', ['label' => __('app.address')]); ?>

        <?php echo FormField::text('city', ['label' => __('app.city'), 'placeholder' => __('app.example').' Jakarta']); ?>

        <?php echo FormField::text('phone', ['label' => __('app.phone'), 'placeholder' => __('app.example').' 081234567890']); ?>

    </div>
</div>
<?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/partials/edit_contact_address.blade.php ENDPATH**/ ?>