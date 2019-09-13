<section>
      <div class="container">

            <div class="card" style="width: 18rem;">
                  <div class="card-body">
                        <h5 class="card-title"><?= $anggota["Nama"] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $anggota["ID_Anggota"] ?></h6>
                        <p class="card-text">Alamat : <?= $anggota["Alamat"] ?></p>
                        <p class="card-text">No Telp : <?= $anggota["No_Telp"] ?></p>
                        <p class="card-text">Tanggal Lahir : <?= $anggota["Tgl_Lahir"] ?></p>
                        <a href="<?= base_url(); ?>perpustakaan/PerpustakaanMaster/anggota" class="card-link">Back</a>
                  </div>
            </div>

      </div>
</section>