<?php $__env->startSection('title', $prospect->name . "'s profile activity "); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Prospect Activities <small class="text-muted"><?php echo e($prospect->name); ?></small></h1>

                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                        Actions
                                    </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                <a href="<?php echo e(route('admin.prospects.prospect.dashboard', $prospect)); ?>" class="dropdown-item">Prospect Dashboard</a>
                                <a class="dropdown-item" href="<?php echo e(route('admin.prospects.activities.create', $prospect)); ?>">Log Activity</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.card -->

        <?php echo e($activities->links()); ?>


        <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card mt-3">
                <div class="card-body">
                    <div class="d-flex">
                        <div>
                            <h5>Activity Type: <?php echo e($activity->type); ?></h5>
                            <h5>Communication Type: <?php echo e($activity->communication_type); ?></h5>
                        </div>

                        <div class="ml-auto">
                            <h6><em><?php echo e(date('F d, Y @ g:i A T', strtotime($activity->created_at))); ?></em></h6>
                        </div>
                    </div>


                    <hr>
                    <h5>Notes:</h5>
                    <p><?php echo e($activity->notes); ?></p>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Info-Tools\resources\views/admin/prospects/activities/index.blade.php ENDPATH**/ ?>