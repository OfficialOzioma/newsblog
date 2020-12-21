<div class="col-lg-4">
    <div class="footer-widget">
        <h3><?php echo e(data_get($detail, 'title')); ?></h3>
        <p><?php echo e(__('subscribe_description')); ?></p>
        <form action="<?php echo e(route('subscribe.newsletter')); ?>" class="tr-form" method="POST">
            <?php echo csrf_field(); ?>
            <input name="email" type="email" class="form-control" placeholder="<?php echo e(__('email_address')); ?>" required>
            <button type="submit" class="btn btn-primary"><?php echo e(__('subscribe')); ?></button>
        </form>
    </div>
</div>
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/widgets/footer/newsletter.blade.php ENDPATH**/ ?>