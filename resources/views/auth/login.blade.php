<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | MyApp</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- AdminLTE -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>My</b>App</a>
  </div>

  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <h3 class="card-title">Login Panel</h3>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                 value="{{ old('email') }}" placeholder="Email" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
          </div>
        </div>
        @error('email')
        <div class="text-danger small mb-2">{{ $message }}</div>
        @enderror

        <!-- Password -->
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                 placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-lock"></span></div>
          </div>
        </div>
        @error('password')
        <div class="text-danger small mb-2">{{ $message }}</div>
        @enderror

        <!-- Remember Me and Submit -->
        <div class="row mb-3">
          <div class="col-8">
            <div class="form-check">
              <input type="checkbox" name="remember" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">Remember Me</label>
            </div>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
        </div>
      </form>

      @if (Route::has('password.request'))
      <p class="mb-1">
        <a href="{{ route('password.request') }}">Forgot your password?</a>
      </p>
      @endif

      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Register a new account</a>
      </p>

    </div>
  </div>
</div>

<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
