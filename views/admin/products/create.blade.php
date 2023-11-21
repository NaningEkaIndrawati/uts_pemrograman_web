<!DOCTYPE html>
<html>
<head>
    <title>Tambah Produk Baru - Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #2f6ce6;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #eb9797;
            text-align: center;
        }

        form {
            width: 50%;
            margin: 0 auto;
            background-color: #d486d3;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Tambah Produk Baru</h1>

    <form action="{{ route('admin.products.store') }}" method="post">
        @csrf

        <label for="nama">Nama Produk:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" required></textarea><br><br>

        <label for="harga">Harga:</label><br>
        <input type="number" id="harga" name="harga" required><br><br>

        <button type="submit">Tambah Produk</button>
    </form>
</body>
</html>
