@extends('layouts.navbar')

@section('container')
<div class="row">
  <div class="text-center">
    <h1 class="h4 text-gray-900 mb-4">Please Log In!</h1>

  <form class="user ">
    <div class="form-group row  justify-content-center">
        <div class="col-sm-3 mb-5 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="exampleFirstName"
                placeholder="NIP">
        </div>
    </div>
    <div class="form-group row  justify-content-center">
      <div class="col-sm-3 mb-5 mb-sm-3">
          <input type="password" class="form-control form-control-user" id="exampleFirstName"
              placeholder="Password">
      </div>
    </div>
    <button class="col-sm-2 btn btn-dark btn-user btn-block  justify-content-center">Login</button>
  </form>
</div>

@endsection
    
