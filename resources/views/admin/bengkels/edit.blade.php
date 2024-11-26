<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bengkel</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <h1 class="text-2xl mb-4">Edit Bengkel</h1>
    <form action="{{ route('admin.drivers.update', $driver->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="block text-gray-700">Nama</label>
            <input type="text" id="name" name="name" value="{{ $driver->name }}" required class="border rounded w-full py-2 px-3">
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" id="email" name="email" value="{{ $driver->email }}" required class="border rounded w-full py-2 px-3">
        </div>
        <div class="mb-4">
            <label for="phone" class="block text-gray-700">Nomor Telepon</label>
            <input type="text" id="phone" name="phone" value="{{ $driver->phone }}" required class="border rounded w-full py-2 px-3">
        </div>
        <div class="mb-4">
            <label for="image" class="block text-gray-700">Gambar</label>
            <input type="file" id="image" name="image" class="border rounded w-full py-2 px-3">
            @if ($driver->image_url)
                <img src="{{ asset('storage/' . $driver->image_url) }}" alt="Driver Image" class="mt-2 w-24 h-24 rounded-full">
            @endif
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Simpan Perubahan</button>
    </form>
</body>
</html>
