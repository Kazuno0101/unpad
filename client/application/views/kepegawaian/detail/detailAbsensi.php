<section>
      <div class="container">

            <div class="card" style="width: 18rem;">
                  <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted"><?= $absensi["Id_absensi"] ?></h6>
                        <h5 class="card-title"><?= $absensi["Id_karyawan"] ?></h5>
                        <h5 class="card-title"><?= $absensi["Jam_masuk"] ?></h5>
                        <h5 class="card-title"><?= $absensi["Jam_pulang"] ?></h5>
                        <h5 class="card-title"><?= $absensi["Tanggal_kerja"] ?></h5>
                        <a href="<?= base_url(); ?>kepegawaian/kepegawaianMaster/absensi" class="card-link">Back</a>
                  </div>
            </div>

      </div>
</section>