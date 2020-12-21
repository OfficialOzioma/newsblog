<?php $__env->startSection('content'); ?>

 <div class="sg-page-content">
        <div class="container">

            <?php if($page->show_breadcrumb == 1): ?>
        	 <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('')); ?>"><?php echo e(__('home')); ?></a></li>
                        <li class="breadcrumb-item"><a href="#"><?php echo $page->title ?? ''; ?></a></li>
                    </ol>
                </nav>
                <?php endif; ?>

            <div class="row">

                <div class="<?php echo e($page->template == 2? 'col-md-7 col-lg-8':'col-md-12 col-lg-12'); ?> sg-sticky">
                    <div class="theiaStickySidebar post-details">
                        <div class="sg-section">
                            <div class="section-content">
                                <div class="sg-post">
                                    <div class="entry-content p-4">
                                        <?php if($page->show_title == 1): ?>
                                            <h3><?php echo $page->title ?? ''; ?></h3>
                                        <?php endif; ?>
                                        <div class="paragraph p-t-20">
                                         <?php echo $page->description; ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if($page->template == 2): ?>
                    <div class="col-md-5 col-lg-4 sg-sticky">
                        <div class="sg-sidebar theiaStickySidebar">
                            <?php echo $__env->make('site.partials.right_sidebar_widgets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/pages/default_page.blade.php ENDPATH**/ ?>