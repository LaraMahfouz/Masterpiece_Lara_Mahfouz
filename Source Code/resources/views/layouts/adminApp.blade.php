<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LAROCHEH Handmade</title>
    <link rel="stylesheet" href="../../../admin_assets/vendors/core/core.css">
    <link rel="stylesheet" href="../../../admin_assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="../../../admin_assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../admin_assets/css/demo_1/style.css">
    <link rel="shortcut icon" href="../../../admin_assets/images/favicon.png" />
    {{-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> --}}
    <!-- plugin css for this page -->
    {{-- <link rel="stylesheet" href="../../../admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css"> --}}
    <!-- end plugin css for this page -->
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/> --}}
</head>

<body class="sidebar-dark">
    <div class="main-wrapper">

        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    <span>LARO</span>CHEH<span></span>
                </a>
                <div class="sidebar-toggler not-active">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="sidebar-body">
                <ul class="nav">
                    <li class="nav-item nav-category">Main</li>
                    <li class="nav-item">
                        <a href="{{ url('/admindash') }}" class="nav-link">
                            <i class="link-icon" data-feather="user-check"></i>
                            <span class="link-title">Admin Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item nav-category">Portfolio</li>
                    <li class="nav-item">
                        <a href="{{ url('/usersdash') }}" class="nav-link">
                            <i class="link-icon" data-feather="users"></i>
                            <span class="link-title">Manage Users</span>
                        </a>
                    </li>


                    <li class="nav-item nav-category">Product</li>
                    <li class="nav-item">
                        <a href="{{ url('/categorydash') }}" class="nav-link">
                            <i class="link-icon" data-feather="shopping-bag"></i>
                            <span class="link-title">Manage Categories</span>
                        </a>
                    <li class="nav-item">
                        <a href="{{ url('/subdash') }}" class="nav-link">
                            <i class="link-icon" data-feather="grid"></i>
                            <span class="link-title">Manage Sub Category</span>
                        </a>
                    </li>


                    <li class="nav-item nav-category">Projects</li>
                    <li class="nav-item">
                        <a href="{{ url('/postsdash') }}" class="nav-link">
                            <i class="link-icon" data-feather="download"></i>
                            <span class="link-title">Manage Posts</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <nav class="settings-sidebar">
            <div class="sidebar-body">
                <a href="#" class="settings-sidebar-toggler">
                    <i data-feather="settings"></i>
                </a>
                <h6 class="text-muted">Sidebar:</h6>
                <div class="form-group border-bottom">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight"
                                value="sidebar-light" checked>
                            Light
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark"
                                value="sidebar-dark">
                            Dark
                        </label>
                    </div>
                </div>
                <div class="theme-wrapper">
                    <h6 class="text-muted mb-2">Light Theme:</h6>
                    <a class="theme-item active" href="../../../demo_1/dashboard-one.html">
                        <img src="../../../admin_assets/images/screenshots/light.jpg" alt="light theme">
                    </a>
                    <h6 class="text-muted mb-2">Dark Theme:</h6>
                    <a class="theme-item" href="../../../demo_2/dashboard-one.html">
                        <img src="../../../admin_assets/images/screenshots/dark.jpg" alt="light theme">
                    </a>
                </div>
            </div>
        </nav>
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content" style="background-color:#0C1427">
                    <form class="search-form">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color:#0C1427">
                                    {{-- <i data-feather="search" style="background-color:#0C1427"></i> --}}
                                </div>
                            </div>
                            {{-- <input type="text" class="form-control" id="navbarForm" placeholder="Search here..."
                                style="background-color:#0C1427"> --}}
                        </div>
                    </form>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">

                @yield('content')

            </div>

            <!-- partial:../../partials/_footer.html -->
            <footer class="footer d-flex flex-column flex-md-row align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left mx-auto">Copyright © 2021 <a
                        href="https://www.nobleui.com" target="_blank">LAROCHEH</a>. All rights reserved</p>
                <p class="text-muted text-center text-md-left mb-0 d-none d-md-block">Handcrafted With <i
                        class="mb-1 text-primary ml-1 icon-small" data-feather="heart"></i></p>
            </footer>
            <!-- partial -->

        </div>
    </div>

    <script src="../../../admin_assets/vendors/core/core.js"></script>
    <script src="../../../admin_assets/vendors/feather-icons/feather.min.js"></script>
    <script src="../../../admin_assets/js/template.js"></script>
    {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script> --}}
    <!-- plugin js for this page -->
    {{-- <script src="../../../admin_assets/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="../../../admin_assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> --}}
    <!-- end plugin js for this page -->
</body>

</html>
