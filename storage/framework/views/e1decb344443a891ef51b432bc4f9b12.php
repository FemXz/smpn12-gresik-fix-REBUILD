<?php $__env->startSection('title', 'Beranda - SMP Negeri 12 Gresik Smart School'); ?>

<?php $__env->startSection('description', 'SMP Negeri 12 Gresik adalah Smart School unggulan yang mengutamakan kualitas pendidikan dengan teknologi modern dan tenaga pengajar profesional.'); ?>

<?php $__env->startPush('styles'); ?>
<style>
    /* ========================================
       ADDITIONAL STYLES FOR HOME PAGE
       ======================================== */

    /* Hero Section Enhancements */
    .hero {
        padding-top: 80px; /* Account for fixed navbar */
    }

    /* Stats Section */
    .stats {
        background: var(--gradient-primary);
        padding: var(--space-16) 0;
        position: relative;
        overflow: hidden;
    }

    .stats::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="dots" width="10" height="10" patternUnits="userSpaceOnUse"><circle cx="5" cy="5" r="1" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100%" height="100%" fill="url(%23dots)"/></svg>');
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: var(--space-8);
        position: relative;
        z-index: 2;
    }

    .stat-item {
        text-align: center;
        color: white;
        padding: var(--space-6);
        background: rgba(255, 255, 255, 0.1);
        border-radius: var(--radius-2xl);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: var(--transition-bounce);
    }

    .stat-item:hover {
        transform: translateY(-10px) scale(1.05);
        background: rgba(255, 255, 255, 0.15);
        box-shadow: var(--shadow-2xl);
    }

    .stat-icon {
        font-size: 3rem;
        margin-bottom: var(--space-4);
        opacity: 0.9;
    }

    .stat-number {
        font-family: 'Poppins', sans-serif;
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: var(--space-2);
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    .stat-label {
        font-size: 1.1rem;
        font-weight: 500;
        opacity: 0.9;
    }

 

    /* Events Section */
    .events {
        padding: var(--space-24) 0;
        background: var(--gray-50);
    }

    .events-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: var(--space-8);
    }

    .event-card {
        background: white;
        border-radius: var(--radius-2xl);
        padding: var(--space-6);
        box-shadow: var(--shadow-md);
        transition: var(--transition-bounce);
    }

    .event-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-xl);
    }

    .event-date {
        display: flex;
        align-items: center;
        margin-bottom: var(--space-4);
    }

    .date-box {
        background: var(--gradient-primary);
        color: white;
        padding: var(--space-3);
        border-radius: var(--radius-xl);
        text-align: center;
        min-width: 70px;
        margin-right: var(--space-3);
    }

    .date-box .day {
        font-weight: 800;
        font-size: 1.2rem;
        line-height: 1;
    }

    .date-box .month {
        font-size: 0.8rem;
        opacity: 0.9;
    }

    .event-meta {
        flex: 1;
    }

    .event-time {
        color: var(--primary-600);
        font-weight: 600;
        margin-bottom: var(--space-1);
        font-size: 0.9rem;
    }

    .event-location {
        color: var(--gray-500);
        font-size: 0.9rem;
    }

    .event-title {
        font-family: 'Poppins', sans-serif;
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--gray-900);
        margin-bottom: var(--space-3);
    }

    
    /* CTA Section */
    .cta {
        background: var(--gradient-hero);
        padding: var(--space-20) 0;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse"><path d="M 50 0 L 0 0 0 50" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
        opacity: 0.3;
    }

    .cta-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: var(--space-8);
        position: relative;
        z-index: 2;
    }

    .cta-text {
        flex: 1;
    }

    .cta-text h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: var(--space-4);
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    .cta-text p {
        font-size: 1.2rem;
        opacity: 0.9;
        line-height: 1.6;
    }

    .cta-buttons {
        display: flex;
        gap: var(--space-4);
        flex-wrap: wrap;
    }

    /* Scroll Indicator */
    .scroll-indicator {
        position: absolute;
        bottom: var(--space-6);
        left: 50%;
        transform: translateX(-50%);
        text-align: center;
        color: white;
        cursor: pointer;
        transition: var(--transition-normal);
    }

    .scroll-indicator:hover {
        transform: translateX(-50%) translateY(-5px);
    }

    .scroll-indicator small {
        display: block;
        margin-bottom: var(--space-2);
        opacity: 0.8;
    }

    .scroll-indicator i {
        animation: bounce 2s infinite;
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
        40% { transform: translateY(-10px); }
        60% { transform: translateY(-5px); }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .stats-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: var(--space-6);
        }

        .stat-number {
            font-size: 2.5rem;
        }

        .news-grid,
        .events-grid,
        .facilities-grid {
            grid-template-columns: 1fr;
        }

        .cta-content {
            flex-direction: column;
            text-align: center;
        }

        .cta-text h2 {
            font-size: 2rem;
        }

        .cta-buttons {
            justify-content: center;
        }

        .event-date {
            flex-direction: column;
            align-items: flex-start;
        }

        .date-box {
            margin-right: 0;
            margin-bottom: var(--space-3);
        }
    }

    @media (max-width: 480px) {
        .stat-item {
            padding: var(--space-4);
        }

        .stat-number {
            font-size: 2rem;
        }

        .cta-text h2 {
            font-size: 1.8rem;
        }

        .cta-text p {
            font-size: 1rem;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>









<!-- Hero Section -->
<section class="hero">
  <div class="hero-content">
    <div class="hero-text" data-aos="fade-right">
      <h1>Selamat Datang di<br>SMP Negeri 12 Gresik</h1>
      <p>
        Membangun generasi cerdas dan berkarakter melalui pendidikan berkualitas
        dengan teknologi modern. Bergabunglah dengan kami untuk masa depan yang gemilang.
      </p>
      <div class="hero-buttons">
        <a href="<?php echo e(route('about')); ?>" class="btn btn-primary">
          <i class="fas fa-info-circle"></i> Tentang Kami
        </a>
       
      </div>
    </div>

    <!-- 🔥 Swiper 3D Card Stack (renamed to stackShowcase) -->
    <div class="swiper stackShowcase" data-aos="fade-left">
      <div class="swiper-wrapper">
        <?php $__currentLoopData = $data['latest_news']->take(5); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="swiper-slide">
          <div class="stack-card" style="--i: <?php echo e($index); ?>">
            <div class="stack-image">
              <?php if($news->image): ?>
                <img src="<?php echo e(asset($news->image)); ?>" alt="<?php echo e($news->title); ?>">
              <?php else: ?>
                <img src="https://via.placeholder.com/400x200?text=No+Image" alt="Placeholder">
              <?php endif; ?>
              <span class="stack-badge">NEW</span>
            </div>
            <div class="stack-content">
              <div class="stack-info">
                <span><i class="fas fa-calendar-alt"></i> <?php echo e($news->published_at->format('d M Y')); ?></span>
                <span><i class="fas fa-user"></i> Admin</span>
              </div>
              <h3><?php echo e(\Illuminate\Support\Str::limit($news->title, 60)); ?></h3>
              <p><?php echo e(\Illuminate\Support\Str::limit(strip_tags($news->content), 80)); ?></p>
              <div class="stack-footer">
                <a href="<?php echo e(route('information.news.show', $news->slug)); ?>" class="stack-button">Lihat Berita</a>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="swiper-pagination mt-4"></div>
    </div>

    <div class="scroll-indicator" onclick="scrollToStats()">
      <small>Scroll untuk melihat lebih banyak</small>
      <i class="fas fa-chevron-down"></i>
    </div>
  </div>
</section>

<!-- SwiperJS -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const swiper = new Swiper(".stackShowcase", {
    effect: "cards",
    grabCursor: true,
    loop: true,
    centeredSlides: true,
    slidesPerView: "auto",

    cardsEffect: {
      perSlideRotate: 6,
      perSlideOffset: 10,
      rotate: true,
      slideShadows: false,
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    observer: true,
    observeParents: true,
    watchSlidesProgress: true,
    speed: 800,
  });
});
</script>

<style>



/* === SWIPER STACK SHOWCASE === */
.stackShowcase {
  width: 100%;
  max-width: 380px; /* Sedikit lebih lebar biar proporsional */
  perspective: 1000px;
  margin: 0 auto;
  padding: 12px;
  box-sizing: border-box;
  overflow: visible !important;
}

.stackShowcase .swiper-slide {
  display: flex;
  justify-content: center;
  align-items: center;
}

/* === CARD STYLE === */
.stack-card {
  width: 100%;
  aspect-ratio: 3 / 4.2; /* ✅ menjaga proporsi seragam antar card */
  background: linear-gradient(180deg, #ffffff 0%, #f9fafb 100%);
  border-radius: 18px;
  overflow: hidden;
  transition: all 0.35s ease;
  display: flex;
  flex-direction: column;
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
  padding: 20px;
}

/* Hover effect */
.stack-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 22px rgba(0, 0, 0, 0.12);
}

/* === IMAGE === */
.stack-image {
  position: relative;
  width: 100%;
  height: 55%; /* ✅ proporsional dengan tinggi card */
  overflow: hidden;
  border-radius: 14px;
}

.stack-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s ease;
}

.stack-card:hover .stack-image img {
  transform: scale(1.06);
}

/* === BADGE === */
.stack-badge {
  position: absolute;
  bottom: 10px;
  right: 10px;
  background: linear-gradient(135deg, #16a34a, #0f766e);
  color: #fff;
  padding: 5px 10px;
  border-radius: 6px;
  font-size: 0.7rem;
  font-weight: 600;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}

/* === CONTENT === */
.stack-content {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding: 0.9rem 1rem 1.1rem;
  color: #222;
}

/* === INFO === */
.stack-info {
  display: flex;
  justify-content: space-between;
  font-size: 0.78rem;
  color: #6b7280;
  font-weight: 500;
  flex-wrap: wrap;
  gap: 6px;
}

.stack-info i {
  color: #16a34a;
  margin-right: 4px;
}

/* === TITLE === */
.stack-content h3 {
  font-size: 1rem;
  font-weight: 700;
  color: #111827;
  line-height: 1.35;
  transition: color 0.3s ease;
  margin: 0 0 4px;
}

.stack-card:hover h3 {
  color: #0f766e;
}

/* === TEXT === */
.stack-content p {
  font-size: 0.85rem;
  line-height: 1.45;
  color: #374151;
  margin: 0 0 0.6rem;
}

/* === BUTTON === */
.stack-button {
  display: block;
  width: 100%;
  text-align: center;
  background: linear-gradient(135deg, #16a34a, #0f766e);
  color: #fff;
  font-size: 0.82rem;
  font-weight: 600;
  padding: 8px 0;
  border-radius: 10px;
  text-decoration: none;
  transition: all 0.3s ease;
  box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
}

.stack-button:hover {
  background: linear-gradient(135deg, #0f766e, #064e3b);
  transform: translateY(-2px);
}

/* === RESPONSIVE === */
@media (max-width: 768px) {
  .stackShowcase {
    max-width: 340px;
    padding: 10px;
  }

  .stack-card {
    aspect-ratio: 3 / 4.5; /* sedikit lebih tinggi di mobile */
    border-radius: 16px;
    padding: 15px;
  }

  .stack-image {
    height: 50%;
  }

  .stack-content h3 {
    font-size: 0.95rem;
  }

  .stack-content p {
    font-size: 0.8rem;
  }

  .stack-button {
    font-size: 0.78rem;
  }
}

@media (max-width: 480px) {
  .stackShowcase {
    max-width: 300px;
    padding: 8px;
  }

  .stack-card {
    aspect-ratio: 3 / 4.8;
    border-radius: 14px;
  }
}


</style>



<script>
// Drag-scroll 3D Card
const slider = document.querySelector(".news-card-stack");
let isDown = false;
let startX;
let scrollLeft;

slider.addEventListener("mousedown", e => {
  isDown = true;
  startX = e.pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener("mouseleave", () => isDown = false);
slider.addEventListener("mouseup", () => isDown = false);
slider.addEventListener("mousemove", e => {
  if (!isDown) return;
  e.preventDefault();
  const x = e.pageX - slider.offsetLeft;
  const walk = (x - startX) * 1.3;
  slider.scrollLeft = scrollLeft - walk;
});

// Touch support
slider.addEventListener("touchstart", e => {
  isDown = true;
  startX = e.touches[0].pageX - slider.offsetLeft;
  scrollLeft = slider.scrollLeft;
});
slider.addEventListener("touchend", () => isDown = false);
slider.addEventListener("touchmove", e => {
  if (!isDown) return;
  const x = e.touches[0].pageX - slider.offsetLeft;
  const walk = (x - startX) * 1.3;
  slider.scrollLeft = scrollLeft - walk;
});
</script>


<!-- Stats Section -->
<section class="stats" id="stats-section">
    <div class="container">
        <div class="stats-grid" data-aos="fade-up">

            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div class="stat-number" data-count="<?php echo e($stat->students ?? 850); ?>">0</div>
                <div class="stat-label">Siswa Aktif</div>
            </div>

            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-chalkboard-teacher"></i>
                </div>
                <div class="stat-number" data-count="<?php echo e($stat->teachers ?? 45); ?>">0</div>
                <div class="stat-label">Tenaga Pengajar</div>
            </div>

            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-number" data-count="<?php echo e($stat->staff ?? 25); ?>">0</div>
                <div class="stat-label">Staf Administrasi</div>
            </div>

            <div class="stat-item">
                <div class="stat-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="stat-number" data-count="<?php echo e($stat->achievements ?? 150); ?>">0</div>
                <div class="stat-label">Prestasi Diraih</div>
            </div>

        </div>
    </div>
</section>



   <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambutan Kepala Sekolah</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* Global Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', 'Poppins', sans-serif;
        }

        /* Hero Section */
        .welcome-hero {
            background: linear-gradient(135deg, #f0f9f7 0%, #e8f5f3 100%);
            padding: 80px 20px;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .welcome-hero__container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }

        /* Hero Image Container */
        .welcome-hero__image-wrapper {
            position: relative;
            width: 100%;
        }

        .welcome-hero__image {
            width: 100%;
            height: 500px;
            background: linear-gradient(135deg, #c8e6c9 0%, #a5d6a7 100%);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .welcome-hero__image:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 70px rgba(0, 0, 0, 0.2);
        }

        .welcome-hero__image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .welcome-hero__image img:hover {
            transform: scale(1.05);
        }

        /* Name Badge Overlay */
        .welcome-hero__name-badge {
            position: absolute;
            bottom: 20px;
            left: 20px;
            right: 20px;
            background: rgba(27, 94, 32, 0.95);
            backdrop-filter: blur(10px);
            padding: 20px 24px;
            border-radius: 12px;
            color: white;
            text-align: left;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            animation: slideUp 0.6s ease-out 0.3s both;
        }

        .welcome-hero__name-badge-name {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 18px;
            color: #ffffff;
            margin-bottom: 4px;
            letter-spacing: 0.5px;
        }

        .welcome-hero__name-badge-position {
            font-family: 'Inter', sans-serif;
            font-weight: 500;
            font-size: 13px;
            color: #c8e6c9;
            letter-spacing: 0.3px;
        }

        /* Hero Content */
        .welcome-hero__content {
            animation: fadeInUp 0.8s ease-out;
        }

        .welcome-hero__subtitle {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            font-size: 13px;
            color: #4caf50;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .welcome-hero__subtitle::before {
            content: '';
            width: 8px;
            height: 8px;
            background-color: #4caf50;
            border-radius: 50%;
            display: inline-block;
        }

        .welcome-hero__content h2 {
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 42px;
            line-height: 1.3;
            color: #1b5e20;
            margin-bottom: 28px;
            background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .welcome-hero__text {
            font-family: 'Inter', sans-serif;
            font-weight: 400;
            font-size: 16px;
            line-height: 1.9;
            color: #424242;
            margin-bottom: 20px;
            text-align: justify;
            transition: color 0.3s ease;
        }

        .welcome-hero__text:hover {
            color: #1b5e20;
        }

        .welcome-hero__text:last-of-type {
            margin-bottom: 32px;
        }

        /* Accent Line */
        .welcome-hero__accent {
            width: 60px;
            height: 4px;
            background: linear-gradient(90deg, #4caf50 0%, #81c784 100%);
            border-radius: 2px;
            margin: 32px 0;
        }

        /* CTA Button */
        .welcome-hero__cta {
            display: inline-block;
            padding: 14px 32px;
            background: linear-gradient(135deg, #4caf50 0%, #2e7d32 100%);
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(76, 175, 80, 0.3);
            border: none;
            cursor: pointer;
            margin-top: 8px;
        }

        .welcome-hero__cta:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 30px rgba(76, 175, 80, 0.4);
            background: linear-gradient(135deg, #558b2f 0%, #1b5e20 100%);
        }

        /* Animations */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .welcome-hero__container {
                gap: 40px;
                grid-template-columns: 1fr 1fr;
            }

            .welcome-hero__image {
                height: 420px;
            }

            .welcome-hero__content h2 {
                font-size: 36px;
            }

            .welcome-hero__text {
                font-size: 15px;
                line-height: 1.8;
            }
        }

        @media (max-width: 768px) {
            .welcome-hero {
                padding: 50px 20px;
                min-height: auto;
            }

            .welcome-hero__container {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .welcome-hero__image {
                height: 380px;
            }

            .welcome-hero__content h2 {
                font-size: 28px;
            }

            .welcome-hero__text {
                font-size: 14px;
                line-height: 1.7;
            }

            .welcome-hero__name-badge {
                padding: 16px 20px;
                bottom: 16px;
                left: 16px;
                right: 16px;
            }

            .welcome-hero__name-badge-name {
                font-size: 16px;
            }

            .welcome-hero__name-badge-position {
                font-size: 12px;
            }
        }

        @media (max-width: 480px) {
            .welcome-hero {
                padding: 40px 16px;
            }

            .welcome-hero__container {
                gap: 20px;
            }

            .welcome-hero__image {
                height: 300px;
            }

            .welcome-hero__content h2 {
                font-size: 22px;
                margin-bottom: 16px;
            }

            .welcome-hero__subtitle {
                font-size: 11px;
                letter-spacing: 1px;
            }

            .welcome-hero__text {
                font-size: 13px;
                line-height: 1.6;
                margin-bottom: 16px;
            }

            .welcome-hero__accent {
                margin: 20px 0;
            }

            .welcome-hero__name-badge {
                padding: 12px 16px;
                bottom: 12px;
                left: 12px;
                right: 12px;
            }

            .welcome-hero__name-badge-name {
                font-size: 14px;
            }

            .welcome-hero__name-badge-position {
                font-size: 11px;
            }

            .welcome-hero__cta {
                padding: 12px 24px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <section class="welcome-hero">
        <div class="welcome-hero__container">
            <!-- Image Section dengan Name Badge -->
            <div class="welcome-hero__image-wrapper">
                <div class="welcome-hero__image">
                    <img src="<?php echo e($hero && $hero->image ? asset($hero->image) : 'https://via.placeholder.com/600x500?text=Foto+Kepala+Sekolah'); ?>" alt="Kepala Sekolah">
                    
                    <!-- Name Badge Overlay -->
                    <div class="welcome-hero__name-badge">
                        <div class="welcome-hero__name-badge-name">
                            <?php echo e($hero->name ?? 'Drs. Nama Kepala Sekolah'); ?>

                        </div>
                        <div class="welcome-hero__name-badge-position">
                            <?php echo e($hero->position ?? 'Kepala Sekolah'); ?>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Section -->
            <div class="welcome-hero__content">
                <div class="welcome-hero__subtitle">
                    <?php echo e($hero->subtitle ?? 'Sambutan Kepala Sekolah'); ?>

                </div>

                <h2>
                    <?php echo e($hero->title ?? 'Selamat Datang di Sekolah Kami'); ?>

                </h2>

                <p class="welcome-hero__text">
                    <?php echo e($hero->text1 ?? 'Assalamu\'alaikum... (teks default jika belum ada data)'); ?>

                </p>

                <p class="welcome-hero__text">
                    <?php echo e($hero->text2 ?? 'Setiap siswa adalah aset berharga... (teks default)'); ?>

                </p>

                <div class="welcome-hero__accent"></div>

                <button class="welcome-hero__cta">
                    Pelajari Lebih Lanjut
                </button>
            </div>
        </div>
    </section>
</body>
</html>

<!-- SECTION TENTANG SMPN 12 GRESIK -->
<style>
    .tentang-section {
        background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
        padding: 80px 20px;
        position: relative;
        overflow: hidden;
    }

    .tentang-section::before {
        content: '';
        position: absolute;
        top: -50px;
        right: -100px;
        width: 300px;
        height: 300px;
        background: linear-gradient(135deg, #148d46ff 0%, #0f6e3fff 100%);
        border-radius: 50%;
        opacity: 0.05;
    }

    .tentang-container {
        max-width: 1200px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
    }

    .tentang-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .tentang-header h2 {
        font-size: 2.5rem;
        color: #059669;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .tentang-header p {
        font-size: 1.1rem;
        color: #666;
        line-height: 1.6;
    }

    .tentang-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .tentang-image {
        position: relative;
    }

    .tentang-image img {
        width: 100%;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(16, 185, 129, 0.2);
        display: block;
    }

    .tentang-image::after {
        content: '';
        position: absolute;
        top: -20px;
        left: -20px;
        right: 20px;
        bottom: 20px;
        border: 3px solid #10b981;
        border-radius: 15px;
        z-index: -1;
    }

    .tentang-text {
        padding: 20px;
    }

    .visi-misi-item {
        margin-bottom: 40px;
        padding: 25px;
        background: white;
        border-radius: 12px;
        border-left: 5px solid #10b981;
        box-shadow: 0 3px 15px rgba(16, 185, 129, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .visi-misi-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(16, 185, 129, 0.15);
    }

    .visi-misi-item h3 {
        display: flex;
        align-items: center;
        gap: 12px;
        color: #10b981;
        font-size: 1.4rem;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .visi-misi-item .icon {
        width: 45px;
        height: 45px;
        background: linear-gradient(135deg, #10b981 0%, #059669 100%);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 1.5rem;
        flex-shrink: 0;
    }

    .visi-misi-item p {
        color: #555;
        line-height: 1.8;
        font-size: 0.95rem;
    }

    @media (max-width: 768px) {
        .tentang-section {
            padding: 60px 20px;
        }

        .tentang-header h2 {
            font-size: 1.8rem;
        }

        .tentang-content {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .tentang-image::after {
            top: -15px;
            left: -15px;
            right: 15px;
            bottom: 15px;
        }

        .tentang-text {
            padding: 0;
        }

        .visi-misi-item {
            margin-bottom: 25px;
        }
    }

    @media (max-width: 480px) {
        .tentang-section {
            padding: 40px 15px;
        }

        .tentang-header h2 {
            font-size: 1.5rem;
        }

        .visi-misi-item {
            padding: 15px;
        }

        .visi-misi-item h3 {
            font-size: 1.1rem;
        }
    }
</style>

<section class="tentang-section">
    <div class="tentang-container">
        <div class="tentang-header">
            <h2>Tentang SMPN 12 Gresik</h2>
            <p>Perjalanan Anda Menuju Pengetahuan & Penemuan Jati Diri</p>
        </div>

        <div class="tentang-content">
            <div class="tentang-image">
                     <img src="<?php echo e(asset('assets/ha.jpg')); ?>" alt="Foto Smpn">
        </div>

            <div class="tentang-text">
                <div class="visi-misi-item">
                    <h3>
                        <div class="icon">
                            <i class="fas fa-eye"></i>
                        </div>
                        Visi Kami
                    </h3>
                    <p>"Terwujudnya sekolah yang bermutu, berkepribadian Pancasila, berwawasan lingkungan serta berakhlakul karimah"</p>
                </div>

                <div class="visi-misi-item">
                    <h3>
                        <div class="icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        Misi Kami
                    </h3>
                    <p>Melaksanakan pengembangan Kurikulum Operasional Satuan Pendidikan, mengembangkan pembelajaran paradigma baru yang kreatif-inovatif, meningkatkan prestasi akademik dan non akademik, serta mewujudkan lingkungan sekolah yang sejuk dan asri.</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- 
    Catatan: 
    1. Pastikan Anda sudah memuat Font Awesome dan Swiper.js di file utama Anda.
    2. Jika belum, saya sertakan link CDN-nya di dalam section ini agar langsung jalan.
-->

<!-- Swiper & Font Awesome CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

<style>
    .facilities-section {
        --deep-green: #064e3b; 
        --accent-green: #10b981;
        --text-white: #ffffff;
        --transition-smooth: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        
        background-color: #f8fafc;
        padding: 100px 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .facilities-section .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .facilities-section .section-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .facilities-section .section-header h2 {
        font-size: 3rem;
        color: var(--deep-green);
        font-weight: 800;
        margin-bottom: 15px;
        letter-spacing: -1px;
    }

    .facilities-section .section-header p {
        color: #64748b;
        max-width: 600px;
        margin: 0 auto;
        font-size: 1.1rem;
    }

    /* Swiper Styling */
    .facilities-section .swiper {
        width: 100%;
        padding: 20px 0 80px !important;
    }

    .facilities-section .facility-card {
        position: relative;
        height: 450px;
        border-radius: 30px;
        overflow: hidden;
        cursor: pointer;
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        background: #fff;
    }

    .facilities-section .facility-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition-smooth);
    }

    /* Overlay & Hover Effect */
    .facilities-section .facility-overlay {
        position: absolute;
        inset: 0;
        background: linear-gradient(to top, rgba(6, 78, 59, 0.9) 0%, rgba(6, 78, 59, 0.2) 60%, transparent 100%);
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        padding: 35px;
        transition: var(--transition-smooth);
    }

    .facilities-section .facility-info {
        transform: translateY(20px);
        transition: var(--transition-smooth);
    }

    .facilities-section .facility-icon {
        width: 50px;
        height: 50px;
        background: var(--text-white);
        color: var(--deep-green);
        border-radius: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.3rem;
        margin-bottom: 20px;
        transition: var(--transition-smooth);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .facilities-section .facility-name {
        color: var(--text-white);
        font-size: 1.75rem;
        font-weight: 800;
        margin-bottom: 10px;
    }

    .facilities-section .facility-description {
        color: rgba(255, 255, 255, 0.9);
        font-size: 1rem;
        line-height: 1.6;
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        transition: var(--transition-smooth);
    }

    /* Hover State */
    .facilities-section .facility-card:hover .facility-image {
        transform: scale(1.15);
    }

    .facilities-section .facility-card:hover .facility-overlay {
        background: linear-gradient(to top, var(--deep-green) 0%, rgba(6, 78, 59, 0.6) 100%);
    }

    .facilities-section .facility-card:hover .facility-info {
        transform: translateY(0);
    }

    .facilities-section .facility-card:hover .facility-description {
        opacity: 1;
        max-height: 150px;
        margin-top: 15px;
    }

    .facilities-section .facility-card:hover .facility-icon {
        background: var(--accent-green);
        color: white;
        transform: rotate(-10deg);
    }

    /* Navigation */
    .facilities-section .swiper-button-next, 
    .facilities-section .swiper-button-prev {
        color: var(--deep-green) !important;
        background: white;
        width: 55px;
        height: 55px;
        border-radius: 50%;
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        transition: 0.3s;
    }
    
    .facilities-section .swiper-button-next:hover, 
    .facilities-section .swiper-button-prev:hover {
        background: var(--deep-green);
        color: white !important;
    }

    .facilities-section .swiper-button-next:after, 
    .facilities-section .swiper-button-prev:after {
        font-size: 1.2rem !important;
        font-weight: 900;
    }

    .facilities-section .swiper-pagination-bullet-active {
        background: var(--deep-green) !important;
        width: 25px;
        border-radius: 10px;
    }

    /* Premium Button Style */
    .facilities-section .btn-wrapper {
        text-align: center;
        margin-top: 20px;
    }

    .facilities-section .btn-premium {
        display: inline-flex;
        align-items: center;
        padding: 16px 40px;
        background: linear-gradient(135deg, var(--deep-green) 0%, #059669 100%);
        color: white !important;
        font-weight: 700;
        font-size: 1rem;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        border-radius: 50px;
        transition: all 0.4s ease;
        text-decoration: none !important;
        box-shadow: 0 10px 30px rgba(6, 78, 59, 0.3);
        border: none;
    }

    .facilities-section .btn-premium:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(6, 78, 59, 0.4);
        background: linear-gradient(135deg, #059669 0%, var(--accent-green) 100%);
    }

    .facilities-section .btn-premium i {
        margin-left: 12px;
        transition: 0.3s;
    }

    .facilities-section .btn-premium:hover i {
        transform: translateX(8px);
    }

    @media (max-width: 767px) {
        .facilities-section .section-header h2 { font-size: 2.2rem; }
        .facilities-section .swiper-button-next,
        .facilities-section .swiper-button-prev { display: none !important; }
        .facilities-section .facility-card { height: 400px; }
    }
</style>

<section class="facilities-section">
    <div class="container">

        <div class="section-header">
            <h2>Fasilitas <span style="color: var(--accent-green);">Unggulan</span></h2>
            <p>Lingkungan belajar modern dengan fasilitas lengkap untuk mendukung kenyamanan dan prestasi siswa.</p>
        </div>

        <?php if(!empty($data['facilities']) && count($data['facilities']) > 0): ?>
        <div class="swiper facilitySwiper">
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $data['facilities']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facility): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide">
                    <div class="facility-card">
                        <img src="<?php echo e(asset('storage/' . $facility->image)); ?>" class="facility-image" alt="<?php echo e($facility->name); ?>">
                        <div class="facility-overlay">
                            <div class="facility-info">
                                <?php if(!empty($facility->icon)): ?>
                                <div class="facility-icon">
                                    <i class="fas <?php echo e($facility->icon); ?>"></i>
                                </div>
                                <?php endif; ?>
                                <h3 class="facility-name"><?php echo e($facility->name); ?></h3>
                                <p class="facility-description"><?php echo e($facility->description); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <?php else: ?>
            <p style="text-align:center;color:#666;padding: 50px;">Data fasilitas belum tersedia.</p>
        <?php endif; ?>

        
        <div class="btn-wrapper">
            <a href="<?php echo e(route('facilities.index')); ?>" class="btn-premium">
                Lihat Semua Fasilitas <i class="fas fa-arrow-right"></i>
            </a>
        </div>

    </div>
</section>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    new Swiper(".facilitySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        centeredSlides: false,
        autoplay: { delay: 4000, disableOnInteraction: false },
        pagination: { el: ".swiper-pagination", clickable: true, dynamicBullets: true },
        navigation: { nextEl: ".swiper-button-next", prevEl: ".swiper-button-prev" },
        breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 }
        }
    });
</script>



<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Latest News Section -->

<style>
    /* =========================
   IMPROVED NEWS SECTION
   ========================= */
:root {
    --primary-color: #16a34a;
    --primary-dark: #15803d;
    --text-main: #1f2937;
    --text-muted: #6b7280;
    --bg-light: #f9fafb;
    --white: #ffffff;
    --shadow-sm: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

.news-section {
    padding: 80px 0;
    background-color: white;
    overflow: hidden;
}

.section-header {
    text-align: center;
    margin-bottom: 50px;
}

.section-title {
    font-size: 2.25rem;
    font-weight: 800;
    color: var(--text-main);
    margin-bottom: 1rem;
    position: relative;
    display: inline-block;
}

.section-subtitle {
    color: var(--text-muted);
    font-size: 1.1rem;
    max-width: 600px;
    margin: 0 auto;
}

/* Swiper Customization */
.news-slider-container {
    position: relative;
    padding: 20px 10px 50px;
}

.news-swiper {
    padding: 10px 10px 60px !important;
}

.swiper-button-next, 
.swiper-button-prev {
    color: var(--primary-color);
    background: var(--white);
    width: 45px;
    height: 45px;
    border-radius: 50%;
    box-shadow: var(--shadow-md);
    transition: var(--transition);
}

.swiper-button-next:after, 
.swiper-button-prev:after {
    font-size: 1.2rem;
    font-weight: bold;
}

.swiper-button-next:hover, 
.swiper-button-prev:hover {
    background: var(--primary-color);
    color: var(--white);
}

.swiper-pagination-bullet-active {
    background: var(--primary-color) !important;
}

/* News Card Design */
.news-card {
    background: var(--white);
    border-radius: 20px;
    height: 100%;
    display: flex;
    flex-direction: column;
    box-shadow: var(--shadow-sm);
    transition: var(--transition);
    border: 1px solid rgba(0,0,0,0.03);
    overflow: hidden;
}

.news-card:hover {
    transform: translateY(-10px);
    box-shadow: var(--shadow-md);
}

.news-image-wrapper {
    position: relative;
    width: 100%;
    aspect-ratio: 16 / 10; /* Konsistensi ukuran gambar */
    overflow: hidden;
}

.news-image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.news-card:hover .news-image-wrapper img {
    transform: scale(1.1);
}

.news-image-placeholder {
    width: 100%;
    height: 100%;
    background: #e5e7eb;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 3rem;
    color: #9ca3af;
}

.news-date-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    background: var(--white);
    padding: 8px 12px;
    border-radius: 12px;
    display: flex;
    flex-direction: column;
    align-items: center;
    box-shadow: var(--shadow-sm);
    z-index: 2;
}

.news-date-badge .day {
    font-weight: 800;
    font-size: 1.1rem;
    color: var(--primary-color);
    line-height: 1;
}

.news-date-badge .month {
    font-size: 0.75rem;
    font-weight: 600;
    color: var(--text-muted);
    text-transform: uppercase;
}

.news-content {
    padding: 25px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.news-card-title {
    font-size: 1.25rem;
    font-weight: 700;
    line-height: 1.4;
    margin-bottom: 12px;
    color: var(--text-main);
    display: -webkit-box;
    -webkit-line-clamp: 2; /* Batasi judul maksimal 2 baris */
    -webkit-box-orient: vertical;
    overflow: hidden;
    min-height: 3.5rem; /* Pastikan tinggi judul konsisten */
}

.news-card-title a {
    text-decoration: none;
    color: inherit;
    transition: color 0.2s;
}

.news-card-title a:hover {
    color: var(--primary-color);
}

.news-card-excerpt {
    color: var(--text-muted);
    font-size: 0.95rem;
    line-height: 1.6;
    margin-bottom: 20px;
    display: -webkit-box;
    -webkit-line-clamp: 3; /* Batasi kutipan maksimal 3 baris */
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.news-card-footer {
    margin-top: auto;
    padding-top: 15px;
    border-top: 1px solid #f3f4f6;
}

.btn-read-more {
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 700;
    font-size: 0.9rem;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: var(--transition);
}

.btn-read-more i {
    transition: transform 0.3s ease;
}

.btn-read-more:hover {
    color: var(--primary-dark);
}

.btn-read-more:hover i {
    transform: translateX(5px);
}

.btn-view-all {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: var(--primary-color);
    color: var(--white);
    padding: 12px 30px;
    border-radius: 50px;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 4px 14px 0 rgba(22, 163, 74, 0.39);
    transition: var(--transition);
}

.btn-view-all:hover {
    background: var(--primary-dark);
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(22, 163, 116, 0.23);
    color: var(--white);
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .section-title {
        font-size: 1.8rem;
    }
    .news-section {
        padding: 60px 0;
    }
    .swiper-button-next, 
    .swiper-button-prev {
        display: none; /* Sembunyikan panah di mobile, gunakan swipe */
    }
}
</style>

<!-- News Section -->
<section class="news-section relative py-24 bg-white overflow-hidden">
    <!-- Subtle Background Decoration -->
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none z-0">
        <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-green-50 rounded-full blur-[120px] opacity-60"></div>
        <div class="absolute bottom-[-10%] left-[-5%] w-[400px] h-[400px] bg-emerald-50 rounded-full blur-[100px] opacity-50"></div>
    </div>

    <div class="container relative z-10 mx-auto px-4 max-w-7xl">
        <!-- Section Header - Centered to match Facilities Section -->
        <div class="text-center mb-16" data-aos="fade-up">
            <div class="flex flex-col items-center justify-center mb-4">
                <span class="text-green-600 font-bold uppercase tracking-widest text-sm mb-2">Informasi Terkini</span>
                <h2 class="text-4xl md:text-5xl font-black text-gray-900 leading-tight">
                    Berita <span class="text-green-600">Terbaru</span>
                </h2>
                <div class="w-20 h-1 bg-green-600 mt-4 rounded-full"></div>
            </div>
            <p class="text-gray-500 text-lg leading-relaxed max-w-2xl mx-auto">
                Ikuti perkembangan dan prestasi terbaru dari SMP Negeri 12 Gresik melalui update berita kami yang terpercaya.
            </p>
        </div>

        <!-- News Slider Container -->
        <div class="news-slider-wrapper relative group" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper news-swiper !overflow-visible md:!overflow-hidden px-4">
                <div class="swiper-wrapper">
                    <?php if(isset($data['latest_news']) && $data['latest_news']->count()): ?>
                        <?php $__currentLoopData = $data['latest_news']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide h-auto py-6">
                                <article class="premium-news-card group">
                                    <!-- Image Container -->
                                    <div class="card-image-box">
                                        <?php if($item->image): ?>
                                            <img src="<?php echo e(asset($item->image)); ?>" alt="<?php echo e($item->title); ?>" class="card-img" loading="lazy">
                                        <?php else: ?>
                                            <div class="card-img-placeholder">
                                                <i class="fas fa-newspaper text-5xl text-gray-200"></i>
                                            </div>
                                        <?php endif; ?>
                                        
                                        <?php if($item->category): ?>
                                            <div class="card-badge">
                                                <?php echo e($item->category); ?>

                                            </div>
                                        <?php endif; ?>

                                        <!-- Hover Overlay -->
                                        <div class="card-overlay">
                                            <a href="<?php echo e(route('information.news.show', $item->slug)); ?>" class="overlay-icon">
                                                <i class="fas fa-link"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Content -->
                                    <div class="card-body">
                                        <div class="card-meta">
                                            <div class="meta-item">
                                                <i class="far fa-calendar-alt"></i>
                                                <span><?php echo e($item->published_at ? $item->published_at->format('d M Y') : $item->created_at->format('d M Y')); ?></span>
                                            </div>
                                            <div class="meta-item">
                                                <i class="far fa-user"></i>
                                                <span><?php echo e($item->author ?? 'Admin'); ?></span>
                                            </div>
                                        </div>

                                        <h3 class="card-title">
                                            <a href="<?php echo e(route('information.news.show', $item->slug)); ?>">
                                                <?php echo e($item->title); ?>

                                            </a>
                                        </h3>

                                        <p class="card-text">
                                            <?php echo e(Str::limit(strip_tags($item->content), 100)); ?>

                                        </p>

                                        <div class="card-footer">
                                            <a href="<?php echo e(route('information.news.show', $item->slug)); ?>" class="read-more-btn">
                                                <span>Baca Selengkapnya</span>
                                                <div class="icon-circle">
                                                    <i class="fas fa-arrow-right"></i>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <!-- Empty State -->
                        <div class="col-span-full py-20 text-center bg-gray-50 rounded-3xl border-2 border-dashed border-gray-200">
                            <i class="fas fa-newspaper text-6xl text-gray-300 mb-4"></i>
                            <h3 class="text-xl font-bold text-gray-900">Belum Ada Berita</h3>
                            <p class="text-gray-500">Nantikan informasi terbaru dari kami segera.</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Slider Navigation Buttons - Positioned on sides for Desktop -->
            <button class="nav-btn prev-news group absolute left-[-20px] md:left-[-60px] top-1/2 -translate-y-1/2 z-20 opacity-0 group-hover:opacity-100 transition-all duration-300 hidden md:flex" aria-label="Previous slide">
                <i class="fas fa-chevron-left text-gray-400 group-hover:text-green-600 transition-colors"></i>
            </button>
            <button class="nav-btn next-news group absolute right-[-20px] md:right-[-60px] top-1/2 -translate-y-1/2 z-20 opacity-0 group-hover:opacity-100 transition-all duration-300 hidden md:flex" aria-label="Next slide">
                <i class="fas fa-chevron-right text-gray-400 group-hover:text-green-600 transition-colors"></i>
            </button>
            
            <!-- Pagination Dots - Visible on Mobile -->
            <div class="swiper-pagination !static mt-10"></div>
        </div>

        <!-- View All Button -->
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="<?php echo e(route('information.news')); ?>" class="view-all-btn group">
                <span class="relative z-10">Lihat Semua Berita</span>
                <i class="fas fa-th-large ml-2 relative z-10 group-hover:rotate-90 transition-transform duration-500"></i>
                <div class="btn-bg"></div>
            </a>
        </div>
    </div>
</section>

<?php $__env->startPush('styles'); ?>
<style>
    /* PREMIUM NEWS SECTION STYLES - CENTERED VERSION */
    
    /* Navigation Buttons */
    .nav-btn {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: white;
        border: 1px solid #f3f4f6;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
    }

    .nav-btn:hover {
        background: #16a34a;
        border-color: #16a34a;
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 15px 30px rgba(22, 163, 74, 0.25);
    }

    .nav-btn:hover i {
        color: white !important;
    }

    /* Premium Card Design */
    .premium-news-card {
        background: white;
        border-radius: 24px;
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid #f3f4f6;
        position: relative;
        z-index: 1;
    }

    .premium-news-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 30px 60px -15px rgba(0, 0, 0, 0.1);
        border-color: transparent;
    }

    .card-image-box {
        position: relative;
        height: 220px;
        margin: 12px;
        border-radius: 20px;
        overflow: hidden;
    }

    .card-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.8s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .premium-news-card:hover .card-img {
        transform: scale(1.1);
    }

    .card-img-placeholder {
        width: 100%;
        height: 100%;
        background: #f9fafb;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-badge {
        position: absolute;
        top: 16px;
        left: 16px;
        background: rgba(22, 163, 74, 0.9);
        backdrop-filter: blur(8px);
        color: white;
        padding: 6px 16px;
        border-radius: 12px;
        font-size: 0.75rem;
        font-weight: 700;
        z-index: 2;
    }

    .card-overlay {
        position: absolute;
        inset: 0;
        background: rgba(22, 163, 74, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.4s ease;
        z-index: 3;
    }

    .premium-news-card:hover .card-overlay {
        opacity: 1;
    }

    .overlay-icon {
        width: 45px;
        height: 45px;
        background: white;
        color: #16a34a;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.1rem;
        transform: translateY(15px);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        text-decoration: none;
    }

    .premium-news-card:hover .overlay-icon {
        transform: translateY(0);
    }

    /* Card Body */
    .card-body {
        padding: 15px 24px 28px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }

    .card-meta {
        display: flex;
        gap: 15px;
        margin-bottom: 12px;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 0.8rem;
        color: #9ca3af;
    }

    .meta-item i {
        color: #16a34a;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 800;
        color: #111827;
        line-height: 1.4;
        margin-bottom: 12px;
        transition: color 0.3s ease;
    }

    .card-title a {
        text-decoration: none;
        color: inherit;
    }

    .premium-news-card:hover .card-title {
        color: #16a34a;
    }

    .card-text {
        color: #6b7280;
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 20px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    /* Read More Button */
    .read-more-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        color: #111827;
        font-weight: 700;
        font-size: 0.85rem;
        transition: all 0.3s ease;
        margin-top: auto;
    }

    .icon-circle {
        width: 32px;
        height: 32px;
        background: #f3f4f6;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .read-more-btn:hover {
        color: #16a34a;
        gap: 15px;
    }

    .read-more-btn:hover .icon-circle {
        background: #16a34a;
        color: white;
        transform: rotate(-45deg);
    }

    /* View All Button */
    .view-all-btn {
        position: relative;
        display: inline-flex;
        align-items: center;
        padding: 14px 32px;
        background: transparent;
        color: #16a34a;
        font-weight: 800;
        border-radius: 50px;
        overflow: hidden;
        transition: all 0.4s ease;
        border: 2px solid #16a34a;
        text-decoration: none;
        font-size: 0.9rem;
    }

    .view-all-btn:hover {
        color: white;
        box-shadow: 0 10px 20px rgba(22, 163, 74, 0.2);
    }

    .btn-bg {
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: #16a34a;
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: 1;
    }

    .view-all-btn:hover .btn-bg {
        left: 0;
    }

    /* Swiper Customization */
    .news-swiper .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background: #d1d5db;
        opacity: 1;
        transition: all 0.3s ease;
    }

    .news-swiper .swiper-pagination-bullet-active {
        width: 24px;
        background: #16a34a;
        border-radius: 4px;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<!-- Swiper JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const newsSwiper = new Swiper('.news-swiper', {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            speed: 800,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.next-news',
                prevEl: '.prev-news',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 24,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>



<!-- Achievement Section - Ultra Stable Green Layout -->
<section class="ach-section">
    <div class="ach-container">
        <?php
            $achievements = collect($data['latest_news'] ?? [])
                ->filter(function($item) {
                    return strtolower($item->category ?? '') == 'prestasi';
                })
                ->take(6);
        ?>

        <?php if($achievements->count() > 0): ?>
            <div class="ach-flex-container">
                <!-- KIRI: GAMBAR DENGAN EFEK TUMPUKAN CSS STABIL -->
                <div class="ach-image-side">
                    <div class="ach-stack-container">
                        <!-- Efek Tumpukan di Belakang (CSS Only) -->
                        <div class="ach-stack-bg-1"></div>
                        <div class="ach-stack-bg-2"></div>
                        
                        <div class="swiper achievementSwiper">
                            <div class="swiper-wrapper">
                                <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="swiper-slide">
                                        <div class="ach-image-box">
                                            <?php if($item->image): ?>
                                                <img src="<?php echo e(asset($item->image)); ?>" alt="<?php echo e($item->title); ?>" class="ach-img">
                                            <?php else: ?>
                                                <div class="ach-placeholder">
                                                    <i class="fas fa-trophy"></i>
                                                </div>
                                            <?php endif; ?>
                                            <div class="ach-label">Dokumentasi</div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            
                            <!-- Navigasi Bulat -->
                            <div class="ach-nav-wrapper">
                                <button class="ach-nav-btn ach-prev">
                                    <i class="fas fa-chevron-left"></i>
                                </button>
                                <button class="ach-nav-btn ach-next">
                                    <i class="fas fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- KANAN: KONTEN TEKS -->
                <div class="ach-text-side">
                    <div class="swiper achievementTextSwiper">
                        <div class="swiper-wrapper">
                            <?php $__currentLoopData = $achievements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="swiper-slide">
                                    <div class="ach-info">
                                        <span class="ach-badge">PRESTASI TERBARU</span>
                                        <h2 class="ach-title"><?php echo e($item->title); ?></h2>
                                        <p class="ach-desc">
                                            <?php echo e(Str::limit(strip_tags($item->content), 180, '...')); ?>

                                        </p>
                                       <a href="<?php echo e(route('information.news', ['category' => 'Prestasi'])); ?>" class="ach-btn">
                                                Lihat Daftar Prestasi Lainnya
                                            </a>

                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="ach-empty">
                <i class="fas fa-award"></i>
                <p>Belum ada data prestasi terbaru.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<style>
    /* BASE SETUP */
    .ach-section {
        padding: 80px 0;
        background: #ffffff;
        overflow: hidden;
    }

    .ach-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .ach-flex-container {
        display: flex;
        align-items: center;
        gap: 50px;
        flex-wrap: wrap;
    }

    /* ============================================
       LEFT SIDE: STABLE STACK EFFECT
       ============================================ */
    .ach-image-side {
        flex: 1;
        min-width: 300px;
        position: relative;
    }

    .ach-stack-container {
        position: relative;
        width: 100%;
        max-width: 550px;
        margin: 0 auto;
    }

    /* CSS Stacked Backgrounds */
    .ach-stack-bg-1, .ach-stack-bg-2 {
        position: absolute;
        top: 0;
        right: -15px;
        width: 100%;
        height: 100%;
        background: #e2e8f0;
        border-radius: 12px;
        z-index: 1;
    }

    .ach-stack-bg-1 {
        transform: translateX(10px) scale(0.98);
        opacity: 0.8;
    }

    .ach-stack-bg-2 {
        transform: translateX(20px) scale(0.95);
        opacity: 0.5;
    }

    .achievementSwiper {
        position: relative;
        z-index: 5;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        background: #fff;
    }

    .ach-image-box {
        position: relative;
        aspect-ratio: 4/3;
        width: 100%;
        overflow: hidden;
    }

    .ach-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .ach-placeholder {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #16a34a, #22c55e);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 4rem;
    }

    .ach-label {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: linear-gradient(90deg, #16a34a, #22c55e);
        color: #fff;
        padding: 15px;
        text-align: center;
        font-weight: 700;
        font-size: 1rem;
    }

    /* NAVIGASI BULAT */
    .ach-nav-wrapper {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        transform: translateY(-50%);
        display: flex;
        justify-content: space-between;
        padding: 0 10px;
        z-index: 10;
        pointer-events: none;
    }

    .ach-nav-btn {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: #16a34a;
        color: #fff;
        border: none;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        pointer-events: auto;
        transition: all 0.3s ease;
    }

    .ach-nav-btn:hover {
        background: #15803d;
        transform: scale(1.1);
    }

    /* ============================================
       RIGHT SIDE: TEXT CONTENT
       ============================================ */
    .ach-text-side {
        flex: 1;
        min-width: 300px;
    }

    .ach-info {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .ach-badge {
        display: inline-block;
        background: #f0fdf4;
        color: #16a34a;
        padding: 6px 15px;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 700;
        width: fit-content;
    }

    .ach-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #1e293b;
        line-height: 1.2;
        margin: 0;
    }

    .ach-desc {
        font-size: 1.1rem;
        color: #64748b;
        line-height: 1.7;
        margin: 0;
    }

    .ach-btn {
        display: inline-block;
        background: #16a34a;
        color: #fff;
        padding: 14px 28px;
        border-radius: 8px;
        font-weight: 700;
        text-decoration: none;
        width: fit-content;
        transition: all 0.3s ease;
        box-shadow: 0 10px 20px rgba(22, 163, 74, 0.2);
    }

    .ach-btn:hover {
        background: #15803d;
        transform: translateY(-2px);
        color: #fff;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .ach-flex-container {
            flex-direction: column;
            text-align: center;
        }
        .ach-badge, .ach-btn {
            margin: 0 auto;
        }
        .ach-title {
            font-size: 2rem;
        }
        .ach-stack-container {
            max-width: 100%;
            padding-right: 20px;
        }
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const textSwiper = new Swiper('.achievementTextSwiper', {
            slidesPerView: 1,
            effect: 'fade',
            fadeEffect: { crossFade: true },
            allowTouchMove: false,
        });

        const imageSwiper = new Swiper('.achievementSwiper', {
            slidesPerView: 1,
            loop: true,
            navigation: {
                nextEl: '.ach-next',
                prevEl: '.ach-prev',
            },
            autoplay: {
                delay: 5000,
            },
            on: {
                slideChange: function () {
                    textSwiper.slideTo(this.realIndex);
                }
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>








<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Guru Kami</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
 /* === FONT DASAR === */
body, html {
    font-family: 'Inter', sans-serif;
    background-color: #f8fafc;
}

/* === CONTAINER UTAMA SECTION === */
.teacher-section-container {
    background: linear-gradient(145deg, #f9fafb 0%, #f1f5f9 100% );
}

/* === JUDUL DAN BADGE === */
.section-badge {
    background: linear-gradient(135deg, #2eb650, #0e7e39);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 9999px;
    font-size: 0.8rem;
    font-weight: 600;
    letter-spacing: 0.05em;
    text-transform: uppercase;
    box-shadow: 0 4px 20px rgba(46, 182, 80, 0.3);
}

.main-title {
    font-size: clamp(2.25rem, 5vw, 3.5rem);
    font-weight: 800;
    color: #1e293b;
    line-height: 1.2;
}

/* === KARTU DETAIL GURU (KIRI) === */
.featured-teacher-card {
    width: 100%;
    max-width: 400px;
    height: auto;
    padding: 1rem;
    border-radius: 1.5rem;
    box-shadow: 0 20px 40px -15px rgba(0,0,0,0.08);
    overflow: hidden;
}

.featured-teacher-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    border-radius: 1rem;
}

.featured-teacher-name {
    font-size: 1.75rem;
    font-weight: 700;
    color: #111827;
    margin-top: 30px;
}

.featured-teacher-position {
    font-size: 1rem;
    color: #6b7280;
}

/* === GRID KARTU GURU KECIL (KANAN) === */
.teacher-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
    align-content: flex-start;
}

/* Responsive grid untuk tablet dan desktop */
@media (min-width: 640px) {
    .teacher-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }
}

@media (min-width: 1024px) {
    .teacher-grid {
        grid-template-columns: repeat(3, 1fr);
        gap: 1.5rem;
    }
}

/* === KARTU GURU KECIL (ITEM GRID) === */
.teacher-card {
    position: relative;
    cursor: pointer;
    overflow: hidden;
    border-radius: 1rem;
    background-color: #ffffffff; /* Warna placeholder saat gambar loading */
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border: 2px solid transparent;
    padding: 20px;
    /* Menjaga rasio aspek kartu tetap konsisten */
    aspect-ratio: 3 / 4;
}

.teacher-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 30px -10px rgba(30, 90, 50, 0.47);
}

.teacher-card.active {
    border-color: #22c55e; /* Warna hijau untuk menandai yang aktif */
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(34, 197, 94, 0.3);
}

.teacher-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    border-radius: 20px;
    transition: transform 0.4s ease;
}

.teacher-card:hover img {
    transform: scale(1.1);
}

/* Overlay untuk nama dan jabatan (muncul saat hover) */
.teacher-card-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 2rem 1rem 1rem;
    color: white;
    background: linear-gradient(to top, rgba(7, 94, 60, 0.8), transparent);

    /* Sembunyikan di awal */
    opacity: 0;
    transform: translateY(20px);
    transition: opacity 0.3s ease, transform 0.3s ease;
}

.teacher-card:hover .teacher-card-overlay {
    opacity: 1;
    transform: translateY(0);
}

.teacher-card-name {
    font-weight: 600;
    font-size: 0.9rem;
    line-height: 1.3;
}

.teacher-card-position {
    font-size: 0.75rem;
    opacity: 0.8;
}




/* === MOBILE RESPONSIVE STYLES === */

@media (max-width: 639px) {
  .teacher-section-container {
    padding: 1.5rem 1rem;
  }

.featured-teacher-card {
  width: 100%;
  max-width: 100%;
  height: auto;
  padding: 0;
  overflow: hidden;
  border-radius: 12px;
}

.featured-teacher-image img {
  width: 200px;
  height: 400px;
  object-fit: contain;   /* biar full tanpa kepotong */
  object-position: center;
  display: block;
}


.featured-teacher-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;  /* biar full kiri–kanan */
  object-position: top center; /* fokus ke bagian atas, bawahnya melar */
  display: block;
}


  .teacher-grid {
    grid-template-columns: repeat(2, 1fr); /* 2 kolom di mobile */
    gap: 1rem;
  }
  .teacher-card {
    width: 100%;
    max-width: 160px;  /* kecilin card */
    padding: 10px;
    aspect-ratio: 3/4;
  }
}

@media (max-width: 1023px) {
    .featured-teacher-card {
        padding: 1.5rem;
    }

    .featured-teacher-image {
        max-width: 200px;
    }

    .featured-teacher-name {
        font-size: 1.5rem;
    }

    .main-title {
        font-size: 2rem;
    }

    .section-badge {
        font-size: 0.75rem;
        padding: 0.4rem 1.2rem;
    }
}

@media (max-width: 639px) {
    .teacher-section-container {
        padding: 3rem 0;
    }

    .featured-teacher-card {
        padding: 1rem;
    }

    .featured-teacher-image {
        max-width: 150px;
    }

    .featured-teacher-name {
        font-size: 1.25rem;
        margin-top: 1rem;
    }

    .main-title {
        font-size: 1.75rem;
    }

    .teacher-grid {
        gap: 0.75rem;
    }

    .teacher-card {
        aspect-ratio: 1 / 1.2;
    }
}

/* === SMOOTH TRANSITIONS === */
.featured-teacher-card {
    transition: opacity 0.3s ease, transform 0.3s ease;
}

/* === HOVER EFFECTS === */
.featured-teacher-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 25px 50px -15px rgba(0, 0, 0, 0.12);
}

/* === SOCIAL ICONS STYLING === */
.social-icons a {
    transition: all 0.3s ease;
    padding: 0.5rem;
    border-radius: 0.5rem;
}

.social-icons a:hover {
    background-color: #f3f4f6;
    transform: translateY(-2px);
}


    </style>
</head>
<body>




<section class="ppdb-section-v3">
    <div class="container">
        <div class="ppdb-card-v3" data-aos="fade-up">

            <!-- Kolom Kiri: Konten Informasi -->
            <div class="ppdb-content-v3">
                <div class="ppdb-header-v3">
                    <span class="ppdb-badge-v3">
                        <?php echo e(optional($ppdb)->section_badge ?? 'SPMB T.A.'); ?>

                    </span>

                    <h2 class="ppdb-title-v3">
                        <?php echo e(optional($ppdb)->section_title ?? 'Informasi Penerimaan Siswa Baru'); ?>

                    </h2>

                    <p class="ppdb-description-v3">
                        <?php echo optional($ppdb)->section_description ?? 'Deskripsi belum diatur.'; ?>

                    </p>
                </div>

                <!-- JALUR PENDAFTARAN -->
                <div class="ppdb-schedule-v3">

                    <div class="schedule-item-v3">
                        <div class="schedule-icon-v3"><i class="fas fa-hands-helping"></i></div>
                        <div class="schedule-info-v3">
                            <h6>Jalur Afirmasi</h6>
                            <span><?php echo e(optional($ppdb)->section_jalur_afirmasi ?? '-'); ?></span>
                        </div>
                    </div>

                    <div class="schedule-item-v3">
                        <div class="schedule-icon-v3"><i class="fas fa-exchange-alt"></i></div>
                        <div class="schedule-info-v3">
                            <h6>Jalur Perpindahan Tugas</h6>
                            <span><?php echo e(optional($ppdb)->section_jalur_pindah ?? '-'); ?></span>
                        </div>
                    </div>

                    <div class="schedule-item-v3">
                        <div class="schedule-icon-v3"><i class="fas fa-trophy"></i></div>
                        <div class="schedule-info-v3">
                            <h6>Jalur Prestasi</h6>
                            <span><?php echo e(optional($ppdb)->section_jalur_prestasi ?? '-'); ?></span>
                        </div>
                    </div>

                    <div class="schedule-item-v3">
                        <div class="schedule-icon-v3"><i class="fas fa-map-marked-alt"></i></div>
                        <div class="schedule-info-v3">
                            <h6>Jalur Zonasi</h6>
                            <span><?php echo e(optional($ppdb)->section_jalur_zonasi ?? '-'); ?></span>
                        </div>
                    </div>

                </div>

                <!-- Tombol Aksi -->
                <div class="ppdb-buttons-v3">

                    <a href="<?php echo e(optional($ppdb)->button_panduan_link ?? '#'); ?>"
                       class="btn btn-primary">
                        <i class="fas fa-info-circle me-2"></i>
                        <?php echo e(optional($ppdb)->button_panduan_text ?? 'Lihat Panduan Lengkap'); ?>

                    </a>

                    <a href="<?php echo e(optional($ppdb)->button_wa_link ?? '#'); ?>"
                       class="btn btn-outline-secondary">
                        <i class="fab fa-whatsapp me-2"></i>
                        <?php echo e(optional($ppdb)->button_wa_text ?? 'Hubungi Panitia'); ?>

                    </a>

                </div>
            </div>

            <!-- Kolom Kanan: Gambar Slider -->
            <div class="ppdb-image-v3">
                <div class="swiper ppdbSwiperV3">
                    <div class="swiper-wrapper">

                        <?php if(optional($ppdb)->slider_1): ?>
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('storage/' . $ppdb->slider_1)); ?>" alt="Slider 1">
                            </div>
                        <?php endif; ?>

                        <?php if(optional($ppdb)->slider_2): ?>
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('storage/' . $ppdb->slider_2)); ?>" alt="Slider 2">
                            </div>
                        <?php endif; ?>

                        <?php if(optional($ppdb)->slider_3): ?>
                            <div class="swiper-slide">
                                <img src="<?php echo e(asset('storage/' . $ppdb->slider_3)); ?>" alt="Slider 3">
                            </div>
                        <?php endif; ?>

                    </div>

                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>

                </div>
            </div>

        </div>
    </div>
</section>



<!-- CSS (TIDAK ADA PERUBAHAN, TETAP SAMA SEPERTI SEBELUMNYA ) -->
<style>
    .ppdb-section-v3 {
        padding: 5rem 0;
        background: #f8f9fa;
    }
    .ppdb-card-v3 {
        display: grid;
        grid-template-columns: 1fr;
        background: #ffffff;
        border-radius: 1.25rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
        overflow: hidden;
        border: 1px solid #e9ecef;
    }
    @media (min-width: 992px) {
        .ppdb-card-v3 { grid-template-columns: 55% 45%; }
    }
    .ppdb-content-v3 {
        padding: 2.5rem;
        display: flex;
        flex-direction: column;
    }
    @media (max-width: 768px) {
        .ppdb-content-v3 { padding: 2rem 1.5rem; }
    }
    .ppdb-badge-v3 {
        font-size: 0.8rem;
        font-weight: 600;
        color: #16a34a;
        background-color: #e7f5ec;
        padding: 0.4rem 0.8rem;
        border-radius: 6px;
        align-self: flex-start;
        margin-bottom: 1rem;
    }
    .ppdb-title-v3 {
        font-family: 'Poppins', sans-serif;
        font-size: 2rem;
        font-weight: 700;
        color: #212529;
        margin-bottom: 0.5rem;
    }
    .ppdb-description-v3 {
        color: #6c757d;
        line-height: 1.6;
        margin-bottom: 2rem;
    }
    .ppdb-schedule-v3 {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
        margin-bottom: 2rem;
    }
    @media (min-width: 576px) {
        .ppdb-schedule-v3 { grid-template-columns: 1fr 1fr; }
    }
    .schedule-item-v3 {
        display: flex;
        align-items: center;
        gap: 1rem;
        background-color: #f8f9fa;
        padding: 0.75rem;
        border-radius: 0.75rem;
        border: 1px solid #e9ecef;
    }
    .schedule-icon-v3 {
        flex-shrink: 0;
        width: 40px;
        height: 40px;
        border-radius: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #16a34a;
        color: white;
    }
    .schedule-info-v3 h6 {
        font-weight: 600;
        font-size: 0.9rem;
        margin-bottom: 0;
    }
    .schedule-info-v3 span {
        font-size: 0.8rem;
        color: #6c757d;
    }
    .ppdb-buttons-v3 {
        margin-top: auto;
        display: flex;
        gap: 0.75rem;
    }
    .ppdb-buttons-v3 .btn {
        font-weight: 500;
        padding: 0.6rem 1.2rem;
        border-radius: 0.5rem;
    }
    .ppdb-image-v3 {
        position: relative;
        min-height: 400px;
    }
    @media (max-width: 991px) {
        .ppdb-image-v3 {
            order: -1;
            height: 300px;
        }
    }
    .ppdbSwiperV3 {
        position: absolute;
        top: 0; left: 0;
        width: 100%; height: 100%;
    }
    .ppdbSwiperV3 .swiper-slide img {
        width: 100%; height: 100%;
        object-fit: cover;
    }
    .ppdbSwiperV3 .swiper-button-next,
    .ppdbSwiperV3 .swiper-button-prev {
        color: #fff;
        background-color: rgba(0,0,0,0.2);
        width: 40px; height: 40px;
        border-radius: 50%;
    }
    .ppdbSwiperV3 .swiper-button-next::after,
    .ppdbSwiperV3 .swiper-button-prev::after {
        font-size: 1rem;
    }
    /* ===== MOBILE FIX ===== */
@media (max-width: 575px) {
    .ppdb-title-v3 {
        font-size: 1.5rem; /* lebih kecil supaya muat */
    }

    .ppdb-description-v3 {
        font-size: 0.9rem;
        margin-bottom: 1.5rem;
    }

    .ppdb-schedule-v3 {
        grid-template-columns: 1fr; /* satu kolom aja */
        gap: 0.75rem;
    }

    .schedule-item-v3 {
        padding: 0.6rem;
        gap: 0.5rem;
    }

    .schedule-icon-v3 {
        width: 35px;
        height: 35px;
    }

    .ppdb-buttons-v3 {
        flex-direction: column; /* tombol stack di mobile */
        gap: 0.5rem;
    }

    .ppdb-buttons-v3 .btn {
        width: 100%; /* tombol full-width */
        text-align: center;
    }

    .ppdb-image-v3 {
        min-height: 200px; /* biar ga terlalu tinggi */
    }
}

</style>
<!-- JavaScript (TIDAK ADA PERUBAHAN) -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  if (typeof Swiper !== 'undefined') {
    const ppdbSwiperV3 = new Swiper(".ppdbSwiperV3", {
      loop: true,
      effect: 'fade',
      autoplay: { delay: 4000, disableOnInteraction: false },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  }
});
</script>




<!-- Teacher Section -->
<section class="teacher-section-container py-12 lg:py-20 bg-gray-50 relative overflow-hidden">
    <!-- Decorative Background -->
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none z-0">
        <div class="absolute top-[-5%] left-[-5%] w-[300px] h-[300px] bg-green-100/40 rounded-full blur-[100px]"></div>
        <div class="absolute bottom-[-5%] right-[-5%] w-[250px] h-[250px] bg-emerald-100/30 rounded-full blur-[80px]"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 relative z-10">
        <!-- Header Section -->
        <div class="text-center mb-10 lg:mb-12" data-aos="fade-up">
            <div class="flex flex-col items-center justify-center mb-3">
                <span class="text-green-600 font-bold uppercase tracking-widest text-xs mb-2">Pendidik Profesional</span>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-black text-gray-900 leading-tight">
                    Guru <span class="text-green-600">Kami</span>
                </h2>
                <div class="w-12 h-1 bg-green-600 mt-3 rounded-full"></div>
            </div>
            <p class="text-gray-500 text-sm sm:text-base leading-relaxed max-w-xl mx-auto px-2">
                Bertemu dengan para pendidik berdedikasi yang membimbing siswa mencapai prestasi terbaik mereka.
            </p>
        </div>

        <?php if(isset($teachers) && $teachers->count() > 0): ?>
            <div class="flex flex-col lg:flex-row gap-6 lg:gap-10 items-start">

                <!-- Panel Detail Guru (Kiri - Card Lebih Kecil) -->
                <div id="guru-detail" class="w-full lg:w-[35%] lg:sticky top-24 self-start transition-all duration-500 ease-in-out" data-aos="fade-right">
                    <div class="featured-teacher-card-premium overflow-hidden bg-white rounded-2xl shadow-lg shadow-green-900/5 border border-gray-100">
                        <div class="relative">
                            <!-- Image with Gradient Overlay - Adjusted Aspect Ratio -->
                            <div class="featured-image-wrapper aspect-[4/5] overflow-hidden">
                                <img
                                    src="<?php echo e($teachers->first()->photo ? asset('storage/'.$teachers->first()->photo) : 'https://ui-avatars.com/api/?name=' . urlencode($teachers->first()->name) . '&background=random'); ?>"
                                    alt="<?php echo e($teachers->first()->name); ?>"
                                    id="featured-image"
                                    class="w-full h-full object-cover transition-transform duration-700"
                                    loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                            </div>

                            <!-- Info Overlay - Smaller Padding & Text -->
                            <div class="absolute bottom-0 left-0 w-full p-5 lg:p-6">
                                <h3 class="text-xl sm:text-2xl font-black text-white mb-1 line-clamp-2" id="featured-name">
                                    <?php echo e($teachers->first()->name); ?>

                                </h3>
                                <div class="flex items-center gap-2">
                                    <span class="w-4 h-[2px] bg-green-500"></span>
                                    <p class="text-green-400 font-bold text-xs sm:text-sm uppercase tracking-wide" id="featured-position">
                                        <?php echo e($teachers->first()->position); ?>

                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Additional Info - Reduced Padding -->
                        <div class="p-4 lg:p-5 bg-white">
                            <div class="flex items-center justify-between">
                                <div class="flex gap-4"></div>
                                <span class="text-[10px] sm:text-xs text-gray-400 italic">SMP Negeri 12 Gresik</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Grid Guru (Kanan - Card Kecil) -->
                <div class="w-full lg:w-[65%]" data-aos="fade-left">
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4">
                        <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="teacher-card-mini group cursor-pointer"
                                 onclick="showTeacherDetails(this)"
                                 data-nama="<?php echo e($teacher->name); ?>"
                                 data-jabatan="<?php echo e($teacher->position); ?>"
                                 data-foto="<?php echo e($teacher->photo ? asset('storage/'.$teacher->photo) : 'https://ui-avatars.com/api/?name=' . urlencode($teacher->name) . '&background=random'); ?>">

                                <div class="relative aspect-square rounded-xl overflow-hidden border-2 border-gray-200 group-[.active]:border-green-500 transition-all duration-300 shadow-sm hover:shadow-md group-[.active]:shadow-md group-[.active]:shadow-green-500/20">
                                    <img
                                        src="<?php echo e($teacher->photo ? asset('storage/'.$teacher->photo) : 'https://ui-avatars.com/api/?name=' . urlencode($teacher->name) . '&background=random'); ?>"
                                        alt="<?php echo e($teacher->name); ?>"
                                        class="w-full h-full object-cover transition-all duration-500 group-hover:scale-110 group-[.active]:scale-110"
                                        loading="lazy">

                                    <!-- Mini Overlay -->
                                    <div class="absolute inset-0 bg-gradient-to-t from-green-900/70 to-transparent opacity-0 group-hover:opacity-100 group-[.active]:opacity-100 transition-opacity duration-300 flex flex-col justify-end p-2">
                                        <h4 class="text-white font-bold text-[10px] leading-tight truncate"><?php echo e($teacher->name); ?></h4>
                                        <p class="text-green-300 text-[8px] truncate"><?php echo e($teacher->position); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- View All Button - More Compact -->
                    <div class="mt-8 lg:mt-10 text-center lg:text-left">
                        <a href="<?php echo e(route('teachers')); ?>" class="inline-flex items-center justify-center lg:justify-start gap-2 w-full sm:w-auto px-5 py-3 bg-white border-2 border-green-600 text-green-600 font-bold text-sm rounded-xl hover:bg-green-600 hover:text-white transition-all duration-300 shadow-md group">
                            <i class="fas fa-chalkboard-teacher group-hover:scale-110 transition-transform"></i>
                            <span>Lihat Semua Staf & Guru</span>
                        </a>
                    </div>
                </div>

            </div>
        <?php else: ?>
            <div class="py-12 text-center bg-white rounded-2xl border-2 border-dashed border-gray-200">
                <i class="fas fa-user-tie text-4xl text-gray-200 mb-3"></i>
                <p class="text-gray-500 font-medium text-xs sm:text-sm">Data guru belum tersedia saat ini.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php $__env->startPush('styles'); ?>
<style>
    /* PREMIUM TEACHER SECTION STYLES */

    .featured-teacher-card-premium {
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .featured-image-wrapper img {
        transform-origin: center;
    }

    .teacher-card-mini.active .relative {
        transform: scale(0.96);
        box-shadow: 0 0 0 2px rgba(34, 197, 94, 0.2);
    }

    /* Responsive adjustments */
    @media (max-width: 640px) {
        .teacher-section-container {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem;
        }
    }

    @media (min-width: 1024px) {
        .lg\:sticky {
            top: 80px;
        }
    }

    /* Animation for the detail change */
    .detail-changing {
        opacity: 0;
        transform: translateY(15px);
    }

    /* Smooth transitions for teacher cards */
    .teacher-card-mini {
        transition: all 0.3s ease-in-out;
    }
</style>
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    function showTeacherDetails(cardElement) {
        const nama = cardElement.dataset.nama;
        const jabatan = cardElement.dataset.jabatan;
        const foto = cardElement.dataset.foto;

        const detailPanel = document.getElementById('guru-detail');
        const featuredImage = document.getElementById('featured-image');
        const featuredName = document.getElementById('featured-name');
        const featuredPosition = document.getElementById('featured-position');

        // Add transition effect
        detailPanel.classList.add('opacity-50', 'scale-98');

        setTimeout(() => {
            featuredImage.src = foto;
            featuredImage.alt = nama;
            featuredName.textContent = nama;
            featuredPosition.textContent = jabatan;

            detailPanel.classList.remove('opacity-50', 'scale-98');
        }, 300);

        // Update active state in mini cards
        document.querySelectorAll('.teacher-card-mini').forEach(card => {
            card.classList.remove('active');
        });
        cardElement.classList.add('active');
    }
</script>
<?php $__env->stopPush(); ?>


</body>
</html>






<!-- CTA Section -->
<section class="cta">
    <div class="container">
        <div class="cta-content" data-aos="fade-up">
            <div class="cta-text">
                <h2>Bergabunglah dengan Keluarga Besar SMPN 12 Gresik</h2>
                <p>Wujudkan masa depan cerah bersama pendidikan berkualitas dan fasilitas terdepan</p>
            </div>
            <div class="cta-buttons">
                <a href="<?php echo e(route('contact.index')); ?>" class="btn btn-secondary">
                    <i class="fas fa-phone"></i>
                    Hubungi Kami
                </a>
                <a href="<?php echo e(route('about.organization')); ?>" class="btn btn-outline">
                    <i class="fas fa-info-circle"></i>
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script>
    // Counter animation for stats
    function animateCounter(element, target) {
        let current = 0;
        const increment = target / 100;
        const timer = setInterval(() => {
            current += increment;
            if (current >= target) {
                current = target;
                clearInterval(timer);
            }
            element.textContent = Math.floor(current);
        }, 20);
    }

    // Initialize counter animation when stats section is visible
    const observerOptions = {
        threshold: 0.5,
        rootMargin: '0px 0px -100px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counters = entry.target.querySelectorAll('[data-count]');
                counters.forEach(counter => {
                    const target = parseInt(counter.getAttribute('data-count'));
                    animateCounter(counter, target);
                });
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    const statsSection = document.querySelector('.stats');
    if (statsSection) {
        observer.observe(statsSection);
    }

    // Smooth scroll function for hero scroll indicator
    function scrollToStats() {
        document.getElementById('stats-section').scrollIntoView({
            behavior: 'smooth'
        });
    }
</script>
<?php $__env->stopPush(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lenovo\laragon\www\smpn12-gresik-website\resources\views/home.blade.php ENDPATH**/ ?>