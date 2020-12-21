<?php
$headerWidgets = data_get($widgets, \Modules\Widget\Enums\WidgetLocation::HEADER, []);
?>

<?php if(data_get(activeTheme(), 'options.header_style') == 'header_1'): ?>
    <?php echo $__env->make('site.layouts.header.style_1', ['headerWidgets' => $headerWidgets], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(data_get(activeTheme(), 'options.header_style') == 'header_2'): ?>
    <?php echo $__env->make('site.layouts.header.style_2', ['headerWidgets' => $headerWidgets], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(data_get(activeTheme(), 'options.header_style') == 'header_3'): ?>
    <?php echo $__env->make('site.layouts.header.style_3', ['headerWidgets' => $headerWidgets], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>


<?php if(data_get(activeTheme(), 'options.header_style') != 'header_1'): ?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <?php if(session('error')): ?>
                <div id="error_m" class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>
            <?php if(session('success')): ?>
                <div id="success_m" class="alert alert-success">
                    <?php echo e(session('success')); ?>

                </div>
            <?php endif; ?>
            <?php if(isset($errors)): ?>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/layouts/header.blade.php ENDPATH**/ ?>