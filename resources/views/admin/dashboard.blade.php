<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIKEPIK Admin</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-gray-800 text-white h-screen">
            <div class="p-6">
                <img src="{{ asset('images/sikepik_logo.jpg') }}" alt="SIKEPIK Logo" class="h-16 mx-auto mb-4">
                <h2 class="text-center text-xl font-bold">SIKEPIK</h2>
            </div>
            <nav class="mt-10">
                <a href="{{ route('admin.dashboard') }}" class="block py-2 px-4 hover:bg-gray-700">Admin</a>
                <div class="py-2 px-4">
                    <span class="block font-semibold">Driver</span>
                    <a href="{{ route('admin.drivers.index') }}" class="block pl-4 py-1 hover:bg-gray-700">Tabel Driver</a>
                    <a href="{{ route('admin.drivers.create') }}" class="block pl-4 py-1 hover:bg-gray-700">Tambah Driver</a>
                </div>
                <div class="py-2 px-4">
                    <span class="block font-semibold">User</span>
                    <a href="{{ route('admin.users.index') }}" class="block pl-4 py-1 hover:bg-gray-700">Tabel User</a>
                    <a href="{{ route('admin.users.create') }}" class="block pl-4 py-1 hover:bg-gray-700">Tambah User</a>
                </div>
                <div class="py-2 px-4">
                    <span class="block font-semibold">Bengkel</span>
                    <a href="{{ route('admin.bengkels.index') }}" class="block pl-4 py-1 hover:bg-gray-700">Tabel Bengkel</a>
                    <a href="{{ route('admin.bengkels.create') }}" class="block pl-4 py-1 hover:bg-gray-700">Tambah Bengkel</a>
                </div>
                <div class="py-2 px-4">
                    <span class="block font-semibold">Kategori Mobil</span>
                    <a href="{{ route('admin.categories.index') }}" class="block pl-4 py-1 hover:bg-gray-700">Tabel Kategori Mobil</a>
                    <a href="{{ route('admin.categories.create') }}" class="block pl-4 py-1 hover:bg-gray-700">Tambah Kategori Mobil</a>
                </div>
                <div class="py-2 px-4">
                    <span class="block font-semibold">Mobil</span>
                </div>
                <div class="py-2 px-4">
                    <span class="block font-semibold">Request Layanan</span>
                </div>
            </nav>
        </aside>

        <main class="flex-1 p-8">
            <h1 class="text-10xl0 font-semibold mb-6">SELAMAT DATANG ADMIN!</h1>
        </main>
    </div>
</body>
</html>
