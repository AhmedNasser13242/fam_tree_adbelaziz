<?php $__env->startSection('content'); ?>
    <?php if(request('action') == 'delete' && $user): ?>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete', $user)): ?>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php echo $__env->make('users.partials.delete_confirmation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <div class="pull-right">
            <?php echo e(link_to_route('users.show', __('app.show_profile') . ' ' . $user->name, [$user->id], ['class' => 'btn btn-default'])); ?>

        </div>
        <h2 class="page-header">
            <?php echo e(__('user.edit')); ?> <?php echo e($user->profileLink()); ?>

        </h2>
        <div class="row">
            <div class="col-md-2"><?php echo $__env->make('users.partials.edit_nav_tabs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
            <div class="col-md-10">
                <div class="row">
                    <?php echo e(Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'patch', 'autocomplete' => 'off'])); ?>

                    <div class="col-md-6">
                        <?php echo $__env->renderWhen(request('tab') == null || !in_array(request('tab'), $validTabs),
                            'users.partials.edit_profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                        <?php echo $__env->renderWhen(request('tab') == 'death', 'users.partials.edit_death', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                        <?php echo $__env->renderWhen(request('tab') == 'contact_address',
                            'users.partials.edit_contact_address', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                        <?php echo $__env->renderWhen(request('tab') == 'login_account', 'users.partials.edit_login_account', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                        <div class="text-right">
                            <?php echo e(Form::submit(__('app.update'), ['class' => 'btn btn-primary'])); ?>

                            <?php echo e(link_to_route('users.show', __('app.cancel'), [$user->id], ['class' => 'btn btn-default'])); ?>

                        </div>
                    </div>
                    <?php echo e(Form::close()); ?>

                    <div class="col-md-6">
                        <?php echo $__env->renderWhen(request('tab') == null || !in_array(request('tab'), $validTabs),
                            'users.partials.update_photo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path'])); ?>
                        <?php if(request('tab') == 'death'): ?>
                            <div id="mapid"></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('ext_css'); ?>
    <link href="<?php echo e(asset('css/plugins/jquery.datetimepicker.css')); ?>" rel="stylesheet">

    <?php if(request('tab') == 'death'): ?>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin="" />

        <style>
            #mapid {
                height: 300px;
            }
        </style>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('js/plugins/jquery.datetimepicker.js')); ?>"></script>
    <?php if(request('tab') == 'death'): ?>
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
    <?php endif; ?>

    <script>
        (function() {
            $('#dob,#dod').datetimepicker({
                timepicker: false,
                format: 'Y-m-d',
                closeOnDateSelect: true,
                scrollInput: false
            });
        })();

        <?php if(request('tab') == 'death'): ?>
            var mapCenter = [<?php echo e($mapCenterLatitude); ?>, <?php echo e($mapCenterLongitude); ?>];
            var map = L.map('mapid').setView(mapCenter, <?php echo e($mapZoomLevel); ?>);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            var marker = L.marker(mapCenter).addTo(map);

            function updateMarker(lat, lng) {
                marker
                    .setLatLng([lat, lng])
                    .bindPopup("Your location :  " + marker.getLatLng().toString())
                    .openPopup();
                return false;
            };

            map.on('click', function(e) {
                let latitude = e.latlng.lat.toString().substring(0, 15);
                let longitude = e.latlng.lng.toString().substring(0, 15);
                $('#cemetery_location_latitude').val(latitude);
                $('#cemetery_location_longitude').val(longitude);
                updateMarker(latitude, longitude);
            });

            var updateMarkerByInputs = function() {
                return updateMarker($('#cemetery_location_latitude').val(), $('#cemetery_location_longitude').val());
            }
            $('#cemetery_location_latitude').on('input', updateMarkerByInputs);
            $('#cemetery_location_longitude').on('input', updateMarkerByInputs);
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/edit.blade.php ENDPATH**/ ?>