

<?php $__env->startSection('title', __('user.upcoming_birthday')); ?>

<?php $__env->startSection('content'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <div class="page-content">
        <!--breadcrumb-->
        <div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
            <div class="breadcrumb-title pe-3">اضف مشروع</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="p-0 mb-0 breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">اضف مشروع</li>
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

                                <form id="myForm" method="post" action="<?php echo e(route('store.company')); ?>"
                                    enctype="multipart/form-data">
                                    <?php echo csrf_field(); ?>

                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"></h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="hidden" value="<?php echo e($users->id); ?>" name="user_id"
                                                class="form-control" />
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">اسم المشروع</h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="company_name" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">عنوان المشروع </h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="company_address" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">هاتف تواصل </h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="company_phone" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">فيسبوك </h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="company_facebook" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">تويتر </h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="company_twitter" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">انستا </h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="company_instagram" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">لنكات اخري </h6>
                                        </div>
                                        <div class="form-group col-sm-9 text-secondary">
                                            <input type="text" name="company_links" class="form-control" />
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">صورة</h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="file" name="company_image" class="form-control"
                                                id="image" />
                                        </div>
                                    </div>



                                    <div class="mb-3 row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0"> </h6>
                                        </div>
                                        <div class="col-sm-9 text-secondary">
                                            <img id="showImage" src="" alt="Admin"
                                                style="width:100px; height: 100px;">
                                        </div>
                                    </div>





                                    <div class="row">
                                        <div class="col-sm-3"></div>
                                        <div class="col-sm-9 text-secondary">
                                            <input type="submit" class="px-4 btn btn-primary" value="حفظ" />
                                        </div>
                                    </div>
                            </div>

                            </form>



                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/project/project_add.blade.php ENDPATH**/ ?>