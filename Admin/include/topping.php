<?php 
    if((isset($_GET['aksi']))&&(isset($_GET['data']))){
      if($_GET['aksi']=='hapus'){
        $id_topping = $_GET['data'];

    //hapus merek
    $sql_dh = "delete from `topping` 
    where `id_topping` = '$id_topping'";
    mysqli_query($koneksi,$sql_dh);
  }
}
?>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <?php include("includes/header.php") ?> 
        <?php include("includes/sidebar.php") ?> 
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Daftar Topping</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i> List</h4></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"><a href="index.php?include=tambah-topping" class="btn btn-sm btn-info float-left">Tambah  Merek</a></div>
              <br>
              <div class="col-sm-12">
                <?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="tambahberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Ditambahkan</div>
                  <?php } else if($_GET['notif']=="editberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Diubah</div>
                  <?php } else if($_GET['notif']=="hapusberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Dihapus</div>
                <?php }?>
                <?php }?>
                </div>
              <section id="unseen">
                <table class="table table-bordered table-striped table-condensed">
                  <thead>
                    <tr>
                      <th width="5%">No</th>
                      <th width="50%">Topping</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql_m = "SELECT `id_topping`,`topping` 
                    FROM `topping` ";
                    $sql_m .= " ORDER BY `topping` ";
                    $query_m = mysqli_query($koneksi,$sql_m);
                    $no = 1;
                    while($data_k = mysqli_fetch_row($query_m)){
                    $id_topping = $data_k[0];
                    $topping = $data_k[1];
                    ?>
                    <tr>
                    <td><?php echo $no;?></td>
                      <td><?php echo $topping;?></td>
                      <td align="center">
                      <a href="index.php?include=edit-topping&data=<?php echo $id_topping;?>" 
                      class="btn btn-xs btn-info"> Edit</a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus data 
                      <?php echo $topping; ?>?'))window.location.href = 
                      'index.php?include=topping&aksi=hapus&data=<?php echo 
                      $id_topping;?>&notif=hapusberhasil'" 
                      class="btn btn-xs btn-warning"> Hapus</a>
                      </td>
                    </tr>
                    <?php $no++;}?>
                  </tbody>
                </table>
              </section>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?>
  </section>
  <?php include("includes/script.php") ?>
</body>

</html>