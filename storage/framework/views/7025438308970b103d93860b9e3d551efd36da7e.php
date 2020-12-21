<?php $__env->startSection('pages'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-aria-expanded'); ?>
    aria-expanded=true
<?php $__env->stopSection(); ?>
<?php $__env->startSection('pages-list'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-show'); ?>
    show
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <form action="#" method="post">
                <div class="admin-section">
                    <div class="row clearfix m-t-30">
                        <div class="col-12">
                            <div class="navigation-list bg-white p-20">
                                <div class="add-new-header clearfix m-b-20">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="block-header">
                                                <h2><?php echo e(__('pages')); ?></h2>
                                            </div>
                                        </div>
                                        <?php if(Sentinel::getUser()->hasAccess(['pages_write'])): ?>
                                            <div class="col-6 text-right">
                                                <a href="<?php echo e(route('add-page')); ?>"
                                                   class="btn btn-primary btn-sm btn-add-new"><i
                                                        class="mdi mdi-plus"></i>
                                                    <?php echo e(__('add_page')); ?>

                                                </a>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="table-responsive all-pages">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr role="row">
                                                <th>#</th>
                                                <th><?php echo e(__('title')); ?></th>
                                                <th><?php echo e(__('slug')); ?></th>
                                                <th><?php echo e(__('location')); ?></th>
                                                <th><?php echo e(__('language')); ?></th>
                                                <th><?php echo e(__('visibility')); ?></th>
                                                <th><?php echo e(__('date_added')); ?></th>
                                                <?php if(Sentinel::getUser()->hasAccess(['pages_write']) || Sentinel::getUser()->hasAccess(['pages_delete']) ): ?>
                                                    <th><?php echo e(__('options')); ?></th>
                                                <?php endif; ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr role="row" id="row_<?php echo e($page->id); ?>" class="odd">
                                                <td class="sorting_1"><?php echo e($page->id); ?></td>
                                                <td><?php echo e($page->title); ?></td>
                                                <td><?php echo e($page->slug); ?></td>
                                                <td> <?php echo e($page->location); ?> </td>
                                                <td><?php echo e($page->language); ?></td>
                                                <td>
                                                    <?php if( $page->visibility==1): ?>
                                                        <i class="fas fa-eye"></i>
                                                    <?php else: ?>
                                                        <i class="fas fa-eye-slash "></i>
                                                    <?php endif; ?>
                                                </td>

                                                <td><?php echo e($page->created_at); ?></td>
                                                <?php if(Sentinel::getUser()->hasAccess(['pages_write']) || Sentinel::getUser()->hasAccess(['pages_delete']) ): ?>
                                                    <td>
                                                        <?php if(Sentinel::getUser()->hasAccess(['pages_write'])): ?>
                                                            <a class="btn btn-light active btn-xs"
                                                               href="<?php echo e(route('edit-pages',['id'=>$page->id])); ?>"><i
                                                                    class="fa fa-edit"></i>
                                                                <?php echo e(__('edit')); ?>

                                                            </a>
                                                        <?php endif; ?>
                                                        <?php if(Sentinel::getUser()->hasAccess(['pages_delete'])): ?>
                                                            <a href="javascript:void(0)"
                                                               class="btn btn-light active btn-xs"
                                                               onclick="delete_item('pages','<?php echo e($page->id); ?>')"><i
                                                                    class="fa fa-trash"></i>
                                                                <?php echo e(__('delete')); ?>

                                                            </a>
                                                        <?php endif; ?>
                                                    </td>
                                                <?php endif; ?>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-sm-6">
                                        <div class="block-header">
                                            <h2><?php echo e(__('Showing')); ?> <?php echo e($pages->firstItem()); ?> <?php echo e(__('to')); ?> <?php echo e($pages->lastItem()); ?> <?php echo e(__('of')); ?> <?php echo e($pages->total()); ?> <?php echo e(__('entries')); ?></h2>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-6 text-right">
                                        <div class="table-info-pagination float-right">
                                            <?php echo $pages->render(); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- page info end-->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/Modules/Page/Providers/../Resources/views/pages.blade.php ENDPATH**/ ?>