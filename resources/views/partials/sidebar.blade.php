<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/') }}">
                <div class="sidebar-brand-text mx-3">{{ __('Mostrar Datos') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('admin/dashboard') || request()->is('admin/dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.dashboard.index') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('Panel') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">




            <!-- team -->
            <li class="nav-item {{ request()->is('admin/teams') || request()->is('admin/teams') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.teams.index') }}">
                    <i class="fas fa-cogs"></i>
                    <span>{{ __('Equipos') }}</span></a>
            </li>

            <!-- player -->
            <li class="nav-item {{ request()->is('admin/players') || request()->is('admin/players') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.players.index') }}">
                    <i class="fas fa-cogs"></i>
                    <span>{{ __('Jugadores') }}</span></a>
            </li>

            <!-- game -->
            <li class="nav-item {{ request()->is('admin/games') || request()->is('admin/games') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('admin.games.index') }}">
                    <i class="fas fa-cogs"></i>
                    <span>{{ __('Partidos') }}</span></a>
            </li>
        </ul>