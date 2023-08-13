@if(Auth::user()->role=='admin')
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li >
                    <a href="{{route('dashboard')}}" class="active"><i class="feather-grid"></i> <span>Dashboard</span></a>
                </li>

                <li class="submenu">
                    <a href="#"><i class="fas fa-users"></i> <span>Visitors</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('add-vistor')}}">Add Visitor</a></li>
                        <li><a href="{{ route('vistor-list')}}">Visitor List</a></li>
                    </ul>
                </li>


                <li class="submenu">
                    <a href="#"><i class="fas fa-sign-in-alt"></i> <span>Check-In</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('check-in')}}">Check-In Visitors</a></li>
                        <li><a href="{{ route('check-out')}}">Check-Out Visitors</a></li>
                    </ul>
                </li>

                
               

                <li class="submenu">
                    <a href="#"><i class="fas fa-book-reader"></i> <span>Users</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{ route('create-user')}}">Add User</a></li>
                        <li><a href="{{ route('view-users')}}">User List</a></li>
                        
                    </ul>
                </li>

                <li >
                    <a href="{{ route('visitors-report')}}" class="active"><i class="feather-grid"></i> <span>Visitors Report</span></a>
                </li>

                <li>
                    <a href="{{ route('logout') }}"><i class="fa fa-unlock-alt"></i> <span>Logout</span></a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif


