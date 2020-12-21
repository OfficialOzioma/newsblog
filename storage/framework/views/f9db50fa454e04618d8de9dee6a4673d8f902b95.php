<div class="sg-widget">
    <h3 class="widget-title"><?php echo e(data_get($detail, 'title')); ?></h3>

    <ul class="global-list">
        <?php $__currentLoopData = $content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <div class="sg-post small-post post-style-1">
                    <?php echo $__env->make('site.partials.home.category.post_block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="entry-content">
                       <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>"> <p><?php echo e(\Illuminate\Support\Str::limit(data_get($post, 'title'), 70)); ?></p></a>
                        <div class="entry-meta">
                            <ul class="global-list">
                                <li><?php echo e(__('post_by')); ?> <a href="javascript:void(0)"> <?php echo e(data_get($post, 'user.first_name')); ?> <?php echo e($post->updated_at->format('F j, Y')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/widgets/popular_post.blade.php ENDPATH**/ ?>