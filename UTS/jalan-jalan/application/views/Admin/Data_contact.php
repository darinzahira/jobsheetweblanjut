<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url()?>assets/assets_shop/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>About us <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Message</h1>
          </div>
        </div>
      </div>
    </section>

<section class="ftco-section ftco-about">
<div class="container mt-5 mb-5">
    <div class="card" style="margin-top: 200px">
        <div class="card-body">
        <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Message</h1>
          </div>    
            <?php echo $this->session->flashdata('pesan') ?> 
            
            <table class="table table-striped table-bordered mt-5 mb-5">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
                <?php 
                $no = 1;
                foreach ($contact as $cs) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $cs->nama ?></td>
                        <td><?php echo $cs->email ?></td>
                        <td><?php echo $cs->subject ?></td>
                        <td><?php echo $cs->pesan ?></td>
                        <td>
                            <a href="<?php echo base_url('Admin/Data_contact/delete_contact/').$cs->id ?>" class="btn btn-danger btn-sm">Delete</a>
                            
                            </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </section>
</div>
        </div>
    </div>
</div>
</section>