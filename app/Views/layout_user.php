<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title><?= $title ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Esport Unwira Kelola" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/logo.png">

    <!-- jquery.vectormap css -->
    <link href="<?= base_url() ?>/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="<?= base_url() ?>/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?= base_url() ?>/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?= base_url() ?>/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= base_url() ?>/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <style>
        /* Style the Image Used to Trigger the Modal */
        img {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        img:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        #image-viewer {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-contents {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        .modal-contents {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        #image-viewer .closes {
            position: fixed;
            bottom: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        #image-viewer .closes:hover,
        #image-viewer .closes:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        @media only screen {
            .modal-contents {
                width: 100%;
            }
        }

        .code-box {
            background-color: #f1f1f1;
            padding: 10px;
            border-radius: 5px;
            font-family: monospace;
        }
    </style>
    <link href="<?= base_url() ?>/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-topbar="dark">
    <div id="image-viewer">
        <span class="closes">&times;</span>
        <img class="modal-contents" id="full-image">
    </div>
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?= base_url() ?>/assets/images/logo-light.png" alt="logo-sm" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url() ?>/assets/images/logo-light.png" alt="logo-dark" height="20">
                            </span>
                        </a>

                        <a href="index.html" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?= base_url() ?>/assets/images/logo-light.png" alt="logo-sm-light" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url() ?>/assets/images/logo-light.png" alt="logo-light" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="ri-menu-2-line align-middle"></i>
                    </button>

                    <!-- App Search-->

                </div>

                <div class="d-flex">
                    <div class="dropdown d-inline-block user-dropdown">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?= base_url() ?>/assets/images/logo.png" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1">User</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <form action="<?= base_url('logout') ?>" method="post">
                                <button class="dropdown-item text-danger" type="submit"><i class="ri-shut-down-line align-middle me-1 text-danger"></i> Logout</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!-- User details -->
                <div class="user-profile text-center mt-3">
                    <div class="">
                        <img src="<?= base_url() ?>/assets/images/logo.png" alt="" class="avatar-md rounded-circle">
                    </div>
                    <div class="mt-3">
                        <h4 class="font-size-16 mb-1">EXPO UNWIRA</h4>
                    </div>
                </div>

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title">Order</li>

                        <li>
                            <a href="<?= base_url('order-page') ?>" class="waves-effect">
                                <i class=" ri-ticket-line"></i>
                                <span>Order Tiket</span>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url('order') ?>" class="waves-effect">
                                <i class="ri-file-paper-2-line"></i>
                                <span>Daftar Order</span>
                            </a>
                        </li>
                        <li class="menu-title">Gate</li>
                        <li>
                            <a href="<?= base_url('gate') ?>" class="waves-effect">
                                <i class="ri-checkbox-line"></i>
                                <span>Check In</span>
                            </a>
                        </li>
                        <?php if (session('user')->type == 'admin') : ?>
                            <li class="menu-title">Admin</li>
                            <li>
                                <a href="<?= base_url('user') ?>" class="waves-effect">
                                    <i class="ri-user-line"></i>
                                    <span>User</span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">
                    <?= $this->renderSection('content'); ?>
                    <!-- start page title -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


        </div>
        <!-- end main content-->

    </div>

    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <!-- /Right-bar -->

    <!-- Right bar overlay-->

    <!-- JAVASCRIPT -->
    <script src="<?= base_url() ?>/assets/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/metismenu/metisMenu.min.js"></script>


    <!-- apexcharts -->
    <!-- <script src="<?= base_url() ?>/assets/libs/apexcharts/apexcharts.min.js"></script> -->

    <!-- jquery.vectormap map -->
    <!-- <script src="<?= base_url() ?>/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script> -->
    <!-- <script src="<?= base_url() ?>/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script> -->

    <!-- Required datatable js -->
    <script src="<?= base_url() ?>/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Responsive examples -->
    <script src="<?= base_url() ?>/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/pages/datatables.init.js"></script>
    <!-- App js -->
    <script>
        $(".view").click(function() {
            $("#full-image").attr("src", $(this).val());
            $('#image-viewer').show();
        });

        $("#image-viewer .closes").click(function() {
            $('#image-viewer').hide();
        });
        var copyButton = document.getElementById("copy-button");
        copyButton.addEventListener("click", function() {
            var code = document.getElementById("code").innerText;
            navigator.clipboard.writeText(code).then(function() {
                alert("Code copied to clipboard!");
            }, function(err) {
                console.error("Failed to copy code: ", err);
            });
        });
    </script>
    <script src="<?= base_url() ?>/assets/js/app.js"></script>
</body>

</html>