@extends("layouts.app")

@section("title", isset($teacher) ? $teacher->name . " - Guru & Staff - SMP Negeri 12 Gresik" : "Guru & Staff - SMP Negeri 12 Gresik")

@section("content")
<style>
/* ============================================
   TEACHER PAGES - PREMIUM DESIGN
   ============================================ */

.teachers-page-wrapper {
  --primary-color: #2a7c4aff;
  --primary-light: #4a9d6a;
  --primary-dark: #1c5837ff;
  --accent-color: #f59e0b;
  --text-dark: #1e293b;
  --text-light: #64748b;
  --border-color: #e2e8f0;
  --white: #ffffff;
}

/* ============================================
   HERO SECTION - PREMIUM
   ============================================ */

.teachers-page-wrapper .hero-section {
  margin-top: 70px;
  background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-light) 50%, var(--primary-dark) 100%);
  color: var(--white);
  padding: 5rem 0 4rem;
  position: relative;
  overflow: hidden;
}

.teachers-page-wrapper .hero-section::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -10%;
  width: 600px;
  height: 600px;
  background: rgba(255, 255, 255, 0.08);
  border-radius: 50%;
  filter: blur(100px);
}

.teachers-page-wrapper .hero-section::after {
  content: '';
  position: absolute;
  bottom: -30%;
  left: -5%;
  width: 500px;
  height: 500px;
  background: rgba(255, 255, 255, 0.05);
  border-radius: 50%;
  filter: blur(80px);
}

.teachers-page-wrapper .hero-content {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 1rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 3rem;
}

@media (max-width: 768px) {
  .teachers-page-wrapper .hero-content {
    flex-direction: column;
    text-align: center;
    gap: 2rem;
  }
}

.teachers-page-wrapper .hero-text h1 {
  font-size: clamp(2.5rem, 5vw, 3.5rem);
  font-weight: 900;
  margin-bottom: 1rem;
  color: var(--white);
  letter-spacing: -1px;
}

.teachers-page-wrapper .hero-text p {
  font-size: clamp(1rem, 2vw, 1.25rem);
  color: rgba(255, 255, 255, 0.95);
  margin-bottom: 0;
  line-height: 1.8;
  font-weight: 500;
}

.teachers-page-wrapper .hero-icon {
  font-size: 6rem;
  opacity: 0.85;
  flex-shrink: 0;
  animation: float 4s ease-in-out infinite;
}

@keyframes float {
  0%, 100% { transform: translateY(0px) rotate(0deg); }
  50% { transform: translateY(-30px) rotate(5deg); }
}

@media (max-width: 768px) {
  .teachers-page-wrapper .hero-icon {
    font-size: 4rem;
    animation: none;
  }
}

/* ============================================
   BREADCRUMB
   ============================================ */

.teachers-page-wrapper .breadcrumb {
  background-color: var(--white);
  padding: 1.25rem 0;
  border-bottom: 1px solid var(--border-color);
  position: sticky;
  top: 70px;
  z-index: 20;
}

.teachers-page-wrapper .breadcrumb-list {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  list-style: none;
  font-size: 0.875rem;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 1rem;
}

.teachers-page-wrapper .breadcrumb-item a {
  color: var(--primary-color);
  font-weight: 600;
  transition: all 0.3s ease;
}

.teachers-page-wrapper .breadcrumb-item a:hover {
  color: var(--primary-dark);
}

.teachers-page-wrapper .breadcrumb-item.active {
  color: var(--text-dark);
  font-weight: 700;
}

/* ============================================
   MAIN CONTENT
   ============================================ */

.teachers-page-wrapper .main-content {
  padding: 4rem 1rem;
  max-width: 1200px;
  margin: 0 auto;
}

/* ============================================
   TEACHER GRID - PREMIUM
   ============================================ */

.teachers-page-wrapper .teacher-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  gap: 2.5rem;
  margin-bottom: 3rem;
}

@media (max-width: 640px) {
  .teachers-page-wrapper .teacher-grid {
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 1.75rem;
  }
}

/* ============================================
   TEACHER CARD - PREMIUM
   ============================================ */

.teachers-page-wrapper .teacher-card {
  background: var(--white);
  border-radius: 1.5rem;
  overflow: hidden;
  box-shadow: 0 4px 20px rgba(42, 124, 74, 0.08);
  transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  border: 1px solid rgba(42, 124, 74, 0.1);
  position: relative;
  display: flex;
  flex-direction: column;
  height: 100%;
}

.teachers-page-wrapper .teacher-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 5px;
  background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  z-index: 1;
}

.teachers-page-wrapper .teacher-card::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(42, 124, 74, 0.03), rgba(42, 124, 74, 0.01));
  opacity: 0;
  transition: opacity 0.4s ease;
  z-index: 0;
  pointer-events: none;
}

.teachers-page-wrapper .teacher-card:hover {
  transform: translateY(-16px);
  box-shadow: 0 20px 50px rgba(42, 124, 74, 0.15);
}

.teachers-page-wrapper .teacher-card:hover::before {
  transform: scaleX(1);
}

.teachers-page-wrapper .teacher-card:hover::after {
  opacity: 1;
}

/* ============================================
   TEACHER IMAGE WRAPPER
   ============================================ */

.teachers-page-wrapper .teacher-image-wrapper {
  width: 100%;
  height: 320px;
  overflow: hidden;
  background: linear-gradient(135deg, #f0f9f5 0%, #e8f5f0 100%);
  position: relative;
}

.teachers-page-wrapper .teacher-image-wrapper::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(42, 124, 74, 0.1), transparent);
  z-index: 1;
  opacity: 0;
  transition: opacity 0.4s ease;
}

.teachers-page-wrapper .teacher-card:hover .teacher-image-wrapper::before {
  opacity: 1;
}

.teachers-page-wrapper .teacher-image-wrapper img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
}

.teachers-page-wrapper .teacher-card:hover .teacher-image-wrapper img {
  transform: scale(1.12) rotate(1deg);
}

.teachers-page-wrapper .teacher-image-placeholder {
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, #f0f9f5, #e8f5f0);
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--primary-color);
  font-size: 3.5rem;
  opacity: 0.4;
}

/* ============================================
   TEACHER CONTENT
   ============================================ */

.teachers-page-wrapper .teacher-content {
  padding: 2rem;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
  position: relative;
  z-index: 2;
}

.teachers-page-wrapper .teacher-name {
  font-size: 1.375rem;
  font-weight: 800;
  color: var(--text-dark);
  margin-bottom: 0.75rem;
  line-height: 1.3;
  letter-spacing: -0.5px;
}

.teachers-page-wrapper .teacher-position {
  color: var(--primary-color);
  font-weight: 700;
  font-size: 0.9rem;
  margin-bottom: 1.25rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  position: relative;
  padding-bottom: 0.75rem;
}

.teachers-page-wrapper .teacher-position::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 40px;
  height: 3px;
  background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
  border-radius: 2px;
}

.teachers-page-wrapper .teacher-bio {
  color: var(--text-light);
  font-size: 0.95rem;
  line-height: 1.7;
  margin-bottom: 1.75rem;
  flex-grow: 1;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.teachers-page-wrapper .teacher-actions {
  display: flex;
  gap: 0.75rem;
  margin-top: auto;
}

/* ============================================
   BUTTONS - PREMIUM
   ============================================ */

.teachers-page-wrapper .btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
  padding: 0.85rem 1.5rem;
  border-radius: 0.75rem;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
  cursor: pointer;
  border: none;
  font-size: 0.9rem;
  white-space: nowrap;
  position: relative;
  overflow: hidden;
}

.teachers-page-wrapper .btn::before {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
  transform: translateX(-100%);
  transition: transform 0.6s ease;
}

.teachers-page-wrapper .btn:hover::before {
  transform: translateX(100%);
}

.teachers-page-wrapper .btn-primary {
  background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
  color: var(--white);
  box-shadow: 0 8px 20px rgba(42, 124, 74, 0.25);
  flex: 1;
}

.teachers-page-wrapper .btn-primary:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 30px rgba(42, 124, 74, 0.35);
  color: var(--white);
}

.teachers-page-wrapper .btn-outline {
  background: transparent;
  color: var(--primary-color);
  border: 2px solid var(--primary-color);
  padding: 0.7rem 1.25rem;
  transition: all 0.3s ease;
}

.teachers-page-wrapper .btn-outline:hover {
  background: var(--primary-color);
  color: var(--white);
  transform: translateY(-3px);
  box-shadow: 0 8px 20px rgba(42, 124, 74, 0.25);
}

/* ============================================
   TEACHER DETAIL - PREMIUM
   ============================================ */

.teachers-page-wrapper .teacher-detail {
  background: var(--white);
  border-radius: 1.5rem;
  box-shadow: 0 10px 40px rgba(42, 124, 74, 0.1);
  overflow: hidden;
  margin-bottom: 3rem;
  border: 1px solid rgba(42, 124, 74, 0.1);
  position: relative;
}

.teachers-page-wrapper .teacher-detail::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 6px;
  background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
  z-index: 1;
}

.teachers-page-wrapper .teacher-detail-content {
  padding: 3.5rem;
  position: relative;
  z-index: 2;
}

@media (max-width: 768px) {
  .teachers-page-wrapper .teacher-detail-content {
    padding: 2.5rem 1.75rem;
  }
}

.teachers-page-wrapper .teacher-detail-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: 3rem;
  align-items: start;
}

@media (min-width: 768px) {
  .teachers-page-wrapper .teacher-detail-grid {
    grid-template-columns: 300px 1fr;
    gap: 4rem;
  }
}

.teachers-page-wrapper .teacher-detail-sidebar {
  text-align: center;
}

.teachers-page-wrapper .teacher-detail-avatar {
  width: 280px;
  height: 280px;
  border-radius: 1.5rem;
  margin: 0 auto 2rem;
  position: relative;
  overflow: hidden;
  border: 6px solid var(--border-color);
  box-shadow: 0 20px 50px rgba(42, 124, 74, 0.15);
  background: linear-gradient(135deg, #f0f9f5, #e8f5f0);
  transition: all 0.4s ease;
}

.teachers-page-wrapper .teacher-detail-avatar::after {
  content: '';
  position: absolute;
  inset: 0;
  background: linear-gradient(135deg, rgba(42, 124, 74, 0.1), transparent);
  z-index: 1;
}

@media (max-width: 768px) {
  .teachers-page-wrapper .teacher-detail-avatar {
    width: 220px;
    height: 220px;
  }
}

.teachers-page-wrapper .teacher-detail-avatar img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}

.teachers-page-wrapper .teacher-detail-avatar:hover img {
  transform: scale(1.05);
}

.teachers-page-wrapper .teacher-detail-avatar-placeholder {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--primary-color);
  font-size: 4rem;
  opacity: 0.4;
}

.teachers-page-wrapper .contact-info {
  background: linear-gradient(135deg, #f0f9f5 0%, #e8f5f0 100%);
  border-radius: 1rem;
  padding: 2rem 1.75rem;
  margin-top: 2rem;
  border: 1px solid rgba(42, 124, 74, 0.1);
  backdrop-filter: blur(10px);
}

.teachers-page-wrapper .contact-item {
  display: flex;
  align-items: center;
  gap: 1.25rem;
  margin-bottom: 1.25rem;
  font-size: 0.95rem;
  transition: all 0.3s ease;
}

.teachers-page-wrapper .contact-item:hover {
  transform: translateX(8px);
}

.teachers-page-wrapper .contact-item:last-child {
  margin-bottom: 0;
}

.teachers-page-wrapper .contact-item i {
  width: 28px;
  text-align: center;
  color: var(--primary-color);
  font-size: 1.4rem;
  transition: all 0.3s ease;
}

.teachers-page-wrapper .contact-item:hover i {
  transform: scale(1.2);
}

.teachers-page-wrapper .contact-item a {
  color: var(--text-dark);
  transition: color 0.3s ease;
  font-weight: 600;
}

.teachers-page-wrapper .contact-item a:hover {
  color: var(--primary-color);
}

.teachers-page-wrapper .teacher-detail-main h1 {
  color: var(--text-dark);
  margin-bottom: 0.75rem;
  font-size: 2.5rem;
  font-weight: 900;
  letter-spacing: -1px;
}

@media (max-width: 768px) {
  .teachers-page-wrapper .teacher-detail-main h1 {
    font-size: 1.875rem;
  }
}

.teachers-page-wrapper .teacher-detail-position {
  color: var(--primary-color);
  font-size: 1.2rem;
  font-weight: 800;
  margin-bottom: 2.5rem;
  text-transform: uppercase;
  letter-spacing: 1px;
  position: relative;
  padding-bottom: 1rem;
}

.teachers-page-wrapper .teacher-detail-position::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 60px;
  height: 4px;
  background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
  border-radius: 2px;
}

.teachers-page-wrapper .bio-section {
  margin-bottom: 2.5rem;
}

.teachers-page-wrapper .bio-section h3 {
  color: var(--text-dark);
  margin-bottom: 1.25rem;
  font-size: 1.3rem;
  font-weight: 800;
  position: relative;
  padding-bottom: 1rem;
}

.teachers-page-wrapper .bio-section h3::after {
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 50px;
  height: 4px;
  background: linear-gradient(90deg, var(--primary-color), var(--primary-light));
  border-radius: 2px;
}

.teachers-page-wrapper .bio-content {
  color: var(--text-light);
  line-height: 1.9;
  font-size: 1rem;
}

.teachers-page-wrapper .additional-info {
  background: linear-gradient(135deg, #f0f9f5 0%, #e8f5f0 100%);
  border-radius: 1rem;
  padding: 2.5rem;
  margin-top: 2.5rem;
  border: 1px solid rgba(42, 124, 74, 0.1);
  backdrop-filter: blur(10px);
}

@media (max-width: 768px) {
  .teachers-page-wrapper .additional-info {
    padding: 2rem 1.5rem;
  }
}

.teachers-page-wrapper .additional-info h3 {
  color: var(--text-dark);
  margin-bottom: 2rem;
  font-size: 1.3rem;
  font-weight: 800;
}

.teachers-page-wrapper .info-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 2rem;
}

.teachers-page-wrapper .info-item {
  background: var(--white);
  padding: 2rem;
  border-radius: 1rem;
  box-shadow: 0 4px 15px rgba(42, 124, 74, 0.08);
  border-left: 5px solid var(--primary-color);
  transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
  position: relative;
  overflow: hidden;
}

.teachers-page-wrapper .info-item::before {
  content: '';
  position: absolute;
  top: 0;
  right: -50px;
  width: 100px;
  height: 100px;
  background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
  opacity: 0.05;
  border-radius: 50%;
  transition: all 0.4s ease;
}

.teachers-page-wrapper .info-item:hover {
  box-shadow: 0 12px 30px rgba(42, 124, 74, 0.15);
  transform: translateY(-8px);
}

.teachers-page-wrapper .info-item:hover::before {
  right: -30px;
  top: -20px;
}

.teachers-page-wrapper .info-item i {
  color: var(--primary-color);
  margin-right: 0.75rem;
  font-size: 1.5rem;
  transition: all 0.3s ease;
}

.teachers-page-wrapper .info-item:hover i {
  transform: scale(1.2) rotate(10deg);
}

.teachers-page-wrapper .info-item strong {
  color: var(--text-dark);
  font-weight: 800;
  display: block;
  margin-bottom: 0.75rem;
}

.teachers-page-wrapper .info-item p {
  color: var(--text-light);
  font-size: 0.95rem;
  margin: 0;
  line-height: 1.6;
}

/* ============================================
   EMPTY STATE
   ============================================ */

.teachers-page-wrapper .empty-state {
  text-align: center;
  padding: 5rem 2rem;
  background: linear-gradient(135deg, #f0f9f5 0%, #e8f5f0 100%);
  border-radius: 1.5rem;
  border: 2px dashed rgba(42, 124, 74, 0.2);
  position: relative;
  overflow: hidden;
}

.teachers-page-wrapper .empty-state::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at 50% 50%, rgba(42, 124, 74, 0.05), transparent);
}

.teachers-page-wrapper .empty-state i {
  font-size: 5rem;
  color: var(--primary-color);
  opacity: 0.3;
  margin-bottom: 1.5rem;
  display: block;
  animation: float 4s ease-in-out infinite;
}

.teachers-page-wrapper .empty-state p {
  color: var(--text-light);
  font-size: 1.1rem;
  margin: 0;
  position: relative;
  z-index: 1;
}

/* ============================================
   BACK BUTTON
   ============================================ */

.teachers-page-wrapper .back-button {
  margin-top: 2.5rem;
}

.teachers-page-wrapper .back-button a {
  display: inline-flex;
  align-items: center;
  gap: 0.75rem;
  padding: 1rem 2rem;
  background: transparent;
  color: var(--primary-color);
  border: 2.5px solid var(--primary-color);
  border-radius: 0.75rem;
  font-weight: 700;
  text-decoration: none;
  transition: all 0.3s cubic-bezier(0.34, 1.56, 0.64, 1);
  position: relative;
  overflow: hidden;
}

.teachers-page-wrapper .back-button a::before {
  content: '';
  position: absolute;
  inset: 0;
  background: var(--primary-color);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
  z-index: -1;
}

.teachers-page-wrapper .back-button a:hover {
  color: var(--white);
  transform: translateY(-3px);
  box-shadow: 0 12px 30px rgba(42, 124, 74, 0.25);
}

.teachers-page-wrapper .back-button a:hover::before {
  transform: scaleX(1);
}

.teachers-page-wrapper .back-button i {
  transition: transform 0.3s ease;
}

.teachers-page-wrapper .back-button a:hover i {
  transform: translateX(-4px);
}
</style>

<div class="teachers-page-wrapper">
  <!-- Hero Section -->
  <section class="hero-section">
    <div class="hero-content">
      <div class="hero-text">
        <h1>Guru & Staff Kami</h1>
        <p>Bertemu dengan tim pendidik profesional yang berdedikasi untuk memberikan pendidikan berkualitas tinggi dan membimbing setiap siswa mencapai potensi terbaik mereka.</p>
      </div>
      <div class="hero-icon">
        <i class="fas fa-chalkboard-user"></i>
      </div>
    </div>
  </section>

  <!-- Breadcrumb -->
  <nav class="breadcrumb">
    <ul class="breadcrumb-list">
      <li class="breadcrumb-item"><a href="{{ route('home') }}">Beranda</a></li>
      <li class="breadcrumb-item active">Guru & Staff</li>
    </ul>
  </nav>

  <!-- Main Content -->
  <main class="main-content">
    @if(isset($teacher))
      <!-- Teacher Detail Page -->
      <div class="teacher-detail">
        <div class="teacher-detail-content">
          <div class="teacher-detail-grid">
            <!-- Sidebar -->
            <div class="teacher-detail-sidebar">
              <div class="teacher-detail-avatar">
                @if($teacher->photo)
                  <img src="{{ asset('storage/'.$teacher->photo) }}" alt="{{ $teacher->name }}" loading="lazy">
                @else
                  <div class="teacher-detail-avatar-placeholder">
                    <i class="fas fa-user"></i>
                  </div>
                @endif
              </div>
              <div class="contact-info">
                @if($teacher->email)
                  <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:{{ $teacher->email }}">{{ $teacher->email }}</a>
                  </div>
                @endif
                @if($teacher->phone)
                  <div class="contact-item">
                    <i class="fas fa-phone"></i>
                    <a href="tel:{{ $teacher->phone }}">{{ $teacher->phone }}</a>
                  </div>
                @endif
                <div class="contact-item">
                  <i class="fas fa-building"></i>
                  <span>SMP Negeri 12 Gresik</span>
                </div>
              </div>
            </div>

            <!-- Main Content -->
            <div class="teacher-detail-main">
              <h1>{{ $teacher->name }}</h1>
              <p class="teacher-detail-position">{{ $teacher->position }}</p>

              @if($teacher->bio)
                <div class="bio-section">
                  <h3>Tentang</h3>
                  <div class="bio-content">
                    {{ $teacher->bio }}
                  </div>
                </div>
              @endif

              <div class="additional-info">
                <h3>Informasi Tambahan</h3>
                <div class="info-grid">
                  <div class="info-item">
                    <i class="fas fa-graduation-cap"></i>
                    <strong>Pendidikan</strong>
                    <p>{{ $teacher->education ?? 'Tidak tersedia' }}</p>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-briefcase"></i>
                    <strong>Pengalaman</strong>
                    <p>{{ $teacher->experience ?? 'Tidak tersedia' }}</p>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-book"></i>
                    <strong>Keahlian</strong>
                    <p>{{ $teacher->expertise ?? 'Tidak tersedia' }}</p>
                  </div>
                </div>
              </div>

              <div class="back-button">
                <a href="{{ route('teachers') }}">
                  <i class="fas fa-arrow-left"></i>
                  Kembali ke Daftar
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    @else
      <!-- Teacher List Page -->
      @if(isset($teachers) && $teachers->count() > 0)
        <div class="teacher-grid">
          @foreach($teachers as $teacher)
            <div class="teacher-card">
              <div class="teacher-image-wrapper">
                @if($teacher->photo)
                  <img src="{{ asset('storage/'.$teacher->photo) }}" alt="{{ $teacher->name }}" loading="lazy">
                @else
                  <div class="teacher-image-placeholder">
                    <i class="fas fa-user"></i>
                  </div>
                @endif
              </div>

              <div class="teacher-content">
                <h3 class="teacher-name">{{ $teacher->name }}</h3>
                <p class="teacher-position">{{ $teacher->position }}</p>
                <p class="teacher-bio">{{ $teacher->bio ?? 'Guru profesional yang berdedikasi dalam memberikan pendidikan berkualitas.' }}</p>

                <div class="teacher-actions">
                 <a href="{{ route('teachers.show', $teacher) }}" class="btn btn-sm btn-outline">
                        Lihat Profil
                    </a>
                  @if($teacher->email)
                    <a href="mailto:{{ $teacher->email }}" class="btn btn-outline" title="Hubungi via Email">
                      <i class="fas fa-envelope"></i>
                    </a>
                  @endif
                </div>
              </div>
            </div>
          @endforeach
        </div>
      @else
        <div class="empty-state">
          <i class="fas fa-user-tie"></i>
          <p>Data guru belum tersedia saat ini.</p>
        </div>
      @endif
    @endif
  </main>
</div>

@endsection
