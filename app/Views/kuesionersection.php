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
                            alt="Chameleon admin logo" src="assets/images/apple-icon-120.png" />
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
            <div></div>
            <div class="content-body">

                <!-- CRUD START-->
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="card tab-content">
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
                                                <input type="email" class="form-control" id="exampleInputTitle"
                                                    placeholder="Data Pribadi">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputDeskripsi">Deskripsi</label>
                                                <input type="text" class="form-control" id="exampleInputDeskripsi"
                                                    placeholder="Bagian ini berisi pertanyaan tentang data pribadi responden.">
                                            </div>
                                            <div class="form-check d-flex">
                                                <label class="form-check-label" for="exampleCheck1">Show Section
                                                    Title</label>
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            </div>
                                            <div class="form-check d-flex mt-1">
                                                <label class="form-check-label" for="exampleCheck1">Show Section
                                                    Description</label>
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            </div>
                                            <div class="form-check d-flex mt-1">
                                                <label class="form-check-label" for="exampleCheck1">Conditional
                                                    Logic</label>
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            </div>

                                            <br>
                                            <div>
                                            <button id="simpan" class="btn btn-info" style="font-size:14px;padding:8px 10px;color:white;">Simpan</button>
                                                <a class="btn btn-danger"
                                                    style="font-size:14px;padding:8px 10px;color:white;"
                                                    onclick="openTab(event, 'SuntingEditKuesioner')">Batal</a>
                                            </div>

                                        </form>

                                        <!-- ISI DISINI -->
                                        <div id="floating_question_selector">
                                            <div id="floating_label">
                                                Pilih Jenis Pertanyaan...
                                            </div>
                                            <div id="questions_button">
                                                <button class="quest_butt btn btn-primary"
                                                    onclick="add_single_line();">Single
                                                    Line Text</button>
                                                <button class="quest_butt btn btn-primary"
                                                    onclick="add_dropdown();">Dropdown
                                                    List</button>
                                                <button class="quest_butt btn btn-primary"
                                                    onclick="add_date();">Date</button>
                                                <button class="quest_butt btn btn-primary"
                                                    onclick="add_checkbox();">Checkbox</button>
                                                <button class="quest_butt btn btn-primary"
                                                    onclick="add_number();">Number</button>
                                                <button class="quest_butt btn btn-primary" onclick="add_radio();">Radio
                                                    Buttons</button>
                                                <button class="quest_butt btn btn-primary"
                                                    onclick="add_phone();">Phone</button>
                                                <button class="quest_butt btn btn-primary"
                                                    onclick="add_scale();">Scale</button>
                                                <button class="quest_butt btn btn-primary"
                                                    onclick="add_readonly();">User
                                                    Field</button>
                                                <button class="quest_butt btn btn-primary"
                                                    onclick="add_grid();">Grid</button>
                                                <!-- Tambahkan tombol lainnya di sini -->
                                            </div>

                                        </div>

                                        <form id="questionForm" method="post"
                                            action="<?= base_url('kuesionerkuesioner') ?>">
                                            <div id="questions_panel" class="container mt-5">
                                                <h2>Daftar Pertanyaan</h2>
                                                <ul id="sortable">
                                                    <!-- Pertanyaan akan ditambahkan di sini -->
                                                </ul>
                                            </div>
                                </div>


                                <script type="text/javascript">
                                    function deletequestion(anu) {
                                        var q = anu.parents("li:first");
                                        q.remove();
                                    }

                                    function quest_done(anu) {
                                        var view = anu.parents("li:first").find(".single_view_state");
                                        var edit = anu.parents("li:first").find(".single_edit_state");
                                        var qtext = anu.parents("li:first").find(".quest_text_field").val();
                                        anu.parents("li:first").find(".single_line_text").html(qtext);
                                        view.show();
                                        edit.hide();
                                    }

                                    function done_edit_delete_quest(anu) {
                                        // event.preventDefault();
                                        var id = anu.parents("li:first").attr("id");
                                        var view = anu.parents("li:first").find(".single_view_state");
                                        var done_button = anu.parents("li:first").find(".done_quest");
                                        var edit = anu.parents("li:first").find(".single_edit_state");
                                        var edit_button = anu.parents("li:first").find(".edit_quest");
                                        var qtext = anu.parents("li:first").find(".question_title").val();
                                        if (anu.is('.done_quest')) {
                                            anu.parents("li:first").find(".single_line_text").html(qtext);
                                            view.show();
                                            edit_button.show();
                                            edit.hide();
                                            done_button.hide();
                                            anu.parents("li:first").find(".field_container").css({
                                                "background-color": "white"
                                            })
                                            anu.parents("li:first").find(".field_header").css({
                                                "background-color": "#DFEFFF"
                                            })
                                        } else if (anu.is('.edit_quest')) {
                                            view.hide();
                                            edit.show();
                                            done_button.show();
                                            edit_button.hide();
                                            anu.parents("li:first").find(".field_container").css({
                                                "background-color": "#DFEFFF"
                                            })
                                            anu.parents("li:first").find(".field_header").css({
                                                "background-color": "powderblue"
                                            })
                                        } else {
                                            if (confirm('Apakah anda yakin untuk menghapus pertanyaan ini ?')) {
                                                var index = fields_id.indexOf(id);
                                                fields_id.splice(index, 1);
                                                deletequestion(anu);
                                            }
                                        }

                                    }

                                    function add_grid() {
                                        var id = ++fields_sum;
                                        fields_id.push(id);

                                        var grid_field = $('<li id="' + id + '" class="grid question_fields">' +
                                            '<div class="field_header">' +
                                            '<div class="field_buttons_edit">' +
                                            '<a href="#" class="edit_quest">edit</a>' +
                                            '<a href="#" class="done_quest" style="display: none;">done</a>' +
                                            '<a href="#" class="delete_quest">delete</a>' +
                                            '</div>' +
                                            '<div class="quest_admin_label" style="font-size: 11pt; font-weight: bold; padding: 5px;">' +
                                            'Grid Field: ' + id +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="field_container">' +
                                            '<div class="grid_edit_state" style="display: none;">' +
                                            '<div class="grid_field">' +
                                            'Row Title <input type="text" name="grid_row_title" class="row_title"/><br />' +
                                            'Column Titles (separate by comma) <input type="text" class="column_titles"/><br />' +
                                            '</div>' +
                                            '<button class="add_row">Add Row</button>' +
                                            '<div class="grid_rows"></div>' +
                                            '</div>' +
                                            '<div class="grid_view_state">' +
                                            '<div class="grid_text">Grid Content</div>' +
                                            '<div class="grid_answer"></div>' // This will hold the grid data
                                            +
                                            '</div>' +
                                            '</div>' +
                                            '</li>');

                                        $("#sortable").append(grid_field);

                                        // Event handler for edit button
                                        grid_field.find('.edit_quest').click(function (e) {
                                            e.preventDefault();
                                            grid_field.find('.grid_view_state').hide();
                                            grid_field.find('.grid_edit_state').show();
                                            grid_field.find('.edit_quest').hide();
                                            grid_field.find('.done_quest').show();
                                        });

                                        // Event handler for done button
                                        grid_field.find('.done_quest').click(function (e) {
                                            e.preventDefault();
                                            updateGridView(grid_field);
                                            grid_field.find('.grid_edit_state').hide();
                                            grid_field.find('.grid_view_state').show();
                                            grid_field.find('.done_quest').hide();
                                            grid_field.find('.edit_quest').show();
                                        });

                                        // Event handler for delete button
                                        grid_field.find('.delete_quest').click(function (e) {
                                            e.preventDefault();
                                            if (confirm("Apakah Anda yakin ingin menghapus grid ini?")) {
                                                var index = fields_id.indexOf(id);
                                                fields_id.splice(index, 1);
                                                grid_field.remove();
                                            }
                                        });

                                        // Event handler for add row button
                                        grid_field.find('.add_row').click(function (e) {
                                            e.preventDefault();
                                            addRowToGrid(grid_field);
                                        });
                                    }

                                    function addRowToGrid(grid_field) {
                                        var rowHtml = $('<div class="grid_row">' +
                                            'Row Data: <input type="text" class="row_data"/><br />' +
                                            '</div>');
                                        grid_field.find('.grid_rows').append(rowHtml);
                                    }

                                    function updateGridView(grid_field) {
                                        var rowTitle = grid_field.find('input[name="grid_row_title"]').val();
                                        var columnTitles = grid_field.find('input.column_titles').val().split(',').map(function (
                                            opt) {
                                            return opt.trim();
                                        });

                                        var gridContentHtml = '<strong>' + rowTitle + '</strong><br />';
                                        gridContentHtml += '<table border="1"><tr>';
                                        columnTitles.forEach(function (title) {
                                            gridContentHtml += '<th>' + title + '</th>';
                                        });
                                        gridContentHtml += '</tr>';

                                        grid_field.find('.grid_rows .grid_row').each(function () {
                                            var rowData = $(this).find('.row_data').val();
                                            gridContentHtml += '<tr>';
                                            columnTitles.forEach(function () {
                                                gridContentHtml += '<td>' + rowData + '</td>';
                                            });
                                            gridContentHtml += '</tr>';
                                        });

                                        gridContentHtml += '</table>';
                                        grid_field.find('.grid_answer').html(gridContentHtml);
                                    }


                                    function add_readonly() {
                                        var id = ++fields_sum;
                                        fields_id.push(id);

                                        var readonly_field = $('<li id="' + id + '" class="readonly question_fields">' +
                                            '<div class="field_header">' +
                                            '<div class="field_buttons_edit">' +
                                            '<a href="#" class="edit_quest">edit</a>' +
                                            '<a href="#" class="done_quest" style="display: none;">done</a>' +
                                            '<a href="#" class="delete_quest">delete</a>' +
                                            '</div>' +
                                            '<div class="quest_admin_label" style="font-size: 11pt; font-weight: bold; padding: 5px;">' +
                                            'Readonly Field: ' + id +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="field_container">' +
                                            '<div class="readonly_edit_state" style="display: none;">' +
                                            '<div class="readonly_field">' +
                                            'Field Title <input type="text" name="readonly_field_title" class="field_title"/><br />' +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="readonly_view_state">' +
                                            '<div class="readonly_text">Field Text?</div>' +
                                            '<div class="readonly_answer"></div>' // This will hold the readonly input
                                            +
                                            '</div>' +
                                            '</div>' +
                                            '</li>');

                                        $("#sortable").append(readonly_field);

                                        // Event handler for edit button
                                        readonly_field.find('.edit_quest').click(function (e) {
                                            e.preventDefault();
                                            readonly_field.find('.readonly_view_state').hide();
                                            readonly_field.find('.readonly_edit_state').show();
                                            readonly_field.find('.edit_quest').hide();
                                            readonly_field.find('.done_quest').show();
                                        });

                                        // Event handler for done button
                                        readonly_field.find('.done_quest').click(function (e) {
                                            e.preventDefault();
                                            updateReadonlyView(readonly_field);
                                            readonly_field.find('.readonly_edit_state').hide();
                                            readonly_field.find('.readonly_view_state').show();
                                            readonly_field.find('.done_quest').hide();
                                            readonly_field.find('.edit_quest').show();
                                        });

                                        // Event handler for delete button
                                        readonly_field.find('.delete_quest').click(function (e) {
                                            e.preventDefault();
                                            if (confirm("Apakah Anda yakin ingin menghapus field ini?")) {
                                                var index = fields_id.indexOf(id);
                                                fields_id.splice(index, 1);
                                                readonly_field.remove();
                                            }
                                        });
                                    }

                                    function updateReadonlyView(readonly_field) {
                                        var fieldTitle = readonly_field.find('input[name="readonly_field_title"]').val();

                                        readonly_field.find('.readonly_text').text(fieldTitle);
                                        readonly_field.find('.readonly_answer').text("Value: " + fieldTitle);
                                    }

                                    function add_scale() {
                                        var id = ++fields_sum;
                                        fields_id.push(id);

                                        var scale_field = $('<li id="' + id + '" class="scale question_fields">' +
                                            '<div class="field_header">' +
                                            '<div class="field_buttons_edit">' +
                                            '<a href="#" class="edit_quest">edit</a>' +
                                            '<a href="#" class="done_quest" style="display: none;">done</a>' +
                                            '<a href="#" class="delete_quest">delete</a>' +
                                            '</div>' +
                                            '<div class="quest_admin_label" style="font-size: 11pt; font-weight: bold; padding: 5px;">' +
                                            'Scale Field: ' + id +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="field_container">' +
                                            '<div class="scale_edit_state" style="display: none;">' +
                                            '<div class="scale_field">' +
                                            'Question Title <input type="text" name="scale_quest_title" class="question_title"/><br />' +
                                            'Scale Range (min,max) <input type="text" class="scale_range"/><br />' +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="scale_view_state">' +
                                            '<div class="scale_text">Question Text?</div>' +
                                            '<div class="scale_answer"></div>' // This will hold the scale input
                                            +
                                            '</div>' +
                                            '</div>' +
                                            '</li>');

                                        $("#sortable").append(scale_field);

                                        // Event handler for edit button
                                        scale_field.find('.edit_quest').click(function (e) {
                                            e.preventDefault();
                                            scale_field.find('.scale_view_state').hide();
                                            scale_field.find('.scale_edit_state').show();
                                            scale_field.find('.edit_quest').hide();
                                            scale_field.find('.done_quest').show();
                                        });

                                        // Event handler for done button
                                        scale_field.find('.done_quest').click(function (e) {
                                            e.preventDefault();
                                            updateScaleView(scale_field);
                                            scale_field.find('.scale_edit_state').hide();
                                            scale_field.find('.scale_view_state').show();
                                            scale_field.find('.done_quest').hide();
                                            scale_field.find('.edit_quest').show();
                                        });

                                        // Event handler for delete button
                                        scale_field.find('.delete_quest').click(function (e) {
                                            e.preventDefault();
                                            if (confirm("Apakah Anda yakin ingin menghapus pertanyaan ini?")) {
                                                var index = fields_id.indexOf(id);
                                                fields_id.splice(index, 1);
                                                scale_field.remove();
                                            }
                                        });
                                    }

                                    function updateScaleView(scale_field) {
                                        var questionTitle = scale_field.find('input[name="scale_quest_title"]').val();
                                        var scaleRange = scale_field.find('input.scale_range').val();

                                        scale_field.find('.scale_text').text(questionTitle);
                                        scale_field.find('.scale_answer').text("Scale Range: " + scaleRange);
                                    }

                                    function add_phone() {
                                        var id = ++fields_sum;
                                        fields_id.push(id);

                                        var phone_field = $('<li id="' + id + '" class="phone question_fields">' +
                                            '<div class="field_header">' +
                                            '<div class="field_buttons_edit">' +
                                            '<a href="#" class="edit_quest">edit</a>' +
                                            '<a href="#" class="done_quest" style="display: none;">done</a>' +
                                            '<a href="#" class="delete_quest">delete</a>' +
                                            '</div>' +
                                            '<div class="quest_admin_label" style="font-size: 11pt; font-weight: bold; padding: 5px;">' +
                                            'Phone Field: ' + id +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="field_container">' +
                                            '<div class="phone_edit_state" style="display: none;">' +
                                            '<div class="phone_field">' +
                                            'Question Title <input type="text" name="phone_quest_title" class="question_title"/><br />' +
                                            'Phone Number <input type="text" class="phone_number"/><br />' +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="phone_view_state">' +
                                            '<div class="phone_text">Question Text?</div>' +
                                            '<div class="phone_answer"></div>' // This will hold the phone number input
                                            +
                                            '</div>' +
                                            '</div>' +
                                            '</li>');

                                        $("#sortable").append(phone_field);

                                        // Event handler for edit button
                                        phone_field.find('.edit_quest').click(function (e) {
                                            e.preventDefault();
                                            phone_field.find('.phone_view_state').hide();
                                            phone_field.find('.phone_edit_state').show();
                                            phone_field.find('.edit_quest').hide();
                                            phone_field.find('.done_quest').show();
                                        });

                                        // Event handler for done button
                                        phone_field.find('.done_quest').click(function (e) {
                                            e.preventDefault();
                                            updatePhoneView(phone_field);
                                            phone_field.find('.phone_edit_state').hide();
                                            phone_field.find('.phone_view_state').show();
                                            phone_field.find('.done_quest').hide();
                                            phone_field.find('.edit_quest').show();
                                        });

                                        // Event handler for delete button
                                        phone_field.find('.delete_quest').click(function (e) {
                                            e.preventDefault();
                                            if (confirm("Apakah Anda yakin ingin menghapus pertanyaan ini?")) {
                                                var index = fields_id.indexOf(id);
                                                fields_id.splice(index, 1);
                                                phone_field.remove();
                                            }
                                        });
                                    }

                                    function updatePhoneView(phone_field) {
                                        var questionTitle = phone_field.find('input[name="phone_quest_title"]').val();
                                        var phoneNumber = phone_field.find('input.phone_number').val();

                                        phone_field.find('.phone_text').text(questionTitle);
                                        phone_field.find('.phone_answer').text(phoneNumber);
                                    }

                                    function add_radio() {
                                        var id = ++fields_sum;
                                        fields_id.push(id);

                                        var radio_field = $('<li id="' + id + '" class="radio question_fields">' +
                                            '<div class="field_header">' +
                                            '<div class="field_buttons_edit">' +
                                            '<a href="#" class="edit_quest">edit</a>' +
                                            '<a href="#" class="done_quest" style="display: none;">done</a>' +
                                            '<a href="#" class="delete_quest">delete</a>' +
                                            '</div>' +
                                            '<div class="quest_admin_label" style="font-size: 11pt; font-weight: bold; padding: 5px;">' +
                                            'Radio Field: ' + id +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="field_container">' +
                                            '<div class="radio_edit_state" style="display: none;">' +
                                            '<div class="radio_field">' +
                                            'Question Title <input type="text" name="radio_quest_title" class="question_title"/><br />' +
                                            'Options (separate by comma) <input type="text" class="question_options"/><br />' +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="radio_view_state">' +
                                            '<div class="radio_text">Question Text?</div>' +
                                            '<div class="radio_answer"></div>' // This will hold the radio buttons
                                            +
                                            '</div>' +
                                            '</div>' +
                                            '</li>');

                                        $("#sortable").append(radio_field);

                                        // Event handler for edit button
                                        radio_field.find('.edit_quest').click(function (e) {
                                            e.preventDefault();
                                            radio_field.find('.radio_view_state').hide();
                                            radio_field.find('.radio_edit_state').show();
                                            radio_field.find('.edit_quest').hide();
                                            radio_field.find('.done_quest').show();
                                        });

                                        // Event handler for done button
                                        radio_field.find('.done_quest').click(function (e) {
                                            e.preventDefault();
                                            updateRadioView(radio_field);
                                            radio_field.find('.radio_edit_state').hide();
                                            radio_field.find('.radio_view_state').show();
                                            radio_field.find('.done_quest').hide();
                                            radio_field.find('.edit_quest').show();
                                        });

                                        // Event handler for delete button
                                        radio_field.find('.delete_quest').click(function (e) {
                                            e.preventDefault();
                                            if (confirm("Apakah Anda yakin ingin menghapus pertanyaan ini?")) {
                                                var index = fields_id.indexOf(id);
                                                fields_id.splice(index, 1);
                                                radio_field.remove();
                                            }
                                        });
                                    }

                                    function updateRadioView(radio_field) {
                                        var questionTitle = radio_field.find('input[name="radio_quest_title"]').val();
                                        var options = radio_field.find('input.question_options').val().split(',').map(function (
                                            opt) {
                                            return opt.trim();
                                        });

                                        radio_field.find('.radio_text').text(questionTitle);
                                        var answerHtml = '';
                                        options.forEach(function (option) {
                                            answerHtml += '<label><input type="radio" name="radio_answer_' + radio_field
                                                .attr('id') + '" value="' + option + '"> ' + option + '</label><br />';
                                        });
                                        radio_field.find('.radio_answer').html(answerHtml);
                                    }

                                    function add_number() {
                                        var id = ++fields_sum;
                                        fields_id.push(id);

                                        var number_field = $('<li id="' + id + '" class="number question_fields">' +
                                            '<div class="field_header">' +
                                            '<div class="field_buttons_edit">' +
                                            '<a href="#" class="edit_quest">edit</a>' +
                                            '<a href="#" class="done_quest" style="display: none;">done</a>' +
                                            '<a href="#" class="delete_quest">delete</a>' +
                                            '</div>' +
                                            '<div class="quest_admin_label" style="font-size: 11pt; font-weight: bold; padding: 5px;">' +
                                            'Number Field: ' + id +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="field_container">' +
                                            '<div class="number_edit_state" style="display: none;">' +
                                            '<div class="number_field">' +
                                            'Question Title <input type="text" name="number_quest_title" class="question_title"/><br />' +
                                            'Info <input type="text" class="question_info"/><br />' +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="number_view_state">' +
                                            '<div class="number_text">Question Text?</div>' +
                                            '<div class="number_answer"><input type="number" name="number_answer" /></div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</li>');

                                        $("#sortable").append(number_field);

                                        number_field.find('.edit_quest').click(function (e) {
                                            e.preventDefault();
                                            number_field.find('.number_view_state').hide();
                                            number_field.find('.number_edit_state').show();
                                            number_field.find('.edit_quest').hide();
                                            number_field.find('.done_quest').show();
                                        });

                                        number_field.find('.done_quest').click(function (e) {
                                            e.preventDefault();
                                            updateNumberView(number_field);
                                            number_field.find('.number_edit_state').hide();
                                            number_field.find('.number_view_state').show();
                                            number_field.find('.done_quest').hide();
                                            number_field.find('.edit_quest').show();
                                        });

                                        number_field.find('.delete_quest').click(function (e) {
                                            e.preventDefault();
                                            if (confirm("Apakah Anda yakin ingin menghapus pertanyaan ini?")) {
                                                var index = fields_id.indexOf(id);
                                                fields_id.splice(index, 1);
                                                number_field.remove();
                                            }
                                        });
                                    }

                                    function updateNumberView(number_field) {
                                        var questionTitle = number_field.find('input[name="number_quest_title"]').val();
                                        number_field.find('.number_text').text(questionTitle);
                                    }

                                    function add_dropdown() {
                                        var id = ++fields_sum;
                                        fields_id.push(id);

                                        var dropdown_field = $('<li id="' + id + '" class="dropdown question_fields">' +
                                            '<div class="field_header">' +
                                            '<div class="field_buttons_edit">' +
                                            '<a href="#" class="edit_quest">edit</a>' +
                                            '<a href="#" class="done_quest" style="display: none;">done</a>' +
                                            '<a href="#" class="delete_quest">delete</a>' +
                                            '</div>' +
                                            '<div class="quest_admin_label" style="font-size: 11pt; font-weight: bold; padding: 5px;">' +
                                            'Dropdown: ' + id +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="field_container">' +
                                            '<div class="dropdown_edit_state" style="display: none;">' +
                                            '<div class="dropdown_field">' +
                                            'Question Title <input type="text" name="dropdown_quest_title" class="question_title"/><br />' +
                                            'Info <input type="text" class="question_info"/><br />' +
                                            '<input type="hidden" id="sum_opt_dd" value="0" />' +
                                            '<div class="dropdown_list"></div>' +
                                            '<a href="#" class="add_opt_dd">Add Option</a>' +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="dropdown_view_state">' +
                                            '<div class="dropdown_text">Question Text?</div>' +
                                            '<div class="dropdown_answer">' +
                                            '<select name="dropdown_answer"></select>' +
                                            '</div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</li>');

                                        $("#sortable").append(dropdown_field);

                                        dropdown_field.find('.edit_quest').click(function (e) {
                                            e.preventDefault();
                                            dropdown_field.find('.dropdown_view_state').hide();
                                            dropdown_field.find('.dropdown_edit_state').show();
                                            dropdown_field.find('.edit_quest').hide();
                                            dropdown_field.find('.done_quest').show();
                                        });

                                        dropdown_field.find('.done_quest').click(function (e) {
                                            e.preventDefault();
                                            updateDropdownView(dropdown_field);
                                            dropdown_field.find('.dropdown_edit_state').hide();
                                            dropdown_field.find('.dropdown_view_state').show();
                                            dropdown_field.find('.done_quest').hide();
                                            dropdown_field.find('.edit_quest').show();
                                        });

                                        dropdown_field.find('.add_opt_dd').click(function (e) {
                                            e.preventDefault();
                                            add_opt_dd($(this));
                                        });

                                        // Konfirmasi sebelum menghapus
                                        dropdown_field.find('.delete_quest').click(function (e) {
                                            e.preventDefault();
                                            if (window.confirm("Apakah Anda yakin ingin menghapus pertanyaan ini?")) {
                                                dropdown_field.remove();
                                            }
                                        });
                                    }

                                    function add_opt_dd(anu) {
                                        var opt_sum = parseInt(anu.parents("li:first").find("#sum_opt_dd").val());
                                        ++opt_sum;
                                        anu.parents("li:first").find("#sum_opt_dd").val(opt_sum);

                                        var row = $('<div class="option_dropdown" id="opt_dd_' + opt_sum + '">' +
                                            'Option ' + opt_sum + ' <input type="text" name="label_option_' + opt_sum +
                                            '" class="label_opt" style="width: 25%; margin-left: 30px;" /> ' +
                                            'Value: <input type="text" name="value_opt_' + opt_sum +
                                            '" class="val_opt" style="width: 25%;" /> ' +
                                            '<a href="#" class="add_opt_dd">Add</a> ' +
                                            '<a href="#" class="remove_opt_dd">Remove</a>' +
                                            '</div>');

                                        var list = anu.parents("li:first").find(".dropdown_list");
                                        list.append(row);

                                        row.find('.add_opt_dd, .remove_opt_dd').click(function (event) {
                                            event.preventDefault();
                                            if ($(this).is('.add_opt_dd')) {
                                                add_opt_dd($(this));
                                            } else {
                                                var opt_sum = parseInt(anu.parents("li:first").find("#sum_opt_dd").val());
                                                --opt_sum;
                                                anu.parents("li:first").find("#sum_opt_dd").val(opt_sum);
                                                $(this).parent().remove();
                                            }
                                        });
                                    }

                                    function updateDropdownView(dropdown_field) {
                                        var questionTitle = dropdown_field.find('input[name="dropdown_quest_title"]').val();
                                        dropdown_field.find('.dropdown_text').text(questionTitle);

                                        var dropdownSelect = dropdown_field.find('select[name="dropdown_answer"]');
                                        dropdownSelect.empty();
                                        dropdown_field.find('.option_dropdown').each(function () {
                                            var label = $(this).find('.label_opt').val();
                                            var value = $(this).find('.val_opt').val();
                                            dropdownSelect.append('<option value="' + value + '">' + label + '</option>');
                                        });
                                    }

                                    function add_date() {
                                        var id = ++fields_sum;
                                        fields_id.push(id);

                                        var date_field = $('<li id="' + id + '" class="date question_fields">' +
                                            '<div class="field_header">' +
                                            '<div class="field_buttons_edit">' +
                                            '<a href="#" class="edit_quest">edit</a>' +
                                            '<a href="#" class="done_quest" style="display: none;">done</a>' +
                                            '<a href="#" class="delete_quest">delete</a>' +
                                            '</div>' +
                                            '<div class="quest_admin_label" style="font-size: 11pt; font-weight: bold; padding: 5px;">' +
                                            'Date Field: ' + id +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="field_container">' +
                                            '<div class="date_edit_state" style="display: none;">' +
                                            '<div class="date_field">' +
                                            'Select Date: <input type="date" name="date_answer" class="question_date"/><br />' +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="date_view_state">' +
                                            '<div class="date_text">Question Text?</div>' +
                                            '<div class="date_answer"><input type="date" name="date_answer" /></div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</li>');

                                        $("#sortable").append(date_field);

                                        date_field.find('.edit_quest').click(function (e) {
                                            e.preventDefault();
                                            date_field.find('.date_view_state').hide();
                                            date_field.find('.date_edit_state').show();
                                            date_field.find('.edit_quest').hide();
                                            date_field.find('.done_quest').show();
                                        });

                                        date_field.find('.done_quest').click(function (e) {
                                            e.preventDefault();
                                            updateDateView(date_field);
                                            date_field.find('.date_edit_state').hide();
                                            date_field.find('.date_view_state').show();
                                            date_field.find('.done_quest').hide();
                                            date_field.find('.edit_quest').show();
                                        });

                                        date_field.find('.delete_quest').click(function (e) {
                                            e.preventDefault();
                                            if (confirm("Apakah Anda yakin ingin menghapus pertanyaan ini?")) {
                                                var index = fields_id.indexOf(id);
                                                fields_id.splice(index, 1);
                                                date_field.remove();
                                            }
                                        });
                                    }

                                    function updateDateView(date_field) {
                                        var selectedDate = date_field.find('input[name="date_answer"]').val();
                                        date_field.find('.date_text').text(selectedDate); // Menampilkan tanggal yang dipilih
                                    }

                                    function add_checkbox() {
                                        var id = ++fields_sum;
                                        fields_id.push(id);
                                        console.log("add_checkbox() called");
                                        var checkbox_field = $('<li id="' + id + '" class="checkbox question_fields">' +
                                            '<div class="field_header">' +
                                            '<div class="field_buttons_edit">' +
                                            '<a href="#" class="edit_quest">edit</a>' +
                                            '<a href="#" class="done_quest" style="display: none;">done</a>' +
                                            '<a href="#" class="delete_quest">delete</a>' +
                                            '</div>' +
                                            '<div class="quest_admin_label" style="font-size: 11pt; font-weight: bold; padding: 5px;">' +
                                            'Checkbox: ' + id +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="field_container">' +
                                            '<div class="checkbox_edit_state" style="display: none;">' +
                                            '<div class="checkbox_field">' +
                                            'Question Title <input type="text" name="checkbox_quest_title" class="question_title"/><br />' +
                                            'Info <input type="text" class="question_info"/><br />' +
                                            '<div class="checkbox_options_list"></div>' +
                                            '<a href="#" class="add_checkbox_option">Add Option</a>' +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="checkbox_view_state">' +
                                            '<div class="checkbox_text">Question Text?</div>' +
                                            '<div class="checkbox_answers"></div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</li>');

                                        $("#sortable").append(checkbox_field);

                                        checkbox_field.find('.edit_quest').click(function (e) {
                                            e.preventDefault();
                                            checkbox_field.find('.checkbox_view_state').hide();
                                            checkbox_field.find('.checkbox_edit_state').show();
                                            checkbox_field.find('.edit_quest').hide();
                                            checkbox_field.find('.done_quest').show();
                                        });

                                        checkbox_field.find('.done_quest').click(function (e) {
                                            e.preventDefault();
                                            updateCheckboxView(checkbox_field);
                                            checkbox_field.find('.checkbox_edit_state').hide();
                                            checkbox_field.find('.checkbox_view_state').show();
                                            checkbox_field.find('.done_quest').hide();
                                            checkbox_field.find('.edit_quest').show();
                                        });

                                        checkbox_field.find('.add_checkbox_option').click(function (e) {
                                            e.preventDefault();
                                            addCheckboxOption($(this));
                                        });

                                        checkbox_field.find('.delete_quest').click(function (e) {
                                            e.preventDefault();
                                            if (confirm("Apakah Anda yakin ingin menghapus pertanyaan ini?")) {
                                                var index = fields_id.indexOf(id);
                                                fields_id.splice(index, 1);
                                                checkbox_field.remove();
                                            }
                                        });
                                    }

                                    function addCheckboxOption(button) {
                                        var optionId = button.parents("li:first").find(".checkbox_options_list .checkbox_option")
                                            .length + 1;
                                        var option = $('<div class="checkbox_option" id="checkbox_option_' + optionId + '">' +
                                            'Option ' + optionId + ' <input type="text" name="label_checkbox_option_' +
                                            optionId +
                                            '" class="label_checkbox_option" style="width: 25%; margin-left: 10px;" />' +
                                            '<a href="#" class="remove_checkbox_option">Remove</a>' +
                                            '</div>');

                                        button.siblings(".checkbox_options_list").append(option);

                                        option.find('.remove_checkbox_option').click(function (e) {
                                            e.preventDefault();
                                            $(this).parent().remove();
                                        });
                                    }

                                    function updateCheckboxView(checkbox_field) {
                                        var questionTitle = checkbox_field.find('input[name="checkbox_quest_title"]').val();
                                        checkbox_field.find('.checkbox_text').text(questionTitle);

                                        var checkboxContainer = checkbox_field.find('.checkbox_answers');
                                        checkboxContainer.empty();
                                        checkbox_field.find('.checkbox_option').each(function () {
                                            var label = $(this).find('.label_checkbox_option').val();
                                            checkboxContainer.append(
                                                '<label><input type="checkbox" name="checkbox_answer" /> ' + label +
                                                '</label><br>');
                                        });
                                    }

                                    var fields_sum = 0; // Inisialisasi jumlah field
                                    var fields_id = []; // Array untuk menyimpan ID field

                                    function add_single_line() {
                                        var id = ++fields_sum;
                                        fields_id.push(id);
                                        console.log('Adding question with ID:', id); // Debugging

                                        var single_field = $('<li id="' + id + '" class="single question_fields">' +
                                            '<div class="field_header">' +
                                            '<div class="field_buttons_edit">' +
                                            '<a href="#" class="edit_quest">edit</a>' +
                                            '<a href="#" class="done_quest">done</a>' +
                                            '<a href="#" class="delete_quest">delete</a>' +
                                            '</div>' +
                                            '<div class="quest_admin_label" style="font-size: 11pt; font-weight: bold; padding: 5px;">' +
                                            'Single Line Text: ' + id +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="field_container">' +
                                            '<div class="single_edit_state">' +
                                            '<div class="single_line">' +
                                            'Question Title <input type="text" name="questions[' + id +
                                            '][title]" class="question_title"/><br />' +
                                            'Info <input type="text" name="questions[' + id +
                                            '][info]" class="question_info"/>' +
                                            '</div>' +
                                            '</div>' +
                                            '<div class="single_view_state">' +
                                            '<div class="single_line_text">Question Text?</div>' +
                                            '<div class="single_line_answer"><input type="text" name="questions[' + id +
                                            '][answer]" /></div>' +
                                            '</div>' +
                                            '</div>' +
                                            '</li>');

                                        console.log('Appending new question field'); // Debugging
                                        $("#sortable").append(single_field);

                                        single_field.find('.done_quest, .edit_quest, .delete_quest').click(function () {
                                            done_edit_delete_quest($(this));
                                        });
                                    }
                                </script>

                            </div>
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