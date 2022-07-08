<?php
if(isset($_GET['data'])){
$id_produk = $_GET['data'];
$_SESSION['id_produk']=$id_produk;
//get data buku
$sql_m = "SELECT `id_kategori_produk`,`produk`,`berat`,`harga`,`catatan`,`gambar` FROM `produk` WHERE `id_produk`='$id_produk'";
$query_m = mysqli_query($koneksi,$sql_m);
while($data_m = mysqli_fetch_row($query_m)){
$id_kategori_produk= $data_m[0];
$produk = $data_m[1];
$berat = $data_m[2];
    $harga = $data_m[3];
    $catatan = $data_m[4];
    $gambar = $data_m[5];
      }
      $sql_h = "select `id_topping` from `topping_produk` 
        where `id_produk`='$id_produk'";
      $query_h = mysqli_query($koneksi,$sql_h);
      $array_topping = array();
      while($data_h = mysqli_fetch_row($query_h)){
        $id_topping= $data_h[0];
        $array_topping[] = $id_topping;
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
            <h4><i class="fa fa-angle-"></i> Form Edit Produk</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-edit-produk" >
                <div class="col-sm-10">
          <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
          <?php if($_GET['notif']=="editkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data 
            <?php echo $_GET['jenis'];?> wajib di isi</div>
          <?php }?>
          <?php }?>
          </div>
          <div class="form-group ">
                  <label class="control-label col-md-3">Gambar</label>
                  <div class="col-md-4">
                    <input type="file" id="gambar" name="gambar" >
                  </div><div>
                  <select class="form-control" id="kategori_produk" name="kategori_produk">
                    <option value="0">- Pilih Kategori Pakaian -</option>
                    <?php 
                  $sql_k = "SELECT `id_kategori_produk`,`kategori_produk` FROM 
                  `kategori_produk` ORDER BY `kategori_produk`";
                  $query_k = mysqli_query($koneksi, $sql_k);
                  while($data_k = mysqli_fetch_row($query_k)){
                  $id_kat = $data_k[0];
                  $kat = $data_k[1];
                  ?>
                  <option value="<?php echo $id_kat;?>" 
                  <?php if($id_kat==$id_kategori_produk){?>
                  selected <?php }?>><?php echo $kat;?></option>
                <?php }?>
                    </select>
                    </div>
                    <label for="edit_pakaian" class="control-label col-lg-2">Produk</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="produk" name="produk" minlength="1" type="text" value="<?php echo $produk;?>" required />
                    </div>
                    <br>
                    <label for="edit_pakaian" class="control-label col-lg-2">Berat</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="berat" name="berat" minlength="1" type="text" value="<?php echo $berat;?>" required />
                    </div>
                    <br>
                    <label for="edit_pakaian" class="control-label col-lg-2">Harga</label>
                      <div class="col-lg-10">
                      <input class=" form-control" id="harga" name="harga" minlength="1" type="text" value="<?php echo $harga;?>" required />
                      </div>
                    <hr>
    <label for="edit_pakaian" class="control-label col-lg-2">Topping</label>
              <div class="col-lg-10">
          <?php 
          $sql_g = "SELECT `id_topping`,`topping` FROM `topping`
          ORDER BY `topping`";
          $query_g = mysqli_query($koneksi, $sql_g);
          while($data_g = mysqli_fetch_row($query_g)){
          $id_tg = $data_g[0];
          $tg = $data_g[1];
          ?>
          <input type="checkbox" name="topping[]" value="<?php echo $id_tg;?>"
          <?php if(in_array($id_tg, $array_topping)){?>checked="checked" <?php }?>> 
          <?php echo $tg;?> </br>
          <?php }?>
          </div>
          
                    <br>
                    <label for="detail" class="control-label col-lg-2">Catatan</label>
                    <div class="col-lg-10">
                    <textarea class="form-control" name="catatan" id="editor1" minlength="1" required rows="5"><?php echo $catatan;?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Simpan</button>
                      <button class="btn btn-theme04"><a href="index.php?include=produk">Kembali</a></button>
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