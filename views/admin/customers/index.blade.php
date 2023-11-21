<!-- resources/views/admin/customers/index.blade.php -->

@extends('layouts.lay')

@section('content')
    <div class="container">
        <h1>Customer List</h1>

        <!-- Tambahkan konten HTML untuk menampilkan daftar pelanggan di sini -->
        <!-- Contoh menggunakan tabel untuk menampilkan daftar -->
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <!-- Tambahkan kolom lain jika diperlukan -->
                </tr>
            </thead>
            <tbody>
                <!-- Lakukan iterasi data pelanggan untuk menampilkan informasi -->
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->email }}</td>
                        <!-- Tambahkan kolom lain jika diperlukan -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
