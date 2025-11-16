

<?php $__env->startSection('content'); ?>
<div class="container py-4">

    <h3 class="mb-4 fw-bold">Pengaturan Halaman PPDB</h3>

    <form action="<?php echo e(route('admin.ppdb.settings.update')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        
        <div class="card mb-4">
            <div class="card-header fw-bold">Informasi Halaman Detail</div>
            <div class="card-body">

                <div class="mb-3">
                    <label class="form-label">Judul Halaman</label>
                    <input type="text" name="title" class="form-control" value="<?php echo e($setting->title); ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Publish</label>
                    <input type="date" name="publish_date" class="form-control" value="<?php echo e($setting->publish_date?->format('Y-m-d')); ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Poster Utama</label><br>
                    <input type="file" name="poster" class="form-control mb-2">

                    <?php if($setting->poster): ?>
                        <img src="<?php echo e(url('storage/'.$setting->poster)); ?>" width="250" class="rounded shadow">
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label>Konten Alur Pendaftaran (HTML)</label>
                    <textarea name="alur" class="form-control" rows="4"><?php echo e($setting->alur); ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Konten Syarat Pendaftaran (HTML)</label>
                    <textarea name="syarat" class="form-control" rows="4"><?php echo e($setting->syarat); ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Jadwal Penting (HTML)</label>
                    <textarea name="jadwal" class="form-control" rows="4"><?php echo e($setting->jadwal); ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Jalur & Kuota (HTML)</label>
                    <textarea name="jalur" class="form-control" rows="4"><?php echo e($setting->jalur); ?></textarea>
                </div>

                <div class="mb-3">
                    <label>FAQ (HTML)</label>
                    <textarea name="faq" class="form-control" rows="4"><?php echo e($setting->faq); ?></textarea>
                </div>

                <div class="mb-3">
                    <label>Link Pendaftaran Resmi</label>
                    <input type="text" name="link_resmi" class="form-control" value="<?php echo e($setting->link_resmi); ?>">
                </div>

            </div>
        </div>

        
        <div class="card mb-4">
            <div class="card-header fw-bold">Section Compact PPDB</div>
            <div class="card-body">

                <div class="mb-3">
                    <label>Badge</label>
                    <input type="text" name="section_badge" class="form-control" value="<?php echo e($setting->section_badge); ?>">
                </div>

                <div class="mb-3">
                    <label>Judul Section</label>
                    <input type="text" name="section_title" class="form-control" value="<?php echo e($setting->section_title); ?>">
                </div>

                <div class="mb-3">
                    <label>Deskripsi</label>
                    <textarea name="section_description" class="form-control" rows="3"><?php echo e($setting->section_description); ?></textarea>
                </div>

                <h6 class="fw-bold mt-4">Deskripsi Jalur</h6>

                <div class="mb-3">
                    <label>Afirmasi</label>
                    <input type="text" name="section_jalur_afirmasi" class="form-control" value="<?php echo e($setting->section_jalur_afirmasi); ?>">
                </div>

                <div class="mb-3">
                    <label>Perpindahan Tugas</label>
                    <input type="text" name="section_jalur_pindah" class="form-control" value="<?php echo e($setting->section_jalur_pindah); ?>">
                </div>

                <div class="mb-3">
                    <label>Prestasi</label>
                    <input type="text" name="section_jalur_prestasi" class="form-control" value="<?php echo e($setting->section_jalur_prestasi); ?>">
                </div>

                <div class="mb-3">
                    <label>Zonasi</label>
                    <input type="text" name="section_jalur_zonasi" class="form-control" value="<?php echo e($setting->section_jalur_zonasi); ?>">
                </div>

                <h6 class="fw-bold mt-4">Tombol Aksi</h6>

                <div class="mb-3">
                    <label>Text Tombol Panduan</label>
                    <input type="text" name="button_panduan_text" class="form-control" value="<?php echo e($setting->button_panduan_text); ?>">
                </div>

                <div class="mb-3">
                    <label>Link Tombol Panduan</label>
                    <input type="text" name="button_panduan_link" class="form-control" value="<?php echo e($setting->button_panduan_link); ?>">
                </div>

                <div class="mb-3">
                    <label>Text Tombol WhatsApp</label>
                    <input type="text" name="button_wa_text" class="form-control" value="<?php echo e($setting->button_wa_text); ?>">
                </div>

                <div class="mb-3">
                    <label>Link WhatsApp</label>
                    <input type="text" name="button_wa_link" class="form-control" value="<?php echo e($setting->button_wa_link); ?>">
                </div>

                <h6 class="fw-bold mt-4">Slider Gambar</h6>

                <div class="mb-3">
                    <label>Slider 1</label>
                    <input type="file" name="slider_1" class="form-control mb-2">
                    <?php if($setting->slider_1): ?>
                        <img src="<?php echo e(url('storage/'.$setting->slider_1)); ?>" width="200" class="rounded shadow">
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label>Slider 2</label>
                    <input type="file" name="slider_2" class="form-control mb-2">
                    <?php if($setting->slider_2): ?>
                        <img src="<?php echo e(url('storage/'.$setting->slider_2)); ?>" width="200" class="rounded shadow">
                    <?php endif; ?>
                </div>

                <div class="mb-3">
                    <label>Slider 3</label>
                    <input type="file" name="slider_3" class="form-control mb-2">
                    <?php if($setting->slider_3): ?>
                        <img src="<?php echo e(url('storage/'.$setting->slider_3)); ?>" width="200" class="rounded shadow">
                    <?php endif; ?>
                </div>

            </div>
        </div>

        <button class="btn btn-primary px-4 fw-bold">Simpan Perubahan</button>

    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("admin.layouts.app", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\laragon\www\smpn12-gresik-website\resources\views/admin/ppdb/settings.blade.php ENDPATH**/ ?>