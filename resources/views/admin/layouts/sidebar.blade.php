    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <img src="{{asset('img/logo.png')}}" width="100px">
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{request()->is('admin') ? 'active' : ''}}">
                <a class="nav-link" href="/admin">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{request()->is('admin/acara','admin/acara/tambah','admin/acara/detail/{$id_acara}') ? 'active' : ''}}">
                <a class="nav-link" href="/admin/acara">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Acara</span>
                </a>
            </li>

            <li class="nav-item {{request()->is('admin/voter') ? 'active' : ''}}">
                <a class="nav-link" href="/admin/voter">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Voter</span>
                </a>
            </li>

            <li class="nav-item {{request()->is('admin/panitia') ? 'active' : ''}}">
                <a class="nav-link" href="/admin/panitia">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Panitia</span>
                </a>
            </li>


            <li class="nav-item {{request()->is('admin/capaslon','seleksi') ? 'active' : ''}}">
                <a class="nav-link" href="/admin/capaslon">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Seleksi Paslon</span>
                </a>
            </li>

            <li class="nav-item {{request()->is('admin/paslon') ? 'active' : ''}}">
                <a class="nav-link" href="/admin/paslon">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Kelola Paslon</span>
                </a>
            </li>
            
            <li class="nav-item {{request()->is('admin/pemilihan','admin/pemilihan/filter') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="/admin/pemilihan">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pemilihan</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item {{request()->is('admin/hasil','admin/hasil/riwayat') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="/admin/hasil">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Hasil Vote</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
         </ul>