<div id="content">

    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Jumlah Pendaftar</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlah; ?> Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-user-graduate fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Pendaftar (Laki-laki)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $laki ?> Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-male fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Pendaftar (Perempuan)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $pr; ?> Orang</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-female fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Selamat Datang, <?= $user['nama']; ?></h1>
                <p class="lead"><strong class="text-danger">Silahkan Lengkapi Berkas Yang Diminta dan Dikumpulkan Ke Panitia Penerimaan Peserta Didik Baru SMPN</strong> </p>
            </div>
        </div>
        <!-- jumbotron -->
    </div>
    <!-- /.container-fluid -->
</div>