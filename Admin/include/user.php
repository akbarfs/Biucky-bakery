<?php
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
if($_GET['aksi']=='hapus'){
$id_user = $_GET['data'];
//hapus user
$sql_dh = "delete from `user`
where `id_user` = '$id_user'";
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
                <div class="col-md-1"><a href="index.php?include=tambah-user" class="btn btn-sm btn-info float-left">Tambah  User</a></div>
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
                      <th width="30%">Nama</th>
                      <th width="25%">Email</th>
                      <th width="25%">Level</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                $sql = "SELECT `id_user`, `nama`, `email`, `level` FROM `user` where `id_user` != '$id_user' ";
                $sql .= " ORDER BY `nama` ";
                $query_k = mysqli_query($koneksi,$sql);
                $no = 1;
                while($data_k = mysqli_fetch_row($query_k)){
                $user = $data_k[0];
                $nama = $data_k[1];
                $email = $data_k[2];
                $level = $data_k[3];
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                      <td><?php echo $nama;?></td>
                      <td><?php echo $email;?></td>
                      <td><?php echo $level;?></td>
                      <td align="center">
                      <a href="index.php?include=edit-user&data=<?= $user;?>"
                     class="btn btn-xs btn-info"> Edit</a>
                      <a href="index.php?include=detail-user&data=<?= $user;?>" 
                      class="btn btn-xs btn-success"> Detail</a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus data <?= $nama; ?>?'))window.location.href='index.php?include=user&aksi=hapus&data=<?= $user;?>&notif=hapusberhasil'" 
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
