<?php $__env->startSection('subtitle', trans('حساب')); ?>

<?php $__env->startSection('user-content'); ?>
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="row">
                    <div class="col-md-4">
                        <?php echo $__env->make('users.partials.profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="col-md-8">
                        <?php echo $__env->make('users.partials.parent-spouse', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('users.partials.childs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php echo $__env->make('users.partials.siblings', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('ext_css'); ?>
                <link rel="stylesheet" href="<?php echo e(asset('css/plugins/select2.min.css')); ?>">
                <link rel="stylesheet" href="<?php echo e(asset('css/plugins/jquery.datetimepicker.css')); ?>">
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('ext_js'); ?>
                <script src="<?php echo e(asset('js/plugins/select2.min.js')); ?>"></script>
                <script src="<?php echo e(asset('js/plugins/jquery.datetimepicker.js')); ?>"></script>
            <?php $__env->stopSection(); ?>

            <?php $__env->startSection('script'); ?>
                <script>
                    (function() {
                        $('select').select2();
                        $('input[name=marriage_date]').datetimepicker({
                            timepicker: false,
                            format: 'Y-m-d',
                            closeOnDateSelect: true,
                            scrollInput: false
                        });
                    })();
                </script>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user-profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/show.blade.php ENDPATH**/ ?>