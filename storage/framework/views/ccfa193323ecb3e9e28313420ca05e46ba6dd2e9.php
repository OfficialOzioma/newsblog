<?php 
    $poll=Modules\Post\Entities\Poll::with('pollResults', 'pollOptions.pollresults')->where('id', $param[0])->first();
?> 

<div class="modal-body"> 
    <div class="form-group text-center">
        <label for="title" class="col-form-label"><b><?php echo e(__('total_vote')); ?> : <?php echo e($poll->pollResults->count()); ?></b></label> 
    </div>

    <?php $__currentLoopData = $poll->pollOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <label class="col-form-label"><b><?php echo e($option->option); ?></b></label>
        <?php if($poll->pollResults->count() != 0 && $poll->pollResults->count() * 100 != 0): ?>
        <div class="progress">
            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="<?php echo e(round($option->pollresults->count() / $poll->pollResults->count() * 100)); ?>"
                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo e(round($option->pollresults->count() / $poll->pollResults->count() * 100)); ?>%">
                <span id="progress-bar-span"><?php echo e(round($option->pollresults->count() / $poll->pollResults->count() * 100)); ?>%</span>
            </div>
        </div>
        <?php else: ?>
        <div class="progress">
            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="0"
                aria-valuemin="0" aria-valuemax="100">
                <span id="progress-bar-span">0%</span>
            </div>
        </div>
        <?php endif; ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-light" data-dismiss="modal"><?php echo e(__('close')); ?></button>
</div>
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/Modules/Common/Providers/../Resources/views/modal/vote-result.blade.php ENDPATH**/ ?>