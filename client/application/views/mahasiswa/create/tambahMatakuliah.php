<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Tambah Mata Kuliah</h3>

                        <form method="post">
                              <input type="hidden" class="form-control" name="kode_mk" id="kode_mk" value="MK">
                              <div class="form-group row">
                                    <label for="nama_mk" class="col-md-2 col-form-label">Mata Kuliah</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="nama_mk" id="nama_mk" placeholder="Mata Kuliah">
                                          <small class="form-text text-danger"><?= form_error("nama_mk") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="sks" class="col-md-2 col-form-label">Satuan Kredit Semester</label>
                                    <div class="col-md-10">
                                          <input type="number" class="form-control" name="sks" id="sks" placeholder="SKS">
                                          <small class="form-text text-danger"><?= form_error("sks") ?></small>
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