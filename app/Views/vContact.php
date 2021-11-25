<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-0">
                <div class="col-sm-0">
                <center><font size="6" <p style="FONT-VARIANT:SMALL-CAPS;">Tentang Kami </p></font></center>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">
                    <center>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-body pt-7">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Salsabilla Qurrota </b></h2>
                                        <p class="text-muted text-sm">1917051048</p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> Salsaayuni04@gmail.com</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-phone-square-alt"></i></span> 0813 - 3634 - 1424</li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="assets/images/salsa.png" alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                             <center>
                            <div class="card-footer">
                                <div class="text-right">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-body pt-7">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="lead"><b>Tasya Nursita Dewi</b></h2>
                                        <p class="text-muted text-sm">1917051035</p>
                                        <ul class="ml-4 mb-0 fa-ul text-muted">
                                            <li class="small"><span class="fa-li"><i class="fas fa-envelope"></i></span> Tasyanursita@gmail.com</li>
                                            <li class="small"><span class="fa-li"><i class="fas fa-phone-square-alt"></i></span> 0895 - 1571 - 9365</li>
                                        </ul>
                                    </div>
                                    <div class="col-5 text-center">
                                        <img src="assets/images/tasya.png" alt="user-avatar" class="img-circle img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-footer -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.card -->
</div>

<?= $this->endSection(); ?>