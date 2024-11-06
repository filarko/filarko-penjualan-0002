<!DOCTYPE html>
<html lang="en">
     

<head>
    <link rel="stylesheet" type="text/css" href="App/Views/Barang/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        nav {
            background-color: #005f99;
            padding: 15px 0;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: center;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            padding: 10px 20px;
            transition: background-color 0.3s;
        }

        nav ul li a:hover {
            background-color: #007bbf;
            border-radius: 5px;
        }

        h1 {
            text-align: center;
            margin-top: 50px;
            font-size: 2.5em;
            color: #005f99;
        }

        #content {
            width: 80%;
            margin: auto;
            padding: 20px;
            text-align: center;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 30px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 10px 0;
            }

            #content {
                width: 90%;
                padding: 15px;
            }

            h1 {
                font-size: 2em;
            }
        }
    </style>
</head>

<body>
    <nav>
        <ul>
            <li><a href="index.php?controller=home&action=index">Home</a></li>
            <li><a href="index.php?controller=barang&action=index">Barang</a></li>
            <li><a href="index.php?controller=pelanggan&action=index">Pelanggan</a></li>
            <li><a href="index.php?controller=transaksi&action=index">Transaksi</a></li>
        </ul>
    </nav>

    <h1>Selamat Datang di Aplikasi Penjualan</h1>

    <div id="content">
        <!-- Konten halaman akan ditampilkan di sini -->
        <p>Gunakan menu di atas untuk navigasi dan mulai menggunakan aplikasi ini.</p>
    </div>
</body>

</html>
