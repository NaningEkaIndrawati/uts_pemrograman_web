<!DOCTYPE html>
<html>
<head>
    <title>Flower Shop - Order</title>
</head>
<body>
    <h1>Formulir Pemesanan Bunga</h1>
    <form method="post" action="{{ route('order') }}">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" required></textarea><br><br>

        <label for="jumlah_bunga">Jumlah Bunga:</label>
        <input type="number" id="jumlah_bunga" name="jumlah_bunga" required><br><br>

        <label for="tanggal_pengiriman">Tanggal Pengiriman:</label>
        <input type="date" id="tanggal_pengiriman" name="tanggal_pengiriman" required><br><br>

        <label for="metode_pembayaran">Metode Pembayaran:</label>
        <select id="metode_pembayaran" name="metode_pembayaran" required>
            <option value="transfer_bank">Transfer Bank</option>
            <option value="tunai">Tunai</option>
        </select><br><br>
        <button type="submit">Pesan</button>
    </form>
</body>
</html>
