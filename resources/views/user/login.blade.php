<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Bilateral Exchange Portal - Register</title>
  <meta name="description"
    content="Sign in or register for the Europe India Foundation for Excellence (EIFE) Bilateral Academic Exchange and Course Learning Portal.">
  <meta name="keywords"
    content="Bilateral Exchange, Student Login, Registration, E-Learning Portal, Study Abroad, Credits Validation">
  <meta name="author" content="EIFE">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

  <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<<body class="bg-light d-flex align-items-center justify-content-center min-vh-100">

  <div class="container p-3">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-5">

        <!-- Centered Logo -->
        <div class="text-center mb-4">
          <a href="/">
            <img src="https://eife.org/wp-content/uploads/2019/05/eife_logo-1.png" alt="EIFE Logo" style="height: 55px; object-fit: contain;">
          </a>
        </div>

        @if(session('success'))
        <div class="alert alert-success shadow-sm rounded-3">
            <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
        </div>
        @endif

        @if(session('error') || $errors->any())
        <div class="alert alert-danger shadow-sm rounded-3">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('error') ?? 'Please check the form below for errors.' }}
        </div>
        @endif

        <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
          
          <!-- Auth Navigation Tabs -->
          <div class="card-header bg-white p-0 border-bottom">
            <ul class="nav nav-tabs nav-justified border-0" id="authTabs" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active fw-bold text-dark border-0 py-3 {{ request('tab') == 'register' ? '' : 'active' }}" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-pane" type="button" role="tab" aria-controls="login-pane" aria-selected="true">Sign In</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link fw-bold text-dark border-0 py-3 {{ request('tab') == 'register' ? 'active' : '' }}" id="register-tab" data-bs-toggle="tab" data-bs-target="#register-pane" type="button" role="tab" aria-controls="register-pane" aria-selected="false">Register</button>
              </li>
            </ul>
          </div>

          <div class="card-body p-4 p-sm-5">
            <div class="tab-content" id="authTabsContent">
              
              <!-- SIGN IN PANE -->
              <div class="tab-pane fade {{ request('tab') == 'register' ? '' : 'show active' }}" id="login-pane" role="tabpanel" aria-labelledby="login-tab">
                <div class="text-center mb-4">
                  <h4 class="fw-bold">Welcome Back</h4>
                  <p class="text-muted small">Sign in to continue your learning journey.</p>
                </div>

                <a href="{{ route('google.login') }}" class="btn btn-outline-dark w-100 py-2.5 mb-3 fw-semibold rounded-3 d-flex align-items-center justify-content-center">
                  <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" style="height: 20px; width: 20px;" class="me-2">
                  Continue with Google
                </a>

                <div class="d-flex align-items-center mb-4">
                  <hr class="flex-grow-1">
                  <span class="mx-3 text-muted small">or sign in with email</span>
                  <hr class="flex-grow-1">
                </div>

                <form method="POST" action="{{ route('login.submit') }}" id="loginForm">
                  @csrf
                  <div class="mb-3">
                    <label for="email" class="form-label small fw-semibold text-muted">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control form-control-lg bg-light @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus placeholder="name@example.com">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                  </div>

                  <div class="mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                      <label for="password" class="form-label small fw-semibold text-muted">Password</label>
                      <a href="#" class="small text-decoration-none text-primary-blue">Forgot Password?</a>
                    </div>
                    <div class="input-group">
                      <input type="password" name="password" id="password" class="form-control form-control-lg bg-light" required placeholder="Enter your password">
                      <button class="btn btn-light border" type="button" onclick="togglePassword('password', this)"><i class="bi bi-eye"></i></button>
                    </div>
                  </div>

                  <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label small text-muted cursor-pointer" for="remember">Remember me on this device</label>
                  </div>

                  <button type="submit" class="btn btn-primary-blue btn-lg w-100 shadow-sm fw-semibold rounded-3" id="loginBtn">
                    Sign In
                  </button>
                </form>
              </div>

              <!-- REGISTER PANE -->
              <div class="tab-pane fade {{ request('tab') == 'register' ? 'show active' : '' }}" id="register-pane" role="tabpanel" aria-labelledby="register-tab">
                <div class="text-center mb-4">
                  <h4 class="fw-bold">Create an Account</h4>
                  <p class="text-muted small">Join EIFE to access international exchange courses.</p>
                </div>

                <a href="{{ route('google.login') }}" class="btn btn-outline-dark w-100 py-2.5 mb-3 fw-semibold rounded-3 d-flex align-items-center justify-content-center">
                  <img src="https://www.svgrepo.com/show/475656/google-color.svg" alt="Google" style="height: 20px; width: 20px;" class="me-2">
                  Sign up with Google
                </a>

                <div class="d-flex align-items-center mb-4">
                  <hr class="flex-grow-1">
                  <span class="mx-3 text-muted small">or register with email</span>
                  <hr class="flex-grow-1">
                </div>

                <form method="POST" action="{{ route('register.submit') }}" id="registerForm">
                  @csrf
                  <div class="row g-2 mb-3">
                    <div class="col-sm-6">
                      <label class="form-label small fw-semibold text-muted">First Name</label>
                      <input type="text" name="first_name" class="form-control bg-light @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" required placeholder="John">
                      @error('first_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="col-sm-6">
                      <label class="form-label small fw-semibold text-muted">Last Name</label>
                      <input type="text" name="last_name" class="form-control bg-light @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" required placeholder="Doe">
                      @error('last_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                  </div>

                  <div class="mb-3">
                    <label class="form-label small fw-semibold text-muted">Email Address</label>
                    <input type="email" name="email" class="form-control bg-light @error('email') is-invalid @enderror" value="{{ old('email') }}" required placeholder="john@example.com">
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                  </div>

                  <div class="mb-3">
                    <label class="form-label small fw-semibold text-muted">Phone Number</label>
                    <input type="tel" name="phone" class="form-control bg-light @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required placeholder="+91 9876543210">
                    @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                  </div>

                  <div class="mb-3">
                    <label class="form-label small fw-semibold text-muted">Password</label>
                    <div class="input-group">
                      <input type="password" name="password" id="regPassword" class="form-control bg-light @error('password') is-invalid @enderror" required placeholder="Create a strong password">
                      <button class="btn btn-light border" type="button" onclick="togglePassword('regPassword', this)"><i class="bi bi-eye"></i></button>
                      @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                  </div>

                  <div class="mb-4 form-check">
                    <input type="checkbox" class="form-check-input" id="regTerms" name="terms" required>
                    <label class="form-check-label small text-muted cursor-pointer" for="regTerms">I agree to the Terms of Service & Privacy Policy</label>
                  </div>

                  <button type="submit" class="btn btn-primary-blue btn-lg w-100 shadow-sm fw-semibold rounded-3" id="registerBtn">
                    Create Account
                  </button>
                </form>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function togglePassword(inputId, btn) {
      const input = document.getElementById(inputId);
      const icon = btn.querySelector('i');
      if (input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('bi-eye', 'bi-eye-slash');
      } else {
        input.type = 'password';
        icon.classList.replace('bi-eye-slash', 'bi-eye');
      }
    }

    // Add loading states
    document.getElementById('loginForm').addEventListener('submit', function() {
      const btn = document.getElementById('loginBtn');
      btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Signing In...';
      btn.disabled = true;
    });

    document.getElementById('registerForm').addEventListener('submit', function() {
      const btn = document.getElementById('registerBtn');
      btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Creating Account...';
      btn.disabled = true;
    });

    // Make Tabs switch visually (Bootstrap handles the DOM part via data-bs-toggle)
    const urlParams = new URLSearchParams(window.location.search);
    if(urlParams.get('tab') === 'register') {
        var triggerEl = document.querySelector('#register-tab')
        bootstrap.Tab.getOrCreateInstance(triggerEl).show()
    }
  </script>
</body>
</html>
