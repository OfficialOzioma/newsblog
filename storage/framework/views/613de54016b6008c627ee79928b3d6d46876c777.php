<?php $__env->startSection('pages'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-aria-expanded'); ?>
    aria-expanded=true
<?php $__env->stopSection(); ?>
<?php $__env->startSection('add-page-active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('modal'); ?>
    <?php echo $__env->make('gallery::image-gallery', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php echo Form::open(['route' => 'create_new_page','method' => 'post', 'enctype'=>'multipart/form-data']); ?>

            <input type="hidden" id="images" value="<?php echo e($countImage); ?>">
            <input type="hidden" id="imageCount" value="1">
            <div class="row clearfix">
                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">
                        <div class="add-new-header clearfix">
                            <div class="row">
                                <div class="col-6">
                                    <div class="block-header">
                                        <h2><?php echo e(__('add_page')); ?></h2>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?php echo e(route('pages')); ?>" class="btn btn-primary btn-add-new btn-sm"><i
                                            class="fas fa-arrow-left"></i>
                                        <?php echo e(__('back_to_pages')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

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

                </div>

                <div class="col-8">
                    <div class="add-new-page  bg-white p-20 m-b-20">

                        <div class="block-header">
                            <div class="form-group">
                                <h4 class="border-bottom"><?php echo e(__('page_content')); ?></h4>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="page-title" class="col-form-label"><?php echo e(__('title')); ?>*</label>
                                <input id="page-title" onkeyup="metaTitleSet()" value="<?php echo e(old('title')); ?>" name="title"
                                       type="text" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="page-slug" class="col-form-label"><b><?php echo e(__('slug')); ?></b>
                                    (<?php echo e(__('slug_message')); ?>)</label>
                                <input id="page-slug" name="slug" value="<?php echo e(old('slug')); ?>" type="text"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="language" class="col-form-label"><?php echo e(__('language')); ?>*</label>
                                <select class="form-control" name="language" id="language">
                                    <?php $__currentLoopData = $activeLang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option
                                            <?php if(settingHelper('default_language')==$lang->code): ?> Selected
                                            <?php endif; ?> value="<?php echo e($lang->code); ?>"><?php echo e($lang->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="page_type" class="col-form-label"><?php echo e(__('page_type')); ?>*</label>
                                <select name="page_type" id="page_type" class="form-control">
                                    <option value="1"><?php echo e(__('default')); ?></option>
                                    <option value="2"><?php echo e(__('contact_us')); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12" id="description">
                            <div class="form-group">
                                <label for="content" class="col-form-label"><?php echo e(__('description')); ?></label>
                                <textarea name="description" id="content" class="form-control"></textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-4">
                    <div class="add-new-page  bg-white p-20 m-b-20">
                        <div class="block-header">
                            <div class="form-group">
                                <h4 class="border-bottom"><?php echo e(__('page_layout')); ?></h4>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="template" class="col-form-label"><?php echo e(__('template')); ?>*</label>
                                <select name="template" id="template" class="form-control">
                                    <option value="1"><?php echo e(__('without_sidebar')); ?></option>
                                    <option value="2"><?php echo e(__('with_right_sidebar')); ?></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="template" class="col-form-label"><?php echo e(__('feature_image')); ?></label>
                            <div class="form-group text-center">
                                <img src="<?php echo e(static_asset('default-image/default-100x100.png')); ?> " id="image_preview" width="200"
                                     height="200" alt="image" class="img-responsive img-thumbnail">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group text-center">
                                <button type="button" id="btn_image_modal" class="btn btn-primary btn-image-modal"
                                        data-id="1" data-toggle="modal"
                                        data-target=".image-modal-lg"><?php echo e(__('add_image')); ?></button>
                                <input id="image_id" name="image_id" type="hidden" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">

                        <div class="block-header">
                            <div class="form-group">
                                <h4 class="border-bottom"><?php echo e(__('visibility')); ?>*</h4>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="visibility"><?php echo e(__('visibility')); ?></label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="visibility" id="visibility_show" value="1" checked
                                           class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('show')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="visibility" id="visibility_hide" value="0"
                                           class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('hide')); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="show_for_register"><?php echo e(__('show_only_to_registered_users')); ?></label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_for_register" id="show_only_registerd_user_enable"
                                           checked value="1" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('yes')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_for_register" id="show_only_registerd_user_desable"
                                           value="0" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('no')); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="show_title"><?php echo e(__('show_title')); ?></label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_title" id="show_title_enable" checked value="1"
                                           class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('yes')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_title" id="show_title_desable" value="0"
                                           class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('no')); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="breadcrumb"><?php echo e(__('show_breadcrumb')); ?></label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_breadcrumb" id="show_breadcumb_enable" checked
                                           value="1" class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('yes')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="show_breadcrumb" id="show_breadcumb_desable" value="0"
                                           class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('no')); ?></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">
                        <div class="block-header">
                            <div class="form-group">
                                <h4 class="border-bottom"><?php echo e(__('seo')); ?></h4>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="title-meta" class="col-form-label"><b><?php echo e(__('title')); ?></b>
                                    (<?php echo e(__('meta_tag')); ?>)</label>
                                <input id="title-meta" name="meta_title" value="<?php echo e(old('meta_title')); ?>" type="text"
                                       class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="page-meta" class="col-form-label"><b><?php echo e(__('description')); ?></b>
                                    (<?php echo e(__('meta_tag')); ?>)</label>
                                <input id="page-meta" name="meta_description" value="<?php echo e(old('meta_description')); ?>"
                                       type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="page-keywords" class="col-form-label"><b><?php echo e(__('keywords')); ?></b>
                                    (<?php echo e(__('meta_tag')); ?>)</label>
                                <input id="page-keywords" name="meta_keywords" value="<?php echo e(old('meta_keywords')); ?>"
                                       type="text" class="form-control">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group form-float form-group-sm">
                                    <button type="submit" class="btn btn-primary float-right m-t-20"><i
                                            class="mdi mdi-plus"></i> <?php echo e(__('add_page')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php echo e(Form::close()); ?>

        <!-- page info end-->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/Modules/Page/Providers/../Resources/views/add_page.blade.php ENDPATH**/ ?>