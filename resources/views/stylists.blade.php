<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stylists | Galaxy Salon</title>
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
        
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes cardHover {
            from {
                transform: translateY(0);
                box-shadow: 0 0 20px rgba(168, 85, 247, 0.2);
            }
            to {
                transform: translateY(-10px);
                box-shadow: 0 0 40px rgba(168, 85, 247, 0.4);
            }
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
            color: #e0e0e0;
            min-height: 100vh;
            position: relative;
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
        
        header {
            background: rgba(30, 10, 60, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 2px solid rgba(168, 85, 247, 0.5);
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
            background: linear-gradient(135deg, #a855f7, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: glow 2s ease-in-out infinite;
        }
        
        .nav-links {
            display: flex;
            gap: 20px;
            align-items: center;
        }
        
        .nav-links a {
            color: #e0e0e0;
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .nav-links a:hover {
            color: #a855f7;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
            z-index: 2;
        }
        
        .page-header {
            text-align: center;
            margin-bottom: 50px;
        }
        
        .page-title {
            font-size: 36px;
            margin-bottom: 12px;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .page-subtitle {
            color: #c9a6e8;
            font-size: 16px;
        }
        
        .filter-section {
            background: rgba(59, 30, 100, 0.3);
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            align-items: center;
        }
        
        .filter-label {
            color: #c9a6e8;
            font-weight: 600;
        }
        
        .filter-select {
            padding: 8px 12px;
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 8px;
            background: rgba(139, 92, 246, 0.1);
            color: #e0e0e0;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .filter-select:focus {
            outline: none;
            border-color: #a855f7;
            background: rgba(139, 92, 246, 0.2);
        }
        
        .stylists-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
        }
        
        .stylist-card {
            background: rgba(59, 30, 100, 0.3);
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.4s ease;
            animation: slideIn 0.6s ease-out;
            cursor: pointer;
        }
        
        .stylist-card:hover {
            background: rgba(59, 30, 100, 0.5);
            border-color: rgba(168, 85, 247, 0.6);
            transform: translateY(-10px);
            box-shadow: 0 0 40px rgba(168, 85, 247, 0.4);
        }
        
        .stylist-avatar {
            width: 100%;
            height: 250px;
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.2), rgba(236, 72, 153, 0.2));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 80px;
            border-bottom: 2px solid rgba(168, 85, 247, 0.3);
        }
        
        .stylist-info {
            padding: 20px;
        }
        
        .stylist-name {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 4px;
            color: #f0abfc;
        }
        
        .stylist-specialization {
            font-size: 13px;
            color: #a855f7;
            margin-bottom: 12px;
            font-weight: 600;
        }
        
        .stylist-bio {
            font-size: 13px;
            color: #c9a6e8;
            margin-bottom: 16px;
            line-height: 1.5;
        }
        
        .stylist-rating {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 16px;
            color: #f0abfc;
            font-size: 14px;
            font-weight: 600;
        }
        
        .stars {
            color: #fbbf24;
        }
        
        .stylist-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid rgba(168, 85, 247, 0.2);
        }
        
        .stat {
            text-align: center;
            color: #c9a6e8;
            font-size: 12px;
        }
        
        .stat-number {
            color: #f0abfc;
            font-size: 16px;
            font-weight: 700;
        }
        
        .stylist-services {
            margin-bottom: 16px;
        }
        
        .services-label {
            color: #8b7fb5;
            font-size: 11px;
            text-transform: uppercase;
            margin-bottom: 6px;
            display: block;
        }
        
        .service-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 6px;
        }
        
        .service-tag {
            background: rgba(168, 85, 247, 0.2);
            border: 1px solid rgba(168, 85, 247, 0.4);
            color: #f0abfc;
            font-size: 11px;
            padding: 4px 8px;
            border-radius: 4px;
        }
        
        .btn-book {
            width: 100%;
            padding: 10px;
            border: 2px solid #a855f7;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            color: white;
            font-weight: 700;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
            display: block;
            text-align: center;
        }
        
        .btn-book:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 20px rgba(168, 85, 247, 0.4);
        }
        
        footer {
            text-align: center;
            color: #8b7fb5;
            font-size: 13px;
            padding: 30px 20px;
            border-top: 1px solid rgba(168, 85, 247, 0.2);
            position: relative;
            z-index: 2;
            margin-top: 50px;
        }
        
        @media (max-width: 768px) {
            .page-title {
                font-size: 28px;
            }
            
            .stylists-grid {
                grid-template-columns: 1fr;
            }
            
            .filter-section {
                flex-direction: column;
                align-items: flex-start;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <div class="brand">✨ Galaxy Salon</div>
            <div class="nav-links">
                <a href="home.html">Beranda</a>
                <a href="stylists.html">Stylists</a>
                <a href="dashboard.html">Dashboard</a>
                <a href="booking.html" style="color: #a855f7; font-weight: 700;">🌟 Booking</a>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="page-header">
            <h1 class="page-title">✨ Tim Stylist Profesional Kami</h1>
            <p class="page-subtitle">Pilih stylist favorit Anda dan dapatkan layanan terbaik</p>
        </div>

        <div class="filter-section">
            <span class="filter-label">Filter:</span>
            <select class="filter-select">
                <option>Semua Layanan</option>
                <option>Potong Rambut</option>
                <option>Coloring</option>
                <option>Smoothing</option>
                <option>Styling</option>
            </select>
            <select class="filter-select">
                <option>Semua Rating</option>
                <option>4.8 - 5.0 ⭐</option>
                <option>4.5 - 4.8 ⭐</option>
                <option>4.0 - 4.5 ⭐</option>
            </select>
        </div>

        <div class="stylists-grid">
            <!-- Stylist Card 1 -->
            <div class="stylist-card">
                <div class="stylist-avatar">👩‍🦰</div>
                <div class="stylist-info">
                    <div class="stylist-name">Rina Putri</div>
                    <div class="stylist-specialization">COLORING & STYLING EXPERT</div>
                    <div class="stylist-bio">Berpengalaman 8 tahun di industri salon. Ahli dalam teknik coloring modern dan styling untuk acara spesial.</div>
                    <div class="stylist-rating">
                        <span class="stars">⭐⭐⭐⭐⭐</span>
                        <span>4.9 (156 reviews)</span>
                    </div>
                    <div class="stylist-stats">
                        <div class="stat">
                            <div class="stat-number">450+</div>
                            <div>Klien Puas</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">8 Th</div>
                            <div>Pengalaman</div>
                        </div>
                    </div>
                    <div class="stylist-services">
                        <span class="services-label">Keahlian</span>
                        <div class="service-tags">
                            <span class="service-tag">🌈 Coloring</span>
                            <span class="service-tag">💅 Styling</span>
                            <span class="service-tag">✨ Treatment</span>
                        </div>
                    </div>
                    <a href="booking.html" class="btn-book">Pesan Sekarang</a>
                </div>
            </div>

            <!-- Stylist Card 2 -->
            <div class="stylist-card">
                <div class="stylist-avatar">👨‍🦱</div>
                <div class="stylist-info">
                    <div class="stylist-name">Budi Santoso</div>
                    <div class="stylist-specialization">BARBER & HAIRSTYLE</div>
                    <div class="stylist-bio">Spesialis potong rambut pria modern. Menguasai berbagai teknik fade, undercut, dan styling rambut kontemporer.</div>
                    <div class="stylist-rating">
                        <span class="stars">⭐⭐⭐⭐⭐</span>
                        <span>4.8 (198 reviews)</span>
                    </div>
                    <div class="stylist-stats">
                        <div class="stat">
                            <div class="stat-number">520+</div>
                            <div>Klien Puas</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">10 Th</div>
                            <div>Pengalaman</div>
                        </div>
                    </div>
                    <div class="stylist-services">
                        <span class="services-label">Keahlian</span>
                        <div class="service-tags">
                            <span class="service-tag">💇 Potong</span>
                            <span class="service-tag">💅 Styling</span>
                            <span class="service-tag">🧴 Treatment</span>
                        </div>
                    </div>
                    <a href="booking.html" class="btn-book">Pesan Sekarang</a>
                </div>
            </div>

            <!-- Stylist Card 3 -->
            <div class="stylist-card">
                <div class="stylist-avatar">👩‍🦱</div>
                <div class="stylist-info">
                    <div class="stylist-name">Dini Sartika</div>
                    <div class="stylist-specialization">SMOOTHING & TREATMENT</div>
                    <div class="stylist-bio">Ahli dalam perawatan rambut mendalam. Menggunakan produk premium dan teknik terkini untuk hasil maksimal.</div>
                    <div class="stylist-rating">
                        <span class="stars">⭐⭐⭐⭐⭐</span>
                        <span>4.9 (172 reviews)</span>
                    </div>
                    <div class="stylist-stats">
                        <div class="stat">
                            <div class="stat-number">380+</div>
                            <div>Klien Puas</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">7 Th</div>
                            <div>Pengalaman</div>
                        </div>
                    </div>
                    <div class="stylist-services">
                        <span class="services-label">Keahlian</span>
                        <div class="service-tags">
                            <span class="service-tag">✨ Smoothing</span>
                            <span class="service-tag">🧴 Treatment</span>
                            <span class="service-tag">💇 Potong</span>
                        </div>
                    </div>
                    <a href="booking.html" class="btn-book">Pesan Sekarang</a>
                </div>
            </div>

            <!-- Stylist Card 4 -->
            <div class="stylist-card">
                <div class="stylist-avatar">👩‍🦳</div>
                <div class="stylist-info">
                    <div class="stylist-name">Sita Kusuma</div>
                    <div class="stylist-specialization">ALL AROUND PROFESSIONAL</div>
                    <div class="stylist-bio">Stylist serba bisa dengan keahlian lengkap. Dari potong, coloring, hingga treatment, semua dikerjakan dengan sempurna.</div>
                    <div class="stylist-rating">
                        <span class="stars">⭐⭐⭐⭐⭐</span>
                        <span>4.9 (215 reviews)</span>
                    </div>
                    <div class="stylist-stats">
                        <div class="stat">
                            <div class="stat-number">680+</div>
                            <div>Klien Puas</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">12 Th</div>
                            <div>Pengalaman</div>
                        </div>
                    </div>
                    <div class="stylist-services">
                        <span class="services-label">Keahlian</span>
                        <div class="service-tags">
                            <span class="service-tag">🌈 Coloring</span>
                            <span class="service-tag">💇 Potong</span>
                            <span class="service-tag">✨ Smoothing</span>
                        </div>
                    </div>
                    <a href="booking.html" class="btn-book">Pesan Sekarang</a>
                </div>
            </div>

            <!-- Stylist Card 5 -->
            <div class="stylist-card">
                <div class="stylist-avatar">👨‍🦲</div>
                <div class="stylist-info">
                    <div class="stylist-name">Agus Wijaya</div>
                    <div class="stylist-specialization">DESIGNER RAMBUT</div>
                    <div class="stylist-bio">Creative hair designer dengan passion tinggi. Selalu mengikuti trend terkini dan menciptakan gaya unik sesuai karakter klien.</div>
                    <div class="stylist-rating">
                        <span class="stars">⭐⭐⭐⭐⭐</span>
                        <span>4.8 (189 reviews)</span>
                    </div>
                    <div class="stylist-stats">
                        <div class="stat">
                            <div class="stat-number">420+</div>
                            <div>Klien Puas</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">6 Th</div>
                            <div>Pengalaman</div>
                        </div>
                    </div>
                    <div class="stylist-services">
                        <span class="services-label">Keahlian</span>
                        <div class="service-tags">
                            <span class="service-tag">💅 Styling</span>
                            <span class="service-tag">🌈 Coloring</span>
                            <span class="service-tag">💇 Potong</span>
                        </div>
                    </div>
                    <a href="booking.html" class="btn-book">Pesan Sekarang</a>
                </div>
            </div>

            <!-- Stylist Card 6 -->
            <div class="stylist-card">
                <div class="stylist-avatar">👩‍🦱</div>
                <div class="stylist-info">
                    <div class="stylist-name">Novi Ramadani</div>
                    <div class="stylist-specialization">BRIDAL & SPECIAL OCCASIONS</div>
                    <div class="stylist-bio">Spesialis styling untuk acara-acara spesial. Menciptakan gaya sempurna untuk hari istimewa Anda.</div>
                    <div class="stylist-rating">
                        <span class="stars">⭐⭐⭐⭐⭐</span>
                        <span>4.9 (143 reviews)</span>
                    </div>
                    <div class="stylist-stats">
                        <div class="stat">
                            <div class="stat-number">290+</div>
                            <div>Klien Puas</div>
                        </div>
                        <div class="stat">
                            <div class="stat-number">5 Th</div>
                            <div>Pengalaman</div>
                        </div>
                    </div>
                    <div class="stylist-services">
                        <span class="services-label">Keahlian</span>
                        <div class="service-tags">
                            <span class="service-tag">💅 Styling</span>
                            <span class="service-tag">✨ Special</span>
                            <span class="service-tag">💇 Potong</span>
                        </div>
                    </div>
                    <a href="booking.html" class="btn-book">Pesan Sekarang</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Galaxy Salon. ✨ Kecantikan Rambut Anda adalah Prioritas Kami ✨</p>
        <p style="margin-top: 8px;">Hubungi kami: +62 812-3456-7890 | info@galaxysalon.com</p>
    </footer>
</body>
</html>
