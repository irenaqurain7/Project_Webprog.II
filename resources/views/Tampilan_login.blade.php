<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Salon D'Sisi - Booking Salon</title>
    <style>
        :root {
            --accent: #ed2fdd;
            --accent-2: #f59e0b;
            --text: #111827;
            --muted: #4b5563;
            --bg: #f4f4f5;
            --card: #ffffff;
            --border: #e5e7eb;
        }
        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(20px); }
        }
        
        @keyframes glow {
            0%, 100% { text-shadow: 0 0 10px rgba(217, 179, 255, 0.5); }
            50% { text-shadow: 0 0 20px rgba(217, 179, 255, 0.3); }
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #FAFAFA;
            color: #4A4A4A;
            line-height: 1.6;
            position: relative;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        body::before {
            display: none;
        }
        
        header {
            background: #FFFFFF;
            backdrop-filter: blur(10px);
            border-bottom: 2px solid #E0E0E0;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
        }
        
        .nav {
            max-width: 1200px;
            margin: 0 auto;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        
        .brand { 
            font-weight: 800; 
            font-size: 24px;
            background: linear-gradient(135deg, #D9B3FF, #FFB3D9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: glow 2s ease-in-out infinite;
        }
        
        .nav-links { 
            display: flex; 
            gap: 20px; 
            align-items: center; 
            font-size: 14px;
        }
        
        .nav a { 
            color: #4A4A4A; 
            text-decoration: none;
            transition: all 0.3s;
            border-bottom: 2px solid transparent;
        }
        
        .nav a:hover {
            color: #D9B3FF;
            border-bottom: 2px solid #D9B3FF;
        }
        
        .btn {
            padding: 10px 20px;
            border-radius: 25px;
            border: 2px solid #D9B3FF;
            background: linear-gradient(135deg, #D9B3FF, #FFB3D9);
            color: #4A4A4A;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            cursor: pointer;
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.3);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 25px rgba(217, 179, 255, 0.4);
        }
        
        .btn.secondary {
            background: transparent;
            color: #D9B3FF;
            border-color: #D9B3FF;
        }
        
        .btn.secondary:hover {
            background: rgba(217, 179, 255, 0.15);
        }

        .login-container {
            margin-top: 80px;
            width: 100%;
            max-width: 500px;
            padding: 20px;
        }

        .login-card {
            background: rgba(217, 179, 255, 0.1);
            border: 3px solid #D9B3FF;
            border-radius: 20px;
            padding: 40px;
            backdrop-filter: blur(10px);
            box-shadow: 0 0 20px rgba(217, 179, 255, 0.2), inset 0 0 15px rgba(217, 179, 255, 0.1);
        }

        .login-card h1 {
            font-size: 32px;
            margin-bottom: 8px;
            background: linear-gradient(135deg, #D9B3FF, #FFB3D9, #FFD9F0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-align: center;
        }

        .login-card p {
            text-align: center;
            color: #9B8BA8;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #4A4A4A;
            font-size: 14px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border: 2px solid #D9B3FF;
            border-radius: 10px;
            font-size: 14px;
            background: rgba(217, 179, 255, 0.08);
            color: #4A4A4A;
            transition: all 0.3s;
            font-family: inherit;
        }

        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: #B8A8C4;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #FFB3D9;
            background: rgba(217, 179, 255, 0.15);
            box-shadow: 0 0 15px rgba(217, 179, 255, 0.3);
        }

        .remember-group {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
            font-size: 14px;
            color: #4A4A4A;
        }

        input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #D9B3FF;
        }

        .form-group button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 700;
            background: linear-gradient(135deg, #D9B3FF, #FFB3D9);
            color: #4A4A4A;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 0 15px rgba(217, 179, 255, 0.3);
        }

        .form-group button:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 25px rgba(217, 179, 255, 0.5);
        }

        .divider {
            text-align: center;
            margin: 24px 0;
            color: #9B8BA8;
            font-size: 14px;
        }

        .divider::before {
            content: '';
            display: inline-block;
            width: 80px;
            height: 1px;
            background: #D9B3FF;
            margin-right: 10px;
            vertical-align: middle;
            opacity: 0.5;
        }

        .divider::after {
            content: '';
            display: inline-block;
            width: 80px;
            height: 1px;
            background: #D9B3FF;
            margin-left: 10px;
            vertical-align: middle;
            opacity: 0.5;
        }

        .footer-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            font-size: 13px;
        }

        .footer-links a {
            color: #D9B3FF;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 600;
        }

        .footer-links a:hover {
            color: #FFB3D9;
            text-decoration: underline;
        }

        .signup-prompt {
            text-align: center;
            margin-top: 24px;
            color: #9B8BA8;
            font-size: 14px;
        }

        .signup-prompt a {
            color: #D9B3FF;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s;
        }

        .signup-prompt a:hover {
            color: #FFB3D9;
        }

        .alert {
            margin-bottom: 20px;
            padding: 12px 14px;
            border-radius: 10px;
            font-size: 14px;
            animation: slide-in 0.3s ease-out;
        }

        @keyframes slide-in {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.15);
            border: 2px solid rgba(239, 68, 68, 0.4);
            color: #dc2626;
        }

        .alert-success {
            background: rgba(34, 197, 94, 0.15);
            border: 2px solid rgba(34, 197, 94, 0.4);
            color: #16a34a;
        }

        @media (max-width: 640px) {
            .nav {
                flex-direction: column;
                align-items: stretch;
                gap: 12px;
                padding: 12px;
            }

            .nav-links {
                flex-direction: column;
                gap: 10px;
            }

            .login-container {
                margin-top: 100px;
                padding: 15px;
            }

            .login-card {
                padding: 24px;
            }

            .login-card h1 {
                font-size: 24px;
            }

            .btn {
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <div class="brand">✨ Salon D'Sisi</div>
            <div class="nav-links">
                <a href="/">Beranda</a>
                <a href="#layanan">Layanan</a>
                <a href="#kontak">Kontak</a>
            </div>
        </div>
    </header>

    <div class="login-container">
        <div class="login-card">
            <h1>🌟 Login</h1>
            <p>Masuk untuk melanjutkan booking salon premium Anda</p>

            @if ($errors->any())
                <div class="alert alert-error">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email Anda" required autocomplete="email" autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required autocomplete="current-password">
                </div>

                <div class="remember-group">
                    <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="remember" style="margin: 0;">Ingat saya</label>
                </div>

                <div class="form-group">
                    <button type="submit">🌟 Login Sekarang</button>
                </div>
            </form>

            <div class="divider">atau</div>

            <div class="footer-links">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Lupa Password?</a>
                @else
                    <a href="#">Lupa Password?</a>
                @endif
                <a href="#">Bantuan</a>
            </div>

            <div class="signup-prompt">
                Belum punya akun?
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Daftar sekarang</a>
                @else
                    <a href="#">Daftar sekarang</a>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
