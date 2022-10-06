@extends('home.layouts.main')

@section('container')
<div class="mb-5 mt-3 border shadow col-lg-12">
    <div class=" m-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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
                    {{ $laporan->token }} 
                    @endif
                    " readonly disabled>
            </div>

            <div class="col-sm-3">
                <label>Tanggal Mencatat</label>
                <input type="date" class="form-control" id="tanggalmencatat" name="tanggalmencatat"
                    value="{{ $laporan->tanggalmencatat }}" placeholder="tanggal mencatat" readonly disabled>
            </div>
            <div class="col-sm-3">
                <label>Nip Pencatat</label>
                <input type="text" class="form-control form-control-user" id="nippencatat" name="nippencatat"
                    value="{{ $laporan->nippencatat }}" placeholder="Nip Pencatat" readonly disabled>
            </div>
            <div class="col-sm-3">
                <label>Nama Pencatat</label>
                <input type="text" class="form-control form-control-user" id="namapencatat" name="namapencatat"
                    value="{{ $laporan->namapencatat }}" placeholder="Nama Pencatat" readonly disabled>
            </div>
        </div>
    </div>
    <div class="table-responsive col-lg-15 m-3">
        <table class="table table-striped table-sm">
        <div class="row">
            <div class="form-group row mb-sm-1 m-3 gap-4">
                {{-- pelapor --}}
                <div class="col-sm-4 mb-0 mb-sm-1  bg-darkborder shadow">

                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h3 class="h6 text-gray-100 mb-2">Pelapor</h3>
                    </div>

                    <form class="user ">
                        <div class="form-group row">
                            <div class="col-sm-8 mb-2 mb-sm-2">
                                <label>Nama Pelapor</label>
                                <input type="text" class="form-control form-control-user" id="namapelapor"
                                    name="namapelapor" value="{{ $laporan->namapelapor }}" placeholder="Nama Pelapor" readonly>
                            </div>

                            <div class="form-group row  ">
                                <div class="col-sm-8 mb-2 mb-sm-2">
                                    <label for="floatingInput">Nama Bidang</label>
                                    <select class="form-select" id="namabidang" name="namabidang"
                                        aria-label="Floating label select example" placeholder="Nama Bidang"
                                        value="{{ $laporan->namabidang }}" readonly>
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
                                    value="{{ $laporan->nomorhp }}" placeholder="Nomor Hp" readonly>
                            </div>
                        </div>
                        <div class=" col-sm-10 mb-2 mb-sm-2 ">
                            <textarea type="text" class="form-control form-control-user" style="height: 100px" id="permasalahan"
                                name="permasalahan" placeholder="Permasalahan" readonly>{{ $laporan->permasalahan }}</textarea>
                        </div>
                    <div class="col-sm-5 mb-3">
                    </div>  
                </div>
                {{-- endpelapor --}}
                
                {{-- eksekutor --}}
                <div class="col-sm-4 mb-0 mb-sm-1 bg-darkborder shadow">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h3 class="h6 text-gray-100 mb-2">Eksekutor</h3>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-5 mb-2 mb-sm-2">
                            <input type="text" class="form-control form-control-user" id="nipeksekutor"
                                name="nipeksekutor" placeholder="Nip Eksekutor" value="{{ $laporan->nipeksekutor }}" readonly>
                        </div>
                        <div class="col-sm-5">
                            <input type="text" class="form-control form-control-user" id="namaeksekutor"
                                name="namaeksekutor" placeholder="Nama Eksekutor" value="{{ $laporan->namaeksekutor }}" readonly>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class="col-sm-5 mb-2 mb-sm-2">
                            <label for="floatingInput">Kategori</label>
                            <select class="form-select" id="kategori" name="kategori"
                                aria-label="Floating label select example" placeholder="Hak Akses" value="{{ $laporan->kategori }}" readonly>
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
                                aria-label="Floating label select example" placeholder="Hak Akses" value="{{ $laporan->status }}" readonly>
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
                                    placeholder="tanggalselesai" value="{{ $laporan->tanggalselesai }}" readonly>
                                <label for="floatingInputGroup1">Tanggal Selesai</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row ">
                        <div class=" col-sm-10 mb-2 mb-sm-2 ">
                            <textarea type="text" class="form-control form-control-user" style="height: 100px " id="solusi "
                                name="solusi" placeholder="Solusi Deskripsi" readonly>{{ $laporan->solusi }}</textarea>
                        </div>
                    </div>
                    <div class="col-sm-5 mb-3">
                    </div>  
                </div>
                {{-- endeksekutor --}}


                <div class="col-sm-3 mb-0 mb-sm-1 bg-darkborder shadow">
                    <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h3 class="h6 text-gray-100 mb-2">Vendor</h3>
                </div class="form-group row ">
                <div class="col-sm-5  mb-3">
                    <input type="text" class="form-control form-control-user" id="nippencatat" name="nippencatat"
                        placeholder="Nip Pencatat">
                </div>
                <div class="col-sm-5  mb-3">
                    <input type="text" class="form-control form-control-user" id="namapencatat" name="namapencatat"
                        placeholder="Nama Pencatat">
                </div>
                <div class="col-sm-5 mb-3">
                </div>  
                </div>
            </div>
        </div>
        </table>
    </div>
</div>

@endsection