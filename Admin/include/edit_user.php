<?php
if (isset($_GET['data'])) {
    $id_user = $_GET['data'];
    $_SESSION['user'] = $id_user;
    $sql_d = "SELECT * from `user` where `id_user` = '$id_user'";
    $query_d = mysqli_query($koneksi, $sql_d);
    while ($data = mysqli_fetch_array($query_d)) {
        //$id_user = $data['id_user'];
        $nama = $data['nama'];
        $email = $data['email'];
        $username = $data['username'];
        $password = $data['password'];
        $level = $data['level'];
        $Foto = $data['foto'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include("includes/head.php") ?> 

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
                <!-- FORM VALIDATION -->
                <div class="row mt">
          <div class="col-lg-12">
            <h4><i class="fa fa-angle-"></i> Form Edit User</h4>
            <div class="form-panel">
              <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-edit-user" >
                <div class="col-sm-10">
          <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
          <?php if($_GET['notif']=="tambahkosong"){?>
            <div class="alert alert-danger" role="alert">Maaf data 
            <?php echo $_GET['jenis'];?> wajib di isi</div>
          <?php }?>
          <?php }?>
          </div>
                  <div class="form-group ">
                  <label class="control-label col-md-3">Foto</label>
                  <div class="col-md-4">
                    <input type="file" id="foto" name="foto" >
                  </div><hr>
                    <label for="edit_user" class="control-label col-lg-2">Nama</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nama" name="nama" minlength="1" type="text" value="<?php echo $nama;?>" required />
                    </div>
                    <br>
                    <label for="edit_user" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="email" name="email" minlength="1" type="text" value="<?php echo $email;?>" required />
                    </div>
                    <label for="edit_user" class="control-label col-lg-2">Username</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="username" id="username" minlength="1" type="text" value="<?php echo $username;?>" required />
                                    </div>
                                    <label for="edit_user" class="control-label col-lg-2">Password</label>
                                    <div class="col-lg-10">
                                        <input type="password" class="form-control" name="password" id="password">
                                        <span class="text-danger" style="font-weight:lighter;font-size:12px">
                                            *Jangan diisi jika tidak ingin mengubah password</span>
                                    </div>
                                    <label for="edit_user" class="control-label col-lg-2">Level</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" id="level" name="level">
                                            <option value="Superadmin" <?php if ($level == "Superadmin") {
                                                                            echo "selected";
                                                                        } ?>>Superadmin</option>
                                            <option value="Admin" <?php if ($level == "Admin") {
                                                                        echo "selected";
                                                                    } ?>>Admin</option>
                                        </select>
                                    </div>
                                                                </div>


                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit">Simpan</button>
                      <button class="btn btn-theme04"><a href="user.php">Kembali</a></button>
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
    <?php include("includes/script.php") ?> 

</body>

</html>