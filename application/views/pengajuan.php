<section class="content">
<div class="container-fluid">
        <div class="row">
          <div class="col-12 col-xl-12 col-xl-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Pengajuan </h3>
              <!-- /.card-header -->
              </div>
              <br/>
              <div class="col-12 col-md-4 col-xl-12">
                  <button type="button" class="btn btn-outline-danger" onclick="exportToPDF()"><i class="fas fa-file-pdf"></i></button>
                 <button type="button" class="btn btn-outline-success" onclick="exportToExcel()"><i class="fas fa-file-excel"></i></button>
            </div>
            <br/>
       
                <div class="info-box-content">
                <input class="tanggal col-sm-4" type="date" id="birthday" name="birthday" placeholder="Range">
                </div>
            <br/>
                      <style>
                        label {
                        margin-bottom: 10px;
                        display: block;
                      }
                      input[type="date"] {
                       border: 1px solid; /* Atur border menjadi transparan */
                       padding: 8px;
                       border-radius: 3px; /* Tambahkan border-radius untuk sudut yang lebih lembut */
                       margin-right: 10px;
                       margin-left: 10px;
                      }
                      </style>
                      <br/>
                      <div class="card-body table-responsive p-2">
                  <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr class="text-center">
                                            <th>Id</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Posisi Pegawai</th>
                                            <th>Status Pegawai</th>
                                            <th>Periode Awal</th>
                                            <th>Periode Akhir</th>
                                            <th>Tipe Pengajuan</th>
                                            <th>Status</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>
                                    <tr class="text-center">
                                        <th scope="row"><a href="#">#2457</a></th>
                                            <td>2011/04/25</td>
                                            <td>Staff Administrasi</td>
                                            <td> NON PNS</td>
                                            <td>2022/05/16</td>
                                            <td>2024/04/25</td>
                                            <td>Penganti</td>
                                            <td><span class="badge bg-warning">Proses</span></td>
                                            <td></td>
                                        </tr>
                                        <tr class="text-center">
                                        <th scope="row"><a href="#">#2457</a></th>
                                            <td>2011/04/25</td>
                                            <td>Staff Bendahara</td>
                                            <td>PNS</td>
                                            <td>2022/05/16</td>
                                            <td>2024/04/25</td>
                                            <td>Penganti</td>
                                            <td><span class="badge bg-danger">Ditolak</span></td>
                                            <td></td>
                                        </tr>
                                        <tr class="text-center">
                                        <th scope="row"><a href="#">#2457</a></th>
                                            <td>2011/04/25</td>
                                            <td>Staff Administrasi</td>
                                            <td>PNS</td>
                                            <td>2022/05/16</td>
                                            <td>2024/04/25</td>
                                            <td>Baru</td>
                                            <td><span class="badge bg-success">Disetujui</span></td>
                                            <td><a href= "<?= base_url('detailpengajuan') ?>" type="button" class="btn btn-outline-secondary rounded-pill btn-sm"> <i class="bi bi-info"></i>Detail</a></td>
                                        </tr>
                                        <tr class="text-center">
                                        <th scope="row"><a href="#">#2457</a></th>
                                            <td>2011/04/25</td>
                                            <td>Staff Administrasi</td>
                                            <td>Kontrak</td>
                                            <td>2022/05/16</td>
                                            <td>2024/04/25</td>
                                            <td>Baru</td>
                                            <td><span class="badge bg-success">Disetujui</span></td>
                                            <td><a href= "<?= base_url('detailpengajuan') ?>" type="button" class="btn btn-outline-secondary rounded-pill btn-sm"> <i class="bi bi-info"></i>Detail</a></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>

          </div></div></div></section>
                         