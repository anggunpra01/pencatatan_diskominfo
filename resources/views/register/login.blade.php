@extends('layouts.navbar')

@section('container')

<div class="row justify-content-center">
  <div class="p-5 mb-5 w-25 mx-auto rounded-3 bg-primary bg-gradient text-white">
  <center><div class="img" widht="200">
    <img src="img/logoDiskominfo.png" alt="Diskominfo"  height="50">
  </div></center>
  <div class="text-center">
    <h1 class="h4 text-gray-900 mb-4"> Please Login!</h1>
  </div>
  <div class="col-lg-15">

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


      <main class="form-signin ">
          <form action="\login" method="post">  
            @csrf        
            <div class="col-sm-15 mb-5 mb-sm-3">
                @error('nip')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
                @enderror
                <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="NIP" autofocus required>
            </div>
            <div class="col-sm-15 mb-5 mb-sm-3">
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
              </div>
              <button class="w-100 btn btn-lg btn-dark" type="submit">Masuk</button>
          </form>
        </main>
     
  </div>
  </div>
</div>

@endsection
    
