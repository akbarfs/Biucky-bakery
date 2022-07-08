<?php 
  if(isset($_GET['data'])){
    $id_konten = $_GET['data'];
    $_SESSION['id_konten']=$id_konten;

    //get data konten
  $sql_d = "select `judul`,`tanggal`,`isi` from `konten` where 
  `id_konten` = '$id_konten'";
  $query_d = mysqli_query($koneksi,$sql_d);
  while($data_d = mysqli_fetch_row($query_d)){
    $judul= $data_d[0];
    $tanggal=$data_d[1];
    $isi=$data_d[2];
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
        <h3><i class="fa fa-angle-right"></i> Detail Konten</h3>
        <div class="row mt">
          <div class="col-lg-12">
                <table class="table table-bordered">
                    <tbody>                      
                      <tr>
                        <td width="20%"><strong>Judul<strong></td>
                        <td width="80%"><?php echo $judul;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Isi<strong></td>
                        <td width="80%"><?php echo $isi;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Tanggal Edit<strong></td>
                        <td width="80%"><?php echo $tanggal;?></td>
                      </tr>
                    </tbody>
                  </table>  
                  <button class="btn btn-theme04"><a href="index.php?include=konten">Kembali</a></button>

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
