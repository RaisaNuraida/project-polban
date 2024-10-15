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
                <li class="menu-item">
                    <a href="index.php">
                        <i class="ft-home"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?= base_url('/kuesioner') ?>">
                        <i class="ft-edit"></i>
                        <span class="menu-title">Kuesioner</span>
                    </a>
                </li>


                <li class=" nav-item"><a href="#"><i class="ft-aperture"></i><span class="menu-title" data-i18n="">User Interface</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#">Content</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="content-grid.html">Grid</a>
                                </li>
                                <li><a class="menu-item" href="content-typography.html">Typography</a>
                                </li>
                                <li><a class="menu-item" href="content-text-utilities.html">Text utilities</a>
                                </li>
                                <li><a class="menu-item" href="content-syntax-highlighter.html">Syntax highlighter</a>
                                </li>
                                <li><a class="menu-item" href="content-helper-classes.html">Helper classes</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#">Color Palette</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="color-palette-primary.html">Primary palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-danger.html">Danger palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-success.html">Success palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-warning.html">Warning palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-info.html">Info palette</a>
                                </li>
                                <li class="navigation-divider"></li>
                                <li><a class="menu-item" href="color-palette-red.html">Red palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-pink.html">Pink palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-purple.html">Purple palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-blue.html">Blue palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-cyan.html">Cyan palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-teal.html">Teal palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-yellow.html">Yellow palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-amber.html">Amber palette</a>
                                </li>
                                <li><a class="menu-item" href="color-palette-blue-grey.html">Blue Grey palette</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="card-bootstrap.html">Bootstrap Cards</a>
                        </li>
                        <li><a class="menu-item" href="card-advanced.html">Advanced Cards</a>
                        </li>
                        <li><a class="menu-item" href="#">Icons</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="icons-feather.html">Feather</a>
                                </li>
                                <li><a class="menu-item" href="icons-line-awesome.html">Line Awesome</a>
                                </li>
                                <li><a class="menu-item" href="icons-simple-line-icons.html">Simple Line Icons</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="animation.html">Animation</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="ft-box"></i><span class="menu-title" data-i18n="">Components</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#">Bootstrap</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="component-alerts.html">Alerts</a>
                                </li>
                                <li><a class="menu-item" href="component-buttons.html">Buttons</a>
                                </li>
                                <li><a class="menu-item" href="component-carousel.html">Carousel</a>
                                </li>
                                <li><a class="menu-item" href="component-collapse.html">Collapse</a>
                                </li>
                                <li><a class="menu-item" href="component-dropdowns.html">Dropdowns</a>
                                </li>
                                <li><a class="menu-item" href="component-list-group.html">List Group</a>
                                </li>
                                <li><a class="menu-item" href="component-modals.html">Modals</a>
                                </li>
                                <li><a class="menu-item" href="component-pagination.html">Pagination</a>
                                </li>
                                <li><a class="menu-item" href="component-navs-component.html">Navs</a>
                                </li>
                                <li><a class="menu-item" href="component-tabs-component.html">Tabs</a>
                                </li>
                                <li><a class="menu-item" href="component-pills-component.html">Pills</a>
                                </li>
                                <li><a class="menu-item" href="component-tooltips.html">Tooltips</a>
                                </li>
                                <li><a class="menu-item" href="component-popovers.html">Popovers</a>
                                </li>
                                <li><a class="menu-item" href="component-badges.html">Badges</a>
                                </li>
                                <li><a class="menu-item" href="component-pill-badges.html">Pill Badges</a>
                                </li>
                                <li><a class="menu-item" href="component-progress.html">Progress</a>
                                </li>
                                <li><a class="menu-item" href="component-media-objects.html">Media Objects</a>
                                </li>
                                <li><a class="menu-item" href="component-spinner.html">Spinner</a>
                                </li>
                                <li><a class="menu-item" href="component-toast.html">Toast</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#">Extra</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="ex-component-sweet-alerts.html">Sweet Alerts</a>
                                </li>
                                <li><a class="menu-item" href="ex-component-toastr.html">Toastr</a>
                                </li>
                                <li><a class="menu-item" href="ex-component-ratings.html">Ratings</a>
                                </li>
                                <li><a class="menu-item" href="ex-component-tour.html">Tour</a>
                                </li>
                                <li><a class="menu-item" href="#">Editors</a>
                                    <ul class="menu-content">
                                        <li><a class="menu-item" href="editor-ckeditor.html">CKEditor</a>
                                        </li>
                                        <li><a class="menu-item" href="editor-tinymce.html">TinyMCE</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="menu-item" href="pickers-date-&amp;-time-picker.html">Date &amp; Time Picker</a>
                                </li>
                                <li><a class="menu-item" href="block-ui.html">Block UI</a>
                                </li>
                                <li><a class="menu-item" href="file-uploader-dropzone.html">File Uploader</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="ft-edit"></i><span class="menu-title" data-i18n="">Forms</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#">Form Elements</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="form-inputs.html">Form Inputs</a>
                                </li>
                                <li><a class="menu-item" href="form-switch.html">Switch</a>
                                </li>
                                <li><a class="menu-item" href="form-select2.html">Select2</a>
                                </li>
                                <li><a class="menu-item" href="form-checkboxes-radios.html">Checkboxes &amp; Radios</a>
                                </li>
                                <li><a class="menu-item" href="form-tags-input.html">Tags Input</a>
                                </li>
                                <li><a class="menu-item" href="form-validation.html">Validation</a>
                                </li>
                                <li><a class="menu-item" href="form-extended-inputs.html">Extended Inputs</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#">Form Layouts</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="form-layout-basic.html">Basic Forms</a>
                                </li>
                                <li><a class="menu-item" href="form-layout-horizontal.html">Horizontal Forms</a>
                                </li>
                                <li><a class="menu-item" href="form-layout-hidden-labels.html">Hidden Labels</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="form-wizard.html">Form Wizard</a>
                        </li>
                        <li><a class="menu-item" href="form-repeater.html">Form Repeater</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="ft-grid"></i><span class="menu-title" data-i18n="">Tables</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="table-bootstrap.html">Bootstrap Tables</a>
                        </li>
                        <li><a class="menu-item" href="#">DataTables</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="dt-basic-initialization.html">Basic Initialisation</a>
                                </li>
                                <li><a class="menu-item" href="dt-styling.html">Styling</a>
                                </li>
                                <li><a class="menu-item" href="dt-data-sources.html">Data Sources</a>
                                </li>
                                <li><a class="menu-item" href="dt-advanced-initialization.html">Advanced initialisation</a>
                                </li>
                                <li><a class="menu-item" href="dt-api.html">API</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="ft-bar-chart-2"></i><span class="menu-title" data-i18n="">Charts</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="chartist-charts.html">Chartist</a>
                        </li>
                        <li><a class="menu-item" href="chartjs-charts.html">Chartjs</a>
                        </li>
                        <li><a class="menu-item" href="#">Maps</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="google-maps.html">Google Maps</a>
                                </li>
                                <li><a class="menu-item" href="jvector-maps.html">jVector Map</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="ft-sidebar"></i><span class="menu-title" data-i18n="">Pages</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="gallery-grid.html">Gallery</a>
                        </li>
                        <li><a class="menu-item" href="search.html">Search</a>
                        </li>
                        <li><a class="menu-item" href="#">Authentication</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="login.html">Login</a>
                                </li>
                                <li><a class="menu-item" href="register.html">Register</a>
                                </li>
                                <li><a class="menu-item" href="unlock-user.html">Unlock User</a>
                                </li>
                                <li><a class="menu-item" href="recover-password.html">Recover password</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="#">Error</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="error-400.html">Error 400</a>
                                </li>
                                <li><a class="menu-item" href="error-401.html">Error 401</a>
                                </li>
                                <li><a class="menu-item" href="error-403.html">Error 403</a>
                                </li>
                                <li><a class="menu-item" href="error-404.html">Error 404</a>
                                </li>
                                <li><a class="menu-item" href="error-500.html">Error 500</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="menu-item" href="coming-soon.html">Coming Soon</a>
                        </li>
                        <li><a class="menu-item" href="under-maintenance.html">Maintenance</a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="changelog.html"><i class="ft-file"></i><span class="menu-title" data-i18n="">Changelog</span><span class="badge badge badge-pill badge-warning float-right">1.2</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="ft-server"></i><span class="menu-title" data-i18n="">Menu levels</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="#">Second level</a>
                        </li>
                        <li><a class="menu-item" href="#">Second level child</a>
                            <ul class="menu-content">
                                <li><a class="menu-item" href="#">Third level</a>
                                </li>
                            </ul>
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
                        <div class="card tab-content" id="kuesioner" style="display:block;">
                            <div class="card-header mt-2">
                                <div class="d-flex justify-content-between">
                                    <h2>Kuesioner</h2>
                                    <div class="align-items-end">
                                        <a class="btn btn-primary kuesioner" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('tracer') ?>">
                                            Halaman Awal
                                        </a>
                                        <a class="btn btn-primary kuesioner" style="font-size:14px;padding:2px 5px;color:white; height:25px;" href="<?= base_url('SuntingKuesioner') ?>">
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
                                            <tr>
                                                <td>1</th>
                                                <td>Kuesioner Contoh</td>
                                                <td>0<a class="nav-link" href="<?= base_url('dataisian') ?>" style='font-size:10px;padding:2px 5px;'>
                                                        Lihat</a></td>
                                                <td>-</td>
                                                <td>Show if : academic_program is 'Sains dan Teknologi Farmasi Internasional'</td>
                                                <td>
                                                    <a class="btn btn-primary btn-sm" class="nav-link active" onclick="openTab(event, 'SuntingKuesioner')" style='font-size:10px;padding:2px 5px;color:white;'>Edit</a>
                                                    <a class="btn btn-primary btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Active</a>
                                                    <a class="btn btn-primary btn-sm" style='font-size:10px;padding:2px 5px;color:white;' onclick="openTab(event, 'TinjauKuesioner')">Tinjau</a>
                                                    <a class="btn btn-success btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Clone</a>
                                                    <a class="btn btn-info btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Unduh</a>
                                                    <a class="btn btn-warning btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Edit Style</a>
                                                    <a class="btn btn-danger btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Hapus</a>
                                                </td>
                                            </tr>
                                        </thead>
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
                                                    <a class="btn btn-info btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Edit</a>
                                                    <a class="btn btn-danger btn-sm" style='font-size:10px;padding:2px 5px;color:white;'>Hapus</a>
                                                </td>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                       


                        <!-- Tinjau Kuesioner START -->
                        <div class="card tab-content" id="TinjauKuesioner" style="display:none;">
                            <div class="card-header mt-2">
                                <div class="d-flex justify-content-between">
                                    <h2>Sunting Kuesioner</h2>
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

<style>

</style>