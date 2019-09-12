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
                        <a href="<?= base_url(); ?>kepegawaian/Jabatan_api/tambah/jabatan" class="btn btn-block btn-dark">Tambah data Jabatan</a>
                  </div>
            </div>

            <div class="row mt-3">
                  <div class="col-md-6">
                        <h3>Daftar Jabatan</h3>
                        <?php if (empty($jabatan)) { ?>
                              <div class="alert alert-danger" role="alert">
                                    data jabatan tidak ditemukan.
                              </div>
                        <?php }; ?>
                        <ul class="list-group">
                              <?php foreach ($jabatan as $jbt) { ?>
                                    <li class="list-group-item">
                                          <?= $jbt['Jabatan']; ?>
                                          <a href="<?= base_url(); ?>kepegawaian/Jabatan_api/hapus/<?= $jbt['Kode_jabatan']; ?>" class="badge badge-danger float-right" onclick="return confirm('Apakah data akan dihapus?')">hapus</a>
                                          <a href=" <?= base_url(); ?>kepegawaian/Jabatan_api/ubah/jabatan/Kode_jabatan/<?= $jbt['Kode_jabatan']; ?>" class="badge badge-success mr-2 float-right">ubah</a>
                                          <a href="<?= base_url(); ?>kepegawaian/Jabatan_api/detail/jabatan/Kode_jabatan/<?= $jbt['Kode_jabatan']; ?>" class="badge badge-primary mr-2 float-right">detail</a>
                                    </li>
                              <?php }; ?>

                        </ul>
                  </div>
            </div>
      </div>
      </div>
</section>