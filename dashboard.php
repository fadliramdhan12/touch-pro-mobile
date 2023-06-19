<?php
session_start();

// Fungsi untuk memeriksa waktu ketidakaktifan pengguna
function checkUserInactivity()
{
    $inactiveTimeout = 10 * 60; // 10 menit (dalam detik)

    if (isset($_SESSION['last_activity'])) {
        $inactiveDuration = time() - $_SESSION['last_activity'];

        if ($inactiveDuration >= $inactiveTimeout) {
            // Pengguna tidak aktif selama waktu yang ditentukan, logout otomatis
            session_unset();
            session_destroy();
            header("Location: index.php");
            exit;
        }
    }

    // Perbarui waktu aktivitas terakhir dengan waktu saat ini
    $_SESSION['last_activity'] = time();
}

// Panggil fungsi checkUserInactivity saat pengguna mengakses halaman ini
checkUserInactivity();

// Cek apakah pengguna sudah login, jika tidak, redirect ke halaman login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit;
}

// Tangani permintaan logout
if (isset($_GET['logout'])) {
    // Hapus semua variabel sesi
    session_unset();

    // Hancurkan sesi
    session_destroy();

    // Redirect ke halaman login
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords"
            content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/otsuka.png">

        <!-- TITLE -->
        <!-- <title>Sash – Bootstrap 5 Admin & Dashboard Template</title> -->
        <title>Production Dashboard</title>

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- STYLE CSS -->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">

        <!-- Plugins CSS -->
        <link href="assets/css/plugins.css" rel="stylesheet">

        <!--- FONT-ICONS CSS -->
        <link href="assets/css/icons.css" rel="stylesheet">

        <!-- INTERNAL Switcher css -->
        <link href="assets/switcher/css/switcher.css" rel="stylesheet">
        <link href="assets/switcher/demo.css" rel="stylesheet">
    </head>
    <body class="app sidebar-mini ltr light-mode" onload="table1(), table2(), table3(), table4(), table5();">
        <div class="page">
            <div class="page-main">
                <!-- app-Header -->
                <div class="app-header header" style="padding-inline-start: 50px;">
                    <div class="container-fluid main-container">
                        <div class="d-flex">
                            <img src="assets/img/otsuka.png" class="header-brand-img desktop-logo" alt="logo" style="width: 40px; height: auto;">
                            <a class="logo-horizontal " href="index.html">
                                <img src="assets/img/otsuka.png" class="header-brand-img desktop-logo" alt="logo" style="width: 30px;">
                                <img src="assets/img/otsuka_holding_logo.png" class="header-brand-img light-logo1" alt="logo" style="width: 100px;">
                            </a>
                            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                                    aria-controls="navbarSupportedContent-4" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon fe fe-more-vertical"></span>
                                </button>
                                <div class="navbar navbar-collapse responsive-navbar p-0">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                        <div class="d-flex order-lg-2">
                                            <div class="dropdown d-flex profile-1">
                                                <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                    <img src="assets/images/users/21.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="?logout=true">
                                                        <i class="dropdown-icon fe fe-alert-circle"></i> Sign out
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /app-Header -->

                <div class="side-app">
                    <div class="main-container container-fluid">
                        <div class="row mt-9">
                            <div class="col-12">
                                <div class="card bg-transparent shadow-none">
                                    <div class="card-body">
                                        <img src="assets/img/home_v2.png" class="mx-auto d-block h-auto position-relative" style="width: 450px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12  col-xl-6">
                                <a href="" class="card card-shadow">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="assets/img/oci3.png" class="card-img-left h-auto top-50 start-50 translate-middle mx-2 my-2 position-relative" style="left: 50%; transform: translateX(-50%); width: 250px" alt="img">
                                            <center style="margin-top: 100px; margin-bottom: 10px; color: black;">
                                                <div id="ach-eff-oci3"></div>
                                            </center>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title" style="color: black;">Aseptic Line 3</h5>
                                                <div id="table1" class="table-responsive">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12  col-xl-6">
                                <a href="" class="card card-shadow">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="assets/img/al4.png" class="card-img-left h-auto top-50 start-50 translate-middle mx-2 my-2 position-relative" style="left: 50%; transform: translateX(-50%); width: 250px" alt="img">
                                            <center style="margin-top: 100px; margin-bottom: 10px; color: black;">
                                                <div id="ach-eff-al4"></div>
                                            </center>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title" style="color: black;">Aseptic Line 4</h5>
                                                <div id="table2" class="table-responsive">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12  col-xl-6">
                                <a href="" class="card card-shadow">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="assets/img/gbl.png" class="card-img-left h-auto top-50 start-50 translate-middle mx-2 my-2 position-relative" style="left: 50%; transform: translateX(-50%); width: 250px" alt="img">
                                            <center style="margin-top: 90px; margin-bottom: 10px; color: black;">
                                                <div id="ach-eff-gbl"></div>
                                            </center>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title" style="color: black;">Glass Bottle Line</h5>
                                                <div id="table3" class="table-responsive">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-12  col-xl-6">
                                <a href="" class="card card-shadow">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="assets/img/PET.png" class="card-img-left h-auto top-50 start-50 translate-middle mx-2 my-2 position-relative" style="left: 50%; transform: translateX(-50%); width: 250px" alt="img">
                                            <center style="margin-top: 90px; margin-bottom: 10px; color: black;">
                                                <div id="ach-eff-pet"></div>
                                            </center>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title" style="color: black;">PET 2 Line</h5>
                                                <div id="table4" class="table-responsive">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12  col-xl-6">
                                <a href="" class="card card-shadow">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="assets/img/can.png" class="card-img-left h-auto top-50 start-50 translate-middle mx-2 my-2 position-relative" style="left: 50%; transform: translateX(-50%); width: 250px" alt="img">
                                            <center style="margin-top: 130px; margin-bottom: 10px; color: black;">
                                                <div id="ach-eff-can"></div>
                                            </center>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title" style="color: black;">CAN Line</h5>
                                                <div id="table5" class="table-responsive">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JQUERY JS -->
        <script src="assets/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            function table1() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("table1").innerHTML = this.responseText;
                }
                xhttp.open("GET", "oci3.php");
                xhttp.send();
            }

            function table2() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("table2").innerHTML = this.responseText;
                }
                xhttp.open("GET", "al4.php");
                xhttp.send();
            }

            function table3() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("table3").innerHTML = this.responseText;
                }
                xhttp.open("GET", "gbl.php");
                xhttp.send();
            }

            function table4() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("table4").innerHTML = this.responseText;
                }
                xhttp.open("GET", "pet2.php");
                xhttp.send();
            }

            function table5() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("table5").innerHTML = this.responseText;
                }
                xhttp.open("GET", "can.php");
                xhttp.send();
            }

            function ach_eff_oci3() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("ach-eff-oci3").innerHTML = this.responseText;
                }
                xhttp.open("GET", "ach_eff_oci3.php");
                xhttp.send();
            }

            function ach_eff_al4() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("ach-eff-al4").innerHTML = this.responseText;
                }
                xhttp.open("GET", "ach_eff_al4.php");
                xhttp.send();
            }

            function ach_eff_gbl() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("ach-eff-gbl").innerHTML = this.responseText;
                }
                xhttp.open("GET", "ach_eff_gbl.php");
                xhttp.send();
            }

            function ach_eff_pet() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("ach-eff-pet").innerHTML = this.responseText;
                }
                xhttp.open("GET", "ach_eff_pet.php");
                xhttp.send();
            }

            function ach_eff_can() {
                const xhttp = new XMLHttpRequest();
                xhttp.onload = function() {
                    document.getElementById("ach-eff-can").innerHTML = this.responseText;
                }
                xhttp.open("GET", "ach_eff_can.php");
                xhttp.send();
            }

            setInterval(() => {
                table1();
                table2();
                table3();
                table4();
                table5();
                ach_eff_oci3();
                ach_eff_al4();
                ach_eff_gbl();
                ach_eff_pet();
                ach_eff_can();
            }, 5000);
        </script>
    </body>
</html>