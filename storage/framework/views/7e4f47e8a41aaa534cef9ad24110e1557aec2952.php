
<?php $__env->startSection('title', __('user.upcoming_birthday')); ?>
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <style>
            .row {
                margin-right: 0px;
                margin-left: 9%;
            }

            .card-body {
                -ms-flex: 1 1 auto;
                flex: 1 1 auto;
                min-height: 1px;
                padding: 3px;
            }

            .card {
                width: 18rem;
                margin: 5px;
            }
        </style>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo e(asset('company_image' . '/' . $project->company_image)); ?>" alt="Card image cap">
            <div class="card-body">
                <h6 class="card-title">المالك: <a href="<?php echo e(route('users.show', $project->user_id)); ?>">
                        <?php echo e($project['user']['name']); ?></a></h6>
                <h5 class="card-title"><?php echo e($project->company_name); ?></h5>
                <p class="card-text"><?php echo e($project->company_address); ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">الهاتف: <?php echo e($project->company_phone); ?> </li>

            </ul>
            <div class="card-body">
                <?php if($project->company_facebook == null): ?>
                <?php else: ?>
                    <a href="<?php echo e($project->company_facebook); ?>" class="card-link btn btn-info">فبسبوك</a>
                <?php endif; ?>
                <?php if($project->company_twitter == null): ?>
                <?php else: ?>
                    <a href="<?php echo e($project->company_twitter); ?>" class="card-link btn btn-info">تويتر</a>
                <?php endif; ?>
                <?php if($project->company_instagram == null): ?>
                <?php else: ?>
                    <a href="<?php echo e($project->company_instagram); ?>" class="card-link btn btn-info">انستقرام</a>
                <?php endif; ?>

            </div>
            <?php if($project->company_links == null): ?>
            <?php else: ?>
                <div class="card-body">
                    <a href="<?php echo e($project->company_links); ?>" class="card-link btn btn-success">لنكات اخري</a>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/project/project_all.blade.php ENDPATH**/ ?>