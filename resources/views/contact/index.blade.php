@extends('layouts.app')

@section('title', 'Kotak Pertanyaan')

@section('content')

<div class="container">
    
    <div class="grid" id="formContainer">
        
        <!-- Sidebar -->
        <div class="sidebar-green">
            <div>
                <h2>Hubungi Kami</h2>
                <p class="sidebar-subtitle">Temukan kami di:</p>

                <div class="contact-items">
                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div class="contact-info">
                            <p>Telepon</p>
                            <p>0321-XXXX-XXXX</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div class="contact-info">
                            <p>Email</p>
                            <p>info@smpn12gresik.sch.id</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="contact-info">
                            <p>Alamat</p>
                            <p>Jl. Pendidikan No. 12, Gresik, Jawa Timur</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sidebar-divider">
                <p class="social-label">Ikuti kami di media sosial:</p>
                <div class="social-links">
                    <button class="social-btn"><i class="fab fa-instagram"></i></button>
                    <button class="social-btn"><i class="fab fa-tiktok"></i></button>
                </div>
            </div>
        </div>

        <!-- Form Section -->
        <div class="form-section">
            <div class="form-header">
                <h1>Kotak Aspirasi & Komunikasi</h1>
                <p class="form-header-subtitle green">SMPN 12 Gresik</p>
                <div class="form-divider green"></div>
            </div>

            @if(session('success'))
                <div class="success-message show">
                    ✓ {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('contact.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="jenisPesan">Jenis Pesan <span class="required">*</span></label>
                    <select id="jenisPesan" name="jenisPesan" required>
                        <option value="" disabled selected>Pilih Jenis Pesan</option>
                        <option value="pertanyaan">Pertanyaan</option>
                        <option value="kritik">Kritik</option>
                        <option value="saran">Saran</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label for="nama">Nama <span class="required">*</span></label>
                        <input type="text" id="nama" name="nama" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="telepon">Telepon <span class="required">*</span></label>
                    <input type="tel" id="telepon" name="telepon" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subjek Pesan</label>
                    <input type="text" id="subject" name="subject">
                </div>

                <div class="form-group">
                    <label for="isiPesan">Isi Pesan</label>
                    <textarea id="isiPesan" name="isiPesan" rows="6" required></textarea>
                </div>

                <div class="button-group">
                    <button type="submit" class="btn-submit-green">Kirim</button>
                    <button type="reset" class="btn-reset">Bersihkan</button>
                </div>

            </form>
        </div>
    </div>

    <!-- MAPS SECTION -->
    <div class="maps-section">
        <div class="maps-header">
            <h2>Lokasi SMPN 12 Gresik</h2>
            <p class="maps-subtitle">Kunjungi kami di lokasi berikut</p>
        </div>
        <div class="maps-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1234567890!2d112.5367037!3d-7.3951562!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78092a185fa6db%3A0x7a561fc94ea86764!2sUPT%20SMP%20Negeri%2012%20Gresik!5e0!3m2!1sid!2sid!4v1234567890" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

@endsection


    <script>
        function handleSubmit(event, type) {
            event.preventDefault();
            
            const form = event.target;
            const formData = new FormData(form);
            const data = Object.fromEntries(formData);
            
            console.log('Form submitted:', data);
            
            // Show success message
            const successMsg = document.getElementById('successMessage');
            successMsg.classList.add('show');
            
            // Reset form
            form.reset();
            
            // Hide success message after 3 seconds
            setTimeout(() => {
                successMsg.classList.remove('show');
            }, 3000);
        }
    </script>
</body>
</html>



 <style>
  

   
        .grid {
            margin-top: 120px !important;
            margin-bottom: 100px !important;
            display: grid;
            grid-template-columns: 1fr;
            gap: 32px;
        }

        @media (min-width: 1024px) {
            .grid {
                grid-template-columns: 1fr 2fr;
            }
        }

        

        /* ===== SIDEBAR HIJAU (LAYANAN ORANG TUA) ===== */
        .sidebar-green {
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            border-radius: 24px;
            padding: 32px;
            color: white;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 500px;
        }

        .sidebar h2 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .sidebar-subtitle {
            opacity: 0.9;
            margin-bottom: 32px;
            font-size: 14px;
        }

        .contact-items {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .contact-item {
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .contact-icon {
            width: 24px;
            height: 24px;
            flex-shrink: 0;
            margin-top: 4px;
        }

        .contact-info p:first-child {
            font-weight: 600;
            margin-bottom: 4px;
        }

        .contact-info p:last-child {
            opacity: 0.9;
            font-size: 13px;
        }

        .sidebar-divider {
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            margin-top: 32px;
            padding-top: 32px;
        }

        .social-label {
            font-size: 13px;
            opacity: 0.9;
            margin-bottom: 16px;
        }

        .social-links {
            display: flex;
            gap: 16px;
        }

        .social-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            color: white;
            font-size: 18px;
        }

        

        .sidebar-green .social-btn {
            background-color: rgba(34, 197, 94, 0.7);
        }

        .sidebar-green .social-btn:hover {
            background-color: rgba(74, 222, 128, 0.9);
            transform: scale(1.1);
        }

        /* ===== FORM SECTION ===== */
        .form-section {
            background: white;
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }

        .form-header {
            margin-bottom: 32px;
        }

        .form-header h1 {
            font-size: 32px;
            font-weight: bold;
            color: #111827;
            margin-bottom: 8px;
        }

        .form-header-subtitle {
            font-weight: 600;
            margin-bottom: 12px;
        }

        

        .form-header-subtitle.green {
            color: #16a34a;
        }

        .form-divider {
            height: 4px;
            width: 64px;
            border-radius: 9999px;
            margin-top: 12px;
        }

        

        .form-divider.green {
            background: linear-gradient(90deg, #16a34a 0%, #86efac 100%);
        }

        /* ===== SUCCESS MESSAGE ===== */
        .success-message {
            display: none;
            margin-bottom: 24px;
            padding: 16px;
            background-color: #f0fdf4;
            border: 1px solid #86efac;
            border-radius: 12px;
            color: #15803d;
            font-weight: 500;
            animation: slideDown 0.3s ease;
        }

        .success-message.show {
            display: block;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== INFO BOX ===== */
        .info-box {
            margin-bottom: 32px;
            padding: 24px;
            background-color: #eff6ff;
            border-left: 4px solid #3b82f6;
            border-radius: 8px;
        }

        .info-box p {
            color: #374151;
            font-size: 13px;
        }

        /* ===== FORM ELEMENTS ===== */
        .form-group {
            margin-bottom: 24px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr;
            gap: 24px;
        }

        @media (min-width: 768px) {
            .form-row {
                grid-template-columns: 1fr 1fr;
            }
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #374151;
            font-size: 14px;
        }

        .required {
            color: #ef4444;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 14px;
            font-family: inherit;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #16a34a;
            box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.1);
        }

        .form-group textarea {
            resize: vertical;
        }

        /* ===== BUTTONS ===== */
        .button-group {
            display: flex;
            gap: 16px;
            margin-top: 32px;
        }

        .btn-submit-green,
        .btn-reset {
            padding: 12px 32px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-submit-green {
            background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);
            color: white;
        }

        .btn-submit-green:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(22, 163, 74, 0.3);
        }

        .btn-reset {
            background-color: #f3f4f6;
            color: #374151;
        }

        .btn-reset:hover {
            background-color: #e5e7eb;
        }

        /* ===== MAPS SECTION ===== */
        .maps-section {
            margin-top: 80px;
            margin-bottom: 100px;
        }

        .maps-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .maps-header h2 {
            font-size: 32px;
            font-weight: bold;
            color: #111827;
            margin-bottom: 8px;
        }

        .maps-subtitle {
            font-size: 16px;
            color: #6b7280;
            margin-bottom: 12px;
        }

        .maps-header::after {
            content: '';
            display: block;
            width: 64px;
            height: 4px;
            background: linear-gradient(90deg, #16a34a 0%, #86efac 100%);
            border-radius: 9999px;
            margin: 16px auto 0;
        }

        .maps-container {
            background: white;
            border-radius: 24px;
            padding: 16px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .maps-container iframe {
            border-radius: 16px;
            display: block;
        }

        @media (max-width: 768px) {
            .maps-header h2 {
                font-size: 24px;
            }

            .maps-container {
                padding: 12px;
            }

            .maps-container iframe {
                height: 300px !important;
            }
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .sidebar-green {
                min-height: auto;
            }

            .form-header h1 {
                font-size: 24px;
            }

            .button-group {
                flex-direction: column;
            }

            .btn-submit-green,
            .btn-reset {
                width: 100%;
            }
        }
</style>
