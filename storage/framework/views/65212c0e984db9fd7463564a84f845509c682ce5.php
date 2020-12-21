<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/plyr.css')); ?>" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="sg-page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-8 sg-sticky">
                    <div class="theiaStickySidebar post-details">
                        <div class="sg-section">
                            <div class="section-content">
                                <div class="sg-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail" height="100%">

                                            <?php if($post->post_type=='video'): ?>
                                                <?php if($post->video_id != null): ?>


                                                    <?php if(isFileExist(@$post->videoThumbnail, @$post->videoThumbnail->big_image_two)): ?>


                                                    <video id='player' autoplay controls poster="<?php echo e(basePath($post->videoThumbnail)); ?>/<?php echo e($post->videoThumbnail->big_image_two); ?> " height="100%">
                                                        <?php else: ?>
                                                            <video id='player' autoplay controls poster="<?php echo e(static_asset('default-image/default-730x400.png')); ?>" height="100%">
                                                        <?php endif; ?>
                                                        
                                                        <?php if($post->video->v_144p==null and
                                                            $post->video->v_240p==null and
                                                            $post->video->v_360p==null and
                                                            $post->video->v_480p==null and
                                                            $post->video->v_720p==null and
                                                            $post->video->v_1080p==null
                                                        ): ?>
                                                            <source src="<?php echo e(basePath($post->video)); ?>/<?php echo e($post->video->original); ?>" type="video/<?php echo e($post->video->video_type); ?>" />

                                                        <?php else: ?>
                                                            <?php $video_version = array( 'v_1080p','v_720p','v_480p','v_360p','v_240p','v_144p') ?>

                                                            <?php $__currentLoopData = $video_version; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $version): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($post->video->$version !=null): ?>
                                                                    <source src="<?php echo e(basePath($post->video)); ?>/<?php echo e($post->video->$version); ?>" size="<?php echo e(str_replace("v_","",$version)); ?>" type="video/<?php echo e($post->video->video_type); ?>" />
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <?php endif; ?>
                                                    </video>

                                                <?php else: ?>
                                                    <?php if($post->video_url_type == "youtube_url"): ?>
                                                        <div id="player" autoplay data-plyr-provider="youtube" data-plyr-embed-id="<?php echo e(get_id_youtube($post->video_url)); ?>" height="100%"></div>
                                                    <?php elseif($post->video_url_type == "mp4_url"): ?>

                                                        <video id="player" autoplay playsinline controls data-poster="<?php echo e(basePath(@$post->image)); ?>/<?php echo e(@$post->image->big_image_two); ?>" height="100%">
                                                            <source src="<?php echo e($post->video_url); ?>" type="video/mp4"/>

                                                        </video>
                                                    <?php else: ?>
                                                        <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-730x400.png')); ?> "   alt="<?php echo $post->title; ?>">
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if(isFileExist(@$post->image, @$post->image->big_image_two)): ?>
                                                    <img class="img-fluid" src="<?php echo e(basePath(@$post->image)); ?>/<?php echo e(@$post->image->big_image_two); ?>" alt="<?php echo $post->title; ?>">
                                                <?php else: ?>
                                                    <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-730x400.png')); ?> "   alt="<?php echo $post->title; ?>">
                                                <?php endif; ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="entry-content p-4">
                                        <h3 class="entry-title"><?php echo $post->title ?? ''; ?></h3>
                                        <div class="entry-meta mb-2">
                                            <ul class="global-list">
                                                <li><i class="fa fa-calendar-minus-o" aria-hidden="true"></i>
                                                    <a href="#"><?php echo e($post->updated_at->format('F j, Y')); ?></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="paragraph">
                                            <?php echo $post->content; ?>

                                        </div>
                                        <?php if(settingHelper('adthis_option')==1 and settingHelper('addthis_public_id')!=null): ?>
                                            <div class="addthis_inline_share_toolbox" ></div>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php if($post->tags!=null): ?>
                                    <div class="sg-section mb-4">
                                        <div class="section-content">
                                            <div class="section-title">
                                                <h1><?php echo e(__('tags')); ?></h1>
                                            </div>

                                            <div class="tagcloud tagcloud-style-1">
                                                <?php if(!blank($tags = explode(',', $post->tags))): ?>
                                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <a href="<?php echo e(url('tags/'.$tag)); ?>"><?php echo e($tag); ?></a>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <?php if(settingHelper('inbuild_comment') == 1): ?>
                                    <div class="sg-section">
                                        <div class="section-content">
                                            <div class="section-title">
                                                <h1><?php echo e(__('comment')); ?> / <?php echo e(__('reply_from')); ?></h1>
                                            </div>
                                            <form class="contact-form" name="contact-form" method="post" action="<?php echo e(route('article.save.comment')); ?>">
                                                <?php echo csrf_field(); ?>
                                                <input type="hidden" name="post_id" value="<?php echo e($post->id); ?>">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label for="four"><?php echo e(__('comments')); ?></label>
                                                            <textarea name="comment" required="required"
                                                                      class="form-control" rows="7" id="four"
                                                                      placeholder="this is message..."></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <?php if(Cartalyst\Sentinel\Laravel\Facades\Sentinel::check()): ?>
                                                        <button type="submit" class="btn btn-primary"><?php echo e(__('post')); ?> <?php echo e(__('comment')); ?></button>
                                                    <?php else: ?>
                                                        <a class="btn btn-primary" href="<?php echo e(route('site.login.form')); ?>"><?php echo e(__('comment')); ?></a>
                                                    <?php endif; ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <?php if(!blank($comments = data_get($post, 'comments'))): ?>
                                        <div class="sg-section">
                                            <div class="section-content">
                                                <div class="sg-comments-area">
                                                    <div class="section-title">
                                                        <h1><?php echo e(__('comments')); ?></h1>
                                                    </div>
                                                        <?php echo $__env->make('site.post.comment', ["comments" => $comments], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                <?php endif; ?>

                                <?php if(settingHelper('facebook_comment')==1): ?>
                                    <div class="fb-comments" data-href="<?php echo e(url()->current()); ?>" data-numposts="5" data-width="100%"></div>
                                <?php endif; ?>

                                <?php if(settingHelper('disqus_comment')==1): ?>
                                <!-- disqus comments -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div id="disqus_thread"></div>
                                            <script>
                                                var disqus_config = function () {
                                                    this.page.url = "<?php echo e(url()->current()); ?>";  // Replace PAGE_URL with your page's canonical URL variable
                                                    this.page.identifier = "<?php echo e($post->id); ?>"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                                };

                                                (function() { // DON'T EDIT BELOW THIS LINE
                                                    var d = document, s = d.createElement('script');
                                                    s.src = 'https://<?php echo e(settingHelper('disqus_short_name')); ?>.disqus.com/embed.js';
                                                    s.setAttribute('data-timestamp', +new Date());
                                                    (d.head || d.body).appendChild(s);
                                                })();
                                            </script>
                                            <noscript><a href="https://disqus.com/?ref_noscript"></a></noscript>
                                            <script id="dsq-count-scr" src="//<?php echo e(settingHelper('disqus_short_name')); ?>.disqus.com/count.js" async></script>
                                        </div>
                                    </div>
                                    <!-- END disqus comments -->
                                <?php endif; ?>


                                <?php if(!blank($relatedPost)): ?>
                                    <div class="sg-section">
                                        <div class="section-content">
                                            <div class="section-title">
                                                <h1><?php echo e(__('related_post')); ?></h1>
                                            </div>
                                            <div class="row text-center">
                                                <?php $__currentLoopData = $relatedPost; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="col-lg-6">
                                                        <div class="sg-post post-style-2">
                                                            <div class="entry-header">
                                                                <div class="entry-thumbnail">
                                                                    <a href="<?php echo e(route('article.detail', [$item->slug])); ?>">
                                                                         <?php if(isFileExist(@$item->image, @$item->image->medium_image)): ?>
                                                                            <img src="<?php echo e(basePath(@$item->image)); ?>/<?php echo e(@$item->image->medium_image); ?>" class="img-fluid" <?php echo $item->title; ?>>
                                                                        <?php else: ?>
                                                                            <img class="img-fluid" src="<?php echo e(static_asset('default-image/default-358x215.png')); ?> "  <?php echo $item->title; ?>>
                                                                        <?php endif; ?>
                                                                    </a>
                                                                </div>
                                                                <div class="video-icon">
                                                                    <i class="fa fa-play" aria-hidden="true"></i>
                                                                </div>
                                                            </div>
                                                            <div class="entry-content">
                                                                <h3 class="entry-title"><a href="<?php echo e(route('article.detail', [$item->slug])); ?>"><?php echo $item->title ?? ''; ?></a></h3>

                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
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

<?php $__env->startSection('script'); ?>
<?php if($post->post_type =='video'): ?>
<script src="<?php echo e(static_asset('site/js')); ?>/plyr.js"></script>
<script src="<?php echo e(static_asset('site/js')); ?>/plyr_ini.js"></script>
<?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/pages/article_detail.blade.php ENDPATH**/ ?>