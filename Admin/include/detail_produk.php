<?php 
      if(isset($_GET['data'])){
      $id_produk = $_GET['data'];
      //gat data pakaian
      $sql = "SELECT `p`.`gambar`,`k`.`kategori_produk`,`p`.`produk`,
      `p`.`berat`,`p`.`harga`,`p`.`catatan` FROM `produk` `p`
      INNER JOIN `kategori_produk` `k` ON 
      `p`.`id_kategori_produk`=`k`.`id_kategori_produk`
      WHERE `p`.`id_produk`='$id_produk'";
      $query = mysqli_query($koneksi,$sql);
      while($data = mysqli_fetch_row($query)){
        $gambar = $data[0];
        $kategori_produk = $data[1];
        $produk = $data[2];
        $berat = $data[3];
        $harga = $data[4];
        $catatan = $data[5];
      }
    }
?>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <?php include("includes/header.php") ?> 
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <?php include("includes/sidebar.php") ?> 
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Detail Pakaian</h3>
        <div class="row mt">
          <div class="col-lg-12">
                <table class="table table-bordered">
                    <tbody>                      
                      <tr>
                        <td><strong>Gambar<strong></td>
                        <td><img src="gmbr/<?php echo $gambar;?>" class="img-fluid" width="200px;"></td>
                      </tr>               
                      <tr>
                        <td width="20%"><strong>Kategori Produk<strong></td>
                        <td width="80%"><?php echo $kategori_produk;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>produk<strong></td>
                        <td width="80%"><?php echo $produk;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>berat<strong></td>
                        <td width="80%"><?php echo $berat;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>harga<strong></td>
                        <td width="80%"><?php echo $harga;?></td>
                      </tr>

                      <tr>
                        <td><strong>Topping<strong></td>
                        <td>
                          <?php
                            $sql_h = "SELECT `t`.`topping` from `topping_produk` `tb`
                            inner join `topping` `t` ON `tb`.`id_topping` = `t`.`id_topping` 
                            where `tb`.`id_produk`='$id_produk'";
                            $query_h = mysqli_query($koneksi,$sql_h);
                            while($data_h = mysqli_fetch_row($query_h)){
                            $topping= $data_h[0];
                            ?>
                            <ul><?php echo $topping;?></ul>
                            <?php }?>
                        </td>
                      </tr>

                      <tr>
                        <td width="20%"><strong>Catatan<strong></td>
                        <td width="80%"><?php echo $catatan;?></td>
                      </tr> 
                    </tbody>
                  </table>  
                  <button class="btn btn-theme04"><a href="index.php?include=produk">Kembali</a></button>
                </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 

</body>

</html>
