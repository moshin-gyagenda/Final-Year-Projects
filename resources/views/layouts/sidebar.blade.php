@if(Auth::user()->role=='admin')
<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu ">
                            
                                <li><a href="{{route('dashboard')}}" class="active"><i class="feather-grid"></i> <span> Dashboard</a></li>
                             
                        </li>

                         
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Admissions</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('add-admission')}}">Add Admission</a></li>
                                <li><a href="{{ route('admission-list')}}">Admission List</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><i class="fas fa-graduation-cap"></i> <span> Students</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('add-student')}}"> Add Student </a></li>
                                <li><a href="{{route('view-student')}}">Students List</a></li>
                                
                            </ul>
                        </li>
                        
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{route('add-teacher')}}">Teacher Add</a></li>
                                <li><a href="{{ route('teacher-list')}}">Teacher List</a></li>
                                
                            </ul>
                        </li>
                       

                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Users</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="#">User List</a></li>
                                <li><a href="add-subject.html"> Add User</a></li>
                                <li><a href="edit-subject.html">Edit User</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                        
                        
                        
                    </ul>
                </div>
            </div>
        </div>

@endif

@if(Auth::user()->role=='student')
<div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">
                            <span>Main Menu</span>
                        </li>
                        <li class="submenu active">
                            <a href="#"><i class="feather-grid"></i> <span> Dashboard</a>
                            
                        </li>
                        
                         
                        <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Admissions</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('add-admission')}}">Add Admission</a></li>
                                <!-- <li><a href="Admissions.html">Admission List</a></li> -->
                                <li><a href="edit-subject.html">Edit Admission</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers.html">Teacher List</a></li>
                                
                            </ul>
                        </li>
                       
                        <li>
                            <a href="settings.html"><i class="fas fa-cog"></i> <span>Settings</span></a>
                        </li>
                        
                        
                        
                    </ul>
                </div>
            </div>
        </div>

@endif