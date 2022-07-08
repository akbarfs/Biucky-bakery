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
            <h4><i class="fa fa-angle-"></i> Form Tambah Produk</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-tambah-produk" >
                <div class="col-sm-10">
          <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
          <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf Anda Belum Mengisi Data 
            <?php echo $_GET['jenis'];?></div>
          <?php }?>
          <?php }?>
          </div>
          <div class="form-group ">
                  <label class="control-label col-md-3">Gambar</label>
                  <div class="col-md-4">
                    <input type="file" id="CustomFile" name="gambar" >
                  </div>
          </div>
          <div class="form-group ">
                  <select class="form-control" id="kategori" name="kategori_produk">
                    <option value="0">- Pilih Kategori Produk -</option>
                    <?php 
                  $sql_k = "SELECT `id_kategori_produk`,`kategori_produk` FROM 
                  `kategori_produk` ORDER BY `kategori_produk`";
                  $query_k = mysqli_query($koneksi, $sql_k);
                  while($data_k = mysqli_fetch_row($query_k)){
                  $id_kat = $data_k[0];
                  $kat = $data_k[1];
                  ?>
                  <option value="<?php echo $id_kat;?>"><?php echo $kat;?></option>
                <?php }?>
                    </select>
                    </div>
                    <div class="form-group ">
                    <label for="edit_produk" class="control-label col-lg-2">Produk</label>
                    <div class="col-lg-10">
                      <input class=" form-control" name="produk" id="produk" minlength="1" type="text" value="" required />
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="edit_produk" class="control-label col-lg-2">Berat</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="berat" name="berat" minlength="1" type="text" value="" required />
                    </div>
                    </div>
                    <div class="form-group ">
                    <label for="edit_pakaian" class="control-label col-lg-2">Harga</label>
                      <div class="col-lg-10">
                      <input class=" form-control" id="harga" name="harga" minlength="1" type="text" value="" required />
                      </div>
                    </div>
                    <div class="form-group ">
                    <label for="detail" class="control-label col-lg-2">Catatan</label>
                    <div class="col-lg-10">
                    <textarea class="form-control" name="catatan" id="editor1" minlength="1" required rows="5"></textarea>
                    </div>
                    </div>
                    <div class="form-group row">
            <label for="topping" class="col-sm-3 col-form-label">topping</label>
            <div class="col-sm-7">
            <?php 
            $sql_g = "SELECT `id_topping`,`topping` FROM `topping`
            ORDER BY `topping`";
            $query_g = mysqli_query($koneksi, $sql_g);
            while($data_g = mysqli_fetch_row($query_g)){
            $id_top = $data_g[0];
            $top = $data_g[1];
            ?>
            <input type="checkbox" name="topping[[]" value="<?php echo $id_top;?>"> 
            <?php echo $top;?> </br>
            <?php }?>
            </div>
          </div>

                  
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Simpan</button>
                      <button class="btn btn-theme04"><a href="index.php?include=topping">Kembali</a></button>
                    </div>
                  </div>
                </form>
              </div>
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