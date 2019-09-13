<section>
      <div class="container">

            <div class="card" style="width: 18rem;">
                  <div class="card-body">
                        <h5 class="card-title"><?= $karyawan["Nama"] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $karyawan["Id_karyawan"] ?></h6>
                        <p class="card-text">Alamat : <?= $karyawan["Alamat"] ?></p>
                        <p class="card-text">No Telp : <?= $karyawan["No_telp"] ?></p>
                        <p class="card-text">Jenis Kelamin : <?= $karyawan["Jenis_kelamin"] ?></p>
                        <p class="card-text">Password : <?= $karyawan["Password"] ?></p>
                        <a href="<?= base_url(); ?>kepegawaian/KepegawaianMaster/karyawan" class="card-link">Back</a>
                  </div>
            </div>

      </div>
</section>