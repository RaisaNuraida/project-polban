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
            <div class="content-body">

                <!-- CRUD START-->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">

                            <!-- Table Data User START-->
                            <div class="mr-2 ml-2">
                                <div class="container mt-2 tab-content" id="user" style="display:block">
                                    <!-- Header -->
                                    <div class="d-flex justify-content-between ">
                                        <h2 class="">Data Pengguna</h2>
                                        <a class="btn btn-primary" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('importdata') ?>">
                                            Import Data
                                        </a>
                                    </div>

                                    <div>
                                        <nav class="nav mb-1">
                                            <a class="active nav-link  btn-outline-primary" onclick="openTab(event, 'user')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Semua Data</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'administrator')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Administrator</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'atasan')" aria-current="page" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Atasan</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'alumni')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Alumni</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'perusahaan')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Perusahaan</a>
                                        </nav>
                                    </div>
                                    <!-- Header END-->


                                    <!-- Filter -->
                                    <hr>
                                    <div>
                                        <form method="get" action="<?= base_url(relativePath: '/cariuser') ?>" onsubmit="removeEmptyInputs()">
                                            <input type="text" class="form-control" name="cariuser" id="cariuser" placeholder="Cari..." style="margin-right: 10px;  width:22%;">
                                            <div>
                                                <button href="<?= base_url('/cariuser') ?>" type="submit" class="btn btn-primary mt-1" style="font-size:12px; padding:5px 6px; height:25px; color: white;">Filter</button>
                                                <a href="<?= base_url('/') ?>" type="submit" class="btn btn-secondary mt-1" style="font-size:12px; padding:5px 6px; height:25px;  color: white;">Clear</a>
                                                <a href="" type="submit" class="btn btn-success mt-1" style="font-size:12px; padding:5px 6px; height:25px;  color: white;">Unduh CSV</a>
                                                <a href="" type="submit" class="btn btn-success mt-1" style="font-size:12px; padding:5px 6px; height:25px; ">Unduh</a>
                                            </div>

                                        </form>
                                    </div>
                                    <!-- Filter End -->

                                    <!-- Script Filter -->
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
                                    </script>
                                    <!-- Script Filter End -->

                                    <!-- Table Data Users START -->

                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Email</th>
                                                    <th>Grup</th>
                                                    <th>Dibuat Pada</th>
                                                    <th>Terakhir Diupdate</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($my_data)) : ?>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($my_data as $row) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $row['display_name']; ?></td>
                                                            <td><?= $row['username']; ?></td>
                                                            <td><?= $row['password']; ?></td>
                                                            <td><?= $row['email']; ?></td>
                                                            <td><?= $row['group']; ?></td>
                                                            <td><?= $row['created_at']; ?></td>
                                                            <td><?= $row['updated_at']; ?></td>
                                                            <td>
                                                                <button data-target='#updateModal' id='update' data-toggle='modal' data-id="<?= $row['id']; ?>" data-username="<?= $row['username']; ?>" data-email="<?= $row['email']; ?>" data-group="<?= $row['group']; ?>" data-password="<?= $row['password']; ?>" class='btn btn-warning updateModal' style='font-size:10px;padding:2px 5px;color:white;'>Ubah</button>
                                                                <button data-target='#deleteModal' id='delete' data-toggle='modal' data-id="<?= $row['id']; ?>" class='btn btn-danger deleteModal' style='font-size:10px;padding:2px 5px;color:white;'>Hapus</button>
                                                            </td>

                                                        </tr>
                                                    <?php endforeach; ?>
                                                <?php else : ?>
                                                    <tr>
                                                        <td colspan="9" class="text-center">No data found</td>
                                                    </tr>
                                                <?php endif; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Table Data Users END -->


                            <!-- Table Data Pencarian START -->
                            <div class="mr-2 ml-2">
                                <div class="container mt-2 tab-content" id="cari" style="display:none;">
                                    <div class="d-flex justify-content-between">
                                        <h2>Data </h2>
                                        <a class="btn btn-primary" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('importdata') ?>">
                                            Import Data
                                        </a>
                                    </div>

                                    <div>
                                        <nav class="nav mb-1">
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'user')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Semua Data</a>
                                            <a class="active nav-link btn-outline-primary" onclick="openTab(event, 'administrator')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Administrator</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'atasan')" aria-current="page" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Atasan</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'alumni')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Alumni</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'perusahaan')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Perusahaan</a>
                                        </nav>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Email</th>
                                                    <th>Dibuat Pada</th>
                                                    <th>Terakhir Diupdate</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($administrator)) : ?>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($administrator as $row) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $row['display_name']; ?></td>
                                                            <td><?= $row['username']; ?></td>
                                                            <td><?= $row['password']; ?></td>
                                                            <td><?= $row['email']; ?></td>
                                                            <td><?= $row['created_at']; ?></td>
                                                            <td><?= $row['updated_at']; ?></td>
                                                            <td>
                                                                <button data-target='#updateModal' id='update' data-toggle='modal' data-id="<?= $row['id']; ?>" data-username="<?= $row['username']; ?>" data-email="<?= $row['email']; ?>" data-password="<?= $row['password']; ?>" class='btn btn-warning updateModal' style='font-size:10px;padding:2px 5px;color:white;'>Ubah</button>
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
                            <!-- Table Data Pencarian END -->


                            <!-- Table Data administrator START-->
                            <div class="mr-2 ml-2">
                                <div class="container mt-2 tab-content" id="administrator" style="display:none;">
                                    <div class="d-flex justify-content-between">
                                        <h2>Data Administrator</h2>
                                        <a class="btn btn-primary" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('importdata') ?>">
                                            Import Data
                                        </a>
                                    </div>

                                    <div>
                                        <nav class="nav mb-1">
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'user')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Semua Data</a>
                                            <a class="active nav-link btn-outline-primary" onclick="openTab(event, 'administrator')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Administrator</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'atasan')" aria-current="page" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Atasan</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'alumni')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Alumni</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'perusahaan')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Perusahaan</a>
                                        </nav>
                                    </div>

                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Email</th>
                                                    <th>Dibuat Pada</th>
                                                    <th>Terakhir Diupdate</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($administrator)) : ?>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($administrator as $row) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $row['display_name']; ?></td>
                                                            <td><?= $row['username']; ?></td>
                                                            <td><?= $row['password']; ?></td>
                                                            <td><?= $row['email']; ?></td>
                                                            <td><?= $row['created_at']; ?></td>
                                                            <td><?= $row['updated_at']; ?></td>
                                                            <td>
                                                                <button data-target='#updateModal' id='update' data-toggle='modal' data-id="<?= $row['id']; ?>" data-username="<?= $row['username']; ?>" data-email="<?= $row['email']; ?>" data-password="<?= $row['password']; ?>" class='btn btn-warning updateModal' style='font-size:10px;padding:2px 5px;color:white;'>Ubah</button>
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
                            <!-- Table Data Administrator END -->


                            <!-- Table Data atasan START-->
                            <div class="mr-2 ml-2">
                                <div class="container mt-2 tab-content" id="atasan" style="display:none;">
                                    <div class="d-flex justify-content-between">
                                        <h2>Data Atasan</h2>
                                        <a class="btn btn-primary" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('importdata') ?>">
                                            Import Data
                                        </a>
                                    </div>

                                    <div>
                                        <nav class="nav mb-1">
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'user')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Semua Data</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'administrator')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Administrator</a>
                                            <a class="active nav-link btn-outline-primary" onclick="openTab(event, 'atasan')" aria-current="page" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Atasan</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'alumni')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Alumni</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'perusahaan')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Perusahaan</a>
                                        </nav>
                                    </div>

                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Email</th>
                                                    <th>Dibuat Pada</th>
                                                    <th>Terakhir Diupdate</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($atasan)) : ?>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($atasan as $row) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $row['display_name']; ?></td>
                                                            <td><?= $row['username']; ?></td>
                                                            <td><?= $row['password']; ?></td>
                                                            <td><?= $row['email']; ?></td>

                                                            <td><?= $row['created_at']; ?></td>
                                                            <td><?= $row['updated_at']; ?></td>
                                                            <td>
                                                                <button data-target='#updateModal' id='update' data-toggle='modal' data-id="<?= $row['id']; ?>" data-username="<?= $row['username']; ?>" data-email="<?= $row['email']; ?>" data-password="<?= $row['password']; ?>" class='btn btn-warning updateModal' style='font-size:10px;padding:2px 5px;color:white;'>Ubah</button>
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
                            <!-- Table Data atasan END-->

                            <!-- Table Data alumni START-->
                            <div class="mr-2 ml-2">
                                <div class="container mt-2 tab-content" id="alumni" style="display:none;">
                                    <div class="d-flex justify-content-between">
                                        <h2>Data Alumni</h2>
                                        <a class="btn btn-primary" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('importdata') ?>">
                                            Import Data
                                        </a>
                                    </div>

                                    <div>
                                        <nav class="nav mb-1">
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'user')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Semua Data</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'administrator')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Administrator</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'atasan')" aria-current="page" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Atasan</a>
                                            <a class="active nav-link btn-outline-primary" onclick="openTab(event, 'alumni')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Alumni</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'perusahaan')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Perusahaan</a>
                                        </nav>
                                    </div>

                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Email</th>

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
                                                            <td><?= $row['display_name']; ?></td>
                                                            <td><?= $row['username']; ?></td>
                                                            <td><?= $row['password']; ?></td>
                                                            <td><?= $row['email']; ?></td>
                                                            <td><?= $row['created_at']; ?></td>
                                                            <td><?= $row['updated_at']; ?></td>
                                                            <td>
                                                                <button data-target='#updateModal' id='update' data-toggle='modal' data-id="<?= $row['id']; ?>" data-username="<?= $row['username']; ?>" data-email="<?= $row['email']; ?>" data-password="<?= $row['password']; ?>" class='btn btn-warning updateModal' style='font-size:10px;padding:2px 5px;color:white;'>Ubah</button>
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
                            <!-- Table Data alumni END-->

                            <!-- Table Data perusahaan START-->
                            <div class="mr-2 ml-2">
                                <div class="container mt-2 tab-content" id="perusahaan" style="display:none;">
                                    <div class="d-flex justify-content-between">
                                        <h2>Data Perusahaan</h2>
                                        <a class="btn btn-primary" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('importdata') ?>">
                                            Import Data
                                        </a>
                                    </div>

                                    <div>
                                        <nav class="nav mb-1">
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'user')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Semua Data</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'administrator')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Administrator</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'atasan')" aria-current="page" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Atasan</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'alumni')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Alumni</a>
                                            <a class="active nav-link btn-outline-primary " onclick="openTab(event, 'perusahaan')" style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Perusahaan</a>
                                        </nav>
                                    </div>

                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <thead>
                                                <tr>
                                                    <th>NO</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Email</th>
                                                    <th>Dibuat Pada</th>
                                                    <th>Terakhir Diupdate</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php if (!empty($perusahaan)) : ?>
                                                    <?php $no = 1; ?>
                                                    <?php foreach ($perusahaan as $row) : ?>
                                                        <tr>
                                                            <td><?= $no++; ?></td>
                                                            <td><?= $row['display_name']; ?></td>
                                                            <td><?= $row['username']; ?></td>
                                                            <td><?= $row['password']; ?></td>
                                                            <td><?= $row['email']; ?></td>
                                                            <td><?= $row['created_at']; ?></td>
                                                            <td><?= $row['updated_at']; ?></td>
                                                            <td>
                                                                <button data-target='#updateModal' id='update' data-toggle='modal' data-id="<?= $row['id']; ?>" data-username="<?= $row['username']; ?>" data-email="<?= $row['email']; ?>" data-password="<?= $row['password']; ?>" class='btn btn-warning updateModal' style='font-size:10px;padding:2px 5px;color:white;'>Ubah</button>
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
                            <!-- Table Data perusahaan END-->

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
                <!-- CRUD END-->

            </div>
        </div>

        <!-- UPDATE TABLE START -->
        <!-- Modal -->
        <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Data User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="editForm" method="post">
                            <input type="hidden" id="id" name="id">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="group">group</label>
                                <input type="text" class="form-control" id="group" name="group" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- BEGIN: UPDATE MODAL -->
    <script>
        $('.updateModal').click(function() {
            // Ambil data dari atribut data-* pada tombol yang diklik

            var username = $(this).data('username');
            var email = $(this).data('email');
            var group = $(this).data('group');
            var password = $(this).data('password');

            // Isi nilai input dalam form modal dengan data yang diperoleh

            $('#editForm #username').val(username);
            $('#editForm #email').val(email);
            $('#editForm #group').val(group);
            $('#editForm #password').val(password); // Kosongkan password, jika tidak ingin mengedit

            // Tampilkan modal
            $('#updateModal').modal('show');
        });

        // Submit form ketika tombol simpan di klik
        $('#editForm').submit(function(e) {
            e.preventDefault(); // Mencegah form melakukan submit default

            // Ambil data dari form
            var id = $('#id').val();
            var username = $('#username').val();
            var email = $('#email').val();
            var group = $('#group').val();
            var password = $('#password').val();
            $.ajax({
                url: '<?= base_url("update") ?>', // Endpoint untuk update user
                method: 'POST',
                data: {
                    id: id,
                    username: username,
                    email: email,
                    group: group,
                    password: password
                },
                success: function(response) {

                    location.reload(); // Refresh halaman setelah berhasil disimpan
                },
                error: function(err) {
                    console.log(err);
                    if (err.responseJSON) {
                        alert("Error: " + err.responseJSON.message); // Menampilkan pesan error dari server
                    } else {
                        alert("Terjadi kesalahan saat menyimpan data.");
                    }
                }
            });
        });
    </script>
    <!-- END: UPDATE MODAL -->

    <!-- UPDATE TABLE END -->

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
                    <form id="deleteForm" method="post" action="<?= base_url('delete') ?>">
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