<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>SIKEPIK Registration</title>
</head>
<body class="min-h-screen bg-[#0C1E3C] flex items-center justify-center">
    <div class="w-full max-w-md px-6 py-8 bg-[#0C1E3C] relative">
        <!-- Logo -->
        <div class="flex justify-center mb-6">
            <img src="{{ asset('images/sikepik_logo.jpg') }}" alt="SIKEPIK Logo" class="h-24 w-24">
        </div>

        <!-- Registration Form -->
        <form id="registrationForm" class="space-y-4">
            <div>
                <input type="text" id="name" placeholder="Nama" class="w-full rounded-full bg-gray-200 py-3 px-4 text-gray-800 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
            </div>
            <div>
                <input type="email" id="email" placeholder="Alamat Email" class="w-full rounded-full bg-gray-200 py-3 px-4 text-gray-800 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
            </div>
            <div>
                <input type="text" id="phone" placeholder="No. Handphone" class="w-full rounded-full bg-gray-200 py-3 px-4 text-gray-800 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
            </div>
            <div>
                <input type="text" id="address" placeholder="Alamat Tinggal" class="w-full rounded-full bg-gray-200 py-3 px-4 text-gray-800 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
            </div>
            <div>
                <select id="gender" class="w-full rounded-full bg-gray-200 py-3 px-4 text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
                    <option value="">Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div>
                <input type="password" id="password" placeholder="Password" class="w-full rounded-full bg-gray-200 py-3 px-4 text-gray-800 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
            </div>
            <div>
                <input type="password" id="repassword" placeholder="Re-Password" class="w-full rounded-full bg-gray-200 py-3 px-4 text-gray-800 placeholder-gray-600 focus:outline-none focus:ring-2 focus:ring-indigo-600" required>
            </div>

            <!-- Register Button -->
            <div>
                <button type="button" onclick="handleSubmit()" class="w-full rounded-full bg-black py-3 text-white font-semibold hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-black">DAFTAR</button>
            </div>
        </form>

        <!-- Notification -->
        <div id="notification" class="hidden absolute inset-0 flex items-center justify-center bg-black bg-opacity-75 text-white text-center p-4 rounded-md">
            <p>Terimakasih telah bergabung dengan kami!</p>
        </div>
    </div>

    <!-- JavaScript for validation, notification, and redirection -->
    <script>
        function handleSubmit() {
            // Get all input fields
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const address = document.getElementById('address').value;
            const gender = document.getElementById('gender').value;
            const password = document.getElementById('password').value;
            const repassword = document.getElementById('repassword').value;

            // Check if all fields are filled
            if (name && email && phone && address && gender && password && repassword) {
                if (password !== repassword) {
                    alert("Password tidak sama.");
                    return;
                }

                // Show notification
                document.getElementById('notification').classList.remove('hidden');

                // Hide form after submission
                document.getElementById('registrationForm').classList.add('hidden');

                // Redirect to login page after 2 seconds
                setTimeout(() => {
                    window.location.href = "{{ route('login') }}";
                }, 2000);
            } else {
                alert("Tolong lengkapi data terlebih dahulu.");
            }
        }
    </script>
</body>
</html>
