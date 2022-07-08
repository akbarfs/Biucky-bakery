<?php 
  if(isset($_GET['data'])){
    $id_kategori_produk = $_GET['data'];
    $_SESSION['id_kategori_produk']=$id_kategori_produk;

    //get data kategori produk
  $sql_d = "select `kategori_produk` from `kategori_produk` where 
  `id_kategori_produk` = '$id_kategori_produk'";
  $query_d = mysqli_query($koneksi,$sql_d);
  while($data_d = mysqli_fetch_row($query_d)){
    $kategori_produk= $data_d[0];
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
                <!-- FORM VALIDATION -->
                <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-"></i> Form Edit kategori produk</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="index.php?include=konfirmasi-edit-kategori-produk">
                  <div class="form-group ">
                    <label for="edit_kategori_produk" class="control-label col-lg-2">Kategori Produk</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="kategoriproduk" name="kategori_produk" type="text" value="<?php echo $kategori_produk;?>" minlength="2" required />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Simpan</button>
                      <button class="btn btn-theme04"><a href="index.php?include=kategori-produk">Kembali</a></button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->

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