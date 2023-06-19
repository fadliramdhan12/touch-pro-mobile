<?php
session_start();

// Cek apakah pengguna sudah login, jika ya, redirect ke halaman beranda
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header("Location: dashboard.php");
    exit;
}

// Tangani permintaan submit formulir login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Periksa username dan password yang dimasukkan
    $username = $_POST['lg_nik'];
    $password = $_POST['lg_password'];

    // Lakukan validasi dan pengecekan pada database
    $servername = "10.10.2.111";
    $username_db = "iot_prod_etr";
    $password_db = "P@ssw0rd123";
    $dbname = "aio_employee";
    $dbport = 6447;

    // Membuat koneksi ke database
    $conn = new mysqli($servername, $username_db, $password_db, $dbname, $dbport);

    // Memeriksa apakah koneksi berhasil
    if ($conn->connect_error) {
        die("Koneksi ke database gagal: " . $conn->connect_error);
    }

    // Mengecek apakah username dan password sesuai dengan data di database
    $sql = "SELECT * FROM php_ms_login WHERE lg_nik = '".$username."' AND lg_password = '".md5($password)."'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // Autentikasi berhasil, atur sesi dan redirect ke halaman beranda
        $_SESSION['logged_in'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        // Autentikasi gagal, tampilkan pesan error
        $error = "NIK atau password salah.";
    }

    // Menutup koneksi ke database
    $conn->close();
}
?>

<!doctype html>
<html lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/otsuka.png">

    <!-- TITLE -->
    <title>Production Dashboard</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="assets/css/plugins.css" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="assets/css/icons.css" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="assets/switcher/demo.css" rel="stylesheet">
</head>

<body class="app sidebar-mini ltr login-img">
    <!-- BACKGROUND-IMAGE -->
    <div class="">
        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <img src="assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOABAL LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="">
                <!-- Theme-Layout -->
                <!-- CONTAINER OPEN -->
                <div class="col col-login mx-auto mt-7">
                    <div class="text-center">
                        <!-- <img src="assets/images/brand/logo-white.png" class="header-brand-img" alt=""> -->
                        <h2 style="color: white;">Welcome to Touch Pro!</h2>
                    </div>
                </div>

                <div class="container-login100">
                    <div class="wrap-login100 p-6">
                        <?php if (isset($error)) { ?>
                            <div><?php echo $error; ?></div>
                        <?php } ?>
                        <form class="login100-form validate-form" method="POST" action="">
                            <!-- <span class="login100-form-title pb-5">
                                Login
                            </span> -->
                            <div class="text-center">
                                <img src="assets/img/otsuka_holding_logo.png" alt="" style="width: 150px;">
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-body tabs-menu-body p-0 pt-5">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab5">
                                            <div class="wrap-input100 validate-input input-group" data-bs-validate="Valid email is required: ex@abc.xyz">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-email text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="text" name="lg_nik" placeholder="NIK">
                                            </div>
                                            <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                                <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                    <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                                </a>
                                                <input class="input100 border-start-0 form-control ms-0" type="password" name="lg_password" placeholder="Password">
                                            </div>
                                            <div class="container-login100-form-btn">
                                                <button type="submit" class="login100-form-btn btn-primary">Login</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- CONTAINER CLOSED -->
            </div>
        </div>
        <!-- End PAGE -->
    </div>
    <!-- BACKGROUND-IMAGE CLOSED -->

    <!-- JQUERY JS -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!-- SHOW PASSWORD JS -->
    <script src="assets/js/show-password.min.js"></script>

    <!-- GENERATE OTP JS -->
    <script src="assets/js/generate-otp.js"></script>

    <!-- Perfect SCROLLBAR JS-->
    <script src="assets/plugins/p-scroll/perfect-scrollbar.js"></script>

    <!-- Color Theme js -->
    <script src="assets/js/themeColors.js"></script>

    <!-- CUSTOM JS -->
    <script src="assets/js/custom.js"></script>

    <!-- Custom-switcher -->
    <script src="assets/js/custom-swicher.js"></script>

    <!-- Switcher js -->
    <script src="assets/switcher/js/switcher.js"></script>

    <!-- Left-menu Js -->
    <script src="assets/plugins/side-menu/sidemenu.js"></script>
</body>

</html>
