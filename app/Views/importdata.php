<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimal-ui">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Admin</title>
    <link rel="apple-touch-icon" href="assets/images/apple-icon-120.png">
    <link rel="shortcut icon" type="assets/image/x-icon" href="images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">

    <!-- Tambahkan jQuery untuk menangani pop-up -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/switch.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/palette-switch.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chat-application.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dashboard-analytics.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online"><img src="assets/images/avatar-s-19.png" alt="avatar"></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"> <a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="assets/images/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1">Lando</span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="project-summary.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" action="<?= base_url('tracer') ?>"><i class="ft-power"></i> Logout</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true" data-img="images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php"><img class="brand-logo" alt="Chameleon admin logo" src="assets/images/apple-icon-120.png" />
                <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
            </ul>
        </div>
        <div class="navigation-background"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item">
                    <a href="index.php">
                        <i class="ft-home">
                        </i>
                        <span class="menu-title">Dashboard</span></a>
                </li>

                <li class="menu-item">
                    <a href="<?= base_url('/kuesionerkuesioner') ?>">
                        <i class="ft-grid"></i>
                        <span class="menu-title">Kuesioner</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="<?= base_url('welcome') ?>">
                        <i class="ft-edit"></i>
                        <span class="menu-title">Welcome</span>
                    </a>
                </li>
        
                <li class=" nav-item"><a href="#"><i class="ft-sidebar"></i><span class="menu-title" data-i18n="">Organisasi</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="gallery-grid.html">Satuan Organisasi</a>
                        </li>
                        <li><a class="menu-item" href="search.html">Tipe</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">


                        <!-- Import Data Start -->
                        <div class="card tab-content" id="admin" style="display:block">
                            <div class="card-header">
                                <?php if (session()->getFlashdata('error')): ?>
                                    <div class="alert alert-danger">
                                        <?= session()->getFlashdata('error') ?>
                                    </div>
                                <?php endif; ?>
                                <h2>Import Pengguna</h2>

                                <hr>
                                <p>Agar Import Pengguna dapat berjalan dengan lancar dan mudah, pastikan dokumen CSV anda memenuhi kriteria berikut. <br>
                                    1. Data untuk email harus memiliki @ dan . <br>
                                    2. field wajib diisi semua <br>
                                    3. Group max hanya memilih satu <br>


                                </p>
                                <hr>
                                <p>
                                    Pastikan dokumen csv anda memiliki field berikut.
                                    <br> 1. Nama Lengkap
                                    <br> 2. Username
                                    <br> 3. Password
                                    <br> 4. Email
                                    <br> 5. Group (administrator, alumni, perusahaan, atasan)
                                    <br> 6. Alamat
                                    <br> 7. Kota/Kabupaten
                                    <br> 8. Provinsi
                                    <br> 9. Jenis Kelamin (pria/wanita)
                                    <br> 10. No Tlp
                                    <br> 11. NIM
                                    <br> 12. Fakultas
                                    <br> 13. Program Studi
                                    <br> 14. Tahun masuk
                                    <br> 15. Tahun Lulus
                                    <br> 16. NIK
                                    <br> 17. NPWP

                                </p>
                                <hr>
                                <a href="datauser.csv" download="datauser.csv">
                                    <button class="btn btn-primary" style='font-size:12px;padding:4px 7px;color:white;'>Download contoh CSV</button>

                                </a>



                                <div class="card-content collapse show">
                                    <div class="card-body p-9 pb-0">
                                        <div class="container mb-1">
                                            <div>
                                                <!-- Tampilkan pesan jika ada -->
                                                <?php if (session()->getFlashdata('message')): ?>
                                                    <p><?= session()->getFlashdata('message'); ?></p>
                                                <?php endif; ?>

                                                <!-- Form untuk upload file Excel -->
                                                <form action="/import" method="post" enctype="multipart/form-data">
                                                    <input type="file" name="file" required>
                                                    <button type="submit" class="btn btn-primary">Import</button>
                                                </form>

                                                <!-- Modal Pop-up -->
                                                <div id="popupModal" style="display:none;">
                                                    <div style="position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); z-index: 9999;">
                                                        <p id="popupText"></p>
                                                        <button id="closePopup">OK</button>
                                                    </div>
                                                    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: 9998;"></div>
                                                </div>

                                                <script>
                                                    // Jika ada pesan di session flash data, maka tampilkan modal pop-up
                                                    $(document).ready(function() {
                                                        var message = $('#popupMessage').text();
                                                        if (message) {
                                                            $('#popupText').text(message);
                                                            $('#popupModal').show();
                                                        }
                                                    });

                                                    // Tutup modal dan redirect ke halaman utama
                                                    $('#closePopup').click(function() {
                                                        $('#popupModal').hide();
                                                        window.location.href = '/'; // Redirect ke halaman utama
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Import Data End -->




                        <script>
                            function openTab(evt, tabId) {
                                // Sembunyikan semua tab content
                                var tabcontent = document.getElementsByClassName("tab-content");
                                for (var i = 0; i < tabcontent.length; i++) {
                                    tabcontent[i].style.display = "none"; // Sembunyikan semua tab
                                }

                                // Tampilkan tab yang dipilih
                                document.getElementById(tabId).style.display = "block"; // Tampilkan tab yang diinginkan

                                // Menandai tombol tab yang aktif
                                var tablinks = document.getElementsByClassName("nav-link");
                                for (var i = 0; i < tablinks.length; i++) {
                                    tablinks[i].className = tablinks[i].className.replace(" active", ""); // Hilangkan kelas active dari semua tab
                                }

                                // Tambahkan kelas active pada tombol yang ditekan
                                evt.currentTarget.className += " active";
                            }
                        </script>

                    </div>
                </div>


                <!-- Revenue, Hit Rate & Deals
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Users</h4>
                                <a class="heading-elements-toggle">
                                    <i class="la la-ellipsis-v font-medium-3"></i>
                                </a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><button type="button" class="btn btn-glow btn-round btn-bg-gradient-x-red-pink">More</button></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-content collapse show">
                                <div class="card-body p-9 pb-0">
                                    <div class="chartist">
                                        <div id="project-stats" class="height-350 areaGradientShadow1"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->


                <!-- END: Content-->

                <!-- BEGIN: Vendor JS-->
                <script src="assets/js/vendors.min.js" type="text/javascript"></script>
                <script src="assets/js/switchery.min.js" type="text/javascript"></script>
                <script src="assets/js/switch.min.js" type="text/javascript"></script>
                <!-- BEGIN Vendor JS-->

                <!-- BEGIN: Page Vendor JS-->
                <script src="assets/js/chartist.min.js" type="text/javascript"></script>
                <script src="assets/js/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
                <!-- END: Page Vendor JS-->

                <!-- BEGIN: Theme JS-->
                <script src="assets/js/app-menu.min.js" type="text/javascript"></script>
                <script src="assets/js/app.min.js" type="text/javascript"></script>
                <script src="assets/js/customizer.min.js" type="text/javascript"></script>
                <script src="assets/js/jquery.sharrre.js" type="text/javascript"></script>
                <!-- END: Theme JS-->

                <!-- BEGIN: Page JS-->
                <script src="assets/js/dashboard-analytics.min.js" type="text/javascript"></script>
                <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>

<style>

</style>