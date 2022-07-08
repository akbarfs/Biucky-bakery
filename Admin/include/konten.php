<?php
$id_user = $_SESSION['id_user'];
//get profil
$sql = "select `nama`,`foto` from `user` 
where `id_user`='$id_user'";
//echo $sql;
$query = mysqli_query($koneksi, $sql);
while($data = mysqli_fetch_row($query)){
$nama = $data[0];
$foto = $data[1];
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
        <h3><i class="fa fa-angle-right"></i> Daftar Konten</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> List</h4>
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
                      <th width="30%">Judul</th>
                      <th width="25%">Tanggal</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql_k = "SELECT `id_konten`,`judul`,`tanggal` FROM `konten`"; 
                    $sql_k .= " order by `judul` ";
                    $query_k = mysqli_query($koneksi,$sql_k); 
                    $no = 1; 
                    while($data_k = mysqli_fetch_row($query_k)){ 
                    $id_konten = $data_k[0]; 
                    $judul = $data_k[1]; 
                    $tanggal = $data_k[2];  
                    ?>
                    <tr>
                    <td><?php echo $no;?></td>
                      <td><?php echo $judul?></td>
                      <td><?php echo $tanggal;?></td>
                      <td align="center">
                      <a href="index.php?include=edit-konten&data=<?php echo $id_konten;?>" 
                      class="btn btn-xs btn-info"> Edit</a>
                      <a href="index.php?include=detail-konten&data=<?php echo $id_konten;?>" 
                      class="btn btn-xs btn-warning"> Detail</a>
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