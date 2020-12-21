<ul class="<?php if(isset($is_children) && $is_children): ?> children <?php else: ?> comment-list <?php endif; ?> global-list">
    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li class="media">
            <div class="commenter-avatar">
                <a href="#"><img class="img-fluid" src="<?php echo e(static_asset('site/images/others/author.png')); ?>" alt="Image"></a>
            </div>
            <div class="comment-box media-body">
                <div class="comment-meta">
                    <span class="title"><a href="#" class="url"><?php echo e(data_get($comment, 'user.name')); ?></a> <span class="sg-date"><?php echo e($diff = Carbon\Carbon::parse($comment->created_at)->diffForHumans()); ?></span></span>
                </div>
                <div class="comment-content">
                    <p><?php echo e($comment->comment ?? ''); ?></p>
                </div>
                <form class="contact-form" name="contact-form" method="post" action="<?php echo e(route('article.save.reply')); ?>">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="post_id" value="<?php echo e($comment->post_id ?? ''); ?>">
                    <input type="hidden" name="comment_id" value="<?php echo e($comment->id); ?>">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="form-group">
                                <input type="text" name="comment" class="form-control" required="required" id="one" placeholder="<?php echo e(__('reply')); ?>">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" class="btn btn-primary"><?php echo e(__('reply')); ?></button>
                        </div>
                    </div>
                </form>
            </div>

            <?php if(!blank($reply = data_get($comment, 'reply'))): ?>
                <?php echo $__env->make('site.post.comment', [
                    'comments' => $reply,
                    'is_children' => true,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/post/comment.blade.php ENDPATH**/ ?>