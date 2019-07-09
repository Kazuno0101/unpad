<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Ubah Perkuliahan</h3>
                        <form method="post">
                              <input type="hidden" class="form-control" name="id" id="id" value="">
                              <div class="form-group row">
                                    <label for="nim" class="col-md-2 col-form-label">NIM</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM">
                                          <small class=" form-text text-danger"><?= form_error("nim") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="kode_mk" class="col-md-2 col-form-label">Kode Mata Kuliah</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="kode_mk" id="kode_mk" placeholder="Kode Mata Kuliah">
                                          <small class=" form-text text-danger"><?= form_error("kode_mk") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="nip" class="col-md-2 col-form-label">NIP</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="nip" id="nip" placeholder="NIP">
                                          <small class=" form-text text-danger"><?= form_error("nip") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="nilai" class="col-md-2 col-form-label">Nilai</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai">
                                          <small class=" form-text text-danger"><?= form_error("nilai") ?></small>
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