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
                        <a href="<?= base_url(); ?>mahasiswa/Mahasiswa_api/tambah/mahasiswa" class="btn btn-block btn-dark">Tambah data <?= $api ?></a>
                  </div>
            </div>

            <div class="row mt-3">
                  <div class="col-md-6">
                        <h3>Daftar Mahasiswa</h3>
                        <?php if (empty($mahasiswa)) { ?>
                              <div class="alert alert-danger" role="alert">
                                    data mahasiswa tidak ditemukan.
                              </div>
                        <?php }; ?>
                        <ul class="list-group">
                              <?php foreach ($mahasiswa as $mhs) { ?>
                                    <li class="list-group-item">
                                          <?= $mhs['nama_mhs']; ?>
                                          <a href="<?= base_url(); ?>mahasiswa/Mahasiswa_api/hapus/<?= $mhs['nim']; ?>" class="badge badge-danger  float-right">hapus</a>
                                          <a href="<?= base_url(); ?>mahasiswa/Mahasiswa_api/ubah/mahasiswa/nim/<?= $mhs['nim']; ?>" class="badge badge-success mr-2 float-right">ubah</a>
                                          <a href="<?= base_url(); ?>mahasiswa/Mahasiswa_api/detail/mahasiswa/nim/<?= $mhs['nim']; ?>" class="badge badge-primary mr-2 float-right">detail</a>
                                    </li>
                              <?php }; ?>
                        </ul>
                  </div>
            </div>
      </div>

</section>