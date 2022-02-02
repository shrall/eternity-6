<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark pl-0 pr-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
            <div class="d-flex align-items-center">
                <button id="sidebar-toggle"
                    class="sidebar-toggle mr-3 btn btn-icon-only btn-lg btn-circle d-none d-md-inline-block">
                    <span class="fas fa-bars"></span>
                </button>
            </div>
            <!-- Navbar links -->
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="media d-flex align-items-center">
                            <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder"
                                src="{{ asset('assets/img/team/profile-picture-3.jpg') }}">
                            <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                                <span
                                    class="mb-0 font-small font-weight-bold">{{ Auth::user()->name }}</span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                        <a class="dropdown-item font-weight-bold" href="#" data-toggle="modal"
                            data-target="#logoutModal"><span class="fas fa-sign-out-alt text-danger"></span>Logout
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
