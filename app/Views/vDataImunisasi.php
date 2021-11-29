<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title mt-1">
                <i class="fas fa-syringe me-2"></i>
                  Pendataan Imunisasi Pada Balita
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a href="/insertDataImunisasi" class="btn btn-primary"><i class="fas fa-plus me-2"></i>Tambah data</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <div class="container-fluid d-flex flex-row">
                    <table class="table" style="text-align:center">
                        <thead>
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id Anak<th>
                            <th scope="col">Nama Anak</th>
                            <th scope="col">Tempat Lahir</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jenis Imunisasi</th>
                            <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row">1</th>
                            <td>276163</td>
                            <td></td>
                            <td>Rey</td>
                            <td>Bandung</td>
                            <td>07-11-2021</td>
                            <td>Laki-Laki</td>
                            <td>Campak</td>
                            <td>
                              <a href="/editDataImunisasi" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>
                            </td>
                            </tr>
                            <tr>
                            <th scope="row">2</th>
                            <td>65689</td>
                            <td></td>
                            <td>Langit</td>
                            <td>Lampung</td>
                            <td>01-02-2020</td>
                            <td>Perempuan</td>
                            <td>Vitamin</td>
                            <td>
                              <a href="/editDataImunisasi" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                              <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?= $this->endSection(); ?>