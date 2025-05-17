<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('home') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> {{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-user-plus"></i> {{ __('Register') }}</a>
                </li>
            @endif
        @else
            <!-- User Account Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" class="user-image img-circle elevation-2" alt="User Image" width="30">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li>
                        <div class="dropdown-item text-center user-header">
                            <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" class="img-circle elevation-2" alt="User Image" width="60">
                            <p class="mt-2 mb-0">{{ Auth::user()->name }}</p>
                            <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </div>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <span class="dropdown-item">
                            <i class="fas fa-user-tag mr-2"></i>
                            <strong>Role:</strong> {{ Auth::user()->getRoleNames()->first() }}
                        </span>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt mr-2"></i> {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        @endguest
    </ul>
</nav>