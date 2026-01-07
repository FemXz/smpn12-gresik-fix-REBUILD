{{-- resources/views/auth/register.blade.php --}}

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun | SMPN 12 Gresik</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  
  <style>
    :root {
      --primary: #2563eb;
      --primary-dark: #1d4ed8;
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
      padding: 20px 0;
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

    @keyframes float {
      0% { transform: translate(0, 0) scale(1); }
      100% { transform: translate(50px, 50px) scale(1.1); }
    }

    /* Main Card */
    .register-card {
      width: 100%;
      max-width: 520px;
      background: white;
      border-radius: 32px;
      padding: 40px;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
      margin: 20px;
      animation: fadeIn 0.8s ease-out;
      position: relative;
      z-index: 1;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .logo-container {
      width: 64px;
      height: 64px;
      background: #f1f5f9;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 20px;
    }

    .logo-container img {
      width: 48px;
      height: 48px;
      object-fit: contain;
    }

    .header {
      text-align: center;
      margin-bottom: 28px;
    }

    .header h1 {
      font-size: 1.75rem;
      font-weight: 800;
      color: #1e293b;
      margin-bottom: 8px;
    }

    .header p {
      color: #64748b;
      font-size: 0.95rem;
    }

    /* Input Styling */
    .input-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 16px;
      margin-bottom: 24px;
    }

    .input-group label {
      display: block;
      font-size: 0.875rem;
      font-weight: 600;
      color: #475569;
      margin-bottom: 6px;
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
      font-size: 0.95rem;
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
      margin-bottom: 20px;
    }

    .btn-primary:hover {
      background: var(--primary-dark);
      transform: translateY(-2px);
      box-shadow: 0 10px 15px -3px rgba(37, 99, 235, 0.3);
    }

    .form-footer {
      text-align: center;
      font-size: 0.95rem;
      color: #64748b;
    }

    .form-footer a {
      color: var(--primary);
      font-weight: 700;
      text-decoration: none;
    }

    /* Error Text */
    .error-text {
      color: #ef4444;
      font-size: 0.8125rem;
      margin-top: 4px;
      display: block;
      font-weight: 500;
    }

    /* Mobile Optimization */
    @media (max-width: 480px) {
      .register-card {
        padding: 32px 20px;
        margin: 16px;
        border-radius: 24px;
      }
      .header h1 {
        font-size: 1.5rem;
      }
      .input-wrapper input {
        padding: 11px 16px 11px 44px;
      }
    }
  </style>
</head>
<body>

  <div class="bg-blobs">
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
  </div>

  <div class="register-card">
    <div class="logo-container">
      <img src="{{ asset('assets/logo-smp.png') }}" alt="SMPN 12 Gresik">
    </div>

    <div class="header">
      <h1>Buat Akun Baru</h1>
      <p>Lengkapi data di bawah untuk mendaftar portal</p>
    </div>

    <form method="POST" action="{{ route('register') }}">
      @csrf

      <div class="input-grid">
        <!-- Name Input -->
        <div class="input-group">
          <label for="name">Nama Lengkap</label>
          <div class="input-wrapper">
            <i class="fas fa-user"></i>
            <input 
              type="text" 
              id="name" 
              name="name" 
              placeholder="Masukkan nama lengkap"
              value="{{ old('name') }}"
              required 
              autofocus>
          </div>
          @error('name')
            <span class="error-text">{{ $message }}</span>
          @enderror
        </div>

        <!-- Email Input -->
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
              required>
          </div>
          @error('email')
            <span class="error-text">{{ $message }}</span>
          @enderror
        </div>

        <!-- Password Input -->
        <div class="input-group">
          <label for="password">Kata Sandi</label>
          <div class="input-wrapper">
            <i class="fas fa-lock"></i>
            <input 
              id="password" 
              type="password" 
              name="password" 
              placeholder="Minimal 8 karakter"
              required>
            <button 
              type="button" 
              class="password-toggle" 
              onclick="togglePassword('password', 'eyeIcon1')">
              <i id="eyeIcon1" class="fas fa-eye"></i>
            </button>
          </div>
          @error('password')
            <span class="error-text">{{ $message }}</span>
          @enderror
        </div>

        <!-- Confirm Password Input -->
        <div class="input-group">
          <label for="password-confirm">Konfirmasi Kata Sandi</label>
          <div class="input-wrapper">
            <i class="fas fa-shield-alt"></i>
            <input 
              id="password-confirm" 
              type="password" 
              name="password_confirmation" 
              placeholder="Ulangi kata sandi"
              required>
            <button 
              type="button" 
              class="password-toggle" 
              onclick="togglePassword('password-confirm', 'eyeIcon2')">
              <i id="eyeIcon2" class="fas fa-eye"></i>
            </button>
          </div>
        </div>
      </div>

      <button type="submit" class="btn-primary">
        <span>Daftar Sekarang</span>
        <i class="fas fa-user-plus"></i>
      </button>

      <div class="form-footer">
        Sudah punya akun? 
        <a href="{{ route('login') }}">Masuk di sini</a>
      </div>
    </form>
  </div>

  <script>
    function togglePassword(inputId, iconId) {
      const passwordInput = document.getElementById(inputId);
      const eyeIcon = document.getElementById(iconId);

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
