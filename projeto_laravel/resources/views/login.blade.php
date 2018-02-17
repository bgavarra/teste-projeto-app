<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Testando rota de login</h1>
      <div>
        <form method="POST" action="{{route('')}}">
          {!! csrf_field() !!}

          <div>
              Email
              <input type="email" name="email" value="{{ old('email') }}">
          </div>

          <div>
              Password
              <input type="password" name="password" id="password">
          </div>

          <div>
              <input type="checkbox" name="remember"> Remember Me
          </div>

          <div>
              <button type="submit">Login</button>
          </div>
        </form>
      </div>
  </body>
</html>
