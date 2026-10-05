<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Detail Mahasiswa</title>

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
            color: white;
            padding: 18px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 21px;
            font-weight: bold;
        }

        .back-btn {
            color: white;
            text-decoration: none;
            background: #374151;
            padding: 9px 16px;
            border-radius: 8px;
        }

        .container {
            width: 90%;
            max-width: 800px;
            margin: 40px auto;
        }

        .card {
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
        }

        .title {
            margin-bottom: 30px;
        }

        .title h1 {
            font-size: 30px;
            color: #111827;
            margin-bottom: 8px;
        }

        .title p {
            color: #6b7280;
        }

        .profile {
            width: 80px;
            height: 80px;
            background: #2563eb;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 25px;
        }

        .data {
            border-top: 1px solid #e5e7eb;
        }

        .row {
            display: flex;
            padding: 17px 0;
            border-bottom: 1px solid #e5e7eb;
        }

        .label {
            width: 35%;
            font-weight: bold;
            color: #6b7280;
        }

        .value {
            width: 65%;
            color: #111827;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }

        .btn {
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 9px;
            font-weight: bold;
            font-size: 14px;
        }

        .edit {
            background: #f59e0b;
            color: white;
        }

        .back {
            background: #e5e7eb;
            color: #374151;
        }

        .btn:hover {
            opacity: 0.85;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #6b7280;
        }

        @media (max-width: 600px) {
            .card {
                padding: 25px 20px;
            }

            .container {
                width: 94%;
            }

            .row {
                display: block;
            }

            .label,
            .value {
                width: 100%;
            }

            .value {
                display: block;
                margin-top: 6px;
            }

            .buttons {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">Mahasiswa App</div>

        <a href="{{ route('mahasiswa.index') }}" class="back-btn">
            ← Kembali
        </a>
    </nav>

    <main class="container">

        <div class="card">

            <div class="title">
                <h1>Detail Mahasiswa</h1>
                <p>Informasi lengkap data mahasiswa.</p>
            </div>

            <div class="profile">
                {{ strtoupper(substr($mahasiswa->nama, 0, 1)) }}
            </div>

            <div class="data">

                <div class="row">
                    <div class="label">Nama</div>
                    <div class="value">
                        {{ $mahasiswa->nama }}
                    </div>
                </div>

                <div class="row">
                    <div class="label">NPM</div>
                    <div class="value">
                        {{ $mahasiswa->npm }}
                    </div>
                </div>

                <div class="row">
                    <div class="label">Jurusan</div>
                    <div class="value">
                        {{ $mahasiswa->jurusan }}
                    </div>
                </div>

                <div class="row">
                    <div class="label">Alamat</div>
                    <div class="value">
                        {{ $mahasiswa->alamat ?? '-' }}
                    </div>
                </div>

                <div class="row">
                    <div class="label">No. HP</div>
                    <div class="value">
                        {{ $mahasiswa->no_hp ?? '-' }}
                    </div>
                </div>

            </div>

            <div class="buttons">

                <a
                    href="{{ route('mahasiswa.edit', $mahasiswa->id) }}"
                    class="btn edit">
                    Edit Data
                </a>

                <a
                    href="{{ route('mahasiswa.index') }}"
                    class="btn back">
                    Kembali
                </a>

            </div>

        </div>

    </main>

    <footer>
        © 2026 Sistem Informasi Mahasiswa
    </footer>

</body>
</html>