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
                        <a href="<?= base_url(); ?>kepegawaian/Karyawan_api/tambah/karyawan" class="btn btn-block btn-dark">Tambah data <?= $api ?></a>
                  </div>
            </div>

            <div class="row mt-3">
                  <div class="col-md-6">
                        <h3>Daftar Karyawan</h3>
                        <?php if (empty($karyawan)) { ?>
                              <div class="alert alert-danger" role="alert">
                                    data karyawan tidak ditemukan.
                              </div>
                        <?php }; ?>
                        <ul class="list-group">
                              <?php foreach ($karyawan as $kry) { ?>
                                    <li class="list-group-item">
                                          <?= $kry['Nama']; ?>
                                          <a href="<?= base_url(); ?>kepegawaian/Karyawan_api/hapus/<?= $kry['Id_karyawan']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah data akan dihapus?')">hapus</a>
                                          <a href="<?= base_url(); ?>kepegawaian/Karyawan_api/ubah/karyawan/Id_karyawan/<?= $kry['Id_karyawan']; ?>" class="badge badge-success mr-2 float-right">ubah</a>
                                          <a href="<?= base_url(); ?>kepegawaian/Karyawan_api/detail/karyawan/Id_karyawan/<?= $kry['Id_karyawan']; ?>" class="badge badge-primary mr-2 float-right">detail</a>
                                    </li>
                              <?php }; ?>
                        </ul>
                  </div>
            </div>
      </div>

</section>