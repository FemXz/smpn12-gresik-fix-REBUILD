@extends("layouts.app")

@section("title", "Visi & Misi - SMP Negeri 12 Gresik")

@section("content")
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi - SMP Negeri 12 Gresik</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #0b6346ff 0%, #2c7922ff 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero-section {
           background: linear-gradient(135deg, #059263ff 0%, #2c7922ff 100%),
            url("data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><defs><linearGradient id='grad' x1='0%' y1='0%' x2='100%' y2='100%'><stop offset='0%' style='stop-color:rgba(255,255,255,0.1);stop-opacity:1' /><stop offset='100%' style='stop-color:rgba(255,255,255,0);stop-opacity:1' /></linearGradient></defs><rect width='100%' height='100%' fill='url(%23grad)'/></svg>");

            padding: 80px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(255,255,255,0.1) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(255,255,255,0.1) 0%, transparent 40%),
                radial-gradient(circle at 50% 50%, rgba(255,255,255,0.05) 0%, transparent 60%);
            animation: breathe 6s ease-in-out infinite;
        }

        @keyframes breathe {
            0%, 100% { opacity: 0.7; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.02); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-title {
            font-size: 4rem;
            font-weight: 800;
            color: white;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            animation: zoomIn 1.2s ease-out;
        }

        .hero-subtitle {
            font-size: 1.5rem;
            color: rgba(255,255,255,0.9);
            margin-bottom: 40px;
            font-weight: 300;
            animation: fadeInUp 1.2s ease-out 0.3s both;
        }

        .hero-icons {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 30px;
        }

        .hero-icon {
            font-size: 3.2rem;
            color: rgba(255,255,255,0.4);
            animation: float 3s ease-in-out infinite;
        }

        .hero-icon:nth-child(1) { animation-delay: 0s; }
        .hero-icon:nth-child(2) { animation-delay: 1s; }
        .hero-icon:nth-child(3) { animation-delay: 2s; }

        @keyframes zoomIn {
            from { opacity: 0; transform: scale(0.5); }
            to { opacity: 1; transform: scale(1); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
        }

        .main-content {
            padding: 70px 0;
            background: white;
            position: relative;
            z-index: 2;
        }

        .visi-section {
            margin-bottom: 70px;
            text-align: center;
        }

        .visi-card {
            background: linear-gradient(135deg, #059263ff 0%, #2c7922ff 100%);
            border-radius: 25px;
            padding: 50px 40px;
            color: white;
            position: relative;
            overflow: hidden;
            box-shadow: 0 25px 50px rgba(102, 126, 234, 0.3);
            transform: perspective(1000px) rotateY(-2deg);
            transition: all 0.5s ease;
        }

        .visi-card:hover {
            transform: perspective(1000px) rotateY(0deg) translateY(-10px);
            box-shadow: 0 35px 70px rgba(102, 126, 234, 0.4);
        }

        .visi-card::before {
            content: '';
            position: absolute;
            top: -100%;
            left: -100%;
            width: 300%;
            height: 300%;
            background: conic-gradient(from 0deg, transparent, rgba(255,255,255,0.1), transparent, rgba(255,255,255,0.1), transparent);
            animation: rotate 8s linear infinite;
        }

        @keyframes rotate {
            100% { transform: rotate(360deg); }
        }

        .visi-icon {
            font-size: 3.5rem;
            margin-bottom: 20px;
            position: relative;
            z-index: 2;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }

        .visi-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 25px;
            position: relative;
            z-index: 2;
        }

        .visi-text {
            font-size: 1.2rem;
            line-height: 1.8;
            font-weight: 300;
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .misi-section {
            margin-bottom: 70px;
        }

        .section-title {
            text-align: center;
            font-size: 2.8rem;
            font-weight: 800;
            color: #2d3748;
            margin-bottom: 60px;
            position: relative;
            padding-top: 80px;
        }

        .section-title::before {
            content: '\f0e7';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #059263ff 0%, #2c7922ff 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            color: white;
            font-size: 2rem;
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 5px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 3px;
        }

        .misi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .misi-card {
            background: white;
            border-radius: 18px;
            padding: 35px 25px;
            box-shadow: 0 12px 25px rgba(0,0,0,0.1);
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            border-top: 5px solid transparent;
        }

        .misi-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--card-gradient));
            transition: all 0.3s ease;
        }

        .misi-card:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .misi-card:hover::before {
            height: 100%;
            opacity: 0.05;
        }

        .misi-card:nth-child(1) { --card-gradient: #667eea, #764ba2; }
        .misi-card:nth-child(2) { --card-gradient: #f093fb, #f5576c; }
        .misi-card:nth-child(3) { --card-gradient: #4facfe, #00f2fe; }
        .misi-card:nth-child(4) { --card-gradient: #43e97b, #38f9d7; }
        .misi-card:nth-child(5) { --card-gradient: #fa709a, #fee140; }
        .misi-card:nth-child(6) { --card-gradient: #a8edea, #fed6e3; }
        .misi-card:nth-child(7) { --card-gradient: #ff9a9e, #fecfef; }

        .misi-number {
            width: 65px;
            height: 65px;
            background: linear-gradient(135deg, var(--card-gradient));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 20px;
            box-shadow: 0 8px 15px rgba(0,0,0,0.1);
        }

        .misi-text {
            font-size: 1.05rem;
            color: #4a5568;
            line-height: 1.7;
        }

        .fade-in { opacity: 0; transform: translateY(30px); transition: all 0.8s ease-out; }
        .slide-in-left { opacity: 0; transform: translateX(-50px); transition: all 0.8s ease-out; }
        .slide-in-right { opacity: 0; transform: translateX(50px); transition: all 0.8s ease-out; }
        .scale-in { opacity: 0; transform: scale(0.9); transition: all 0.8s ease-out; }
        .visible { opacity: 1; transform: translate(0) scale(1); }

        @media (max-width: 768px) {
            .hero-title { font-size: 2.8rem; }
            .section-title { font-size: 2.2rem; }
            .visi-title { font-size: 2rem; }
        }
    </style>
</head>
<body>
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-icons">
                    <i class="fas fa-graduation-cap hero-icon"></i>
                    <i class="fas fa-book hero-icon"></i>
                    <i class="fas fa-star hero-icon"></i>
                </div>
                <h1 class="hero-title">Visi & Misi</h1>
                <p class="hero-subtitle">Panduan dan arah pengembangan UPT SMP Negeri 12 Gresik</p>
            </div>
        </div>
    </section>

    <section class="main-content">
        <div class="container">
            <!-- Visi Section -->
            <div class="visi-section fade-in">
                <div class="visi-card">
                    <div class="visi-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2 class="visi-title">VISI</h2>
                    <p class="visi-text">
                        "Terwujudnya sekolah yang bermutu, berkepribadian Pancasila, berwawasan lingkungan serta berakhlakul karimah"
                    </p>
                </div>
            </div>

            <!-- Misi Section -->
            <div class="misi-section">
                <h2 class="section-title fade-in">MISI</h2>
                <div class="misi-grid">
                    <div class="misi-card scale-in">
                        <div class="misi-number">1</div>
                        <p class="misi-text">
                            Melaksanakan pengembangan Kurikulum Operasional Satuan Pendidikan.
                        </p>
                    </div>
                    <div class="misi-card scale-in">
                        <div class="misi-number">2</div>
                        <p class="misi-text">
                            Melaksanakan pengembangan Sumber Daya Manusia Meliputi Kepala sekolah, Pendidik dan Tenaga Kependidikan.
                        </p>
                    </div>
                    <div class="misi-card scale-in">
                        <div class="misi-number">3</div>
                        <p class="misi-text">
                            Mengembangkan pengembangan pembelajaran paradigma baru yang kreatif-inovatif, kritis, kolaboratif dan berwawasan lingkungan.
                        </p>
                    </div>
                    <div class="misi-card scale-in">
                        <div class="misi-number">4</div>
                        <p class="misi-text">
                            Meningkatkan Prestasi akademik dan non akademik.
                        </p>
                    </div>
                    <div class="misi-card scale-in">
                        <div class="misi-number">5</div>
                        <p class="misi-text">
                            Mewujudkan dan mengembangkan Profil Pelajar Pancasila.
                        </p>
                    </div>
                    <div class="misi-card scale-in">
                        <div class="misi-number">6</div>
                        <p class="misi-text">
                            Mewujudkan lingkungan sekolah yang sejuk dan asri melalui tiga upaya: Melestarikan lingkungan, Mencegah pencemaran, dan Mencegah kerusakan lingkungan.
                        </p>
                    </div>
                    <div class="misi-card scale-in">
                        <div class="misi-number">7</div>
                        <p class="misi-text">
                            Melaksanakan kegiatan-kegiatan dalam rangka peningkatan iman dan taqwa kepada Tuhan Yang Maha Esa.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in, .slide-in-left, .slide-in-right, .scale-in').forEach(el => {
            observer.observe(el);
        });

        const misiCards = document.querySelectorAll('.misi-card');
        misiCards.forEach((card, index) => {
            card.style.transitionDelay = `${index * 0.1}s`;
        });

        document.documentElement.style.scrollBehavior = 'smooth';
    </script>
</body>
</html>
@endsection
