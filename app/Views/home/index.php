<!-- carousel -->

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="true">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="1000">
      <img src="<?= base_url('hero-image/hero-3.webp')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="<?= base_url('hero-image/hero-5.webp')?>" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="1000">
      <img src="<?= base_url('hero-image/hero-4.webp')?>" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<h2 class="text-center mt-5">Produk Utama</h2>
<section class="d-flex justify-content-center gap-2 mt-5 flex-wrap">
    <?php foreach ($events as $event_item) :?>
    <div class="card" style="width: 19rem;">

  <div class="card-body">
    <h4 class="card-text "><?= $event_item['name'];?></h4>
    <h4 class="card-text "><?= $event_item['nim'];?></h4>
    <span class="badge text-bg-secondary"><?= $event_item['kelas'];?></span>
  </div>
</div>
<?php endforeach; ?>
</section> 

<!-- pagination -->

<nav aria-label="Page navigation example" class="mt-2 me-3">
  <ul class="pagination justify-content-end">
    <li class="page-item disabled">
      <a class="page-link">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>

<!-- faq -->

<h2 class="text-center mt-5">FAQ</h2>
<div class="accordion accordion-flush mt-5" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Minimal pesan berapa ?
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
                Minimal pemesanan satu ton kalo ga mau beli aja ditempat lain
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        kapan pemesanan diantar ?
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        pesanan diantar setelah bayar dan harus mengunggu 60 hari
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        apakah ada garansi ?
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        garansi 6 bulan
      </div>
    </div>
  </div>
</div>
