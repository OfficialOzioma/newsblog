<div class="entry-header">
    <div class="entry-thumbnail">
        <a href="<?php echo e(route('article.detail', ['id' => @$firstPost->slug])); ?>">
            <?php if(isFileExist($firstPost->image, @$firstPost->image->medium_image)): ?>
                <img src=" <?php echo e(basePath($firstPost->image)); ?>/<?php echo e($firstPost->image->medium_image); ?> " class="img-fluid"   alt="<?php echo $firstPost->title; ?>"  >
            <?php else: ?>
                <img src="<?php echo e(static_asset('default-image/default-358x215.png')); ?> "  class="img-fluid"   alt="<?php echo $firstPost->title; ?>" >
            <?php endif; ?>
        </a>
    </div>
    <?php if($firstPost->post_type=="video"): ?>
        <div class="video-icon">
            <i class="fa fa-play" aria-hidden="true"></i>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/partials/home/category/first_post.blade.php ENDPATH**/ ?>