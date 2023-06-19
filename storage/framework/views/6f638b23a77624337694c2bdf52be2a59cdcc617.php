

<?php $__env->startSection('title', __('user.upcoming_birthday')); ?>

<?php $__env->startSection('content'); ?>
    <div class="panel panel-default">
        <!--breadcrumb-->
        <div class="ms-auto">
            <div class="btn-group">
                <a href="<?php echo e(route('add.company', $users->id)); ?>" class="btn btn-primary">اضف مشروع</a>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>عدد المشاريع</th>
                                <th>صاحب المشروع</th>
                                <th>اسم المشروع</th>
                                <th>رقم المشروع</th>
                                <th>صورة</th>
                                <th>فعل</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td> <?php echo e($key + 1); ?> </td>
                                    <td><?php echo e($users->name); ?></td>
                                    <td><?php echo e($item->company_name); ?></td>
                                    <td><?php echo e($item->company_phone); ?></td>
                                    <td> <img src="<?php echo e(asset('company_image' . '/' . $item->company_image)); ?>"
                                            style="width: 70px; height:40px;">
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('edit.company', $item->id)); ?>" class="btn btn-info"><i
                                                class='bx bx-edit bx-tada' style='color:#ffffff'></i></a>


                                        <a href="<?php echo e(route('delete.company', $item->id)); ?>" class="btn btn-danger"
                                            id="delete"><i class='bx bx-trash bx-tada' style='color:#ffffff'></i></a>
                                    </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>عدد المشاريع</th>
                                <th>صاحب المشروع</th>
                                <th>اسم المشروع</th>
                                <th>صورة</th>
                                <th>فعل</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/project/project_view.blade.php ENDPATH**/ ?>