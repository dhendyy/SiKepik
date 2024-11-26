<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah User</title>
    @vite('resources/css/app.css')
    <style>
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .form-avatar {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .avatar-placeholder {
            width: 100px;
            height: 100px;
            background-color: #d1d5db;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
            color: #4b5563;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 5px;
            display: block;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            margin-bottom: 15px;
        }

        .form-button {
            background-color: #10b981;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form-button:hover {
            background-color: #059669;
        }

        .back-button {
            position: absolute;
            bottom: -50px;
            left: 20px;
            background-color: #4b5563;
            color: white;
            padding: 8px 16px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #374151;
        }
    </style>
</head>

<body class="bg-gray-100 p-6">
    <div class="form-container">
        <h1 class="form-title">Form Tambah User</h1>
        <form action="{{ route('admin.users.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Avatar Upload -->
            <div class="form-avatar">
                <div class="avatar-placeholder">👤</div>
            </div>
            <div class="mb-4">
                <label for="image" class="form-label">Avatar</label>
                <input type="file" id="image" name="image" class="form-input">
            </div>

            <!-- Input Fields -->
            <div class="mb-4">
                <label for="name" class="form-label">Nama<span class="text-red-500">*</span></label>
                <input type="text" id="name" name="name" required class="form-input" placeholder="Nama">
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email<span class="text-red-500">*</span></label>
                <input type="email" id="email" name="email" required class="form-input" placeholder="Email">
            </div>
            <div class="mb-4">
                <label for="phone" class="form-label">Nomor Telepon<span class="text-red-500">*</span></label>
                <input type="text" id="phone" name="phone" required class="form-input" placeholder="Nomor telepon">
            </div>
            <div class="mb-4">
                <label for="password" class="form-label">Password<span class="text-red-500">*</span></label>
                <input type="password" id="password" name="password" required class="form-input" placeholder="Password">
            </div>

            <!-- Submit Button -->
            <div class="text-right">
                <button type="submit" class="form-button">Simpan</button>
            </div>
        </form>

        <!-- Back Button -->
        <a href="{{ route('admin.users.index') }}" class="back-button">Kembali</a>
    </div>
</body>

</html>
