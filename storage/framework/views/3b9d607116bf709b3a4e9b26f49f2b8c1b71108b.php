<div class="sg-widget widget-social">
    <h3 class="widget-title"><?php echo e(__('stay_connected')); ?></h3>
    <div class="sg-socail">
        <ul class="global-list">
            <?php $__currentLoopData = $socialMedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="facebook"><a href="<?php echo e($socialMedia->url?? '#'); ?>" style="background:<?php echo e($socialMedia->text_bg_color); ?>"><span style="background:<?php echo e($socialMedia->icon_bg_color); ?>"><i class="<?php echo e($socialMedia->icon); ?>" aria-hidden="true"></i></span><?php echo e($socialMedia->name); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
</div><!-- /.sg-widget -->
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/widgets/follow_us.blade.php ENDPATH**/ ?>