<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta
    name="description"
    content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code." />
  <meta
    name="keywords"
    content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard" />
  <meta name="author" content="ThemeSelect" />
  <title>Home - Tracer Study</title>
  <link rel="apple-touch-icon" href="assets/images/apple-icon-120.png" />
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  <link
    href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
    rel="stylesheet" />

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/switchery.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/switch.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/palette-switch.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/chartist.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="assets/css/chartist-plugin-tooltip.css" />
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="assets/css/bootstrap-extended.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/colors.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/components.min.css" />
  <!-- END: Theme CSS-->

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/vertical-menu.min.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="assets/css/palette-gradient.min.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="assets/css/palette-gradient.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/chat-application.css" />
  <link
    rel="stylesheet"
    type="text/css"
    href="assets/css/dashboard-analytics.min.css" />
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body
  class="vertical-layout fixed-navbar"
  data-open="click"
  data-menu="vertical-menu"
  data-color="bg-gradient-x-purple-blue">
  <!-- BEGIN: Header-->
  <nav
    class="header-navbar navbar-expand navbar navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper" style="background-color: #f4f5fa;">
      <div class="justify-content-end">
        <img src="assets/images/layanankealumnian.png" class="d-block mx-auto m-1 " style="width: 320px;" alt="layanankealumnian.png">
      </div>
      <div class="container-fluid navbar-container py-1">
        <nav class="navbar navbar-expand-lg">
          <div class="container justify-content-center">
            <!-- Nama dari PHP -->

            <!-- Menu navigasi -->
            <div class="collapse navbar-collapse d-flex justify-content-between align-items-center">
              <!-- Kiri -->
              <ul class="navbar-nav">
                <li class="mx-2 h1">
                  <a style="color:#f4f5fa" href="<?= base_url('tracer') ?>"><strong>Tracer Study</strong></a>
                </li>
              </ul>

              <!-- Kanan -->
              <ul class="navbar-nav">
                <li class="nav-item mx-2">
                  <a class="nav-link" id="nav-tracer" href="<?= base_url('tentang')?>">Tentang</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" id="nav-tracer" href="<?= base_url('kontak') ?>">Kontak</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" id="nav-tracer" href="">Respon TS</a>
                </li>
                <li class="nav-item mx-2">
                  <a class="nav-link" id="nav-tracer" href="">Laporan TS</a>
                </li>
              </ul>
            </div>

          </div>
        </nav>
      </div>
    </div>
  </nav>
  <!-- END: Header-->

  <!-- BEGIN: Content-->
  <br><br><br>
  <br>
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row"></div>
      <div class="content-body">
        <div class="row justify-content-center">
          <div class="col-lg-9 col-md-9">
            <div class="card">
              <div class="card-header container p-1 m-0">
                <div class="d-flex justify-content-center">
                  <iframe
                    class="mt-4 mb-4"
                    width="550"
                    height="309"
                    src="https://www.youtube.com/embed/dZsTR26OP84?si=QHZDbCOYucjnUQHL"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                    <a
                      href="https://www.youtube.com/embed/dZsTR26OP84?si=QHZDbCOYucjnUQHL">
                    </a>
                  </iframe>
                </div>

                <div class="mr-3 ml-3 text-justify">
                  <?= $message; ?>
                  <div class="d-flex justify-content-center m-4">
                    <a
                      type="button"
                      class="btn btn-glow btn-round btn-bg-gradient-x-red-pink"
                      href="<?= base_url('halamanlogin') ?>">
                      Masuk Situs ≫
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->

    <!-- START: Footer -->

    <footer
      class="footer footer-static footer-light navbar-border navbar-shadow text-center">
      <div class="blue-grey lighten-2 text-sm-center">
        <strong>Powered by tracer.id</strong>
      </div>
      <hr />
      <div class="">
        <em>
          <span>
            This work by ITB Career Center & Aosan Technology, Customized by
            Tracer Study POLBAN Team, <br />
            is licensed under a Creative Commons
            Attribution-NonCommercial-ShareAlike 4.0 International License.
          </span>
        </em>
      </div>
    </footer>
    <!-- END: Footer-->

    <!-- BEGIN: Vendor JS-->
    <script src="js/vendors.min.js" type="text/javascript"></script>
    <script src="js/switchery.min.js" type="text/javascript"></script>
    <script src="js/switch.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="js/chartist.min.js" type="text/javascript"></script>
    <script
      src="js/chartist-plugin-tooltip.min.js"
      type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="js/app-menu.min.js" type="text/javascript"></script>
    <script src="js/app.min.js" type="text/javascript"></script>
    <script src="js/customizer.min.js" type="text/javascript"></script>
    <script src="js/jquery.sharrre.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="js/dashboard-analytics.min.js" type="text/javascript"></script>
    <!-- END: Page JS-->
</body>
<!-- END: Body-->

</html>