<?php $__env->startSection('title', 'Create and Activity for ' . $prospect->name); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Create Activity <small class="text-muted"><?php echo e($prospect->name); ?></small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        Actions
                                    </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a class="dropdown-item" href="<?php echo e(route('admin.prospects.activities.dashboard', $prospect)); ?>">Activities Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.card -->

        <div class="card mt-3">
            <div class="card-body">
                <form action="<?php echo e(route('admin.prospects.activities.store', $prospect)); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Communication Type</label>
                        <div class="col-md-9">
                            <select name="communication_type" class="form-control">
                                <option value="phone_call">Phone Call</option>
                                <option value="email">Email</option>
                                <option value="none">None</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Activity</label>
                        <div class="col-md-9">
                            <select name="type" class="form-control">
                                <option value="">Select an Activity</option>
                                <option value="cold_outreach">Cold Outreach</option>
                                <option value="first_contact">First Contact</option>
                                <option value="demo">Demo</option>
                                <option value="follow_up">Follow Up</option>
                                <option value="document_signing">Document Signing</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-md-3">Notes</label>
                        <div class="col-md-9">
                            <textarea name="notes" cols="30" rows="10" class="form-control" placeholder="Enter in your notes"></textarea>
                        </div>
                    </div>

                    <button class="btn btn-primary float-right">Add Activity</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Info-Tools\resources\views/admin/prospects/activities/create.blade.php ENDPATH**/ ?>