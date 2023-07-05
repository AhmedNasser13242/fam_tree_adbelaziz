<?php $__env->startSection('content'); ?>

<style>
    .label{
        transition: all 0.5s;
                &:hover, &:hover+div div span  {
            background: #c8e4f8; 
            color: #000; 
            border: 1px solid #94a0b4;
        }
    }
</style>


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
    <?php
    $childsTotal = 0;
    $grandChildsTotal = 0;
    $paTotal = 0;
    $ppaTotal = 0;
    $ppaaTotal = 0;
    $pppaaTotal = 0;
    $pppaaaTotal = 0;
    $ppppaaaTotal = 0;
    $ppppaaaaTotal = 0;


    $gcTotal = 0;
    $ggTotal = 0;
    $ggcTotal = 0;
    $ggccTotal = 0;
    $gggccTotal = 0;
    $gggcccTotal = 0;
    $ggggcccTotal = 0;
    $ggggccccTotal = 0;
    $gggggccccTotal = 0;
    $gggggcccccTotal = 0;
    $ggggggcccccTotal = 0;
    $ggggggccccccTotal = 0;
    ?>


    <?php $__currentLoopData = $userss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div id="wrapper">
        <?php
        $father = $user->father_id ? $user->father : $user;
        $fatherGrandpa = $father && $father->father_id ? $father->father : $user;
        $fatherGrandpa_1 = $fatherGrandpa && $fatherGrandpa->father_id ? $fatherGrandpa->father : $user;
        $fatherGrandpa_2 = $fatherGrandpa_1 && $fatherGrandpa_1->father_id ? $fatherGrandpa_1->father : $user;
        $fatherGrandpa_3 = $fatherGrandpa_2 && $fatherGrandpa_2->father_id ? $fatherGrandpa_2->father : $user;
        $fatherGrandpa_4 = $fatherGrandpa_3 && $fatherGrandpa_3->father_id ? $fatherGrandpa_3->father : $user;
        $fatherGrandpa_5 = $fatherGrandpa_4 && $fatherGrandpa_4->father_id ? $fatherGrandpa_4->father : $user;
        ?>


                    <span
                    class="label"><button  style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $fatherGrandpa_5->name, [$fatherGrandpa_5->id], ['title' => $fatherGrandpa_5->name . ' (' . $fatherGrandpa_5->gender . ')'])); ?></button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
                </span>
        <?php if($ppppaaaCount = $fatherGrandpa_4->childs->count()): ?>
        <?php $ppppaaaTotal += $ppppaaaCount; ?>
        <div class="branch lv5">
            <?php $__currentLoopData = $fatherGrandpa_4->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fatherGrandpa5): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="entry <?php echo e($ppppaaaCount == 1 ? 'sole' : ''); ?>">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $fatherGrandpa5->name, [$fatherGrandpa5->id], ['title' => $fatherGrandpa5->name . ' (' . $fatherGrandpa5->gender . ')'])); ?></button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
        <?php if($pppaaaCount = $fatherGrandpa5->childs->count()): ?>
        <?php $pppaaaTotal += $pppaaaCount; ?>
        <div class="branch lv5">
            <?php $__currentLoopData = $fatherGrandpa5->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fatherGrandpa4): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="entry <?php echo e($pppaaaCount == 1 ? 'sole' : ''); ?>">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $fatherGrandpa4->name, [$fatherGrandpa4->id], ['title' => $fatherGrandpa4->name . ' (' . $fatherGrandpa4->gender . ')'])); ?></button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
        <?php if($pppaaCount = $fatherGrandpa4->childs->count()): ?>
        <?php $pppaaTotal += $pppaaCount; ?>
        <div class="branch lv5">
            <?php $__currentLoopData = $fatherGrandpa4->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fatherGrandpa3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="entry <?php echo e($pppaaCount == 1 ? 'sole' : ''); ?>">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $fatherGrandpa3->name, [$fatherGrandpa3->id], ['title' => $fatherGrandpa3->name . ' (' . $fatherGrandpa3->gender . ')'])); ?></button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>

        <?php if($ppaaCount = $fatherGrandpa3->childs->count()): ?>
        <?php $ppaaTotal += $ppaaCount; ?>
        <div class="branch lv5">
            <?php $__currentLoopData = $fatherGrandpa3->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fatherGrandpa2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="entry <?php echo e($ppaaCount == 1 ? 'sole' : ''); ?>">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $fatherGrandpa2->name, [$fatherGrandpa2->id], ['title' => $fatherGrandpa2->name . ' (' . $fatherGrandpa2->gender . ')'])); ?></button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>

        <?php if($ppaCount = $fatherGrandpa->childs->count()): ?>
        <?php $ppaTotal += $ppaCount; ?>
        <div class="branch lv5">
            <?php $__currentLoopData = $fatherGrandpa->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fatherGrandpa1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="entry <?php echo e($ppaCount == 1 ? 'sole' : ''); ?>">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $fatherGrandpa1->name, [$fatherGrandpa1->id], ['title' => $fatherGrandpa1->name . ' (' . $fatherGrandpa1->gender . ')'])); ?></button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
        <?php if($paCount = $fatherGrandpa1->childs->count()): ?>
        <?php $paTotal += $paCount; ?>
        <div class="branch lv5">
            <?php $__currentLoopData = $fatherGrandpa1->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fatherchild): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div
                    class="entry <?php echo e($paCount == 1 ? 'sole' : ''); ?>">
                    <span
                    class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $fatherchild->name, [$fatherchild->id], ['title' => $fatherchild->name . ' (' . $fatherchild->gender . ')'])); ?></button>
                                    <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
        <?php if($childsCount = $fatherchild->childs->count()): ?>
            <?php $childsTotal += $childsCount; ?>
            <div class="branch lv1">
                <?php $__currentLoopData = $fatherchild->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="entry <?php echo e($childsCount == 1 ? 'sole' : ''); ?>">
                        <span
                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $child->name, [$child->id], ['title' => $child->name . ' (' . $child->gender . ')'])); ?></button>
                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                        <?php if($grandsCount = $child->childs->count()): ?>
                            <?php $grandChildsTotal += $grandsCount; ?>
                            <div class="branch lv2">
                                <?php $__currentLoopData = $child->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="entry <?php echo e($grandsCount == 1 ? 'sole' : ''); ?>">
                                        <span
                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $grand->name, [$grand->id], ['title' => $grand->name . ' (' . $grand->gender . ')'])); ?></button>
                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                        <?php if($ggCount = $grand->childs->count()): ?>
                                            <?php $ggTotal += $ggCount; ?>
                                            <div class="branch lv3">
                                                <?php $__currentLoopData = $grand->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="entry <?php echo e($ggCount == 1 ? 'sole' : ''); ?>">
                                                        <span
                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $gg->name, [$gg->id], ['title' => $gg->name . ' (' . $gg->gender . ')'])); ?></button>
                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                        <?php if($ggcCount = $gg->childs->count()): ?>
                                                            <?php $ggcTotal += $ggcCount; ?>
                                                            <div class="branch lv4">
                                                                <?php $__currentLoopData = $gg->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ggc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="entry <?php echo e($ggcCount == 1 ? 'sole' : ''); ?>">
                                                                        <span
                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $ggc->name, [$ggc->id], ['title' => $ggc->name . ' (' . $ggc->gender . ')'])); ?></button>
                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                        <?php if($ggccCount = $ggc->childs->count()): ?>
                                                                            <?php $ggccTotal += $ggccCount; ?>
                                                                            <div class="branch lv5">
                                                                                <?php $__currentLoopData = $ggc->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ggcc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <div
                                                                                        class="entry <?php echo e($ggccCount == 1 ? 'sole' : ''); ?>">
                                                                                        <span
                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $ggcc->name, [$ggcc->id], ['title' => $ggcc->name . ' (' . $ggcc->gender . ')'])); ?></button>
                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                            <?php if($gggccCount = $ggcc->childs->count()): ?>
                                                                            <?php $gggccTotal += $ggccCount; ?>
                                                                            <div class="branch lv5">
                                                                                <?php $__currentLoopData = $ggcc->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gggcc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <div
                                                                                        class="entry <?php echo e($gggccCount == 1 ? 'sole' : ''); ?>">
                                                                                        <span
                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $gggcc->name, [$gggcc->id], ['title' => $gggcc->name . ' (' . $gggcc->gender . ')'])); ?></button>
                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                            <?php if($gggcccCount = $gggcc->childs->count()): ?>
                                                                                            <?php $gggcccTotal += $gggcccCount; ?>
                                                                                            <div class="branch lv5">
                                                                                                <?php $__currentLoopData = $gggcc->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gggccc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                    <div
                                                                                                        class="entry <?php echo e($gggcccCount == 1 ? 'sole' : ''); ?>">
                                                                                                        <span
                                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $gggccc->name, [$gggccc->id], ['title' => $gggccc->name . ' (' . $gggccc->gender . ')'])); ?></button>
                                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                                            <?php if($ggggcccCount = $gggccc->childs->count()): ?>
                                                                                                            <?php $ggggcccTotal += $ggggcccCount; ?>
                                                                                                            <div class="branch lv5">
                                                                                                                <?php $__currentLoopData = $gggccc->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ggggccc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                    <div
                                                                                                                        class="entry <?php echo e($ggggcccCount == 1 ? 'sole' : ''); ?>">
                                                                                                                        <span
                                                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $ggggccc->name, [$ggggccc->id], ['title' => $ggggccc->name . ' (' . $ggggccc->gender . ')'])); ?></button>
                                                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                                                            <?php if($ggggccccCount = $ggggccc->childs->count()): ?>
                                                                                                                            <?php $ggggccccTotal += $ggggccccCount; ?>
                                                                                                                            <div class="branch lv5">
                                                                                                                                <?php $__currentLoopData = $ggggccc->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ggggcccc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                                    <div
                                                                                                                                        class="entry <?php echo e($ggggccccCount == 1 ? 'sole' : ''); ?>">
                                                                                                                                        <span
                                                                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $ggggcccc->name, [$ggggcccc->id], ['title' => $ggggcccc->name . ' (' . $ggggcccc->gender . ')'])); ?></button>
                                                                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                                                                            <?php if($gggggccccCount = $ggggcccc->childs->count()): ?>
                                                                                                                                            <?php $gggggccccTotal += $gggggccccCount; ?>
                                                                                                                                            <div class="branch lv5">
                                                                                                                                                <?php $__currentLoopData = $ggggcccc->childs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gggggcccc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                                                                    <div
                                                                                                                                                        class="entry <?php echo e($gggggccccCount == 1 ? 'sole' : ''); ?>">
                                                                                                                                                        <span
                                                                                                                                                            class="label"><button   style="background-color:	#FFFFFF;padding:0 20px;border:solid #800000 1px;"><?php echo e(link_to_route('users.tree', $gggggcccc->name, [$gggggcccc->id], ['title' => $gggggcccc->name . ' (' . $gggggcccc->gender . ')'])); ?></button>
                                                                                                                                                                            <button  style="color:black;background-color:	#FFFFFF;padding:0 20px;border:solid #FFA500 1px;">اظهار </button>
</span>
                                                                                                                                                    </div>
                                                                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                                                            </div>
                                                                                                                                        <?php endif; ?>
                                                                                                                                    </div>
                                                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                                            </div>
                                                                                                                        <?php endif; ?>
                                                                                                                    </div>
                                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                                            </div>
                                                                                                        <?php endif; ?>
                                                                                                    </div>
                                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                                            </div>
                                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                                    </div>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </div>
                                                                        <?php endif; ?>
                                                                    </div>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
        <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
        <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
        <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
        <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
        <?php endif; ?>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
        <?php endif; ?>

    </div>
    </div>
</div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
</div>

</div>
</div>







<?php $__env->stopSection(); ?>
<?php $__env->startSection('ext_css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/tree.css')); ?>">
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/search.blade.php ENDPATH**/ ?>