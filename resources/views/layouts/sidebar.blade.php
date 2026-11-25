
<nav id="sidebar" class="sidebar-wrapper">

    <style>
    </style>

    {{-- PERFIL --}}
    <a href="{{ route('profile.index') }}" wire:navigate>
        <div class="sidebar-profile">

            <img src="{{ url('assets/images/user6.png') }}"
                 class="img-shadow img-3x me-3 rounded-5"
                 alt="Utilizador">

            <div class="m-0">
                <h5 class="mb-1 profile-name text-nowrap text-truncate">
                    {{ auth()->user()->name ?? 'Administrador' }}
                </h5>

                <p class="m-0 small profile-name text-nowrap text-truncate">
                    Administrador
                </p>
            </div>
        </div>
    </a>

    {{-- MENU --}}
    <div class="sidebarMenuScroll">
        <ul class="sidebar-menu">

            {{-- PAINEL --}}
            <li class="{{ request()->routeIs('dashboard') ? 'active current-page' : '' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="ri-home-6-line"></i>
                    <span class="menu-text">Painel Hospitalar</span>
                </a>
            </li>

             {{-- PACIENTES --}}
            <li class="treeview {{ request()->routeIs('patients.*') ? 'active open' : '' }}">
                <a href="#!">
                    <i class="ri-heart-pulse-line"></i>
                    <span class="menu-text">Pacientes</span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('patients.index') }}" wire:navigate>
                            Lista de Pacientes
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('patients.create') }}" wire:navigate>
                            Novo Paciente
                        </a>
                    </li>
                </ul>
            </li>


             {{-- TRIAGEM --}}
            <li class="treeview {{ request()->routeIs('triage.*') ? 'active open' : '' }}">
                <a href="#!">
                    <i class="ri-stethoscope-line"></i>
                    <span class="menu-text">Triagem</span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="{{ route('triage.index') }}">Lista de Triagem</a></li>
                    <li><a href="{{ route('triage.create') }}">Nova Triagem</a></li>
                </ul>
            </li>

             {{-- CONSULTAS --}}
            <li class="treeview {{ request()->routeIs('appointments.*') ? 'active open' : '' }}">
                <a href="#!">
                    <i class="ri-dossier-line"></i>
                    <span class="menu-text">Consultas</span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('appointments.index') }}" wire:navigate>
                            Lista de Consultas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('appointments.create') }}" wire:navigate>
                             Consulta
                        </a>
                    </li>
                </ul>
            </li>


              {{-- ENFERMEIROS --}}
            <li class="treeview {{ request()->routeIs('nurses.*') ? 'active open' : '' }}">
                <a href="#!">
                    <i class="ri-stethoscope-line"></i>
                    <span class="menu-text">Enfermeiros</span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="{{ route('nurses.index') }}">Lista de Enfermeiros</a></li>
                    <li><a href="{{ route('nurses.create') }}">Cadastro </a></li>
                </ul>
            </li>



            {{-- MÉDICOS --}}
            <li class="treeview {{ request()->routeIs('doctors.*') ? 'active open' : '' }}">
                <a href="#!">
                    <i class="ri-stethoscope-line"></i>
                    <span class="menu-text">Médicos</span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="{{ route('doctors.index') }}">Lista de Médicos</a></li>
                    <li><a href="{{ route('doctors.create') }}">Cadastro</a></li>
                </ul>
            </li>


              {{-- Exame --}}
            <li class="treeview {{ request()->routeIs('nurses.*') ? 'active open' : '' }}">
                <a href="#!">
                   <i class="ri-dossier-line"></i>
                    <span class="menu-text">Exame</span>
                </a>

                <ul class="treeview-menu">
                    <li><a href="#">Lista de Exames</a></li>
                    <li><a href="#">Novo Exame</a></li>
                </ul>
            </li>

             {{-- ESpecialidades --}}
            <li class="treeview {{ request()->routeIs('specialties.*') ? 'active open' : '' }}">
                <a href="#!">
                    <i class="ri-building-2-line"></i>
                    <span class="menu-text">Especialidades</span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('specialties.index') }}" wire:navigate>
                            Lista de especialidades
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('specialties.create') }}" wire:navigate>
                            Nova Especialidade
                        </a>
                    </li>
                </ul>
            </li>


          
           

           

            {{-- FUNCIONÁRIOS --}}
            <li class="treeview {{ request()->routeIs('employees.*') ? 'active open' : '' }}">
                <a href="#!">
                    <i class="ri-nurse-line"></i>
                    <span class="menu-text">Funcionários</span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('employees.index') }}" wire:navigate>
                            Lista de Funcionários
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('employees.create') }}" wire:navigate>
                            Novo Funcionário
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/attendance') }}" wire:navigate>
                            Presenças
                        </a>
                    </li>
                </ul>
            </li>

           
            {{-- AGENDAMENTOS --}}
            <li class="treeview {{ request()->routeIs('schedules.*') ? 'active open' : '' }}">
                <a href="#!">
                    <i class="ri-calendar-schedule-line"></i>
                    <span class="menu-text">Agendamentos</span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('schedules.index') }}" wire:navigate>
                            Lista de Agendamentos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('schedules.create') }}" wire:navigate>
                            Novo Agendamento
                        </a>
                    </li>
                </ul>
            </li>

           

            {{-- FINANCEIRO --}}
            <li class="treeview {{ request()->routeIs('invoices.*', 'payments.*', 'expenses.*', 'taxes.*') ? 'active open' : '' }}">
                <a href="#!">
                    <i class="ri-secure-payment-line"></i>
                    <span class="menu-text">Financeiro</span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('invoices.index') }}" wire:navigate>
                            Facturas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('payments.index') }}" wire:navigate>
                            Pagamentos
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('expenses.index') }}" wire:navigate>
                            Despesas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('taxes.index') }}" wire:navigate>
                            Impostos
                        </a>
                    </li>
                </ul>
            </li>

            {{-- ACTIVIDADES --}}
            <li class="{{ request()->routeIs('activities.index') ? 'active' : '' }}">
                <a href="{{ route('activities.index') }}">
                    <i class="ri-history-line"></i>
                    <span class="menu-text">Actividades</span>
                </a>
            </li>

            {{-- RELATÓRIOS --}}
            <li class="treeview {{ request()->routeIs('reports.*') ? 'active open' : '' }}">
                <a href="#!">
                    <i class="ri-bar-chart-line"></i>
                    <span class="menu-text">Relatórios</span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('reports.expenses') }}" wire:navigate>
                            Relatório de Despesas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('reports.invoices') }}" wire:navigate>
                            Relatório de Facturas
                        </a>
                    </li>
                </ul>
            </li>

            {{-- CONFIGURAÇÕES --}}
            <li class="treeview {{ request()->routeIs('settings.*') ? 'active open' : '' }}">
                <a href="#!">
                    <i class="ri-settings-5-line"></i>
                    <span class="menu-text">Configurações</span>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="{{ route('settings.index') }}">Configurações Gerais</a>
                    </li>
                    <li>
                        <a href="{{ route('settings.localization.index') }}" wire:navigate>
                            Localização
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('settings.theme.index') }}" wire:navigate>
                            Tema
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('settings.roles.roles') }}" wire:navigate>
                            Funções e Permissões
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('settings.roles.create-role') }}" wire:navigate>
                            Nova Função
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('settings.email') }}" wire:navigate>Email</a>
                    </li>
                    <li>
                        <a href="{{ route('settings.invoice-settings.index') }}" wire:navigate>
                            Configurações de Facturas
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('settings.notification') }}" wire:navigate>
                            Notificações
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('settings.password') }}" wire:navigate>
                            Palavra-passe
                        </a>
                    </li>
                </ul>
            </li>

            {{-- CALENDÁRIO --}}
            <li class="{{ request()->routeIs('calendar.index') ? 'active' : '' }}">
                <a href="{{ route('calendar.index') }}" wire:navigate>
                    <i class="ri-calendar-line"></i>
                    <span class="menu-text">Calendário</span>
                </a>
            </li>

        </ul>
    </div>

    

</nav>
