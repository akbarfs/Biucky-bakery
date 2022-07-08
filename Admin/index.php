<?php
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
$include = $_GET["include"];
if($include=="konfirmasi-login"){
    include("include/konfirmasilogin.php");
}else if($include=="log-out"){
    include("include/logout.php");
}else if($include=="konfirmasi-tambah-kategori-produk"){
    include("include/konfirmasi_tambah_kategori_produk.php");
}else if($include=="konfirmasi-edit-kategori-produk"){
    include("include/konfirmasi_edit_kategori_produk.php");
}else if($include=="konfirmasi-tambah-topping"){
    include("include/konfirmasi_tambah_topping.php");
}else if($include=="konfirmasi-edit-topping"){
    include("include/konfirmasi_edit_topping.php");
}else if($include=="konfirmasi-edit-konten"){
    include("include/konfirmasi_edit_konten.php");
}else if($include=="konfirmasi-tambah-produk"){
    include("include/konfirmasi_tambah_produk.php");
}else if($include=="konfirmasi-edit-produk"){
    include("include/konfirmasi_edit_produk.php");
}else if($include=="konfirmasi-tambah-user"){
    include("include/konfirmasi_tambah_user.php");
}else if($include=="konfirmasi-edit-user"){
    include("include/konfirmasi_edit_user.php");
}else if($include=="konfirmasi-edit-profile"){
    include("include/konfirmasi_edit_profile.php");
}    
}
?>
<!DOCTYPE html>
<head>
<?php include("includes/head.php");?>
</head>

        <?php 
        if(isset($_GET["include"])){
            $include = $_GET["include"];
            if(isset($_SESSION['id_user'])){
                $id_user = $_SESSION['id_user'];
                $sql = "select `nama`,`username`, `foto` , `level` from `user` 
                where `id_user`='$id_user'";
                $query = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_row($query)){
                $nama = $data[0];
                $username = $data[1];
                $foto = $data[2];
                $level = $data[3];
                }

                if($include=="kategori-produk"){
                    include("include/kategori_produk.php");
                }else if($include=="tambah-kategori-produk"){
                    include("include/tambah_kategori_produk.php");
                }else if($include=="edit-kategori-produk"){
                    include("include/edit_kategori_produk.php");
                }else if($include=="topping"){
                    include("include/topping.php");
                }else if($include=="tambah-topping"){
                    include("include/tambah_topping.php");
                }else if($include=="edit-topping"){
                    include("include/edit_topping.php");
                }else if($include=="konten"){
                    include("include/konten.php");
                }else if($include=="detail-konten"){
                    include("include/detail_konten.php");
                }else if($include=="edit-konten"){
                    include("include/edit_konten.php");
                }else if($include=="produk"){
                    include("include/produk.php");
                }else if($include=="tambah-produk"){
                    include("include/tambah_produk.php");
                }else if($include=="detail-produk"){
                    include("include/detail_produk.php");
                }else if($include=="edit-produk"){
                    include("include/edit_produk.php");
                }else if($include=="user"){
                    include("include/user.php");
                }else if($include=="tambah-user"){
                    include("include/tambah_user.php");
                }else if($include=="detail-user"){
                    include("include/detail_user.php");
                }else if($include=="edit-user"){
                    include("include/edit_user.php");
                }else if($include=="pesan"){
                    include("include/pesan.php");
                }else if($include=="edit-profile"){
                    include("include/edit_profile.php");
                }else if($include=="profile"){
                include("include/profile.php");
                } 
                }else{
                    include("include/login.php");
                } 
                }else{
                if(isset($_SESSION['id_user'])){
                //pemanggilan ke halaman-halaman profil jika ada session
                include("include/profile.php");
                }else{
                //pemanggilan halaman form login
                include("include/login.php");
                }
               }            
        ?>    
</html>