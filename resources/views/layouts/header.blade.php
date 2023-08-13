

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index.html" class="logo">
                    valley courts hostel
                </a>
                
            </div>
            <div class="menu-toggle">
                <a href="javascript:void(0);" id="toggle_btn">
                    <i class="fas fa-bars"></i>
                </a>
            </div>

            <div class="top-nav-search">
                <form>
                    <input type="text" class="form-control" placeholder="Search here">
                    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
                <i class="fas fa-bars"></i>
            </a>

            <ul class="nav user-menu">
                <!-- <li class="nav-item dropdown noti-dropdown language-drop me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="assets/img/icons/header-icon-01.svg" alt="">
                    </a>
                    <div class="dropdown-menu ">
                        <div class="noti-content">
                            <div>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="flag flag-lr me-2"></i>English</a>
                                <a class="dropdown-item" href="javascript:;"><i
                                        class="flag flag-bl me-2"></i>Francais</a>
                                <a class="dropdown-item" href="javascript:;"><i class="flag flag-cn me-2"></i>Turkce</a>
                            </div>
                        </div>
                    </div>
                </li> -->

                <li class="nav-item dropdown noti-dropdown me-2">
                    <a href="#" class="dropdown-toggle nav-link header-nav-list" data-bs-toggle="dropdown">
                        <img src="{{asset('assets/img/icons/header-icon-05.svg')}}" alt="">{{ auth()->user()->unreadNotifications()->count() }}
                        
                        
                    
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notification</span>
                            
                            <a href="{{ route('notifications.clearAll') }}" class="clear-noti"> Clear All </a>
                        </div>
                        
                        <div class="noti-content">
                            <ul class="notification-list">
                                @foreach (auth()->user()->unreadNotifications as $notification)
                                <li class="notification-message">
                                    <a href="#">
                                        <div class="media d-flex">
                                            <span class="avatar avatar-sm flex-shrink-0">
                                                <img class="avatar-img rounded-circle" alt="User Image"
                                                    src="{{asset('assets/img/profiles/avarta.jpg')}}">
                                            </span>
                                            <div class="media-body ">
                                                <p class="noti-details"><span class="noti-title"></span>
                                                    {{ $notification->data['message'] }}</p>
                                                <p class="noti-time text-muted"><span class="notification-time">{{ $notification->created_at->diffForHumans() }}</span>
                                                </p>
                                                <a href="{{ route('notifications.markAsRead', $notification->id) }}">Mark as read</a>
                                            </div>
                                            
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        <div class="topnav-dropdown-footer">
                            <a href="#">View all Notifications</a>
                        </div>
                    </div>

                </li>

                <!-- <li class="nav-item zoom-screen me-2">
                    <a href="#" class="nav-link header-nav-list win-maximize">
                        <img src="assets/img/icons/header-icon-04.svg" alt="">
                    </a>
                </li> -->

                <li class="nav-item dropdown has-arrow new-user-menus">
                    <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="{{asset('assets/img/profiles/avarta.jpg')}}" width="31"
                                alt="Soeng Souy">
                            <div class="user-text">
                                <h6>{{Auth::user()->email}}</h6>
                                <p class="text-muted mb-0">{{Auth::user()->role}}</p>
                            </div>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <!-- <a class="dropdown-item" href="inbox.html">Inbox</a> -->
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    </div>
                </li>

            </ul>

        </div>