<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mahasiswa App</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            min-height: 100vh;
            color: white;
            background: linear-gradient(135deg, #4f46e5, #7c3aed, #2563eb);
            background-size: 300% 300%;
            animation: gradient 10s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        /* NAVBAR */

        .navbar {
            width: 100%;
            padding: 20px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;

            background: rgba(0, 0, 0, 0.20);
            backdrop-filter: blur(15px);

            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        }

        .logo {
            font-size: 23px;
            font-weight: bold;
        }

        .logo span {
            color: #c4b5fd;
        }

        .nav-button {
            text-decoration: none;
            color: white;

            padding: 11px 20px;

            border-radius: 30px;

            background: rgba(255, 255, 255, 0.15);

            border: 1px solid rgba(255, 255, 255, 0.3);

            transition: 0.3s;
        }

        .nav-button:hover {
            background: white;
            color: #4f46e5;
            transform: translateY(-2px);
        }

        /* HERO */

        .hero {
            min-height: calc(100vh - 75px);

            display: flex;
            justify-content: center;
            align-items: center;

            text-align: center;

            padding: 70px 20px;
        }

        .content {
            width: 100%;
            max-width: 950px;
        }

        /* BADGE */

        .badge {
            display: inline-block;

            padding: 10px 20px;

            margin-bottom: 25px;

            border-radius: 30px;

            background: rgba(255, 255, 255, 0.15);

            border: 1px solid rgba(255, 255, 255, 0.3);

            backdrop-filter: blur(10px);

            font-size: 14px;
            font-weight: bold;
        }

        /* TITLE */

        h1 {
            font-size: 60px;

            line-height: 1.15;

            margin-bottom: 25px;

            font-weight: 800;

            text-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        h1 span {
            color: #ddd6fe;
        }

        /* DESCRIPTION */

        .description {
            max-width: 700px;

            margin: auto;

            font-size: 18px;

            line-height: 1.8;

            color: rgba(255, 255, 255, 0.85);

            margin-bottom: 35px;
        }

        /* MAIN BUTTON */

        .main-button {
            display: inline-block;

            text-decoration: none;

            background: white;

            color: #4f46e5;

            padding: 15px 30px;

            border-radius: 12px;

            font-weight: bold;

            font-size: 16px;

            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);

            transition: 0.3s;
        }

        .main-button:hover {
            transform: translateY(-5px) scale(1.02);

            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.3);
        }

        /* CARDS */

        .cards {
            display: flex;

            justify-content: center;

            gap: 20px;

            flex-wrap: wrap;

            margin-top: 60px;
        }

        .card {
            width: 220px;

            padding: 28px 20px;

            border-radius: 18px;

            background: rgba(255, 255, 255, 0.13);

            border: 1px solid rgba(255, 255, 255, 0.25);

            backdrop-filter: blur(15px);

            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);

            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);

            background: rgba(255, 255, 255, 0.20);
        }

        .icon {
            font-size: 35px;

            margin-bottom: 15px;
        }

        .card h2 {
            font-size: 22px;

            margin-bottom: 10px;
        }

        .card p {
            font-size: 14px;

            line-height: 1.6;

            color: rgba(255, 255, 255, 0.75);
        }

        /* FOOTER */

        footer {
            text-align: center;

            padding: 20px;

            background: rgba(0, 0, 0, 0.18);

            color: rgba(255, 255, 255, 0.7);

            font-size: 13px;
        }

        /* RESPONSIVE */

        @media (max-width: 700px) {

            .navbar {
                padding: 18px 5%;
            }

            h1 {
                font-size: 42px;
            }

            .description {
                font-size: 16px;
            }

            .card {
                width: 100%;
                max-width: 320px;
            }
        }

        @media (max-width: 450px) {

            .navbar {
                flex-direction: column;

                gap: 15px;
            }

            h1 {
                font-size: 34px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar">

        <div class="logo">
            Mahasiswa <span>App</span>
        </div>

        <a
            href="{{ route('mahasiswa.index') }}"
            class="nav-button"
        >
            Data Mahasiswa →
        </a>

    </nav>


    <!-- HERO -->

    <section class="hero">

        <div class="content">

            <div class="badge">
                ✦ LARAVEL 12 • SISTEM INFORMASI
            </div>


            <h1>
                Sistem Informasi
                <span>Mahasiswa</span>
            </h1>


            <p class="description">
                Selamat datang di Mahasiswa App.
                Sebuah sistem informasi sederhana yang digunakan
                untuk mengelola data mahasiswa secara mudah,
                cepat, dan terstruktur.
            </p>


            <a
                href="{{ route('mahasiswa.index') }}"
                class="main-button"
            >
                Kelola Data Mahasiswa →
            </a>


            <!-- CARDS -->

            <div class="cards">

                <div class="card">

                    <div class="icon">
                        👨‍🎓
                    </div>

                    <h2>
                        Mahasiswa
                    </h2>

                    <p>
                        Mengelola informasi dan data
                        mahasiswa dengan lebih terstruktur.
                    </p>

                </div>


                <div class="card">

                    <div class="icon">
                        🗄️
                    </div>

                    <h2>
                        MySQL
                    </h2>

                    <p>
                        Data tersimpan dengan aman
                        menggunakan database MySQL.
                    </p>

                </div>


                <div class="card">

                    <div class="icon">
                        ⚡
                    </div>

                    <h2>
                        Laravel 12
                    </h2>

                    <p>
                        Sistem dibangun menggunakan
                        framework Laravel versi 12.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- FOOTER -->

    <footer>

        © 2026 Mahasiswa App
        • Laravel 12

    </footer>

</body>
</html>