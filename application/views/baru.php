<section class="content">
<div class="container-fluid">
        <div class="row">
          <div class="col-12 col-xl-12 col-xl-12">
          <div class="card">
              <div class="card-header">
                <a href="<?= base_url('baru/tambahbaru') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Data</a>
                <a href="<?= base_url('baru/printbaru') ?>" class="btn btn-outline-info btn-sm"><i class="fas fa-print"></i> Print Data</a>
                <h3 class="card-title"></h3>
              <!-- /.card-header -->
              <div class="card-body" style="overflow-x:auto;">
                <table id="example1" class="table table-bordered">
                  <thead>
                  <tr class="text-center">
                    <th>No</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Periode Awal</th>
                    <th>Periode Akhir</th>
                    <th>Status Pegawai</th>
                    <th>Posisi Pegawai</th>
                    <th>Deskripsi</th>
                    <th>Jumlah Pegawai</th>
                    <th style="width: 8%">Aksi</th>
                  </tr>
                  </thead>
                  <?php $no = 1;
                  foreach($baru as $br) : ?>
                  <tbody>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $br->tanggal_pengajuan ?></td>
                    <td><?= $br->awal_periode ?></td>
                    <td><?= $br->akhir_periode ?></td>
                    <td><?= $br->posisi_jabatan ?></td>
                    <td><?= $br->status_pegawai ?></td>
                    <td><?= $br->deskripsi ?></td>
                    <td><?= $br->jumlah ?></td>
                    <td>
                      <button data-toggle="modal" data-target="#edit<?= $br->id_baru ?>" class="btn btn-outline-warning btn-xs"><i class="fas fa-edit"></i></button>
                      <a href="<?= base_url('baru/delete/' . $br->id_baru) ?>" class="btn btn-outline-success btn-xs" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>                    
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach ?>
                  </div></div></div> 
                </table>
              </div>
      </div>
          </div></div></div>

<!-- Modal edit -->
<?php foreach($baru as $br) { ?>
<div class="modal fade" id="edit<?= $br->id_baru ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Pegawai Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('baru/edit/' . $br->id_baru) ?>" method="POST">
                  <div class="form-group">
                  <label for="tanggalpengajuan">Tanggal Pengajuan</label>
                  <div class="col-sm-12">
                  <input type="date" name="tanggal_pengajuan" class="form-control" value="<?= $br->tanggal_pengajuan ?>">
                  <?= form_error('tanggal_pengajuan', '<div class="text-small text-danger">'.'</div>'); ?>                
                </div>
                </div>
                <div class="form-group">
                  <label for="periodeAwal">Periode Awal</label>
                  <div class="col-sm-12">
                  <input type="date" name="awal_periode" class="form-control" value="<?= $br->awal_periode ?>">
                  <?= form_error('awal_periode', '<div class="text-small text-danger">'.'</div>'); ?>                
                </div>
                </div>
                <div class="form-group">
                  <label for="periodeAkhir">Periode Akhir</label>
                  <div class="col-sm-12">
                  <input type="date" name="akhir_periode" class="form-control" value="<?= $br->akhir_periode ?>">
                  <?= form_error('akhir_periode', '<div class="text-small text-danger">'.'</div>'); ?>  
                </div>
                </div>
                <div class="form-group">
                  <label for="inputState" class="form-label">Posisi Jabatan</label>
                  <div class="col-sm-12">
                  <select id="inputState" name="posisi_jabatan" class="form-control" value="<?= $br->posisi_jabatan ?>">
                    <option value="Staff Perkantoran">Staff Perkantoran</option>
                    <option value="Staff Administrasi">Staff Administrasi</option>
                    <option value="Staff Sekrektasis">Staff Sekrektasis</option>
                    <option value="Staff Bendahara">Staff Bendahara</option>
                  </select>
                  <?= form_error('posisi_jabatan', '<div class="text-small text-danger">'.'</div>'); ?>  
                </div>
                </div>
                <div class="form-group">
                  <label for="inputState" class="form-label">Status Pegawai</label>
                  <div class="col-sm-12">
                  <select id="inputState" name="status_pegawai" class="form-control" value="<?= $br->status_pegawai ?>">
                    <option value="Karyawawan Tetap">Karyawan Tetap</option>
                    <option value="Karyawan Kontrak">Karyawan Kontrak</option>
                    <option value="NON PNS">NON PNS</option>
                    <option value="PNS">PNS</option>
                  </select>
                  <?= form_error('status_pegawai', '<div class="text-small text-danger">'.'</div>'); ?>  
                </div>
                </div>
                <div class="form-group">
                  <label for="deskripsi">Deskripsi</label>
                  <div class="col-sm-12">
                  <textarea id="deskripsi" name="deskripsi" class="form-control"><?= $br->deskripsi ?></textarea>
                  <?= form_error('deskripsi', '<div class="text-small text-danger">'.'</div>'); ?>  
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-12">
                  <label for="jumlah">Masukkan Jumlah</label>
                  <input type="number" id="jumlah" name="jumlah" class="form-control" value="<?= $br->jumlah ?>">
                  <?= form_error('jumlah', '<div class="text-small text-danger">'.'</div>'); ?>  
                </div>
                </div>
                <div class="modal-footer">
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-md"> Simpan</button>
                  <!-- <button type="reset" class="btn btn-secondary btn-md"> Kembali</button> -->
                </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
</section>
<?php } ?>