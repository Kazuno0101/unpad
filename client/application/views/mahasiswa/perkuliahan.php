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
            <!-- 
            <div class="row">
                  <div class="col-md-6">
                        <a href="<?= base_url(); ?>mahasiswa/Perkuliahan_api/tambah/perkuliahan" class="btn btn-block btn-dark">Tambah data Perkuliahan</a>
                  </div>
            </div> -->

            <div class="row mt-3">
                  <div class="col-md-6">
                        <h3>Daftar perkuliahan</h3>
                        <?php if (empty($perkuliahan)) { ?>
                              <div class="alert alert-danger" role="alert">
                                    data perkuliahan tidak ditemukan.
                              </div>
                        <?php }; ?>
                        <ul class="list-group">
                              <?php foreach ($perkuliahan as $pkl) { ?>
                                    <li class="list-group-item">
                                          <?= "No. ", $pkl["id"], " ", $pkl['nim'], " - ", $pkl['kode_mk'], " - ", $pkl['nip'], " - ", $pkl['nilai']; ?>
                                          <a href="<?= base_url(); ?>mahasiswa/perkuliahan_api/hapus/<?= $pkl['id']; ?>" class="badge badge-danger  float-right">hapus</a>
                                          <a href="<?= base_url(); ?>mahasiswa/perkuliahan_api/ubah/perkuliahan/id/<?= $pkl['id']; ?>" class="badge badge-success mr-2 float-right">ubah</a>
                                    </li>
                              <?php }; ?>
                        </ul>
                  </div>
            </div>
      </div>
      </div>
</section>