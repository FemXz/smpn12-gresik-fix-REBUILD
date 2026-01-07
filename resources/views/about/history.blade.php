@extends("layouts.app")

@section("title", "Sejarah Sekolah - SMP Negeri 12 Gresik")

@section("content")
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Sekolah - SMP Negeri 12 Gresik</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #059263ff 0%, #2c7922ff 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Hero Section */
        .hero-section {
            background: linear-gradient(135deg, rgba(5, 146, 99, 0.9) 0%, rgba(44, 121, 34, 0.9) 100%),
                        url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx="50%" cy="50%"><stop offset="0%" stop-color="%23fff" stop-opacity="0.1"/><stop offset="100%" stop-color="%23fff" stop-opacity="0"/></radialGradient></defs><rect width="100%" height="100%" fill="url(%23a)"/></svg>');
            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 2px,
                rgba(255,255,255,0.03) 2px,
                rgba(255,255,255,0.03) 4px
            );
            animation: float 20s linear infinite;
        }

        @keyframes float {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: slideInUp 1s ease-out;
        }

        .hero-subtitle {
            font-size: 1.3rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 30px;
            font-weight: 300;
            animation: slideInUp 1s ease-out 0.2s both;
        }

        .hero-icon {
            font-size: 5rem;
            color: rgba(255,255,255,0.2);
            margin-bottom: 20px;
            animation: pulse 2s infinite;
        }

        @keyframes slideInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        /* Main Content */
        .main-content {
            padding: 60px 0;
            background: white;
            position: relative;
        }

        .content-card {
            background: white;
            border-radius: 25px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.1);
            padding: 40px;
            margin: 40px 0;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, #059263ff, #2c7922ff, #43e97b, #38f9d7);
            background-size: 300% 100%;
            animation: gradientShift 3s ease infinite;
        }

        @keyframes gradientShift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }

        .content-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 35px 70px rgba(0,0,0,0.15);
        }

        .section-title {
            font-size: 2.2rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 25px;
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 4px;
            background: linear-gradient(90deg, #059263ff, #2c7922ff);
            border-radius: 2px;
        }

        .content-text {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #4a5568;
            margin-bottom: 20px;
            text-align: justify;
        }

        .quote-section {
            background: #f7fafc;
            border-left: 5px solid #059263ff;
            padding: 25px;
            margin: 30px 0;
            border-radius: 15px;
            position: relative;
        }

        .quote-section::before {
            content: '"';
            font-size: 3.5rem;
            color: #059263ff;
            position: absolute;
            top: -5px;
            left: 15px;
            font-family: serif;
            opacity: 0.8;
        }

        .quote-text {
            font-style: italic;
            font-size: 1.15rem;
            color: #2d3748;
            margin-left: 35px;
        }

        /* Timeline Design */
        .timeline-section {
            position: relative;
            padding: 20px 0;
        }

        .timeline-item {
            display: flex;
            align-items: center;
            margin: 40px 0;
            position: relative;
        }

        .timeline-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #059263ff, #2c7922ff);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            margin-right: 30px;
            box-shadow: 0 10px 25px rgba(5, 146, 99, 0.3);
            flex-shrink: 0;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }

        .timeline-content {
            flex: 1;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            border-left: 4px solid #059263ff;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title { font-size: 2.5rem; }
            .hero-subtitle { font-size: 1.1rem; padding: 0 10px; }
            .hero-icon { font-size: 4rem; }
            .main-content { padding: 40px 0; }
            .content-card { padding: 25px; margin: 20px 0; }
            .section-title { font-size: 1.8rem; }
            .content-text { font-size: 1rem; line-height: 1.7; }
            .timeline-item { flex-direction: column; text-align: center; align-items: center; }
            .timeline-icon { margin-right: 0; margin-bottom: 20px; }
            .timeline-content { border-left: none; border-top: 4px solid #059263ff; padding: 20px; text-align: center; }
            .section-title::after { left: 50%; transform: translateX(-50%); }
            .quote-text { font-size: 1rem; margin-left: 0; text-align: center; }
            .quote-section::before { left: 50%; transform: translateX(-50%); top: -15px; }
        }

        /* Scroll Animation */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <h1 class="hero-title">Sejarah Sekolah</h1>
                <p class="hero-subtitle">Perjalanan panjang UPT SMP Negeri 12 Gresik dari masa ke masa</p>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="main-content">
        <div class="container">
            <article class="content-card">
                <div class="timeline-section">
                    <div class="timeline-item fade-in">
                        <div class="timeline-icon">
                            <i class="fas fa-flag"></i>
                        </div>
                        <div class="timeline-content">
                            <h2 class="section-title">Awal Mula Berdiri</h2>
                            <p class="content-text">
                                UPT SMP Negeri 12 Gresik pertama kali didirikan pada tanggal **7 November 1983**. Sekolah ini berlokasi di Jl. Raya Wringinanom 13, Gresik, Jawa Timur. Pendirian sekolah ini merupakan bagian dari upaya pemerintah untuk memperluas akses pendidikan menengah pertama di wilayah Wringinanom dan sekitarnya, guna mencetak generasi muda yang berkualitas di Kabupaten Gresik.
                            </p>
                        </div>
                    </div>

                    <div class="timeline-item fade-in">
                        <div class="timeline-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="timeline-content">
                            <h2 class="section-title">Menjadi Sekolah Adiwiyata</h2>
                            <p class="content-text">
                                Dalam perjalanannya, UPT SMP Negeri 12 Gresik dikenal sebagai sekolah yang sangat peduli terhadap lingkungan. Sekolah ini telah berhasil meraih predikat sebagai **Sekolah Adiwiyata**, yang menunjukkan komitmen seluruh warga sekolah dalam melestarikan lingkungan, mencegah pencemaran, dan mencegah kerusakan lingkungan melalui berbagai inovasi media ajar dan kegiatan pembiasaan.
                            </p>
                        </div>
                    </div>

                    <div class="timeline-item fade-in">
                        <div class="timeline-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="timeline-content">
                            <h2 class="section-title">Era Digital & Inovasi</h2>
                            <p class="content-text">
                                Memasuki era modern, sekolah terus berinovasi dalam bidang literasi digital. Salah satu inovasi unggulannya adalah **Media Ajar GESIT P-5 SPENDALAS**, yang dirancang untuk meningkatkan efektivitas pembelajaran paradigma baru yang kreatif, inovatif, dan kolaboratif bagi seluruh peserta didik di era global.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="quote-section fade-in">
                    <p class="quote-text">
                        "Terwujudnya sekolah yang bermutu, berkepribadian Pancasila, berwawasan lingkungan serta berakhlakul karimah."
                    </p>
                </div>
            </article>
        </div>
    </section>

    <script>
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
@endsection
