<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <!-- Tambahkan link ke file CSS Anda jika diperlukan -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <!-- Header Section - Misalnya navigasi, judul aplikasi, dll -->
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/admin/customers">Customers</a></li>
                <!-- Tambahkan link lainnya jika diperlukan -->
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Area konten yang akan digantikan oleh konten halaman spesifik -->
    </main>

    <footer>
        <!-- Footer Section - Misalnya informasi kontak, hak cipta, dll -->
        <p>&copy; {{ date('Y') }} Your Company</p>
    </footer>

    <!-- Tambahkan script JS Anda jika diperlukan -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
