<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="#" class="brand-link text-center p-3">
    <i class="fas fa-shield-alt brand-image mr-2"></i>
    <span class="brand-text font-weight-bold">RBAC Panel</span>
  </a>

  <div class="sidebar">
    <nav class="mt-3">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu">
        <li class="nav-item">
          <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

        @canany(['view users', 'view roles', 'view permissions'])
          <li class="nav-header text-uppercase text-muted ml-2 mt-3">Administration</li>

          @can('view users')
            <li class="nav-item">
              <a href="{{ route('users.index') }}" class="nav-link {{ request()->routeIs('users.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-users"></i>
                <p>User Management</p>
              </a>
            </li>
          @endcan

          @can('view roles')
            <li class="nav-item">
              <a href="{{ route('roles.index') }}" class="nav-link {{ request()->routeIs('roles.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-user-shield"></i>
                <p>Role Management</p>
              </a>
            </li>
          @endcan

          @can('view permissions')
            <li class="nav-item">
              <a href="{{ route('permissions.index') }}" class="nav-link {{ request()->routeIs('permissions.*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-lock"></i>
                <p>Permissions</p>
              </a>
            </li>
          @endcan
        @endcanany
      </ul>
    </nav>
  </div>
</aside>

<style>
  .nav-sidebar .nav-item > .nav-link {
    margin-bottom: .2rem;
    transition: all 0.3s ease;
  }

  .nav-sidebar .nav-link:not(.active):hover {
    background-color: rgba(255, 255, 255, 0.1);
    transform: translateX(4px);
  }

  .nav-header {
    font-size: 0.8rem;
    letter-spacing: 0.5px;
  }

  .brand-link {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  }

  .nav-sidebar .nav-link.active {
    box-shadow: 0 2px 4px rgba(0,0,0,0.3);
  }
</style>
