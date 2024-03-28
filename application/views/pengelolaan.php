<section class="content">
<div class="container-fluid">
        <div class="row">
          <div class="col-12 col-xl-12 col-xl-12">
          <div class="card">
         <div class="card-header">

          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-light elevation-1"><i class="far fa-calendar-alt"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Pilih Tanggal Periode </span>
                <input class="info-box-number" type="month" id="birthday" name="birthday">
                      <style>
                        label {
                        /* margin-bottom: 1px; */
                        display: block;
                      }
                      input[type="month"] {
                      border: solid transparent; /* Atur border menjadi transparan */
                       padding: 3px;
                       border-radius: 5px; /* Tambahkan border-radius untuk sudut yang lebih lembut */
                       }
                      </style>
                            </div>
            </div>
                <h5 class="card-title">Deskripsi :</h5>
                <textarea id="message" name="message" rows="4" width="90%" column="4"></textarea>
                <style>
                     textarea {
                              width: 100%;
                              padding: 10px;
                              font-size: 16px;
                              border-radius: 5px;
                              border: 1px solid;
                              box-sizing: border-box;
                              size: 90px;
                            }
                </style>
                    <button type="button" class="btn btn-primary">Simpan dan Tambah</button> <button type="button" class="btn btn-outline-primary">Simpan</button>
                <br/>
                <br/>
               <button type="button" class="btn btn-outline-primary mb-3" data-toggle="modal" data-target="#tambahDataModal"> Pilih Posisi dan Status Pegawai</button>       
                            <br/>
              </div>

               <div class="card-body" style="overflow-x:auto;">
                   <table id="example1" class="table table-bordered">         
                     <thead>
                    <tr>
                      <th>Posisi Pegawai</th>
                      <th>Status Pegawai</th>
                       <!-- Kolom Bulan -->
                      <th>Jan</th>
                      <th>Feb</th>
                      <th>Mar</th>
                      <th>Apr</th>
                      <th>Mei</th>
                      <th>Juni</th>
                      <th>Juli</th>
                      <th>Ags</th>
                      <th>Sep</th>
                      <th>Okt</th>
                      <th>Nov</th>
                      <th>Des</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
               </table>
               </div>
                </div>
          </div>
        </div></div>
    </section>
                  <!-- Modal Tambah Data -->
                  <div class="modal" id="tambahDataModal">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="card-title">Pilih Posisi dan Status Pegawai</h4>
                        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                      </div>
                         <!-- Modal Body -->
                        <div class="modal-body">
                          <form id="formTambahData">
                            <div class="form-group">
                              <h6 class="card-title">Posisi Pegawai</h6>
                              <br/>
                            <select id="posisi" name="posisi" required>
                              <option value="Staff Perkantoran">Staff Perkantoran</option>
                              <option value="Staff Administrasi">Staff Administrasi</option>
                              <option value="Staff Sekrektasis">Staff Sekrektasis</option>
                              <option value="Staff Bendahara">Staff Bendahara</option>
                            </select>
                            <br/>
                            <h6 class="card-title">Status Pegawai</h6>
                            <br/>
                            <select id="status" name="status" required>
                              <option value="Karyawawan Tetap">Karyawan Tetap</option>
                              <option value="Karyawan Kontrak">Karyawan Kontrak</option>
                              <option value="NON PNS">NON PNS</option>
                              <option value="PNS">PNS</option>
                              </select>
                              <style>
                            select {
                              width: 100%;
                              padding: 10px;
                              font-size: 16px;
                              border-radius: 5px;
                              border: 1px solid;
                              box-sizing: border-box;
                              size: 90px;
                            }
                          </style>
                          </div>
                      </div> 
                      
                      <div class="modal-footer">
                      <button type="submit" class="btn btn-primary"> Simpan </button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                      </div>
                    </form>
                    </div></div></div>
              