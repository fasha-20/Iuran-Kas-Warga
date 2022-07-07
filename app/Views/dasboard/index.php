<?= $this->extend('layout/index'); ?>


<?= $this->section('konten'); ?>
<div class="container">
  <div class="row">
    <div class="col text-center mt-5 mb-5">
      <h1>Halaman Dasboard</h1>
    </div>
  </div>

  <div class="row mt-5 justify-content-center">
    <div class="col-4">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="/daftar" type="button" class="btn btn-primary btn-lg">Daftar Warga</a>
        </li>
        <li class="list-group-item">
          <a href="/kas" type="button" class="btn btn-primary btn-lg">Daftar Kas Warga</a>
        </li>
        <li class="list-group-item">
          <a href="/kas/lunas" type="button" class="btn btn-primary btn-lg">Kas Lunas</a>
        </li>
      </ul>
    </div>
    <div class="col">
      <div class="card">
        <img src="https://source.unsplash.com/360x200?programming" class="card-img-top" alt="..." height="200px">
        <div class="card-body">
          <h3>Pengumuman</h3>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Error laborum autem ad ex
            reprehenderit cumque laboriosam et quae recusandae, quos saepe id a sequi iste? Ipsa rem incidunt
            repudiandae corrupti sed praesentium saepe quos beatae! Nemo, quibusdam nulla minima soluta doloribus
            perspiciatis corporis, laudantium unde qui quam officiis vero vitae?</p>
        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>