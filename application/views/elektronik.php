<div class="container-fluid">
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="<?php echo base_url('assets/img/slider1.1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
            <img src="<?php echo base_url('assets/img/slider2.1.jpg') ?>" class="d-block w-100" alt="...">
            </div>
        </div><br><br><br>
        <h1 class="btn badge-success">Day 1</h1><br>
        <h3 class="btn btn-sm btn-primary ml-4">Nadin Amizah</h3>
        <h3 class="btn btn-sm btn-danger ml-1">20:00 - 21:00</h3><br>
        <h3 class="btn btn-sm btn-primary ml-4">Tulus</h3>
        <h3 class="btn btn-sm btn-danger ml-5">21:00 - Selesai</h3><br><br><br>

        <h1 class="btn badge-success">Day 2</h1><br>
        <h3 class="btn btn-sm btn-primary ml-4">Fiersa Besari</h3>
        <h3 class="btn btn-sm btn-danger ml-1">20:00 - 21:00</h3><br>
        <h3 class="btn btn-sm btn-primary ml-4">Feel Koplo</h3>
        <h3 class="btn btn-sm btn-danger ml-3">21:00 - Selesai</h3><br><br><br>

        <h1 class="btn badge-success">Day 3</h1><br>
        <h3 class="btn btn-sm btn-primary ml-4">Maliq & D'Essentials</h3>
        <h3 class="btn btn-sm btn-danger ml-1">21:00 - Selesai</h3><br><br>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>

    <div class="row text-center mt-5">

    <?php foreach ($elektronik as $brg) : ?>

        <div class="card ml-5 mb-4" style="width: 16rem;">
            <img src="<?php echo base_url().'uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                <small><?php echo $brg->keterangan ?></small><br>
                <span class="badge badge-pill badge-success mb-3">Rp. <?php echo number_format($brg->harga,0,',','.') ?></span>
                <?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail/'. $brg->id_brg, '<div class="btn btn-sm btn-success">Detail</div>') ?> 
                <a href="#" class="btn btn-sm btn-success">Detail</a>
                </div>
            </div>

    <?php endforeach ?>
    </div>
</div>