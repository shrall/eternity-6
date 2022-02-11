<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-md-none">
    <a class="navbar-brand mr-lg-5" href="../../index.html">
        <img class="navbar-brand-dark" src="{{ asset('assets/img/brand/light.svg') }}" alt="Volt logo" /> <img
            class="navbar-brand-light" src="{{ asset('assets/img/brand/dark.svg') }}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-md-none collapsed" type="button" data-toggle="collapse"
            data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
<nav id="sidebarMenu" class="sidebar d-md-block bg-primary text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <div
            class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
            <div class="d-flex align-items-center">
                <div class="user-avatar lg-avatar mr-4"><img src="../assets/img/team/profile-picture-3.jpg"
                        class="card-img-top rounded-circle border-white" alt="Bonnie Green"></div>
                <div class="d-block">
                    <h2 class="h6">Hi, {{ Auth::user()->name }}</h2>
                    <a href="{{ route('logout') }}" class="btn btn-secondary text-dark btn-xs"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <span class="mr-2">
                            <span class="fas fa-sign-out-alt"></span>
                        </span>{{ __('Logout') }}
                    </a>
                </div>
            </div>
            <div class="collapse-close d-md-none"><a href="#sidebarMenu" class="fas fa-times" data-toggle="collapse"
                    data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
                    aria-label="Toggle navigation"></a></div>
        </div>
        <ul class="nav flex-column pt-3 pt-md-0">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <img src="{{ asset('assets/img/brand/light.svg') }}" style="width: 30px">
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <span class="nav-link d-flex align-items-center justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <span class="fas fa-fw fa-hourglass-half"></span>
                        </span>
                        <span class="sidebar-text">Current Period :</span>
                    </span>
                    <span>
                        <span class="btn btn-sm btn-secondary text-gray-800">{{Auth::user()->period->name}}</span>
                    </span>
                </span>
            </li>
            <li class="nav-item">
                <span class="nav-link d-flex align-items-center justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <span class="fas fa-fw fa-hourglass-half"></span>
                        </span>
                        <span class="sidebar-text">Period (Escape) :</span>
                    </span>
                    <span>
                        <span class="btn btn-sm btn-secondary text-gray-800">{{Auth::user()->period->name2}}</span>
                    </span>
                </span>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.user.index') }}" class="nav-link d-flex align-items-center justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <span class="fas fa-fw fa-dice"></span>
                        </span>
                        <span class="sidebar-text">Add Random Item</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.user.escape') }}" class="nav-link d-flex align-items-center justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <span class="fas fa-fw fa-check"></span>
                        </span>
                        <span class="sidebar-text">Toggle Lolos Escape</span>
                    </span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.escape') }}" class="nav-link d-flex align-items-center justify-content-between">
                    <span>
                        <span class="sidebar-icon">
                            <span class="fas fa-fw fa-gamepad-alt"></span>
                        </span>
                        <span class="sidebar-text">Escape Room</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
</nav>
