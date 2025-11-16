<?php $__env->startSection('content'); ?>

<?php if(!$ppdb): ?>
    <section class="py-20 text-center">
        <h2 class="text-2xl font-bold mb-2">PPDB Belum Tersedia</h2>
        <p class="text-gray-600">Admin belum mengisi data PPDB.</p>
    </section>
    @return
<?php endif; ?>


<!-- =========================================
     PPDB INDEX REBUILD (FULL DETAIL)
========================================= -->
<section class="ppdb-section-v3">
    <div class="container">

        <div class="ppdb-card-v3" data-aos="fade-up">

            <!-- KIRI (Informasi Utama) -->
            <div class="ppdb-content-v3">

                <!-- HEADER -->
                <div class="ppdb-header-v3">
                    <?php if($ppdb->section_badge): ?>
                        <span class="ppdb-badge-v3"><?php echo e($ppdb->section_badge); ?></span>
                    <?php endif; ?>

                    <h2 class="ppdb-title-v3">
                        <?php echo e($ppdb->section_title ?? 'Informasi PPDB'); ?>

                    </h2>

                    <p class="ppdb-description-v3">
                        <?php echo e($ppdb->section_description ?? 'Informasi resmi PPDB SMP Negeri 12 Gresik'); ?>

                    </p>
                </div>

                <!-- DETAIL LENGKAP -->
                <div class="ppdb-details-v3 mt-4">

                    
                    <?php if($ppdb->poster): ?>
                    <div class="ppdb-poster mb-4">
                        <img src="<?php echo e(asset('storage/' . $ppdb->poster)); ?>" 
                             alt="Poster PPDB"
                             style="width:100%; border-radius:14px;">
                    </div>
                    <?php endif; ?>

                    
                    <?php if($ppdb->title): ?>
                    <p class="mb-1"><strong>Judul:</strong> <?php echo e($ppdb->title); ?></p>
                    <?php endif; ?>

                    
                    <?php if($ppdb->publish_date): ?>
                    <p><strong>Dipublikasikan:</strong> <?php echo e($ppdb->publish_date); ?></p>
                    <?php endif; ?>

                    
                    <?php if($ppdb->detail_info): ?>
                    <div class="ppdb-section-box">
                        <h4>Informasi PPDB</h4>
                        <p><?php echo nl2br(e($ppdb->detail_info)); ?></p>
                    </div>
                    <?php endif; ?>

                    
                    <?php if($ppdb->syarat): ?>
                    <div class="ppdb-section-box">
                        <h4>Syarat Pendaftaran</h4>
                        <p><?php echo nl2br(e($ppdb->syarat)); ?></p>
                    </div>
                    <?php endif; ?>

                    
                    <?php if($ppdb->alur): ?>
                    <div class="ppdb-section-box">
                        <h4>Alur Pendaftaran</h4>
                        <p><?php echo nl2br(e($ppdb->alur)); ?></p>
                    </div>
                    <?php endif; ?>

                    
                    <?php if($ppdb->berkas): ?>
                    <div class="ppdb-section-box">
                        <h4>Berkas Wajib</h4>
                        <p><?php echo nl2br(e($ppdb->berkas)); ?></p>
                    </div>
                    <?php endif; ?>

                </div>


                <!-- JALUR PENDAFTARAN -->
                <div class="ppdb-schedule-v3 mt-4">

                    <?php if($ppdb->jalur_afirmasi): ?>
                    <div class="schedule-item-v3">
                        <div class="schedule-icon-v3"><i class="fas fa-hands-helping"></i></div>
                        <div class="schedule-info-v3">
                            <h6>Jalur Afirmasi</h6>
                            <span><?php echo e($ppdb->jalur_afirmasi); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($ppdb->jalur_perpindahan): ?>
                    <div class="schedule-item-v3">
                        <div class="schedule-icon-v3"><i class="fas fa-exchange-alt"></i></div>
                        <div class="schedule-info-v3">
                            <h6>Jalur Perpindahan</h6>
                            <span><?php echo e($ppdb->jalur_perpindahan); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($ppdb->jalur_prestasi): ?>
                    <div class="schedule-item-v3">
                        <div class="schedule-icon-v3"><i class="fas fa-trophy"></i></div>
                        <div class="schedule-info-v3">
                            <h6>Jalur Prestasi</h6>
                            <span><?php echo e($ppdb->jalur_prestasi); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>

                    <?php if($ppdb->jalur_zonasi): ?>
                    <div class="schedule-item-v3">
                        <div class="schedule-icon-v3"><i class="fas fa-map-marked-alt"></i></div>
                        <div class="schedule-info-v3">
                            <h6>Jalur Zonasi</h6>
                            <span><?php echo e($ppdb->jalur_zonasi); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>

                </div>


                <!-- BUTTONS -->
                <div class="ppdb-buttons-v3 mt-4">

                    <?php if($ppdb->button_panduan_link): ?>
                    <a href="<?php echo e($ppdb->button_panduan_link); ?>" class="btn btn-primary" target="_blank">
                        <i class="fas fa-info-circle me-2"></i>
                        <?php echo e($ppdb->button_panduan_text ?? 'Lihat Panduan Lengkap'); ?>

                    </a>
                    <?php endif; ?>

                    <?php if($ppdb->button_wa_link): ?>
                    <a href="<?php echo e($ppdb->button_wa_link); ?>" class="btn btn-outline-success" target="_blank">
                        <i class="fab fa-whatsapp me-2"></i>
                        <?php echo e($ppdb->button_wa_text ?? 'Hubungi Panitia'); ?>

                    </a>
                    <?php endif; ?>

                </div>

            </div>


            <!-- KANAN (SLIDER GAMBAR) -->
            <div class="ppdb-image-v3">

                <?php if($ppdb->slider_1 || $ppdb->slider_2 || $ppdb->slider_3): ?>

                <div class="swiper ppdbSwiperV3">
                    <div class="swiper-wrapper">

                        <?php if($ppdb->slider_1): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset('storage/' . $ppdb->slider_1)); ?>" alt="">
                        </div>
                        <?php endif; ?>

                        <?php if($ppdb->slider_2): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset('storage/' . $ppdb->slider_2)); ?>" alt="">
                        </div>
                        <?php endif; ?>

                        <?php if($ppdb->slider_3): ?>
                        <div class="swiper-slide">
                            <img src="<?php echo e(asset('storage/' . $ppdb->slider_3)); ?>" alt="">
                        </div>
                        <?php endif; ?>

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

                <?php else: ?>

                <p class="text-center text-gray-500 mt-5">Tidak ada gambar slider.</p>

                <?php endif; ?>

            </div>

        </div>

    </div>
</section>
<style>
    /* ========== PPDB V3 - Mint & White Theme ========== */
/* Palette: mint (#E6FFF5), mint-strong (#2EB67D), dark (#0B5E3A), soft-gray */

:root{
  --mint-50: #E6FFF5;
  --mint-400: #6FD7A3;
  --mint-600: #2EB67D;
  --mint-800: #1D7A54;
  --dark-900: #083726;
  --soft-600: #6b7280;
  --card-shadow: 0 10px 30px rgba(13, 50, 34, 0.06);
  --radius-lg: 16px;
  --radius-sm: 8px;
  --container-max: 1100px;
  --gap: 28px;
  font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
}

/* Layout container */
.container { max-width: var(--container-max); margin: 0 auto; padding: 0 18px; }

/* Section */
.ppdb-section-v3 { padding: 56px 0; background: linear-gradient(180deg, #fff 0%, #f9fffb 100%); }

/* Card */
.ppdb-card-v3 {
  display: flex;
  gap: var(--gap);
  align-items: stretch;
  background: #ffffff;
  border-radius: calc(var(--radius-lg) + 6px);
  padding: 28px;
  box-shadow: var(--card-shadow);
  border: 1px solid rgba(46,182,125,0.06);
}

/* Left/Right columns */
.ppdb-content-v3 { flex: 1 1 60%; min-width: 260px; }
.ppdb-image-v3 { flex: 0 0 360px; max-width: 360px; display:flex; align-items:center; justify-content:center; }

/* Header */
.ppdb-badge-v3 {
  display:inline-block;
  background: linear-gradient(90deg,var(--mint-400),var(--mint-600));
  color: white;
  padding: 6px 12px;
  border-radius: 999px;
  font-weight:600;
  font-size:13px;
  box-shadow: 0 4px 18px rgba(46,182,125,0.12);
  margin-bottom: 10px;
}
.ppdb-title-v3 {
  font-size: 26px;
  line-height: 1.12;
  margin: 6px 0 10px;
  color: var(--dark-900);
  font-weight: 700;
}
.ppdb-description-v3 { color: var(--soft-600); margin-bottom: 16px; }

/* Poster */
.ppdb-poster img { width:100%; border-radius: 12px; border: 1px solid rgba(14,72,45,0.03); }

/* Details boxes */
.ppdb-section-box {
  background: linear-gradient(180deg, rgba(230,255,245,0.8), #ffffff);
  border: 1px solid rgba(46,182,125,0.06);
  padding: 14px;
  border-radius: 10px;
  margin-bottom: 12px;
}

.ppdb-section-box,
.ppdb-description-v3,
.ppdb-content-v3 {
    word-wrap: break-word;
    word-break: break-word;
    overflow-wrap: break-word;
}


.ppdb-section-box h4 { margin:0 0 8px; color: var(--mint-800); font-size:16px; }
.ppdb-section-box p { margin:0; color: #35434a; line-height:1.6; }

/* Schedule list */
.ppdb-schedule-v3 { margin-top: 14px; display:flex; flex-direction:column; gap:10px; }
.schedule-item-v3 {
  display:flex; gap:12px; align-items:flex-start;
  background: #fff; border-radius: 12px; padding:10px; border:1px solid rgba(13,50,34,0.04);
}
.schedule-icon-v3 {
  width:48px; height:48px; border-radius:10px;
  display:flex; align-items:center; justify-content:center;
  background: linear-gradient(180deg, rgba(46,182,125,0.12), rgba(46,182,125,0.06));
  color: var(--mint-800); font-size:18px;
}
.schedule-info-v3 h6 { margin:0; font-size:14px; color:var(--dark-900); }
.schedule-info-v3 span { display:block; color:var(--soft-600); font-size:14px; }

/* Buttons */
.ppdb-buttons-v3 { margin-top: 18px; display:flex; gap:10px; flex-wrap:wrap; }
.btn {
  display:inline-flex; align-items:center; gap:8px; padding:10px 14px; border-radius:10px;
  font-weight:600; font-size:14px; text-decoration:none; border: 1px solid transparent;
}
.btn-primary {
  background: var(--mint-600); color: #fff; box-shadow: 0 6px 18px rgba(46,182,125,0.14);
}
.btn-outline-success {
  background: transparent; color: var(--mint-800); border:1px solid rgba(46,182,125,0.12);
}

/* Right column images / slider */
.ppdb-image-v3 .swiper, .ppdb-image-v3 img { width:100%; border-radius:12px; overflow:hidden; }
.ppdb-image-v3 img { object-fit:cover; height:260px; border:1px solid rgba(13,50,34,0.03); }

/* Small helper */
.text-muted { color: var(--soft-600); font-size:14px; }

/* Responsive */
@media (max-width: 980px) {
  .ppdb-card-v3 { flex-direction: column; padding:18px; gap:18px; }
  .ppdb-image-v3 { width:100%; max-width:100%; }
  .ppdb-image-v3 img { height:200px; }
  .ppdb-title-v3 { font-size:22px; }
}

@media (max-width: 460px) {
  .ppdb-title-v3 { font-size:18px; }
  .ppdb-poster img, .ppdb-image-v3 img { height:160px; object-fit:cover; }
  .ppdb-badge-v3 { padding:6px 10px; font-size:12px; }
}

</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\Documents\laragon\www\smpn12-gresik-website\resources\views/information/ppdb/index.blade.php ENDPATH**/ ?>