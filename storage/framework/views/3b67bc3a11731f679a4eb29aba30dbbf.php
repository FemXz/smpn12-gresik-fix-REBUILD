

<?php $__env->startSection('content'); ?>
<div class="container mt-4">

    <h2 class="mb-4">Edit Sambutan Kepala Sekolah</h2>

    <a href="<?php echo e(route('admin.welcome.index')); ?>" class="btn btn-secondary mb-3">
        Kembali
    </a>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="<?php echo e(route('admin.welcome.update', $welcome->id)); ?>" 
                  method="POST" 
                  enctype="multipart/form-data">

                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="row">

                    <!-- IMAGE PREVIEW -->
                    <div class="col-md-4 text-center">
                        <img src="<?php echo e(asset($welcome->image)); ?>"
                             alt="Foto Kepala Sekolah"
                             class="img-fluid rounded mb-3"
                             style="max-height: 250px; object-fit: cover;">
                    </div>

                    <div class="col-md-8">

                        <!-- SUBTITLE -->
                        <div class="mb-3">
                            <label class="form-label">Subtitle</label>
                            <input type="text" name="subtitle" class="form-control"
                                   value="<?php echo e(old('subtitle', $welcome->subtitle)); ?>" required>
                        </div>

                        <!-- TITLE -->
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" name="title" class="form-control"
                                   value="<?php echo e(old('title', $welcome->title)); ?>" required>
                        </div>

                        <!-- TEXT 1 -->
                        <div class="mb-3">
                            <label class="form-label">Paragraf 1</label>
                            <textarea name="text1" class="form-control" rows="3" required><?php echo e(old('text1', $welcome->text1)); ?></textarea>
                        </div>

                        <!-- TEXT 2 -->
                        <div class="mb-3">
                            <label class="form-label">Paragraf 2</label>
                            <textarea name="text2" class="form-control" rows="3"><?php echo e(old('text2', $welcome->text2)); ?></textarea>
                        </div>

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Nama Kepala Sekolah</label>
                            <input type="text" name="name" class="form-control"
                                   value="<?php echo e(old('name', $welcome->name)); ?>" required>
                        </div>

                        <!-- POSITION -->
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <input type="text" name="position" class="form-control"
                                   value="<?php echo e(old('position', $welcome->position)); ?>" required>
                        </div>

                        <!-- IMAGE -->
                        <div class="mb-3">
                            <label class="form-label">Foto Kepala Sekolah (opsional)</label>
                            <input type="file" name="image" class="form-control">
                            <small class="text-muted">Format: JPG, JPEG, PNG | Maks 2 MB</small>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit" class="btn btn-primary">
                            Simpan Perubahan
                        </button>

                    </div>

                </div>
            </form>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\laragon\www\smpn12-gresik-website\resources\views/admin/welcome/edit.blade.php ENDPATH**/ ?>