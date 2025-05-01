        <!-- Divider -->
        <hr class="sidebar-divider my-0 " >
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
        <hr class="sidebar-divider">           
             <!-- Nav Item - Dashboard -->
            <li class="nav-item active {{ request()->is('admin/pesan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/pesan') }}">
                    <i class="fas fa-envelope fa-fw"></i>
                    <span>Pesan</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active {{ request()->is('admin/kategori') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/kategori') }}">
                    <i class="fas fa-th-list"></i>
                    <span>Kategori</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active {{ request()->is('admin/produk') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/produk') }}">
                    <i class="fas fa-campground me-2"></i>
                    <span>Produk</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active {{ request()->is('admin/transaksi') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/transaksi') }}">
                    <i class="fas fa-money-bill-wave"></i>
                    <span>Transaksi</span></a>
            </li>           
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active {{ request()->is('admin/customer') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/customer') }}">
                    <i class="fas fa-users me-2"></i>
                    <span>Customer</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active {{ request()->is('admin/laporan') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('admin/laporan') }}">
                    <i class="fas fa-file-alt me-2"></i>
                    <span>Laporan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="logout.php?halaman=logout">
                    <i class="fas fa-sign-out-alt me-2"></i>
                    <span>logout</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->