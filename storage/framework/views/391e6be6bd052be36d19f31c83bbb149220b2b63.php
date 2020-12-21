<?php
    $roles= Modules\User\Entities\Role::allRole();
?>

<?php echo Form::open(['route' => ['change-role',$param[0],$param[1]], 'method' => 'post','enctype'=>'multipart/form-data']); ?>


          <div class="modal-body">
              <div class="form-group">
                  <label for="recipient-name" class="col-form-label"><?php echo e(__('role')); ?></label>
                  <select class="form-control" name="slug">
                      <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <option value="<?php echo e($role->slug); ?>"><?php echo e($role->name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </select>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="m-r-10 fas fa-window-close"></i><?php echo e(__('close')); ?></button>
              <button type="submit" class="btn btn-primary"><i class="m-r-10 mdi mdi-content-save-all"></i><?php echo e(__('save_changes')); ?></button>
          </div>

<?php echo e(Form::close()); ?>

<?php /**PATH /home/officialozioma/Downloads/zip/project/onno/onno/Modules/Common/Providers/../Resources/views/modal/role-change.blade.php ENDPATH**/ ?>