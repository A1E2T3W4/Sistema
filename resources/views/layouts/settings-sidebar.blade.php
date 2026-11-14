<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li>
                    <a href="/dashboard">
                        <i class="fa fa-home back-icon"></i>
                        <span>Back to Home</span>
                    </a>
                </li>

                <li class="menu-title">Settings</li>

                <li class="{{ request()->is('settings') ? 'active' : '' }}">
                    <a href="/settings">
                        <i class="fa fa-building"></i>
                        <span>Institution Settings</span>
                    </a>
                </li>

                <li class="{{ request()->is('settings/localization') ? 'active' : '' }}">
                    <a href="/settings/localization">
                        <i class="fa fa-clock-o"></i>
                        <span>Localization</span>
                    </a>
                </li>

                <li class="{{ request()->is('settings/theme') ? 'active' : '' }}">
                    <a href="/settings/theme">
                        <i class="fa fa-picture-o"></i>
                        <span>Theme Settings</span>
                    </a>
                </li>

                <li class="{{ request()->is('settings/roles') ? 'active' : '' }}">
                    <a href="/settings/roles">
                        <i class="fa fa-key"></i>
                        <span>Roles and Permissions</span>
                    </a>
                </li>

                <li class="{{ request()->is('settings/email') ? 'active' : '' }}">
                    <a href="/settings/email">
                        <i class="fa fa-envelope-o"></i>
                        <span>Email Settings</span>
                    </a>
                </li>

                <li class="{{ request()->is('settings/invoice-settings') ? 'active' : '' }}">
                    <a href="/settings/invoice-settings">
                        <i class="fa fa-pencil-square-o"></i>
                        <span>Invoice Settings</span>
                    </a>
                </li>

              

                <li class="{{ request()->is('settings/notification') ? 'active' : '' }}">
                    <a href="/settings/notification">
                        <i class="fa fa-globe"></i>
                        <span>Notifications</span>
                    </a>
                </li>

                <li class="{{ request()->is('settings/password') ? 'active' : '' }}">
                    <a href="/settings/password">
                        <i class="fa fa-lock"></i>
                        <span>Change Password</span>
                    </a>
                </li>

                <li class="{{ request()->is('settings/leave-type') ? 'active' : '' }}">
                    <a href="/settings/leave-type">
                        <i class="fa fa-cogs"></i>
                        <span>Leave Types</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>