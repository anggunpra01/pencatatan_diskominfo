@extends('layouts.navbar')

@section('container')
<div class="row">
  <main class="col-md-5 position-absolute top-50 start-50 translate-middle">
    <form>
      <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
  
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div><br>

      <button class="w-100 btn btn-lg btn-warning" type="submit">Sign in</button>
  
    </form>
  </main>
</div>

@endsection
    
