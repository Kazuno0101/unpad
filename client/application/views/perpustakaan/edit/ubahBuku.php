<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Ubah Buku</h3>
                        <form method="post">
                              <input type="hidden" class="form-control" name="No_Buku" id="No_Buku" value="<?= $buku['No_Buku'] ?>">
                              <div class="form-group row">
                                    <label for="No_Buku" class="col-md-2 col-form-label">No Buku</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" value="<?= $buku['No_Buku'] ?>" disabled>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Judul" class="col-md-2 col-form-label">Judul</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Judul" id="Judul" value="<?= $buku['Judul'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("Judul") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Pengarang" class="col-md-2 col-form-label">Pengarang</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Pengarang" id="Pengarang" value="<?= $buku['Pengarang'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("Pengarang") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Jenis_Buku" class="col-md-2 col-form-label">Jenis Buku</label>
                                    <div class="col-md-10">
                                          <select id="Jenis_Buku" class="form-control" name="Jenis_Buku" id="Jenis_Buku" value="<?= $buku['Jenis_Buku'] ?>">
                                                <option selected>Pilihan...</option>
                                                <option>Pengetahuan</option>
                                                <option>Olahraga</option>
                                                <option>Novel</option>
                                          </select>
                                          <small class="form-text text-danger"><?= form_error("Jenis_Buku") ?></small>
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