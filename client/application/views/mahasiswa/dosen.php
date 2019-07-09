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
                        <a href="<?= base_url(); ?>mahasiswa/Dosen_api/tambah/dosen" class="btn btn-block btn-dark">Tambah data Mahasiswa</a>
                  </div>
            </div>

            <div class="row mt-3">
                  <div class="col-md-6">
                        <h3>Daftar Dosen</h3>
                        <?php if (empty($dosen)) { ?>
                              <div class="alert alert-danger" role="alert">
                                    data dosen tidak ditemukan.
                              </div>
                        <?php }; ?>
                        <ul class="list-group">
                              <?php foreach ($dosen as $mhs) { ?>
                                    <li class="list-group-item">
                                          <?= $mhs['nama_dosen']; ?>
                                          <a href="<?= base_url(); ?>mahasiswa/Dosen_api/hapus/<?= $mhs['nip']; ?>" class="badge badge-danger  float-right">hapus</a>
                                          <a href="<?= base_url(); ?>mahasiswa/Dosen_api/ubah/dosen/nip/<?= $mhs['nip']; ?>" class="badge badge-success mr-2 float-right">ubah</a>
                                          <a href="<?= base_url(); ?>mahasiswa/Dosen_api/detail/dosen/nip/<?= $mhs['nip']; ?>" class="badge badge-primary mr-2 float-right">detail</a>
                                    </li>
                              <?php }; ?>
                        </ul>
                  </div>
            </div>
      </div>
      </div>
</section>