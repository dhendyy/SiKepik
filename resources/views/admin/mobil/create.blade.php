<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mobil - SIKEPIK Admin</title>
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

        form {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
            color: #4a5568;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            font-size: 14px;
        }

        button {
            background-color: #3182ce;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        button:hover {
            background-color: #2b6cb0;
        }

        .form-row {
            display: flex;
            gap: 20px;
        }

        .form-row div {
            flex: 1;
        }

        .form-actions {
            display: flex;
            justify-content: space-between;
        }

        .form-actions a {
            display: inline-block;
            padding: 10px 20px;
            text-align: center;
            background-color: #718096;
            color: white;
            border-radius: 4px;
            text-decoration: none;
        }

        .form-actions a:hover {
            background-color: #4a5568;
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
                Mobil &gt; <span>Tambah Mobil</span>
            </div>
            <h1>Tambah Mobil</h1>

            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="form-row">
                    <div>
                        <label for="kategori">Kategori Mobil</label>
                        <select id="kategori" name="kategori">
                            <option value="">Pilih...</option>
                            <option value="Sedan">Sedan</option>
                            <option value="SUV">SUV</option>
                            <option value="MPV">MPV</option>
                            <option value="MPV">PAJERO(PASUKAN JENGGOT RASUL)</option>
                        </select>
                    </div>
                    <div>
                        <label for="merk">Merk/Tipe</label>
                        <input type="text" id="merk" name="merk" placeholder="Merk/Tipe">
                    </div>
                </div>

                <div class="form-row">
                    <div>
                        <label for="no_polisi">No Polisi</label>
                        <input type="text" id="no_polisi" name="no_polisi" placeholder="No Polisi">
                    </div>
                    <div>
                        <label for="kode_rfid">Kode Kartu RFID</label>
                        <input type="text" id="kode_rfid" name="kode_rfid" placeholder="Kode Kartu RFID">
                    </div>
                </div>

                <div class="form-row">
                    <div>
                        <label for="noka">NoKa</label>
                        <input type="text" id="noka" name="noka" placeholder="NoKa">
                    </div>
                    <div>
                        <label for="nosin">NoSin</label>
                        <input type="text" id="nosin" name="nosin" placeholder="NoSin">
                    </div>
                </div>

                <div class="form-row">
                    <div>
                        <label for="tahun_pembuatan">Tahun Pembuatan</label>
                        <input type="number" id="tahun_pembuatan" name="tahun_pembuatan" placeholder="Tahun Pembuatan">
                    </div>
                    <div>
                        <label for="gambar">Gambar</label>
                        <input type="file" id="gambar" name="gambar">
                    </div>
                </div>

                <div class="form-actions">
                    <a href="#">Kembali</a>
                    <button type="submit">Simpan</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>
