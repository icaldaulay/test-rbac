<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register | MyApp</title>

  <!-- Google Fonts & Icons -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/all.min.css">

  <!-- Bootstrap & AdminLTE -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

  <!-- Custom CSS for Background Animation -->
  <style>
    body {
      /* background: linear-gradient(-45deg, #1e3c72, #2a5298, #1e3c72, #0f2027); */
      background-size: 400% 400%;
      animation: gradientBG 15s ease infinite;
      font-family: 'Source Sans Pro', sans-serif;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
      padding: 0;
    }

    @keyframes gradientBG {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .register-box {
      width: 100%;
      max-width: 400px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .card {
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    }
  </style>
</head>
<body class="hold-transition">

<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Register</b> Now</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Create your account</p>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="input-group mb-3">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" 
                 value="{{ old('name') }}" placeholder="Full Name" required autofocus>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-user"></span></div>
          </div>
        </div>
        @error('name')
        <div class="text-danger small mb-2">{{ $message }}</div>
        @enderror

        <!-- Email -->
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                 value="{{ old('email') }}" placeholder="Email" required>
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

        <!-- Confirm Password -->
        <div class="input-group mb-3">
          <input type="password" name="password_confirmation" class="form-control" 
                 placeholder="Confirm Password" required>
          <div class="input-group-append">
            <div class="input-group-text"><span class="fas fa-lock"></span></div>
          </div>
        </div>

        <!-- Submit -->
        <div class="row">
          <div class="col-8">
            <a href="{{ route('login') }}">Already have an account?</a>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>
</body>
</html>
