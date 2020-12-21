<div class="col-lg-4">
    <div class="footer-widget">
        <h3><?php echo e(data_get($detail, 'title')); ?></h3>
        <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($loop->index > 2): ?>
                <?php break; ?>
            <?php endif; ?>

            <?php if(data_get(activeTheme(), 'options.footer_style') == 'footer_1'): ?>
            <div class="sg-post small-post post-style-1">
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
                        <div class="video-icon-catagory-footer">
                            <i class="fa fa-play" aria-hidden="true"></i>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="entry-content">
                    <h2 class="entry-title"><a href="<?php echo e(route('article.detail', [$post->slug])); ?>"><?php echo e(\Illuminate\Support\Str::limit(data_get($post, 'title'), 50)); ?></a></h2>
                    <div class="entry-meta">
                        <ul class="global-list">
                            <li><?php echo e(__('post_by')); ?> <?php echo e(data_get($post, 'user.first_name')); ?> <?php echo e($post->updated_at->format('F j, Y')); ?></li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php elseif(data_get(activeTheme(), 'options.footer_style') == 'footer_2'): ?>
                <div class="sg-post small-post">

                    <div class="entry-content p-0">
                        <h2 class="entry-title"><a href="<?php echo e(route('article.detail', [$post->slug])); ?>"><?php echo e(\Illuminate\Support\Str::limit(data_get($post, 'title'), 50)); ?></a></h2>
                        <div class="entry-meta">
                            <ul class="global-list">
                                <li><?php echo e(__('post_by')); ?> <?php echo e(data_get($post, 'user.first_name')); ?> <?php echo e($post->updated_at->format('F j, Y')); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/widgets/footer/popular_post.blade.php ENDPATH**/ ?>