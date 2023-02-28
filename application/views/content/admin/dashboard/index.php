    <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Sudah Vaksin</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $svaksin ?>
                                    <a href="<?= base_url('data_penduduk') ?>">
                                        <span class="text-success text-sm font-weight-bolder">Jiwa</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fas fa-user-check text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Belum Vaksin</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $bvaksin ?>
                                    <a href="<?= base_url('data_penduduk') ?>">
                                        <span class="text-success text-sm font-weight-bolder">Jiwa</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fas fa-user-times text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah Penduduk</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $penduduk ?>
                                    <a href="<?= base_url('data_penduduk') ?>">
                                        <span class="text-success text-sm font-weight-bolder">Jiwa</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fas fa-solid fa-folder text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Jumlah User Aktif</p>
                                <h5 class="font-weight-bolder mb-0">
                                    <?= $user ?>
                                    <a href="<?= base_url('management_user') ?>">
                                        <span class="text-success text-sm font-weight-bolder">User</span>
                                    </a>
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="fas fa-users text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-lg">
                            <div class="d-flex flex-column h-100">
                                <p class="mb-1 pt-2 text-bold">Welcome !</p>
                                <h5 class="font-weight-bolder">E - Vaksin Balesang</h5>
                                <!-- <p class="mb-5">From colors, cards, typography to complex elements, you will find the full documentation.</p> -->
                                <p class="mb-5">E - Vaksin merupakan suatu aplikasi yang dapat digunkan untuk mendata masyarakat balesang yang telah melakukan vaksinasi. Tujuan pembuatan aplikasi ini yaitu untuk mengetahui masyarakat mana dan daerah mana yang terdapat banyak masyarakat yang belum malakukan vaksinasi. </p>
                            </div>
                        </div>
                        <div class="col-lg-3 ms-auto text-center mt-3 mt-lg-0">
                            <div class="bg-gradient-primary border-radius-lg h-100">
                                <div class="position-relative d-flex align-items-center justify-content-center h-100">
                                    <img class="w-80 position-relative z-index-2 " src="<?= base_url() ?>assets/img/logo.png" width="10px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>