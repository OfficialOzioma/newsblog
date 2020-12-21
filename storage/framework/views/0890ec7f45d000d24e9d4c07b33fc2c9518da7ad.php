<ul class="pagination justify-content-center">
    <?php if($paginator->hasPages()): ?>
        <?php if(!$paginator->onFirstPage()): ?>
            <li><a class="page-numbers" href="<?php echo e($paginator->previousPageUrl()); ?>"><i class="fa fa-angle-left"
                                                                                      aria-hidden="true"></i></a></li>
        <?php endif; ?>
        <li class="active"><a class="page-numbers" href="javascript:void(0)"><?php echo e($paginator->currentPage()); ?></a></li>
        <?php if($paginator->hasMorePages()): ?>
            <li><a class="page-numbers" href="<?php echo e($paginator->nextPageUrl()); ?>"><i class="fa fa-angle-right"
                                                                                  aria-hidden="true"></i></a></li>
        <?php endif; ?>
    <?php endif; ?>
</ul>

<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/partials/search_pagination.blade.php ENDPATH**/ ?>