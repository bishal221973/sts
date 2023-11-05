<aside class="main-sidebar sidebar-light-dark elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        {{-- <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8"> --}}
        <span class="brand-text font-weight-light">{{settings()->get("org_full_name", $default = null)}}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar mt-2">
        <!-- Sidebar user panel (optional) -->

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
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link {{\Request::segment(1)=="home" ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('language.index')}}" class="nav-link {{\Request::segment(1)=="language" ? 'active' : ''}}">
                        <i class="nav-icon fas fa-language"></i>
                        <p>
                            Movie Language
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('type.index')}}" class="nav-link {{\Request::segment(1)=="type" ? 'active' : ''}}">
                        <i class="nav-icon fas fa-cubes"></i>
                        <p>
                            Movie Type
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('tag.index')}}" class="nav-link {{\Request::segment(1)=="tag" ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tags"></i>
                        <p>
                            Movie Tag
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('movie.index')}}" class="nav-link {{\Request::segment(1)=="movie" ? 'active' : ''}}">
                        <i class="nav-icon fas fa-film"></i>
                        <p>
                            Movie
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('tax.index')}}" class="nav-link {{\Request::segment(1)=="tax" ? 'active' : ''}}">
                        <i class="nav-icon fas fa-shield-alt"></i>
                        <p>
                            Tax
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('users.index')}}" class="nav-link {{\Request::segment(1)=="users" ? 'active' : ''}}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Users
                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('report')}}" class="nav-link {{\Request::segment(1)=="report" ? 'active' : ''}}">
                        <i class="nav-icon fas fa-file"></i>
                        <p>
                            Report
                        </p>
                    </a>

                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
