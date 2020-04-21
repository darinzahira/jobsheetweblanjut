<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url()?>assets/assets_shop/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Choose Your Car</h1>
          </div>
        </div>
      </div>
    </section>
		

		<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
            <?php foreach ($mobil as $mbl) : ?>
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url(<?= base_url()?>assets/assets_shop/images/<?= $mbl['gambar'];?>);">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="#"><?= $mbl['merk'];?></a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat"><?= $mbl['kode_type'];?></span>
	    						<p class="price ml-auto">Rp. <?= number_format($mbl['harga'],0,',','.');?> <span>/day</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block">
                            <?php if($mbl['status'] == "0"){ ?>
                                            <a href="#" class="btn btn-danger py-2 mr-1">Not Available</a>
                                        <?php }else{ ?>
                                            <a href="<?= base_url('Customer/Data_transaksi/tambah_transaksi?id_mobil='.$mbl['id_mobil'])?>" class="btn btn-primary py-2 mr-1">Book Now</a>;
                                        <?php } ?>
                            <a href="<?= base_url(); ?>Customer/Data_mobil/detail_mobil/<?= $mbl['id_mobil'];?>" class="btn btn-secondary py-2 ml-1">Details</a>
                            </p>
    					</div>
    				</div>
    			</div>
    			<?php endforeach; ?>
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>


    
    
    