<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Jura', sans-serif;
            background-color: #f3f4f6;
        }
        h1, h2 {
            color: #1f2937;
        }
        nav {
            background-color: #2C3E50;
            padding: 1rem;
            color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            max-width: 50px;
            max-height: 50px;
            margin-right: 1rem;
        }
        nav ul {
            display: flex;
            gap: 2rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        nav ul li a {
            color: #ffffff;
            font-weight: 600;
            text-transform: uppercase;
            text-decoration: none;
        }
        header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }
        .header-content {
            max-width: 700px;
            text-align: center;
        }
        .header-content h1 {
            font-size: 3rem;
            color: #333;
        }
        .description-box {
            background-color: #1f2937;
            color: #ffffff;
            padding: 1rem;
            border-radius: 20px;
            max-width: 600px;
            margin: 0 auto;
            margin-top: 1rem;
        }
        .header-image {
            border-radius: 20px;
            margin-left: 2rem;
            max-width: 250px;
        }
        footer {
            display: flex;
            justify-content: space-around;
            background-color: #2C3E50;
            color: white;
            padding: 2rem 0;
        }
        .footer-column {
            text-align: center;
        }
        .footer-column img {
            max-width: 80px;
            border-radius: 10px;
            margin-bottom: 1rem;
        }
    </style>
    <title>SIKEPIK</title>
</head>
<body>

<div class="min-h-full">
    <!-- Navigation -->
    <nav>
        <div class="logo">
            <img src="{{ asset('images/sikepik_logo.jpg') }}" alt="SIKEPIK Logo">
            <h1>SIKEPIK</h1>
        </div>
        <ul>
            <li><a href="{{ url('home') }}">Beranda</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="{{ url('about') }}">Tentang Kami</a></li>
        </ul>
    </nav>

    <!-- Header -->
    <header class="bg-white">
        <div class="header-content">
            <h1>SIKEPIK</h1>
            <div class="description-box">
                <p>Manajemen pemeliharaan kendaraan untuk memantau, mengelola, dan menjadwalkan perawatan secara efisien, memastikan kendaraan selalu aman dan optimal.</p>
            </div>
        </div>
        <img src={{ asset('images/bengkel.jpg')  }} alt="Bengkel" class="header-image">
    </header>

    <!-- Footer -->
    <footer>
        <div class="footer-column">
            <img src="{{ asset('images/sikepik_logo.jpg') }}" alt="SIKEPIK Logo" class="h-24 w-24">
            <p>SIKEPIK</p>
        </div>
        <div class="footer-column">
            <h3>Kontak Admin</h3>
            <p>Email: sikepik@gmail.com</p>
            <p>Senin - Jumat, 08.00 - 17.00 WITA</p>
        </div>
        <div class="footer-column">
            <h3>Kantor</h3>
            <p>Jl. Praja Muda V No.21, Sepinggan Baru, Balikpapan</p>
            <p>Tel: 0824 2624 1427</p>
        </div>
    </footer>
</div>

</body>
</html>
