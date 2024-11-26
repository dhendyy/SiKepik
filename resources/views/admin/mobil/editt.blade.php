<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mobil - SIKEPIK Admin</title>
    <style>
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

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #4a5568;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #2b6cb0;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        button:hover {
            background-color: #2c5282;
        }
    </style>
</head>
<body>
    <div class="flex">
        <!-- Sidebar -->
        <aside class="sidebar">
            <img src="sikepik_logo.jpg" alt="SIKEPIK Logo">
            <h2>SIKEPIK</h2>
            <a href="{{ route('admin.mobil.index') }}">Tabel Mobil</a>
            <a href="{{ route('admin.mobil.create') }}">Tambah Mobil</a>
        </aside>

        <!-- Main Content -->
        <main class="main-content">
            <div class="breadcrumb">
                Mobil &gt; <span>Edit Mobil</span>
            </div>
            <h1>Edit Mobil</h1>

            <form action="{{ route('admin.mobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div>
                    <label for="kategori">Kategori Mobil</label>
                    <select name="kategori" id="kategori">
                        <option value="Sedan" {{ $mobil->kategori == 'Sedan' ? 'selected' : '' }}>Sedan</option>
                        <option value="SUV" {{ $mobil->kategori == 'SUV' ? 'selected' : '' }}>SUV</option>
                        <option value="MPV" {{ $mobil->kategori == 'MPV' ? 'selected' : '' }}>MPV</option>
                    </select>
                </div>

                <div>
                    <label for="no_polisi">No Polisi</label>
                    <input type="text" name="no_polisi" id="no_polisi" value="{{ $mobil->no_polisi }}" required>
                </div>

                <div>
                    <label for="merk_type">Merk/Type</label>
                    <input type="text" name="merk_type" id="merk_type" value="{{ $mobil->merk_type }}" required>
                </div>

                <div>
                    <label for="noka">No Ka</label>
                    <input type="text" name="noka" id="noka" value="{{ $mobil->noka }}" required>
                </div>

                <div>
                    <label for="nosin">No Sin</label>
                    <input type="text" name="nosin" id="nosin" value="{{ $mobil->nosin }}" required>
                </div>

                <div>
                    <label for="tahun_pembuatan">Tahun Pembuatan</label>
                    <input type="number" name="tahun_pembuatan" id="tahun_pembuatan" value="{{ $mobil->tahun_pembuatan }}" required>
                </div>

                <div>
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" id="gambar">
                    @if($mobil->image_url)
                        <img src="{{ $mobil->image_url }}" alt="Mobil Image" class="mt-2 w-32 h-32 object-cover">
                    @endif
                </div>

                <div class="flex justify-between">
                    <a href="{{ route('admin.mobil.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded-md">Kembali</a>
                    <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md">Simpan Perubahan</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>
