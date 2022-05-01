<?php $__env->startSection('content'); ?>
<div class="container">
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="card mt-3">
        <div class="card-body">
            <div class="d-flex">
                <h1>Edit Prospect <small class="text-muted"><?php echo e($prospect->name); ?></small></h1>
                <div class="ml-auto">
                    <div class="dropdown">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Actions
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="<?php echo e(route('admin.prospects.dashboard')); ?>">View Dashboard</a>
                          <a class="dropdown-item" href=<?php echo e(route('admin.prospects.show', ['prospect' => $prospect->id])); ?>>View Prospect</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item text-danger" href="#" onclick="deleteProspect()">Delete Prospect</a>
                            <form action="<?php echo e(route('admin.prospects.delete', $prospect->id)); ?>" id="delete-prospect-form" style="display:none" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row">
        <div class="col-md-4 offset-md-0 col-sm-8 offset-sm-2">
            
            <div class="card mt-3">
                <div class="card-body">
                    <?php if($prospect->profile_image): ?>
                        <img src="<?php echo e(Storage::url($prospect->profile_image)); ?>" style="max-width: 100%" alt="">
                    <?php else: ?>
                        <img src="/images/user.png" style="max-width: 100%" alt="">
                    <?php endif; ?>
                    <hr>
                    <button class="btn btn-outline-primary btn-sm btn-block" data-toggle="modal" data-target="#updateProfileImageModal">New Profile Image</button>
                    <?php if($prospect->profile_image): ?>
                        <button class="btn btn-outline-danger btn-sm btn-block" onclick="deleteProfileImage()"><i class="fas fa-trash"></i> Delete Profile Image</button>
                        <form action="<?php echo e(route('admin.prospects.delete.profile-image', $prospect->id)); ?>" method="POST" id="delete-profile-image-form">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                        </form>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mt-3">
                <div class="card-body">
                    <h5>Edit Personal Details</h5>
                    <hr>
                    <?php if($errors->count()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($message); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="<?php echo e(route('admin.prospects.update', $prospect->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo e($prospect->name); ?>">
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo e($prospect->email); ?>">
                        </div>

                        <button class="btn btn-primary float-right">Update Prospect</button>
                    </form>
                </div>
            </div><!-- /.card Prospect details-->

            <div class="card mt-3">
                <div class="card-body">
                    <h5>Edit Contact Details</h5>
                    <hr>
                    <?php if($prospect->contact): ?>
                        <?php echo $__env->make('admin.prospects.contacts.partials.edit-contact-form', ['prospect_id' => $prospect->id, 'contact' => $prospect->contact], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php else: ?>
                        <div class="d-flex">
                            <div class="mx-auto">
                                <a href="<?php echo e(route('admin.prospects.contacts.create', $prospect->id)); ?>" class="btn btn-outline-primary">Create Contact Details</a>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for updating profile image-->
<div class="modal fade" id="updateProfileImageModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Profile Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="<?php echo e(route('admin.prospects.update.profile-image', $prospect->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="form-group">
                    <label for="">Choose an Image</label>
                    <input type="file" class="form-control-file" name="image">
                </div>

                <button class="btn btn-primary float-right">Update Profile Image</button>
            </form>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('footer-scripts'); ?>
    <script>
        function deleteProfileImage() {
            var r = confirm("Are you sure you want to delete the profile image?")

            if (r) {
                document.querySelector('form#delete-profile-image-form').submit()
            }
        }

        function deleteProspect() {
            var r = confirm("Are you sure you want to delete this prospect? This can't be undone!")

            if (r) {
                document.querySelector('form#delete-prospect-form').submit()
            }
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Info-Tools\resources\views/admin/prospects/edit.blade.php ENDPATH**/ ?>