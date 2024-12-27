<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0, minimal-ui">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Admin - Tambah Welcome Page</title>
    <link rel="apple-touch-icon" href="assets/images/apple-icon-120.png">
    <link rel="shortcut icon" type="assets/image/x-icon" href="images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">

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

<body class="vertical-layout vertical-menu 2-columns fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav
        class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="collapse navbar-collapse show" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item mobile-menu d-md-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i
                                    class="ft-menu font-large-1"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                                href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i
                                    class="ficon ft-maximize"></i></a></li>
                    </ul>
                    <ul class="nav navbar-nav float-right">
                        <li class="dropdown dropdown-user nav-item"><a
                                class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <span class="avatar avatar-online"><img src="assets/images/avatar-s-19.png"
                                        alt="avatar"></span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="arrow_box_right"> <a class="dropdown-item" href="#"><span
                                            class="avatar avatar-online"><img src="assets/images/avatar-s-19.png"
                                                alt="avatar"><span
                                                class="user-name text-bold-500 ml-1 text-capitalize"><?= session()->get('username') ?></span></span></a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item"
                                        href="<?= base_url('halamaneditprofile') ?>"><i class="ft-user"></i> Edit
                                        Profile</a><a class="dropdown-item" href="email-application.html"><i
                                            class="ft-mail"></i> My Inbox</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item"
                                        href="<?= base_url('tracer') ?>"><i class="ft-power"></i> Logout</a>
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
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow " data-scroll-to-active="true"
        data-img="images/backgrounds/02.jpg">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="index.php"><img class="brand-logo"
                            alt="polban" src="assets/images/apple-icon-120.png" />
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
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row"></div>
            <div class="content-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12">


                        <!-- Import Data Start -->
                        <div class="card">
                            <div class="container">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Tambah Welcome Page</h2>
                                        <nav class="nav mb-1">
                                            <a class="nav-link btn-outline-primary active"
                                                onclick="openTab(event, 'welcome')"
                                                style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Welcome
                                                Message</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'tentang')"
                                                style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Tentang</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'kontak')"
                                                aria-current="page"
                                                style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Kontak</a>
                                            <a class="nav-link btn-outline-primary" onclick="openTab(event, 'surveyor')"
                                                style="border: 1px solid #ccc; padding: 5px; margin-right: 10px; border-radius: 3px;">Surveyor</a>
                                        </nav>
                                        <hr>
                                        <div class="">
                                            <form action="<?= base_url('/welcomepage/tambahHalaman') ?>" method="post">
                                                <div class="form-group">
                                                    <!-- Dropdown untuk tahun -->
                                                    <div class="d-flex align-items-center mb-1" style="width: 50%">
                                                        <div style="width: 45%;">
                                                            <label for="tahun">Tahun:</label>
                                                            <select name="tahun[]" id="tahun"
                                                                class="form-control tahun-select" required>
                                                                <option value="">Pilih Tahun</option>
                                                                <?php foreach ($data as $row): ?>
                                                                    <option
                                                                        value="<?= htmlspecialchars($row['tahun_lulus']) ?>">
                                                                        <?= htmlspecialchars($row['tahun_lulus']) ?>
                                                                    </option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <br>

                                                    <!-- Content (Welcome Message) -->
                                                    <div class="tab-content" id="welcome" style="display:block;">
                                                        <label for="content">Welcome Message</label>
                                                        <textarea name="content" id="content" required></textarea>
                                                    </div>

                                                    <!-- Tentang -->
                                                    <div class="tab-content" id="tentang" style="display:none;">
                                                        <label for="tentangarea">Tentang</label>
                                                        <textarea name="tentangarea" id="tentangarea"
                                                            required></textarea>
                                                    </div>

                                                    <!-- Kontak -->
                                                    <div class="tab-content" id="kontak" style="display:none;">
                                                        <label for="kontakarea">Kontak</label>
                                                        <textarea name="kontakarea" id="kontakarea" required></textarea>
                                                    </div>

                                                    <!-- Data Surveyor -->
                                                    <div class="tab-content" id="surveyor" style="display:none;">
                                                        <div class="">
                                                            <label for="datasurveyor">Data Surveyor</label>
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Program Studi</th>
                                                                        <th>Nama Surveyor</th>
                                                                        <th>Email Surveyor</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tableBody">
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>
                                                                            <select name="prodi[]"
                                                                                class="form-control prodi-select"
                                                                                required>
                                                                                <option value="">Pilih Program Studi
                                                                                </option>
                                                                                <?php foreach ($data as $row): ?>
                                                                                    <option
                                                                                        value="<?= htmlspecialchars($row['program_studi']) ?>">
                                                                                        <?= htmlspecialchars($row['program_studi']) ?>
                                                                                    </option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <select name="nama[]"
                                                                                class="form-control nama-select"
                                                                                onchange="updateEmail(this)" required>
                                                                                <option value="">Pilih Nama</option>
                                                                                <?php foreach ($data as $row): ?>
                                                                                    <option
                                                                                        value="<?= htmlspecialchars($row['user_name']) ?>">
                                                                                        <?= htmlspecialchars($row['user_name']) ?>
                                                                                    </option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <select name="email[]"
                                                                                class="form-control email-select"
                                                                                onchange="updateEmail(this)" required>
                                                                                <option value="">Pilih Email</option>
                                                                                <?php foreach ($data as $row): ?>
                                                                                    <option
                                                                                        value="<?= htmlspecialchars($row['user_email']) ?>">
                                                                                        <?= htmlspecialchars($row['user_email']) ?>
                                                                                    </option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-danger"
                                                                                onclick="hapusBaris(this)">Hapus</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <button class="btn btn-primary" type="button"
                                                                onclick="tambahBaris()">Tambah Baris</button>
                                                        </div>

                                                        <br><br>

                                                        <!-- Data Koordinator Surveyor -->
                                                        <div>
                                                            <table class="table">
                                                                <label>Data Koordinator Surveyor</label>
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
                                                                        <th>Jurusan</th>
                                                                        <th>Nama Koordinator Surveyor</th>
                                                                        <th>Email Koordinator Surveyor</th>
                                                                        <th>Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="koordinatorTableBody">
                                                                    <tr>
                                                                        <td>1</td>
                                                                        <td>
                                                                            <select name="jurusan[]"
                                                                                class="form-control prodi-select"
                                                                                onchange="updateJurusan(this)" required>
                                                                                <option value="">Pilih Jurusan</option>
                                                                                <?php foreach ($data as $row): ?>
                                                                                    <option
                                                                                        value="<?= htmlspecialchars($row['fakultas']) ?>">
                                                                                        <?= htmlspecialchars($row['fakultas']) ?>
                                                                                    </option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <select name="koordinator_nama[]"
                                                                                class="form-control nama-select"
                                                                                onchange="updateNama(this)" required>
                                                                                <option value="">Pilih Nama Koordinator
                                                                                </option>
                                                                                <?php foreach ($data as $row): ?>
                                                                                    <option
                                                                                        value="<?= htmlspecialchars($row['koordinator_name']) ?>">
                                                                                        <?= htmlspecialchars($row['koordinator_name']) ?>
                                                                                    </option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <select name="koordinator_email[]"
                                                                                class="form-control email-select"
                                                                                onchange="updateEmail(this)" required>
                                                                                <option value="">Pilih Email Koordinator
                                                                                </option>
                                                                                <?php foreach ($data as $row): ?>
                                                                                    <option
                                                                                        value="<?= htmlspecialchars($row['koordinator_email']) ?>">
                                                                                        <?= htmlspecialchars($row['koordinator_email']) ?>
                                                                                    </option>
                                                                                <?php endforeach; ?>
                                                                            </select>
                                                                        </td>
                                                                        <td>
                                                                            <button type="button" class="btn btn-danger"
                                                                                onclick="hapusBarisKoordinator(this)">Hapus</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <button class="btn btn-primary" type="button"
                                                                onclick="tambahBarisKoordinator()">Tambah Baris</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <hr>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <a href="<?= base_url('/welcomepage') ?>" class="btn btn-danger">Batal</a>
                                        </div>


                                    </div>
                                </div>
                            </div>

                        </div>
                        </d>

                        <script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
                        <script>
                            // Inisialisasi editor dengan konfigurasi khusus
                            CKEDITOR.replace('content', {
                                removePlugins: 'a11ychecker,notificationupdate'
                            });
                            CKEDITOR.replace('tentangarea', {
                                removePlugins: 'a11ychecker,notificationupdate'
                            });
                            CKEDITOR.replace('kontakarea', {
                                removePlugins: 'a11ychecker,notificationupdate'
                            });
                            CKEDITOR.replace('deskSurveyor', {
                                removePlugins: 'a11ychecker,notificationupdate'
                            });
                        </script>

                        <script>
                            function openTab(evt, tabId) {
                                // Sembunyikan semua tab
                                var tabcontent = document.getElementsByClassName("tab-content");
                                for (var i = 0; i < tabcontent.length; i++) {
                                    tabcontent[i].style.display = "none";
                                }

                                // Tampilkan tab yang dipilih
                                document.getElementById(tabId).style.display = "block";

                                // Hapus kelas aktif dari semua tombol
                                var tablinks = document.getElementsByClassName("nav-link");
                                for (var i = 0; i < tablinks.length; i++) {
                                    tablinks[i].classList.remove("active");
                                }

                                // Tambahkan kelas aktif pada tombol yang diklik
                                evt.currentTarget.classList.add("active");
                            }

                            function updateProdi(selectElement) {
                                const yearId = selectElement.value; // ID Tahun yang dipilih
                                const row = selectElement.closest('tr'); // Cari baris terkait
                                const prodiSelect = row.querySelector('.prodi-select'); // Dropdown Program Studi
                                const namaSelect = row.querySelector('.nama-select'); // Dropdown Nama
                                const emailInput = row.querySelector('.email-input'); // Input Email

                                // Kosongkan dropdown Prodi, Nama, dan Email
                                prodiSelect.innerHTML = '<option value="">Pilih Prodi</option>';
                                namaSelect.innerHTML = '<option value="">Pilih Nama</option>';
                                emailInput.value = '';

                                // Ambil data Prodi dan Nama dari server
                                if (yearId) {
                                    fetch(`<?= base_url('/data/getProdiByYear') ?>/${yearId}`)
                                        .then(response => response.json())
                                        .then(data => {
                                            // Isi dropdown Prodi
                                            data.prodi.forEach(item => {
                                                const option = document.createElement('option');
                                                option.value = item.id; // ID Prodi
                                                option.textContent = item.nama_prodi; // Nama Prodi
                                                prodiSelect.appendChild(option);
                                            });

                                            // Simpan data Nama dan Email untuk referensi
                                            prodiSelect.dataset.users = JSON.stringify(data.users);
                                        })
                                        .catch(error => console.error('Error:', error));
                                }
                            }

                            function updateNama(selectElement) {
                                const prodiId = selectElement.value; // ID Prodi yang dipilih
                                const row = selectElement.closest('tr'); // Cari baris terkait
                                const namaSelect = row.querySelector('.nama-select'); // Dropdown Nama
                                const emailInput = row.querySelector('.email-input'); // Input Email
                                const users = JSON.parse(selectElement.dataset.users || '[]'); // Data Nama & Email

                                // Kosongkan dropdown Nama dan Email
                                namaSelect.innerHTML = '<option value="">Pilih Nama</option>';
                                emailInput.value = '';

                                // Filter Nama berdasarkan Prodi
                                const filteredUsers = users.filter(user => user.prodi_id == prodiId);

                                // Isi dropdown Nama
                                filteredUsers.forEach(user => {
                                    const option = document.createElement('option');
                                    option.value = user.nama; // Nama
                                    option.textContent = user.nama; // Nama
                                    option.dataset.email = user.email; // Simpan email untuk referensi
                                    namaSelect.appendChild(option);
                                });
                            }

                            function updateEmail(selectElement) {
                                const selectedOption = selectElement.options[selectElement.selectedIndex];
                                const row = selectElement.closest('tr');
                                const emailInput = row.querySelector('.email-input');

                                // Isi input Email
                                emailInput.value = selectedOption.dataset.email || '';
                            }

                            function tambahBaris() {
                                const tableBody = document.getElementById('tableBody');
                                const newRow = tableBody.rows[0].cloneNode(true);

                                // Reset semua input di baris baru
                                newRow.querySelectorAll('input, select').forEach(input => input.value = '');

                                // Tambahkan baris baru ke tabel
                                tableBody.appendChild(newRow);

                                // Perbarui nomor baris
                                updateNomorBaris('tableBody');
                            }

                            function hapusBaris(button) {
                                const row = button.closest('tr'); // Baris yang akan dihapus
                                const tableBody = row.parentNode; // Parent (tbody) dari baris yang dihapus

                                // Periksa jumlah baris di dalam tabel ini saja
                                if (tableBody.rows.length > 1) {
                                    row.remove(); // Hapus baris
                                    updateNomorBaris(tableBody.id); // Perbarui nomor baris setelah penghapusan
                                } else {
                                    alert('Minimal satu baris diperlukan di tabel ini.');
                                }
                            }

                            function tambahBarisKoordinator() {
                                const tableBody = document.getElementById('koordinatorTableBody');
                                const newRow = tableBody.rows[0].cloneNode(true);

                                // Reset semua input di baris baru
                                newRow.querySelectorAll('input, select').forEach(input => input.value = '');

                                // Tambahkan baris baru ke tabel
                                tableBody.appendChild(newRow);

                                // Perbarui nomor baris
                                updateNomorBaris('koordinatorTableBody');
                            }

                            function updateNomorBaris(tableBodyId) {
                                const tableBody = document.getElementById(tableBodyId);
                                tableBody.querySelectorAll('tr').forEach((row, index) => {
                                    row.cells[0].textContent = index + 1; // Perbarui nomor di kolom pertama
                                });
                            }

                            function tambahBarisInputKoordinator() {
                                const tableBody = document.getElementById('koordinatorInputTableBody');
                                const rowCount = tableBody.rows.length + 1;

                                const newRow = `
        <tr>
            <td>${rowCount}</td>
            <td>
                <select name="jurusan[]" class="form-control prodi-select">
                    <option value="">Pilih Jurusan</option>
                    <?php if (!empty($jurusanList)): ?>
                                                                            <?php foreach ($jurusanList as $jurusan): ?>
                                                                                                                                    <option value="<?= htmlspecialchars($jurusan) ?>">
                                                                                                                                        <?= htmlspecialchars($jurusan) ?>
                                                                                                                                    </option>
                                                                            <?php endforeach; ?>
                    <?php else: ?>
                                                                            <option value="">Jurusan tidak tersedia</option>
                    <?php endif; ?>
                </select>
            </td>
            <td>
                <input type="text" name="koordinator_nama[]" class="form-control" placeholder="Nama Koordinator">
            </td>
            <td>
                <input type="email" name="email_koordinator[]" class="form-control" placeholder="Email Koordinator">
            </td>
            <td>
                <button type="button" class="btn btn-danger" onclick="hapusBarisKoordinator(this)">Hapus</button>
            </td>
        </tr>
    `;
                                tableBody.insertAdjacentHTML('beforeend', newRow);
                            }
                        </script>
                        <!-- END: Content-->

                        <!-- BEGIN: Vendor JS-->
                        <script src="assets/ckeditor/config.js"></script>
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