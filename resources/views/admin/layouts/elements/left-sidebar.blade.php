 <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <!-- LOGO -->
                <a href="" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('assets/admin/images/logo.png')}}" alt="" height="50">
                    </span>
                    <span class="logo-sm">
                        <img src="{{asset('assets/admin/images/logo.png')}}" alt="" height="50">
                    </span>
                </a>

                <div class="h-100" id="left-side-menu-container" data-simplebar>
                    <ul class="metismenu side-nav">
                        <li class="side-nav-title side-nav-item"></li>
                        <li class="side-nav-item">
                            <a href="{{route('admin.dashboard')}}" class="side-nav-link">
                                <i class="uil-home-alt"></i><span> Dashboard </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link" aria-expanded="false">
                                <i class="uil-folder-plus"></i>
                                <span> Users Managment </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level mm-collapse" aria-expanded="false" style="height: 0px;">
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Users
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level mm-collapse" aria-expanded="false">
                                        <li>
                                            <a href="{{route('admin.user.list')}}">User List</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.user.add.bot')}}">Add User</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">User Category
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level mm-collapse" aria-expanded="false">
                                        <li>
                                            <a href="{{route('admin.user.category.list')}}">User Category List</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.user.add.category')}}">Add User Category</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{route('admin.user.kyc')}}" aria-expanded="false">Kyc Management
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{route('admin.user.bank')}}" aria-expanded="false">Bank Detail
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="javascript: void(0);" class="side-nav-link" aria-expanded="false">
                                <i class="uil-folder-plus"></i>
                                <span> Game Managment </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="side-nav-second-level mm-collapse" aria-expanded="false" style="height: 0px;">
                                <li class="side-nav-item">
                                    <a href="javascript: void(0);" aria-expanded="false">Teen Patti Managment
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <ul class="side-nav-third-level mm-collapse" aria-expanded="false">
                                        <li>
                                            <a href="{{route('admin.teenpatti.tableMaster')}}">Teen Patti Table Master</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.teenpatti.gameHistory')}}">Game History</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.teenpatti.watchTable')}}">Watch Table Teenpatti</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.teenpatti.Jackpot')}}">Jackpot History</a>
                                        </li>
                                        <li>
                                            <a href="{{route('admin.teenpatti.RobotCards')}}">Robot Card</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('admin.payment.list')}}" class="side-nav-link">
                                <i class="uil-home-alt"></i><span> Purchase History </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('admin.leader.board.list')}}" class="side-nav-link">
                                <i class="uil-home-alt"></i><span> Leader Board </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('admin.notification.list')}}" class="side-nav-link">
                                <i class="uil-home-alt"></i><span> Notification </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('admin.comission.list')}}" class="side-nav-link">
                                <i class="uil-home-alt"></i><span> Comission Management </span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{route('admin.setting.edit')}}" class="side-nav-link">
                                <i class="uil-home-alt"></i><span> Edit Setting </span>
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->
