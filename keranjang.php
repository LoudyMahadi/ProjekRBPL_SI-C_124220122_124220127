<?php
    include "proses/koneksi.php";
    session_start();
    $id = $_GET['id'];
    $query = mysqli_query($kon,"SELECT * FROM produk WHERE id = '$id'");
    $data=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/mystyle.css">
    <style>
        body {
            background-color: black;
            color: white;
            font-family: 'Poppins', sans-serif;
        }
        td {
            height: 3em;
        }
        hr {
            color: white;
            background-color: white;
            height: 1px;
        }
        .myFlex {
            display: flex;
            justify-content: space-between;
            margin-top: 1.5em;
            gap: 4.5em;
        }
        .reset {
            margin-top: 9em;
            width: 80%;
            height: 3em;
            padding: 1em;
            background-color: #BB2124;
            border-radius: 10px;
            color: white;
            border: 1px solid black;
            transition: all 0.2s ease;
        }
        .reset:hover {
            transition: all 0.2s ease;
            background-color: black;
            border: 1px solid white;
        }
        input, textarea {
            width: 80%;
            height: 3em;
            padding: 1em;
            border-radius: 50px;
            border: 1px solid black;
            margin-top: 1em;
        }
        textarea {
            height: 10em;
            border-radius: 10px;
        }
        .content-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .image-container {
            margin-left: 3em;
        }
        .form-container {
            text-align: center;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <!-- Navbar start -->
    <nav class="navbar">
        <a href="#" class="navbar-logo">Radio<span>Kopi</span></a>

        <div class="navbar-nav">
            <a href="index.php#home">Home</a>
            <a href="index.php#about">Tentang Kami</a>
            <a href="index.php#menu">Menu</a>
            <a href="index.php#products">Produk</a>
        </div>

        <div class="navbar-extra">
            <a href="logout.php" id="shopping-cart-button"><i data-feather="log-out"></i></a>
            <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        </div>
    </nav>
    <!-- Navbar end -->

    <section>
        <div class="content-wrapper">
            <div class="form-container">
                <h1 style="margin-bottom: 1em;"><?= $data['nama'] ?> (Rp<?= $data['harga'] ?>)</h1>
                <p><?= $data['deskripsi'] ?></p>
                <p>STOK MENU: <?= $data['stok'] ?></p>
                <form action="proses/pesanan.php" method="POST" style="margin-top: 2em;">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <input type="text" placeholder="Nama Pemesan" name="nama">
                    <input type="text" placeholder="Nomor Handphone" name="nohp">
                    <input type="text" placeholder="Jumlah" name="jumlah">
                    <input type="text" placeholder="Nomor Meja" name="nomeja">
                    <input type="submit">
                </form>
            </div>
            <div class="image-container">
                <img src="asset/<?= $data['foto'] ?>" width="300px">
            </div>
        </div>
    </section>

    <!-- Feather Icons -->
    <script>
        feather.replace()
    </script>
</body>
</html>
