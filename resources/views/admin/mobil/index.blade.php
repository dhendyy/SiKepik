<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Mobil - SIKEPIK Admin</title>
    <style>
        /* Global Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
        }

        .flex {
            display: flex;
        }

        .sidebar {
            width: 250px;
            background-color: #2d3748;
            color: white;
            height: 100vh;
        }

        .sidebar img {
            display: block;
            margin: 20px auto;
            height: 50px;
        }

        .sidebar h2 {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            margin: 10px 0;
        }

        .sidebar a {
            display: block;
            padding: 10px 20px;
            color: white;
            text-decoration: none;
            transition: background-color 0.2s;
        }

        .sidebar a:hover {
            background-color: #4a5568;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .breadcrumb {
            font-size: 14px;
            color: #718096;
        }

        .breadcrumb span {
            color: #2b6cb0;
            font-weight: bold;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            text-align: left;
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
        }

        th {
            background-color: #f7fafc;
            color: #4a5568;
            font-size: 14px;
            text-transform: uppercase;
        }

        td img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 50%;
        }

        tr:nth-child(even) {
            background-color: #f9fafb;
        }

        tr:hover {
            background-color: #edf2f7;
        }
    </style>
</head>
<body>
    <div class="flex">
        <!-- Sidebar -->
        <aside class="sidebar">
            <img src="sikepik_logo.jpg" alt="SIKEPIK Logo">
            <h2>SIKEPIK</h2>
            <a href="#">Tabel Mobil</a>
            <a href="#" style="background-color: #4a5568;">Tambah Mobil</a>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="breadcrumb">
                Mobil &gt; <span>Tabel Mobil</span>
            </div>
            <h1>Tabel Mobil</h1>

            <!-- Table -->
            <table>
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>GAMBAR</th>
                        <th>KATEGORI MOBIL</th>
                        <th>NO POLISI</th>
                        <th>MERK/TYPE</th>
                        <th>NOKA</th>
                        <th>NOSIN</th>
                        <th>TAHUN PEMBUATAN</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mobils as $index => $mobil)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>
                                <img src="{{ $mobil->image_url }}" alt="Mobil Image">
                            </td>
                            <td>{{ $mobil->kategori }}</td>
                            <td>{{ $mobil->no_polisi }}</td>
                            <td>{{ $mobil->merk_type }}</td>
                            <td>{{ $mobil->noka }}</td>
                            <td>{{ $mobil->nosin }}</td>
                            <td>{{ $mobil->tahun_pembuatan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>
