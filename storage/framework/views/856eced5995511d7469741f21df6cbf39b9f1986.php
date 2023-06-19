<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo e(__('user.family')); ?></h3>
    </div>

    <table class="table">
        <tbody>
            <tr>
                <th class="col-sm-4"><?php echo e(__('user.father')); ?></th>
                <td class="col-sm-8">
                    
                    <?php if(request('action') == 'set_father'): ?>
                        <?php echo e(Form::open(['route' => ['family-actions.set-father', $user->id]])); ?>

                        <?php echo FormField::select('set_father_id', $malePersonList, [
                            'label' => false,
                            'placeholder' => __('app.select_from_existing_males'),
                            'value' => $user->father_id,
                        ]); ?>

                        <div class="input-group">
                            <?php echo e(Form::text('set_father', null, ['class' => 'form-control input-sm ', 'placeholder' => __('app.enter_new_name')])); ?>

                            <span class="input-group-btn">
                                <?php echo e(Form::submit(__('app.update'), ['class' => 'btn btn-info btn-sm  btn btn-info', 'id' => 'set_father_button'])); ?>

                                <?php echo e(link_to_route('users.show', __('app.cancel'), [$user->id], ['class' => 'btn btn-default btn-sm  btn btn-danger'])); ?>

                            </span>
                        </div>
                        <?php echo e(Form::close()); ?>

                    <?php else: ?>
                        <?php echo e($user->fatherLink()); ?>

                        <div class="pull-right">
                            <?php if(Auth::user()->role == 'admin'): ?>
                                <?php echo e(link_to_route('users.show', __('user.set_father'), [$user->id, 'action' => 'set_father'], ['class' => 'btn btn-link btn-xs  btn btn-info'])); ?>

                            <?php else: ?>
                                <div></div>
                            <?php endif; ?>

                        </div>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th><?php echo e(__('user.mother')); ?></th>
                <td>
                    
                    <?php if(request('action') == 'set_mother'): ?>
                        <?php echo e(Form::open(['route' => ['family-actions.set-mother', $user->id]])); ?>

                        <?php echo FormField::select('set_mother_id', $femalePersonList, [
                            'label' => false,
                            'value' => $user->mother_id,
                            'placeholder' => __('app.select_from_existing_females'),
                        ]); ?>

                        <div class="input-group">
                            <?php echo e(Form::text('set_mother', null, ['class' => 'form-control input-sm', 'placeholder' => __('app.enter_new_name')])); ?>

                            <span class="input-group-btn">
                                <?php echo e(Form::submit(__('app.update'), ['class' => 'btn btn-info btn-sm  btn btn-info', 'id' => 'set_mother_button'])); ?>

                                <?php echo e(link_to_route('users.show', __('app.cancel'), [$user->id], ['class' => 'btn btn-default btn-sm  btn btn-danger'])); ?>

                            </span>
                        </div>
                        <?php echo e(Form::close()); ?>

                    <?php else: ?>
                        <?php echo e($user->motherLink()); ?>

                        <div class="pull-right">
                            <?php if(Auth::user()->role == 'admin'): ?>
                                <?php echo e(link_to_route('users.show', __('user.set_mother'), [$user->id, 'action' => 'set_mother'], ['class' => 'btn btn-link btn-xs  btn btn-info'])); ?>

                            <?php else: ?>
                                <div></div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>

                </td>
            </tr>

            <tr>
                <th class="col-sm-4"><?php echo e(__('user.parent')); ?></th>
                <td class="col-sm-8">
                    
                    <div class="pull-right">
                        <?php if (! (request('action') == 'set_parent')): ?>
                            <?php if(Auth::user()->role == 'admin'): ?>
                                <?php echo e(link_to_route('users.show', __('user.set_parent'), [$user->id, 'action' => 'set_parent'], ['class' => 'btn btn-link btn-xs  btn btn-info'])); ?>

                            <?php else: ?>
                                <div></div>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    

                    <?php if($user->parent): ?>
                        <?php echo e($user->parent->husband->name); ?> & <?php echo e($user->parent->wife->name); ?>

                    <?php endif; ?>

                    
                    <?php if(request('action') == 'set_parent'): ?>
                        <?php echo e(Form::open(['route' => ['family-actions.set-parent', $user->id]])); ?>

                        <?php echo FormField::select('set_parent_id', $allMariageList, [
                            'label' => false,
                            'value' => $user->parent_id,
                            'placeholder' => __('app.select_from_existing_couples'),
                        ]); ?>

                        <?php echo e(Form::submit(__('app.update'), ['class' => 'btn btn-info btn-sm  btn btn-info', 'id' => 'set_parent_button'])); ?>

                        <?php if(Auth::user()->role == 'admin'): ?>
                            <?php echo e(link_to_route('users.show', __('app.cancel'), $user, ['class' => 'btn btn-default btn-sm  btn btn-danger'])); ?>

                        <?php else: ?>
                            <div></div>
                        <?php endif; ?>
                        <?php echo e(Form::close()); ?>

                    <?php endif; ?>
                    
                </td>
            </tr>
            <?php if($user->gender_id == 1): ?>
                <tr>
                    <th><?php echo e(__('user.wife')); ?></th>
                    <td>
                        
                        <div class="pull-right">
                            <?php if (! (request('action') == 'add_spouse')): ?>
                                <?php if(Auth::user()->role == 'admin'): ?>
                                    <?php echo e(link_to_route('users.show', __('user.add_wife'), [$user->id, 'action' => 'add_spouse'], ['class' => 'btn btn-link btn-xs btn btn-info'])); ?>

                                <?php else: ?>
                                    <div></div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        

                        <?php if($user->wifes->isEmpty() == false): ?>
                            <ul class="list-unstyled">
                                <?php $__currentLoopData = $user->wifes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wife): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($wife->profileLink()); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                        
                        <?php if(request('action') == 'add_spouse'): ?>
                            <div>
                                <?php echo e(Form::open(['route' => ['family-actions.add-wife', $user->id]])); ?>

                                <?php echo FormField::select('set_wife_id', $femalePersonList, [
                                    'label' => false,
                                    'placeholder' => __('app.select_from_existing_females'),
                                ]); ?>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <?php echo e(Form::text('set_wife', null, ['class' => 'form-control input-sm', 'placeholder' => __('app.enter_new_name')])); ?>

                                        </div>
                                        <div class="col-md-5">
                                            <?php echo e(Form::text('marriage_date', null, ['class' => 'form-control input-sm', 'placeholder' => __('couple.marriage_date')])); ?>

                                        </div>
                                    </div>
                                </div>
                                <?php echo e(Form::submit(__('app.update'), ['class' => 'btn btn-info btn-sm  btn btn-info', 'id' => 'set_wife_button'])); ?>

                                <?php if(Auth::user()->role == 'admin'): ?>
                                    <?php echo e(link_to_route('users.show', __('app.cancel'), $user, ['class' => 'btn btn-default btn-sm  btn btn-danger'])); ?>

                                <?php else: ?>
                                    <div></div>
                                <?php endif; ?>
                                <?php echo e(Form::close()); ?>

                            </div>
                        <?php endif; ?>
                        
                    </td>

                </tr>
                <?php if(Auth::user()->role == 'admin'): ?>
                    <tr>
                        <th>اضف المشروع التجاري الخاص بك</th>
                        <td>
                            <div class="pull-center">
                                <h4><a class="btn btn-info" href="<?php echo e(route('view.company', $user)); ?>">اضف مشروعك</a>
                                </h4>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <th>اضف ذكري او قصة لك</th>
                        <td>
                            <div class="pull-center">
                                <h4><a class="btn btn-info" href="<?php echo e(route('add.memory', $user)); ?>">اضف ذكرياتك</a>
                                </h4>
                            </div>

                        </td>
                    </tr>
                <?php endif; ?>
                <tr>
                    <th>مشاهدة ذكريات</th>
                    <td>
                        <div class="pull-center">
                            <h4><a class="btn btn-info" href="<?php echo e(route('view.memory', $user)); ?>">مشاهدة الذكريات الخاصة
                                    ب
                                    <?php echo e($user->name); ?></a></h4>
                        </div>

                    </td>
                </tr>
            <?php else: ?>
                <tr>
                    <th><?php echo e(__('user.husband')); ?></th>
                    <td>
                        
                        <div class="pull-right">
                            <?php if (! (request('action') == 'add_spouse')): ?>
                                <?php if(Auth::user()->role == 'admin'): ?>
                                    <?php echo e(link_to_route('users.show', __('user.add_husband'), [$user->id, 'action' => 'add_spouse'], ['class' => 'btn btn-link btn-xs'])); ?>

                                <?php else: ?>
                                    <div></div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                        
                        <?php if($user->husbands->isEmpty() == false): ?>
                            <ul class="list-unstyled">
                                <?php $__currentLoopData = $user->husbands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $husband): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($husband->profileLink()); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        <?php endif; ?>
                        
                        <?php if(request('action') == 'add_spouse'): ?>
                            <div>
                                <?php echo e(Form::open(['route' => ['family-actions.add-husband', $user->id]])); ?>

                                <?php echo FormField::select('set_husband_id', $malePersonList, [
                                    'label' => false,
                                    'placeholder' => __('app.select_from_existing_males'),
                                ]); ?>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <?php echo e(Form::text('set_husband', null, ['class' => 'form-control input-sm', 'placeholder' => __('app.enter_new_name')])); ?>

                                        </div>
                                        <div class="col-md-5">
                                            <?php echo e(Form::text('marriage_date', null, ['class' => 'form-control input-sm', 'placeholder' => __('couple.marriage_date')])); ?>

                                        </div>
                                    </div>
                                </div>
                                <?php echo e(Form::submit(__('app.update'), ['class' => 'btn btn-info btn-sm', 'id' => 'set_husband_button'])); ?>

                                <?php if(Auth::user()->role == 'admin'): ?>
                                    <?php echo e(link_to_route('users.show', __('app.cancel'), [$user->id], ['class' => 'btn btn-danger btn-sm'])); ?>

                                <?php else: ?>
                                    <div></div>
                                <?php endif; ?>

                                <?php echo e(Form::close()); ?>

                            </div>
                        <?php endif; ?>
                        <?php if(Auth::user()->role == 'admin'): ?>
                <tr>
                    <th>اضف المشروع التجاري الخاص بك</th>
                    <td>
                        <div class="pull-center">
                            <h4><a href="<?php echo e(route('view.company', $user)); ?>">اضف مشروعك</a></h4>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th>اضف ذكري او قصة لك</th>
                    <td>
                        <div class="pull-center">
                            <h4><a href="<?php echo e(route('add.memory', $user)); ?>">اضف ذكرياتك</a></h4>
                        </div>

                    </td>
                </tr>
            <?php endif; ?>
            
            </td>


            </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php /**PATH C:\MAMP\htdocs\family tree\resources\views/users/partials/parent-spouse.blade.php ENDPATH**/ ?>