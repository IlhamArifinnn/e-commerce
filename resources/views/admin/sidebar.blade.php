<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('index') }}" class="brand-link">
        <img src="{{ asset('assets') }}/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">E-Commerce</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets') }}/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block"> {{ Auth::user()->name }}</a>
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

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                    with font-awesome or any other icon font library -->

                <!-- Menu for both Admin and User -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Halaman Utama</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/profil" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-clipboard"></i>
                        <p>
                            Table Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <!-- Conditional menu for Admin -->
                        @if (auth()->check() && auth()->user()->Admin())
                            <li class="nav-item">
                                <a href="{{ route('jenis_produks.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Table Jenis Produk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('produks.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Table Produk</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('kategori_tokohs.index') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Table Kategori</p>
                                </a>
                            </li>
                        @endif
                        <!-- Menu for User -->
                        <li class="nav-item">
                            <a href="/testimonis" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Table Testimoni</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <form method="POST" class="nav-link btn btn-secondary" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
