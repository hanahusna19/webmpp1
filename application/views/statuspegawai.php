  <!-- Main content -->
  <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="far fa-calendar-alt"></i></span>

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
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

      <!-- <section class="content"> -->
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
                    <tr>
            <th rowspan="2" scope="col">Status Pegawai</th>
            <th colspan="2" scope="colgroup">Jan</th>
            <th colspan="2" scope="colgroup">Feb</th>
            <th colspan="2" scope="colgroup">Mar</th>
            <th colspan="2" scope="colgroup">Apr</th>
            <th colspan="2" scope="colgroup">Mei</th>
            <th colspan="2" scope="colgroup">Juni</th>
            <th colspan="2" scope="colgroup">Juli</th>
            <th colspan="2" scope="colgroup">Ags</th>
            <th colspan="2" scope="colgroup">Sep</th>
            <th colspan="2" scope="colgroup">Okt</th>
            <th colspan="2" scope="colgroup">Nov</th>
            <th colspan="2" scope="colgroup">Des</th>
            <th style="width: 8%">Aksi</th>
              </tr>  
            </thead>
              <tbody>
                <tr>
        <td rowspan="1" scope="colgroup">PNS</td>
        <td>1</td>
        <td>1</td>
        <td>10</td>
        <td>1</td>
        <td>10</td>
        <td>1</td>
        <td>10</td>
        <td>1</td>
        <td>10</td>
        <td>1</td>
        <td>10</td>
        <td>1</td>
        <td>10</td>
        <td>1</td>
        <td>10</td>
        <td>1</td>
        <td>10</td>
        <td>1</td>
        <td>10</td>
        <td>1</td>
        <td>10</td>
        <td>1</td>
        <td>10</td>
        <td>10</td>
        <td>
          <button class="btn btn-outline-warning btn-xs"><i class="fas fa-edit"></i></button>
          <a href="" class="btn btn-outline-success btn-xs" onclick="return confirm('Apakah anda yakin menghapus data ini?')"><i class="fas fa-trash"></i></a>                    
        </td>
      </tr>
              </tbody></table></div></div></div></div></div></div></section>
    

      