<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Ubah Anggota</h3>
                        <form method="post">
                              <input type="hidden" class="form-control" name="ID_Anggota" id="ID_Anggota" value="<?= $anggota['ID_Anggota'] ?>">
                              <div class="form-group row">
                                    <label for="ID_Anggota" class="col-md-2 col-form-label">ID Anggota</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" value="<?= $anggota['ID_Anggota'] ?>" disabled>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Nama" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Nama" id="Nama" value="<?= $anggota['Nama'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("Nama") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Alamat" class="col-md-2 col-form-label">Alamat</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="Alamat" id="Alamat" value="<?= $anggota['Alamat'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("Alamat") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="No_Telp" class="col-md-2 col-form-label">No Telp</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="No_Telp" id="No_Telp" value="<?= $anggota['No_Telp'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("No_Telp") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Tgl_Lahir" class="col-md-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-md-10">
                                          <input type="date" class="form-control" name="Tgl_Lahir" id="Tgl_Lahir" value="<?= $anggota['Tgl_Lahir'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("Tgl_Lahir") ?></small>
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