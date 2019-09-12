<section>
      <div class="container">
            <div class="row">
                  <div class="col-md-12">
                        <?php if ($this->session->flashdata("flash")) { ?>

                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Data <strong> Success </strong> <?= $this->session->flashdata("flash"); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                    </button>
                              </div>

                        <?php }; ?>
                  </div>
            </div>

            <div class="row">
                  <div class="col-md-6">
                        <a href="<?= base_url(); ?>kepegawaian/Absensi_api/tambah/absensi" class="btn btn-block btn-dark">Tambah data Absensi</a>
                  </div>
            </div>

            <div class="row mt-3">
                  <div class="col-md-6">
                        <h3>Daftar Absensi</h3>
                        <?php if (empty($absensi)) { ?>
                              <div class="alert alert-danger" role="alert">
                                    data Absensi tidak ditemukan.
                              </div>
                        <?php }; ?>
                        <ul class="list-group">
                              <?php foreach ($absensi as $abs) { ?>
                                    <li class="list-group-item">
                                          <?= $abs['Id_karyawan']; ?>
                                          <a href="<?= base_url(); ?>kepegawaian/Absensi_api/hapus/<?= $abs['Id_absensi']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah data akan dihapus?')">hapus</a>
                                          <a href=" <?= base_url(); ?>kepegawaian/Absensi_api/ubah/absensi/Id_absensi/<?= $abs['Id_absensi']; ?>" class="badge badge-success mr-2 float-right">ubah</a>
                                          <a href="<?= base_url(); ?>kepegawaian/Absensi_api/detail/absensi/Id_absensi/<?= $abs['Id_absensi']; ?>" class="badge badge-primary mr-2 float-right">detail</a>
                                    </li>
                              <?php }; ?>
                        </ul>
                  </div>
            </div>
      </div>
      </div>
</section>