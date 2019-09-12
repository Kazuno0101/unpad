<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Ubah Jabatan</h3>
                        <form method="post">
                              <input type="hidden" class="form-control" name="Kode_jabatan" id="Kode_jabatan" value="<?= $jabatan['Kode_jabatan'] ?>">
                              <div class="form-group row">
                                    <label for="Kode_jabatan" class="col-md-2 col-form-label">Kode jabatan</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" value="<?= $jabatan['Kode_jabatan'] ?>" disabled>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Id_karyawan" class="col-md-2 col-form-label">ID karyawan</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Id_karyawan" id="Id_karyawan" value="<?= $jabatan['Id_karyawan'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("Id_karyawan") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Jabatan" class="col-md-2 col-form-label">Jabatan</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Jabatan" id="Jabatan" value="<?= $jabatan['Jabatan'] ?>">
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