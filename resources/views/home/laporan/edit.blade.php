@extends('home.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<<<<<<< HEAD
    <h1 class="h2">Edit Laporan</h1>
</div>
<div class="row">
  <form action="/home/laporan/{{ $laporan ->slug }}" method="post">
    @method('put')
    @csrf
    <div class="form-group row ">
       <div class="col-sm-3 mb-5 mb-sm-3">
      <input type="text" class="form-control form-control-user" id="token" name="token"
          placeholder="token" value="{{ old('token',$laporan->token) }}">
    </div>
      <div class="col-sm-3">
          <input type="text" class="form-control form-control-user" id="slug" name="slug"
              placeholder="slug" value="{{ old('slug',$laporan->slug) }}" readonly>
      </div>
    </div>
   
    {{-- pencatat --}}
    
    <div class="pencatat">

        <h3 class="h6 text-gray-100 mb-2">Pencatat</h3>
    
      <form class="user ">
        <div class="form-group row ">
            <div class="col-sm-3 mb-5 mb-sm-3">
                <input type="text" class="form-control form-control-user" id="nippencatat" name="nippencatat"
                    placeholder="Nip Pencatat" value="{{ old('nippencatat',$laporan->nippencatat) }}">
            </div>
            <div class="col-sm-3">
                <input type="text" class="form-control form-control-user" id="namapencatat" name="namapencatat"
                    placeholder="Nama Pencatat" value="{{ old('namapencatat',$laporan->namapencatat) }}">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="form-floating">
                      <input type="date" class="form-control" id="tanggalmencatat" name="tanggalmencatat" placeholder="tanggal mencatat" value="{{ old('tanggalmencatat',$laporan->tanggalmencatat) }}">
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
                          placeholder="Nama Pelapor" value="{{ old('namapelapor',$laporan->namapelapor) }}">
                  </div>
              
              <div class="form-group row  ">
                <div class="col-sm-3 mb-5 mb-sm-3">
                  <label for="floatingInput">Nama Bidang</label>
                  <select class="form-select" id="namabidang" name="namabidang" aria-label="Floating label select example" placeholder="Nama Bidang"  value="{{ old('namabidang',$laporan->namabidang) }}">
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
                      placeholder="Nomor Hp" value="{{ old('nomorhp',$laporan->nomorhp) }}">
              </div>
          </div>
          <div class=" col-sm-3 mb-5 mb-sm-3 ">
            <input type="text" class="form-control form-control-user" style="height: 200px" id="permasalahan" name="permasalahan"
                placeholder="Permasalahan" value="{{ old('permasalahan',$laporan->permasalahan) }}">
        </div>
      </div>
      {{-- endpelapor --}}
=======
  <h1 class="h2">Laporan</h1>
</div>
<div class="row">
  <form method="post">
    @csrf
    <div class="form-group row ">
      <div class="col-sm-3 mb-5 mb-sm-3">
        <input type="text" class="form-control form-control-user" id="token" name="token" placeholder="token" value="@if (old('token'))
          {{ old('token') }}
          @else
          {{ $laporan->token }}
          @endif
          " readonly>
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control form-control-user" id="slug" name="slug" placeholder="slug" value="
         {{ $laporan->token }}
        " readonly>
      </div>
    </div>

    {{-- pencatat --}}

    <div class="pencatat">

      <h3 class="h6 text-gray-100 mb-2">Pencatat</h3>

      <form class="user ">
        <div class="form-group row ">
          <div class="col-sm-3 mb-5 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="nippencatat" name="nippencatat" value="{{$laporan->nippencatat}}" placeholder="Nip Pencatat">
          </div>
          <div class="col-sm-3">
            <input type="text" class="form-control form-control-user" id="namapencatat" name="namapencatat" value="{{$laporan->namapencatat}}" placeholder="Nama Pencatat">
          </div>
          <div class="col-sm-3">
            <div class="input-group">
              <div class="form-floating">
                <input type="date" class="form-control" id="tanggalmencatat" name="tanggalmencatat" value="{{$laporan->tanggalmencatat}}" placeholder="tanggal mencatat">
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
            <input type="text" class="form-control form-control-user" id="namapelapor" name="namapelapor" value="{{$laporan->namapelapor}}" placeholder="Nama Pelapor">
          </div>

          <div class="form-group row  ">
            <div class="col-sm-3 mb-5 mb-sm-3">
              <label for="floatingInput">Nama Bidang</label>
              <select class="form-select" id="namabidang" name="namabidang" aria-label="Floating label select example" placeholder="Nama Bidang">
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
            <input type="text" class="form-control form-control-user" id="nomorhp" name="nomorhp" value="{{$laporan->nomorhp}}" placeholder="Nomor Hp">
          </div>
        </div>
        <div class=" col-sm-3 mb-5 mb-sm-3 ">
          <input type="text" class="form-control form-control-user" style="height: 200px" id="permasalahan" value="{{$laporan->permasalahan}}" name="permasalahan" placeholder="Permasalahan">
        </div>
    </div>
    {{-- endpelapor --}}
>>>>>>> 485863b6f98fea8f5f032d4abf06290cf713b9e3

    {{-- eksekutor --}}
    <div class="eksekutor">
      <h3 class="h6 text-gray-100 mb-2">Eksekutor</h3>
<<<<<<< HEAD
      </div>
      <div class="form-group row ">
        <div class="col-sm-3 mb-5 mb-sm-3">
            <input type="text" class="form-control form-control-user" id="nipeksekutor" name="nipeksekutor"
                placeholder="Nip Eksekutor" value="{{ old('nipeksekutor',$laporan->nipeksekutor) }}">
        </div>
        <div class="col-sm-3">
            <input type="text" class="form-control form-control-user" id="namaeksekutor" name="namaeksekutor"
                placeholder="Nama Eksekutor" value="{{ old('namaeksekutor',$laporan->namaeksekutor) }}">
        </div>
      </div>
      <div class="form-group row ">
        <div class="col-sm-3 mb-5 mb-sm-3">
            <label for="floatingInput">Kategori</label>
            <select class="form-select" id="kategori" name="kategori" aria-label="Floating label select example" placeholder="Hak Akses" value="{{ old('kategori',$laporan->kategori) }}">
              <option value="Jaringan">Jaringan</option>
              <option value="CCTV">CCTV</option>
              <option value="Komputer">Komputer</option>
              <option value="Printer">Printer</option>
              <option value="Aplikasi">Aplikasi</option>
            </select>
        </div>
        <div class="col-sm-3">
            <label for="floatingInput">Status</label>
            <select class="form-select" id="status" name="status" aria-label="Floating label select example" placeholder="Hak Akses" value="{{ old('status',$laporan->status) }}">
              <option value="Self Service">Self Service</option>
              <option value="Vendor">Vendor</option>
            </select>
        </div>
        <div class="col-sm-3">
          <div class="input-group">
              <div class="form-floating">
                <input type="date" class="form-control" id="tanggalselesai" name="tanggalselesai" placeholder="tanggalselesai" value="{{ old('tanggalselesai',$laporan->tanggalselesai) }}">
                <label for="floatingInputGroup1">Tanggal Selesai</label>
              </div>
          </div>
      </div>
      </div>
      <div class="form-group row ">
        <div class=" col-sm-3 mb-5 mb-sm-3 ">
            <input type="text" class="form-control form-control-user" style="height: 200px " id="solusi " name="solusi"
                placeholder="Solusi Deskripsi" value="{{ old('solusi',$laporan->solusi) }}">
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
                    placeholder="Nama Vendor" value="{{ old('namavendor',$laporan->namavendor) }}">
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="form-floating">
                      <input type="date" class="form-control" id="mulaiservice" name="mulaiservice" placeholder="Username" value="{{ old('mulaiservice',$laporan->mulaiservice) }}">
                      <label for="floatingInputGroup1">Tanggal Mulai Service</label>
                    </div>
                  </div>
            </div>
            <div class="col-sm-3">
                <div class="input-group">
                    <div class="form-floating">
                      <input type="date" class="form-control" id="selesaiservice" name="selesaiservice" placeholder="Username" value="{{ old('selesaiservice',$laporan->selesaiservice) }}">
                      <label for="floatingInputGroup1">Tanggal Selesai Service</label>
                    </div>
                  </div>
          </div>
        </div>
    </div>
    {{-- endvendor --}}
      <button class="col-sm-3 btn btn-dark btn-user btn-block ">Update Laporan</button>
    </form>
  </form>
=======
    </div>
    <div class="form-group row ">
      <div class="col-sm-3 mb-5 mb-sm-3">
        <input type="text" class="form-control form-control-user" id="nipeksekutor" name="nipeksekutor" value="{{$laporan->nipeksekutor}}" placeholder="Nip Eksekutor">
      </div>
      <div class="col-sm-3">
        <input type="text" class="form-control form-control-user" id="namaeksekutor" name="namaeksekutor" value="{{$laporan->namaeksekutor}}" placeholder="Nama Eksekutor">
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
            <input type="date" class="form-control" id="tanggalselesai" name="tanggalselesai" value="{{$laporan->tanggalselesai}}" placeholder="Username">
            <label for="floatingInputGroup1">Tanggal Selesai</label>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group row ">
      <div class=" col-sm-3 mb-5 mb-sm-3 ">
        <input type="text" class="form-control form-control-user" style="height: 200px " id="solusi " name="solusi" value="{{$laporan->solusi}}" placeholder="Solusi Deskripsi">
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
        <input type="text" class="form-control form-control-user" id="namavendor" name="namavendor" value="{{$laporan->namavendor}}" placeholder="Nama Vendor">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <div class="form-floating">
            <input type="date" class="form-control" id="mulaiservice" name="mulaiservice" value="{{$laporan->mulaiservice}}" placeholder="Username">
            <label for="floatingInputGroup1">Tanggal Mulai Service</label>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <div class="form-floating">
            <input type="date" class="form-control" id="selesaiservice" name="selesaiservice" value="{{$laporan->selesaiservice}}" placeholder="Username">
            <label for="floatingInputGroup1">Tanggal Selesai Service</label>
          </div>
        </div>
      </div>
    </div>
</div>
{{-- endvendor --}}
<button class="col-sm-3 btn btn-dark btn-user btn-block ">Update</button>
</form>
</form>
>>>>>>> 485863b6f98fea8f5f032d4abf06290cf713b9e3
</div>

<script>
  const token = document.querySelector('#token');
  const slug = document.querySelector('#slug');

<<<<<<< HEAD
  token.addEventListener('change', function(){
    fetch('/home/cekSlug?token=' + token.value)
    .then(response => response.json())
    .then(data => slug.value = data.slug)
=======
  token.addEventListener('change', function() {
    fetch('/home/cekSlug?token=' + token.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
>>>>>>> 485863b6f98fea8f5f032d4abf06290cf713b9e3
  });
</script>
@endsection