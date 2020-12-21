<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#"><?php echo e(__('dashboard')); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <?php if(Sentinel::getUser()->roles[0]->id != 4 && Sentinel::getUser()->roles[0]->id != 5): ?>
                    <li class="nav-item ">
                        <a class="nav-link <?php echo $__env->yieldContent('home'); ?>" href="<?php echo e(route('dashboard')); ?>">
                            <i class="fas fa-home fa-th-large"></i><?php echo e(__('dashboard')); ?>

                        </a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item ">
                        <a class="nav-link <?php echo $__env->yieldContent('home'); ?>" href="<?php echo e(route('user-account')); ?>">
                            <i class="fas fa-home fa-th-large"></i><?php echo e(__('profile')); ?>

                        </a>
                    </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['post_read']) || Sentinel::getUser()->hasAccess(['post_write']) || Sentinel::getUser()->hasAccess(['post_delete'])): ?>
                        <li class="nav-item ">
                            <a class="nav-link <?php echo $__env->yieldContent('post'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('post-aria-expanded', 'aria-expanded=false'); ?> data-target="#submenu-2" aria-controls="submenu-2">
                                <i class="fas fa-fw fa-th-list"></i><?php echo e(__('posts')); ?>

                            </a>
                            <div id="submenu-2" class="collapse submenu <?php echo $__env->yieldContent('post-show'); ?>">
                                <ul class="nav flex-column">
                                    <?php if(Sentinel::getUser()->hasAccess(['post_write'])): ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo $__env->yieldContent('create_article'); ?>" href="<?php echo e(route('create-article')); ?>"><?php echo e(__('create_article')); ?> </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo $__env->yieldContent('create_video'); ?>" href="<?php echo e(route('create-video-post')); ?>"><?php echo e(__('create_video_post')); ?> </a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $__env->yieldContent('post-active'); ?>" href="<?php echo e(route('post')); ?>"><?php echo e(__('all_post')); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $__env->yieldContent('slider-post-active'); ?>" href="<?php echo e(route('slider-posts')); ?>"><?php echo e(__('slider_posts')); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $__env->yieldContent('feature-post-active'); ?>" href="<?php echo e(route('featured-posts')); ?>"><?php echo e(__('featured_posts')); ?></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $__env->yieldContent('breaking-post-active'); ?>" href="<?php echo e(route('breaking-posts')); ?>"><?php echo e(__('breaking_posts')); ?></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $__env->yieldContent('recommended-post-active'); ?>" href="<?php echo e(route('recommended-posts')); ?>"><?php echo e(__('recommended_posts')); ?></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $__env->yieldContent('editor-picks-active'); ?>" href="<?php echo e(route('editor-picks')); ?>"><?php echo e(__('editor_picks')); ?></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $__env->yieldContent('pending-post-active'); ?>" href="<?php echo e(route('pending-posts')); ?>"><?php echo e(__('pending_posts')); ?></a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $__env->yieldContent('submitted-post-active'); ?>" href="<?php echo e(route('submitted-posts')); ?>"><?php echo e(__('submitted_posts')); ?></a>
                                    </li>
                                    <?php if(Sentinel::getUser()->hasAccess(['category_read']) || Sentinel::getUser()->hasAccess(['category_write']) || Sentinel::getUser()->hasAccess(['category_delete'])): ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo $__env->yieldContent('category-active'); ?>" href="<?php echo e(route('categories')); ?>"><?php echo e(__('categories')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if(Sentinel::getUser()->hasAccess(['sub_category_read']) || Sentinel::getUser()->hasAccess(['sub_category_write']) || Sentinel::getUser()->hasAccess(['sub_category_delete'])): ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo $__env->yieldContent('sub-category-active'); ?>" href="<?php echo e(route('sub-categories')); ?>"><?php echo e(__('sub_categories')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>


                    <?php if(Sentinel::getUser()->hasAccess(['comments_read']) || Sentinel::getUser()->hasAccess(['comments_write']) || Sentinel::getUser()->hasAccess(['comments_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('comments_active'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('comments-aria-expanded', 'aria-expanded=false'); ?> data-target="#submenu-115" aria-controls="submenu-115">
                                <i class="fas fa-fw fa-comments"></i><?php echo e(__('comments')); ?>

                            </a>
                            <div id="submenu-115" class="collapse submenu <?php echo $__env->yieldContent('comments-show'); ?>">
                                <ul class="nav flex-column">
                                    <?php if(Sentinel::getUser()->hasAccess(['comments_read']) || Sentinel::getUser()->hasAccess(['comments_delete'])): ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo $__env->yieldContent('comments'); ?>" href="<?php echo e(route('comments')); ?>">
                                                <?php echo e(__('all_comments')); ?>

                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <?php if(Sentinel::getUser()->hasAccess(['comments_write'])): ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo $__env->yieldContent('comments-setting'); ?>" href="<?php echo e(route('setting-comment')); ?>">
                                                <?php echo e(__('settings')); ?>

                                            </a>
                                        </li>
                                    <?php endif; ?>

                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['pages_read']) || Sentinel::getUser()->hasAccess(['pages_write']) || Sentinel::getUser()->hasAccess(['pages_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('pages'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('page-aria-expanded', 'aria-expanded=false'); ?> data-target="#submenu-1" aria-controls="submenu-1">
                                <i class="fa fa-fw fa-file"></i> <?php echo e(__('pages')); ?>

                            </a>
                            <div id="submenu-1" class="collapse submenu <?php echo $__env->yieldContent('page-show'); ?>">
                                <ul class="nav flex-column">
                                    <?php if(Sentinel::getUser()->hasAccess(['pages_write'])): ?>
                                        <li class="nav-item">
                                            <a class="nav-link <?php echo $__env->yieldContent('add-page-active'); ?>" href="<?php echo e(route('add-page')); ?>"><?php echo e(__('add_page')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $__env->yieldContent('pages-list'); ?>" href="<?php echo e(route('pages')); ?>"><?php echo e(__('pages')); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>
                    <?php if(Sentinel::getUser()->hasAccess(['polls_read']) || Sentinel::getUser()->hasAccess(['polls_write']) || Sentinel::getUser()->hasAccess(['polls_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('poll'); ?>" href="<?php echo e(route('polls')); ?>">
                                <i class="mdi mdi-poll"></i><?php echo e(__('polls')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(Sentinel::getUser()->hasAccess(['ads_read']) || Sentinel::getUser()->hasAccess(['ads_write']) || Sentinel::getUser()->hasAccess(['ads_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('ads'); ?>" href="<?php echo e(route('ads')); ?>">
                                <i class="fab fa-fw fa-buysellads"></i><?php echo e(__('ads')); ?>

                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['menu_read']) || Sentinel::getUser()->hasAccess(['menu_write']) || Sentinel::getUser()->hasAccess(['menu_delete']) ||
                        Sentinel::getUser()->hasAccess(['menu_item_read']) || Sentinel::getUser()->hasAccess(['menu_item_write']) || Sentinel::getUser()->hasAccess(['menu_item_delete']) ||
                        Sentinel::getUser()->hasAccess(['theme_section_read']) || Sentinel::getUser()->hasAccess(['theme_section_write'])
                        || Sentinel::getUser()->hasAccess(['theme_section_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('appearance'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('appearance-aria-expanded', 'aria-expanded=false'); ?> data-target="#submenu-101" aria-controls="submenu-101">
                                <i class="fa fa-th"></i> <?php echo e(__('appearance')); ?>

                            </a>
                            <div id="submenu-101" class="collapse submenu <?php echo $__env->yieldContent('appearance-show'); ?>">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $__env->yieldContent('menu'); ?>" href="<?php echo e(route('menu-item')); ?>"><?php echo e(__('menu')); ?></a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link <?php echo $__env->yieldContent('theme_option'); ?>" href="<?php echo e(route('themes-options')); ?>"><?php echo e(__('themes_options')); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['theme_section_read']) || Sentinel::getUser()->hasAccess(['theme_section_write'])
                                        || Sentinel::getUser()->hasAccess(['theme_section_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('sections'); ?>" href="<?php echo e(route('sections')); ?>">
                                <i class="fas fa-cogs fa-th-large"></i><?php echo e(__('home_content')); ?>

                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(Sentinel::getUser()->hasAccess(['widget_read']) || Sentinel::getUser()->hasAccess(['widget_write']) || Sentinel::getUser()->hasAccess(['widget_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('widgets'); ?>" href="<?php echo e(route('widgets')); ?>">
                                <i class="fas fa-fw fa-th-large"></i><?php echo e(__('widgets')); ?>

                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['socials_read']) || Sentinel::getUser()->hasAccess(['socials_write']) || Sentinel::getUser()->hasAccess(['socials_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('social'); ?>" href="<?php echo e(route('socials')); ?>">
                                <i class="mdi mdi-poll"></i><?php echo e(__('socials')); ?>

                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['notification_write'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('notification_active'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('notification-aria-expanded', 'aria-expanded=false'); ?> data-target="#submenu-113" aria-controls="submenu-113">
                                <i class="fas fa-bell"></i><?php echo e(__('notification')); ?>

                            </a>
                            <div id="submenu-113" class="collapse submenu <?php echo $__env->yieldContent('notification-show'); ?>">
                                <ul class="nav flex-column">
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('send_notification'); ?>" href="<?php echo e(route('send-notification')); ?>">
                                            <?php echo e(__('send_notification')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('send_custom_notification'); ?>" href="<?php echo e(route('send-custom-notification')); ?>">
                                            <?php echo e(__('send_custom_notification')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('notify_setting'); ?>" href="<?php echo e(route('notification-setting')); ?>">
                                            <?php echo e(__('settings')); ?>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['newsletter_read']) || Sentinel::getUser()->hasAccess(['newsletter_write']) || Sentinel::getUser()->hasAccess(['newsletter_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('newsletter_active'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('newsletter-aria-expanded', 'aria-expanded=false'); ?> data-target="#submenu-114" aria-controls="submenu-114">
                                <i class="fa fa-paper-plane"></i><?php echo e(__('newsletter')); ?>

                            </a>
                            <div id="submenu-114" class="collapse submenu <?php echo $__env->yieldContent('newsletter-show'); ?>">
                                <ul class="nav flex-column">
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('send_newsletter'); ?>" href="<?php echo e(route('send-email-to-subscriber')); ?>">
                                            <?php echo e(__('send_email_to_subscribers')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('subscriber'); ?>" href="<?php echo e(route('subscriber-list')); ?>">
                                            <?php echo e(__('subscribers')); ?>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['contact_message_read']) || Sentinel::getUser()->hasAccess(['contact_message_write']) || Sentinel::getUser()->hasAccess(['contact_message_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('contact_message'); ?>" href="<?php echo e(route('contact')); ?>">
                                <i class="fas fa-fw fa-space-shuttle"></i><?php echo e(__('contact_messages')); ?>

                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['permission_read']) || Sentinel::getUser()->hasAccess(['permission_write']) || Sentinel::getUser()->hasAccess(['permission_delete']) ||
                        Sentinel::getUser()->hasAccess(['role_read']) || Sentinel::getUser()->hasAccess(['role_write']) || Sentinel::getUser()->hasAccess(['role_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('rolePermission'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('rolePermission_', 'aria-expanded=false'); ?> data-target="#submenu-110" aria-controls="submenu-110">
                                <i class="fas fa-fw fa-key"></i><?php echo e(__('roles_&_permissions')); ?>

                            </a>
                            <div id="submenu-110" class="collapse submenu <?php echo $__env->yieldContent('p-show'); ?>">

                                <ul class="nav flex-column">
                                    <?php if(Sentinel::getUser()->hasAccess(['permission_read']) || Sentinel::getUser()->hasAccess(['permission_write']) || Sentinel::getUser()->hasAccess(['permission_delete'])): ?>
                                        <li class="nav-item ">
                                            <a class="nav-link <?php echo $__env->yieldContent('rolePermissionsub'); ?>" href="<?php echo e(route('roles')); ?>">
                                                <?php echo e(__('roles')); ?>

                                            </a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(Sentinel::getUser()->hasAccess(['role_read']) || Sentinel::getUser()->hasAccess(['role_write']) || Sentinel::getUser()->hasAccess(['role_delete'])): ?>
                                        <li class="nav-item ">
                                            <a class="nav-link <?php echo $__env->yieldContent('permissions'); ?>" href="<?php echo e(route('permissions')); ?>">
                                                <?php echo e(__('permissions')); ?>

                                            </a>
                                        </li>
                                    <?php endif; ?>

                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['users_read']) || Sentinel::getUser()->hasAccess(['users_write']) || Sentinel::getUser()->hasAccess(['users_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('user-list'); ?>" href="<?php echo e(route('users-list')); ?>">
                                <i class="fas fa-fw fa-users"></i><?php echo e(__('users')); ?>

                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['settings_read']) || Sentinel::getUser()->hasAccess(['settings_write']) || Sentinel::getUser()->hasAccess(['settings_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('settings_active'); ?>" href="#" data-toggle="collapse" <?php echo $__env->yieldContent('settings', 'aria-expanded=false'); ?> data-target="#submenu-111" aria-controls="submenu-111">
                                <i class="fas fa-fw fa-cog"></i><?php echo e(__('settings')); ?>

                            </a>
                            <div id="submenu-111" class="collapse submenu <?php echo $__env->yieldContent('s-show'); ?>">
                                <ul class="nav flex-column">
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('setting-general'); ?>" href="<?php echo e(route('setting-general')); ?>">
                                            <?php echo e(__('general_settings')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('setting-company'); ?>" href="<?php echo e(route('setting-company')); ?>">
                                            <?php echo e(__('company_informations')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('setting-email'); ?>" href="<?php echo e(route('setting-email')); ?>">
                                            <?php echo e(__('email_settings')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('setting-storage'); ?>" href="<?php echo e(route('setting-storage')); ?>">
                                            <?php echo e(__('storage_settings')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('setting-seo'); ?>" href="<?php echo e(route('setting-seo')); ?>">
                                            <?php echo e(__('seo_settings')); ?>

                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('setting-recaptcha'); ?>" href="<?php echo e(route('setting-recaptcha')); ?>">
                                            <?php echo e(__('recaptcha_settings')); ?>

                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('setting-url'); ?>" href="<?php echo e(route('settings-url')); ?>">
                                            <?php echo e(__('url_settings')); ?>

                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('setting-ffmpeg'); ?>" href="<?php echo e(route('settings-ffmpeg')); ?>">
                                            <?php echo e(__('ffmpeg_settings')); ?>

                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('setting-custom'); ?>" href="<?php echo e(route('setting-custom-header-footer')); ?>">
                                            <?php echo e(__('custom_header_footer')); ?>

                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('cron-information'); ?>" href="<?php echo e(route('cron-information')); ?>">
                                            <?php echo e(__('cron_information')); ?>

                                        </a>
                                    </li>

                                    <li class="nav-item ">
                                        <a class="nav-link <?php echo $__env->yieldContent('email_temp'); ?>" href="<?php echo e(route('email-templates')); ?>">
                                            <?php echo e(__('email_template')); ?>

                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php if(Sentinel::getUser()->hasAccess(['language_settings_read']) || Sentinel::getUser()->hasAccess(['language_settings_write']) || Sentinel::getUser()->hasAccess(['language_settings_delete'])): ?>
                        <li class="nav-item">
                            <a class="nav-link <?php echo $__env->yieldContent('language-setting'); ?>" href="<?php echo e(route('language-settings')); ?>">
                                <i class="fas fa-fw fa-globe"></i><?php echo e(__('language_settings')); ?>

                            </a>
                        </li>
                    <?php endif; ?>

                    <li class="nav-item">
                        <a class="nav-link" href="#"> </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#"> </a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/Modules/Common/Providers/../Resources/views/layouts/left-sidebar.blade.php ENDPATH**/ ?>