    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laptop"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E - Voting</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{request()->is('panitia') ? 'active' : ''}}">
                <a class="nav-link" href="/panitia">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item {{request()->is('panitia/acara') ? 'active' : ''}}">
                <a class="nav-link" href="/panitia/acara">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Acara</span>
                </a>
            </li>

            <li class="nav-item {{request()->is('panitia/hasil') ? 'active' : ''}}">
                <a class="nav-link collapsed" href="/panitia/hasil">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Hasil Vote</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
         </ul>