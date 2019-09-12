<section>
      <div class="container">
            <div class="row">
                  <div class="col-md-12">
                        <?php if ($this->session->flashdata("flash")) { ?>

                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Data Perpustakaan <strong> Success </strong> <?= $this->session->flashdata("flash"); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                    </button>
                              </div>

                        <?php }; ?>
                  </div>
            </div>

            <div class="row">
                  <div class="col-md-6">
                        <a href="<?= base_url(); ?>perpustakaan/Transaksi_api/tambah/transaksi" class="btn btn-block btn-dark">Tambah data Perpustakaan</a>
                  </div>
            </div>

            <div class="row mt-3">
                  <div class="col-md-6">
                        <h3>Daftar Transaksi</h3>
                        <?php if (empty($transaksi)) { ?>
                              <div class="alert alert-danger" role="alert">
                                    data transaksi tidak ditemukan.
                              </div>
                        <?php }; ?>
                        <ul class="list-group">
                              <?php foreach ($transaksi as $pstkn) { ?>
                                    <li class="list-group-item">
                                          <?= $pstkn['Nama']; ?>
                                          <a href="<?= base_url(); ?>perpustakaan/Transaksi_api/hapus/<?= $pstkn['No_Pinjam']; ?>" class="badge badge-danger  float-right">hapus</a>
                                          <a href="<?= base_url(); ?>perpustakaan/Transaksi_api/ubah/transaksi/No_Pinjam/<?= $pstkn['No_Pinjam']; ?>" class="badge badge-success mr-2 float-right">ubah</a>
                                          <a href="<?= base_url(); ?>perpustakaan/Transaksi_api/detail/transaksi/No_Pinjam/<?= $pstkn['No_Pinjam']; ?>" class="badge badge-primary mr-2 float-right">detail</a>
                                    </li>
                              <?php }; ?>
                        </ul>
                  </div>
            </div>
      </div>
      </div>
</section>