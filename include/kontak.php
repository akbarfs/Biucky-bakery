	<!-- Touch start-->
	<div class="layout_padding gallery_section">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="gallery_main">
					    <h1 class="gallery_taital"><strong><span class="our_text">Kirim</span>Pesan</strong></h1>
					</div>
				</div>
			</div>

    <!-- contact -->
    <div class="touch_main">
		<div class="row">
			<div class="col-md-6">
                <div class="input_main">
                    <div class="container">
                 <div class="col-md-12">
                 <div class="form-group">
                 <?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="berhasildikirim"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Dikirim</div>
                <?php }?>
                <?php }?>
                   <form class="main_form" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-hubungi">
                              <input type="text" class="email-bt" placeholder="YOUR NAME" name="nama" minlength="2" required />
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="EMAIL" name="email" minlength="2" required />
                            </div>
                            <div class="form-group">
                              <input type="text" class="email-bt" placeholder="PHONE NUMBER" name="telepon" minlength="2" required />
                            </div>
                            <div class="form-group">
                               <textarea class="massage-bt" placeholder="MASSAGE" rows="5" id="comment" name="pesan" minlength="2" required ></textarea>
                            </div>
                            <div class="send_btn">
                           <button type="submi" class="main_bt">SEND</button>                  
                        </div>
                          </form> 
                       </div> 
                    </div>
			</div>
		</div>	
	</div>	
	<div class="map_section">
		<div class="row">
			<div class="col-sm-12">
                <div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1977.250867910395!2d110.6092888396885!3d-7.629064598631556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a4204a4dc861b%3A0xfbe7ac74207d6a50!2sPandean%2C%20Pandeyan%2C%20Kec.%20Jatinom%2C%20Kabupaten%20Klaten%2C%20Jawa%20Tengah%2057481!5e0!3m2!1sid!2sid!4v1623553484945!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            </div>
        </div>
    </div>
	
</div>
	</div>
	<!-- Touch end-->
