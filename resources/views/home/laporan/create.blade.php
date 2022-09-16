@extends('home.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Laporan</h1>
</div>
<div class="row">
  <form action="/create" method="post">
    @csrf
    <div class="form-group row ">
       <div class="col-sm-3 mb-5 mb-sm-3">
      <input type="text" class="form-control form-control-user" id="token" name="token"
          placeholder="token">
    </div>
      <div class="col-sm-3">
          <input type="text" class="form-control form-control-user" id="slug" name="slug"
              placeholder="slug" disabled readonly>
      </div>
    </div>
   
    {{-- pencatat --}}
    
    <div class="pencatat">

        <h3 class="h6 text-gray-100 mb-2">Pencatat</h3>
    
      <form class="user ">
        <div class="form-group row ">
            <div class="col-sm-3 mb-5 mb-sm-3">
                <input type="text" class="form-control form-control-user" id="nippencatat" name="nippencatat"
                    placeholder="Nip Pencatat">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-user" id="namapencatat" name="namapencatat"
                    placeholder="Nama Pencatat">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="form-floating">
                      <input type="date" class="form-control" id="tanggalmencatat" name="tanggalmencatat" placeholder="tanggal mencatat">
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
                      <input type="text" class="form-control form-control-user" id="namapelapor" name="namapelapor"
                          placeholder="Nama Pelapor">
                  </div>
              
              <div class="form-group row  ">
                <div class="col-sm-3 mb-5 mb-sm-3">
                  <label for="floatingInput">Nama Bidang</label>
                  <select class="form-select" id="namabidang" name="namabidang" aria-label="Floating label select example" placeholder="Nama Bidang" >
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
                  <input type="text" class="form-control form-control-user" id="nomorhp" name="nomorhp"
                      placeholder="Nomor Hp">
              </div>
          </div>
          <div class=" col-sm-3 mb-5 mb-sm-3 ">
            <input type="text" class="form-control form-control-user" style="height: 200px" id="permasalahan" name="permasalahan"
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
            <input type="text" class="form-control form-control-user" id="nipeksekutor" name="nipeksekutor"
                placeholder="Nip Eksekutor">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-user" id="namaeksekutor" name="namaeksekutor"
                placeholder="Nama Eksekutor">
        </div>
      </div>
      <div class="form-group row ">
        <div class="col-sm-3 mb-5 mb-sm-3">
            <label for="floatingInput">Kategori</label>
            <select class="form-select" id="kategori" name="kategori" aria-label="Floating label select example" placeholder="Hak Akses">
              <option value="Jaringan">Jaringan</option>
              <option value="CCTV">CCTV</option>
              <option value="Komputer">Komputer</option>
              <option value="Printer">Printer</option>
              <option value="Aplikasi">Aplikasi</option>
            </select>
        </div>
        <div class="col-sm-3">
            <label for="floatingInput">Status</label>
            <select class="form-select" id="status" name="status" aria-label="Floating label select example" placeholder="Hak Akses">
              <option value="Self Service">Self Service</option>
              <option value="Vendor">Vendor</option>
            </select>
        </div>
        <div class="col-sm-3">
          <div class="input-group">
              <div class="form-floating">
                <input type="date" class="form-control" id="tanggalselesai" name="tanggalselesai" placeholder="Username">
                <label for="floatingInputGroup1">Tanggal Selesai</label>
              </div>
          </div>
      </div>
      </div>
      <div class="form-group row ">
        <div class=" col-sm-3 mb-5 mb-sm-3 ">
            <input type="text" class="form-control form-control-user" style="height: 200px " id="solusi " name="solusi"
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
                <input type="text" class="form-control form-control-user" id="namavendor" name="namavendor"
                    placeholder="Nama Vendor">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="form-floating">
                      <input type="date" class="form-control" id="mulaiservice" name="mulaiservice" placeholder="Username">
                      <label for="floatingInputGroup1">Tanggal Mulai Service</label>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="form-floating">
                      <input type="date" class="form-control" id="selesaiservice" name="selesaiservice" placeholder="Username">
                      <label for="floatingInputGroup1">Tanggal Selesai Service</label>
                    </div>
                  </div>
          </div>
        </div>
    </div>
    {{-- endvendor --}}
      <button class="col-sm-3 btn btn-dark btn-user btn-block ">Selesai</button>
    </form>
  </form>
</div>

<script>
  const token = document.querySelector('#token');
  const slug = document.querySelector('#slug');

  token.addEventListener('change', function(){
    fetch('/home/cekSlug?token=' + token.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
  });
</script>
@endsection