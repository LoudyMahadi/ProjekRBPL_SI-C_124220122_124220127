<?php
        include "koneksi.php";
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $nohp = $_POST['nohp'];
        $jumlah = $_POST['jumlah'];
        $nomeja = $_POST['nomeja'];

        $query = mysqli_query($kon,"SELECT * FROM produk WHERE id = '$id'");
        $data=mysqli_fetch_assoc($query);
        if($query){
            $total = $jumlah * $data['harga'];
            $new_stock = $stok - $jumlah;
            $nama_produk = $data['nama'];
            $query1 = mysqli_query($kon,"INSERT INTO pesanan VALUES ('','$nama','$nohp','$nama_produk','$jumlah','$nomeja','$total')");
            $query2 = mysqli_query($kon, "UPDATE produk SET stok = '$new_stock' WHERE nama_produk = '$nama_produk'");
            if($query1){
                echo "<script>alert('Pesanan Berhasil Ditambahkan Klik OK Untuk melanjutkan pembayaran');window.location.href='../payment.php'</script>";
            }
        }
?>