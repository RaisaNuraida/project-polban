<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
  <meta name="description"
    content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code." />
  <meta name="keywords"
    content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard" />
  <meta name="author" content="ThemeSelect" />
  <title>Tracer Study - Login</title>
  <link rel="apple-touch-icon" href="assets/images/apple-icon-120.png" />
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
    rel="stylesheet" />

  <!-- BEGIN: Vendor CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/vendors.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/switchery.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/switch.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/palette-switch.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/chartist.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/chartist-plugin-tooltip.css" />
  <!-- END: Vendor CSS-->

  <!-- BEGIN: Theme CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-extended.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/colors.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/components.min.css" />
  <!-- END: Theme CSS-->

  <!-- BEGIN: Page CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/vertical-menu.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/palette-gradient.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/palette-gradient.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/chat-application.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/dashboard-analytics.min.css" />
  <!-- END: Page CSS-->

  <!-- BEGIN: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
  <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout" data-open="click" data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue">
  <!-- BEGIN: Header-->
  <nav class="header-navbar navbar-expand navbar navbar-without-dd-arrow fixed-top navbar-semi-light">
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="" id="navbar-mobile"><a href="#">
            <br>
            <img src="assets/images/layanankealumnian.png" class="d-block mx-auto" style="width: 320px;"
              alt="layanankealumnian.png">
          </a>
        </div>
      </div>
    </div>
  </nav>
  <!-- END: Header-->

  <!-- BEGIN: Content-->
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-wrapper-before"></div>
      <div class="content-header row"></div>
      <div class="content-body">
        <br><br><br><br><br><br>
        <div class="row justify-content-center align-content-center">
          <div class="col-lg-5 col-md-5">
            <div class="header text-center mb-2" style="z-index: 1; position: relative; margin-bottom: 20px;">
              <?php if (!empty($my_data)): ?>
                <?php foreach ($my_data as $row): ?>
                  <span class="h1" style="display: block; font-size: 2rem;"><?= $row['nama']; ?></span>
                  <p class="text-primary" style="margin-top: 5px;"><?= $row['slogan']; ?></p>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
            <br>
            <div class="card" style="margin-top: 20px;">
              <div class="card-header p-2 m-0">
                <div class="ml-3 mt-1 mr-3">
                  <h3>Masuk</h3>
                  <hr>
                </div>
                <form action="<?= base_url('/login'); ?>" method="post">
                  <?= csrf_field(); ?>
                  <?php if (session()->getFlashdata('error')) {
                    ?>
                    <div class="alert alert-danger"><?php echo session()->getFlashdata('error') ?>
                    </div><?php
                  } ?>
                  <div class="d-flex flex-row justify-content-center align-items-center text-center">
                    <div class="flex-row m-2">
                      <div class="form-group" style="width: 300px;">
                        <input type="text" name="username" placeholder="Username" class="form-control"
                          value="<?php echo session()->getFlashdata('username') ?>" id="username" required>
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" id="password"
                          required>
                      </div>
                      <div>
                        <input type="submit" name="login" id="login"
                          class="btn btn-glow btn-round btn-bg-gradient-x-red-pink m-2" value="Masuk"
                          style="width: 55%;" />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  </div>
  <!-- END: Content-->

  <!-- BEGIN: Vendor JS-->
  <script src="js/vendors.min.js" type="text/javascript"></script>
  <script src="js/switchery.min.js" type="text/javascript"></script>
  <script src="js/switch.min.js" type="text/javascript"></script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  <script src="js/chartist.min.js" type="text/javascript"></script>
  <script src="js/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
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