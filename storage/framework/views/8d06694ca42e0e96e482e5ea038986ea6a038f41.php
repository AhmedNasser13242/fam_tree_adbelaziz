<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('backend/assets/img/favicon/favicon.ico')); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/fonts/boxicons.css')); ?>" />


    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/css/theme-default.css')); ?>"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/css/demo.css')); ?>" />


    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/libs/apex-charts/apex-charts.css')); ?>" />
    <script src="<?php echo e(asset('backend/assets/vendor/js/helpers.js')); ?>"></script>
    <script src="<?php echo e(asset('backend/assets/js/config.js')); ?>"></script>

    <link rel="stylesheet" href="<?php echo e(asset('backend/assets/vendor/css/core.css')); ?>"
        class="template-customizer-core-css" />

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('custom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('boxicons.min.css ')); ?>">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('ext_css'); ?>
    <style>
        .page-header {
            margin-top: 0px;
        }

        /* * {
            overflow-x: hidden;
        } */

        .row {
            margin-right: -20px;
            margin-left: -10px;
        }
    </style>
</head>

<body>

    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <?php echo $__env->make('layouts.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="layout-page">
                <?php echo $__env->make('layouts.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="content-wrapper">
                    <div class="content-wrapper">
                        <div class="container-xxl flex-grow-1 container-p-y">
                            <div class="row">
                                <?php echo $__env->yieldContent('content'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Scripts -->
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <?php echo $__env->yieldContent('ext_js'); ?>
        <?php echo $__env->yieldContent('script'); ?>
        <script>
            var header = $('h2.page-header').contents();
            str = '';
            mainText = header.filter(function() {
                // return type of text
                return this.nodeType === 3;
            })[0];
            str += mainText.data.trim();

            if (mainText.nextSibling) {
                // next siblings should be a small tag text
                str += " - " + mainText.nextSibling.innerText;
            }
            $('title').prepend(str + " - ");
        </script>

        <script src="<?php echo e(asset('backend/assets/vendor/libs/jquery/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/vendor/libs/popper/popper.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/vendor/js/bootstrap.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/vendor/js/menu.js')); ?>"></script>
        <!-- Vendors JS -->
        <script src="<?php echo e(asset('backend/assets/vendor/libs/apex-charts/apexcharts.js')); ?>"></script>
        <!-- Main JS -->
        <script src="<?php echo e(asset('backend/assets/js/main.js')); ?>"></script>
        <!-- Page JS -->
        <script src="<?php echo e(asset('backend/assets/js/dashboards-analytics.js')); ?>"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <script type="text/javascript"></script>
</body>

</html>
<?php /**PATH C:\MAMP\htdocs\family tree\resources\views/layouts/app.blade.php ENDPATH**/ ?>