
<?php $__env->startSection('title', __('user.upcoming_birthday')); ?>
<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $memories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $memory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card" style="margin: 2px; width:96%">
            <h6 class="card-header"><a class="btn btn-info"
                    style="  background-color: #25b3b8;
                border: none;
                color: white;
                padding: 5px 10px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border-radius:100px;
                font-size: 16px;"
                    href="<?php echo e(route('users.show', $memory->user_id)); ?>"><?php echo e($memory['user']['name']); ?></a>
            </h6>
            <h5 class="card-header"><?php echo e($memory->memory_title); ?></h5>
            <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"><?php echo e($memory->memory_description); ?>

                </p>
                <?php if(Auth::user()->id == $memory->user_id): ?>
                    <a href="<?php echo e(route('delete.memory', $memory->id)); ?>" class="btn btn-primary">امسح</a>
                    <a href="<?php echo e(route('edit.memory', $memory->id)); ?>" class="btn btn-primary">تعديل</a>
                <?php else: ?>
                <?php endif; ?>
                <?php if(Auth::user()->role == 'admin'): ?>
                    <a href="<?php echo e(route('delete.memory', $memory->id)); ?>" class="btn btn-primary">امسح</a>
                    <a href="<?php echo e(route('edit.memory', $memory->id)); ?>" class="btn btn-primary">تعديل</a>
                <?php endif; ?>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/memory/memory_all.blade.php ENDPATH**/ ?>