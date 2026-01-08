<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Galaxy Salon</title>
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
        
        .nav-actions {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        
        .user-info {
            color: #c9a6e8;
            font-size: 14px;
        }
        
        .btn-logout {
            padding: 8px 16px;
            border-radius: 20px;
            border: 2px solid #a855f7;
            background: transparent;
            color: #a855f7;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .btn-logout:hover {
            background: rgba(168, 85, 247, 0.1);
            border-color: #ec4899;
            color: #ec4899;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            position: relative;
            z-index: 2;
        }
        
        .welcome-section {
            background: rgba(59, 30, 100, 0.3);
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 40px;
            backdrop-filter: blur(10px);
            animation: slideIn 0.6s ease-out;
        }
        
        .welcome-title {
            font-size: 28px;
            margin-bottom: 10px;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .welcome-subtitle {
            color: #c9a6e8;
            margin-bottom: 20px;
        }
        
        .btn-primary {
            padding: 12px 24px;
            border-radius: 8px;
            border: none;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            color: white;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.3);
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 25px rgba(168, 85, 247, 0.6);
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .stat-card {
            background: rgba(139, 92, 246, 0.1);
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 12px;
            padding: 20px;
            text-align: center;
            animation: slideIn 0.6s ease-out;
        }
        
        .stat-number {
            font-size: 28px;
            font-weight: 700;
            color: #f0abfc;
            margin-bottom: 8px;
        }
        
        .stat-label {
            color: #c9a6e8;
            font-size: 14px;
        }
        
        .section-title {
            font-size: 24px;
            margin-bottom: 20px;
            color: #f0abfc;
            font-weight: 700;
        }
        
        .bookings-list {
            display: grid;
            gap: 16px;
        }
        
        .booking-card {
            background: rgba(59, 30, 100, 0.3);
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 12px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            transition: all 0.3s;
            animation: slideIn 0.6s ease-out;
        }
        
        .booking-card:hover {
            background: rgba(59, 30, 100, 0.5);
            border-color: rgba(168, 85, 247, 0.6);
            transform: translateY(-3px);
            box-shadow: 0 0 20px rgba(168, 85, 247, 0.2);
        }
        
        .booking-info h3 {
            color: #f0abfc;
            margin-bottom: 8px;
        }
        
        .booking-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 12px;
        }
        
        .detail {
            color: #c9a6e8;
            font-size: 13px;
        }
        
        .detail-label {
            color: #8b7fb5;
            font-size: 12px;
            margin-bottom: 2px;
        }
        
        .status {
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 700;
            white-space: nowrap;
        }
        
        .status-pending {
            background: rgba(249, 115, 22, 0.2);
            border: 1px solid rgba(249, 115, 22, 0.5);
            color: #fed7aa;
        }
        
        .status-confirmed {
            background: rgba(34, 197, 94, 0.2);
            border: 1px solid rgba(34, 197, 94, 0.5);
            color: #86efac;
        }
        
        .status-completed {
            background: rgba(59, 130, 246, 0.2);
            border: 1px solid rgba(59, 130, 246, 0.5);
            color: #93c5fd;
        }
        
        .status-cancelled {
            background: rgba(239, 68, 68, 0.2);
            border: 1px solid rgba(239, 68, 68, 0.5);
            color: #fca5a5;
        }
        
        .booking-actions {
            display: flex;
            gap: 10px;
        }
        
        .btn-small {
            padding: 6px 12px;
            border-radius: 6px;
            border: 1px solid rgba(168, 85, 247, 0.4);
            background: transparent;
            color: #a855f7;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            text-decoration: none;
        }
        
        .btn-small:hover {
            background: rgba(168, 85, 247, 0.1);
            border-color: #a855f7;
            color: #f0abfc;
        }
        
        .empty-state {
            text-align: center;
            padding: 40px;
            background: rgba(59, 30, 100, 0.2);
            border: 2px dashed rgba(168, 85, 247, 0.3);
            border-radius: 12px;
            color: #c9a6e8;
        }
        
        .empty-emoji {
            font-size: 48px;
            margin-bottom: 16px;
        }
        
        .empty-text {
            margin-bottom: 20px;
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
        
        @media (max-width: 768px) {
            .booking-card {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .booking-details {
                width: 100%;
            }
            
            .status {
                align-self: flex-start;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <div class="brand">✨ Galaxy Salon</div>
            <div class="nav-actions">
                <div class="user-info">Halo, <strong>Sinta Kusuma</strong></div>
                <form method="POST" action="" style="display: inline;">
                    <button type="submit" class="btn-logout">Logout</button>
                </form>
            </div>
        </div>
    </header>

    <div class="container">
        <!-- Welcome Section -->
        <div class="welcome-section">
            <h1 class="welcome-title">👋 Selamat Datang Kembali!</h1>
            <p class="welcome-subtitle">Kelola booking salon Anda dengan mudah dan dapatkan layanan premium dari Galaxy Salon.</p>
            <a href="booking.html" class="btn-primary">🌟 Pesan Layanan Baru</a>
        </div>

        <!-- Stats Section -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">5</div>
                <div class="stat-label">Total Booking</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">3</div>
                <div class="stat-label">Selesai</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">1</div>
                <div class="stat-label">Mendatang</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">⭐ 4.9</div>
                <div class="stat-label">Rating Anda</div>
            </div>
        </div>

        <!-- Upcoming Bookings -->
        <div class="section-title">📅 Booking Mendatang</div>
        <div class="bookings-list">
            <div class="booking-card">
                <div class="booking-info">
                    <h3>💇 Potong Rambut + Coloring</h3>
                    <div class="booking-details">
                        <div>
                            <div class="detail-label">Tanggal</div>
                            <div class="detail">Sabtu, 22 Desember 2024</div>
                        </div>
                        <div>
                            <div class="detail-label">Jam</div>
                            <div class="detail">14:00 - 15:30</div>
                        </div>
                        <div>
                            <div class="detail-label">Stylist</div>
                            <div class="detail">Rina Putri</div>
                        </div>
                        <div>
                            <div class="detail-label">Harga</div>
                            <div class="detail">Rp 300.000</div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px; align-items: flex-end;">
                    <span class="status status-confirmed">✓ Terkonfirmasi</span>
                    <div class="booking-actions">
                        <a href="#" class="btn-small">Edit</a>
                        <a href="#" class="btn-small">Batal</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Past Bookings -->
        <div class="section-title" style="margin-top: 40px;">📜 Riwayat Booking</div>
        <div class="bookings-list">
            <div class="booking-card">
                <div class="booking-info">
                    <h3>✨ Treatment Rambut Keratin</h3>
                    <div class="booking-details">
                        <div>
                            <div class="detail-label">Tanggal</div>
                            <div class="detail">Jumat, 15 Desember 2024</div>
                        </div>
                        <div>
                            <div class="detail-label">Jam</div>
                            <div class="detail">10:00 - 12:00</div>
                        </div>
                        <div>
                            <div class="detail-label">Stylist</div>
                            <div class="detail">Rina Putri</div>
                        </div>
                        <div>
                            <div class="detail-label">Harga</div>
                            <div class="detail">Rp 250.000</div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px; align-items: flex-end;">
                    <span class="status status-completed">✓ Selesai</span>
                    <div class="booking-actions">
                        <a href="#" class="btn-small">Review</a>
                        <a href="#" class="btn-small">Pesan Ulang</a>
                    </div>
                </div>
            </div>

            <div class="booking-card">
                <div class="booking-info">
                    <h3>💅 Styling Rambut</h3>
                    <div class="booking-details">
                        <div>
                            <div class="detail-label">Tanggal</div>
                            <div class="detail">Minggu, 8 Desember 2024</div>
                        </div>
                        <div>
                            <div class="detail-label">Jam</div>
                            <div class="detail">16:00 - 17:00</div>
                        </div>
                        <div>
                            <div class="detail-label">Stylist</div>
                            <div class="detail">Sinta Kusuma</div>
                        </div>
                        <div>
                            <div class="detail-label">Harga</div>
                            <div class="detail">Rp 100.000</div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px; align-items: flex-end;">
                    <span class="status status-completed">✓ Selesai</span>
                    <div class="booking-actions">
                        <a href="#" class="btn-small">Review</a>
                        <a href="#" class="btn-small">Pesan Ulang</a>
                    </div>
                </div>
            </div>

            <div class="booking-card">
                <div class="booking-info">
                    <h3>🌈 Coloring Highlight</h3>
                    <div class="booking-details">
                        <div>
                            <div class="detail-label">Tanggal</div>
                            <div class="detail">Rabu, 1 Desember 2024</div>
                        </div>
                        <div>
                            <div class="detail-label">Jam</div>
                            <div class="detail">11:00 - 13:00</div>
                        </div>
                        <div>
                            <div class="detail-label">Stylist</div>
                            <div class="detail">Dini Sartika</div>
                        </div>
                        <div>
                            <div class="detail-label">Harga</div>
                            <div class="detail">Rp 350.000</div>
                        </div>
                    </div>
                </div>
                <div style="display: flex; flex-direction: column; gap: 8px; align-items: flex-end;">
                    <span class="status status-completed">✓ Selesai</span>
                    <div class="booking-actions">
                        <a href="#" class="btn-small">Review</a>
                        <a href="#" class="btn-small">Pesan Ulang</a>
                    </div>
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
