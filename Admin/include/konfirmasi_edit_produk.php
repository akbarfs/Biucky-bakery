<?php 
if(isset($_SESSION['id_produk'])){
    $id_produk = $_SESSION['id_produk'];
    $id_kategori_produk = $_POST['kategori_produk'];
    $produk = $_POST['produk'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];
    $catatan = addslashes($_POST['catatan']);
    $topping = $_POST['topping'];
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $namafile = $_FILES['gambar']['name'];
    $direktori = 'gmbr/'.$namafile;

    //get gambar

    $sql_f = "SELECT `gambar` FROM `produk` WHERE `id_produk`='$id_produk'";
    $query_f = mysqli_query($koneksi,$sql_f);
    while($data_f = mysqli_fetch_row($query_f)){
    $gambar = $data_f[0];
 //echo $foto;
} 

if(empty($id_kategori_produk)){
    header("Location:index.php?include=edit-produk&data=$id_produk&notif=editkosong&jenis=kategoriproduk");
}else{
    $lokasi_file = $_FILES['gambar']['tmp_name'];
    $nama_file = $_FILES['gambar']['name'];
    $direktori = 'gmbr/'.$nama_file;
    if(move_uploaded_file($lokasi_file,$direktori)){
    if(!empty($gambar)){
       unlink("gmbr/$gambar");
   }
   $sql = "UPDATE `produk` set `id_kategori_produk`='$id_kategori_produk',`produk`='$produk',
   `berat`='$berat',`harga`='$harga',`catatan`='$catatan',`gambar`='$nama_file'  WHERE `id_produk`='$id_produk'";
   mysqli_query($koneksi,$sql);
   }else{
    $sql = "UPDATE `produk` set 
    `id_kategori_produk`='$id_kategori_produk',`produk`='$produk',
    `berat`='$berat',`harga`='$harga',`catatan`='$catatan'
    WHERE `id_produk`='$id_produk'";
    mysqli_query($koneksi,$sql);
    }
   //hapus tag
   $sql_d = "delete from `topping_produk` where `id_produk`='$id_produk'";
   mysqli_query($koneksi,$sql_d);
   //tambah tag
   if(!empty($_POST['topping'])){
   foreach($_POST['topping'] as $id_topping){
   $sql_i = "insert into `topping_produk` (`id_produk`, `id_topping`) 
   values ('$id_produk', '$id_topping')";
   mysqli_query($koneksi,$sql_i);
   }
   }
   header("Location:index.php?include=produk&notif=editberhasil");
   }
}
   ?>
