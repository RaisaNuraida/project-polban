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
                                <div class="arrow_box_right"> <a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="assets/images/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-500 ml-1 "><?= session()->get('username') ?></span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a><a class="dropdown-item" href="project-summary.html"><i class="ft-check-square"></i> Task</a><a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url('tracer') ?>"><i class="ft-power"></i> Logout</a>
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
                        <span class="menu-title">Pengguna</span></a>
                </li>

                <li class="menu-item">
                    <a href="<?= base_url('/kuesionerkuesioner') ?>">
                        <i class="ft-grid"></i>
                        <span class="menu-title">Kuesioner</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="<?= base_url('/welcomepage') ?>">
                        <i class="ft-edit"></i>
                        <span class="menu-title">Welcome</span>
                    </a>
                </li>

                <li class=" nav-item"><a href="#"><i class="ft-sidebar"></i><span class="menu-title" data-i18n="">Organisasi</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="<?= base_url('/organisasi') ?>">Satuan Organisasi</a>
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
            <div></div>
            <div class="content-body">

                <!-- CRUD START-->
                <div class="row">
                    <div class="col-lg-12 col-md-12">

                        <!-- Table Kuesioner START-->
                        <div class="card tab-content">
                            <div class="card-header ml-2 mr-2">
                                <div class="d-flex justify-content-between">
                                    <h2>Kuesioner Answer</h2>
                                

                                </div>
                               <hr>

                                <!-- Filter START -->
                                <div>
                                    <form method="get" action="/carianswer" id="searchForm" onsubmit="removeEmptyInputs()">
                                        <div class="d-flex align-items-center justify-content">
                                            <input type="text" name="carianswer" id="name" class="form-control" placeholder="Cari Nama atau NIM" style="margin-right: 10px; width:22%;">
                                            <!--  Fakultas Dropdown -->
                                            <select name="carianswer" id="academic_faculty" class="form-control" style="margin-right: 10px; width:22%;">
                                                <option value="">Jurusan</option>
                                                <option value="Teknik Sipil">Teknik Sipil</option>
                                                <option value="Teknik Mesin">Teknik Mesin</option>
                                                <option value="Teknik Refrigasi dan Tata Udara">Teknik Refrigasi dan Tata Udara</option>
                                                <option value="Teknik Konversi Energi">Teknik Konversi Energi</option>
                                                <option value="Teknik Elektro">Teknik Elektro</option>
                                                <option value="Teknik Kimia">Teknik Kimia</option>
                                                <option value="Teknik Komputer dan Informatika">Teknik Komputer dan Informatika</option>
                                                <option value="Akuntansi">Akuntansi</option>
                                                <option value="Administrasi Niaga">Administrasi Niaga</option>
                                                <option value="Bahasa Inggris">Bahasa Inggris</option>
                                            </select>

                                            <!-- Program Studi Dropdown -->
                                            <select name="carianswer" id="academic_program" class="form-control" style="margin-right: 10px; width:22%;">
                                                <option value="">Program Studi</option>
                                                <!-- Teknik Sipil -->
                                                <option data-faculty="Teknik Sipil" value="D-3 Teknik Konstruksi Sipil">D-3 Teknik Konstruksi Sipil</option>
                                                <option data-faculty="Teknik Sipil" value="D-3 Teknik Konstruksi Gedung">D-3 Teknik Konstruksi Gedung</option>
                                                <option data-faculty="Teknik Sipil" value="D-4 Teknik Perancangan Jalan dan Jembatan">D-4 Teknik Perancangan Jalan dan Jembatan</option>
                                                <option data-faculty="Teknik Sipil" value="D-4 Teknik Perawatan dan Perbaikan Gedung">D-4 Teknik Perawatan dan Perbaikan Gedung</option>
                                                <option data-faculty="Teknik Sipil" value="S-2 Rekayasa Infrastruktur">S-2 Rekayasa Infrastruktur</option>

                                                <!-- Teknik Mesin -->
                                                <option data-faculty="Teknik Mesin" value="D-3 Teknik Mesin">D-3 Teknik Mesin</option>
                                                <option data-faculty="Teknik Mesin" value="D-3 Teknik Aeronautika">D-3 Teknik Aeronautika</option>
                                                <option data-faculty="Teknik Mesin" value="D-4 Teknik Perancangan dan Konstruksi Mesin">D-4 Teknik Perancangan dan Konstruksi Mesin</option>
                                                <option data-faculty="Teknik Mesin" value="D-4 Proses Manufaktur">D-4 Proses Manufaktur</option>

                                                <!-- Teknik Refrigasi dan Tata Udara -->
                                                <option data-faculty="Teknik Refrigasi dan Tata Udara" value="D-3 Teknik Pendingin dan Tata Udara">D-3 Teknik Pendingin dan Tata Udara</option>
                                                <option data-faculty="Teknik Refrigasi dan Tata Udara" value="D-4 Teknik Pendingin dan Tata Udara">D-4 Teknik Pendingin dan Tata Udara</option>

                                                <!-- Teknik Konversi Energi -->
                                                <option data-faculty="Teknik Konversi Energi" value="D-3 Teknik Konversi Energi">D-3 Teknik Konversi Energi</option>
                                                <option data-faculty="Teknik Konversi Energi" value="D-4 Teknik Pembangkit Tenaga Listrik">D-4 Teknik Pembangkit Tenaga Listrik</option>
                                                <option data-faculty="Teknik Konversi Energi" value="D-4 Teknik Konservasi Energi">D-4 Teknik Konservasi Energi</option>

                                                <!-- Teknik Elektro -->
                                                <option data-faculty="Teknik Elektro" value="D-3 Teknik Elektronika">D-3 Teknik Elektronika</option>
                                                <option data-faculty="Teknik Elektro" value="D-3 Teknik Listrik">D-3 Teknik Listrik</option>
                                                <option data-faculty="Teknik Elektro" value="D-3 Teknik Telekomunikasi">D-3 Teknik Telekomunikasi</option>
                                                <option data-faculty="Teknik Elektro" value="D-4 Teknik Elektronika">D-4 Teknik Elektronika</option>
                                                <option data-faculty="Teknik Elektro" value="D-4 Teknik Telekomunikasi">D-4 Teknik Telekomunikasi</option>
                                                <option data-faculty="Teknik Elektro" value="D-4 Teknik Otomasi Industri">D-4 Teknik Otomasi Industri</option>

                                                <!-- Teknik Kimia -->
                                                <option data-faculty="Teknik Kimia" value="D-3 Teknik Kimia">D-3 Teknik Kimia</option>
                                                <option data-faculty="Teknik Kimia" value="D-3 Analis Kimia">D-3 Analis Kimia</option>
                                                <option data-faculty="Teknik Kimia" value="D-4 Teknik Kimia Produksi Bersih">D-4 Teknik Kimia Produksi Bersih</option>

                                                <!-- Teknik Komputer dan Informatika -->
                                                <option data-faculty="Teknik Komputer dan Informatika" value="D-3 Teknik Informatika">D-3 Teknik Informatika</option>
                                                <option data-faculty="Teknik Komputer dan Informatika" value="D-4 Teknik Informatika">D-4 Teknik Informatika</option>

                                                <!-- Akuntansi -->
                                                <option data-faculty="Akuntansi" value="D-3 Akuntansi">D-3 Akuntansi</option>
                                                <option data-faculty="Akuntansi" value="D-3 Keuangan dan Perbankan">D-3 Keuangan dan Perbankan</option>
                                                <option data-faculty="Akuntansi" value="D-4 Akutansi Manajemen Pemerintahan">D-4 Akutansi Manajemen Pemerintahan</option>
                                                <option data-faculty="Akuntansi" value="D-4 Akutansi">D-4 Akutansi</option>
                                                <option data-faculty="Akuntansi" value="D-4 Keuangan Syariah">D-4 Keuangan Syariah</option>
                                                <option data-faculty="Akuntansi" value="S-2 Keuangan dan Perbankan Syariah">D-4 Keuangan dan Perbankan Syariah</option>

                                                <!-- Administrasi Niaga -->
                                                <option data-faculty="Administrasi Niaga" value="D-3 Administrasi Bisnis">D-3 Administrasi Bisnis</option>
                                                <option data-faculty="Administrasi Niaga" value="D-3 Manajemen Pemasaran">D-3 Manajemen Pemasaran</option>
                                                <option data-faculty="Administrasi Niaga" value="D-3 Usaha Perjalanan Wisata">D-3 Usaha Perjalanan Wisata</option>
                                                <option data-faculty="Administrasi Niaga" value="D-4 Manajemen Aset">D-4 Manajemen Aset</option>
                                                <option data-faculty="Administrasi Niaga" value="D-4 Manajemen Bisnis">D-4 Manajemen Bisnis</option>
                                                <option data-faculty="Administrasi Niaga" value="D-4 Manajemen Pemasaran">D-4 Manajemen Pemasaran</option>
                                                <option data-faculty="Administrasi Niaga" value="D-4 Destinasi Pariwisata">D-4 Destinasi Pariwisata</option>

                                                <!-- Bahasa Inggris -->
                                                <option data-faculty="Bahasa Inggris" value="D-3 Bahasa Inggris">D-3 Bahasa Inggris</option>
                                            </select>

                                            <!-- Angkatan Dropdown -->
                                            <select name="carianswer" id="angkatan" class="form-control" style="margin-right: 10px; width:22%;">
                                                <option value="">Angkatan</option>
                                                <option value="2015">2015</option>
                                                <option value="2016">2016</option>
                                                <option value="2017">2017</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <!-- Tambahkan tahun sesuai kebutuhan -->
                                            </select>

                                            <select name="carianswer" id="status" class="form-control" style="margin-right: 10px; width:22%;">
                                                <option value="">Status</option>
                                                <option value="">Selesai</option>
                                                <option value="">On Going</option>
                                                <option value="">Belum Mengisi</option>
                                            </select>
                                        </div>

                                        <div class="mt-1">
                                            <button type="submit" class="btn btn-primary" style="font-size:12px; padding:5px 6px; height:25px; color: white;">Filter</button>
                                            <a href="<?= base_url('/kuesionerkuesioner') ?>" type="submit" class="btn btn-secondary" style="font-size:12px; padding:5px 6px; height:25px; color: white;">Clear</a>

                                            <?php
                                            $request = \config\Services::request();
                                            $cari = $request->getGet('carianswer');
                                            if ($cari != '') {
                                                $param = "?carianswer=" . $cari;
                                            } else {
                                                $param = "";
                                            }
                                            ?>
                                            <a href="<?= site_url('/downloadCSV') ?>?carianswer=<?= isset($_GET['carianswer']) ? $_GET['carianswer'] : '' ?>" class="btn btn-success" style="font-size:12px; padding:5px 6px; height:25px; color: white;">Download CSV</a>
                                        </div>
                                    </form>
                                </div>

                                <script>
                                    // SCRIPT SEARCH AUTO DELETE
                                    function removeEmptyInputs() {
                                        const form = document.getElementById('searchForm');
                                        const inputs = form.querySelectorAll('input, select');

                                        inputs.forEach(input => {
                                            if (!input.value) {
                                                input.removeAttribute('name');
                                            }
                                        });
                                    }

                                    // SCRIPT UNTUK FORMULIR OPTION 
                                    document.getElementById('academic_faculty').addEventListener('change', function() {
                                        const selectedFaculty = this.value;
                                        const programDropdown = document.getElementById('academic_program');

                                        // Show or hide options based on selected faculty
                                        for (let option of programDropdown.options) {
                                            option.style.display = option.getAttribute('data-faculty') === selectedFaculty || option.value === '' ? 'block' : 'none';
                                        }
                                    });
                                </script>
                                <!-- Filter END -->

                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>NIM</th>
                                                <th>Nama Lengkap</th>
                                                <th>Jurusan</th>
                                                <th>Program Studi</th>
                                                <th>Angkatan</th>
                                                <th>Dibuat Pada</th>
                                                <th>Terakhir Diupdate</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php if (!empty($alumni)) : ?>
                                                <?php $no = 1; ?>
                                                <?php foreach ($alumni as $row) : ?>
                                                    <tr>

                                                        <td><?= $no++; ?></td>
                                                        <td><?= $row['academic_nim']; ?></td>
                                                        <td><?= $row['display_name']; ?></td>
                                                        <td><?= $row['academic_faculty']; ?></td>
                                                        <td><?= $row['academic_program']; ?></td>
                                                        <td><?= $row['academic_year']; ?></td>
                                                        <td><?= $row['created_at']; ?></td>
                                                        <td><?= $row['updated_at']; ?></td>
                                                        <td>
                                                            <a href="<?= base_url('downloadCSV?carianswer=' . $row['academic_nim']) ?>" class="btn btn-info btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Unduh</a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="10" class="text-center">No data found</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>




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

            <!-- Edit Kuesioner END -->

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