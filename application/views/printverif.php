<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Pegawai Baru</title>

     <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/template') ?>/dist/css/adminlte.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body>
</br>
<center><h2> DAFTAR LIST PEGAWAI PENGGANTI </h2><hr> </center>
<table id="example1" class="table table-bordered">
                  <thead>
                  <tr class="text-center">
                  <th>Id</th>
                <th>Tanggal pengajuan</th>
                <th>Pengajuan</th>
                <th>Jenis Pengajuan</th>
                <th>Periode Awal</th>
                <th>Periode Akhir</th>
                <th>Status Pengajuan</th>
                  </tr>
                  </thead>
                  <?php $no = 1;
                  foreach($baru as $br) : ?>
                  <tbody>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $br->awal_periode ?></td>
                    <td><?= $br->akhir_periode ?></td>
                    <td><?= $br->posisi_jabatan ?></td>
                    <td><?= $br->status_pegawai ?></td>
                    <td><?= $br->deskripsi ?></td>
                    <td><?= $br->jumlah ?></td>
                  </tr>
                  <?php endforeach ?>
                  </tbody>
                </table>

                <script type="text/javascript">
                    window.print();
                </script>
</body>
</html>