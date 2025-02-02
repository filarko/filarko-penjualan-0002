<!DOCTYPE html>
<html lang="id">

<head>
    <link rel="stylesheet" type="text/css" href="App/Views/Barang/style.css">
    <meta charset="UTF-8">
    <title>Tambah Transaksi</title>
    <style>
        nav {
            margin-bottom: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 15px;
        }
    </style>
</head>

<body>

    <h2>Tambah Transaksi</h2>
    <form action="index.php?controller=transaksi&action=store" method="POST">
        <label for="id_transaksi">ID Transaksi:</label>
        <input type="number" name="id_transaksi" required>
        <br>

        <label for="kode_barang">Kode Barang:</label>
        <input type="text" name="kode_barang" required>
        <br>

        <label for="id_pelanggan">ID Pelanggan:</label>
        <input type="text" name="id_pelanggan" required>
        <br>

        <label for="jumlah">Jumlah:</label>
        <input type="number" name="jumlah" required>
        <br>

        <label for="harga_barang">Harga Barang:</label>
        <input type="number" name="harga_barang" required>
        <br>

        <label for="tanggal_transaksi">Tanggal Transaksi:</label>
<input type="datetime-local" name="tanggal_transaksi" id="tanggal_transaksi" required>
<br>

<script>
    // Mendapatkan tanggal dan waktu saat ini dalam format yang sesuai untuk datetime-local
    const now = new Date();
    const year = now.getFullYear();
    const month = String(now.getMonth() + 1).padStart(2, '0'); // Bulan 1-12
    const day = String(now.getDate()).padStart(2, '0');        // Hari dalam bulan
    const hours = String(now.getHours()).padStart(2, '0');     // Jam
    const minutes = String(now.getMinutes()).padStart(2, '0'); // Menit

    // Menggabungkan menjadi format yang sesuai untuk datetime-local: "YYYY-MM-DDTHH:MM"
    const datetimeLocal = `${year}-${month}-${day}T${hours}:${minutes}`;

    // Mengatur nilai awal dari input datetime-local menjadi sekarang
    document.getElementById('tanggal_transaksi').value = datetimeLocal;
</script>

        <br>

        <!-- Menampilkan total harga yang dihitung secara otomatis -->
        <p>Total Harga: <span id="total_harga">0</span></p>

        <button type="submit">Simpan</button>
    </form>

    <!-- Script JavaScript untuk menghitung total harga secara otomatis -->
    <script>
        document.querySelector("input[name='jumlah']").addEventListener("input", calculateTotal);
        document.querySelector("input[name='harga_barang']").addEventListener("input", calculateTotal);

        function calculateTotal() {
            let jumlah = parseFloat(document.querySelector("input[name='jumlah']").value) || 0;
            let hargaBarang = parseFloat(document.querySelector("input[name='harga_barang']").value) || 0;
            let total = jumlah * hargaBarang;
            document.getElementById("total_harga").innerText = total;
        }
    </script>
</body>

</html>