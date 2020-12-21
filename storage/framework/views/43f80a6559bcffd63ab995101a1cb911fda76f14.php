<div class="entry-header">
    <div class="entry-thumbnail">
        <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>">
            <?php if(isFileExist($post->image, @$post->image->small_image)): ?>
                <img src=" <?php echo e(basePath($post->image)); ?>/<?php echo e($post->image->small_image); ?> " class="img-fluid"   alt="<?php echo $post->title; ?>"  >
            <?php else: ?>
                <img src="<?php echo e(static_asset('default-image/default-100x100.png')); ?> "  class="img-fluid"   alt="<?php echo $post->title; ?>" >
            <?php endif; ?>
        </a>
    </div>
    <?php if($post->post_type=="video"): ?>
        <div class="video-icon-catagory">
            <i class="fa fa-play" aria-hidden="true"></i>
        </div>
    <?php endif; ?>

</div>
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/partials/home/category/post_block.blade.php ENDPATH**/ ?>