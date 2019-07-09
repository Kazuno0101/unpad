<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Tambah Mahasiswa</h3>

                        <form method="post">
                              <div class="form-group row">
                                    <label for="nim" class="col-md-2 col-form-label">NIM</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="nim" id="nim" placeholder="NIM Mahasiswa">
                                          <small class="form-text text-danger"><?= form_error("nim") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="nama_mhs" class="col-md-2 col-form-label">Nama</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="nama_mhs" id="nama_mhs" placeholder="Nama Mahasiswa">
                                          <small class="form-text text-danger"><?= form_error("nama_mhs") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="tgl_lahir" class="col-md-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-md-10">
                                          <input type="date" class="form-control" name="tgl_lahir" id="tgl_lahir">
                                          <small class="form-text text-danger"><?= form_error("tgl_lahir") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="alamat" class="col-md-2 col-form-label">Alamat</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat Mahasiswa">
                                          <small class="form-text text-danger"><?= form_error("alamat") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="jenis_kelamin" class="col-md-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-md-10">
                                          <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                                <option value="laki-laki">Laki-laki</option>
                                                <option value="perempuan">Perempuan</option>
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