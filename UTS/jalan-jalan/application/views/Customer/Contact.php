<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url()?>assets/assets_shop/images/image_6.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
        	<div class="col-md-4">
        		<div class="row mb-5">
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-map-o"></span>
			          	</div>
			            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-mobile-phone"></span>
			          	</div>
			            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
			          </div>
		          </div>
		          <div class="col-md-12">
		          	<div class="border w-100 p-4 rounded mb-2 d-flex">
			          	<div class="icon mr-3">
			          		<span class="icon-envelope-o"></span>
			          	</div>
			            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
			          </div>
		          </div>
		        </div>
          </div>
          <div class="col-md-8 block-9 mb-md-5">
          <?php echo $this->session->flashdata('pesan') ?>
            <form method ="POST" action="<?php echo base_url('Contact/tambah_contact')?>" class="bg-light p-5 contact-form">
              <div class="form-group">
                <input type="text" id="nama" class="form-control" name="nama" placeholder="Your Name">
                <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
              </div>
              <div class="form-group">
                <input type="text" id="email" class="form-control" name="email"  placeholder="Your Email">
                <?php echo form_error('email','<div class="text-small text-danger">','</div>') ?>
              </div>
              <div class="form-group">
                <input type="text" id="subject" class="form-control" name="subject"  placeholder="Subject">
                <?php echo form_error('subject','<div class="text-small text-danger">','</div>') ?>
              </div>
              <div class="form-group">
                <textarea name="pesan" id="pesan" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                <?php echo form_error('pesan','<div class="text-small text-danger">','</div>') ?>
              </div>
              <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Send Message
                    </button>
                  </div>
            </form>
          
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-md-12">
        		<div id="map" class="bg-white"></div>
        	</div>
        </div>
      </div>
    </section>