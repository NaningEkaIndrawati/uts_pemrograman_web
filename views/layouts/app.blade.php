<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Tambahkan gaya CSS sesuai kebutuhan Anda */
    </style>
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                {{ config('app.name', 'Laravel') }}
            </div>

            <div class="links">
                <a href="{{ route('home') }}">Home</a>
                <a href="{{ route('products') }}">Products</a>
                <a href="{{ route('admin.orders') }}">Orders</a>
                <a href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <!-- Script -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Tambahkan script lain jika diperlukan -->
</body>
</html>
