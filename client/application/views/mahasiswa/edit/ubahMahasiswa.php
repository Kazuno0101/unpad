<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Ubah Mahasiswa</h3>
                        <form method="post">
                              <input type="hidden" class="form-control" name="nim" id="nim" value="<?= $mahasiswa['nim'] ?>">
                              <div class="form-group row">
                                    <label for="nim" class="col-md-2 col-form-label">NIM</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" value="<?= $mahasiswa['nim'] ?>" disabled>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="nama_mhs" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="nama_mhs" id="nama_mhs" value="<?= $mahasiswa['nama_mhs'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("nama_mhs") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="tgl_lahir" class="col-md-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-md-10">
                                          <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir" value="<?= $mahasiswa['tgl_lahir'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("tgl_lahir") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="alamat" id="alamat" value="<?= $mahasiswa['alamat'] ?>">
                                          <small class=" form-text text-danger"><?= form_error("alamat") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-md-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-md-10">
                                          <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                <?php foreach ($jenis_kelamin as $jk) {
                                                      if (strtolower($jk) == $mahasiswa['jenis_kelamin']) { ?>
                                                            <option value="<?= $jk ?>" selected><?= $jk ?></option>
                                                      <?php } else { ?>
                                                            <option value="<?= $jk ?>"><?= $jk ?></option>
                                                      <?php }
                                                } ?>
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