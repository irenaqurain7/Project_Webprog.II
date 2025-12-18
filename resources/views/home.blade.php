<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon D'Sisi | Booking Salon</title>
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(20px); }
        }
        
        @keyframes twinkle {
            0%, 100% { opacity: 0.3; }
            50% { opacity: 1; }
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
        }
        
        /* Starfield effect removed */
        body::before {
            display: none;
        }
        
        header {
            background: #FFFFFF;
            backdrop-filter: blur(10px);
            border-bottom: 2px solid #E0E0E0;
            position: sticky;
            top: 0;
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
        
        main { 
            max-width: 1200px; 
            margin: 0 auto; 
            padding: 40px 20px 60px;
            position: relative;
            z-index: 2;
        }
        
        .hero { 
            display: grid; 
            gap: 20px; 
            padding: 40px; 
            background: rgba(217, 179, 255, 0.1);
            border: 3px solid #D9B3FF;
            border-radius: 20px; 
            margin-bottom: 40px;
            backdrop-filter: blur(10px);
            animation: none;
            box-shadow: 0 0 20px rgba(217, 179, 255, 0.2), inset 0 0 15px rgba(217, 179, 255, 0.1);
        }
        
        .hero h1 { 
            font-size: clamp(28px, 6vw, 42px); 
            line-height: 1.2;
            background: linear-gradient(135deg, #D9B3FF, #FFB3D9, #FFD9F0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hero p { 
            color: #9B8BA8;
            font-size: 16px;
        }
        
        .hero-actions { 
            display: flex; 
            gap: 12px; 
            flex-wrap: wrap;
            margin-top: 10px;
        }
        
        .info { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); 
            gap: 14px; 
            margin-top: 20px;
        }
        
        .info-item { 
            background: rgba(217, 179, 255, 0.15);
            border: 2px solid #D9B3FF;
            border-radius: 15px; 
            padding: 16px;
            text-align: center;
            color: #4A4A4A;
            box-shadow: 0 0 15px rgba(217, 179, 255, 0.25), inset 0 0 10px rgba(217, 179, 255, 0.1);
        }
        
        .info-item strong {
            font-size: 18px;
            background: linear-gradient(135deg, #D9B3FF, #FFB3D9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section { 
            margin-top: 40px;
        }
        
        .section h2 { 
            font-size: 28px; 
            margin-bottom: 16px;
            background: linear-gradient(135deg, #D9B3FF, #FFB3D9);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .section p.lead { 
            color: #9B8BA8;
            margin-bottom: 20px;
        }
        
        .cards { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); 
            gap: 16px;
        }
        
        .card { 
            background: rgba(217, 179, 255, 0.08);
            border: 2px solid #D9B3FF;
            border-radius: 15px; 
            padding: 24px;
            transition: all 0.3s;
            box-shadow: 0 0 15px rgba(217, 179, 255, 0.15);
        }
        
        .card:hover {
            background: rgba(217, 179, 255, 0.15);
            border-color: #FFB3D9;
            transform: translateY(-5px);
            box-shadow: 0 0 30px rgba(217, 179, 255, 0.25), inset 0 0 12px rgba(217, 179, 255, 0.1);
        }
        
        .card h3 { 
            margin-bottom: 10px;
            color: #D9B3FF;
        }
        
        .card p { 
            color: #8B7BA5;
            font-size: 14px;
        }
        
        .steps { 
            display: grid; 
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); 
            gap: 14px;
        }
        
        .step { 
            background: rgba(217, 179, 255, 0.08);
            border: 2px solid rgba(217, 179, 255, 0.3);
            border-radius: 12px; 
            padding: 16px; 
            display: flex; 
            gap: 12px; 
            align-items: flex-start;
        }
        
        .step-num { 
            width: 40px; 
            height: 40px; 
            border-radius: 50%; 
            background: linear-gradient(135deg, #a855f7, #ec4899);
            color: white; 
            display: grid; 
            place-items: center; 
            font-weight: 700; 
            font-size: 16px;
            flex-shrink: 0;
        }
        
        .cta { 
            margin-top: 50px; 
            text-align: center; 
            background: rgba(217, 179, 255, 0.08);
            border: 2px solid rgba(217, 179, 255, 0.3);
            border-radius: 20px; 
            padding: 30px;
        }
        
        .cta h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #D9B3FF;
        }
        
        .cta p { 
            color: #9B8BA8;
            margin: 10px 0 20px;
        }
        
        footer { 
            text-align: center; 
            color: #8b7fb5;
            font-size: 13px; 
            padding: 30px 20px;
            border-top: 1px solid rgba(168, 85, 247, 0.2);
            position: relative;
            z-index: 2;
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
            
            .hero-actions { 
                flex-direction: column; 
                align-items: stretch;
            }
            
            .btn { 
                text-align: center;
            }
            
            .hero {
                padding: 24px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <div class="brand">✨ Salon D'Sisi</div>
            <div class="nav-links">
                <a href="#layanan">Layanan</a>
                <a href="#proses">Cara Kerja</a>
                <a href="#kontak">Kontak</a>
                <a class="btn secondary" href="{{ route('login') }}">Login</a>
                <a class="btn" href="{{ route('login') }}">Pesan Sekarang</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div>
                <h1>Booking Salon Menjadi Mudah & Mewah ✨</h1>
                <p>Rasakan pengalaman salon premium tanpa antri panjang. Pesan styling, potong, atau warna rambut Anda dengan mudah melalui aplikasi kami.</p>
            </div>
            <div class="hero-actions">
                <a class="btn" href="{{ route('login') }}">🌟 Pesan Sekarang</a>
                <a class="btn secondary" href="#layanan">Lihat Layanan</a>
            </div>
            <div class="info">
                <div class="info-item">
                    <strong>5,000+</strong><br>
                    Pelanggan Puas
                </div>
                <div class="info-item">
                    <strong>⭐ 4.9/5</strong><br>
                    Rating Terbaik
                </div>
                <div class="info-item">
                    <strong>🎨 50+</strong><br>
                    Stylist Berpengalaman
                </div>
            </div>
        </section>

        <section id="layanan" class="section">
            <h2>Layanan Premium Kami</h2>
            <p class="lead">Pilih dari berbagai layanan styling dan perawatan rambut premium yang kami tawarkan</p>
            <div class="cards">
                <div class="card">
                    <h3>💇 Potong Rambut</h3>
                    <p>Potong rambut profesional dengan stylist berpengalaman. Dapatkan gaya yang sempurna sesuai dengan bentuk wajah Anda.</p>
                </div>
                <div class="card">
                    <h3>🌈 Coloring & Ombre</h3>
                    <p>Ubah warna rambut Anda dengan teknik coloring terkini. Dari highlight halus hingga full color yang dramatis.</p>
                </div>
                <div class="card">
                    <h3>✨ Smoothing & Treatment</h3>
                    <p>Perawatan rambut mendalam untuk rambut yang lebih lembut, berkilau, dan sehat. Cocok untuk semua jenis rambut.</p>
                </div>
                <div class="card">
                    <h3>💅 Styling & Blow Dry</h3>
                    <p>Styling profesional untuk acara spesial atau daily look. Hasil yang tahan lama dan sempurna.</p>
                </div>
                <div class="card">
                    <h3>🧴 Deep Conditioning</h3>
                    <p>Kondisi rambut intensif untuk mengembalikan kelembaban dan kilau alami rambut Anda.</p>
                </div>
                <div class="card">
                    <h3>💇‍♀️ Perawatan Kulit Kepala</h3>
                    <p>Scrub dan treatment khusus untuk kulit kepala sehat dan mengurangi ketombe.</p>
                </div>
            </div>
        </section>

        <section id="proses" class="section">
            <h2>Cara Booking Mudah</h2>
            <p class="lead">Hanya 4 langkah sederhana untuk mendapatkan jadwal salon impian Anda</p>
            <div class="steps">
                <div class="step">
                    <div class="step-num">1</div>
                    <div>
                        <strong>📱 Daftar & Login</strong>
                        <p>Buat akun atau login ke platform kami untuk memulai.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">2</div>
                    <div>
                        <strong>🎨 Pilih Layanan</strong>
                        <p>Tentukan layanan dan stylist favorit yang ingin Anda gunakan.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">3</div>
                    <div>
                        <strong>📅 Pilih Waktu</strong>
                        <p>Lihat ketersediaan dan pilih tanggal serta jam yang tepat.</p>
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">4</div>
                    <div>
                        <strong>✅ Konfirmasi & Hadir</strong>
                        <p>Dapatkan konfirmasi dan pengingat. Hadir tepat waktu untuk treatment Anda.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section cta">
            <h3>Siap Tampil Beda dengan Salon D'Sisi?</h3>
            <p>Bergabunglah dengan ribuan pelanggan puas yang telah merasakan pengalaman salon mewah kami. Pesan sekarang dan dapatkan diskon khusus untuk pelanggan baru!</p>
            <a class="btn" href="{{ route('login') }}">🚀 Mulai Booking Sekarang</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Salon D'Sisi. ✨ Kecantikan Rambut Anda adalah Prioritas Kami ✨</p>
        <p style="margin-top: 8px; color: #8b7fb5;">Hubungi kami: +62 812-3456-7890 | info@salondsisi.com</p>
    </footer>
</body>
</html>
