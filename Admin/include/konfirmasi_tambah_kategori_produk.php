<?php 
    $kategori_produk = $_POST['kategori_produk'];
        $sql = "insert into `kategori_produk` (`kategori_produk`) 
        values ('$kategori_produk')";
        mysqli_query($koneksi,$sql);
        header("Location:index.php?include=kategori-produk&notif=tambahberhasil");
?>