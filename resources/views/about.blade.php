<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIKEPIK</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="bg-white">
        <div class="header-content">
            <h1>SIKEPIK</h1>
            <div class="description-box">
                <p>Manajemen pemeliharaan kendaraan untuk memantau, mengelola, dan menjadwalkan perawatan secara efisien, memastikan kendaraan selalu aman dan optimal.</p>
            </div>
        </div>
        <img src={{ asset('images/bengkel.jpg')  }} alt="Bengkel" class="header-image">
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div>
            <p>Kontak admin: <a href="mailto:sikepik@gmail.com">sikepik@gmail.com</a></p>
            <p>Senin - Jumat, 08.00 - 17.00 WITA</p>
        </div>
        <div>
            <p>Kantor: Jl. Praja Muda V No.21, Sepinggan Baru, Balikpapan</p>
            <p>Tel: 0824 2624 1427</p>
        </div>
    </footer>
</body>
</html>

@section('content')
<div class="hero">
    <img src="{{ asset('images/sikepik_logo.jpg') }}" alt="SIKEPIK Logo" class="logo">
    <h1>SIKEPIK</h1>
    <p>Manajemen pemeliharaan kendaraan untuk memantau, mengelola, dan menjadwalkan perawatan secara efisien, memastikan kendaraan selalu aman dan optimal.</p>
</div>

<div class="contact-info">
    <div class="admin-contact">
        <h2>Kontak Admin</h2>
        <p>Email: sikepik@gmail.com</p>
        <p>Jam Kerja: Senin - Jumat, 08.00 - 17.00 WITA</p>
    </div>
    <div class="office-contact">
        <h2>Kantor</h2>
        <p>Alamat: Jl. Praja Muda V No.21, Sepinggan Baru, Balikpapan</p>
        <p>Tel: 0824 2624 1427</p>
    </div>
</div>
@endsection
