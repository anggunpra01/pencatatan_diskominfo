<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>IT DIARY</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Diskominfo Jabar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/login')?'class=active':'' }}" aria-current="page" href="/login">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/register')?'active':'' }}" href="/register">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('/dashboard')?'active':'' }}" href="/dashboard">Dashbord</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </body>
  <div class="container mt-4">
    @yield('container')
  </div>
</html>
