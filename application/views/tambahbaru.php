<div class="card">
    <div class="card-body">
        <form action="<?= base_url('baru/tambahaksibaru') ?>" method="POST" class="form-group">
                <div class="form-group">
                  <label for="tanggalpengajuan">Tanggal Pengajuan</label>
                  <div class="col-sm-6">
                  <input type="date" name="tanggal_pengajuan" class="form-control">
                  <?= form_error('tanggalpengajuan', '<div class="text-small text-danger">'.'</div>'); ?>      
                </div>
                </div>
                <div class="form-group">
                  <label for="periodeAwal">Periode Awal</label>
                  <div class="col-sm-6">
                  <input type="date" name="awal_periode" class="form-control">
                  <?= form_error('awalperiode', '<div class="text-small text-danger">'.'</div>'); ?>                
                </div>
                </div>
                <div class="form-group">
                  <label for="periodeAkhir">Periode Akhir</label>
                  <div class="col-sm-6">
                  <input type="date" name="akhir_periode" class="form-control">
                  <?= form_error('akhirperiode', '<div class="text-small text-danger">'.'</div>'); ?>  
                </div>
                </div>
                <div class="form-group">
                  <label for="inputState" class="form-label">Posisi Jabatan</label>
                  <div class="col-sm-6">
                  <select id="inputState" name="posisi_jabatan" class="form-control">
                    <option value="Staff Perkantoran">Staff Perkantoran</option>
                    <option value="Staff Administrasi">Staff Administrasi</option>
                    <option value="Staff Sekrektasis">Staff Sekrektasis</option>
                    <option value="Staff Bendahara">Staff Bendahara</option>
                  </select>
                  <?= form_error('posisi', '<div class="text-small text-danger">'.'</div>'); ?>  
                </div>
                </div>
                <div class="form-group">
                  <label for="inputState" class="form-label">Status Pegawai</label>
                  <div class="col-sm-6">
                  <select id="inputState" name="status_pegawai" class="form-control">
                    <option value="Karyawawan Tetap">Karyawan Tetap</option>
                    <option value="Karyawan Kontrak">Karyawan Kontrak</option>
                    <option value="NON PNS">NON PNS</option>
                    <option value="PNS">PNS</option>
                  </select>
                  <?= form_error('status', '<div class="text-small text-danger">'.'</div>'); ?>  
                </div>
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <div class="col-sm-6">
                  <textarea id="deskripsi" name="deskripsi" class="form-control" required></textarea>
                  <?= form_error('deskripsi', '<div class="text-small text-danger">'.'</div>'); ?>  
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-6">
                  <label for="jumlah">Masukkan Jumlah</label>
                  <input type="number" id="jumlah" name="jumlah" class="form-control" placeholder="Jumlah Karyawan">
                  <?= form_error('', '<div class="text-small text-danger">'.'</div>'); ?>  
                </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-md" id="submitButton"3> Simpan</button>
                  <button type="reset" class="btn btn-secondary btn-md" id="closePopupButton"> Kembali</button>
                </div>
              </form>
              </div>
              </div><!-- End No Labels Form -->