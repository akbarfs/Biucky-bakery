<?php 
if(isset($_SESSION['id_kategori_produk'])){
    $id_kategori_produk = $_SESSION['id_kategori_produk'];
    $kategori_produk = $_POST['kategori_produk'];
        $sql = "update `kategori_produk` set `kategori_produk`='$kategori_produk' 
        where `id_kategori_produk`='$id_kategori_produk'";
        mysqli_query($koneksi,$sql);
        unset($_SESSION['id_kategori_produk']);
        header("Location:index.php?include=kategori-produk&notif=editberhasil");
}
?>