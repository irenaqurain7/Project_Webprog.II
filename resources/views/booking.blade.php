<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Layanan | Galaxy Salon</title>
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
        
        .page-title {
            font-size: 32px;
            margin-bottom: 30px;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .booking-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .booking-form {
            background: rgba(59, 30, 100, 0.3);
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 15px;
            padding: 24px;
            backdrop-filter: blur(10px);
            height: fit-content;
            animation: slideIn 0.6s ease-out;
        }
        
        .form-group {
            margin-bottom: 16px;
        }
        
        .form-group label {
            display: block;
            font-weight: 600;
            margin-bottom: 8px;
            font-size: 14px;
            color: #e0e0e0;
        }
        
        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 8px;
            background: rgba(139, 92, 246, 0.1);
            color: #e0e0e0;
            font-family: inherit;
            font-size: 14px;
            transition: all 0.3s;
        }
        
        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #a855f7;
            background: rgba(139, 92, 246, 0.2);
            box-shadow: 0 0 10px rgba(168, 85, 247, 0.3);
        }
        
        .form-group select {
            cursor: pointer;
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 80px;
        }
        
        .btn-submit {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            color: white;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 0 15px rgba(168, 85, 247, 0.3);
        }
        
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 0 25px rgba(168, 85, 247, 0.6);
        }
        
        .services-section {
            background: rgba(59, 30, 100, 0.3);
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 15px;
            padding: 24px;
            backdrop-filter: blur(10px);
        }
        
        .services-title {
            font-size: 18px;
            margin-bottom: 20px;
            color: #f0abfc;
            font-weight: 700;
        }
        
        .service-cards {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 12px;
        }
        
        .service-card {
            background: rgba(139, 92, 246, 0.1);
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 10px;
            padding: 16px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            animation: slideIn 0.4s ease-out;
        }
        
        .service-card:hover {
            background: rgba(139, 92, 246, 0.3);
            border-color: #a855f7;
            transform: translateY(-3px);
            box-shadow: 0 0 20px rgba(168, 85, 247, 0.3);
        }
        
        .service-card.selected {
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.3), rgba(236, 72, 153, 0.3));
            border-color: #a855f7;
            box-shadow: 0 0 20px rgba(168, 85, 247, 0.4);
        }
        
        .service-emoji {
            font-size: 32px;
            margin-bottom: 8px;
        }
        
        .service-name {
            font-size: 13px;
            font-weight: 600;
            color: #e0e0e0;
        }
        
        .available-slots {
            background: rgba(59, 30, 100, 0.3);
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 15px;
            padding: 24px;
            margin-top: 30px;
            backdrop-filter: blur(10px);
        }
        
        .slots-title {
            font-size: 18px;
            margin-bottom: 20px;
            color: #f0abfc;
            font-weight: 700;
        }
        
        .time-slots {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(90px, 1fr));
            gap: 10px;
        }
        
        .time-slot {
            background: rgba(139, 92, 246, 0.1);
            border: 2px solid rgba(168, 85, 247, 0.3);
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 13px;
            font-weight: 600;
        }
        
        .time-slot:hover {
            background: rgba(139, 92, 246, 0.3);
            border-color: #a855f7;
        }
        
        .time-slot.selected {
            background: linear-gradient(135deg, #a855f7, #ec4899);
            border-color: #a855f7;
            color: white;
        }
        
        .time-slot:disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }
        
        .confirmation-summary {
            background: rgba(59, 30, 100, 0.5);
            border: 2px solid rgba(168, 85, 247, 0.4);
            border-radius: 15px;
            padding: 20px;
            margin-top: 30px;
        }
        
        .summary-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 12px;
            padding-bottom: 12px;
            border-bottom: 1px solid rgba(168, 85, 247, 0.2);
        }
        
        .summary-label {
            color: #c9a6e8;
        }
        
        .summary-value {
            color: #f0abfc;
            font-weight: 700;
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
            .booking-grid {
                grid-template-columns: 1fr;
            }
            
            .service-cards {
                grid-template-columns: repeat(auto-fill, minmax(100px, 1fr));
            }
            
            .time-slots {
                grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="nav">
            <div class="brand">✨ Galaxy Salon</div>
            <div class="nav-actions">
                <div class="user-info">Halo, <strong>Customer</strong></div>
                <form method="POST" action="" style="display: inline;">
                    <button type="submit" class="btn-logout">Logout</button>
                </form>
            </div>
        </div>
    </header>

    <div class="container">
        <h1 class="page-title">📅 Pesan Layanan Salon Anda</h1>
        
        <div class="booking-grid">
            <!-- Booking Form -->
            <form class="booking-form" method="POST" action="">
                <h3 style="color: #f0abfc; margin-bottom: 20px;">📋 Detail Booking</h3>
                
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="name" placeholder="Masukkan nama Anda" required>
                </div>
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email Anda" required>
                </div>
                
                <div class="form-group">
                    <label>Nomor Telepon</label>
                    <input type="tel" name="phone" placeholder="+62 8xx xxxx xxxx" required>
                </div>
                
                <div class="form-group">
                    <label>Tanggal Booking</label>
                    <input type="date" name="date" required>
                </div>
                
                <div class="form-group">
                    <label>Catatan Khusus</label>
                    <textarea name="notes" placeholder="Jelaskan keinginan styling atau perawatan Anda..."></textarea>
                </div>
                
                <button type="submit" class="btn-submit">🎉 Konfirmasi Booking</button>
            </form>

            <!-- Services Display -->
            <div>
                <div class="services-section">
                    <div class="services-title">🎨 Pilih Layanan</div>
                    <div class="service-cards">
                        <div class="service-card" data-service="potong">
                            <div class="service-emoji">💇</div>
                            <div class="service-name">Potong Rambut</div>
                        </div>
                        <div class="service-card" data-service="coloring">
                            <div class="service-emoji">🌈</div>
                            <div class="service-name">Coloring</div>
                        </div>
                        <div class="service-card" data-service="smoothing">
                            <div class="service-emoji">✨</div>
                            <div class="service-name">Smoothing</div>
                        </div>
                        <div class="service-card" data-service="styling">
                            <div class="service-emoji">💅</div>
                            <div class="service-name">Styling</div>
                        </div>
                        <div class="service-card" data-service="treatment">
                            <div class="service-emoji">🧴</div>
                            <div class="service-name">Treatment</div>
                        </div>
                        <div class="service-card" data-service="kulit-kepala">
                            <div class="service-emoji">💆</div>
                            <div class="service-name">Kulit Kepala</div>
                        </div>
                    </div>
                </div>

                <div class="available-slots">
                    <div class="slots-title">🕐 Jam Tersedia</div>
                    <div class="time-slots">
                        <button class="time-slot" onclick="selectTime(this)">09:00</button>
                        <button class="time-slot" onclick="selectTime(this)">10:00</button>
                        <button class="time-slot" onclick="selectTime(this)">11:00</button>
                        <button class="time-slot" onclick="selectTime(this)">12:00</button>
                        <button class="time-slot" onclick="selectTime(this)">14:00</button>
                        <button class="time-slot" onclick="selectTime(this)">15:00</button>
                        <button class="time-slot" onclick="selectTime(this)">16:00</button>
                        <button class="time-slot" onclick="selectTime(this)">17:00</button>
                    </div>
                </div>

                <div class="confirmation-summary">
                    <div class="summary-item">
                        <span class="summary-label">Layanan:</span>
                        <span class="summary-value" id="summary-service">-</span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">Jam:</span>
                        <span class="summary-value" id="summary-time">-</span>
                    </div>
                    <div class="summary-item">
                        <span class="summary-label">Durasi:</span>
                        <span class="summary-value">60 menit</span>
                    </div>
                    <div class="summary-item" style="border-bottom: none;">
                        <span class="summary-label">Harga:</span>
                        <span class="summary-value">Rp 150.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Galaxy Salon. ✨ Kecantikan Rambut Anda adalah Prioritas Kami ✨</p>
        <p style="margin-top: 8px;">Hubungi kami: +62 812-3456-7890 | info@galaxysalon.com</p>
    </footer>

    <script>
        // Select service
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('click', function() {
                document.querySelectorAll('.service-card').forEach(c => c.classList.remove('selected'));
                this.classList.add('selected');
                document.getElementById('summary-service').textContent = this.querySelector('.service-name').textContent;
            });
        });

        // Select time
        function selectTime(element) {
            document.querySelectorAll('.time-slot').forEach(slot => slot.classList.remove('selected'));
            element.classList.add('selected');
            document.getElementById('summary-time').textContent = element.textContent;
        }
    </script>
</body>
</html>
