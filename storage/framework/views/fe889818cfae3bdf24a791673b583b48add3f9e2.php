<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('gallery::image-gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section class="pt-4" id="gd-list">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if(session('error')): ?>
                        <div id="error_m" class="alert alert-danger">
                            <?php echo e(session('error')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(session('success')): ?>
                        <div id="success_m" class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                    <section class="card">
                        <div class="card-header">
                            <h3 class="center"><?php echo e(__('profile')); ?></h3>
                        </div>
                        <div class="card-body">

                            <?php if(Session::get('message')): ?>
                                <div class="alert alert-success" id="message">
                                    <h3 class=" text-center text-success"> <?php echo e(Session::get('message')); ?></h3>
                                </div>
                            <?php endif; ?>
                            <div class="row">
                                <div class="col-md-8">
                                    <table class="table" width="100%">
                                        <tr class="">
                                            <th  class="w-50" scope="col"><?php echo e(__('name')); ?></th>
                                            <td class="w-50" data-title="Name">
                                                <?php echo e(Sentinel::getUser() ? Sentinel::getUser()->first_name.' '.Sentinel::getUser()->last_name : ''); ?>

                                            </td>
                                        </tr>
                                        <tr class="">
                                            <th scope="col"><?php echo e(__('email')); ?></th>
                                            <td data-title="Email"><?php echo e(Sentinel::getUser()->email); ?></td>
                                        </tr>
                                        <tr class="">
                                            <th scope="col"><?php echo e(__('last_login')); ?></th>
                                            <td data-title="Email"><?php echo e(Carbon\Carbon::parse(Sentinel::getUser()->last_login)->toDayDateTimeString()); ?></td>
                                        </tr>
                                        <tr class="">
                                            <th scope="col"><?php echo e(__('newsletter')); ?></th>
                                            <td data-title="Newsletter"><?php if(Sentinel::getUser()->newsletter_enable==1): ?><?php echo e(__('enable')); ?> <?php else: ?> <?php echo e(__('disable')); ?>  <?php endif; ?></td>
                                        </tr>

                                        <tr class="">
                                            <th scope="col">
                                                <a class="btn btn-block btn-warning modal-menu"
                                                   href="javascript:void(0)" data-title="Change Password"
                                                   data-url="<?php echo e(route('edit-info',['page_name'=>'change-password'])); ?>"
                                                   data-toggle="modal" data-target="#common-modal"><i
                                                        class="m-r-10 mdi mdi-key-variant"></i><?php echo e(__('change_password')); ?>

                                                </a>
                                            </th>
                                            <td data-title="">

                                                <a class="btn btn-block btn-primary modal-menu"
                                                   href="javascript:void(0)" data-title="Edit Profile Info"
                                                   data-url="<?php echo e(route('edit-info',['page_name'=>'edit-my-profle','param1'=>Sentinel::getUser()->id])); ?>"
                                                   data-toggle="modal" data-target="#common-modal"><i
                                                        class="fa fa-edit option-icon"></i><?php echo e(__('edit_profile')); ?></a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-md-4">
                                    <?php if(Sentinel::getUser()->image != null): ?>
                                        <?php if(isFileExist(@Sentinel::getUser()->image, @Sentinel::getUser()->image['medium_image'])): ?>
                                            <img src=" <?php echo e(basePath(Sentinel::getUser()->image)); ?>/<?php echo e(Sentinel::getUser()->image['medium_image']); ?> " class="img-thumbnail" height="200"  >
                                        <?php else: ?>
                                            <img src="<?php echo e(static_asset('default-image/user.jpg')); ?>" height="200" class="img-thumbnail">
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <img src="<?php echo e(static_asset('default-image/user.jpg')); ?>" height="200" class="img-thumbnail">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/Modules/User/Providers/../Resources/views/user-profile.blade.php ENDPATH**/ ?>