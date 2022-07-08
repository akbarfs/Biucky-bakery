    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        <p class="centered"><a href="index.php?include=profile"><img src="foto_profile/<?php echo $foto;?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?php echo $nama;?></h5>
        <li class="mt">
            <a class="active" href="index.php?include=profile">
              <i class="fa fa-dashboard"></i>
              <span>Profile</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>Data Master</span>
              </a>
            <ul class="sub">
              <li><a href="index.php?include=kategori-produk">Kategori Produk</a></li>
              <li><a href="index.php?include=topping">Topping</a></li>
            </ul>
          </li>
          <li>
            <a href="index.php?include=konten">
            <i class="fa fa-book"></i>
              <span>Konten</span>
              </a>
          </li>
          <li>
            <a href="index.php?include=produk">
              <i class="fa fa-th"></i>
              <span>Produk</span>
              </a>
          </li>
          <li>
            <a href="index.php?include=pesan">
            <i class="fa fa-envelope"></i>
              <span>Pesan</span>
              </a>
          </li>
          
        <?php
          if ($level=="Superadmin"){?>
          <li class="sub-menu">
            <a href="index.php?include=user">
            <i class="fa fa-cogs"></i>
              <span>Pengaturan user</span>
              </a>
          </li>
          <?php }?>
          <li>
            <a href="index.php?include=log-out">
              <i class="fa fa-th"></i>
              <span>Log out</span>
              </a>
          </li>

          <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->