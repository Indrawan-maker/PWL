
<h2 class="text-center mt-5">Berita Terbaru</h2>
<section class="d-flex justify-content-center gap-2 mt-5 flex wrap">
    <?php foreach ($berita as $berita_item) :?>
    <div class="card" style="width: 19rem;">
        <img src="<?= base_url('berita-image/' . $berita_item['image']);?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h4 class="card-text "><?=  $berita_item['judul'];?></h4>
    <span class="badge text-bg-secondary"><?=  $berita_item['tag'];?></span>
  </div>
</div>
<?php endforeach; ?>
</section>