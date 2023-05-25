<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="{{asset('css/login.css')}}" />
    <title>Investment App</title>
  </head>
  <body>
    <div class="grid">
      <div class="col-left">

        <form method="POST" action="{{route('auth')}}" >
          @csrf

          <div class="form-group login-label">
            <p>Login</p>
          </div>

          <div class="form-group">
            <input type="text" placeholder="Email" name="email" value="{{old('email')}}" />
          </div>

          <div class="form-group">
            <input type="password" placeholder="Password" name="password" />
          </div>

          <div class="form-group">
            @error('email')
              <p>{{$message}}</p>
            @enderror
          </div>

          <div class="form-group">
            <button type="submit">Login</button>
          </div>

          <div class="form-group sign-up-label">
            <p>Don't have an account? <a href="{{route('register')}}">Sign up</a></p>
          </div>

        </form>

      </div>
      <div class="col-right">
        <p>Investment App</p>
      </div>
    </div>
  </body>
</html>
