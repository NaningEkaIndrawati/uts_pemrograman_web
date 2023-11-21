<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard - Flower Shop</title>
    <link rel="stylesheet" type="text/css" href="nama_file_css_anda.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Style untuk tag <body> */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f4f4f4;
    margin: 20px;
}

/* Style untuk tag <h1> */
h1 {
    text-align: center;
    margin-bottom: 20px;
}

/* Style untuk navigasi */
nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

nav ul li {
    margin-right: 20px;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

nav ul li a:hover {
    color: #555;
}

/* Style untuk bagian produk */
section {
    background-color: #fff;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

section h2 {
    margin-bottom: 20px;
}

form label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

form input[type="text"],
form input[type="number"],
form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

form button[type="submit"] {
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    background-color: #333;
    color: #fff;
    cursor: pointer;
}

form button[type="submit"]:hover {
    background-color: #555;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table th,
table td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;
}

</style>
<body>
    <h1>Dashboard Admin</h1>
    <nav>
        <ul>
            <li><a href="{{ route('admin.products') }}">Pengelolaan Produk</a></li>
            <li><a href="{{ route('admin.orders') }}">Pengelolaan Pesanan</a></li>
            <li><a href="{{ route('admin.customers') }}">Pengelolaan Pelanggan</a></li>
        </ul>
    </nav>
    <section>
        <h2>Pengelolaan Produk</h2>
        <form method="post" action="{{ route('admin.products.store') }}">
            @csrf
            <label for="nama">Nama Produk:</label><br>
            <input type="text" id="nama" name="nama" required><br><br>

            <label for="deskripsi">Deskripsi:</label><br>
            <textarea id="deskripsi" name="deskripsi" required></textarea><br><br>

            <label for="harga">Harga:</label><br>
            <input type="number" id="harga" name="harga" required><br><br>
            <button type="submit">Tambah Produk</button>
        </form>
        <h3>Daftar Produk</h3>
        <table border="1">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </section>
</body>
</html>
