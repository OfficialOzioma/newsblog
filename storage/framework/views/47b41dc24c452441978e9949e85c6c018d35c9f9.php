<div class="footer footer-style-1">
    <div class="footer-top">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <?php $__currentLoopData = $footerWidgets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $widget): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($widget['view'] == 'popular_post'): ?>
                            <?php echo $__env->make('site.widgets.footer.popular_post', $widget, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php elseif($widget['view'] == 'editor_picks'): ?>
                            <?php echo $__env->make('site.widgets.footer.editor_picks', $widget, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php elseif($widget['view'] == 'categories'): ?>
                            <?php echo $__env->make('site.widgets.footer.categories', $widget, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php elseif($widget['view'] == 'newsletter'): ?>
                            <?php echo $__env->make('site.widgets.footer.newsletter', $widget, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div><!-- /.row -->
            </div>
        </div><!-- /.container -->
    </div>
    <div class="footer-bottom">
        <div class="container text-center">
            <span><?php echo e(settingHelper('copyright_text')); ?> </span>
        </div><!-- /.container -->
    </div>
</div><!-- /.footer -->
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/layouts/footer/style_1.blade.php ENDPATH**/ ?>