<section class="content">
<div class="container-fluid">
        <div class="row">
          <div class="col-12 col-xl-12 col-xl-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Verifikasi </h3>
              <!-- /.card-header -->
              </div>
              <br/>
              <div class="col-12 col-md-4 col-xl-12">
              <a href="<?= base_url('verifikasi/print') ?>" class="btn btn-outline-info btn-sm"><i class="fas fa-print"></i> Print Data</a>
              </div>
              <!-- <div class="card-body responsive" style="overflow-x:auto;">
                <table id="example1" class="table table-bordered"> -->
                <div class="card-body table-responsive p-2">
                <table class="table table-hover text-nowrap">
                  <thead>
                <th>Id</th>
                <th>Tanggal pengajuan</th>
                <th>Pengajuan</th>
                <th>Jenis Pengajuan</th>
                <th>Periode Awal</th>
                <th>Periode Akhir</th>
                <th>Status Pengajuan</th>
                <th style="width: 11%">Aksi</th>
              </tr>
              
            </thead>
            <tbody>
              <tr>
                <td>#2134</td>
                <td>23-04-2022</td>
                <td>Unit Kerja</td>
                <td>Pegawai Peganti</td>
                <td>23-04-2022</td>
                <td>23-04-2023</td>
                <td>
<select class="select-badge pending">
    <option class="float-right badge bg-warning" value="pending">Pending</option>
    <option class="float-right badge bg-success" value="approval">Approval</option>
    <option class="float-right badge bg-danger" value="reject">Tolak</option>
</select>
          </td>
          <td>
            <button type="button" class="btn btn-outline-success btn-xs"><i class= "fas fa-user-check"></i></button>
            <button type="button" class="btn btn-outline-danger btn-xs"><i class= " fas fa-user-times"></i></button>
            <button type="button" class="btn btn-outline-primary btn-xs"><i class= "fas fa-clipboard-list"></i></button>
          </td>
        </tr>

        <tr>
          <td>#2132</td>
          <td>23-01-2022</td>
          <td>Unit Kerja</td>
          <td>Pegawai Peganti</td>
          <td>23-04-2022</td>
          <td>23-04-2023</td>
          <td>

<select class="select-badge pending">
    <option class="float-right badge bg-warning" value="pending">Pending</option>
    <option class="float-right badge bg-success" value="approval">Approval</option>
    <option class="float-right badge bg-danger" value="reject">Tolak</option>
</select>
          </td>
          <td>
            <button type="button" class="btn btn-outline-success btn-xs"><i class= "fas fa-user-check"></i></button>
            <button type="button" class="btn btn-outline-danger btn-xs"><i class= " fas fa-user-times"></i></button>
            <button type="button" class="btn btn-outline-primary btn-xs"><i class= "fas fa-clipboard-list"></i></button>
          </td>
        </tr>
        <tr>
          <td>#2145</td>
          <td>23-08-2022</td>
          <td>Unit Kerja</td>
          <td>Pegawai Baru</td>
          <td>23-04-2022</td>
          <td>23-04-2023</td>
          <td>

<select class="select-badge pending">
    <option class="float-right badge bg-warning" value="pending">Pending</option>
    <option class="float-right badge bg-success" value="approval">Approval</option>
    <option class="float-right badge bg-danger" value="reject">Tolak</option>
</select>
          </td>
          <td>
            <button type="button" class="btn btn-outline-success btn-xs"><i class= "fas fa-user-check"></i></button>
            <button type="button" class="btn btn-outline-danger btn-xs"><i class= " fas fa-user-times"></i></button>
            <button type="button" class="btn btn-outline-primary btn-xs"><i class= "fas fa-clipboard-list"></i></button>
          </td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>
     </section> 

     <script>
document.getElementById('statusSelect').addEventListener('change', function() {
    var selectElement = document.getElementById('statusSelect');
    var selectedOption = selectElement.options[selectElement.selectedIndex].value;
    
    var badgeElement = document.querySelector('.select-badge');
    
    // Hapus kelas yang ada untuk menghindari pemilihan sebelumnya
    badgeElement.classList.remove('pending', 'approval', 'reject');
    
    // Tambahkan kelas sesuai dengan opsi yang dipilih
    if (selectedOption === 'pending') {
        badgeElement.classList.add('pending');
    } else if (selectedOption === 'approval') {
        badgeElement.classList.add('approval');
    } else if (selectedOption === 'reject') {
        badgeElement.classList.add('reject');
    }
});
</script>