<?php 
    $id_kategori_produk = $_POST['kategori_produk'];
    $produk = $_POST['produk'];
    $berat = $_POST['berat'];
    $harga = $_POST['harga'];
    $catatan = $_POST['catatan'];
    $lokasi_f = $_FILES['gambar']['tmp_name'];
    $nama_f = $_FILES['gambar']['name'];
    $direktori = 'gmbr/'.$nama_f;
    $topping = $_POST['topping'];

if(!move_uploaded_file($lokasi_f,$direktori)){
        header("Location:index.php?include=tambah-produk&notif=tambahkosong&jenis=foto");
    }else if(empty($id_kategori_produk)){ 
        header("Location:index.php?include=tambah-produk&notif=tambahkosong&jenis=kategori_produk");
    }else if(empty($topping)){ 
        header("Location:index.php?include=tambah-produk&notif=tambahkosong&jenis=topping");
    }else{ 
        $sql = "INSERT INTO `produk` 
        (`id_kategori_produk`,`produk`,`berat`,`harga`,
        `gambar`,`catatan`)
        VALUES ('$id_kategori_produk','$produk','$berat','$harga',
        '$nama_f','$catatan')";
        //echo $sql;
        mysqli_query($koneksi,$sql);
        $id_produk = mysqli_insert_id($koneksi);
        
        if(!empty($_POST['topping'])){
            foreach($_POST['topping'] as $id_topping){
                $sql_i = "insert into `topping_produk` (`id_produk`, `id_topping`) 
                values ('$id_produk', '$id_topping')";
                mysqli_query($koneksi,$sql_i);
            }
        }
        header("Location:index.php?include=produk&notif=tambahberhasil");
    }

?>