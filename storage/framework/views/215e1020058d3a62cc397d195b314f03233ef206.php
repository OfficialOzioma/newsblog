<?php
    $blockPosts = $posts->take(4);
?>

<div class="sg-breaking-news">
    <div class="container">
        <div class="breaking-content d-flex">
            <span><?php echo e(__('breaking_news')); ?></span>
            <ul class="news-ticker">
                <?php $__currentLoopData = $breakingNewss; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li id="display-nothing">
                        <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>"><?php echo \Illuminate\Support\Str::limit($post->title, 100); ?></a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</div>

<div class="sg-home-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="post-slider">
                    <?php $__currentLoopData = $sliderPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="sg-post featured-post">
                            <?php echo $__env->make('site.partials.home.primary.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <div class="entry-content absolute">
                                <div class="category">
                                    <ul class="global-list">
                                        <?php if(isset($post->category->category_name)): ?>
                                        <li><a href="javascript:void(0)"><?php echo e($post->category->category_name); ?></a></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <h2 class="entry-title">
                                    <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>"><?php echo \Illuminate\Support\Str::limit($post->title, 50); ?></a>
                                </h2>
                                <div class="entry-meta">
                                    <ul class="global-list">
                                        <li><?php echo e(__('post_by')); ?> <a href="javascript:void(0)"><?php echo e(data_get($post, 'user.first_name')); ?></a></li>
                                        <li><a href="javascript:void(0)"><?php echo e($post->updated_at->format('F j, Y')); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                   
                    <?php $__currentLoopData = $blockPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                            <div class="sg-post">
                                <div class="entry-header">
                                    <div class="entry-thumbnail">
                                        <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>">
                                            <?php if(isFileExist(@$post->image, @$post->image->medium_image)): ?>
                                                <img src=" <?php echo e(basePath(@$post->image)); ?>/<?php echo e(@$post->image->medium_image); ?> "  class="img-fluid"   alt="<?php echo $post->title; ?>" >
                                            <?php else: ?>
                                                <img src="<?php echo e(static_asset('default-image/default-358x215.png')); ?> "  class="img-fluid"   alt="<?php echo $post->title; ?>" >
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                    <?php if($post->post_type=="video"): ?>
                                        <div class="video-icon-catagory-slider">
                                            <i class="fa fa-play" aria-hidden="true"></i>
                                        </div>
                                    <?php endif; ?>
                                    <div class="category">
                                        <ul class="global-list">
                                            <?php if(isset($post->category->category_name)): ?>
                                            <li><a href="javascript:void(0)"><?php echo e($post->category->category_name); ?></a></li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                                <div class="entry-content">
                                    <a href="<?php echo e(route('article.detail', ['id' => $post->slug])); ?>"><p><?php echo \Illuminate\Support\Str::limit($post->title, 50); ?></p></a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/partials/home/primary/style_1.blade.php ENDPATH**/ ?>