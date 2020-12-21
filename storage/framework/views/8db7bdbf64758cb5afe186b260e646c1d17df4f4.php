<?php
$footerWidgets = data_get($widgets, \Modules\Widget\Enums\WidgetLocation::FOOTER, []);
?>

<?php echo $__env->make('site.partials.ads', ['ads' => $footerWidgets], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if(data_get(activeTheme(), 'options.footer_style') == 'footer_1'): ?>
    <?php echo $__env->make('site.layouts.footer.style_1', ['footerWidgets' => $footerWidgets], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(data_get(activeTheme(), 'options.footer_style') == 'footer_2'): ?>
    <?php echo $__env->make('site.layouts.footer.style_2', ['footerWidgets' => $footerWidgets], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php elseif(data_get(activeTheme(), 'options.footer_style') == 'footer_3'): ?>
    <?php echo $__env->make('site.layouts.footer.style_3', ['footerWidgets' => $footerWidgets], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/layouts/footer.blade.php ENDPATH**/ ?>