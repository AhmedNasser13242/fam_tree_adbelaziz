
<?php $__env->startSection('title', __('user.upcoming_birthday')); ?>
<?php $__env->startSection('content'); ?>
    <style>
        .col-lg-1,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-5,
        .col-md-6,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-md-10,
        .col-md-11,
        .col-md-12,
        .col-sm-1,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-xs-1,
        .col-xs-2,
        .col-xs-3,
        .col-xs-4,
        .col-xs-5,
        .col-xs-6,
        .col-xs-7,
        .col-xs-8,
        .col-xs-9,
        .col-xs-10,
        .col-xs-11,
        .col-xs-12 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 0px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">اضف ذكري</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">

            </div>
        </div>
        <!--end breadcrumb-->
        <div class="container">
            <div class="main-body">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <form id="myForm" method="post" action="<?php echo e(route('store.memory')); ?>"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"></h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="hidden" value="<?php echo e($user->id); ?>" name="user_id"
                                                class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">عنوان الذكري</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="memory_title" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">القصة او الذكري</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="memory_description" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="px-4 btn btn-info" value="حفظ" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/memory/memory_add.blade.php ENDPATH**/ ?>