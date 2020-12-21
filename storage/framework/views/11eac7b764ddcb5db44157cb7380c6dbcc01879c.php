<?php $__env->startSection('content'); ?>

 <div class="sg-page-content">
        <div class="container">
        	<?php if($page->show_breadcrumb == 1): ?>
        	 <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(url('')); ?>"><?php echo e(__('home')); ?></a></li>
                        <li class="breadcrumb-item"><a href="#"><?php echo $page->title ?? ''; ?></a></li>
                    </ol>
                </nav>
                <?php endif; ?>
	            <div class="row">
	            	<div class="<?php echo e($page->template == 2? 'col-md-7 col-lg-8':'col-md-12 col-lg-12'); ?> sg-sticky">
	            		<div class="row">
			                <div class="col-md-12 col-lg-12 sg-sticky">
			                    <div class="theiaStickySidebar post-details">
			                        <div class="sg-section">
			                            <div class="section-content">
			                                <div class="sg-post">
			                                    <div class="entry-content p-4">
			                                    	<?php if($page->show_title == 1): ?>
			                                            <h3><?php echo $page->title ?? ''; ?></h3>
			                                        <?php endif; ?>

			                                        <div class="paragraph p-t-20">
			                                           <?php echo e(settingHelper('about_us_description')); ?>

			                                        </div>
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                <div class="col-md-12 col-lg-12 sg-sticky">
			                	<div class="row">
			                		<div class="<?php echo e($page->template == 2? 'col-md-12':'col-md-6'); ?>">
			                			<div class="sg-section">
				                            <div class="section-content">
				                                <div class="section-title">
				                                    <h1><?php echo e(__('send_a_message')); ?></h1>
				                                </div><!-- /.section-title -->
				                                <form class="contact-form" name="contact-form" method="post" action="<?php echo e(route('site.send.message')); ?>">
				                                	<?php echo csrf_field(); ?>
				                                    <div class="row">
				                                        <div class="col-lg-12">
				                                            <div class="form-group">
				                                                <label for="one"><?php echo e(__('name')); ?> *</label>
				                                                <input type="text" class="form-control" name="name" id="one" placeholder="<?php echo e(__('input_user')); ?>">
				                                            </div>
				                                        </div>
				                                        <div class="col-lg-12">
				                                            <div class="form-group">
				                                                <label for="two"><?php echo e(__('email')); ?> *</label>
				                                                <input type="email" class="form-control" name="email" id="two" placeholder="<?php echo e(__('input_email')); ?>">
				                                            </div>
				                                        </div>
				                                        <div class="col-sm-12">
				                                            <div class="form-group">
				                                                <label for="four"><?php echo e(__('message')); ?> *</label>
				                                                <textarea name="message" class="form-control" rows="7" id="four" placeholder="<?php echo e(__('input_message')); ?>"></textarea>
				                                            </div>
				                                        </div>

				                                        <?php if( settingHelper('captcha_visibility') == 1 ): ?>
                                                            <div class="col-lg-12 text-center mb-4">
                                                                  <?php echo NoCaptcha::renderJs(); ?>

                                                                  <?php echo NoCaptcha::display(); ?>

                                                            </div>
						                                <?php endif; ?>

				                                    </div>
				                                    <div class="form-group">
				                                        <button type="submit" class="btn btn-primary"><?php echo e(__('submit_now')); ?></button>
				                                    </div>
				                                </form>
				                            </div><!-- /.section-content -->
				                        </div><!-- /.sg-section -->
			                		</div>
			                		<div class="<?php echo e($page->template == 2? 'col-md-12':'col-md-6'); ?> mt-5">
			                			<div class="theiaStickySidebar">
					                        <div class="sg-section">
					                            <div class="section-content">
					                                <div class="sg-post footer-widget">
					                                    <div class="entry-content p-4">
					                                        <ul class="global-list">
								                                <li><i class="fa fa-home mr-2" aria-hidden="true"></i><?php echo e(settingHelper('address')); ?></li>
								                                <li><i class="fa fa-home mr-2" aria-hidden="true"></i><?php echo e(settingHelper('city')); ?> <?php echo e(settingHelper('zip_code')); ?></li>
								                                <li><i class="fa fa-volume-control-phone mr-2" aria-hidden="true"></i><?php echo e(settingHelper('phone')); ?></li>
								                                <li><i class="fa fa-envelope-o mr-2" aria-hidden="true"></i> <a href="#"><?php echo e(settingHelper('email')); ?></a></li>
								                            </ul>
					                                    </div>

								                        <div class="d-flex justify-content-lg-center footer-content">
										                    <div class="sg-socail">
										                        <ul class="global-list d-flex">
										                            <?php $__currentLoopData = $socialMedias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $socialMedia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
										                                <li><a href="<?php echo e($socialMedia->url); ?>" target="_blank"><i class="<?php echo e($socialMedia->icon); ?>" aria-hidden="true"></i></a></li>
										                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

										                        </ul>
										                    </div>
										                </div>
					                                </div>
					                            </div>
					                        </div>
					                    </div>
			                	</div>
			                </div>
			            </div>
			        </div>
		        </div>
		        <?php if($page->template == 2): ?>
                <div class="col-md-5 col-lg-4 sg-sticky">
                    <div class="sg-sidebar theiaStickySidebar">
                        <?php echo $__env->make('site.partials.right_sidebar_widgets', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<?php if(defaultModeCheck() == 'sg-dark'): ?>
		<script type="text/javascript">
		    jQuery(function($){
		        $('.g-recaptcha').attr('data-theme', 'dark');
		    });
		</script>
	<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/resources/views/site/pages/contact_us.blade.php ENDPATH**/ ?>