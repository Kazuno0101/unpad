<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Ubah Mahasiswa</h3>
                        <form method="post">
                              <input type="hidden" class="form-control" name="nip" id="nip" value="<?= $dosen['nip'] ?>">
                              <div class="form-group row">
                                    <label for="nip" class="col-md-2 col-form-label">NIM</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" value="<?= $dosen['nip'] ?>" disabled>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="nama_dosen" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" value="<?= $dosen['nama_dosen'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("nama_dosen") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <div class="col-md-10">
                                          <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                              </div>
                        </form>
                  </div>
            </div>
      </div>
</section>