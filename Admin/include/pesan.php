<?php
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
if($_GET['aksi']=='hapus'){
$id_pelanggan = $_GET['data'];
//hapus user
$sql_dh = "delete from `pelanggan`
where `id_pelanggan` = '$id_pelanggan'";
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
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <?php include("includes/sidebar.php") ?> 
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Daftar Admin</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
            <div class="col-md-8"><h4><i class="fa fa-angle-right"></i> List</h4></div>
                <div class="col-md-2"></div>
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
                      <th width="15%">Nama</th>
                      <th width="25%">Email</th>
                      <th width="40%">Pesan</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                $sql = "SELECT `id_pelanggan`, `nama`, `email`, `pesan` FROM `pelanggan` ";
                $sql .= " ORDER BY `nama` ";
                $query_k = mysqli_query($koneksi,$sql);
                $no = 1;
                while($data_k = mysqli_fetch_row($query_k)){
                $id_pelanggan = $data_k[0];
                $nama = $data_k[1];
                $email = $data_k[2];
                $pesan = $data_k[3];
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                      <td><?php echo $nama;?></td>
                      <td><?php echo $email;?></td>
                      <td><?php echo $pesan;?></td>
                      <td align="center">
                      <a href="index.php?include=detail-pesan&data=<?php echo $id_pelanggan;?>" 
                      class="btn btn-xs btn-success"> Detail</a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus data 
                      <?php echo $nama; ?>?'))window.location.href = 
                      'index.php?include=pesan&aksi=hapus&data=<?php echo 
                      $id_pelanggan;?>&notif=hapusberhasil'" 
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
    <?php include("includes/script.php") ?> 

</body>

</html>
