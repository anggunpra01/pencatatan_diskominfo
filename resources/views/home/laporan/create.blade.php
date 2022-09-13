@extends('home.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Laporan</h1>
</div>
<div class="row">

    {{-- pencatat --}}
    <div class="pencatat">

        <h3 class="h6 text-gray-100 mb-2">Pencatat</h3>
    
      <form class="user ">
        <div class="form-group row ">
            <div class="col-sm-3 mb-5 mb-sm-3">
                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                    placeholder="Nip Pencatat">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-user" id="exampleLastName"
                    placeholder="Nama Pencatat">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    
                    <span class="input-group-text"> <span data-feather="calendar"></span></span>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                      <label for="floatingInputGroup1">Tanggal Mencatat</label>
                    </div>
                  </div>
          </div>
        </div>
      
    </div>
    {{-- endpencatat --}}
        {{-- pelapor --}}
        <div class="pelapor">
        
          <div class="text">
            <h3 class="h6 text-gray-100 mb-2">Pelapor</h3>
          </div>
        
          <form class="user ">
              <div class="form-group row">
                  <div class="col-sm-3 mb-5 mb-sm-3">
                      <input type="text" class="form-control form-control-user" id="exampleFirstName"
                          placeholder="Nama Pelapor">
                  </div>
              
              <div class="form-group row  ">
                <div class="col-sm-3 mb-5 mb-sm-3">
                  <label for="floatingInput">Nama Bidang</label>
                  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" placeholder="Nama Bidang">
                  <option value="KEU">KEUANGAN</option>
                  <option value="PRC">PERENCANAAN</option>
                  <option value="KPG">KEPEGAWAIAN</option>
                  <option value="EGV">BIDANG E-GOVERMENT</option>
                  <option value="APT">BIDANG APLIKASI INFORMATIKA</option>
                  <option value="JDS">UPTD PUSAT LAYANAN DIGITAL DATA DAN INFORMASI GEOSPASIAL</option>
                  <option value="STS">BIDANG STATISTIK</option>
                  <option value="SKM">BIDANG PERSANDIAN DAN KEAMANAN INFORMASI</option>
                </select>
                </div>
              </div>
              <div class="col-sm-3 mb-5 mb-sm-3">
                  <input type="text" class="form-control form-control-user" id="exampleFirstName"
                      placeholder="Nomor Hp">
              </div>
          </div>
          <div class=" col-sm-3 mb-5 mb-sm-3 ">
            <input type="text" class="form-control form-control-user" style="height: 200px" id="exampleFirstName "
                placeholder="Permasalahan">
        </div>
      </div>
      {{-- endpelapor --}}

    {{-- eksekutor --}}
    <div class="eksekutor">
      <h3 class="h6 text-gray-100 mb-2">Eksekutor</h3>
      </div>
      <div class="form-group row ">
        <div class="col-sm-3 mb-5 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="exampleFirstName"
                placeholder="Nip Eksekutor">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-user" id="exampleLastName"
                placeholder="Nama Eksekutor">
        </div>
      </div>
      <div class="form-group row ">
        <div class="col-sm-3 mb-5 mb-sm-3">
            <label for="floatingInput">Kategori</label>
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" placeholder="Hak Akses">
              <option value="1">Jaringan</option>
              <option value="2">CCTV</option>
              <option value="3">Komputer</option>
              <option value="1">Printer</option>
              <option value="2">Aplikasi</option>
            </select>
        </div>
        <div class="col-sm-3">
            <label for="floatingInput">Status</label>
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" placeholder="Hak Akses">
              <option value="1">Self Service</option>
              <option value="2">Vendor</option>
            </select>
        </div>
        <div class="col-sm-3">
          <div class="input-group">
                  
              <span class="input-group-text"> <span data-feather="calendar"></span></span>
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                <label for="floatingInputGroup1">Tanggal Selesai</label>
              </div>
          </div>
      </div>
      </div>
      <div class="form-group row ">
        <div class=" col-sm-3 mb-5 mb-sm-3 ">
            <input type="text" class="form-control form-control-user" style="height: 200px " id="exampleFirstName "
                placeholder="Solusi Deskripsi">
        </div>
        
      </div>
    </div>
    {{-- endeksekutor --}}
    {{-- vendor --}}
    <div class="pencatat">

        <h3 class="h6 text-gray-100 mb-2">Vendor</h3>
    
      <form class="user ">
        <div class="form-group row ">
            <div class="col-sm-3 mb-5 mb-sm-3">
                <input type="text" class="form-control form-control-user" id="exampleFirstName"
                    placeholder="Nama Vendor">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    
                    <span class="input-group-text"> <span data-feather="calendar"></span></span>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                      <label for="floatingInputGroup1">Tanggal Mulai Service</label>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    
                    <span class="input-group-text"> <span data-feather="calendar"></span></span>
                    <div class="form-floating">
                      <input type="text" class="form-control" id="floatingInputGroup1" placeholder="Username">
                      <label for="floatingInputGroup1">Tanggal Selesai Service</label>
                    </div>
                  </div>
          </div>
        </div>
    </div>
    {{-- endvendor --}}
      <button class="col-sm-3 btn btn-dark btn-user btn-block ">Selesai</button>
    </form>
  </div>
@endsection