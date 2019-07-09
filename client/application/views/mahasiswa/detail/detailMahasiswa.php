<section>
      <div class="container">

            <div class="card" style="width: 18rem;">
                  <div class="card-body">
                        <h5 class="card-title"><?= $mahasiswa["nama_mhs"] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa["nim"] ?></h6>
                        <p class="card-text"><?= $mahasiswa["alamat"] ?></p>
                        <p class="card-text"><?= $mahasiswa["tgl_lahir"] ?></p>
                        <p class="card-text"><?= $mahasiswa["jenis_kelamin"] ?></p>
                        <a href="<?= base_url(); ?>mahasiswa/MahasiswaMaster/mahasiswa" class="card-link">Back</a>
                  </div>
            </div>

      </div>
</section>