


<?php $__env->startSection('content'); ?>
<div class="container mt-4">

    <h2 class="mb-4">Tambah Sambutan Kepala Sekolah</h2>

    <a href="<?php echo e(route('admin.welcome.index')); ?>" class="btn btn-secondary mb-3">
        Kembali
    </a>

    <div class="card shadow-sm">
        <div class="card-body">

            <form action="<?php echo e(route('admin.welcome.store')); ?>" 
                  method="POST" 
                  enctype="multipart/form-data">

                <?php echo csrf_field(); ?>

                <div class="row">

                    <div class="col-md-8 mx-auto">

                        <!-- SUBTITLE -->
                        <div class="mb-3">
                            <label class="form-label">Subtitle</label>
                            <input type="text" name="subtitle" class="form-control" required>
                        </div>

                        <!-- TITLE -->
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>

                        <!-- TEXT 1 -->
                        <div class="mb-3">
                            <label class="form-label">Paragraf 1</label>
                            <textarea name="text1" class="form-control" rows="3" required></textarea>
                        </div>

                        <!-- TEXT 2 -->
                        <div class="mb-3">
                            <label class="form-label">Paragraf 2 (opsional)</label>
                            <textarea name="text2" class="form-control" rows="3"></textarea>
                        </div>

                        <!-- NAME -->
                        <div class="mb-3">
                            <label class="form-label">Nama Kepala Sekolah</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <!-- POSITION -->
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <input type="text" name="position" class="form-control" required>
                        </div>

                        <!-- IMAGE -->
                        <div class="mb-3">
                            <label class="form-label">Foto Kepala Sekolah</label>
                            <input type="file" name="image" class="form-control" required>
                            <small class="text-muted">Format JPG, JPEG, PNG – Max 2MB</small>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit" class="btn btn-primary">
                            Simpan Data
                        </button>

                    </div>

                </div>
            </form>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\laragon\www\smpn12-gresik-website\resources\views/admin/welcome/create.blade.php ENDPATH**/ ?>