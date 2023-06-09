<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{  route('admin.home') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('profile/avatar.png')  }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('profile/avatar.png')  }}" alt="" height="20">
                    </span>
                </a>

                <a href="{{  route('admin.home') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('profile/avatar.png')  }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('profile/avatar.png')  }}" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <!-- App Search-->
            {{-- <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="uil-search"></span>
                </div>
            </form> --}}
        </div>

        <div class="d-flex">

            {{-- <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-search"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div> --}}



            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="uil-bell"></i>
                    <span class="badge bg-danger rounded-pill">{{ $unreadNotifications->count() }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-16">Notifications</h5>
                            </div>
                            <div class="col-auto">
                                <a href="{{ route('admin.notifications.markAllAsRead') }}" class="small">Mark all as read</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        @forelse ($unreadNotifications as $notification)
                            <a href="javascript:void(0);" class="text-reset notification-item">
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                            <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                <i class="uil-shopping-basket"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">{{ $notification->message }}</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">{{ $notification->created_at->diffForHumans() }}</p>
                                            {{-- <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p> --}}
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @empty
                            <p class="text-center m-0 py-2">No new notifications</p>
                        @endforelse
                    </div>
                    <div class="p-2 border-top">
                        <div class="d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                <i class="uil-arrow-circle-right me-1"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('profile/avatar.png')  }}"
                        alt="">
                    <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">{{ getAdminName() }}</span>
                    <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View Profile</span></a>
                    <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Settings</span></a>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('signout').submit();">
                        <i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i>
                        <span class="align-middle">Sign out</span>
                        <form action="{{ route('logout') }}" id="signout" method="POST" class="d-none">
                            @csrf
                        </form>
                    </a>
                </div>
            </div>


        </div>
    </div>
</header>
