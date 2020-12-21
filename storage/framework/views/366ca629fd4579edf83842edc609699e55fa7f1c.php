<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php if(!blank($image)): ?>
	    <div class="col-md-2" id="row_<?php echo e($image->id); ?>">

	        <?php if(isFileExist(@$image, @$image->thumbnail)): ?>
	            <img id='<?php echo e($image->id); ?>' src="<?php echo e(basePath(@$image)); ?>/<?php echo e(@$image->thumbnail); ?>" alt="image"
	                 class="image img-responsive img-thumbnail">
	        <?php else: ?>
	            <img id='<?php echo e($image->id); ?>' src="<?php echo e(static_asset('default-image/default-100x100.png')); ?>" width="200" height="200"
	                 alt="image" class="image img-responsive img-thumbnail">
	        <?php endif; ?>

	    </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/Modules/Gallery/Providers/../Resources/views/ajax-images.blade.php ENDPATH**/ ?>