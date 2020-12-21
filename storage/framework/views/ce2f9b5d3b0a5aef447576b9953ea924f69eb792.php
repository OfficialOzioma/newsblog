<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo $__env->make('site.partials.seo_og', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <title><?php echo e(settingHelper('seo_title')); ?></title>

    
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/structure.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/main.css')); ?>">
    <?php if($language->text_direction == "RTL"): ?>
        <link rel="stylesheet" href="<?php echo e(static_asset('site/css/rtl.css')); ?>">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/custom.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(static_asset('site/css/responsive.css')); ?>">

    <?php echo $__env->yieldContent('style'); ?>


    <link href="https://fonts.googleapis.com/css2?family=<?php echo e(data_get(activeTheme(), 'options.fonts')); ?>:wght@400;500;600;700&display=swap" rel="stylesheet">

    
    <link rel="icon" href="<?php echo e(static_asset(''.settingHelper('favicon'))); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo e(static_asset('site/images/ico/apple-touch-icon-precomposed.png')); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo e(static_asset('site/images/ico/apple-touch-icon-114-precomposed.png')); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo e(static_asset('site/images/ico/apple-touch-icon-72-precomposed.png')); ?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo e(static_asset('site/images/ico/apple-touch-icon-57-precomposed.png')); ?>">

    <?php if(settingHelper('predefined_header')!=null): ?>
        <?php echo settingHelper('predefined_header'); ?>

    <?php endif; ?>
    <?php if(settingHelper('custom_header_style')!=null): ?>
        <style>
            <?php echo settingHelper('custom_header_style'); ?>

        </style>
    <?php endif; ?>

    <?php echo $__env->make('feed::links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    <!-- Template Developed By  -->
    <?php echo $__env->yieldPushContent('style'); ?>

    <style type="text/css">
      :root {
          --primary-color: <?php echo e(data_get(activeTheme(), 'options.primary_color')); ?>;
          --primary-font: <?php echo e(\Config::get('site.fonts.'.data_get(activeTheme(), 'options.fonts').'')); ?>;
          --plyr-color-main:<?php echo e(data_get(activeTheme(), 'options.primary_color')); ?>;
      }
    </style>

    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo e(settingHelper('google_analytics_id')); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo e(settingHelper('google_analytics_id')); ?>');
    </script>
</head>

<body class="<?php echo e(defaultModeCheck()); ?>">
    <div id="switch-mode" class="<?php echo e(defaultModeCheck() == 'sg-dark'? 'active':''); ?>">
        <div class="sm-text"><?php echo e(__('dark_mode')); ?></div>
        <div class="sm-button">
            <input type="hidden" id="url" value="<?php echo e(url('/')); ?>">
          <span></span>
        </div>
    </div>

<?php echo $__env->make('site.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>

    <div class="scrollToTop" id="display-nothing">
        <a href="#"><i class="fa fa-angle-up"></i></a>
    </div>
<?php echo $__env->make('site.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<script src="<?php echo e(static_asset('site/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(static_asset('site/js/popper.min.js')); ?>"></script>
<script src="<?php echo e(static_asset('site/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(static_asset('site/js/slick.min.js')); ?>"></script>
<script src="<?php echo e(static_asset('site/js/theia-sticky-sidebar.min.js')); ?>"></script>
<script src="<?php echo e(static_asset('site/js/magnific-popup.min.js')); ?>"></script>
<script src="<?php echo e(static_asset('site/js/carouFredSel.js')); ?>"></script>
<?php echo $__env->yieldPushContent('script'); ?>
<script src="<?php echo e(static_asset('site/js/main.js')); ?>"></script>
<script src="<?php echo e(static_asset('js/custom.js')); ?>"></script>

<script type="text/javascript" src="<?php echo e(static_asset('site/js')); ?>/jquery.cookie.min.js"></script>

    <?php
        if(settingHelper('notification_status') == '1'){
            $onesignal_appid                    =   settingHelper('onesignal_app_id');
            $onesignal_actionmessage            =   settingHelper('onesignal_action_message');
            $onesignal_acceptbuttontext         =   settingHelper('onesignal_accept_button');
            $onesignal_cancelbuttontext         =   settingHelper('onesignal_cancel_button');
        }
    ?>
    <script src="<?php echo e(static_asset('site/js')); ?>/bootstrap-tagsinput.min.js" async></script>

    <?php if(settingHelper('notification_status') == '1'): ?>
    <!-- oneSignal -->
    <script src="<?php echo e(static_asset('site/js')); ?>/OneSignalSDK.js" async=""></script>

    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(["init", {
            appId: "<?php echo e($onesignal_appid ?? ''); ?>",
            subdomainName: 'push',
            autoRegister: false,
            promptOptions: {
                /* These prompt options values configure both the HTTP prompt and the HTTP popup. */
                /* actionMessage limited to 90 characters */
                actionMessage: "<?php echo e($onesignal_actionmessage ?? ''); ?>",
                /* acceptButtonText limited to 15 characters */
                acceptButtonText: "<?php echo e($onesignal_acceptbuttontext ?? ''); ?>",
                /* cancelButtonText limited to 15 characters */
                cancelButtonText: "<?php echo e($onesignal_cancelbuttontext ?? ''); ?>"
            }
        }]);
    </script>

    <script src="<?php echo e(static_asset('site/js/onesignal_notification.js')); ?>"> </script>

    <?php endif; ?>


    <?php if(!blank(\Request::route())): ?>

        <?php if(\Request::route()->getName() == "article.detail"): ?>
            <?php if(settingHelper('adthis_option')==1 and settingHelper('addthis_public_id')!=null and \Request::route()->getName() == "article.detail"): ?>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo e(settingHelper('addthis_public_id')); ?>"></script>
            <?php endif; ?>

            <?php if(settingHelper('facebook_comment')==1): ?>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/<?php echo e(settingHelper('default_language')); ?>/sdk.js#xfbml=1&version=v8.0&appId=<?php echo e(settingHelper('facebook_app_id')); ?>&autoLogAppEvents=1" nonce="JOvaLAFF"></script>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php echo $__env->yieldContent('script'); ?>

    <?php if(isset($post)): ?>
    <?php if(!blank(\Request::route())): ?>
    <?php if(settingHelper('adthis_option')==1 and settingHelper('addthis_public_id')!=null and \Request::route()->getName() == "article.detail"): ?>
        <script type="text/javascript">
            (function($) {
                "use strict";
                var addthis_share = {
                    url: "<?php echo e(url()->current()); ?>",
                    title: "<?php echo e($post->title); ?>",
                    description: "<?php echo e(strip_tags(\Illuminate\Support\Str::limit($post->content, 130))); ?>",
                    media: "<?php echo e(basePath(@$post->image)); ?>/<?php echo e(@$post->image->big_image_two); ?>"
                }
            })(jQuery);
        </script>
    <?php endif; ?>
    <?php endif; ?>
    <?php endif; ?>

    <?php if(settingHelper('custom_footer_js')!=null): ?>
        <script>
            <?php echo base64_decode(settingHelper('custom_footer_js')); ?>

        </script>
    <?php endif; ?>

    <script src="<?php echo e(static_asset('site/js/custom.js')); ?>" type="text/javascript"></script>
</body>
</html>
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/layouts/app.blade.php ENDPATH**/ ?>