<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT Indonesia Maju | Akses Manajemen</title>

    <!-- CSS Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar {
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(10px);
        }

        .hero {
            background: linear-gradient(135deg, #003366 0%, #0059b3 100%);
            color: white;
            padding: 120px 0 100px;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQ0MCIgaGVpZ2h0PSI3NjUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IHgxPSIwJSIgeTE9IjAlIiB4Mj0iMTAwJSIgeTI9IjEwMCUiIGlkPSJhIj48c3RvcCBzdG9wLWNvbG9yPSIjRkZGIiBzdG9wLW9wYWNpdHk9Ii4wNSIgb2Zmc2V0PSIwJSIvPjxzdG9wIHN0b3AtY29sb3I9IiNGRkYiIHN0b3Atb3BhY2l0eT0iMCIgb2Zmc2V0PSIxMDAlIi8+PC9saW5lYXJHcmFkaWVudD48L2RlZnM+PHBhdGggZD0iTTAgMGgxNDQwdjc2NUgweiIgZmlsbD0idXJsKCNhKSIgZmlsbC1ydWxlPSJldmVub2RkIi8+PC9zdmc+');
            opacity: 0.4;
        }

        .hero-content {
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .hero p {
            font-size: 1.25rem;
            opacity: 0.9;
            max-width: 600px;
            margin: 0 auto;
        }

        .btn-custom {
            padding: 12px 30px;
            font-size: 1.1rem;
            border-radius: 30px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .features-section {
            padding: 80px 0;
            background: #fff;
        }

        .feature-card {
            padding: 30px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: #0059b3;
            margin-bottom: 20px;
        }

        .navbar-nav .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .nav-link {
            position: relative;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: #003366;
            transition: all 0.3s ease;
        }

        .nav-link:hover::after {
            width: 100%;
            left: 0;
        }

        .footer {
            background-color: #003366;
            color: white;
            padding: 30px 0;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-white" href="#">
                <i class="fas fa-shield-alt me-2"></i>INDONESIA MAJU
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                               data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}" 
                                     class="rounded-circle" alt="User Image" width="30">
                                <span class="ms-2 text-white">{{ Auth::user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="{{ route('dashboard') }}">
                                        <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt me-2"></i>Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item ">
                            <a href="{{ route('login') }}" class="btn btn-outline-primary text-white me-2">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="btn btn-primary text-white">Register</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <div data-aos="fade-up" data-aos-duration="1000">
                <h1>Sistem Manajemen Akses Modern</h1>
                <p class="mt-3">Kelola pengguna, peran, dan hak akses dengan efisien dan aman menggunakan platform terpercaya kami.</p>
                <div class="mt-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="btn btn-light text-primary btn-custom me-2">
                            <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                        </a>
                    @else
                        <a href="{{ route('register') }}" class="btn btn-light text-primary btn-custom me-2">
                            <i class="fas fa-user-plus me-2"></i>Daftar Sekarang
                        </a>
                        <a href="{{ route('login') }}" class="btn btn-outline-light btn-custom">
                            <i class="fas fa-sign-in-alt me-2"></i>Masuk
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <i class="fas fa-lock feature-icon"></i>
                        <h3 class="h4 mb-3">Keamanan Tinggi</h3>
                        <p class="text-muted">Sistem keamanan berlapis untuk melindungi data dan akses pengguna Anda.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <i class="fas fa-users feature-icon"></i>
                        <h3 class="h4 mb-3">Manajemen Peran</h3>
                        <p class="text-muted">Atur peran dan izin pengguna dengan mudah dan fleksibel.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <i class="fas fa-chart-line feature-icon"></i>
                        <h3 class="h4 mb-3">Monitoring Real-time</h3>
                        <p class="text-muted">Pantau aktivitas pengguna dan akses sistem secara real-time.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} PT indnesia maju. All rights reserved.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>
