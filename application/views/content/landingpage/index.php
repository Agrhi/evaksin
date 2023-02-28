<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/assets/img/logo.png">
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/logo.png">
    <title>
        E - Vaksin
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url() ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>/assets/css/soft-ui-dash.css?v=1.0.5" rel="stylesheet" />
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <!-- Navbar -->
                <nav class="navbar bg-gradient-primary navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                    <div class="container-fluid pe-0">
                        <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="<?= base_url() ?>">
                            E - Vaksin Balesang
                        </a>
                        <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon mt-2">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                        <div class="collapse navbar-collapse" id="navigation">
                            <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">

                            </ul>
                            <li class="nav-item d-flex align-items-center">
                                <a class="btn btn-round btn-sm mb-0 btn-primary me-2" href="<?= base_url('login') ?>">Masuk</a>
                            </li>
                        </div>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75 mb-7">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-5 col-md-8 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Welcome</h3>
                                    <p class="mb-0">E - Vaksin Balesang</p>
                                </div>
                                <div class="card-body">
                                    <p class="text-justify">E - Vaksin merupakan suatu aplikasi yang dapat digunkan untuk mendata masyarakat balesang yang telah melakukan vaksinasi. Tujuan pembuatan aplikasi ini yaitu untuk mengetahui masyarakat mana dan daerah mana yang terdapat banyak masyarakat yang belum malakukan vaksinasi. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <img class="w-65 position-relative z-index-2 pt-4 mt-7" src="<?= base_url() ?>assets/img/logo.png" alt="rocket">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-8 mx-auto text-center">
                    <p class="mb-0 text-secondary">
                        Copyright © 2022 by Creative Tim Agrh.
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>/assets/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="<?= base_url() ?>/assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>
</body>

</html>