<section>
      <div class="container">
            <div class="row">
                  <div class="col-md-12">
                        <?php if ($this->session->flashdata("flash")) { ?>

                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Data mahasiswa <strong> Success </strong> <?= $this->session->flashdata("flash"); ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                    </button>
                              </div>

                        <?php }; ?>
                  </div>
            </div>

            <div class="row">
                  <div class="col-md-6">
                        <a href="<?= base_url(); ?>mahasiswa/MataKuliah_api/tambah/matakuliah" class="btn btn-block btn-dark">Tambah data Mata Kuliah</a>
                  </div>
            </div>

            <div class="row mt-3">
                  <div class="col-md-6">
                        <h3>Daftar Mata Kuliah</h3>
                        <?php if (empty($mataKuliah)) { ?>
                              <div class="alert alert-danger" role="alert">
                                    data Mata Kuliah tidak ditemukan.
                              </div>
                        <?php }; ?>
                        <ul class="list-group">
                              <?php foreach ($mataKuliah as $mk) { ?>
                                    <li class="list-group-item">
                                          <?= $mk['nama_mk']; ?>
                                          <a href="<?= base_url(); ?>mahasiswa/mataKuliah_api/hapus/<?= $mk['kode_mk']; ?>" class="badge badge-danger  float-right">hapus</a>
                                          <a href="<?= base_url(); ?>mahasiswa/mataKuliah_api/ubah/mataKuliah/kode_mk/<?= $mk['kode_mk']; ?>" class="badge badge-success mr-2 float-right">ubah</a>
                                          <a href="<?= base_url(); ?>mahasiswa/mataKuliah_api/detail/mataKuliah/kode_mk/<?= $mk['kode_mk']; ?>" class="badge badge-primary mr-2 float-right">detail</a>
                                    </li>
                              <?php }; ?>
                        </ul>
                  </div>
            </div>
      </div>
      </div>
</section>