<?php $__env->startPush('style'); ?>
    <link href="<?php echo e(static_asset('vendor/tinymce/skins/lightgray/skin.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <div class="sg-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8 sg-sticky">
                    <div class="theiaStickySidebar post-details">
                        <div class="sg-section">
                            <div class="section-content">
                                <div class="sg-section">
                                    <div class="section-content">
                                        <div class="section-title">
                                            <h1><?php echo e(__('submit_news')); ?></h1>
                                        </div>

                                        <form class="contact-form" name="submit-news-form" method="post" action="<?php echo e(route('submit.news.save')); ?>" enctype="multipart/form-data">
                                            <?php echo csrf_field(); ?>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="post_title" class="col-form-label"><?php echo e(__('title')); ?></label>
                                                    <input id="post_title" name="title" value="<?php echo e(old('title')); ?>" type="text" class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <label for="post_content" class="col-form-label"><?php echo e(__('content')); ?></label>
                                                    <textarea name="content" value="<?php echo e(old('content')); ?>" id="post_content" cols="30" rows="5"><?php echo e(old('content')); ?></textarea>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 mt-3">
                                                    <label for="image" class="col-form-label"><?php echo e(__('post_image')); ?></label>
                                                    <input type="file" class="form-control" name="image" id="image" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-sm-12 mt-2">
                                                    <?php if(Cartalyst\Sentinel\Laravel\Facades\Sentinel::check()): ?>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    <?php else: ?>
                                                        <a class="btn btn-primary" href="<?php echo e(route('site.login.form')); ?>">Login</a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 sg-sticky">
                    <div class="sg-sidebar theiaStickySidebar">
                        <?php if(!blank($rightSidebarWidgets = $widgets[\Modules\Widget\Enums\WidgetLocation::RIGHT_SIDEBAR])): ?>
                            <?php echo $__env->make('site.partials.right_sidebar_widgets', ['rightWidgets' => $rightSidebarWidgets], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(static_asset('vendor/tinymce/tinymce.min.js')); ?>"></script>
    <script>
        //TinyMCE
        tinymce.init({
            selector: "textarea#post_content",
            theme: "modern",
            height: 400,
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/pages/submit_news.blade.php ENDPATH**/ ?>