<?php 
if(isset($_SESSION['id_topping'])){
    $id_topping = $_SESSION['id_topping'];
    $topping = $_POST['topping'];
        $sql = "update `topping` set `topping`='$topping' 
        where `id_topping`='$id_topping'";
        mysqli_query($koneksi,$sql);
        unset($_SESSION['id_topping']);
        header("Location:index.php?include=topping&notif=editberhasil");
}
?>