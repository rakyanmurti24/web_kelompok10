<div class="container-fluid">

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <ol class="carousel-indicators">
       <li data-target="#carouselExampleIndicators" data-slide-to="1" class="active"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/slide3.jpg') ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicator" role="Button"
    data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-prev" href="#carouselExampleIndicator" role="Button"
    data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>

    <div class="row text-center mt-3">  

    <?php foreach ($kuliner as $dsh) : ?>
        
        <div class="card ml-3 mb-3" style="width: 16rem;">
        <img src="<?php echo base_url().'/uploads/'.$dsh->gambar ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $dsh->nama_dash ?></h5>
            <small><?php echo $dsh->keterangan ?></small>
            <a href="#" class="btn btn-primary">Lihat Detail</a>
        </div>
        </div>


        <?php endforeach; ?>
    </div>
</div>