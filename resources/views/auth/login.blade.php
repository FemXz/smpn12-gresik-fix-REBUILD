{{-- resources/views/auth/login.blade.php --}}

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | SMPN 12 Gresik</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  
  <style>
    :root {
      --primary: #2563eb;
      --primary-dark: #1d4ed8;
      --secondary: #64748b;
      --bg-dark: #0f172a;
    }

    * {
      font-family: 'Plus Jakarta Sans', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: var(--bg-dark);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow-x: hidden;
      position: relative;
    }

    /* Animated Background */
    .bg-blobs {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
      overflow: hidden;
    }

    .blob {
      position: absolute;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(37, 99, 235, 0.15) 0%, transparent 70%);
      border-radius: 50%;
      filter: blur(40px);
      animation: float 20s infinite alternate;
    }

    .blob-1 { top: -10%; left: -10%; animation-delay: 0s; }
    .blob-2 { bottom: -10%; right: -10%; animation-delay: -5s; }
    .blob-3 { top: 40%; left: 30%; width: 300px; height: 300px; background: radial-gradient(circle, rgba(14, 165, 233, 0.1) 0%, transparent 70%); animation-delay: -10s; }

    @keyframes float {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(50px, 50px) scale(1.1); }
    }

    /* Main Card */
    .login-card {
      width: 100%;
      max-width: 1000px;
      min-height: 600px;
      background: rgba(255, 255, 255, 0.03);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      border-radius: 32px;
      display: flex;
      overflow: hidden;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
      margin: 20px;
      animation: fadeIn 0.8s ease-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Left Side - Visual */
    .login-visual {
      flex: 1;
      background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
      padding: 60px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
      color: white;
    }

    .visual-pattern {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      opacity: 0.1;
      background-image: radial-gradient(#fff 1px, transparent 1px);
      background-size: 30px 30px;
    }

    .logo-container {
      width: 80px;
      height: 80px;
      background: white;
      border-radius: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 32px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .logo-container img {
      width: 60px;
      height: 60px;
      object-fit: contain;
    }

    .login-visual h2 {
      font-size: 2.5rem;
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 16px;
    }

    .login-visual p {
      font-size: 1.1rem;
      opacity: 0.9;
      line-height: 1.6;
    }

    /* Right Side - Form */
    .login-form-container {
      flex: 1;
      background: white;
      padding: 60px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      position: relative;
    }

    .back-btn {
      position: absolute;
      top: 30px;
      right: 30px;
      width: 40px;
      height: 40px;
      border-radius: 12px;
      background: #f1f5f9;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #64748b;
      transition: all 0.3s;
    }

    .back-btn:hover {
      background: #e2e8f0;
      color: #1e293b;
      transform: rotate(90deg);
    }

    .form-header {
      margin-bottom: 32px;
    }

    .form-header h1 {
      font-size: 1.875rem;
      font-weight: 700;
      color: #1e293b;
      margin-bottom: 8px;
    }

    .form-header p {
      color: #64748b;
    }

    /* Input Styling */
    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      font-size: 0.875rem;
      font-weight: 600;
      color: #475569;
      margin-bottom: 8px;
    }

    .input-wrapper {
      position: relative;
    }

    .input-wrapper i {
      position: absolute;
      left: 16px;
      top: 50%;
      transform: translateY(-50%);
      color: #94a3b8;
      transition: color 0.3s;
    }

    .input-wrapper input {
      width: 100%;
      padding: 12px 16px 12px 48px;
      background: #f8fafc;
      border: 1.5px solid #e2e8f0;
      border-radius: 12px;
      font-size: 1rem;
      transition: all 0.3s;
      color: #1e293b;
    }

    .input-wrapper input:focus {
      outline: none;
      border-color: var(--primary);
      background: white;
      box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
    }

    .input-wrapper input:focus + i {
      color: var(--primary);
    }

    .password-toggle {
      position: absolute;
      right: 16px;
      top: 50%;
      transform: translateY(-50%);
      background: none;
      border: none;
      color: #94a3b8;
      cursor: pointer;
      padding: 4px;
    }

    .password-toggle:hover {
      color: var(--primary);
    }

    /* Options */
    .form-options {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 24px;
    }

    .remember-me {
      display: flex;
      align-items: center;
      gap: 8px;
      cursor: pointer;
    }

    .remember-me input {
      width: 18px;
      height: 18px;
      accent-color: var(--primary);
    }

    .remember-me span {
      font-size: 0.875rem;
      color: #64748b;
    }

    .forgot-password {
      font-size: 0.875rem;
      color: var(--primary);
      font-weight: 600;
      text-decoration: none;
    }

    /* Buttons */
    .btn-primary {
      width: 100%;
      padding: 14px;
      background: var(--primary);
      color: white;
      border: none;
      border-radius: 12px;
      font-size: 1rem;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      margin-bottom: 16px;
    }

    .btn-primary:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
    }

    .btn-google {
      width: 100%;
      padding: 12px;
      background: white;
      border: 1.5px solid #e2e8f0;
      border-radius: 12px;
      font-size: 0.95rem;
      font-weight: 600;
      color: #475569;
      cursor: pointer;
      transition: all 0.3s;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    .btn-google:hover {
      background: #f8fafc;
      border-color: #cbd5e1;
    }

    .divider {
      display: flex;
      align-items: center;
      gap: 16px;
      margin: 24px 0;
      color: #94a3b8;
      font-size: 0.875rem;
    }

    .divider::before, .divider::after {
      content: "";
      flex: 1;
      height: 1px;
      background: #e2e8f0;
    }

    .form-footer {
      text-align: center;
      margin-top: 32px;
      font-size: 0.95rem;
      color: #64748b;
    }

    .form-footer a {
      color: var(--primary);
      font-weight: 700;
      text-decoration: none;
    }

    /* Error Alert */
    .alert-error {
      background: #fef2f2;
      border: 1px solid #fee2e2;
      border-left: 4px solid #ef4444;
      padding: 16px;
      border-radius: 12px;
      margin-bottom: 24px;
      color: #991b1b;
      font-size: 0.875rem;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
      .login-card {
        max-width: 900px;
      }
      .login-visual, .login-form-container {
        padding: 40px;
      }
    }

    @media (max-width: 768px) {
      .login-card {
        flex-direction: column;
        max-width: 500px;
        min-height: auto;
      }
      .login-visual {
        padding: 40px 30px;
        text-align: center;
        align-items: center;
      }
      .logo-container {
        margin-bottom: 20px;
      }
      .login-visual h2 {
        font-size: 1.75rem;
      }
      .login-visual p {
        font-size: 1rem;
      }
      .login-form-container {
        padding: 40px 30px;
      }
    }

    /* Mobile 360px Optimization */
    @media (max-width: 400px) {
      .login-card {
        margin: 10px;
        border-radius: 24px;
      }
      .login-visual {
        padding: 30px 20px;
      }
      .login-form-container {
        padding: 30px 20px;
      }
      .form-header h1 {
        font-size: 1.5rem;
      }
      .input-wrapper input {
        padding: 10px 12px 10px 44px;
      }
      .btn-primary, .btn-google {
        padding: 12px;
      }
      .back-btn {
        top: 15px;
        right: 15px;
        width: 32px;
        height: 32px;
      }
    }
  </style>
</head>
<body>

  <div class="bg-blobs">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>
  </div>

  <div class="login-card">
    <!-- Left Side -->
    <div class="login-visual">
      <div class="visual-pattern"></div>
      <div class="logo-container">
        <img src="{{ asset('assets/logo-smp.png') }}" alt="SMPN 12 Gresik">
      </div>
      <h2>SMPN 12 Gresik</h2>
      <p>Portal Administrasi Sekolah modern untuk pengelolaan data akademik yang efisien dan terintegrasi.</p>
    </div>

    <!-- Right Side -->
    <div class="login-form-container">
      <a href="{{ route('home') }}" class="back-btn" title="Kembali ke Beranda">
        <i class="fas fa-times"></i>
      </a>

      <div class="form-header">
        <h1>Selamat Datang</h1>
        <p>Silakan masuk ke akun Anda</p>
      </div>

      @if ($errors->any())
        <div class="alert-error">
          <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="input-group">
          <label for="email">Alamat Email</label>
          <div class="input-wrapper">
            <i class="fas fa-envelope"></i>
            <input 
              type="email" 
              id="email" 
              name="email" 
              placeholder="nama@email.com"
              value="{{ old('email') }}"
              required 
              autocomplete="email" 
              autofocus>
          </div>
        </div>

        <div class="input-group">
          <label for="password">Kata Sandi</label>
          <div class="input-wrapper">
            <i class="fas fa-lock"></i>
            <input 
              id="password" 
              type="password" 
              name="password" 
              placeholder="••••••••"
              required 
              autocomplete="current-password">
            <button 
              type="button" 
              class="password-toggle" 
              onclick="togglePasswordVisibility()">
              <i id="eyeIcon" class="fas fa-eye"></i>
            </button>
          </div>
        </div>

        <div class="form-options">
          <label class="remember-me">
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <span>Ingat saya</span>
          </label>
          <a href="{{ route('password.request') }}" class="forgot-password">Lupa sandi?</a>
        </div>

        <button type="submit" class="btn-primary">
          <span>Masuk Sekarang</span>
          <i class="fas fa-arrow-right"></i>
        </button>

        <div class="divider">
          <span>Atau masuk dengan</span>
        </div>

        <a href="{{ route('google.login') }}" class="btn-google">
          <svg width="20" height="20" viewBox="0 0 24 24">
            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
          </svg>
          <span>Google</span>
        </a>

        <div class="form-footer">
          Belum punya akun? 
          <a href="{{ route('register') }}">Daftar di sini</a>
        </div>
      </form>
    </div>
  </div>

  <script>
    function togglePasswordVisibility() {
      const passwordInput = document.getElementById('password');
      const eyeIcon = document.getElementById('eyeIcon');

      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
      }
    }
  </script>

</body>
</html>
