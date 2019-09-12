<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Tambah Karyawan</h3>

                        <form method="post">
                              <div class="form-group row">
                                    <label for="Id_karyawan" class="col-md-2 col-form-label">Id karyawan</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Id_karyawan" id="Id_karyawan" placeholder="Id karyawan Karyawan">
                                          <small class="form-text text-danger"><?= form_error("Id_karyawan") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Nama" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama Karyawan">
                                          <small class="form-text text-danger"><?= form_error("Nama") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Alamat" class="col-md-2 col-form-label">Alamat</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat Karyawan">
                                          <small class="form-text text-danger"><?= form_error("Alamat") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="No_telp" class="col-md-2 col-form-label">Nomor Telepon</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="No_telp" id="No_telp" placeholder="No telp Karyawan">
                                          <small class="form-text text-danger"><?= form_error("No_telp") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-md-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-md-10">
                                          <select class="form-control" id="Jenis_kelamin" name="Jenis_kelamin">
                                                <option value="laki-laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
                                          </select>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Password" class="col-md-2 col-form-label">Password</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Password" id="Password" placeholder="Password Karyawan">
                                          <small class="form-text text-danger"><?= form_error("Password") ?></small>
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