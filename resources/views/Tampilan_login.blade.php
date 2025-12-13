<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Booking Salon</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f5;
            color: #111827;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .card {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
        }
        h1 {
            font-size: 22px;
            margin-bottom: 8px;
            text-align: center;
        }
        p.desc {
            margin-bottom: 20px;
            color: #6b7280;
            font-size: 14px;
            text-align: center;
        }
        label {
            display: block;
            font-weight: 600;
            margin-bottom: 6px;
            font-size: 14px;
        }
        input[type="email"], input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 12px;
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
