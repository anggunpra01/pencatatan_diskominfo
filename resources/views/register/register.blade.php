@extends('layouts.navbar')

@section('container')
  <div class="row">
    <div class="text-center">
      <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
  
    <form action="/register" method="POST">
      @csrf
      <div class="form-group row  justify-content-center">
          <div class="col-sm-3 mb-5 mb-sm-3">
              <input type="text" class="form-control form-control-user" id="nip" name="nip"
                  placeholder="NIP">
          </div>
          <div class="col-sm-3">
              <input type="text" class="form-control form-control-user" id="username" name="username"
                  placeholder="Username">
          </div>
      </div>
      <div class="form-group row  justify-content-center">
        <div class="col-sm-3 mb-5 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="nama" name="nama"
                placeholder="Nama">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-user" id="jabatan" name="jabatan"
                placeholder="Jabatan">
        </div>
      </div>
      <div class="form-group row  justify-content-center">
        <div class="col-sm-3 mb-5 mb-sm-3">
          <label for="floatingInput">Nama Bidang</label>
          <select class="form-select" id="nama_bidang" name="nama_bidang" aria-label="Floating label select example" placeholder="Nama Bidang">
          <option value="SEKERTARIAT">SEKERTARIAT</option>
          <option value="BIDANG E-GOVERMENT">BIDANG E-GOVERMENT</option>
          <option value="BIDANG APLIKASI INFORMATIKA">BIDANG APLIKASI INFORMATIKA</option>
          <option value="UPTD PUSAT LAYANAN DIGITAL DATA DAN INFORMASI GEOSPASIAL">UPTD PUSAT LAYANAN DIGITAL DATA DAN INFORMASI GEOSPASIAL</option>
          <option value="BIDANG STATISTIK">BIDANG STATISTIK</option>
          <option value="BIDANG PERSANDIAN DAN KEAMANAN INFORMASI">BIDANG PERSANDIAN DAN KEAMANAN INFORMASI</option>
        </select>
        </div>
        <div class="col-sm-3">
          <label for="floatingInput">Hak Akses</label>
            <select class="form-select" id="hak_akses" name="hak_akses" aria-label="Floating label select example" placeholder="Hak Akses">
              <option value="Admin">Admin</option>
              <option value="User">User</option>
              <option value="Views">Viewer</option>
            </select>
  
        </div>
      </div>
  
      <div class="form-group row  justify-content-center">
          <div class="col-sm-3 mb-5 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="no_hp" name="no_hp"
                placeholder="Nomor HP">
        </div>
          <div class="col-sm-3">
              <input type="password" class="form-control form-control-user"
                  id="password" name="password" placeholder="password">
          </div>
      </div>
      <button type="submit" class="col-sm-3 btn btn-dark btn-user btn-block  justify-content-center">Register</button>
    </form>
  </div>


@endsection
