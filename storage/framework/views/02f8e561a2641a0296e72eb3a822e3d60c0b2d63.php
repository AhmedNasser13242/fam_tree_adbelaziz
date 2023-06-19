<div class="panel panel-default table-responsive hidden-xs">
    <table class="table table-condensed table-bordered">
        <tr>
            <td class="col-xs-2 text-center"><?php echo e(trans('couple.husband')); ?></td>
            <td class="col-xs-2 text-center"><?php echo e(trans('couple.wife')); ?></td>
            <td class="col-xs-2 text-center"><?php echo e(trans('couple.childs_count')); ?></td>
            <td class="col-xs-2 text-center"><?php echo e(trans('couple.marriage_date')); ?></td>
        </tr>
        <tr>
            <td class="text-center lead" style="border-top: none;"><?php echo e($couple->husband->profileLink()); ?></td>
            <td class="text-center lead" style="border-top: none;"><?php echo e($couple->wife->profileLink()); ?></td>
            <td class="text-center lead" style="border-top: none;"><?php echo e($couple->childs->count()); ?></td>
            <td class="text-center lead" style="border-top: none;"><?php echo e($couple->marriage_date); ?></td>
        </tr>
    </table>
</div>

<ul class="list-group visible-xs">
    <li class="list-group-item">
        <?php echo e(trans('couple.husband')); ?>

        <span class="pull-right"><?php echo e($couple->husband->profileLink()); ?></span>
    </li>
    <li class="list-group-item">
        <?php echo e(trans('couple.wife')); ?>

        <span class="pull-right"><?php echo e($couple->wife->profileLink()); ?></span>
    </li>
    <li class="list-group-item">
        <?php echo e(trans('couple.childs_count')); ?>

        <span class="pull-right"><?php echo e($couple->childs->count()); ?></span>
    </li>
    <li class="list-group-item">
        <?php echo e(trans('couple.marriage_date')); ?>

        <span class="pull-right"><?php echo e($couple->marriage_date); ?></span>
    </li>
</ul><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/couples/partials/stat.blade.php ENDPATH**/ ?>