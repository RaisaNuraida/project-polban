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
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->
    <style>
        .ui-datepicker-month,
        .ui-datepicker-year {
            min-width: 0em;
        }


        .field_buttons_edit {
            font-family: inherit;
            font-size: 10pt;
            float: right;
            position: relative;
            margin: 5px;
        }

        .field_buttons_view {
            font-family: inherit;
            font-size: 10pt;
            float: right;
            position: relative;
            margin-top: 0px;
        }

        .field_header {
            /*border: solid 1px red;*/
            margin: 0px;
            background-color: #DFEFFF;
            height: 30px;
            cursor: move;
        }

        .field_container {
            /*border: solid 1px red;*/
            margin: 0px;
            background-color: white;
            padding-left: 5px;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        .done_quest,
        .delete_quest,
        .edit_quest,
        .done_quest_dd,
        .edit_quest_dd,
        .delete_quest_dd,
        .done_quest_cb,
        .edit_quest_cb,
        .delete_quest_cb,
        .done_quest_rb,
        .edit_quest_rb,
        .delete_quest_rb,
        .done_quest_sc,
        .edit_quest_sc,
        .delete_quest_sc,
        .done_quest_gr,
        .edit_quest_gr,
        .delete_quest_gr,
        .done_quest_em,
        .edit_quest_em,
        .delete_quest_em,
        .done_quest_no,
        .edit_quest_no,
        .delete_quest_no,
        .done_quest_ph,
        .edit_quest_ph,
        .delete_quest_ph,
        .done_quest_dt,
        .edit_quest_dt,
        .delete_quest_dt,
        .done_quest_ad,
        .edit_quest_ad,
        .delete_quest_ad,
        .done_quest_ro,
        .edit_quest_ro,
        .delete_quest_ro,
        .done_quest_hd,
        .edit_quest_hd,
        .delete_quest_hd {
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;
            border-color: #533232;
            border: 1px solid;
            background-color: white;
            margin-left: 5px;
            padding: 2px;
        }

        #floating_question_selector {
            width: 260px;
            height: 220px;
            /*border:1px solid scrollbar;*/
            /*float: right;*/
            position: fixed;
            margin-left: 10px;
            /*bottom: 20px;*/
            top: 150px;
            right: 60px;
            z-index: 1;
            /*background-color: powderblue;*/
            border-radius: 10px;
        }

        #floating_label {
            background-color: powderblue;
            font-weight: bold;
            padding: 10px;
        }

        #questions_button {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            /* Dua kolom, ukuran kolom fleksibel */
            gap: 5px;
            /* Ruang antara tombol */
        }

        #questions_button .quest_butt {
            padding: 5px 10px;
            /* Ukuran tombol kecil */
            font-size: 0.75em;
            /* Ukuran font lebih kecil */
            border-radius: 4px;
            /* Sudut tombol yang membulat */
            background-color: #007bff;
            /* Warna latar belakang tombol */
            color: white;
            /* Warna teks tombol */
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            /* Bayangan melayang */
            transition: transform 0.2s, box-shadow 0.2s;
            /* Transisi halus */
            max-width: 120px;
            /* Lebar maksimum tombol */
            width: 100%;
            /* Mengisi lebar penuh hingga max-width */
            margin: 0;
        }

        #questions_panel h2 {
            font-size: 1.2em;
            /* Adjust this value to make the heading smaller */
        }

        #sortable {
            list-style-type: none;
            /* Remove bullet points from list */
            padding: 0;
        }

        #sortable li {
            font-size: 0.8em;
            /* Adjust this value for list items */
            margin-bottom: 10px;
            /* Spacing between questions */
        }

        .single_edit_state,
        .dropdown_edit_state,
        .checkbox_edit_state,
        .radio_edit_state,
        .scale_edit_state,
        .grid_edit_state,
        .email_edit_state,
        .number_edit_state,
        .phone_edit_state,
        .date_edit_state,
        .address_edit_state,
        .readonly_edit_state,
        .hidden_view_state {
            display: none;
        }

        .done_quest,
        .done_quest_dd,
        .done_quest_cb,
        .done_quest_rb,
        .done_quest_sc,
        .done_quest_gr,
        .done_quest_em,
        .done_quest_no,
        .done_quest_ph,
        .done_quest_dt,
        .done_quest_ad,
        .done_quest_ro,
        .edit_quest_hd {
            display: none;
        }

        .CL_panel_field {
            display: none;
        }
    </style>
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
                                <div class="arrow_box_right"> <a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="assets/images/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-500 ml-1 text-capitalize"><?= session()->get('username') ?></span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url('halamaneditprofile') ?>"><i class="ft-user"></i> Edit Profile</a><a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a>
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
                        <span class="menu-title">Welcome Page</span>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="<?= base_url('/organisasi') ?>">
                        <i class="ft-edit"></i>
                        <span class="menu-title">Organisasi</span>
                    </a>
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

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row"></div>
            <div class="content-body">

                <!-- CRUD START-->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">

                            <!-- Table Data User START-->
                            <div class="mr-2 ml-2">
                                <div class="container mt-2 tab-content">
                            
                            <div class="d-flex justify-content-between">
                                <h2>Sunting Kuesioner</h2>
                            </div>
                            <hr>

                            <div class="m-2">
                                        <form action="<?= base_url('/editkuesionerkuesioner') ?>" method="post">
                                            <div class="form-group">
                                                <label for="title">Title</label>
                                                <input type="text" class="form-control" id="title" name="title"
                                                    placeholder="Kuesioner Sample">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputDeskripsi">Deskripsi</label>
                                                <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                                    placeholder="Kuesioner Sample">
                                            </div>
                                            <div class="form-check d-flex">
                                                <label class="form-check-label" for="conditional_logic">Conditional
                                                    Logic</label>
                                                <input type="checkbox" class="form-check-input" id="conditional_logic"
                                                    name="conditional_logic" onclick="toggleOptions()">
                                            </div>

                                            <br>

                                            <div class="form-row m-0" id="conditionalOptions"
                                                style="width: 22%; display: none;" id="conditional_logic">
                                                <div class="mr-1 d-flex" id="optionContainer" class="">
                                                    <select class="custom-select" id="mainOption" name="mainOption"
                                                        onchange="toggleSubOptions()">
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
                                                        <option value="academic_graduate_year">academic_graduate_year
                                                        </option>
                                                        <option value="jenis_kelamin">jenis_kelamin</option>
                                                        <option value="no_telp">no_telp</option>
                                                        <option value="nik">nik</option>
                                                        <option value="npwp">npwp</option>
                                                    </select>
                                               

                                                    <select id="conditionalOperator" class="custom-select ml-1" name="conditionalOperator">
                                                        <option value="is">is</option>
                                                        <option value="is not">is not</option>
                                                    </select>
                                                    </div>

                                                <div class="mr-1 mt-1" id="displayNameField"
                                                    style="width: 94%; display: none;" id="conditional_logic">
                                                    <input type="text" class="form-control" id="displayNameInput"
                                                        placeholder="enter display_name">
                                                </div>

                                                <div class="mr-1 mt-1" id="emailField"
                                                    style="width: 94%; display: none;">
                                                    <input type="email" class="form-control" id="emailInput"
                                                        placeholder="enter email">
                                                </div>

                                                <div class="mr-1 mt-1" id="groupField"
                                                    style="width: 94%; display: none;">
                                                    <select name="group" id="groupField" class="custom-select">
                                                        <option value=""></option>
                                                        <option value="administrator">administrator</option>
                                                        <option value="alumni">alumni</option>
                                                        <option value="perusahaan">perusahaan</option>
                                                        <option value="atasan">atasan</option>
                                                    </select>
                                                </div>

                                                <div class="mr-1 mt-1" id="academicNimField"
                                                    style="width: 94%; display: none;">
                                                    <input type="text" class="form-control" id="academicNimField"
                                                        placeholder="enter academic_nim">
                                                </div>

                                                <div class="mr-1 mt-1" id="academicFacultyField"
                                                    style="width: 94%; display: none;" id="conditional_logic">
                                                    <select name="academic_faculty" id="academicFacultyField"
                                                        class="custom-select">
                                                        <option value=""></option>
                                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                                        <option value="Teknik Refrigasi dan Tata Udara">Teknik Refrigasi
                                                            dan Tata Udara</option>
                                                        <option value="Teknik Konversi Energi">Teknik Konversi Energi
                                                        </option>
                                                        <option value="Teknik Elektro">Teknik Elektro</option>
                                                        <option value="Teknik Kimia">Teknik Kimia</option>
                                                        <option value="Teknik Komputer dan Informatika">Teknik Komputer
                                                            dan Informatika</option>
                                                        <option value="Akuntansi">Akuntansi</option>
                                                        <option value="Administrasi Niaga">Administrasi Niaga</option>
                                                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                                                    </select>
                                                </div>

                                                <div class="mr-1 mt-1" id="academicProgramField"
                                                    style="width: 94%; display: none;">
                                                    <select name="academic_program" id="academicProgramField"
                                                        class="custom-select">
                                                        <option value=""> </option>
                                                        <!-- Teknik Sipil -->
                                                        <option value="D-3 Teknik Konstruksi Sipil">D-3 Teknik
                                                            Konstruksi Sipil</option>
                                                        <option value="D-3 Teknik Konstruksi Gedung">D-3 Teknik
                                                            Konstruksi Gedung</option>
                                                        <option value="D-4 Teknik Perancangan Jalan dan Jembatan">D-4
                                                            Teknik Perancangan Jalan dan Jembatan</option>
                                                        <option value="D-4 Teknik Perawatan dan Perbaikan Gedung">D-4
                                                            Teknik Perawatan dan Perbaikan Gedung</option>
                                                        <option value="S-2 Rekayasa Infrastruktur">S-2 Rekayasa
                                                            Infrastruktur</option>

                                                        <!-- Teknik Mesin -->
                                                        <option value="D-3 Teknik Mesin">D-3 Teknik Mesin</option>
                                                        <option value="D-3 Teknik Aeronautika">D-3 Teknik Aeronautika
                                                        </option>
                                                        <option value="D-4 Teknik Perancangan dan Konstruksi Mesin">D-4
                                                            Teknik Perancangan dan Konstruksi Mesin</option>
                                                        <option value="D-4 Proses Manufaktur">D-4 Proses Manufaktur
                                                        </option>

                                                        <!-- Teknik Refrigasi dan Tata Udara -->
                                                        <option value="D-3 Teknik Pendingin dan Tata Udara">D-3 Teknik
                                                            Pendingin dan Tata Udara</option>
                                                        <option value="D-4 Teknik Pendingin dan Tata Udara">D-4 Teknik
                                                            Pendingin dan Tata Udara</option>

                                                        <!-- Teknik Konversi Energi -->
                                                        <option value="D-3 Teknik Konversi Energi">D-3 Teknik Konversi
                                                            Energi</option>
                                                        <option value="D-4 Teknik Pembangkit Tenaga Listrik">D-4 Teknik
                                                            Pembangkit Tenaga Listrik</option>
                                                        <option value="D-4 Teknik Konservasi Energi">D-4 Teknik
                                                            Konservasi Energi</option>

                                                        <!-- Teknik Elektro -->
                                                        <option value="D-3 Teknik Elektronika">D-3 Teknik Elektronika
                                                        </option>
                                                        <option value="D-3 Teknik Listrik">D-3 Teknik Listrik</option>
                                                        <option value="D-3 Teknik Telekomunikasi">D-3 Teknik
                                                            Telekomunikasi</option>
                                                        <option value="D-4 Teknik Elektronika">D-4 Teknik Elektronika
                                                        </option>
                                                        <option value="D-4 Teknik Telekomunikasi">D-4 Teknik
                                                            Telekomunikasi</option>
                                                        <option value="D-4 Teknik Otomasi Industri">D-4 Teknik Otomasi
                                                            Industri</option>

                                                        <!-- Teknik Kimia -->
                                                        <option value="D-3 Teknik Kimia">D-3 Teknik Kimia</option>
                                                        <option value="D-3 Analis Kimia">D-3 Analis Kimia</option>
                                                        <option value="D-4 Teknik Kimia Produksi Bersih">D-4 Teknik
                                                            Kimia Produksi Bersih</option>

                                                        <!-- Teknik Komputer dan Informatika -->
                                                        <option value="D-3 Teknik Informatika">D-3 Teknik Informatika
                                                        </option>
                                                        <option value="D-4 Teknik Informatika">D-4 Teknik Informatika
                                                        </option>

                                                        <!-- Akuntansi -->
                                                        <option value="D-3 Akuntansi">D-3 Akuntansi</option>
                                                        <option value="D-3 Keuangan dan Perbankan">D-3 Keuangan dan
                                                            Perbankan</option>
                                                        <option value="D-4 Akutansi Manajemen Pemerintahan">D-4 Akutansi
                                                            Manajemen Pemerintahan</option>
                                                        <option value="D-4 Akutansi">D-4 Akutansi</option>
                                                        <option value="D-4 Keuangan Syariah">D-4 Keuangan Syariah
                                                        </option>
                                                        <option value="S-2 Keuangan dan Perbankan Syariah">D-4 Keuangan
                                                            dan Perbankan Syariah</option>

                                                        <!-- Administrasi Niaga -->
                                                        <option value="D-3 Administrasi Bisnis">D-3 Administrasi Bisnis
                                                        </option>
                                                        <option value="D-3 Manajemen Pemasaran">D-3 Manajemen Pemasaran
                                                        </option>
                                                        <option value="D-3 Usaha Perjalanan Wisata">D-3 Usaha Perjalanan
                                                            Wisata</option>
                                                        <option value="D-4 Manajemen Aset">D-4 Manajemen Aset</option>
                                                        <option value="D-4 Manajemen Bisnis">D-4 Manajemen Bisnis
                                                        </option>
                                                        <option value="D-4 Manajemen Pemasaran">D-4 Manajemen Pemasaran
                                                        </option>
                                                        <option value="D-4 Destinasi Pariwisata">D-4 Destinasi
                                                            Pariwisata</option>

                                                        <!-- Bahasa Inggris -->
                                                        <option value="D-3 Bahasa Inggris">D-3 Bahasa Inggris</option>
                                                    </select>
                                                </div>

                                                <div class="mr-1 mt-1" id="academicYearField"
                                                    style="width: 94%; display: none;">
                                                    <select name="academic_year" id="academicYearField"
                                                        class="custom-select">
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

                                                <div class="mr-1 mt-1" id="streetField"
                                                    style="width: 94%; display: none;">
                                                    <input type="text" class="form-control" id="streetField"
                                                        placeholder="enter street">
                                                </div>

                                                <div class="mr-1 mt-1" id="cityField"
                                                    style="width: 94%; display: none;">
                                                    <input type="text" class="form-control" id="cityField"
                                                        placeholder="enter city">
                                                </div>

                                                <div class="mr-1 mt-1" id="stateCodeField"
                                                    style="width: 94%; display: none;">
                                                    <input type="text" class="form-control" id="stateCodeField"
                                                        placeholder="enter state_code">
                                                </div>

                                                <div class="mr-1 mt-1" id="zipCodeField"
                                                    style="width: 94%; display: none;">
                                                    <input type="text" class="form-control" id="zipCodeField"
                                                        placeholder="enter zip_code">
                                                </div>

                                                <div class="mr-1 mt-1" id="academicGraduateYearField"
                                                    style="width: 94%; display: none;">
                                                    <select name="academic_graduate_year" id="academicGraduateYearField"
                                                        class="custom-select">
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

                                                <div class="mr-1 mt-1" id="academicGraduateYearField"
                                                    style="width: 94%; display: none;" id="conditional_logic">
                                                    <select name="academic_graduate_year" id="academicGraduateYearField"
                                                        class="custom-select">
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

                                                <div class="mr-1 mt-1" id="jenisKelaminField"
                                                    style="width: 94%; display: none;">
                                                    <select name="jenis_kelamin" id="jenisKelaminField"
                                                        class="custom-select">
                                                        <option value=""></option>
                                                        <option value="wanita">wanita</option>
                                                        <option value="pria">pria</option>
                                                        <!-- Tambahkan tahun sesuai kebutuhan -->
                                                    </select>
                                                </div>

                                                <div class="mr-1 mt-1" id="noTelpField"
                                                    style="width: 94%; display: none;">
                                                    <input type="text" class="form-control" id="noTelpField"
                                                        placeholder="enter no_telp">
                                                </div>

                                                <div class="mr-1 mt-1" id="nikField" style="width: 94%; display: none;">
                                                    <input type="text" class="form-control" id="nikField"
                                                        placeholder="enter nik">
                                                </div>

                                                <div class="mr-1 mt-1" id="npwpField"
                                                    style="width: 94%; display: none;">
                                                    <input type="text" class="form-control" id="npwpField"
                                                        placeholder="enter npwp">
                                                </div>

                                                <!-- Tambahkan div lain untuk sub-opsi spesifik lainnya sesuai kebutuhan -->

                                                <button type="button" class="btn btn-primary mt-2" onclick="addConditionalOption()">Add</button>


                                            </div>



                                            <script>
                                                function toggleOptions() {
                                                    var checkbox = document.getElementById("conditional_logic");
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

                                            <div class="mt-1">
                                                <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                                                <a class="btn btn-danger"
                                                    style="font-size:14px;padding:8px 10px;color:white;"
                                                    href="<?= base_url('/kuesionerkuesioner') ?>">Batal</a>
                                            </div>
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
                                    </thead>
                                    <tbody>
                                    <?php if (!empty($page)) : ?>
    <?php $no = 1; ?>
    <?php foreach ($page as $row) : ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['title']; ?></td>
            <td><?= $row['deskripsi']; ?></td>
            
            <?php
                // Menangani kondisi jika conditional_logic adalah JSON yang menyimpan mainOption dan subOption
                $conditionalLogic = json_decode($row['conditional_logic'], true);
                
                // Ambil mainOption dan subOption dari JSON yang didekodekan
                $mainOption = isset($conditionalLogic['Option ']) ? $conditionalLogic['Option '] : 'No Main Option';
                $conditionalOperator = isset($conditionalLogic['is not ']) ? $conditionalLogic['is not '] : 'is';
                $subOption = isset($conditionalLogic['value ']) ? $conditionalLogic['value '] : 'No Sub Option'; // Menangani jika tidak ada subOption
            ?>

            <td><?= $mainOption;?> <?= $conditionalOperator;?> <?= $subOption; ?></td> <!-- Menampilkan subOption -->
            <td><?= $row['sections']; ?></td>

            <td>
                <a class="btn btn-secondary btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Up</a>
                <a class="btn btn-secondary btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Down</a>
                <a class="btn btn-primary btn-sm" class="nav-link active"
                href="<?= base_url('/kuesionersection') ?>"
                style='font-size:10px;padding:2px 5px;color:white;'>Edit</a>                                                       
                <button data-target='#deleteModal' id='delete' data-toggle='modal' data-id="<?= $row['id']; ?>" class='btn btn-danger deleteModal' style='font-size:10px;padding:2px 5px;color:white;'>Hapus</button>
            </td>
        </tr>
    <?php endforeach; ?>
<?php else : ?>
    <tr>
        <td colspan="8" class="text-center">No data found</td>
    </tr>
<?php endif; ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sunting Kuesioner END-->

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

 <!-- Modal Konfirmasi Hapus START -->
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
                        <form id="deleteForm" method="post" action="<?= base_url('deletetabel') ?>">
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