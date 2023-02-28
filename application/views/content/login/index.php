<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/img/logo.png">
    <link rel="icon" type="image/png" href="<?= base_url() ?>/assets/img/logo.png">
    <title>
        E - Vaksin | Sign In
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?= base_url() ?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?= base_url() ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="<?= base_url() ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="<?= base_url() ?>assets/css/soft-ui-dashboard.css?v=1.0.5" rel="stylesheet" />

    <!-- CDN Js -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
</head>

<body class="">
    <main class="main-content mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row text-center mt-5">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain">
                                <?php
                                if ($this->session->flashdata('pesan')) {
                                    echo '<div class="alert alert-success alogin" role="alert">';
                                    echo $this->session->flashdata('pesan');
                                    echo '</div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain">
                                <div class="card-body bg-gradient-primary" style="border-radius: 10px;">
                                    <div class="card-header pb-0 text-left bg-transparent">
                                        <img class="w-25" src="<?= base_url() ?>/assets/img/logo.png" alt="">
                                        <h3 class="font-weight-bolder text-info text-gradient">Sign In</h3>
                                    </div>
                                    <form role="form" action="<?= base_url('login/proses_login'); ?>" method="post">
                                        <label>Username</label>
                                        <div class="mb-3">
                                            <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="email-addon" required>
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3">
                                            <input type="password" name="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" required>
                                        </div>
                                        <div class="text-center">
                                            <button class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
    <footer class="footer py-5">
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
    <script>
        window.setTimeout(function() {
            $(".alogin").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 3000);
    </script>
    <!--   Core JS Files   -->
    <script src="<?= base_url() ?>assets/js/core/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/js/core/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url() ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
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
    <script src="<?= base_url() ?>assets/js/soft-ui-dashboard.min.js?v=1.0.5"></script>


</body>

</html>