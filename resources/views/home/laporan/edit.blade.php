@extends('home.layouts.main')
@section('container')
<div class="mb-1 mt-3 border shadow">
  <form method="post" action="/home/laporan/{{ $laporan->slug }}">
    @method('put')
    @csrf
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 m-3  border-bottom border-3 border-primary">
      <h1>Laporan</h1>
      <div class="form-group row m-3">
        <div class="col-sm-2">
          <label>Token</label>
          <input type="text" class="form-control form-control-user" id="token" name="token" placeholder="token" value="@if (old('token'))
          {{ old('token') }}
          @else
          {{ $laporan->token }}
          @endif
          " readonly disabled>
        </div>
        <div class="col-sm-2">
          <label>Slug</label>
          <input type="text" class="form-control form-control-user" id="slug" name="slug" placeholder="slug" value="
          {{ $laporan->token }}
         " readonly disabled>
        </div>
        <div class="col-sm-2">
          <label>Tanggal Mencatat</label>
          <input type="date" class="form-control" id="tanggalmencatat" name="tanggalmencatat" value="{{$laporan->tanggalmencatat}}" placeholder="tanggal mencatat" readonly disabled>
        </div>
        <div class="col-sm-2">
          <label>Nip Pencatat</label>
          <input type="text" class="form-control form-control-user" id="nippencatat" name="nippencatat" value="{{$laporan->nippencatat}}" placeholder="Nip Pencatat" readonly>
        </div>
        <div class="col-sm-2">
          <label>Nama Pencatat</label>
          <input type="text" class="form-control form-control-user" id="namapencatat" name="namapencatat" value="{{$laporan->namapencatat}}" placeholder="Nama Pencatat" readonly>
        </div>
      </div>
    </div>
    <div class="form-group row mb-2 mb-sm-2 m-3 gap-4">
      {{-- pelapor --}}
        <div class="col-sm-5 mb-5 mb-sm-5 bg-darkborder shadow">
        
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h3 class="h6 text-gray-100 mb-2">Pelapor</h3>
          </div>
        
          <form class="user ">
              <div class="form-group row">
                  <div class="col-sm-8 mb-2 mb-sm-2">
                      <label>Nama Pelapor</label>
                      <input type="text" class="form-control form-control-user" id="namapelapor" name="namapelapor" value="{{$laporan->namapelapor}}" placeholder="Nama Pelapor" readonly>
                  </div>
              
                <div class="form-group row  ">
                  <div class="col-sm-8 mb-2 mb-sm-2">
                  <label for="floatingInput">Nama Bidang</label>
                  <select class="form-select" id="namabidang" name="namabidang" aria-label="Floating label select example" placeholder="Nama Bidang" value="{{$laporan->namabidang}}" readonly >
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
                <div class="col-sm-8 mb-2 mb-sm-2">
                  <label>Nomor HP</label>
                  <input type="text" class="form-control form-control-user" id="nomorhp" name="nomorhp" value="{{$laporan->nomorhp}}" placeholder="Nomor Hp" readonly>
                </div>
              </div>
            <div class=" col-sm-10 mb-2 mb-sm-2 ">
            <textarea type="text" class="form-control form-control-user" style="height: 100px" id="permasalahan" name="permasalahan"
            placeholder="Permasalahan" readonly>{{$laporan->permasalahan}}</textarea>
            </div>
        </div>
      {{-- endpelapor --}}
      {{-- eksekutor --}}
      <div class="col-sm-6 border shadow">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
        <h3 class="h6 text-gray-100 mb-2">Eksekutor</h3>
        </div>
        <div class="form-group row ">
          <div class="col-sm-5 mb-2 mb-sm-2">
              <input type="text" class="form-control form-control-user" id="nipeksekutor" name="nipeksekutor"
                  placeholder="Nip Eksekutor" value="{{ $laporan ->nipeksekutor }}">
          </div>
          <div class="col-sm-5">
              <input type="text" class="form-control form-control-user" id="namaeksekutor" name="namaeksekutor"
                  placeholder="Nama Eksekutor" value="{{ $laporan->namaeksekutor }}">
          </div>
        </div>
        <div class="form-group row ">
          <div class="col-sm-5 mb-2 mb-sm-2">
              <label for="floatingInput">Kategori</label>
              <select class="form-select" id="kategori" name="kategori" aria-label="Floating label select example" placeholder="Hak Akses">
                <option value="Jaringan">Jaringan</option>
                <option value="CCTV">CCTV</option>
                <option value="Komputer">Komputer</option>
                <option value="Printer">Printer</option>
                <option value="Aplikasi">Aplikasi</option>
              </select>
          </div>
          <div class="col-sm-5">
              <label for="floatingInput">Status</label>
              <select class="form-select" id="status" name="status" aria-label="Floating label select example" placeholder="Hak Akses">
                <option value="Self Service">Self Service</option>
                <option value="Vendor" value="{{ $laporan->namavendor }}">Vendor</option>
              </select>
          </div>
        </div>
          <div class="col-sm-8 mb-2 mb-sm-2 ">
            <div class="input-group">
                <div class="form-floating">
                  <input type="date" class="form-control" id="tanggalselesai" name="tanggalselesai" placeholder="tanggalselesai" value="{{ $laporan->tanggalselesai }}">
                  <label for="floatingInputGroup1">Tanggal Selesai</label>
                </div>
            </div>
          </div>
        <div class="form-group row ">
          <div class=" col-sm-10 mb-2 mb-sm-2 ">
            <textarea type="text" class="form-control form-control-user" style="height: 100px " id="solusi " name="solusi"
            placeholder="Solusi Deskripsi">{{ $laporan->solusi }}</textarea>
          </div> 
        </div>
        <button class="col-sm-3 m-2 mb-1 btn btn-primary btn-user btn-block">Update</button>
      </div>
      {{-- endeksekutor --}}
    </div>  
</form>

</div>

<script>
  const token = document.querySelector('#token');
  const slug = document.querySelector('#slug');

  token.addEventListener('change', function() {
    fetch('/home/cekSlug?token=' + token.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });
</script>
@endsection