<?php  
if((isset($_GET['aksi']))&&(isset($_GET['data']))){ 
if($_GET['aksi']=='hapus'){ 
 $id_produk = $_GET['data']; 

 //get cover 
 $sql_f = "SELECT `gambar` FROM `produk` WHERE `id_produk`='$id_produk'";  
 $query_f = mysqli_query($koneksi,$sql_f); 
 $jumlah_f = mysqli_num_rows($query_f); 
 if($jumlah_f>0){ 
 while($data_f = mysqli_fetch_row($query_f)){ 
 $gambar = $data_f[0]; 
 //menghapus gmbr
 unlink("gmbr/$gambar"); 
 } 
 }

 //hapus data  
 $sql_dm = "delete from `produk` where `id_produk` = '$id_produk'";  
 mysqli_query($koneksi,$sql_dm); 
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
        <h3><i class="fa fa-angle-right"></i> Daftar Produk</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
            <div class="col-md-8"><h4><i class="fa fa-angle-right"></i> List</h4></div>
                <div class="col-md-2"></div>
                <div class="col-md-1"><a href="index.php?include=tambah-produk" class="btn btn-sm btn-info float-left">Tambah  Produk</a></div>
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
                      <th width="30%">kategori</th>
                      <th width="25%">Produk</th>
                      <th width="25%">Berat</th>
                      <th width="15%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql_p = "SELECT `p`.`id_produk`, `p`.`produk`,  
                    `k`.`kategori_produk`,`p`.`berat` FROM `produk` `p` 
                    INNER JOIN `kategori_produk` `k` ON `p`.`id_kategori_produk` =   `k`.`id_kategori_produk` "; 

                    $sql_p .= " order by `produk` ";
                    $query_p = mysqli_query($koneksi,$sql_p); 
                    $no = 1; 
                    while($data_p = mysqli_fetch_row($query_p)){ 
                    $id_produk = $data_p[0]; 
                    $produk = $data_p[1]; 
                    $kategori_produk = $data_p[2]; 
                    $berat = $data_p[3]; 
                    ?>
                    <tr>
                    <td><?php echo $no;?></td>
                      <td><?php echo $kategori_produk;?></td>
                      <td><?php echo $produk;?></td>
                      <td><?php echo $berat;?></td>
                      <td align="center">
                      <a href="index.php?include=edit-produk&data=<?php echo $id_produk;?>" 
                      class="btn btn-xs btn-info"> Edit</a>
                      <a href="index.php?include=detail-produk&data=<?php echo $id_produk;?>" 
                      class="btn btn-xs btn-success"> Detail</a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus data 
                      <?php echo $produk; ?>?'))window.location.href = 
                      'index.php?include=produk&aksi=hapus&data=<?php echo 
                      $id_produk;?>&notif=hapusberhasil'" 
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