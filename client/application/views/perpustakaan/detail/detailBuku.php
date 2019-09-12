<section>
      <div class="container">

            <div class="card" style="width: 18rem;">
                  <div class="card-body">
                        <h5 class="card-title"><?= $buku["Judul"] ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $buku["No_Buku"] ?></h6>
                        <p class="card-text"><?= $buku["Pengarang"] ?></p>
                        <p class="card-text"><?= $buku["Jenis_Buku"] ?></p>
                        <a href="<?= base_url(); ?>perpustakaan/PerpustakaanMaster/buku" class="card-link">Back</a>
                  </div>
            </div>

      </div>
</section>