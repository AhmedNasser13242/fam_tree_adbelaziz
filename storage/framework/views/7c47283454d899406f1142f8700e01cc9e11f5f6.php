<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo e(trans('auth.change_password')); ?></div>

                <div class="panel-body">
                    <?php if(session('success') or session('error')): ?>
                        <div class="alert alert-<?php echo e(session('success') ? 'success' : 'danger'); ?>">
                            <?php echo e(session('success') ?: session('error')); ?>

                        </div>
                    <?php endif; ?>
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(route('password_update')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group<?php echo e($errors->has('old_password') ? ' has-error' : ''); ?>">
                            <label for="old_password" class="col-md-4 control-label"><?php echo e(trans('auth.old_password')); ?></label>

                            <div class="col-md-6">
                                <input id="old_password" type="password" class="form-control" name="old_password" placeholder="******">

                                <?php if($errors->has('old_password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('old_password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('new_password') ? ' has-error' : ''); ?>">
                            <label for="new_password" class="col-md-4 control-label"><?php echo e(trans('auth.new_password')); ?></label>

                            <div class="col-md-6">
                                <input id="new_password" type="password" class="form-control" name="new_password" placeholder="******">

                                <?php if($errors->has('new_password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('new_password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('new_password_confirmation') ? ' has-error' : ''); ?>">
                            <label for="new_password-confirm" class="col-md-4 control-label"><?php echo e(trans('auth.new_password_confirmation')); ?></label>
                            <div class="col-md-6">
                                <input id="new_password-confirm" type="password" class="form-control" name="new_password_confirmation" placeholder="******">

                                <?php if($errors->has('new_password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('new_password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(trans('auth.change_password')); ?>

                                </button>
                                <a href="<?php echo e(url()->previous()); ?>" class="btn">
                                    <?php echo e(trans('auth.back')); ?>

                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/change-password.blade.php ENDPATH**/ ?>