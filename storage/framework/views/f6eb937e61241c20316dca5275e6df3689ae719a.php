<?php $__env->startSection('content'); ?>
    <div class="container">

        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class="card mt-3">
            <div class="card-body">
                <div class="d-flex">
                    <h1>Prospects <small class="text-muted">Showing All Prospects</small></h1>
                    <div class="ml-auto">
                        <div class="dropdown">
                            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Actions
                            </button>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="<?php echo e(route('admin.prospects.create')); ?>">Create Prospect</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.card -->

        <?php if($prospects->count()): ?>
            <?php echo e($prospects->links()); ?>

            <?php $__currentLoopData = $prospects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prospect): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php echo $__env->make('admin.prospects.partials.prospect-card', ['prospect' => $prospect], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>




                


    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Info-Tools\resources\views/admin/prospects/index.blade.php ENDPATH**/ ?>