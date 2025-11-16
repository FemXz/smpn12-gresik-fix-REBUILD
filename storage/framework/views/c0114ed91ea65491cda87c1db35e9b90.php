<?php $__env->startSection('title', 'Edit Statistik'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h2>Edit Statistik Sekolah</h2>

    <?php if(session('success')): ?>
        <div class="alert alert-success"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.stats.update')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div class="mb-3">
            <label>Jumlah Siswa</label>
            <input type="number" name="students" class="form-control" value="<?php echo e(old('students', $stat->students ?? 0)); ?>">
        </div>

        <div class="mb-3">
            <label>Jumlah Guru</label>
            <input type="number" name="teachers" class="form-control" value="<?php echo e(old('teachers', $stat->teachers ?? 0)); ?>">
        </div>

        <div class="mb-3">
            <label>Jumlah Staf</label>
            <input type="number" name="staff" class="form-control" value="<?php echo e(old('staff', $stat->staff ?? 0)); ?>">
        </div>

        <div class="mb-3">
            <label>Jumlah Prestasi</label>
            <input type="number" name="achievements" class="form-control" value="<?php echo e(old('achievements', $stat->achievements ?? 0)); ?>">
        </div>

        <button class="btn btn-primary">Simpan Perubahan</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\laragon\www\smpn12-gresik-website\resources\views/admin/stats/edit.blade.php ENDPATH**/ ?>