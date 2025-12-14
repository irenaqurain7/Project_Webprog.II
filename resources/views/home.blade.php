<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salon Bliss | Booking Salon</title>
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
        body {
            font-family: Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }
        header {
            background: var(--card);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 10;
        }
        .nav {
            max-width: 1100px;
            margin: 0 auto;
            padding: 14px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .brand { font-weight: 800; font-size: 18px; }
        .nav-links { display: flex; gap: 14px; align-items: center; font-size: 14px; }
        .nav a { color: var(--muted); text-decoration: none; }
        .btn {
            padding: 10px 14px;
            border-radius: 10px;
            border: 1px solid var(--accent);
            background: var(--accent);
            color: white;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
        }
        .btn.secondary {
            background: transparent;
            color: var(--accent);
        }
        main { max-width: 1100px; margin: 0 auto; padding: 32px 20px 60px; }
        .hero { display: grid; gap: 18px; padding: 20px; background: var(--card); border: 1px solid var(--border); border-radius: 14px; margin-bottom: 28px; }
        .hero h1 { font-size: clamp(26px, 5vw, 36px); line-height: 1.2; }
        .hero p { color: var(--muted); }
        .hero-actions { display: flex; gap: 12px; flex-wrap: wrap; }
        .info { display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 14px; margin-top: 4px; }
        .info-item { background: var(--bg); border: 1px solid var(--border); border-radius: 10px; padding: 12px 14px; }
        .section { margin-top: 34px; }
        .section h2 { font-size: 20px; margin-bottom: 10px; }
        .section p.lead { color: var(--muted); margin-bottom: 16px; }
        .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); gap: 16px; }
        .card { background: var(--card); border: 1px solid var(--border); border-radius: 12px; padding: 16px; }
        .card h3 { margin-bottom: 6px; }
        .card p { color: var(--muted); font-size: 14px; }
        .steps { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 12px; }
        .step { background: var(--card); border: 1px solid var(--border); border-radius: 10px; padding: 12px; display: flex; gap: 10px; align-items: center; }
        .step-num { width: 28px; height: 28px; border-radius: 50%; background: var(--accent-2); color: white; display: grid; place-items: center; font-weight: 700; font-size: 13px; }
        .cta { margin-top: 36px; text-align: center; background: var(--card); border: 1px solid var(--border); border-radius: 12px; padding: 20px; }
        .cta p { color: var(--muted); margin: 6px 0 14px; }
        footer { text-align: center; color: var(--muted); font-size: 13px; padding: 24px 20px 32px; }
        @media (max-width: 640px) {
            .nav { flex-direction: column; align-items: flex-start; gap: 10px; }
            .hero-actions { flex-direction: column; align-items: stretch; }
            .btn { text-align: center; }
        }
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <div class="brand">Salon D'Sisi</div>
            <div class="nav-links">
                <a href="#layanan">Layanan</a>
                <a href="#proses">Cara kerja</a>
                <a href="#kontak">Kontak</a>
                <a class="btn secondary" href="{{ route('login') }}">Login</a>
                <a class="btn" href="{{ route('login') }}">Mulai Booking</a>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div>
                <h1>Booking hairstyling &amp; coloring jadi mudah.</h1>
                <p>Pesan tanpa antre, dapatkan pengingat otomatis, dan nikmati layanan styling serta pewarnaan rambut yang rapi dan tepat waktu.</p>
            </div>
            <div class="hero-actions">
                <a class="btn" href="{{ route('login') }}">Pesan Sekarang</a>
                <a class="btn secondary" href="#layanan">Lihat Layanan</a>
            </div>
            <div class="info">
                <div class="info-item"><strong>12K+</strong><br>Booking terselesaikan</div>
                <div class="info-item"><strong>4.9/5</strong><br>Rating pelanggan</div>
                <div class="info-item"><strong>Stylist pilihan</strong><br>Pilih sesuai kebutuhanmu</div>
            </div>
        </section>

        <section id="layanan" class="section">
            <h2>Layanan hairstyling &amp; coloring</h2>
            <p class="lead">Pilih paket styling, potong, blow, dan pewarnaan rambut—semua bisa dijadwalkan online.</p>
            <div class="cards">
                <div class="card">
                    <h3>Styling Harian</h3>
                    <p>Blow, curling, atau straightening untuk tampilan rapi setiap hari.</p>
                </div>
                <div class="card">
                    <h3>Haircut &amp; Treatment</h3>
                    <p>Potong rambut plus perawatan dasar untuk menjaga rambut sehat.</p>
                </div>
                <div class="card">
                    <h3>Coloring &amp; Toner</h3>
                    <p>Cat full, highlight, balayage, atau toner untuk hasil warna optimal.</p>
                </div>
            </div>
        </section>

        <section id="proses" class="section">
            <h2>Cara kerja</h2>
            <p class="lead">Hanya beberapa langkah untuk mengamankan jadwalmu.</p>
            <div class="steps">
                <div class="step">
                    <div class="step-num">1</div>
                    <div>
                        <strong>Pilih layanan</strong>
                        <div>Pilih layanan dan stylist favorit.</div>
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">2</div>
                    <div>
                        <strong>Tentukan jadwal</strong>
                        <div>Pilih tanggal dan jam yang sesuai tanpa antre.</div>
                    </div>
                </div>
                <div class="step">
                    <div class="step-num">3</div>
                    <div>
                        <strong>Konfirmasi &amp; hadir</strong>
                        <div>Terima pengingat otomatis dan datang tepat waktu.</div>
                    </div>
                </div>
            </div>
        </section>

        <section id="kontak" class="section cta">
            <h2>Siap tampil prima?</h2>
            <p>Mulai booking sekarang dan nikmati pengalaman salon yang lebih teratur.</p>
            <a class="btn" href="{{ route('login') }}">Login untuk Booking</a>
            <p style="margin-top: 10px; color: var(--muted);">Butuh bantuan? Hubungi kami di 0800-123-456 atau email halo@salonbliss.id</p>
        </section>
    </main>

    <footer>
        &copy; {{ date('Y') }} Salon Bliss. Semua hak dilindungi.
    </footer>
</body>
</html>
