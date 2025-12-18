<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Galaxy Salon - Booking Salon</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        @keyframes twinkle {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
        }
        
        @keyframes glow {
            0%, 100% { text-shadow: 0 0 10px rgba(168, 85, 247, 0.5); }
            50% { text-shadow: 0 0 20px rgba(236, 72, 153, 0.8); }
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            color: #e0e0e0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }
        
        /* Starfield effect */
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(2px 2px at 20px 30px, #fff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 60px 70px, #fff, rgba(0,0,0,0)),
                radial-gradient(1px 1px at 50px 50px, #fff, rgba(0,0,0,0)),
                radial-gradient(1px 1px at 130px 80px, #fff, rgba(0,0,0,0)),
                radial-gradient(2px 2px at 90px 10px, #fff, rgba(0,0,0,0));
            background-size: 200px 200px;
            pointer-events: none;
            z-index: 1;
            animation: twinkle 3s infinite;
        }
        
        .container {
            width: 100%;
            max-width: 420px;
            position: relative;
            z-index: 2;
        }
        
        .card {
            background: rgba(59, 30, 100, 0.3);
            backdrop-filter: blur(10px);
            border: 2px solid rgba(168, 85, 247, 0.4);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 0 40px rgba(168, 85, 247, 0.2);
            animation: float 3s ease-in-out infinite;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 30px;
            font-size: 48px;
            animation: float 3s ease-in-out infinite;
        }
        
        h1 {
            font-size: 24px;
            margin-bottom: 8px;
            text-align: center;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: glow 2s ease-in-out infinite;
        }
        
        .desc {
            margin-bottom: 24px;
            color: #c9a6e8;
            font-size: 14px;
            text-align: center;
        }
        
        .form-group {
            margin-bottom: 16px;
        }
        
        label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
            color: #e0e0e0;
        }
        
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 14px;
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 10px;
            font-size: 14px;
            background: rgba(139, 92, 246, 0.1);
            color: #e0e0e0;
            transition: all 0.3s;
        }
        
        input[type="email"]::placeholder,
        input[type="password"]::placeholder {
            color: #8b7fb5;
        }
        
        input[type="email"]:focus,
        input[type="password"]:focus {
            outline: none;
            border-color: #a855f7;
            background: rgba(139, 92, 246, 0.2);
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.3);
        }
        
        .btn {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 700;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            color: white;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.3);
        }
        
        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 25px rgba(168, 85, 247, 0.6);
        }
        
        .btn:active {
            transform: translateY(0);
        }
        
        .remember-group {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #a855f7;
        }
        
        .divider {
            text-align: center;
            margin: 24px 0;
            color: #8b7fb5;
            font-size: 14px;
        }
        
        .divider::before {
            content: '';
            display: inline-block;
            width: 100px;
            height: 1px;
            background: rgba(168, 85, 247, 0.3);
            margin-right: 10px;
            vertical-align: middle;
        }
        
        .divider::after {
            content: '';
            display: inline-block;
            width: 100px;
            height: 1px;
            background: rgba(168, 85, 247, 0.3);
            margin-left: 10px;
            vertical-align: middle;
        }
        
        .footer-links {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            font-size: 13px;
        }
        
        .footer-links a {
            color: #a855f7;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .footer-links a:hover {
            color: #f0abfc;
            text-decoration: underline;
        }
        
        .signup-prompt {
            text-align: center;
            margin-top: 24px;
            color: #c9a6e8;
            font-size: 14px;
        }
        
        .signup-prompt a {
            color: #a855f7;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .signup-prompt a:hover {
            color: #f0abfc;
        }
        
        .alert {
            margin-bottom: 20px;
            padding: 12px;
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
            background: rgba(239, 68, 68, 0.2);
            border: 2px solid rgba(239, 68, 68, 0.5);
            color: #fca5a5;
        }
        
        .alert-success {
            background: rgba(34, 197, 94, 0.2);
            border: 2px solid rgba(34, 197, 94, 0.5);
            color: #86efac;
        }
        
        @media (max-width: 480px) {
            .card {
                padding: 24px;
            }
            
            h1 {
                font-size: 20px;
            }
            
            .logo {
                font-size: 40px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="logo">✨</div>
            <h1>Galaxy Salon</h1>
            <p class="desc">Masuk untuk melanjutkan booking salon premium Anda</p>
            
            <form method="POST" action="">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password Anda" required>
                </div>
                
                <div class="remember-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember" style="margin: 0;">Ingat saya</label>
                </div>
                
                <button type="submit" class="btn">🌟 Login Sekarang</button>
            </form>
            
            <div class="divider">atau</div>
            
            <div class="footer-links">
                <a href="#forgot">Lupa Password?</a>
                <a href="#help">Bantuan</a>
            </div>
            
            <div class="signup-prompt">
                Belum punya akun? <a href="#signup">Daftar sekarang</a>
            </div>
        </div>
    </div>
</body>
</html>
        }
        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
            font-size: 13px;
        }
        .actions label { font-weight: 400; }
        .actions a { color: #2563eb; text-decoration: none; }
        button {
            width: 100%;
            padding: 12px;
            background: #2563eb;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer;
        }
        .error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #b91c1c;
            padding: 10px;
            border-radius: 8px;
            margin-bottom: 12px;
            font-size: 13px;
        }
        .footer {
            margin-top: 14px;
            text-align: center;
            font-size: 13px;
            color: #6b7280;
        }
        .footer a { color: #2563eb; text-decoration: none; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Login</h1>
        <p class="desc">Masuk untuk melanjutkan booking salon.</p>

        <form method="POST" action="{{ route('login.submit') }}">
            @csrf

            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <label for="password">Kata Sandi</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <div class="actions">
                <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Ingat saya</label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Lupa sandi?</a>
                @endif
            </div>

            <button type="submit">Masuk</button>
        </form>

        <div class="footer">
            Belum punya akun? @if (Route::has('register'))<a href="{{ route('register') }}">Daftar</a>@endif
        </div>
    </div>
</body>
</html>
