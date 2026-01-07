<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard | Inventaris</title>

    @notifyCss

    <!-- Fonts -->
    <link href="/sbadmin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800" rel="stylesheet">

    <!-- SB Admin 2 -->
    <link href="/sbadmin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom Style -->
    <style>
        .sidebar {
            background: linear-gradient(180deg, #4e73df 0%, #224abe 100%);
        }
        .sidebar .nav-item .nav-link {
            font-weight: 600;
            font-size: 14px;
        }
        .sidebar .nav-item .nav-link i {
            font-size: 14px;
        }
        .sidebar-brand {
            font-size: 18px;
            font-weight: 800;
            letter-spacing: 1px;
        }
        .topbar {
            background-color: #ffffff;
        }
        .content-wrapper {
            background-color: #f8f9fc;
        }
        footer {
            font-size: 14px;
        }
    </style>
</head>

<body id="page-top">

<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
            <div class="sidebar-brand-icon">
                <i class="fas fa-boxes"></i>
            </div>
            <div class="sidebar-brand-text mx-2">Inventaris</div>
        </a>

        <hr class="sidebar-divider my-0">

        <!-- Dashboard -->
        <li class="nav-item {{ request()->is('admin') ? 'active' : '' }}">
            <a class="nav-link" href="/admin">
                <i class="fas fa-home"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- Data Barang -->
        <li class="nav-item {{ request()->is('admin/barang*') ? 'active' : '' }}">
            <a class="nav-link" href="/admin/barang">
                <i class="fas fa-clipboard-list"></i>
                <span>Data Barang</span>
            </a>
        </li>

        <!-- Laporan -->
        <li class="nav-item {{ request()->is('admin/laporan*') ? 'active' : '' }}">
            <a class="nav-link" href="/admin/laporan">
                <i class="fas fa-clipboard-list"></i>
                <span>Laporan</span>
            </a>
        </li>

        <hr class="sidebar-divider">

    </ul>
    <!-- End Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light topbar mb-4 shadow-sm">

                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <h5 class="mb-0 font-weight-bold text-primary d-none d-md-block">
                    Sistem Inventaris
                </h5>

                <ul class="navbar-nav ml-auto">

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- User -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown"
                           role="button" data-toggle="dropdown">
                            <span class="mr-2 text-gray-600 small">Admin</span>
                            <img class="img-profile rounded-circle"
                                 src="/sbadmin/img/undraw_profile.svg">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profil
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>
            </nav>
            <!-- End Topbar -->

            <!-- Page Content -->
            <div class="container-fluid">
                @yield('content')
            </div>

        </div>
        <!-- End Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white shadow-sm">
            <div class="container my-auto">
                <div class="text-center my-auto text-muted">
                    © {{ date('Y') }} Sistem Inventaris
                </div>
            </div>
        </footer>

    </div>
    <!-- End Content Wrapper -->

</div>

<!-- Scroll -->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Logout</h5>
                <button class="close" data-dismiss="modal">×</button>
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin keluar?
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a class="btn btn-primary" href="/logout">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- JS -->
<script src="/sbadmin/vendor/jquery/jquery.min.js"></script>
<script src="/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/sbadmin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="/sbadmin/js/sb-admin-2.min.js"></script>

<x-notify::notify />
@notifyJs

</body>
</html>
