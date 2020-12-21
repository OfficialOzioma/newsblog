<?php $__env->startSection('settings'); ?>
    aria-expanded="true"
<?php $__env->stopSection(); ?>
<?php $__env->startSection('s-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('settings_active'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('setting-seo'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
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

            
            <input type="hidden" name="url" id="url" value="<?php echo e(url('/')); ?>">

            <div class="row clearfix">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="add-new-page  bg-white p-0 m-b-20">

                                <nav>
                                    <div class="nav m-b-20 setting-tab" id="nav-tab" role="tablist">

                                        <a class="nav-item nav-link" id="general-settings"
                                           href="<?php echo e(route('setting-general')); ?>"
                                           role="tab"><?php echo e(__('general_settings')); ?></a>
                                        <a class="nav-item nav-link" id="contact-settings"
                                           href="<?php echo e(route('setting-company')); ?>"
                                           role="tab"><?php echo e(__('company_informations')); ?></a>
                                        <a class="nav-item nav-link" id="mail-settings"
                                           href="<?php echo e(route('setting-email')); ?>" role="tab"><?php echo e(__('email_settings')); ?></a>
                                        <a class="nav-item nav-link" id="storage-settings"
                                           href="<?php echo e(route('setting-storage')); ?>"
                                           role="tab"><?php echo e(__('storage_settings')); ?></a>
                                        <a class="nav-item nav-link active" id="seo-settings"
                                           href="<?php echo e(route('setting-seo')); ?>" role="tab"><?php echo e(__('seo_settings')); ?></a>
                                        <a class="nav-item nav-link" id="recaptcha-settings"
                                           href="<?php echo e(route('setting-recaptcha')); ?>"
                                           role="tab"><?php echo e(__('recaptcha_settings')); ?></a>
                                        <a class="nav-item nav-link" id="setting-url" href="<?php echo e(route('settings-url')); ?>"
                                           role="tab"><?php echo e(__('url_settings')); ?></a>

                                        <a class="nav-item nav-link" id="setting-ffmpeg"
                                           href="<?php echo e(route('settings-ffmpeg')); ?>" role="tab"><?php echo e(__('ffmpeg_settings')); ?></a>

                                        <a class="nav-item nav-link" id="setting-custom"
                                           href="<?php echo e(route('setting-custom-header-footer')); ?>"><?php echo e(__('custom_header_footer')); ?></a>
                                        <a class="nav-item nav-link" id="cron-information"
                                           href="<?php echo e(route('cron-information')); ?>"><?php echo e(__('cron_information')); ?></a>

                                    </div>
                                </nav>

                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="add-new-page  bg-white p-20 m-b-20">
                                <div class="tab-content" id="nav-tabContent">

                                    <!-- single tab content start -->
                                    <div class="tab-pane fade show active" id="seo_settings" role="tabpanel">
                                        <?php echo Form::open(['route' => 'sitemap', 'method' => 'get', 'enctype' => 'multipart/form-data', 'id' => 'sitemap']); ?>

                                        <div class="row">

                                            <div class="col-12 m-t-20">
                                                <div class="form-group form-float form-group-sm ">
                                                    <a href="<?php echo e(url('sitemap.xml')); ?>" class="btn btn-primary pull-right" target="_blank"> <i
                                                            class="fa fa-link m-r-10" ></i><?php echo e(__('go_to_sitemap')); ?></a>
                                                    <button type="submit" name="status"
                                                            class="btn btn-primary pull-right"><i
                                                            class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('generate_sitemap')); ?>

                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php echo e(Form::close()); ?>



                                        <?php echo Form::open(['route' => 'update-settings', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'update-settings']); ?>

                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="settings_language"><?php echo e(__('language')); ?></label>
                                                <select class="form-control" name="seo_language" id="seo_language">
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
                                                <label for="seo_title"
                                                       class="col-form-label"><?php echo e(__('seo_title')); ?></label>
                                                <input id="seo_title" class="form-control" name="seo_title"
                                                       value="<?php echo e(settingHelper('seo_title')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="seo_keywords"
                                                       class="col-form-label"><?php echo e(__('seo_keywords')); ?></label>
                                                <input id="seo_keywords" class="form-control" name="seo_keywords"
                                                       data-role="tagsinput"
                                                       value="<?php echo e(settingHelper('seo_keywords')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="seo_meta_description"
                                                       class="col-form-label"><?php echo e(__('seo_meta_description')); ?></label>
                                                <textarea id="seo_meta_description" class="form-control"
                                                          name="seo_meta_description"><?php echo e(settingHelper('seo_meta_description')); ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="author_name"
                                                       class="col-form-label"><?php echo e(__('author_name')); ?></label>
                                                <input id="author_name" class="form-control" name="author_name"
                                                       value="<?php echo e(settingHelper('author_name')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="og_title"
                                                       class="col-form-label"><?php echo e(__('og_title')); ?></label>
                                                <input id="og_title" class="form-control" name="og_title"
                                                       value="<?php echo e(settingHelper('og_title')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="og_description"
                                                       class="col-form-label"><?php echo e(__('og_description')); ?></label>
                                                <input id="og_description" class="form-control" name="og_description"
                                                       value="<?php echo e(settingHelper('og_description')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="og_image" class="upload-file-btn btn btn-primary"><i
                                                        class="fa fa-folder input-file"
                                                        aria-hidden="true"></i> <?php echo e(__('og_image')); ?></label>
                                                <input id="og_image" name="og_image" onChange="swapImage(this)"
                                                       data-index="2" type="file" class="form-control d-none"
                                                       accept="image/*">
                                            </div>
                                            <div class="form-group text-center">
                                                <?php if(settingHelper('og_image') != Null): ?>
                                                    <img src="<?php echo e(static_asset(settingHelper('og_image'))); ?>" width="200" data-index="2"
                                                          alt="og_image">
                                                <?php else: ?>
                                                    <img src="<?php echo e(static_asset('default-image/default-100x100.png')); ?>" data-index="2" alt="user" class="img-responsive ">
                                                <?php endif; ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="google_analytics_id"
                                                       class="col-form-label"><?php echo e(__('google_analytics_id')); ?></label>
                                                <input id="google_analytics_id" class="form-control"
                                                       name="google_analytics_id"
                                                       value="<?php echo e(settingHelper('google_analytics_id')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="addthis_public_id"
                                                       class="col-form-label"><?php echo e(__('addthis_public_id')); ?></label>
                                                <input id="addthis_public_id" class="form-control"
                                                       name="addthis_public_id"
                                                       value="<?php echo e(settingHelper('addthis_public_id')); ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="adthis_option"
                                                       class="col-form-label"><?php echo e(__('adthis_option')); ?></label>
                                                <select name="adthis_option" id="adthis_option" class="form-control">
                                                    <option <?php if( settingHelper('adthis_option') =='1'): ?> selected
                                                            <?php endif; ?> value="1"><?php echo e(__('enable')); ?></option>
                                                    <option <?php if( settingHelper('adthis_option') !='1'): ?> selected
                                                            <?php endif; ?> value="0"><?php echo e(__('disable')); ?></option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 m-t-20">
                                                <div class="form-group form-float form-group-sm text-right">
                                                    <button type="submit" name="status"
                                                            class="btn btn-primary pull-right"><i
                                                            class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('save_changes')); ?>

                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <?php echo e(Form::close()); ?>

                                    </div>
                                    <!-- single tab content end -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--  tab end -->
                </div>
            </div>
            <!-- right sidebar end -->
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/Modules/Setting/Providers/../Resources/views/seo_setting.blade.php ENDPATH**/ ?>