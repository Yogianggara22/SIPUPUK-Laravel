<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="{{ asset('Style/dist/img/logo_dashboard.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SiPupuk</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('Style/dist/img/user.png') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <div class="row">
                    <div class="col-md-3" style="overflow: auto">
                        <a href="#" class="d-block">{{ auth()->guard('petugas')->user()->Nama }}</a>
                    </div>
                    <div class="col-md-9">
                        <span class="badge badge-success">{{ auth()->guard('petugas')->user()->level }}</span>
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="/karyawan" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Dashboard
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
            </a>
        </li>

        <li class="nav-item ">
            <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    GUDANG
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="data_gudang" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Gudang</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/tables/jsgrid.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Stock Pupuk</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/tables/jsgrid.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Data Barang Pupuk</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="logout.php" class="nav-link text-red">
                <i class="nav-icon fas fa-power-off"></i>
                <p>
                    Logout
                </p>
            </a>
        </li>

    </ul>
</nav>