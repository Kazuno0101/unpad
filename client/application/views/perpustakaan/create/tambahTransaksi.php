<section>
      <div class="container">
            <div class="row mt-3">
                  <div class="col-md-8">
                        <h3 class="mb-5">Tambah anggota</h3>

                        <form method="post">
                              <div class="form-group row">
                                    <label for="No_Pinjam" class="col-md-2 col-form-label">No Pinjam</label>
                                    <div class="col-md-10">
                                          <input type="text" class="form-control" name="No_Pinjam" id="No_Pinjam" placeholder="No Pinjam">
                                          <small class="form-text text-danger"><?= form_error("No_Pinjam") ?></small>
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
                                    <label for="ID_Anggota" class="col-md-2 col-form-label">ID Anggota</label>
                                    <div class="col-md-10">
                                          <select id="ID_Anggota" name="ID_Anggota" class="form-control">
                                                <?php foreach ($anggota as $agt) { ?>
                                                      <option><?= $agt["ID_Anggota"]; ?></option>
                                                <?php } ?>
                                          </select>
                                          <small class="form-text text-danger"><?= form_error("ID_Anggota") ?></small>
                                    </div>
                              </div>

                              <div class="form-group row">
                                    <label for="No_Buku" class="col-md-2 col-form-label">No Buku</label>
                                    <div class="col-md-10">
                                          <select id="No_Buku" name="No_Buku" class="form-control">
                                                <?php foreach ($buku as $bk) { ?>
                                                      <option><?= $bk["No_Buku"]; ?></option>
                                                <?php } ?>
                                          </select>
                                          <small class="form-text text-danger"><?= form_error("No_Buku") ?></small>
                                    </div>
                              </div>

                              <div class="form-group row">
                                    <label for="Tgl_Pinjam" class="col-md-2 col-form-label">Tanggal Pinjam</label>
                                    <div class="col-md-10">
                                          <input type="date" class="form-control" name="Tgl_Pinjam" id="Tgl_Pinjam" placeholder="Tanggal Pinjam">
                                          <small class="form-text text-danger"><?= form_error("Tgl_Pinjam") ?></small>
                                    </div>
                              </div>
                              <div class="form-group row">
                                    <label for="Tgl_Kembali" class="col-md-2 col-form-label">Tanggal Kembali</label>
                                    <div class="col-md-10">
                                          <input type="date" class="form-control" name="Tgl_Kembali" id="Tgl_Kembali" placeholder="Tanggal Kembali">
                                          <small class="form-text text-danger"><?= form_error("Tgl_Kembali") ?></small>
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