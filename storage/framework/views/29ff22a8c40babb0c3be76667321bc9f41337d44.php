<?php $__env->startSection('content'); ?>
    <div class="sg-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8 sg-sticky">
                    <div class="theiaStickySidebar">
                        <div class="sg-section">
                            <div class="section-content search-content">
                                <div class="sg-search">
                                    <div class="search-form">
                                        <form action="<?php echo e(route('article.search')); ?>" id="search" method="GET">
                                            <input class="form-control" name="search" type="text" value="<?php echo e(request()->get('search', '')); ?>" placeholder="<?php echo e(__('search')); ?>">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>

                                <?php if(!blank($posts)): ?>
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="sg-post small-post post-style-1">
                                            <div class="entry-header">
                                                <div class="entry-thumbnail">
                                                    <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>">
                                                        <?php if(isFileExist(@$post->image, @$post->image->small_image)): ?>
                                                            <img src="<?php echo e(basePath(@$post->image)); ?>/<?php echo e(@$post->image->small_image); ?>" class="img-fluid" <?php echo $post->title; ?>>
                                                        <?php else: ?>
                                                            <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-240x160.png')); ?> "  <?php echo $post->title; ?>>
                                                        <?php endif; ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="entry-content">
                                                <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>"><?php echo $post->title; ?></a>
                                                <div class="entry-meta">
                                                    <ul class="global-list">
                                                        <li><?php echo e(__('post_by')); ?> <a href="javascript:void(0)"><?php echo e(data_get($post, 'user.first_name')); ?> <?php echo e($post->updated_at->format('F j, Y')); ?></a></li>
                                                    </ul>
                                                </div>
                                                <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>" class="read-more"><?php echo e(__('read_now')); ?></a>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                <div class="sg-pagination text-center">
                                    <?php echo e($posts->appends(request()->except('page'))->links('site.partials.search_pagination')); ?>

                                </div>
                            </div>
                        </div>
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

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/pages/search.blade.php ENDPATH**/ ?>