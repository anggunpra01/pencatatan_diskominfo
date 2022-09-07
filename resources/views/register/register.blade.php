@extends('layouts.navbar')

@section('container')
  <div class="row">
    <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
  
    <form class="user ">
      <div class="form-group row  justify-content-center">
          <div class="col-sm-3 mb-5 mb-sm-3">
              <input type="text" class="form-control form-control-user" id="exampleFirstName"
                  placeholder="NIP">
          </div>
          <div class="col-sm-3">
              <input type="text" class="form-control form-control-user" id="exampleLastName"
                  placeholder="Username">
          </div>
      </div>
      <div class="form-group row  justify-content-center">
        <div class="col-sm-3 mb-5 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="exampleFirstName"
                placeholder="Nama">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-user" id="exampleLastName"
                placeholder="Jabatan">
        </div>
      </div>
      <div class="form-group row  justify-content-center">
        <div class="col-sm-3 mb-5 mb-sm-3">
          <label for="floatingInput">Nama Bidang</label>
          <select class="form-select" id="floatingSelect" aria-label="Floating label select example" placeholder="Nama Bidang">
          <option value="1">SEKERTARIAT</option>
          <option value="2">BIDANG E-GOVERMENT</option>
          <option value="3">BIDANG APLIKASI INFORMATIKA</option>
          <option value="4">UPTD PUSAT LAYANAN DIGITAL DATA DAN INFORMASI GEOSPASIAL</option>
          <option value="5">BIDANG STATISTIK</option>
          <option value="6">BIDANG PERSANDIAN DAN KEAMANAN INFORMASI</option>
        </select>
        </div>
        <div class="col-sm-3">
          <label for="floatingInput">Hak Akses</label>
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" placeholder="Hak Akses">
              <option value="1">Admin</option>
              <option value="2">User</option>
              <option value="3">Viewer</option>
            </select>
  
        </div>
      </div>
  
      <div class="form-group row  justify-content-center">
          <div class="col-sm-3 mb-5 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="exampleLastName"
                placeholder="Nomor HP">
        </div>
          <div class="col-sm-3">
              <input type="password" class="form-control form-control-user"
                  id="exampleRepeatPassword" placeholder="Password">
          </div>
      </div>
      <button class="col-sm-3 btn btn-dark btn-user btn-block  justify-content-center">Register</button>
    </form>
  </div>


@endsection


{{-- <main class="col-md-5 position-absolute top-50 start-50 translate-middle">
  <form>
    <h1 class="h3 mb-3 fw-normal">Please Register</h1>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Nip">
      <label for="floatingInput">Nip</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPassword" placeholder="Nama">
      <label for="floatingPassword">Nama</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Jabatan">
      <label for="floatingInput">jabatan</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPassword" placeholder="Nama Bidang">
      <label for="floatingPassword">Nama Bidang</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPassword" placeholder="Nomor Telepon">
      <label for="floatingPassword">Nomor Telepon</label>
    </div>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPassword" placeholder="Hak akses">
      <label for="floatingPassword">Hak Akses</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">password</label>
    </div>
    <button class="w-100 btn btn-lg btn-warning" type="submit">Register</button>

  </form>
</main> --}}