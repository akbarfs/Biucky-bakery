<?php include("koneksi/koneksi.php");
if(isset($_GET["include"])){
$include = $_GET["include"];
if($include=="konfirmasi-hubungi"){
    include("include/konfirmasi_hubungi.php");
}
}
?>
<!doctype html>
<html lang="en">
    <head>
        <?php include("include/head.php");?>
    </head>
    <body>
    <?php
    //<!-- loader  -->
    //<div class="loader_bg">
        //<div class="loader"><img src="images/loading1.gif" alt="#" /></div>
    //</div>
    
    ?>
      <!-- end loader --> 
        <?php include("include/navigasi.php");?>
        <?php 
        if(isset($_GET["include"])){
            $include = $_GET["include"];
            if($include=="detail-produk"){
            include("include/detail-produk.php");
            }else if($include=="about"){
            include("include/about.php");
            }else if($include=="produk"){
                include("include/produk.php");
            }else if($include=="kontak"){
                include("include/kontak.php");
            }else{ 
            include("include/index.php");
            }
            }else{
            include("include/index.php");
            }
        ?>
                   
        <?php include("include/footer.php");?>
        <?php include("include/script.php");?>
    </body>
</html>