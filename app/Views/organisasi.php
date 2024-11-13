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
                        <span class="menu-title">Welcome</span>
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
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row"></div>
            <div></div>
            <s="content-body">

                <!-- CRUD START-->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <!-- Table Kuesioner START-->
                            <div class="card tab-content" id="user">
                                <div class="card-header ml-2 mr-2">
                                    <div class="d-flex justify-content-between">
                                        <h2>Data Organisasi</h2>
                                        <a class="btn btn-primary kuesioner" style="font-size:14px;padding:2px 5px;color:white; height:25px;" onclick="openTab(event, 'tambahorganisasi')">
                                            Tambah Organisasi
                                        </a>

                                    </div>
                                    <div>
                                        <nav class="nav mb-1">
                                            <a class="active nav-link  btn-outline-primary" onclick="openTab(event, 'user')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Semua</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'jurusan')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Jurusan</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'prodi')" aria-current="page" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Prodi</a>
                                        </nav>
                                    </div>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered ">
                                            <tbody>

                                                <?php if (!empty($organisasi)) : ?>
                                                    <?php foreach ($organisasi as $faculty => $program) : ?>
                                                        <tr>
                                                            <td><strong><?= esc($faculty) ?></strong></td>
                                                            <td>
                                                                <!-- Mengambil ID dari program pertama untuk tombol Hapus fakultas -->
                                                                <button
                                                                    data-target="#deleteModalfaculty"
                                                                    id="deletefaculty"
                                                                    data-toggle="modal"
                                                                    data-id="<?= esc($program[0]['faculty']); ?>"
                                                                    class="btn btn-danger deleteModalfaculty"
                                                                    style="font-size:10px;padding:2px 5px;color:white;">
                                                                    Hapus
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <?php foreach ($program as $program) : ?>
                                                            <tr>
                                                                <td>&emsp;- <?= esc($program['name']) ?></td>
                                                                <td>
                                                                    <!-- Mengambil ID program untuk tombol Hapus -->
                                                                    <button data-target="#deleteModal" id="delete" data-toggle="modal" data-id="<?= esc($program['id']); ?>" class="btn btn-danger deleteModal" style="font-size:10px;padding:2px 5px;color:white;">Hapus</button>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="2" class="text-center">No data found</td>
                                                    </tr>
                                                <?php endif; ?>


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Sunting Kuesioner START-->

                            <div class="card tab-content" id="tambahorganisasi" style="display:none;">
                                <div class="card-header ml-2 mr-2">
                                    <div class="d-flex justify-content-between">
                                        <h2>tambah organisasi</h2>
                                    </div>
                                    <hr>

                                    <div class="m-2">
                                        <form action="<?= base_url('/organisasi') ?>" method="post">
                                            <?php if (session()->getFlashdata('success')): ?>
                                                <div class="alert alert-success">
                                                    <?= session()->getFlashdata('success'); ?>
                                                </div>
                                            <?php endif; ?>

                                            <?php if (session()->getFlashdata('error')): ?>
                                                <div class="alert alert-danger">
                                                    <?= session()->getFlashdata('error'); ?>
                                                </div>
                                            <?php endif; ?>
                                            <div class="form-group">
                                                <label for="exampleInputTitle">Jurusan</label>
                                                <input type="text" class="form-control" id="fakultas" name="fakultas" style="margin-right: 10px;  width:42%;" placeholder="Masukkan nama jurusan">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputDeskripsi">Prodi</label>
                                                <input type="text" class="form-control" id="program" name="program" style="margin-right: 10px;  width:42%;" placeholder="Masukkan nama prodi">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button href="<?= base_url('/organisasi') ?>" class="btn btn-danger">Batal</button>

                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="container mt-2 tab-content" id="jurusan" style="display:none;">
                                <div class="d-flex justify-content-between">
                                    <h2>Data Fakultas</h2>
                                    <a class="btn btn-primary kuesioner" style="font-size:14px;padding:2px 5px;color:white; height:25px;" onclick="openTab(event, 'tambahorganisasi')">
                                        Tambah Organisasi
                                    </a>

                                </div>
                                <div>
                                    <nav class="nav mb-1">
                                        <a class=" nav-link  btn-outline-primary" onclick="openTab(event, 'user')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Semua</a>
                                        <a class="nav-link  btn-outline-primary" onclick="openTab(event, 'jurusan')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Jurusan</a>
                                        <a class="nav-link btn-outline-primary" onclick="openTab(event, 'prodi')" aria-current="page" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Prodi</a>
                                    </nav>
                                </div>
                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>

                                            <?php if (!empty($organisasi)) : ?>
                                                <?php foreach ($organisasi as $faculty => $programs) : ?>
                                                    <tr>
                                                        <td><strong><?= esc($faculty) ?></strong></td>
                                                    </tr>

                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="2" class="text-center">No data found</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>


                            <div class="container mt-2 tab-content" id="prodi" style="display:none;">
                                <div class="d-flex justify-content-between">
                                    <h2>Data Prodi</h2>
                                    <a class="btn btn-primary kuesioner" style="font-size:14px;padding:2px 5px;color:white; height:25px;" onclick="openTab(event, 'tambahorganisasi')">
                                        Tambah Organisasi
                                    </a>

                                </div>
                                <div>
                                    <nav class="nav mb-1">
                                        <a class=" nav-link  btn-outline-primary" onclick="openTab(event, 'user')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Semua</a>
                                        <a class="nav-link  btn-outline-primary" onclick="openTab(event, 'jurusan')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Jurusan</a>
                                        <a class="nav-link btn-outline-primary" onclick="openTab(event, 'prodi')" aria-current="page" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Prodi</a>
                                    </nav>
                                </div>

                                <hr>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tbody>

                                            <?php if (!empty($organisasi)) : ?>
                                                <?php foreach ($organisasi as $faculty => $programs) : ?>

                                                    <?php foreach ($programs as $program) : ?>
                                                        <tr>
                                                            <td><?= esc($program['name']) ?></td>

                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php endforeach; ?>
                                            <?php else : ?>
                                                <tr>
                                                    <td colspan="2" class="text-center">No data found</td>
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
                        <p>Apakah Anda yakin ingin menghapus data?</p>
                        <form id="deleteForm" method="post" action="<?= base_url('/deleteUser') ?>">
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

        <div class="modal fade" id="deleteModalfaculty" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda yakin ingin menghapus data?</p>
                        <form id="deleteForm" method="post" action="<?= base_url('/deleteFaculty') ?>">
                            <?= csrf_field(); ?>
                            <input type="hidden" id="delete_faculty" name="academic_faculty">
                            <button type="submit" class="btn btn-danger">Hapus</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script>
            $(document).on('click', '.deleteModalfaculty', function() {
                const facultyId = $(this).data('id');
                $('#delete_faculty').val(facultyId); // Isi input hidden dengan academic_faculty
            });
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