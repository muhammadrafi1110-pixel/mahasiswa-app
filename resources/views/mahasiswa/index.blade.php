<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Mahasiswa</title>

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

        .home-btn {
            color: white;
            text-decoration: none;
            background: #374151;
            padding: 9px 16px;
            border-radius: 8px;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 40px auto;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .header h1 {
            font-size: 30px;
            color: #111827;
        }

        .header p {
            color: #6b7280;
            margin-top: 6px;
        }

        .add-btn {
            background: #2563eb;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 9px;
            font-weight: bold;
        }

        .add-btn:hover {
            background: #1d4ed8;
        }

        .success {
            background: #dcfce7;
            color: #166534;
            padding: 14px 18px;
            border-radius: 9px;
            margin-bottom: 20px;
        }

        .table-box {
            background: white;
            border-radius: 15px;
            overflow-x: auto;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #111827;
            color: white;
            padding: 15px;
            text-align: left;
            white-space: nowrap;
        }

        td {
            padding: 15px;
            border-bottom: 1px solid #e5e7eb;
        }

        tr:hover td {
            background: #f9fafb;
        }

        .empty {
            text-align: center;
            padding: 45px;
            color: #6b7280;
        }

        .actions {
            display: flex;
            gap: 7px;
            flex-wrap: wrap;
        }

        .btn {
            text-decoration: none;
            border: none;
            cursor: pointer;
            padding: 8px 12px;
            border-radius: 7px;
            font-size: 13px;
            color: white;
        }

        .detail {
            background: #6b7280;
        }

        .edit {
            background: #f59e0b;
        }

        .delete {
            background: #dc2626;
        }

        .btn:hover {
            opacity: 0.85;
        }

        .delete-form {
            display: inline;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #6b7280;
        }

        @media (max-width: 700px) {
            .navbar {
                padding: 15px 5%;
            }

            .container {
                width: 94%;
            }

            .header {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }

            .add-btn {
                display: inline-block;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <div class="logo">Mahasiswa App</div>

        <a href="{{ url('/') }}" class="home-btn">
            ← Beranda
        </a>
    </nav>

    <main class="container">

        <div class="header">
            <div>
                <h1>Data Mahasiswa</h1>
                <p>Kelola data mahasiswa dengan mudah dan terstruktur.</p>
            </div>

            <a href="{{ route('mahasiswa.create') }}" class="add-btn">
                + Tambah Mahasiswa
            </a>
        </div>

        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-box">

            @if($mahasiswa->count() > 0)

                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>NPM</th>
                            <th>Jurusan</th>
                            <th>Alamat</th>
                            <th>No. HP</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @foreach($mahasiswa as $item)

                            <tr>
                                <td>{{ $loop->iteration }}</td>

                                <td>
                                    <strong>{{ $item->nama }}</strong>
                                </td>

                                <td>{{ $item->npm }}</td>

                                <td>{{ $item->jurusan }}</td>

                                <td>{{ $item->alamat ?? '-' }}</td>

                                <td>{{ $item->no_hp ?? '-' }}</td>

                                <td>
                                    <div class="actions">

                                        <a
                                            href="{{ route('mahasiswa.show', $item->id) }}"
                                            class="btn detail">
                                            Detail
                                        </a>

                                        <a
                                            href="{{ route('mahasiswa.edit', $item->id) }}"
                                            class="btn edit">
                                            Edit
                                        </a>

                                        <form
                                            action="{{ route('mahasiswa.destroy', $item->id) }}"
                                            method="POST"
                                            class="delete-form"
                                            onsubmit="return confirm('Yakin ingin menghapus data ini?')">

                                            @csrf
                                            @method('DELETE')

                                            <button
                                                type="submit"
                                                class="btn delete">
                                                Hapus
                                            </button>

                                        </form>

                                    </div>
                                </td>

                            </tr>

                        @endforeach

                    </tbody>
                </table>

            @else

                <div class="empty">
                    <h3>Belum Ada Data Mahasiswa</h3>

                    <p>
                        Silakan tambahkan data mahasiswa terlebih dahulu.
                    </p>
                </div>

            @endif

        </div>

    </main>

    <footer>
        © 2026 Sistem Informasi Mahasiswa
    </footer>

</body>
</html>