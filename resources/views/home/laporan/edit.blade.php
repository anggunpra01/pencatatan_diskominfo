@extends('home.layouts.main')
@section('container')
    <div class="mb-1 mt-3 border shadow">
        <form method="post" action="/home/laporan/{{ $edit->id }}">
            @method('put')
            @csrf
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 m-3  border-bottom border-3 border-primary">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-2">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home/laporan" style="color: blue">
                         <span data-feather="chevron-left" ></span> Kembali
                        </a>
                    </li>
                    <li>
                        <h1 class="h2">Laporan</h1>
                    </li>
                </ul>
                <div class="form-group row m-3">
                    <div class="col-sm-3">
                        <label>Token</label>
                        <input type="text" class="form-control form-control-user" id="token" name="token"
                            placeholder="token"
                            value="@if (old('token')) {{ old('token') }}
          @else
          {{ $edit->token }} @endif
          "
                            readonly disabled>
                    </div>

                    <div class="col-sm-3">
                        <label>Tanggal Mencatat</label>
                        <input type="date" class="form-control" id="tanggalmencatat" name="tanggalmencatat"
                            value="{{ $edit->tanggalmencatat }}" placeholder="tanggal mencatat" readonly disabled>
                    </div>
                    <div class="col-sm-3">
                        <label>Nip Pencatat</label>
                        <input type="text" class="form-control form-control-user" id="nippencatat" name="nippencatat"
                            value="{{ $edit->nippencatat }}" placeholder="Nip Pencatat" readonly disabled>
                    </div>
                    <div class="col-sm-3">
                        <label>Nama Pencatat</label>
                        <input type="text" class="form-control form-control-user" id="namapencatat" name="namapencatat"
                            value="{{ $edit->namapencatat }}" placeholder="Nama Pencatat" readonly disabled>
                    </div>
                </div>
            </div>
            <div class="form-group row mb-2 mb-sm-2 m-3 gap-4">
                {{-- pelapor --}}
                <div class="col-sm-5 mb-5 mb-sm-5 bg-darkborder shadow">

                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h3 class="h6 text-gray-100 mb-2">Pelapor</h3>
                    </div>

                    <form class="user ">
                        <div class="form-group row">
                            <div class="col-sm-8 mb-2 mb-sm-2">
                                <label>Nama Pelapor</label>
                                <input type="text" class="form-control form-control-user" id="namapelapor"
                                    name="namapelapor" value="{{ $edit->namapelapor }}" placeholder="Nama Pelapor" readonly>
                            </div>

                            <div class="form-group row  ">
                                <div class="col-sm-8 mb-2 mb-sm-2">
                                    <label for="floatingInput">Nama Bidang</label>
                                    <select class="form-select" id="namabidang" name="namabidang"
                                        aria-label="Floating label select example" placeholder="Nama Bidang"
                                        value="{{ $edit->namabidang }}" readonly>
                                        <option value="KEU">KEUANGAN</option>
                                        <option value="PRC">PERENCANAAN</option>
                                        <option value="KPG">KEPEGAWAIAN</option>
                                        <option value="EGV">BIDANG E-GOVERMENT</option>
                                        <option value="APT">BIDANG APLIKASI INFORMATIKA</option>
                                        <option value="JDS">UPTD PUSAT LAYANAN DIGITAL DATA DAN INFORMASI GEOSPASIAL
                                        </option>
                                        <option value="STS">BIDANG STATISTIK</option>
                                        <option value="SKM">BIDANG PERSANDIAN DAN KEAMANAN INFORMASI</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-8 mb-2 mb-sm-2">
                                <label>Nomor HP</label>
                                <input type="text" class="form-control form-control-user" id="nomorhp" name="nomorhp"
                                    value="{{ $edit->nomorhp }}" placeholder="Nomor Hp" readonly>
                            </div>
                        </div>
                        <div class=" col-sm-10 mb-2 mb-sm-2 ">
                            <textarea type="text" class="form-control form-control-user" style="height: 100px" id="permasalahan"
                                name="permasalahan" placeholder="Permasalahan" readonly>{{ $edit->permasalahan }}</textarea>
                        </div>
                </div>
                {{-- endpelapor --}}
                {{-- eksekutor --}}
                <div class="col-sm-6 border shadow">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                        <h3 class="h6 text-gray-100 mb-2">Eksekutor</h3>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-5 mb-2 mb-sm-2">
                            <input type="text" class="form-control form-control-user" id="nipeksekutor"
                                name="nipeksekutor" placeholder="Nip Eksekutor" value="{{ $edit->nipeksekutor }}">
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control form-control-user" id="namaeksekutor"
                                name="namaeksekutor" placeholder="Nama Eksekutor" value="{{ $edit->namaeksekutor }}">
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-5 mb-2 mb-sm-2">
                            <label for="floatingInput">Kategori</label>
                            <select class="form-select" id="kategori" name="kategori"
                                aria-label="Floating label select example" placeholder="Hak Akses">
                                <option value="Jaringan">Jaringan</option>
                                <option value="CCTV">CCTV</option>
                                <option value="Komputer">Komputer</option>
                                <option value="Printer">Printer</option>
                                <option value="Aplikasi">Aplikasi</option>
                            </select>
                        </div>
                        <div class="col-sm-5">
                            <label for="floatingInput">Status</label>
                            <select class="form-select" id="status" name="status"
                                aria-label="Floating label select example" placeholder="Hak Akses">
                                <option value="Self Service">Self Service</option>
                                <option value="Vendor">Vendor</option>
                            </select>
                            {{-- script other value --}}
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                            <script type="text/javascript">
                                var otherInput;
                                var mulaiservice, selesaiservice;
                                var serviceTypeInput = $('#status');
                                serviceTypeInput.on('change', function() {
                                    otherInput = $('#namavendor');
                                    mulaiservice = $('#mulaiservice');
                                    selesaiservice = $('#selesaiservice');
                                    if (serviceTypeInput.val() == "Vendor") {
                                        otherInput.show();
                                        mulaiservice.show();
                                        selesaiservice.show();
                                    } else {
                                        otherInput.hide();
                                        mulaiservice.hide();
                                        selesaiservice.hide();
                                    }
                                });
                            </script>
                        </div>
                        {{-- other field --}}
                        <div class="col-sm-5 mb-3">
                            <input class="form-control form-control-user" name='namavendor' id='namavendor'
                                type="text" placeholder="Nama Vendor" style="display: none">
                        </div>
                        <div class="col-sm-3">
                            {{-- tanggal --}}
                            <input type="date" class="form-control" id="mulaiservice" name="mulaiservice"
                                placeholder="mulaiservice" style="display: none">
                        </div>
                        <div class="col-sm-3">
                          <input type="date" class="form-control" id="selesaiservice" name="selesaiservice"
                                placeholder="selesaiservice" style="display: none">
                        </div>
                    </div>
                    <div class="col-sm-8 mb-2 mb-sm-2 ">
                        <div class="input-group">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="tanggalselesai" name="tanggalselesai"
                                    placeholder="tanggalselesai" value="{{ $edit->tanggalselesai }}">
                                <label for="floatingInputGroup1">Tanggal Selesai</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class=" col-sm-10 mb-2 mb-sm-2 ">
                            <textarea type="text" class="form-control form-control-user" style="height: 100px " id="solusi "
                                name="solusi" placeholder="Solusi Deskripsi">{{ $edit->solusi }}</textarea>
                        </div>
                    </div>
                    <button class="col-sm-3 m-2 mb-1 btn btn-primary btn-user btn-block">Update</button>
                </div>
                {{-- endeksekutor --}}
            </div>
        </form>

    </div>
@endsection
