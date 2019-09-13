<section>
      <div class="container">

            <div class="card" style="width: 18rem;">
                  <div class="card-body">
                        <h5 class="card-title"><?= $transaksi["Nama"] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $transaksi["No_Pinjam"] ?></h6>
                        <p class="card-text">Id <?= $transaksi["ID_Anggota"] ?></p>
                        <p class="card-text">No Buku : <?= $transaksi["No_Buku"] ?></p>
                        <p class="card-text">Tanggal Pinjam : <?= $transaksi["Tgl_Pinjam"] ?></p>
                        <p class="card-text">Tanggal Kembali : <?= $transaksi["Tgl_Kembali"] ?></p>
                        <a href="<?= base_url(); ?>perpustakaan/PerpustakaanMaster/transaksi" class="card-link">Back</a>
                  </div>
            </div>

      </div>
</section>