<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Mahasiswa</title>

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

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #374151;
        }

        input,
        textarea {
            width: 100%;
            padding: 13px 14px;
            border: 1px solid #d1d5db;
            border-radius: 9px;
            font-size: 15px;
            outline: none;
        }

        input:focus,
        textarea:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        .error {
            color: #dc2626;
            font-size: 13px;
            margin-top: 6px;
        }

        .buttons {
            display: flex;
            gap: 10px;
            margin-top: 30px;
        }

        .btn {
            border: none;
            cursor: pointer;
            text-decoration: none;
            padding: 13px 20px;
            border-radius: 9px;
            font-weight: bold;
            font-size: 14px;
        }

        .update {
            background: #f59e0b;
            color: white;
        }

        .update:hover {
            background: #d97706;
        }

        .cancel {
            background: #e5e7eb;
            color: #374151;
        }

        .cancel:hover {
            background: #d1d5db;
        }

        .error-box {
            background: #fee2e2;
            color: #991b1b;
            padding: 15px;
            border-radius: 9px;
            margin-bottom: 20px;
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
                <h1>Edit Mahasiswa</h1>
                <p>Perbarui informasi data mahasiswa.</p>
            </div>

            @if ($errors->any())
                <div class="error-box">
                    <strong>Periksa kembali data yang dimasukkan.</strong>

                    <ul style="margin-top: 8px; padding-left: 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form
                action="{{ route('mahasiswa.update', $mahasiswa->id) }}"
                method="POST">

                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>

                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        value="{{ old('nama', $mahasiswa->nama) }}"
                        required
                    >

                    @error('nama')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="npm">NPM</label>

                    <input
                        type="text"
                        id="npm"
                        name="npm"
                        value="{{ old('npm', $mahasiswa->npm) }}"
                        required
                    >

                    @error('npm')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="jurusan">Jurusan</label>

                    <input
                        type="text"
                        id="jurusan"
                        name="jurusan"
                        value="{{ old('jurusan', $mahasiswa->jurusan) }}"
                        required
                    >

                    @error('jurusan')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>

                    <textarea
                        id="alamat"
                        name="alamat"
                    >{{ old('alamat', $mahasiswa->alamat) }}</textarea>

                    @error('alamat')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="no_hp">Nomor HP</label>

                    <input
                        type="text"
                        id="no_hp"
                        name="no_hp"
                        value="{{ old('no_hp', $mahasiswa->no_hp) }}"
                        placeholder="Contoh: 081234567890"
                    >

                    @error('no_hp')
                        <div class="error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="buttons">

                    <button type="submit" class="btn update">
                        Update Data
                    </button>

                    <a
                        href="{{ route('mahasiswa.index') }}"
                        class="btn cancel">
                        Batal
                    </a>

                </div>

            </form>

        </div>

    </main>

    <footer>
        © 2026 Sistem Informasi Mahasiswa
    </footer>

</body>
</html>