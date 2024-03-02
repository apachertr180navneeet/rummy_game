<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topbar-right-menu float-right mb-0">

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-bell noti-icon"></i>
                <span class="noti-icon-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0">
                        Notification
                    </h5>
                </div>

                <div style="max-height: 230px;" data-simplebar>
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item notificationClick">
                        <div class="notify-icon bg-primary">
                            <i class="mdi mdi-comment-account-outline"></i>
                        </div>
                        <p class="notify-details">test
                            <small class="text-muted">test</small>
                        </p>
                    </a>


                </div>

                <!-- All-->
                <a href="" class="dropdown-item text-center text-primary notify-item notify-all">
                    View All
                </a>

            </div>
        </li>



        <li class="notification-list">
            <a class="nav-link right-bar-toggle" href="javascript: void(0);">
                <i class="dripicons-gear noti-icon"></i>
            </a>
        </li>

        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                aria-expanded="false">
                <span class="account-user-avatar">
                        <img src="{{asset('assets/admin/images/admin.png')}}" alt="admin-image" class="rounded-circle">
                </span>
                <span>
                    <span class="account-user-name">{{Auth::user()->name}}</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown">

                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>
                <a href="" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle mr-1"></i>
                    <span>My Account</span>
                </a>

                <a href="" class="dropdown-item notify-item">
                    <i class="mdi mdi-key-chain mr-1"></i>
                    <span>Change Password</span>
                </a>

                <a href="{{route('admin.logout')}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout mr-1"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left disable-btn">
        <i class="mdi mdi-menu"></i>
    </button>

</div>
<!-- end Topbar -->
