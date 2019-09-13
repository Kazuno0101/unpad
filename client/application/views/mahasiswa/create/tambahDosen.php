<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Tambah Dosen</h3>
                        <form method="post">
                              <div class="form-group row">
                                    <label for="nip" class="col-md-2 col-form-label">NIP</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP Dosen">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="nama_dosen" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="nama_dosen" id="nama_dosen" placeholder="Nama Dosen">
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