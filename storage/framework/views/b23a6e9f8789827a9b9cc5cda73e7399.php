

<?php $__env->startSection('content'); ?>
<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">Welcome Head</h1>

        <?php if(!$welcome): ?>
            <a href="<?php echo e(route('admin.welcome.create')); ?>" class="btn btn-primary">
                <i class="fas fa-plus"></i> Buat Data
            </a>
        <?php else: ?>
            <a href="<?php echo e(route('admin.welcome.edit', $welcome->id)); ?>" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit Data
            </a>
        <?php endif; ?>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">

            <?php if(!$welcome): ?>
                <div class="text-center py-5">
                    <h5 class="text-muted">Belum ada data sambutan</h5>
                    <a href="<?php echo e(route('admin.welcome.create')); ?>" class="btn btn-primary mt-3">
                        <i class="fas fa-plus"></i> Tambah Data
                    </a>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?php echo e(asset($welcome->image)); ?>" class="img-fluid rounded shadow"
                             alt="Foto Kepala Sekolah">
                    </div>

                    <div class="col-md-8">
                        <h5 class="text-primary"><?php echo e($welcome->subtitle); ?></h5>
                        <h2><?php echo e($welcome->title); ?></h2>

                        <p><?php echo e($welcome->text1); ?></p>
                        <p><?php echo e($welcome->text2); ?></p>

                        <hr>

                        <h4 class="mb-0"><?php echo e($welcome->name); ?></h4>
                        <small class="text-muted"><?php echo e($welcome->position); ?></small>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\laragon\www\smpn12-gresik-website\resources\views/admin/welcome/index.blade.php ENDPATH**/ ?>