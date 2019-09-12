<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Tambah Jabatan</h3>
                        <form method="post">
                              <div class="form-group row">
                                    <label for="Kode_jabatan" class="col-md-2 col-form-label">Kode Jabatan</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Kode_jabatan" id="Kode_jabatan" placeholder="Kode_jabatan Jabatan">
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Id_karyawan" class="col-md-2 col-form-label">Id Karyawan</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Id_karyawan" id="Id_karyawan" placeholder="Id_karyawan Jabatan">
                                          <small class=" form-text text-danger"><?= form_error("Id_karyawan") ?></small>
                                    </div>
                              </div>
                               <div class="form-group row">
                                    <label for="Jabatan" class="col-md-2 col-form-label">Jabatan</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Jabatan" id="Jabatan" placeholder="Jabatan Jabatan">
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