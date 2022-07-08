<?php 
   $topping = $_POST['topping'];
        $sql = "insert into `topping` (`topping`) 
        values ('$topping')";
        mysqli_query($koneksi,$sql);
        header("Location:index.php?include=topping&notif=tambahberhasil");
?>