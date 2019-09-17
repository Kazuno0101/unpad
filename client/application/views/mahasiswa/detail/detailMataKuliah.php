<section>
      <div class="container">

            <div class="card" style="width: 18rem;">
                  <div class="card-body">
                        <h5 class="card-title"><?= $matkul["nama_mk"] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Kode : <?= $matkul["kode_mk"] ?></h6>
                        <p class="card-text">Jumlah sks : <?= $matkul["sks"] ?></p>
                        <a href="<?= base_url(); ?>mahasiswa/MahasiswaMaster/matakuliah" class="card-link">Back</a>
                  </div>
            </div>

      </div>
</section>