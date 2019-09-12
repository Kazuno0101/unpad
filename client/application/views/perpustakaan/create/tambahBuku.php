<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Tambah Buku</h3>

                        <form method="post">
                              <div class="form-group row">
                                    <label for="No_Buku" class="col-md-2 col-form-label">No Buku</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="No_Buku" id="No_Buku" placeholder="No Buku">
                                          <small class="form-text text-danger"><?= form_error("No_Buku") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Judul" class="col-md-2 col-form-label">Judul</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Judul" id="Judul" placeholder="Judul">
                                          <small class="form-text text-danger"><?= form_error("Judul") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Pengarang" class="col-md-2 col-form-label">Pengarang</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Pengarang" id="Pengarang" placeholder="Pengarang">
                                          <small class="form-text text-danger"><?= form_error("Pengarang") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Jenis_Buku" class="col-md-2 col-form-label">Jenis Buku</label>
                                    <div class="col-md-10">
                                          <select class="form-control" id="Jenis_buku" name="Jenis_Buku">
                                                <option value="pengetahuan">Pengetahuan</option>
                                                <option value="olahraga">Olahraga</option>
                                                <option value="novel">Novel</option>
                                          </select>
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