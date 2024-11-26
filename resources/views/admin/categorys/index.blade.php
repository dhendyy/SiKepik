<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Mobil - SIKEPIK Admin</title>
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
                    <!-- Tambahkan submenu jika diperlukan -->
                </div>
                <div class="py-2 px-4">
                    <span class="block font-semibold">Request Layanan</span>
                    <!-- Tambahkan submenu jika diperlukan -->
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <!-- Breadcrumb -->
            <div class="text-sm text-gray-500 mb-4">
                <span>Kategori Mobil</span> &gt; <span class="font-semibold text-blue-600">Tabel Kategori Mobil</span>
            </div>

            <!-- Table Header -->
            <h1 class="text-2xl font-semibold mb-6">Tabel Kategori Mobil</h1>

            <!-- Success Message -->
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Kategori Mobil Table -->
            <table class="min-w-full bg-white border border-gray-200 rounded-md">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="py-3 px-4 border-b text-left text-gray-700">NO</th>
                        <th class="py-3 px-4 border-b text-left text-gray-700">KATEGORI</th>
                        <th class="py-3 px-4 border-b text-left text-gray-700">EMAIL</th>
                        <th class="py-3 px-4 border-b text-center text-gray-700">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $index => $category)
                        <tr>
                            <td class="py-4 px-4 border-b text-center">{{ $index + 1 }}</td>
                            <td class="py-4 px-4 border-b">{{ $category->name }}</td>
                            <td class="py-4 px-4 border-b">{{ $category->email }}</td>
                            <td class="py-4 px-4 border-b text-center">
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-md text-sm">Edit</a>
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md text-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>
