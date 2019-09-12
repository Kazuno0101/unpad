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
                        <a href="<?= base_url(); ?>perpustakaan/Anggota_api/tambah/anggota" class="btn btn-block btn-dark">Tambah data Anggota</a>
                  </div>
            </div>

            <div class="row mt-3">
                  <div class="col-md-6">
                        <h3>Daftar Anggota</h3>
                        <?php if (empty($anggota)) { ?>
                        <div class="alert alert-danger" role="alert">
                              data anggota tidak ditemukan.
                        </div>
                        <?php }; ?>
                        <ul class="list-group">
                              <?php foreach ($anggota as $pstkn) { ?>
                              <li class="list-group-item">
                                    <?= $pstkn['Nama']; ?>
                                    <a href="<?= base_url(); ?>perpustakaan/Anggota_api/hapus/<?= $pstkn['ID_Anggota']; ?>" class="badge badge-danger  float-right">hapus</a>
                                    <a href="<?= base_url(); ?>perpustakaan/Anggota_api/ubah/anggota/ID_Anggota/<?= $pstkn['ID_Anggota']; ?>" class="badge badge-success mr-2 float-right">ubah</a>
                                    <a href="<?= base_url(); ?>perpustakaan/Anggota_api/detail/anggota/ID_Anggota/<?= $pstkn['ID_Anggota']; ?>" class="badge badge-primary mr-2 float-right">detail</a>
                              </li>
                              <?php }; ?>
                        </ul>
                  </div>
            </div>
      </div>
      </div>
</section>