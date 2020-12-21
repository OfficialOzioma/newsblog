<?php $__env->startSection('content'); ?>
    <?php if(!blank($primarySectionPosts)): ?>
    <?php echo $__env->make('site.partials.home.primary_section', [
        'section' => $primarySection,
        'posts' => $primarySectionPosts,
        'sliderPosts' => $sliderPosts,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <div class="sg-main-content mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8 sg-sticky">
                    <div class="theiaStickySidebar">
                        <?php echo $__env->make('site.partials.home.category_section', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 sg-sticky">
                    <div class="sg-sidebar theiaStickySidebar">
                        <?php echo $__env->make('site.partials.right_sidebar_widgets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/pages/home.blade.php ENDPATH**/ ?>