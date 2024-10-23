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
                            <div class="card-header mt-2">
                                <div class="d-flex justify-content-between">
                                    <h2>Kuesioner</h2>
                                    <div class="align-items-end">
                                        <a class="btn btn-primary kuesioner" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('tracer') ?>">
                                            Halaman Awal
                                        </a>
                                        <a class="btn btn-primary kuesioner" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('#') ?>">
                                            Tambah Halaman
                                        </a>
                                    </div>

                                </div>
                                <hr>

                                <div class="table-responsive">
                                    <table class="table table-bordered text-center">
                                        <thead>
                                            <tr>
                                                <td>NO</td>
                                                <td>Judul</td>
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
                                                        <td><?= $row['entries']; ?></td>
                                                        <td><?= $row['active_status']; ?></td>
                                                        <td><?= $row['conditional_logic']; ?></td>

                                                        <td>

                                                            <a class="btn btn-danger btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Unduh</a>
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
                        <!-- Table Kuesioner END -->

                        <!-- Sunting Kuesioner START-->
                        <div class="card tab-content" id="SuntingKuesioner" style="display:none;">
                            <div class="card-header mt-2">
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
                                            <label class="form-check-label" for="exampleCheck1">Conditional Logic</label>
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        </div>
                                        <br>
                                        <div class="form-row m-0">
                                            <div class="mr-1">
                                                <select class="custom-select" id="inlineFormCustomSelectPref">
                                                    <option selected>academic_program</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mr-1">
                                                <select class="custom-select" id="inlineFormCustomSelectPref">
                                                    <option selected>is</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div>
                                                <select class="custom-select" id="inlineFormCustomSelectPref">
                                                    <option selected>academic_faculity</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
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
                            <div class="card-header mt-2">
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
                    <div class="card-header mt-2">
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
                                            <a class="btn btn-info btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Edit</a>
                                            <a class="btn btn-danger btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Hapus</a>
                                        </td>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Sunting Kuesioner END-->

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