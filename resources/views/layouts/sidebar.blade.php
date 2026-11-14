<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">

        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <li class="menu-title"></li>

                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="/dashboard">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="{{ request()->is('doctors') ? 'active' : '' }}">
                    <a href="/doctors">
                        <i class="fa fa-user-md"></i>
                        <span>Doctors</span>
                    </a>
                </li>

                <li class="{{ request()->is('patients') ? 'active' : '' }}">
                    <a href="/patients">
                        <i class="fa fa-wheelchair"></i>
                        <span>Patients</span>
                    </a>
                </li>

                <li class="{{ request()->is('appointments') ? 'active' : '' }}">
                    <a href="/appointments">
                        <i class="fa fa-calendar"></i>
                        <span>Appointments</span>
                    </a>
                </li>

                <li class="{{ request()->is('schedule') ? 'active' : '' }}">
                    <a href="/schedule">
                        <i class="fa fa-calendar-check-o"></i>
                        <span>Doctor Schedules</span>
                    </a>
                </li>

                <li class="{{ request()->is('departments') ? 'active' : '' }}">
                    <a href="/departments">
                        <i class="fa fa-hospital-o"></i>
                        <span>Departments</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Employees</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="display: none;">
                        <li class="{{ request()->is('employees') ? 'active' : '' }}">
                            <a href="/employees">Employee List</a>
                        </li>

                        <li class="{{ request()->is('attendance') ? 'active' : '' }}">
                            <a href="/attendance">Attendance</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-money"></i>
                        <span>Accounts</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="display: none;">
                        <li class="{{ request()->is('invoices') ? 'active' : '' }}">
                            <a href="/invoices">Invoices</a>
                        </li>

                        <li class="{{ request()->is('payments') ? 'active' : '' }}">
                            <a href="/payments">Payments</a>
                        </li>

                        <li class="{{ request()->is('expenses') ? 'active' : '' }}">
                            <a href="/expenses">Expenses</a>
                        </li>

                        <li class="{{ request()->is('taxes') ? 'active' : '' }}">
                            <a href="/taxes">Taxes</a>
                        </li>

                    </ul>
                </li>



                <li class="{{ request()->is('activities') ? 'active' : '' }}">
                    <a href="/activities">
                        <i class="fa fa-bell-o"></i>
                        <span>Activities</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-flag-o"></i>
                        <span>Reports</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="display: none;">
                        <li><a href="/expense-reports">Expense Report</a></li>
                        <li><a href="/invoices">Invoice Report</a></li>
                    </ul>
                </li>

                <li class="{{ request()->is('settings') ? 'active' : '' }}">
                    <a href="/settings">
                        <i class="fa fa-cog"></i>
                        <span>Settings</span>
                    </a>
                </li>



                <li class="{{ request()->is('calendar') ? 'active' : '' }}">
                    <a href="/calendar">
                        <i class="fa fa-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>

                <li class="menu-title">Extras</li>

                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-columns"></i>
                        <span>Pages</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="display: none;">
                        <li><a href="/login">Login</a></li>
                        <li><a href="/forgot-password">Forgot Password</a></li>
                        <li><a href="/change-password">Change Password</a></li>
                        <li><a href="/lock-screen">Lock Screen</a></li>
                        <li><a href="/profile">Profile</a></li>

                    </ul>
                </li>

                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-share-alt"></i>
                        <span>Level</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="display: none;">
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <span>Nível 1</span>
                                <span class="menu-arrow"></span>
                            </a>

                            <ul style="display: none;">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Nível 2</span>
                                    </a>
                                </li>

                                <li class="submenu">
                                    <a href="javascript:void(0);">
                                        <span>Nível 2</span>
                                        <span class="menu-arrow"></span>
                                    </a>

                                    <ul style="display: none;">
                                        <li><a href="javascript:void(0);">Nível 3</a></li>
                                        <li><a href="javascript:void(0);">Nível 3</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="javascript:void(0);">
                                        <span>Nível 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript:void(0);">
                                <span>Nível 1</span>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

    </div>
</div>