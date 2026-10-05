<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Mahasiswa</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f7fb;
            color: #1f2937;
        }

        .navbar {
            background: #111827;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            color: white;
            font-size: 22px;
            font-weight: bold;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 8px;
            transition: 0.3s;
        }

        .nav-link:hover {
            background: #374151;
        }

        .hero {
            min-height: 75vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 40px 20px;
        }

        .hero-content {
            max-width: 750px;
        }

        .badge {
            display: inline-block;
            background: #e5e7eb;
            color: #374151;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #111827;
        }

        h1 span {
            color: #2563eb;
        }

        .description {
            font-size: 18px;
            line-height: 1.7;
            color: #6b7280;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 14px 25px;
            border-radius: 10px;
            font-weight: bold;
            transition: 0.3s;
        }

        .button:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }

        .info {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 45px;
        }

        .card {
            background: white;
            width: 200px;
            padding: 25px 20px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .card h3 {
            font-size: 28px;
            color: #2563eb;
            margin-bottom: 8px;
        }

        .card p {
            color: #6b7280;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #6b7280;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 36px;
            }

            .navbar {
                padding: 15px 5%;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">Mahasiswa App</div>

        <a href="{{ route('mahasiswa.index') }}" class="nav-link">
            Data Mahasiswa
        </a>
    </nav>

    <section class="hero">
        <div class="hero-content">

            <div class="badge">
                Laravel 12 • Sistem Informasi
            </div>

            <h1>
                Sistem Informasi <span>Mahasiswa</span>
            </h1>

            <p class="description">
                Selamat datang di Sistem Informasi Mahasiswa.
                Aplikasi ini digunakan untuk mengelola data mahasiswa
                dengan lebih mudah, cepat, dan terstruktur.
            </p>

            <a href="{{ route('mahasiswa.index') }}" class="button">
                Kelola Data Mahasiswa →
            </a>

            <div class="info">

                <div class="card">
                    <h3>CRUD</h3>
                    <p>Kelola data mahasiswa</p>
                </div>

                <div class="card">
                    <h3>MySQL</h3>
                    <p>Database terintegrasi</p>
                </div>

                <div class="card">
                    <h3>Laravel</h3>
                    <p>Framework Laravel 12</p>
                </div>

            </div>

        </div>
    </section>

    <footer>
        © 2026 Sistem Informasi Mahasiswa
    </footer>

</body>
</html>