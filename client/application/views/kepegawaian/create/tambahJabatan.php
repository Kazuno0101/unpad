<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Tambah Jabatan</h3>
                        <form method="post">
                              <div class="form-group row">
                                    <label for="Kode_jabatan" class="col-md-2 col-form-label">Kode Jabatan</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Kode_jabatan" id="Kode_jabatan" placeholder="Kode Jabatan">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Id_karyawan" class="col-md-2 col-form-label">Id Karyawan</label>
                                    <div class="col-md-10">
                                          <select class="form-control" id="Id_karyawan" name="Id_karyawan">
                                                <?php foreach ($karyawan as $kry) { ?>
                                                      <option value="<?= $kry["Id_karyawan"]; ?>"><?= $kry["Id_karyawan"]; ?></option>
                                                <?php } ?>
                                          </select>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Jabatan" class="col-md-2 col-form-label">Jabatan</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Jabatan" id="Jabatan" placeholder="Jabatan">
                                          <small class=" form-text text-danger"><?= form_error("Jabatan") ?></small>
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