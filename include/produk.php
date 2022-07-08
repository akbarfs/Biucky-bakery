<div id="gallery" class="layout_padding2 gallery_section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<div class="gallery_main">
					    <h1 class="gallery_taital"><strong><span class="our_text">Biucky</span> Produk</strong></h1>
					</div>
				</div>
<div class="product-bg">
         <div class="product-bg-white">
         <div class="container">
            <div class="row">
            <?php 
            $sql_p = "SELECT `id_produk`, `produk`, `gambar` FROM `produk`";
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
			</div>
            <?php }?>
        </div>
        </div>
    </div>
</div>
