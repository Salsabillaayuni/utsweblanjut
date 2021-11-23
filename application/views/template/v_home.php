  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
            <html>
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <i class="fas fa-chart-pie me-3"></i>
                  Data Imunisasi Balita
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                    <a href="<?php echo base_url('/Welcome/input') ?>"><i class="fas fa-plus">Tambah data</i></a>
            </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <div class="container-fluid d-flex flex-row">
                    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Id Anak</th>
          <th scope="col">Nama Anak</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Usia</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Nama Ibu</th>
          <th scope="col">Jenis Imunisasi</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
              
      <?php 
                $count = 0;
                foreach ($data_imn as $row){
                    $count = $count + 1;
                    ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row->id_anak ?></td>
                <td><?php echo $row->nama_anak ?></td>
                <td><?php echo $row->tempat_lahir ?></td>
                <td><?php echo $row->tanggal_lahir ?></td>
                <td><?php echo $row->usia ?></td>
                <td><?php echo $row->jenis_kelamin ?></td>
                <td><?php echo $row->nama_ibu ?></td>
                <td><?php echo $row->jenis_imunisasi ?></td>
                <td><a href="<?php echo base_url('/Welcome/edit') ?>/<?php echo $row->id_anak ?>">Edit</a> | <a href="<?php echo base_url('/Welcome/fungsiDelete')?>/<?php echo $row->id_anak ?>"> Delete</a></td>

            </tr>
            <?php } ?>
      </tbody>
      </table>
                </div>
              </div><!-- /.card-body -->
            </div>
       
 
