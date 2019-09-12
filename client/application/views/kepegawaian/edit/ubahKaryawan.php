<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Ubah Karyawan</h3>
                        <form method="post">
                              <input type="hidden" class="form-control" name="Id_karyawan" id="Id_karyawan" value="<?= $karyawan['Id_karyawan'] ?>">
                              <div class="form-group row">
                                    <label for="Id_karyawan" class="col-md-2 col-form-label">ID karyawan</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" value="<?= $karyawan['Id_karyawan'] ?>" disabled>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Nama" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Nama" id="Nama" value="<?= $karyawan['Nama'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("Nama") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Alamat" class="col-md-2 col-form-label">Alamat</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Alamat" id="Alamat" value="<?= $karyawan['Alamat'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("Alamat") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="No_telp" class="col-md-2 col-form-label">No telpon</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="No_telp" id="No_telp" value="<?= $karyawan['No_telp'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("No_telp") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Jenis_kelamin" class="col-md-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-md-10">
                                          <select class="form-control" id="Jenis_kelamin" name="Jenis_kelamin">
                                                <?php foreach ($Jenis_kelamin as $jk) {
                                                      if (strtolower($jk) == $mahasiswa['Jenis_kelamin']) { ?>
                                                            <option value="<?= $jk ?>" selected><?= $jk ?></option>
                                                      <?php } else { ?>
                                                            <option value="<?= $jk ?>"><?= $jk ?></option>
                                                <?php }
                                                } ?>
                                          </select>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Password" class="col-md-2 col-form-label">Password</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Password" id="Password" value="<?= $karyawan['Password'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("Password") ?></small>
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