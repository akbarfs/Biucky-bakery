<?php
$id_user = $_SESSION['id_user'];
//get profil
$sql = "select `nama`,`username`, `email`,`foto` from `user` 
where `id_user`='$id_user'";
//echo $sql;
$query = mysqli_query($koneksi, $sql);
while($data = mysqli_fetch_row($query)){
$nama = $data[0];
$username = $data[1];
$email = $data[2];
$foto = $data[3];
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
    <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Profile Admin</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row content-panel">
              <div class="col-md-4 profile-text mt mb centered">
                <div class="right-divider hidden-sm hidden-xs">
                <h4>Notifikasi</h4>
                <h6>      
                <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
                <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-warning" role="alert">Maaf data 
                <?php echo $_GET['jenis'];?> wajib di isi</div>
                <?php }?>
                <?php }?>
                <?php if(!empty($_GET['notif'])){
                if($_GET['notif']=="editberhasil"){?>
                <div class="alert alert-success" role="alert">
                Data Berhasil Diubah</div> <?php }?>
                <?php }?>
                </h6>
                </div>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 profile-text">
                <h3><?php echo $nama;?></h3>
                <p>Nama Anda : <?php echo $nama;?><br>Username Anda : <?php echo $username;?><br>Email Anda : <?php echo $email;?></p>
                <br>
                <p><button class="btn btn-theme02"><a href="index.php?include=edit-profile&data=<?php echo $id_user;?>">Edit Profile</a></button></p>
              </div>
              <!-- /col-md-4 -->
              <div class="col-md-4 centered">
                <div class="profile-pic">
                  <p><img src="foto_profile/<?php echo $foto;?>" class="img-circle"></p>
                  <p>
                    <button class="btn btn-theme02" >Foto Profile</button>
                </div>
                </div>
                </div>
                </div>
                </div>
          <!-- /col-lg-12 -->
          <div class="col-lg-12 mt">
            <div class="row content-panel">
              <div class="panel-heading">
                <ul class="nav nav-tabs nav-justified">
                  <li class="active">
                    <a data-toggle="tab" href="#admin"><?php echo $nama;?></a>
                  </li>
                </ul>
              </div>

              <!-- /panel-heading -->
              <div class="panel-body">
                <div class="tab-content">
                  <div id="overview" class="tab-pane active">
                    <div class="row">
                      <div class="col-md-6">

                    </div>
                          </div>
                          <!-- /col-md-8 -->
                        </div>
                        <!-- /row -->
                      </div>
                      <!-- /col-md-6 -->
                    </div>
                    <!-- /OVERVIEW -->

                </section>
      <!-- /wrapper -->
      
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 

</body>