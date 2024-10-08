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
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="login.html"><i class="ft-power"></i> Logout</a>
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
                <li class=" nav-item"><a href="#"><i class="ft-edit"></i><span class="menu-title">Kuesioner</span></a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="email-application.html">Lorem</a>
                        </li>
                        <li><a class="menu-item" href="chat-application.html">Lorem</a>
                        </li>
                </li>
                <li><a class="menu-item" href="#">Lorem Ipsum</a>
                    <ul class="menu-content">
                        <li><a class="menu-item" href="timeline-center.html">Lorem</a>
                        </li>
                        <li><a class="menu-item" href="timeline-horizontal.html">Lorem</a>
                        </li>
                    </ul>
                </li>
                <li><a class="menu-item" href="user-profile.html">Lorem</a>
                </li>
            </ul>
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

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row"></div>
            <div class="content-body">

                <!-- Import Data Start -->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card">
                            <div class="card-header">
                                
                                <h2>Import Pengguna</h2>
                                <hr>
                                <p>Agar Import Pengguna dapat berjalan dengan lancar dan mudah, pastikan dokumen CSV anda memenuhi kriteria berikut. <br>
                                    1. Data untuk email harus memiliki @ dan .</p>
                                <hr>
                                <p>
                                    Pastikan dokumen csv anda memiliki hanya(jika hanya) field berikut.
                                    <br> 1.Username (wajib)
                                    <br> 2.Password (wajib)
                                    <br> 3.Email (wajib)
                                </p>
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
                                                <form action="/import/import" method="post" enctype="multipart/form-data">
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
                    </div>
                </div>
            </div>
            <!-- Import Data End -->

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