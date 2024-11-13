<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimal-ui">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Admin - Kuesioner</title>
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

                <li class="menu-item">
                    <a href="<?= base_url('/pengaturan') ?>">
                        <i class="ft-file"></i>
                        <span class="menu-title">Pengaturan Situs</span>
                    </a>
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
                                    <h2>Kuesioner</h2>
                                    <div class="align-items-end">
                                        <a class="btn btn-primary kuesioner" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('tracer') ?>">
                                            Halaman Awal
                                        </a>
                                        <a class="btn btn-primary kuesioner" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('/tambahkuesioner') ?>">
                                            Tambah Halaman
                                        </a>
                                    </div>

                                </div>
                                <hr>

                                <!-- Filter START -->
                                <div>
                                    <form method="get" action="<?= base_url(relativePath: '/carikuesioner') ?>">
                                        <div class="d-flex align-items-center">
                                            <input type="text" name="cari" id="cari" class="form-control" placeholder="Cari..." style="margin-right: 10px; width:22%;">
                                            <button href="<?= base_url('/carikuesioner') ?>" type="submit" class="btn btn-primary" style="font-size:12px; padding:5px 6px; height: 36px; width: 65px; color: white;">Filter</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- Filter END -->

                                <hr>

                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">

                                        <thead>
                                            <tr>
                                                <td>NO</td>
                                                <td>Judul</td>
                                                <td>Deskripsi</td>
                                                <td>Masuk</td>
                                                <td>Aktif</td>
                                                <td>Aturan</td>
                                                <td>Aksi</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (!empty($user)) : ?>
                                                <?php $no = 1; ?>
                                                <?php foreach ($user as $row) : ?>
                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td><?= $row['title']; ?></td>
                                                        <td><?= $row['deskripsi']; ?></td>
                                                        <td>
                                                            <?= $row['entries']; ?> <br>


                                                            <a
                                                                class="btn btn-info btn-sm lihat-btn"
                                                                style='font-size:10px;padding:2px 5px;color:white;'
                                                                data-logic="<?= esc($row['conditional_logic']) ?>"
                                                                onclick="openTab(event, 'dataTabel')">Lihat
                                                            </a>
                                                        </td>
                                                        <td><?= $row['active_status']; ?></td>
                                                        <td>Show if : <?= $row['conditional_logic']; ?></td>

                                                        <td>

                                                            <a class="btn btn-primary btn-sm" class="nav-link active" onclick="openTab(event, 'SuntingKuesioner')" style='font-size:10px;padding:2px 5px;color:white;'>Edit</a>
                                                            <a class="btn btn-primary btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Active</a>
                                                            <a class="btn btn-primary btn-sm" style='font-size:10px;padding:2px 5px;color:white;' onclick="openTab(event, 'TinjauKuesioner')">Tinjau</a>
                                                            <a class="btn btn-success btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Clone</a>
                                                            <a class="btn btn-info btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Unduh</a>
                                                            <a class="btn btn-warning btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Edit Style</a>
                                                            <button data-target='#deleteModal' id='delete' data-toggle='modal' data-id="<?= $row['id']; ?>" class='btn btn-danger deleteModal' style='font-size:10px;padding:2px 5px;color:white;'>Hapus</button>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="6" class="text-center">No data found</td>
                                                </tr>
                                            <?php endif; ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        <script>
                            $(document).ready(function() {
                                $('.lihat-btn').on('click', function() {
                                    const conditionalLogic = $(this).data('logic');

                                    // Mengirim AJAX request untuk memfilter data
                                    $.ajax({
                                        url: '/c_kuesioner/filterData', // Ganti dengan URL yang sesuai
                                        method: 'GET',
                                        data: {
                                            logic: conditionalLogic
                                        },
                                        success: function(response) {
                                            // Tampilkan data yang difilter di tab "dataTabel"
                                            $('#dataTabel').html(response);
                                        },
                                        error: function() {
                                            alert('Gagal memuat data.');
                                        }
                                    });
                                });
                            });
                        </script>
                        <!-- Table Kuesioner END -->

                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content text-center">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Apakah Anda yakin ingin menghapus data <strong id="username"></strong>?</p>
                                        <form id="deleteForm" method="post" action="<?= base_url('deletekuesioner') ?>">
                                            <input type="hidden" id="delete_id" name="id">
                                            <button type="submit" class="btn btn-danger">Hapus</button>
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                            $('.deleteModal').click(function() {
                                var href = $(this).data('target');
                                var id = $(this).data('id');
                                $('#delete_id').val(id);
                            });
                        </script>

                        <!-- Modal Konfirmasi Hapus END-->

                        <!-- Sunting Kuesioner START-->
                        <div class="card tab-content" id="SuntingKuesioner" style="display:none;">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h2>Sunting Kuesioner</h2>
                                </div>
                                <hr>

                                <div class="m-2">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputTitle">Title</label>
                                            <input type="email" class="form-control" id="exampleInputTitle" placeholder="Kuesioner Sample">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputDeskripsi">Deskripsi</label>
                                            <input type="password" class="form-control" id="exampleInputDeskripsi" placeholder="Kuesioner Sample">
                                        </div>
                                        <div class="form-check d-flex">
                                            <label class="form-check-label" for="conditionallogic">Conditional Logic</label>
                                            <input type="checkbox" class="form-check-input" id="conditionallogic" onclick="toggleOptions()">
                                        </div>

                                        <br>

                                        <div class="form-row m-0" id="conditionalOptions" style="width: 22%; display: none;" id="conditionalOptionsContainer">
                                            <div class="mr-1 d-flex" id="optionContainer" class="">
                                                <select class="custom-select" id="mainOption" onchange="toggleSubOptions()">
                                                    <option selected> </option>
                                                    <option value="display_name">display_name</option>
                                                    <option value="email">email</option>
                                                    <option value="group">group</option>
                                                    <option value="academic_nim">academic_nim</option>
                                                    <option value="academic_faculty">academic_faculty</option>
                                                    <option value="academic_program">academic_program</option>
                                                    <option value="academic_year">academic_year</option>
                                                    <option value="street">street</option>
                                                    <option value="city">city</option>
                                                    <option value="state_code">state_code</option>
                                                    <option value="zip_code">zip_code</option>
                                                    <option value="academic_graduate_year">academic_graduate_year</option>
                                                    <option value="jenis_kelamin">jenis_kelamin</option>
                                                    <option value="no_telp">no_telp</option>
                                                    <option value="nik">nik</option>
                                                    <option value="npwp">npwp</option>
                                                </select>

                                                <select name="" id="" class="custom-select ml-1">
                                                    <option value="is">is</option>
                                                    <option value="is not">is not</option>
                                                </select>
                                            </div>

                                            <!-- SUB-OPTION -->
                                            <div class="mr-1 mt-1" id="displayNameField" style="width: 94%; display: none;">
                                                <input type="text" class="form-control" id="displayNameInput" placeholder="enter display_name">
                                            </div>

                                            <div class="mr-1 mt-1" id="emailField" style="width: 94%; display: none;">
                                                <input type="email" class="form-control" id="emailInput" placeholder="enter email">
                                            </div>

                                            <div class="mr-1 mt-1" id="groupField" style="width: 94%; display: none;">
                                                <select name="group" id="groupField" class="custom-select">
                                                    <option value=""></option>
                                                    <option value="administrator">administrator</option>
                                                    <option value="alumni">alumni</option>
                                                    <option value="perusahaan">perusahaan</option>
                                                    <option value="atasan">atasan</option>
                                                </select>
                                            </div>

                                            <div class="mr-1 mt-1" id="academicNimField" style="width: 94%; display: none;">
                                                <input type="text" class="form-control" id="academicNimField" placeholder="enter academic_nim">
                                            </div>

                                            <div class="mr-1 mt-1" id="academicFacultyField" style="width: 94%; display: none;">
                                                <select name="academic_faculty" id="academicFacultyField" class="custom-select">
                                                    <option value=""></option>
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
                                            </div>

                                            <div class="mr-1 mt-1" id="academicProgramField" style="width: 94%; display: none;">
                                                <select name="academic_program" id="academicProgramField" class="custom-select">
                                                    <option value=""> </option>
                                                    <!-- Teknik Sipil -->
                                                    <option value="D-3 Teknik Konstruksi Sipil">D-3 Teknik Konstruksi Sipil</option>
                                                    <option value="D-3 Teknik Konstruksi Gedung">D-3 Teknik Konstruksi Gedung</option>
                                                    <option value="D-4 Teknik Perancangan Jalan dan Jembatan">D-4 Teknik Perancangan Jalan dan Jembatan</option>
                                                    <option value="D-4 Teknik Perawatan dan Perbaikan Gedung">D-4 Teknik Perawatan dan Perbaikan Gedung</option>
                                                    <option value="S-2 Rekayasa Infrastruktur">S-2 Rekayasa Infrastruktur</option>

                                                    <!-- Teknik Mesin -->
                                                    <option value="D-3 Teknik Mesin">D-3 Teknik Mesin</option>
                                                    <option value="D-3 Teknik Aeronautika">D-3 Teknik Aeronautika</option>
                                                    <option value="D-4 Teknik Perancangan dan Konstruksi Mesin">D-4 Teknik Perancangan dan Konstruksi Mesin</option>
                                                    <option value="D-4 Proses Manufaktur">D-4 Proses Manufaktur</option>

                                                    <!-- Teknik Refrigasi dan Tata Udara -->
                                                    <option value="D-3 Teknik Pendingin dan Tata Udara">D-3 Teknik Pendingin dan Tata Udara</option>
                                                    <option value="D-4 Teknik Pendingin dan Tata Udara">D-4 Teknik Pendingin dan Tata Udara</option>

                                                    <!-- Teknik Konversi Energi -->
                                                    <option value="D-3 Teknik Konversi Energi">D-3 Teknik Konversi Energi</option>
                                                    <option value="D-4 Teknik Pembangkit Tenaga Listrik">D-4 Teknik Pembangkit Tenaga Listrik</option>
                                                    <option value="D-4 Teknik Konservasi Energi">D-4 Teknik Konservasi Energi</option>

                                                    <!-- Teknik Elektro -->
                                                    <option value="D-3 Teknik Elektronika">D-3 Teknik Elektronika</option>
                                                    <option value="D-3 Teknik Listrik">D-3 Teknik Listrik</option>
                                                    <option value="D-3 Teknik Telekomunikasi">D-3 Teknik Telekomunikasi</option>
                                                    <option value="D-4 Teknik Elektronika">D-4 Teknik Elektronika</option>
                                                    <option value="D-4 Teknik Telekomunikasi">D-4 Teknik Telekomunikasi</option>
                                                    <option value="D-4 Teknik Otomasi Industri">D-4 Teknik Otomasi Industri</option>

                                                    <!-- Teknik Kimia -->
                                                    <option value="D-3 Teknik Kimia">D-3 Teknik Kimia</option>
                                                    <option value="D-3 Analis Kimia">D-3 Analis Kimia</option>
                                                    <option value="D-4 Teknik Kimia Produksi Bersih">D-4 Teknik Kimia Produksi Bersih</option>

                                                    <!-- Teknik Komputer dan Informatika -->
                                                    <option value="D-3 Teknik Informatika">D-3 Teknik Informatika</option>
                                                    <option value="D-4 Teknik Informatika">D-4 Teknik Informatika</option>

                                                    <!-- Akuntansi -->
                                                    <option value="D-3 Akuntansi">D-3 Akuntansi</option>
                                                    <option value="D-3 Keuangan dan Perbankan">D-3 Keuangan dan Perbankan</option>
                                                    <option value="D-4 Akutansi Manajemen Pemerintahan">D-4 Akutansi Manajemen Pemerintahan</option>
                                                    <option value="D-4 Akutansi">D-4 Akutansi</option>
                                                    <option value="D-4 Keuangan Syariah">D-4 Keuangan Syariah</option>
                                                    <option value="S-2 Keuangan dan Perbankan Syariah">D-4 Keuangan dan Perbankan Syariah</option>

                                                    <!-- Administrasi Niaga -->
                                                    <option value="D-3 Administrasi Bisnis">D-3 Administrasi Bisnis</option>
                                                    <option value="D-3 Manajemen Pemasaran">D-3 Manajemen Pemasaran</option>
                                                    <option value="D-3 Usaha Perjalanan Wisata">D-3 Usaha Perjalanan Wisata</option>
                                                    <option value="D-4 Manajemen Aset">D-4 Manajemen Aset</option>
                                                    <option value="D-4 Manajemen Bisnis">D-4 Manajemen Bisnis</option>
                                                    <option value="D-4 Manajemen Pemasaran">D-4 Manajemen Pemasaran</option>
                                                    <option value="D-4 Destinasi Pariwisata">D-4 Destinasi Pariwisata</option>

                                                    <!-- Bahasa Inggris -->
                                                    <option value="D-3 Bahasa Inggris">D-3 Bahasa Inggris</option>
                                                </select>
                                            </div>

                                            <div class="mr-1 mt-1" id="academicYearField" style="width: 94%; display: none;">
                                                <select name="academic_year" id="academicYearField" class="custom-select">
                                                    <option value=""></option>
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
                                            </div>

                                            <div class="mr-1 mt-1" id="streetField" style="width: 94%; display: none;">
                                                <input type="text" class="form-control" id="streetField" placeholder="enter street">
                                            </div>

                                            <div class="mr-1 mt-1" id="cityField" style="width: 94%; display: none;">
                                                <input type="text" class="form-control" id="cityField" placeholder="enter city">
                                            </div>

                                            <div class="mr-1 mt-1" id="stateCodeField" style="width: 94%; display: none;">
                                                <input type="text" class="form-control" id="stateCodeField" placeholder="enter state_code">
                                            </div>

                                            <div class="mr-1 mt-1" id="zipCodeField" style="width: 94%; display: none;">
                                                <input type="text" class="form-control" id="zipCodeField" placeholder="enter zip_code">
                                            </div>

                                            <div class="mr-1 mt-1" id="academicGraduateYearField" style="width: 94%; display: none;">
                                                <select name="academic_graduate_year" id="academicGraduateYearField" class="custom-select">
                                                    <option value=""></option>
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
                                            </div>

                                            <div class="mr-1 mt-1" id="academicGraduateYearField" style="width: 94%; display: none;">
                                                <select name="academic_graduate_year" id="academicGraduateYearField" class="custom-select">
                                                    <option value=""></option>
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
                                            </div>

                                            <div class="mr-1 mt-1" id="jenisKelaminField" style="width: 94%; display: none;">
                                                <select name="jenis_kelamin" id="jenisKelaminField" class="custom-select">
                                                    <option value=""></option>
                                                    <option value="wanita">wanita</option>
                                                    <option value="pria">pria</option>
                                                    <!-- Tambahkan tahun sesuai kebutuhan -->
                                                </select>
                                            </div>

                                            <div class="mr-1 mt-1" id="noTelpField" style="width: 94%; display: none;">
                                                <input type="text" class="form-control" id="noTelpField" placeholder="enter no_telp">
                                            </div>

                                            <div class="mr-1 mt-1" id="nikField" style="width: 94%; display: none;">
                                                <input type="text" class="form-control" id="nikField" placeholder="enter nik">
                                            </div>

                                            <div class="mr-1 mt-1" id="npwpField" style="width: 94%; display: none;">
                                                <input type="text" class="form-control" id="npwpField" placeholder="enter npwp">
                                            </div>

                                            <!-- Tambahkan div lain untuk sub-opsi spesifik lainnya sesuai kebutuhan -->

                                            <button type="button" class="btn btn-primary mt-2" onclick="addConditionalOption()">Add</button>

                                        </div>

                                        <script>
                                            function toggleOptions() {
                                                var checkbox = document.getElementById("conditionallogic");
                                                var options = document.getElementById("conditionalOptions");
                                                options.style.display = checkbox.checked ? "block" : "none";
                                            }

                                            function toggleSubOptions() {
                                                var mainOption = document.getElementById("mainOption").value;

                                                // Sembunyikan semua sub-opsi terlebih dahulu
                                                document.getElementById("displayNameField").style.display = "none";
                                                document.getElementById("emailField").style.display = "none";
                                                document.getElementById("groupField").style.display = "none";
                                                document.getElementById("academicNimField").style.display = "none";
                                                document.getElementById("academicFacultyField").style.display = "none";
                                                document.getElementById("academicProgramField").style.display = "none";
                                                document.getElementById("academicYearField").style.display = "none";
                                                document.getElementById("streetField").style.display = "none";
                                                document.getElementById("cityField").style.display = "none";
                                                document.getElementById("stateCodeField").style.display = "none";
                                                document.getElementById("zipCodeField").style.display = "none";
                                                document.getElementById("academicGraduateYearField").style.display = "none";
                                                document.getElementById("jenisKelaminField").style.display = "none";
                                                document.getElementById("noTelpField").style.display = "none";
                                                document.getElementById("nikField").style.display = "none";
                                                document.getElementById("npwpField").style.display = "none";
                                                // Tambahkan ID div lain yang ingin disembunyikan di sini

                                                // Tampilkan sub-opsi sesuai nilai yang dipilih di mainOption
                                                if (mainOption === "display_name") {
                                                    document.getElementById("displayNameField").style.display = "block";
                                                } else if (mainOption === "email") {
                                                    document.getElementById("emailField").style.display = "block";
                                                } else if (mainOption === "group") {
                                                    document.getElementById("groupField").style.display = "block";
                                                } else if (mainOption === "academic_nim") {
                                                    document.getElementById("academicNimField").style.display = "block";
                                                } else if (mainOption === "academic_faculty") {
                                                    document.getElementById("academicFacultyField").style.display = "block";
                                                } else if (mainOption === "academic_program") {
                                                    document.getElementById("academicProgramField").style.display = "block";
                                                } else if (mainOption === "academic_year") {
                                                    document.getElementById("academicYearField").style.display = "block";
                                                } else if (mainOption === "street") {
                                                    document.getElementById("streetField").style.display = "block";
                                                } else if (mainOption === "city") {
                                                    document.getElementById("cityField").style.display = "block";
                                                } else if (mainOption === "state_code") {
                                                    document.getElementById("stateCodeField").style.display = "block";
                                                } else if (mainOption === "zip_code") {
                                                    document.getElementById("zipCodeField").style.display = "block";
                                                } else if (mainOption === "academic_graduate_year") {
                                                    document.getElementById("academicGraduateYearField").style.display = "block";
                                                } else if (mainOption === "jenis_kelamin") {
                                                    document.getElementById("jenisKelaminField").style.display = "block";
                                                } else if (mainOption === "no_telp") {
                                                    document.getElementById("noTelpField").style.display = "block";
                                                } else if (mainOption === "nik") {
                                                    document.getElementById("nikField").style.display = "block";
                                                } else if (mainOption === "npwp") {
                                                    document.getElementById("npwpField").style.display = "block";
                                                }
                                                // Tambahkan kondisi lainnya sesuai kebutuhan
                                            }
                                        </script>

                                        <hr>

                                        <div class="mt-1">
                                            <a class="btn btn-info" style="font-size:14px;padding:8px 10px;color:white;" href="<?= base_url('/kuesionerkuesioner') ?>">Simpan</a>
                                            <a class="btn btn-danger" style="font-size:14px;padding:8px 10px;color:white;" href="<?= base_url('/kuesionerkuesioner') ?>">Batal</a>
                                        </div>

                                        <hr>
                                    </form>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered text-center ">
                                        <thead>
                                            <tr>
                                                <td>ID Halaman</td>
                                                <td>Nama Halaman</td>
                                                <td>Deskripsi</td>
                                                <td>Conditional Logic</td>
                                                <td>Num of Section</td>
                                                <td>Aksi</td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>Halaman 1</td>
                                                <td>Halaman ini berisi pertanyaan tentang data diri dan pekerjaan Anda. Mohon untuk mengisi semua data yang diminta. Terima kasih.</td>
                                                <td>show if any
                                                    Page 43 Section 30 Question 3: is wirausaha
                                                    Page 43 Section 30 Question 3: is bekerja dan wiraswasta
                                                    Page 43 Section 30 Question 3: is bekerja</td>
                                                <td>Show if : academic_program is 'Sains dan Teknologi Farmasi Internasional'</td>
                                                <td class="">
                                                    <a class="btn btn-secondary btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Up</a>
                                                    <a class="btn btn-secondary btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Down</a>
                                                    <a class="btn btn-info btn-sm" style='font-size:10px;padding:2px 5px;color:white;' onclick="openTab(event, 'SuntingEditKuesioner')">Edit</a>
                                                    <a class="btn btn-danger btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Hapus</a>
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Sunting Kuesioner END-->


                        <!-- Tinjau Kuesioner START -->
                        <div class="card tab-content" id="TinjauKuesioner" style="display:none;">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h2>Detil Kuesioner</h2>
                                </div>
                                <hr>

                                <div class="m-2">
                                    <form>
                                        <div>
                                            <select class="page_options" name="index_page">
                                                <option value="0" selected="">ID : 43 - Halaman 1</option>
                                                <option value="1">ID : 44 - Halaman 2</option>
                                                <option value="2">ID : 45 - Halaman 3</option>
                                                <option value="3">ID : 46 - Halaman 4</option>
                                                <option value="4">ID : 47 - Halaman 5</option>
                                                <option value="5">ID : 65 - Halaman 2</option>
                                                <option value="6">ID : 66 - Halaman 3</option>
                                                <option value="7">ID : 71 - Halaman 4</option>
                                                <option value="8">ID : 72 - Halaman 5</option>
                                                <option value="9">ID : 68 - Halaman Kuesioner Program Studi Teknik Kimia</option>
                                                <option value="10">ID : 69 - Halaman Kuesioner Program Studi SBM</option>
                                                <option value="11">ID : 70 - Pilihan Hadiah</option>
                                                <option value="12">ID : 67 - Prodi SBM</option>
                                            </select>
                                            <input type="submit" value="Go">

                                            <p class="mt-1">
                                                Halaman ini berisi pertanyaan tentang data diri dan pekerjaan Anda. Mohon untuk mengisi semua data yang diminta. Terima kasih.
                                            </p>
                                        </div>
                                    </form>
                                    <hr>
                                    <div>
                                        <p class="h4"><b>Data Pribadi</b></p>
                                        <p>Bagian ini berisi pertanyaan tentang data pribadi responden.</p>
                                        <div class="section_content" id="sc_29">
                                            <div class="section_body" id="sb_29">
                                                <di class="question_content" id="29_25">
                                                    <div class="alert alert-primary" role="alert">
                                                        <label class="field_title">
                                                            <b>
                                                                <span class="question">
                                                                    1. Nama </span>
                                                            </b>
                                                        </label>
                                                    </div>

                                                    <div class="input ml-1 mb-3">
                                                        <div class="question_readonly_attribs">
                                                            DEDE CHANDRA NUGRAHA <input type="hidden" class="question_readonly answer" value="DEDE CHANDRA NUGRAHA" id="43_29_25">
                                                        </div>
                                                    </div>
                                            </div>

                                            <div class="question_content" id="29_3">
                                                <div class="alert alert-primary" role="alert">
                                                    <label class="field_title">
                                                        <b>
                                                            <span class="question">
                                                                2. Jenis Kelamin </span>
                                                        </b>
                                                        <span style="color: red;">*</span>
                                                    </label>
                                                </div>

                                                <div class="input ml-1 mb-3">
                                                    <div class="question_radios" id="43_29_3">
                                                        <input type="radio" class="question_radio checks" id="question_radio_3_0" name="question_radio_29_3" value="Pria"> Pria <br>
                                                        <input type="radio" class="question_radio checks" id="question_radio_3_1" name="question_radio_29_3" value="Wanita"> Wanita <br>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="question_content" id="29_26">
                                                <div class="alert alert-primary" role="alert">
                                                    <label class="field_title">
                                                        <b>
                                                            <span class="question">
                                                                3. Angkatan </span>
                                                        </b>
                                                        <span style="color: red;">*</span>
                                                    </label>
                                                </div>

                                                <div class="input ml-1 mb-3">
                                                    <div class="question_readonly_attribs">
                                                        2016 <input type="hidden" class="question_readonly answer" value="2016" id="43_29_26">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="question_content" id="29_27">
                                                <div div class="alert alert-primary" role="alert">
                                                    <label class="field_title">
                                                        <b>
                                                            <span class="question">
                                                                4. Program Studi </span>
                                                        </b>
                                                        <span style="color: red;">*</span>
                                                    </label>
                                                </div>

                                                <div class="input ml-1 mb-3">
                                                    <div class="question_readonly_attribs">
                                                        DIV - Teknik Informatika <input type="hidden" class="question_readonly answer" value="DIV - Teknik Informatika" id="43_29_27">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="question_content" id="29_29">
                                                <div class="alert alert-primary" role="alert">
                                                    <label class="field_title">
                                                        <b>
                                                            <span class="question">
                                                                5. IPK </span>
                                                        </b>
                                                        <span style="color: red;">*</span>
                                                    </label>
                                                    </di>
                                                </div>

                                                <div class="input ml-1 mb-3">
                                                    <div class="question_readonly_attribs">
                                                        3,57 <input type="hidden" class="question_readonly answer" value="3,57" id="43_29_29">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="question_content" id="29_19">
                                                <div class="alert alert-primary" role="alert">
                                                    <label class="field_title">
                                                        <b>
                                                            <span class="question">
                                                                6. Bulan dan Tahun Lulus </span>
                                                        </b>
                                                        <span style="color: red;">*</span>
                                                    </label>
                                                </div>

                                                <div class="input ml-1 mb-3">
                                                    <div class="question_date_attribs">
                                                        <input type="hidden" class="answer_required" value="false">
                                                        <input type="hidden" class="date_start_year" name="date_start_year" value="2006">
                                                        <input type="hidden" class="date_end_year" name="date_end_year" value="2006">
                                                        <input type="hidden" class="date_option" name="date_option" value="two">
                                                        <input type="text" class="question_date answer" id="43_29_19">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="question_content" id="29_21">
                                                <div class="alert alert-primary" role="alert">
                                                    <label class="field_title">
                                                        <b>
                                                            <span class="question">
                                                                7. Alamat </span>
                                                        </b>
                                                        <span style="color: red;">*</span>
                                                    </label>

                                                </div>
                                                <div class="input ml-1 mb-3">
                                                    <input type="text" class="question_single answer" id="43_29_21">
                                                </div>
                                            </div>

                                            <div class="question_content" id="29_22">
                                                <div class="alert alert-primary" role="alert">
                                                    <label class="field_title">
                                                        <b>
                                                            <span class="question">
                                                                8. Kota </span>
                                                        </b>
                                                        <span style="color: red;">*</span>
                                                    </label>
                                                </div>


                                                <div class="input ml-1 mb-3">
                                                    <input type="text" class="question_single answer" id="43_29_22">
                                                </div>
                                            </div>

                                            <div class="question_content" id="29_24">
                                                <div class="alert alert-primary" role="alert">
                                                    <label class="field_title">
                                                        <b>
                                                            <span class="question">
                                                                9. Kode Pos </span>
                                                        </b>
                                                    </label>
                                                </div>

                                                <div class="input ml-1 mb-3">
                                                    <input type="text" class="question_single answer" id="43_29_24">
                                                </div>
                                            </div>

                                            <div class="question_content" id="29_23">
                                                <div class="alert alert-primary" role="alert">
                                                    <label class="field_title">
                                                        <b>
                                                            <span class="question">
                                                                10. Provinsi </span>
                                                        </b>
                                                        <span style="color: red;">*</span>
                                                    </label>
                                                </div>

                                                <div class="input ml-1 mb-3">
                                                    <select class="question_dropdown selects" id="43_29_23">
                                                        <option value="">----</option>
                                                        <option value="-Non Indonesian-">-Non Indonesian-</option>
                                                        <option value="Aceh">Aceh</option>
                                                        <option value="Bali">Bali</option>
                                                        <option value="Banten">Banten</option>
                                                        <option value="Bengkulu">Bengkulu</option>
                                                        <option value="Gorontalo">Gorontalo</option>
                                                        <option value="Jakarta">DKI Jakarta</option>
                                                        <option value="Jambi">Jambi</option>
                                                        <option value="Jawa Barat">Jawa Barat</option>
                                                        <option value="Jawa Tengah">Jawa Tengah</option>
                                                        <option value="Jawa Timur">Jawa Timur</option>
                                                        <option value="Kalimantan Barat">Kalimantan Barat</option>
                                                        <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                                        <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                                        <option value="Kalimantan Timur">Kalimantan Timur</option>
                                                        <option value="Kalimantan Utara">Kalimantan Utara</option>
                                                        <option value="Kep. Bangka Belitung">Kep. Bangka Belitung</option>
                                                        <option value="Kep. Riau">Kep. Riau</option>
                                                        <option value="Lampung">Lampung</option>
                                                        <option value="Maluku">Maluku</option>
                                                        <option value="Maluku Utara">Maluku Utara</option>
                                                        <option value="NTB">Nusa Tenggara Barat</option>
                                                        <option value="NTT">Nusa Tenggara Timur</option>
                                                        <option value="Papua">Papua</option>
                                                        <option value="Papua Barat">Papua Barat</option>
                                                        <option value="Riau">Riau</option>
                                                        <option value="Sulawesi Barat">Sulawesi Barat</option>
                                                        <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                                        <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                                        <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                                        <option value="Sulawesi Utara">Sulawesi Utara</option>
                                                        <option value="Sumatera Barat">Sumatera Barat</option>
                                                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                                                        <option value="Sumatera Utara">Sumatera Utara</option>
                                                        <option value="Yogyakarta">Yogyakarta</option>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="question_content" id="29_31">
                                                <div class="alert alert-primary" role="alert">
                                                    <label class="field_title">
                                                        <b>
                                                            <span class="question">
                                                                11. Telepon / HP (misal : 022-2034944/08153337777) </span>
                                                        </b>

                                                        <span style="color: red;">*</span>
                                                    </label>
                                                </div>

                                                <div class="input ml-1 mb-3">
                                                    <input type="text" class="question_single answer" id="43_29_31">
                                                </div>
                                            </div>

                                            <hr>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tinjau Kuesioner END -->

                <!-- Sunting Kuesioner Page START-->
                <div class="card tab-content" id="SuntingEditKuesioner" style="display:none;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2>Sunting Kuesioner Page</h2>
                        </div>
                        <hr>

                        <div class="m-2">
                            <form>
                                <div class="form-group">
                                    <label for="exampleInputTitle">Title</label>
                                    <input type="email" class="form-control" id="exampleInputTitle" placeholder="Halaman 1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputDeskripsi">Deskripsi</label>
                                    <input type="password" class="form-control" id="exampleInputDeskripsi" placeholder="Halaman ini berisi pertanyaan tentang data diri dan pekerjaan Anda. Mohon untuk mengisi semua data yang diminta. Terima kasih.">
                                </div>
                                <div class="form-check d-flex">
                                    <label class="form-check-label" for="exampleCheck1">Conditional Logic</label>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                </div>

                                <br>
                                <div>
                                    <a class="btn btn-info" style="font-size:14px;padding:8px 10px;color:white;" href="<?= base_url('/kuesioner') ?>">Simpan</a>
                                    <a class="btn btn-danger" style="font-size:14px;padding:8px 10px;color:white;" href="<?= base_url('/kuesioner') ?>">Batal</a>
                                </div>
                            </form>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered text-center ">
                                <thead>
                                    <tr>
                                        <td>ID Section</td>
                                        <td>Nama Section</td>
                                        <td>Deskripsi</td>
                                        <td>Conditional Logic</td>
                                        <td>Num of Section</td>
                                        <td>Aksi</td>
                                    </tr>
                                    <tr>
                                        <td>29</td>
                                        <td>Data Pribadi</td>
                                        <td>Bagian ini berisi pertanyaan tentang data pribadi responden.</td>
                                        <td>none</td>
                                        <td>11</td>
                                        <td class="">
                                            <a class="btn btn-secondary btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Up</a>
                                            <a class="btn btn-secondary btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Down</a>
                                            <a class="btn btn-info btn-sm" style='font-size:10px;padding:2px 5px;color:white;' onclick="openTab(event, 'SuntingKuesionerSection')">Edit</a>
                                            <a class="btn btn-danger btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Hapus</a>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Sunting Kuesioner END-->

                <!-- Sunting Kuesioner Section START -->
                <div class="card tab-content" id="SuntingKuesionerSection" style="display: none;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h2>Sunting Kuesioner Section</h2>
                        </div>
                        <hr>

                        <div class="m-2">
                            <form>
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputTitle">Title</label>
                                        <input type="email" class="form-control" id="exampleInputTitle" placeholder="Data Pribadi">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputDeskripsi">Deskripsi</label>
                                        <input type="password" class="form-control" id="exampleInputDeskripsi" placeholder="Bagian ini berisi pertanyaan tentang data pribadi responden.">
                                    </div>
                                    <div class="form-check d-flex">
                                        <label class="form-check-label" for="exampleCheck1">Show Section Title</label>
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    </div>
                                    <div class="form-check d-flex mt-1">
                                        <label class="form-check-label" for="exampleCheck1">Show Section Description</label>
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    </div>
                                    <div class="form-check d-flex mt-1">
                                        <label class="form-check-label" for="exampleCheck1">Conditional Logic</label>
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    </div>

                                    <br>
                                    <div>
                                        <a class="btn btn-info" style="font-size:14px;padding:8px 10px;color:white;" href="<?= base_url('/kuesioner') ?>">Simpan</a>
                                        <a class="btn btn-danger" style="font-size:14px;padding:8px 10px;color:white;" href="<?= base_url('/kuesioner') ?>">Batal</a>
                                    </div>
                                </form>

                                <!-- ISI DISINI -->
                                <div>

                                </div>
                        </div>
                    </div>
                </div>
                <!-- Sunting Kuesioner Section END -->
            </div>
        </div>

        <!-- JS -->
        <!-- OPEN TAB -->
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
                var tablinks = document.getElementsByClassName("kuesioner");
                for (var i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", ""); // Hilangkan kelas active dari semua tab
                }

                // Tambahkan kelas active pada tombol yang ditekan
                evt.currentTarget.className += " active";
            }
        </script>
        <!-- OPEN TAB END -->


        <!-- JS -->

        <!-- END: Content-->



        <!-- BEGIN: Content-->

        <!-- CRUD START-->
        <div class="row ml-2 mr-2">
            <div class="col-lg-12 col-md-12 ">

                <!-- Table Kuesioner START-->
                <div class="card tab-content" id="dataTabel" style="display:none;">
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
                                    <a class="btn btn-secondary" style="font-size:12px; padding:5px 6px; height:25px; color: white;" onclick="openTab(event, 'dataTabel')">Clear</a>

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
                            <table class="table table-bordered text-center" id="dataTabel">
                                <thead>
                                    <tr>
                                        <th>No</th> <!-- Kolom nomor urut -->
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
                                    <!-- Data akan dimuat di sini melalui AJAX -->
                                </tbody>
                            </table>

                            <script>
                                function loadTableData() {
                                    $.ajax({
                                        url: "<?= site_url('/kuesionerkuesioner') ?>", // Ganti dengan URL endpoint yang sesuai
                                        method: "GET",
                                        dataType: "json",
                                        success: function(data) {

                                            console.log("Data yang diterima:", data);
                                            $('#dataTabel tbody').empty(); // Mengosongkan tbody sebelum memuat data baru

                                            if (data.length === 0) {
                                                alert("Tidak ada data yang tersedia.");
                                            } else {
                                                let no = 1;

                                                $.each(data, function(index, row) {
                                                    $('#dataTabel tbody').append(`
                                <tr>
                                    <td>${no}</td>
                                    <td>${row.academic_nim}</td>
                                    <td>${row.display_name}</td>
                                    <td>${row.academic_faculty}</td>
                                    <td>${row.program_name}</td>
                                    <td>${row.academic_year}</td>
                                    <td>${row.created_on}</td>
                                    <td>${row.updated_on}</td>
                                </tr>
                            `);
                                                    no++;
                                                });
                                            }
                                        },
                                        error: function(xhr, status, error) {
                                            console.error("Error loading data:", error);
                                        }
                                    });
                                }

                                // Fungsi untuk memuat data saat halaman pertama kali dimuat
                                loadTableData();

                                // Refresh data setiap 10 detik (opsional)
                                setInterval(loadTableData, 10000);
                            </script>


                        </div>
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
                var tablinks = document.getElementsByClassName("kuesioner");
                for (var i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", ""); // Hilangkan kelas active dari semua tab
                }

                // Tambahkan kelas active pada tombol yang ditekan
                evt.currentTarget.className += " active";
            }
        </script>
    </div>
    </div>
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