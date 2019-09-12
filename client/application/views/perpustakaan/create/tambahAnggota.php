<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Tambah Anggota</h3>

                        <form method="post">
                              <div class="form-group row">
                                    <label for="ID_Anggota" class="col-md-2 col-form-label">ID Anggota</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="ID_Anggota" id="ID_Anggota" placeholder="ID Anggota">
                                          <small class="form-text text-danger"><?= form_error("ID_Anggota") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Nama" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama">
                                          <small class="form-text text-danger"><?= form_error("Nama") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Alamat" class="col-md-2 col-form-label">Alamat</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat">
                                          <small class="form-text text-danger"><?= form_error("Alamat") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="No_Telp" class="col-md-2 col-form-label">No Telp</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="No_Telp" id="No_Telp" placeholder="No Telp">
                                          <small class="form-text text-danger"><?= form_error("No_Telp") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Tgl_Lahir" class="col-md-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-md-10">
                                          <input type="date" class="form-control" name="Tgl_Lahir" id="Tgl_Lahir">
                                          <small class="form-text text-danger"><?= form_error("Tgl_Lahir") ?></small>
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