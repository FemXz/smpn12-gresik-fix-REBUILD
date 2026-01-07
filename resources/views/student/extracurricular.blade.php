@extends("layouts.app")

@section("title", "Ekstrakurikuler")

@section("content")
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
/* ========== MODERN GREEN DESIGN SYSTEM ========== */
:root {
    --primary-green: #2c9653;
    --dark-green: #16a34a;
    --soft-green: #f0fdf4;
    --accent-green: #15803d;
    --text-main: #1a2e21;
    --text-muted: #64748b;
    --white: #ffffff;
    --shadow-soft: 0 10px 25px -5px rgba(44, 150, 83, 0.1), 0 8px 10px -6px rgba(44, 150, 83, 0.1);
}

.ekskul-wrapper {
    font-family: 'Plus Jakarta Sans', sans-serif;
    background-color: #f8fafc; /* Background konten saja */
    color: var(--text-main);
    overflow-x: hidden;
}

.container-ekskul {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 24px;
}

/* ========== HERO SECTION ========== */
.hero-ekskul {
    background: linear-gradient(135deg, #166534 0%, #2c9653 100%);
    padding: 120px 0 160px;
    text-align: center;
    color: white;
    position: relative;
    clip-path: ellipse(150% 100% at 50% 0%);
}

.hero-ekskul h1 {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 800;
    margin-bottom: 20px;
    letter-spacing: -1px;
}

.hero-ekskul p {
    font-size: 1.1rem;
    opacity: 0.9;
    max-width: 700px;
    margin: 0 auto 40px;
    line-height: 1.7;
}

/* ========== STATS OVERLAY ========== */
.stats-overlay {
    margin-top: -80px;
    position: relative;
    z-index: 10;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 24px;
    margin-bottom: 80px;
}

.stat-item {
    background: white;
    padding: 32px;
    border-radius: 24px;
    box-shadow: var(--shadow-soft);
    text-align: center;
    border: 1px solid rgba(44, 150, 83, 0.05);
    transition: transform 0.3s ease;
}

.stat-item:hover {
    transform: translateY(-5px);
}

.stat-item i {
    font-size: 2rem;
    color: var(--primary-green);
    margin-bottom: 16px;
    display: block;
}

.stat-val {
    font-size: 2.5rem;
    font-weight: 800;
    color: var(--primary-green);
    display: block;
}

.stat-lbl {
    font-weight: 600;
    color: var(--text-muted);
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* ========== SEARCH & FILTER ========== */
.filter-section-ekskul {
    background: white;
    padding: 32px;
    border-radius: 24px;
    box-shadow: var(--shadow-soft);
    margin-bottom: 60px;
}

.search-bar-ekskul {
    position: relative;
    margin-bottom: 24px;
}

.search-bar-ekskul input {
    width: 100%;
    padding: 18px 24px 18px 56px;
    border: 2px solid #e2e8f0;
    border-radius: 16px;
    font-size: 1rem;
    transition: all 0.3s ease;
    outline: none;
}

.search-bar-ekskul input:focus {
    border-color: var(--primary-green);
    box-shadow: 0 0 0 4px rgba(44, 150, 83, 0.1);
}

.search-bar-ekskul i {
    position: absolute;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    color: var(--text-muted);
    font-size: 1.2rem;
}

.filter-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    justify-content: center;
}

.pill {
    padding: 10px 24px;
    border-radius: 12px;
    background: #f1f5f9;
    color: var(--text-muted);
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    border: none;
}

.pill.active, .pill:hover {
    background: var(--primary-green);
    color: white;
}

/* ========== CARDS GRID ========== */
.ekskul-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 32px;
    margin-bottom: 80px;
}

.ekskul-card {
    background: white;
    border-radius: 24px;
    overflow: hidden;
    box-shadow: var(--shadow-soft);
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    border: 1px solid #f1f5f9;
    display: flex;
    flex-direction: column;
}

.ekskul-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px -10px rgba(44, 150, 83, 0.15);
}

.card-img-box {
    height: 220px;
    position: relative;
    background: var(--soft-green);
    display: flex;
    align-items: center;
    justify-content: center;
}

.card-img-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.card-img-box i {
    font-size: 4rem;
    color: var(--primary-green);
    opacity: 0.5;
}

.category-tag {
    position: absolute;
    top: 16px;
    left: 16px;
    background: rgba(255, 255, 255, 0.9);
    padding: 6px 16px;
    border-radius: 10px;
    font-size: 0.75rem;
    font-weight: 700;
    color: var(--primary-green);
    text-transform: uppercase;
    backdrop-filter: blur(4px);
}

.card-body-ekskul {
    padding: 28px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.card-body-ekskul h3 {
    font-size: 1.4rem;
    font-weight: 700;
    margin-bottom: 12px;
    color: var(--text-main);
}

.pembina-info {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 16px;
    padding: 10px;
    background: var(--soft-green);
    border-radius: 12px;
}

.pembina-info i {
    color: var(--primary-green);
}

.pembina-info span {
    font-size: 0.85rem;
    font-weight: 600;
}

.ekskul-desc {
    font-size: 0.95rem;
    color: var(--text-muted);
    line-height: 1.6;
    margin-bottom: 24px;
}

.btn-ekskul-detail {
    margin-top: auto;
    width: 100%;
    padding: 14px;
    background: var(--primary-green);
    color: white;
    border: none;
    border-radius: 14px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
}

.btn-ekskul-detail:hover {
    background: var(--dark-green);
}

/* ========== JOIN SECTION ========== */
.join-section-ekskul {
    background: white;
    border-radius: 32px;
    padding: 60px 40px;
    text-align: center;
    margin-bottom: 100px;
    box-shadow: var(--shadow-soft);
    border: 2px dashed var(--soft-green);
}

.join-section-ekskul h2 {
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: 16px;
}

.join-section-ekskul p {
    color: var(--text-muted);
    max-width: 600px;
    margin: 0 auto 32px;
}

.contact-card-ekskul {
    background: var(--soft-green);
    padding: 24px;
    border-radius: 20px;
    display: inline-flex;
    align-items: center;
    gap: 16px;
    color: var(--primary-green);
    font-weight: 700;
}

/* ========== MODAL FIX ========== */
#modalEkskul {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.6);
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    backdrop-filter: blur(8px);
}

.modal-content-ekskul {
    background: white;
    width: 100%;
    max-width: 600px;
    border-radius: 28px;
    overflow: hidden;
    position: relative;
    animation: modalSlide 0.4s ease-out;
}

@keyframes modalSlide {
    from { transform: translateY(30px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}

.modal-header-ekskul {
    background: var(--primary-green);
    padding: 40px 30px;
    color: white;
    position: relative;
}

.close-modal-ekskul {
    position: absolute;
    top: 20px;
    right: 20px;
    background: rgba(255,255,255,0.2);
    border: none;
    color: white;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    cursor: pointer;
}

.modal-body-ekskul {
    padding: 30px;
}

.modal-info-row {
    display: flex;
    gap: 16px;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #f1f5f9;
}

.modal-info-row:last-child { border: none; }

.modal-info-row i {
    font-size: 1.2rem;
    color: var(--primary-green);
    margin-top: 4px;
}

.modal-info-label {
    font-size: 0.8rem;
    color: var(--text-muted);
    text-transform: uppercase;
    font-weight: 700;
    margin-bottom: 4px;
}

.modal-info-val {
    font-weight: 600;
    color: var(--text-main);
}

.btn-wa-ekskul {
    width: 100%;
    padding: 16px;
    background: #25d366;
    color: white;
    border: none;
    border-radius: 16px;
    font-weight: 700;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    margin-top: 10px;
}

.hidden { display: none !important; }

@media (max-width: 768px) {
    .ekskul-grid { grid-template-columns: 1fr; }
    .hero-ekskul { padding: 80px 0 120px; }
}
</style>

<div class="ekskul-wrapper">
    <!-- Hero -->
    <div class="hero-ekskul">
        <div class="container-ekskul">
            <h1>Ekstrakurikuler</h1>
            <p>Wadah kreativitas dan pengembangan diri siswa SMP Negeri 12 Gresik. Temukan minatmu dan raih prestasimu bersama kami!</p>
        </div>
    </div>

    <div class="container-ekskul">
        <!-- Stats -->
        <div class="stats-overlay">
            <div class="stat-item">
                <i class="fas fa-users"></i>
                <span class="stat-val">{{ count($extracurriculars) }}+</span>
                <span class="stat-lbl">Ekskul Aktif</span>
            </div>
            <div class="stat-item">
                <i class="fas fa-award"></i>
                <span class="stat-val">50+</span>
                <span class="stat-lbl">Prestasi Tahunan</span>
            </div>
            <div class="stat-item">
                <i class="fas fa-user-graduate"></i>
                <span class="stat-val">100%</span>
                <span class="stat-lbl">Partisipasi Siswa</span>
            </div>
        </div>

        <!-- Filter -->
        <div class="filter-section-ekskul">
            <div class="search-bar-ekskul">
                <i class="fas fa-search"></i>
                <input type="text" id="searchEkskul" placeholder="Cari nama ekstrakurikuler...">
            </div>
            <div class="filter-pills">
                <button class="pill active" data-filter="all">Semua</button>
                <button class="pill" data-filter="olahraga">Olahraga</button>
                <button class="pill" data-filter="seni">Seni & Budaya</button>
                <button class="pill" data-filter="akademik">Akademik</button>
            </div>
        </div>

        <!-- Grid -->
        <div class="ekskul-grid" id="ekskulGrid">
            @forelse ($extracurriculars as $item)
                <div class="ekskul-card" 
                     data-cat="{{ strtolower($item->category ?? 'akademik') }}" 
                     data-name="{{ strtolower($item->name) }}">
                    
                    <div class="card-img-box">
                        @if($item->image)
                            <img src="{{ asset($item->image) }}" alt="{{ $item->name }}">
                        @else
                            <i class="fas fa-users"></i>
                        @endif
                        <div class="category-tag">{{ $item->category ?? 'Umum' }}</div>
                    </div>
                    
                    <div class="card-body-ekskul">
                        <h3>{{ $item->name }}</h3>
                        
                        <div class="pembina-info">
                            <i class="fas fa-user-tie"></i>
                            <span>{{ $item->teacher_in_charge ?? 'Pembina belum ditentukan' }}</span>
                        </div>
                        
                        <p class="ekskul-desc">
                            {{ \Illuminate\Support\Str::limit(strip_tags($item->description), 100) }}
                        </p>
                        
                        <button class="btn-ekskul-detail open-modal"
                            data-name="{{ $item->name }}"
                            data-cat="{{ $item->category ?? 'Umum' }}"
                            data-desc="{{ strip_tags($item->description) }}"
                            data-teacher="{{ $item->teacher_in_charge ?? '-' }}"
                            data-phone="{{ $item->teacher_phone ?? '' }}"
                            data-schedule="{{ $item->schedule ?? 'Akan diinfokan' }}">
                            <i class="fas fa-plus-circle"></i>
                            Lihat Detail
                        </button>
                    </div>
                </div>
            @empty
                <div style="grid-column: 1/-1; text-align: center; padding: 60px;">
                    <i class="fas fa-folder-open" style="font-size: 3rem; color: #cbd5e1; margin-bottom: 20px; display: block;"></i>
                    <p style="color: #64748b;">Belum ada data ekstrakurikuler.</p>
                </div>
            @endforelse
        </div>

        <!-- Join -->
        <div class="join-section-ekskul" id="kontak">
            <h2>Siap Bergabung?</h2>
            <p>Silakan hubungi pembina masing-masing ekstrakurikuler atau datang langsung ke ruang kesiswaan untuk pendaftaran.</p>
            <div class="contact-card-ekskul">
                <i class="fas fa-info-circle"></i>
                <span>Informasi lebih lanjut hubungi Admin Sekolah</span>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div id="modalEkskul">
    <div class="modal-content-ekskul">
        <div class="modal-header-ekskul">
            <button class="close-modal-ekskul"><i class="fas fa-times"></i></button>
            <h2 id="m-name" style="font-size: 1.8rem; font-weight: 800;"></h2>
            <p id="m-cat" style="opacity: 0.9; font-weight: 600;"></p>
        </div>
        <div class="modal-body-ekskul">
            <p id="m-desc" style="color: #64748b; line-height: 1.7; margin-bottom: 30px;"></p>
            
            <div class="modal-info-row">
                <i class="fas fa-user-tie"></i>
                <div>
                    <div class="modal-info-label">Pembina</div>
                    <div id="m-teacher" class="modal-info-val"></div>
                </div>
            </div>
            
            <div class="modal-info-row">
                <i class="fas fa-calendar-alt"></i>
                <div>
                    <div class="modal-info-label">Jadwal</div>
                    <div id="m-schedule" class="modal-info-val"></div>
                </div>
            </div>

            <button id="btnWA" class="btn-wa-ekskul">
                <i class="fab fa-whatsapp"></i>
                Hubungi Pembina
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchEkskul');
    const pills = document.querySelectorAll('.pill');
    const cards = document.querySelectorAll('.ekskul-card');
    const modal = document.getElementById('modalEkskul');
    let currentPhone = '';

    // Filter & Search
    function filterEkskul() {
        const term = searchInput.value.toLowerCase();
        const activeCat = document.querySelector('.pill.active').dataset.filter;

        cards.forEach(card => {
            const name = card.dataset.name;
            const cat = card.dataset.cat;
            const matchSearch = name.includes(term);
            const matchCat = activeCat === 'all' || cat === activeCat;
            
            card.style.display = (matchSearch && matchCat) ? 'flex' : 'none';
        });
    }

    searchInput.addEventListener('input', filterEkskul);
    pills.forEach(pill => {
        pill.addEventListener('click', () => {
            pills.forEach(p => p.classList.remove('active'));
            pill.classList.add('active');
            filterEkskul();
        });
    });

    // Modal
    document.querySelectorAll('.open-modal').forEach(btn => {
        btn.addEventListener('click', function() {
            document.getElementById('m-name').textContent = this.dataset.name;
            document.getElementById('m-cat').textContent = this.dataset.cat;
            document.getElementById('m-desc').textContent = this.dataset.desc;
            document.getElementById('m-teacher').textContent = this.dataset.teacher;
            document.getElementById('m-schedule').textContent = this.dataset.schedule;
            currentPhone = this.dataset.phone;

            const btnWA = document.getElementById('btnWA');
            if (currentPhone) {
                btnWA.classList.remove('hidden');
            } else {
                btnWA.classList.add('hidden');
            }

            modal.style.display = 'flex';
            document.body.style.overflow = 'hidden';
        });
    });

    document.querySelector('.close-modal-ekskul').addEventListener('click', () => {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
    });

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }
    });

    document.getElementById('btnWA').addEventListener('click', () => {
        if (currentPhone) window.open(`https://wa.me/${currentPhone}`, '_blank');
    });
});
</script>
@endsection
