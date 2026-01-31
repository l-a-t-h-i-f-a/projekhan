

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link href="{{asset('userpage')}}/assets/img/logopondok.png" rel="icon">
  <link href="{{asset('userpage')}}/assets/img/logopondok.png" rel="apple-touch-icon">
    <link rel="stylesheet" href="{{ asset('loginpage/style.css') }}" />
    <title>Login Register</title>
  </head>

  <body>
    <div class="container" id="container">
      <div class="form-container sign-up">
        <form method="POST" action="{{ route('register') }}">
       @csrf
          <h1>Create Account</h1><br>
          <input type="text" name="name" placeholder="Username" class="login__input" required>
          <input type="email" name="email" placeholder="Email" class="login__input" required>
          <input type="password" name="password" placeholder="Password" class="login__input" required>
          <input type="password" name="password_confirmation" placeholder="Password" class="login__input" required>
          <button>{{ __('Sign Up') }}</button>
        </form>
      </div>
      <div class="form-container sign-in">
        <form method="POST" action="">
        @csrf
          <h1>Sign In</h1><br>
          <input type="email" name="email" placeholder="Email" class="login__input" required>
          <input type="password" name="password" placeholder="Password" class="login__input" required>
          <a href="{{ route('password.request') }}">Forget Your Password?</a>
          <button>{{ __('Sign In') }}</button>
        </form>
      </div>
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of site features</p>
            <button class="hidden" id="login">Sign In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hello!</h1>
            <p>
              Register with your personal details to use all of site features
            </p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('loginpage/script.js') }}"></script>
  </body>
</html>

