@extends('layouts.navbar')

@section('container')
<div class="row">
  <div class="col-lg-3">

    @if (session()->has('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('loginError'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


      <main class="form-signin w-100 m-auto">
          <form action="\login" method="post">  
            @csrf        
            <div class="form-floating">
              <label for="nip">NIP</label>
              @error('nip')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
              <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="NIP" autofocus required>
            </div>
            <div class="form-floating">
              <label for="password">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div><br>
            <button class="w-100 btn btn-lg btn-dark justify-content-center" type="submit">Sign in</button>
          </form>
        </main>
     
  </div>
</div>

@endsection
    
