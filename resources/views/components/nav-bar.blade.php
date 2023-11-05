<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        {{-- <li class="nav-item d-none d-sm-inline-block">
            <a href="index3.html" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Contact</a>
        </li> --}}
        <li class="nav-item">

            <div class="">
                {{-- <form class="form-inline">
                    <div class="input-group">
                        <input class="form-control" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>

                        </div>
                    </div>
                </form> --}}
            </div>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link d-flex" data-toggle="dropdown" href="#">
                <div class="circle">
                    @if (Auth()->user()->avatar)
                        <img src="{{ asset('storage') }}{{ '/' }}{{ Auth()->user()->avatar }}" alt="">
                    @else
                        @php
                            echo Str::substr(Auth()->user()->name, 0, 1);
                        @endphp
                    @endif
                </div>
                {{ Auth()->user()->name }}
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="{{ route('profile') }}" class="dropdown-item">
                    <i class="fas fa-user mr-2"></i> Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="{{ route('setting.org') }}" class="dropdown-item">
                    <i class="fas fa-user-cog mr-2"></i> Settings
                </a>
                <div class="dropdown-divider"></div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt mr-2"></i> &nbsp; {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>

    </ul>

</nav>
