<?php $__env->startSection('poll'); ?>
    active
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
            <!-- page info start-->
            <?php echo Form::open(['route' => ['update-poll',$poll->id],'method' => 'put','enctype'=>'multipart/form-data']); ?>

            <div class="row clearfix">
                <div class="col-12">
                    <div class="add-new-page  bg-white p-20 m-b-20">
                        <div class="add-new-header clearfix">
                            <div class="row">
                                <div class="col-6">
                                    <div class="block-header">
                                        <h2><?php echo e(__('update_poll')); ?></h2>
                                    </div>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="<?php echo e(route('polls')); ?>" class="btn btn-primary btn-add-new btn-sm"><i
                                            class="fas fa-arrow-left"></i>
                                        <?php echo e(__('back_to_polls')); ?>

                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
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
                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="poll-question" class="col-form-label"><?php echo e(__('question')); ?>*</label>
                                <textarea name="question" id="poll-question" required
                                          class="form-control"><?php echo e($poll->question); ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="start_date"><?php echo e(__('start_date')); ?>*</label>
                            <div class="input-group">
                                <label class="input-group-text" for="start_date"><i
                                        class="fa fa-calendar-alt"></i></label>
                                <input type="text" class="form-control date" id="start_date" name="start_date"
                                       value="<?php echo e(Carbon\Carbon::parse($poll->start_date)->format('F d, Y g:i A')); ?>"/>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="end_date"><?php echo e(__('end_date')); ?>*</label>
                            <div class="input-group">
                                <label class="input-group-text" for="end_date"><i
                                        class="fa fa-calendar-alt"></i></label>
                                <input type="text" class="form-control date" id="end_date" name="end_date"
                                       value="<?php echo e(Carbon\Carbon::parse($poll->end_date)->format('F d, Y g:i A')); ?>"/>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-sm-12" id="poll-option-area">
                                <?php $__currentLoopData = $poll->pollOptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="row poll-option-<?php echo e($option->id); ?>" id="<?php echo e($option->id); ?>">
                                        <div class="col-11">
                                            <div class="form-group">
                                                <label for="option_1" class="col-form-label"><?php echo e(__('option')); ?></label>
                                                <i class='fa fa-bars' aria-hidden='true'></i>
                                                <input id="option_1" name="option[]" type="text" class="form-control"
                                                        value="<?php echo e($option->option); ?>">
                                            </div>
                                        </div>
                                        <div class="col-1">
                                            <button type="button" class="btn btn-danger float-right  m-t-35 row_remove">
                                                <i class="m-r-0 mdi mdi-delete"></i></button>

                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>

                            <div class="col-sm-12">
                                <div class="row poll-option-1" id="1">
                                    <div class="col-11">
                                        <div class="form-group">
                                            <label for="option" class="col-form-label"><?php echo e(__('option')); ?></label>
                                            <input id="option" name="option[]" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="btn btn-primary float-right m-t-35"
                                                onclick="addRowFeature(1);">
                                            <i class="m-r-0 mdi mdi-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="auth_required"><?php echo e(__('auth_required')); ?>*</label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="auth_required" id="for_all_user" value="1"
                                           <?php if($poll->auth_required==1): ?> checked="" <?php endif; ?> class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('yes')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="auth_required" id="only_register_user" value="0"
                                           <?php if($poll->auth_required==0): ?> checked="" <?php endif; ?> class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('no')); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="row p-l-15">
                            <div class="col-12 col-md-4">
                                <div class="form-title">
                                    <label for="status"><?php echo e(__('status')); ?>*</label>
                                </div>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="status" id="poll_status_actvie" value="1"
                                           <?php if($poll->status==1): ?> checked="" <?php endif; ?> class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('active')); ?></span>
                                </label>
                            </div>
                            <div class="col-3 col-md-2">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="status" id="poll_status_inactvie" value="0"
                                           <?php if($poll->status==0): ?> checked="" <?php endif; ?> class="custom-control-input">
                                    <span class="custom-control-label"><?php echo e(__('inactive')); ?></span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group form-float form-group-sm">
                                    <button type="submit" class="btn btn-primary float-right m-t-20"><i
                                            class="m-r-10 mdi mdi-plus"></i><?php echo e(__('update_poll')); ?></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php echo Form::close(); ?>

        <!-- page info end-->
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('include_js'); ?>

    <script src="<?php echo e(static_asset('vendor')); ?>/jquery/jquery-ui-1.12.1.js"></script>
    <script type="text/javascript">
        addRowFeature = () => {

            let value = $('#option').val().trim();
            if (value == undefined || value == '') {
                return;
            }

            var current = parseInt($('#poll-option-area .row:first').attr('id')) + 1;
            // console.log(current);

            if (isNaN(current)) {
                var last_id = 1;
            } else {
                var last_id = current + 1
            }


            var newRow = "<div class='row poll-option-" + last_id + "' id='" + last_id + "'>";


            newRow += "<div class='col-11'>";
            newRow += "<div class='form-group'>";
            newRow += "<label for='option_1' class='col-form-label'><?php echo e(__('option')); ?></label>";
            newRow += "<i class='fa fa-bars' aria-hidden='true'></i><input id='option_1' name='option[]' type='text' class='form-control' value='" + value + "'>";
            newRow += "</div>";
            newRow += "</div>";
            newRow += "<div class='col-1'>";
            newRow += "<button type='button' class='btn btn-danger float-right m-t-35 row_remove'><i class='m-r-0 mdi mdi-delete'></i></button>";
            newRow += "</div>";
            newRow += "</div>";

            $("#poll-option-area").append(newRow);
            $('#option').val('');

        };

        $('#option').keypress(function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                addRowFeature();
            }

        })

        $(document).on("click", ".row_remove", function () {
            let element = $(this).parents('.row');
            let id = element.attr("id");
            $('#' + id).remove();
        });

        $("#poll-option-area").sortable();

    </script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('common::layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/Modules/Post/Providers/../Resources/views/poll_edit.blade.php ENDPATH**/ ?>