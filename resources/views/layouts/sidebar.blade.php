<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">

        <div id="sidebar-menu" class="sidebar-menu">
            <ul>

                <li class="menu-title">Principal</li>

                <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                    <a href="/dashboard">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="{{ request()->is('doctors') ? 'active' : '' }}">
                    <a href="/doctors">
                        <i class="fa fa-user-md"></i>
                        <span>Médicos</span>
                    </a>
                </li>

                <li class="{{ request()->is('patients') ? 'active' : '' }}">
                    <a href="/patients">
                        <i class="fa fa-wheelchair"></i>
                        <span>Pacientes</span>
                    </a>
                </li>

                <li class="{{ request()->is('appointments') ? 'active' : '' }}">
                    <a href="/appointments">
                        <i class="fa fa-calendar"></i>
                        <span>Consultas</span>
                    </a>
                </li>

                <li class="{{ request()->is('schedule') ? 'active' : '' }}">
                    <a href="/schedule">
                        <i class="fa fa-calendar-check-o"></i>
                        <span>Horários dos Médicos</span>
                    </a>
                </li>

                <li class="{{ request()->is('departments') ? 'active' : '' }}">
                    <a href="/departments">
                        <i class="fa fa-hospital-o"></i>
                        <span>Departamentos</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-user"></i>
                        <span>Funcionários</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="display: none;">
                        <li class="{{ request()->is('employees') ? 'active' : '' }}">
                            <a href="/employees">Lista de Funcionários</a>
                        </li>

                        <li class="{{ request()->is('attendance') ? 'active' : '' }}">
                            <a href="/attendance">Assiduidade</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-money"></i>
                        <span>Contas</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="display: none;">
                        <li class="{{ request()->is('invoices') ? 'active' : '' }}">
                            <a href="/invoices">Facturas</a>
                        </li>

                        <li class="{{ request()->is('payments') ? 'active' : '' }}">
                            <a href="/payments">Pagamentos</a>
                        </li>

                        <li class="{{ request()->is('expenses') ? 'active' : '' }}">
                            <a href="/expenses">Despesas</a>
                        </li>

                        <li class="{{ request()->is('taxes') ? 'active' : '' }}">
                            <a href="/taxes">Impostos</a>
                        </li>

                    </ul>
                </li>



                <li class="{{ request()->is('activities') ? 'active' : '' }}">
                    <a href="/activities">
                        <i class="fa fa-bell-o"></i>
                        <span>Actividades</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-flag-o"></i>
                        <span>Relatórios</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="display: none;">
                        <li><a href="/expense-reports">Relatório de Despesas</a></li>
                        <li><a href="/invoices">Relatório de Facturas</a></li>
                    </ul>
                </li>

                <li class="{{ request()->is('settings') ? 'active' : '' }}">
                    <a href="/settings">
                        <i class="fa fa-cog"></i>
                        <span>Configurações</span>
                    </a>
                </li>



                <li class="{{ request()->is('calendar') ? 'active' : '' }}">
                    <a href="/calendar">
                        <i class="fa fa-calendar"></i>
                        <span>Calendário</span>
                    </a>
                </li>

                <li class="menu-title">Extras</li>

                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-columns"></i>
                        <span>Páginas</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <ul style="display: none;">
                        <li><a href="/login">Iniciar Sessão</a></li>
                        <li><a href="/forgot-password">Recuperar Palavra-passe</a></li>
                        <li><a href="/change-password">Alterar Palavra-passe</a></li>
                        <li><a href="/lock-screen">Bloqueio de Ecrã</a></li>
                        <li><a href="/profile">Perfil</a></li>

                    </ul>
                </li>

                <li class="submenu">
                    <a href="javascript:void(0);">
                        <i class="fa fa-share-alt"></i>
                        <span>Vários Níveis</span>
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