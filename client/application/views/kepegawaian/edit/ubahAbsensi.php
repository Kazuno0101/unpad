<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Ubah Absensi</h3>
                        <form method="post">
                              <input type="hidden" class="form-control" name="Id_absensi" id="Id_absensi" value="<?= $absensi['Id_absensi'] ?>">
                              <div class="form-group row">
                                    <label for="Id_absensi" class="col-md-2 col-form-label">Id Absensi</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" value="<?= $absensi['Id_absensi'] ?>" disabled>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Id_karyawan" class="col-md-2 col-form-label">ID karyawan</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Id_karyawan" id="Id_karyawan" value="<?= $absensi['Id_karyawan'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("Id_karyawan") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Tanggal_kerja" class="col-md-2 col-form-label">Tanggal Kerja</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Tanggal_kerja" id="Tanggal_kerja" value="<?= $absensi['Tanggal_kerja'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("Tanggal_kerja") ?></small>
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