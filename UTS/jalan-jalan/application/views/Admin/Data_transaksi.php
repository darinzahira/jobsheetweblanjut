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
            <h1>Transaction</h1>
          </div>

            <?php echo $this->session->flashdata('pesan') ?> 

          <table class="table table-hover table-striped table-borderd">
            <thead>
                <tr>
                <th>No</th>
                <th>ID Mobil</th>
                <th>Nama Customer</th>
                <th>No Identitas</th>
                <th>No Telpon</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $no=1;
                foreach($rental as $tr) : ?> 
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tr['id_mobil'] ?></td>
                    <td><?php echo $tr['nama'] ?></td>
                    <td><?php echo $tr['noiden'] ?></td>
                    <td><?php echo $tr['notelp'] ?></td>
                    <td><?php echo $tr['tgl_rental'] ?></td>
                    <td><?php echo $tr['tgl_kembali'] ?></td>
                    <td>
                        <a href="<?= base_url();?>Admin/Data_transaksi/delete_transaksi/<?= $tr['id_rental'];?>" class="btn btn-danger btn-sm">Delete</i></a>
                        
                    </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
          </table>
        </section>
</div>
        </div>
    </div>
</div>
</section>
