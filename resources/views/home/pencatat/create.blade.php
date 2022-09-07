@extends('home.layouts.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        pencatat
    </h1>
</div>
<div class="row">
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
                <div class="col-sm-3 mb-5 mb-sm-3">
                    <input type="text" class="form-control form-control-user" id="exampleFirstName"
                        placeholder="Nomor Hp">
                </div>
            
            <div class="form-group row  ">
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
            </div>
            <div class="col-sm-3 mb-5 mb-sm-3">
                <label for="floatingInput">Masalah</label>
                <textarea type="text" class="form-control form-control-user" id="exampleLastName"
                placeholder="Permasalahan..."></textarea>

            </div>
        </div>
    </div>
    {{-- endpelapor --}}

      <button class="col-sm-3 btn btn-dark btn-user btn-block ">Selesai</button>
    </form>
  </div>
@endsection