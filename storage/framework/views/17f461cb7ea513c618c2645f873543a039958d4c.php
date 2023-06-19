<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">

                <h2 class="page-header">
                    <?php echo e(trans('app.search_your_family')); ?>

                    <?php if(request('q')): ?>
                        <small class="pull-right"><?php echo trans('app.user_found', ['total' => $users->total(), 'keyword' => request('q')]); ?></small>
                    <?php endif; ?>
                </h2>
                <?php echo e(Form::open(['method' => 'get', 'class' => ''])); ?>

                <div class="input-group">
                    <?php echo e(Form::text('q', request('q'), [
                        'class' => 'form-control',
                        'placeholder' => trans('app.search_your_family_placeholder'),
                    ])); ?>

                    <span class="input-group-btn">
                        <?php echo e(Form::submit(trans('app.search'), ['class' => 'btn btn-default'])); ?>

                        <?php echo e(link_to_route('users.search', 'Reset', [], ['class' => 'btn btn-default'])); ?>

                    </span>
                </div>
                <?php echo e(Form::close()); ?>


                <?php if(request('q')): ?>
                    <br>
                    <?php echo e($users->appends(Request::except('page'))->render()); ?>

                    <?php $__currentLoopData = $users->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunkedUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <?php $__currentLoopData = $chunkedUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-3">
                                    <div class="panel panel-default">
                                        <div class="panel-heading text-center">
                                            <?php echo e(userPhoto($user, ['style' => 'width:100%;max-width:300px'])); ?>

                                            <?php if($user->age): ?>
                                                <?php echo $user->age_string; ?>

                                            <?php endif; ?>
                                        </div>
                                        <div class="panel-body">
                                            <h3 class="panel-title"><?php echo e($user->profileLink()); ?> (<?php echo e($user->gender); ?>)</h3>
                                            <div><?php echo e(trans('اسم الشهرة')); ?> : <?php echo e($user->nickname); ?></div>
                                            <hr style="margin: 5px 0;">
                                            <div><?php echo e(trans('user.father')); ?> :
                                                <?php echo e($user->father_id ? $user->father->name : ''); ?>

                                            </div>
                                            <div><?php echo e(trans('user.mother')); ?> :
                                                <?php echo e($user->mother_id ? $user->mother->name : ''); ?>

                                            </div>
                                        </div>
                                        <div class="panel-footer">
                                            <?php echo e(link_to_route(
                                                'users.show',
                                                trans('app.show_profile'),
                                                [$user->id],
                                                [
                                                    'class' => 'btn btn-default
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        btn-xs',
                                                ],
                                            )); ?>

                                            <?php echo e(link_to_route(
                                                'users.chart',
                                                trans('app.show_family_chart'),
                                                [$user->id],
                                                [
                                                    'class' => 'btn
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        btn-default btn-xs',
                                                ],
                                            )); ?>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <?php echo e($users->appends(Request::except('page'))->render()); ?>

                <?php endif; ?>
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span></h4>

                </div>
            </div>
        </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/search.blade.php ENDPATH**/ ?>