<!DOCTYPE html>
<html lang="en">
<body>
	<!-- banner start-->
	<div class="layout_padding banner_section">
		<div class="container">
           <div id="main_slider" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row ">
				<div class="col-md-6 taital">
				<h1>Penawaran<strong class="banner_taital">Produk dari Biucky Bakery</strong></h1>
                     <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
				</div>
				<div class="col-md-6">
					<div class="banner-image"><img src="images/slide.png" style="max-width: 100%;"></div>
				</div>
				<div class="banner_bt">
				<button class="bt_main"><a href="index.php?include=produk">Selengkapnya</a></button>
				</div>
			</div>
    </div>
    <div class="carousel-item">
      <div class="row ">
				<div class="col-md-6 taital">
					<h1>Penawaran<strong class="banner_taital">Produk dari Biucky Bakery</strong></h1>
                     <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
				</div>
				<div class="col-md-6">
					<div class="banner-image"><img src="images/slide.png" style="max-width: 100%;"></div>
				</div>
				<div class="banner_bt">
				<button class="bt_main"><a href="index.php?include=produk">Selengkapnya</a></button>
				</div>
			</div>
    </div>
    <div class="carousel-item">
     <div class="row ">
				<div class="col-md-6 taital">
				<h1>Penawaran<strong class="banner_taital">Produk dari Biucky Bakery</strong></h1>
                     <p class="lorem_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
				</div>
				<div class="col-md-6">
					<div class="banner-image"><img src="images/slide.png" style="max-width: 100%;"></div>
				</div>
				<div class="banner_bt">
				<button class="bt_main"><a href="index.php?include=produk">Selengkapnya</a></button>
				</div>
			</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fa fa-angle-left"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"><i class="fa fa-angle-right"></i></span>
    <span class="sr-only">Next</span>
  </a>
</div>
			
		</div>
	</div>
    </div>
	</header>
	<!-- banner end-->
	<!-- about start-->

<?php 
 $sql_k = "SELECT `judul`,`isi` FROM `konten` WHERE 
 `id_konten`='2'";
 $query_k = mysqli_query($koneksi,$sql_k);
 while($data_k = mysqli_fetch_row($query_k)){
 $judul_konten = $data_k[0];
 $isi_konten = $data_k[1];
 }
 ?>

	<div id="about" class="layout_padding about_section">
		<div class="container">
			<div class="row">
		        <div class="col-md-6">
		        	<div><img src="images/img.png" style="max-width: 100%;"></div>
		        </div>
		        <div class="col-md-6">
		        	<h1 class="about_text"><strong><?php echo $judul_konten;?></strong></h1>
		        	<p class="about_taital"><?php echo $isi_konten;?></p>
		        	<button class="read_more"><a href="index.php?include=about">About us</a></button>
		        </div>
			</div>
		</div>
	</div>
	<!-- product start-->
	<div id="products" class="layout_padding product_section ">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="product_text"><strong><span class="den">Biucky</span>Products</strong></h1>
				</div>
			</div>
		    <div class="product_section_2 images">
			    <div class="row">
				<?php 
            $sql_p = "SELECT `id_produk`, `produk`, `gambar` FROM `produk` ORDER BY `produk` DESC LIMIT 6";
            $query_p = mysqli_query($koneksi,$sql_p);
            while($data_p = mysqli_fetch_row($query_p)){
                $id_produk = $data_p[0];
                $produk = $data_p[1];
                $gambar = $data_p[2];
            ?>

			    	<div class="col-sm-4">
			    		<div class="images"><a href="index.php?include=detail-produk&data=<?php echo $id_produk;?>"><img src="Admin/gmbr/<?php echo $gambar;?>" style="max-width: 100%; width: 100%;"></a></div>
			    		<h2 class="den_text croissants"><?php echo $produk;?></h2>
			    	</div>
					<?php }?>
				    </div>
		    </div>
		</div>
	</div>
	<!-- product end-->
	<!-- Gallery start-->
	<div id="gallery" class="layout_padding2 gallery_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="gallery_main">
					    <h1 class="gallery_taital"><strong><span class="our_text">Biucky</span> Gallery</strong></h1>
					</div>
				</div>
				<div class="col-sm-12 gallery_maain">
					<div class="row">
						<div class="col-sm-3 padding_0">
							<div class="gallery_blog">
								<img class="img-responive" src="images/biuckygalery01.jpg">
								<div class="overlay">
									<h2>Biucky Bakery</h2>
								</div>
							</div>
						</div>
                        <div class="col-sm-3 padding_0">
							<div class="gallery_blog">
								<img class="img-responive" src="images/biuckygalery02.jpg">
								<div class="overlay">
									<h2>Biucky Bakery</h2>
								</div>
							</div>
                        </div>
                        <div class="col-sm-3 padding_0">
							<div class="gallery_blog">
								<img class="img-responive" src="images/biuckygalery03.jpg">
								<div class="overlay">
									<h2>Biucky Bakery</h2>
								</div>
							</div>
                        </div>
                        <div class="col-sm-3 padding_0">
							<div class="gallery_blog">
								<img class="img-responive" src="images/biuckygalery04.jpg">
								<div class="overlay">
									<h2>Biucky Bakery</h2>
								</div>
							</div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<hr>
	<!-- end Gallery-->

</body>
</html>