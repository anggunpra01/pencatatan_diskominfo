@extends('home.layouts.main')
@section('container')
    <div class=" mb-1 mt-3 border shadow">
        <form action="/create" method="post">
            @csrf
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 m-3 border-bottom border-3 border-primary">
                <h1 class="h2">Laporan</h1>
                <div class="form-group row m-3">
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-user" id="token" name="token"
                            placeholder="token" value="<?php echo $token; ?>">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="tanggalmencatat" name="tanggalmencatat"
                            placeholder="tanggal mencatat" value="<?php echo $tglLaporan; ?>" >
                    </div>
                </div>
            </div>

            <div class="form-group row mb-sm-1 m-3 gap-4">
                {{-- pencatat --}}
                <div class="col-sm-5 mb-0 mb-sm-1  bg-darkborder shadow">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h3 class="h6 text-gray-100 mb-2">Pencatat</h3>
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
                {{-- endpencatat --}}
                {{-- pelapor --}}
                <div class="col-sm-5 mb-0 mb-sm-1 bg-darkborder shadow">

                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h3 class="h6 text-gray-100 mb-2">Pelapor</h3>
                    </div>

                    <form class="user ">
                        <div class="form-group row">
                            <div class="col-sm-8 mb-5 mb-sm-3">
                                <input type="text" class="form-control form-control-user" id="namapelapor"
                                    name="namapelapor" placeholder="Nama Pelapor">
                            </div>

                            <div class="form-group row  ">
                                <div class="col-sm-8 mb-5 mb-sm-3">
                                    <label for="floatingInput">Nama Bidang</label>
                                    <select class="form-select" id="namabidang" name="namabidang"
                                        aria-label="Floating label select example" placeholder="Nama Bidang">
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
                            <div class="col-sm-8 mb-5 mb-sm-3">
                                <input type="text" class="form-control form-control-user" id="nomorhp" name="nomorhp"
                                    placeholder="No HP">
                            </div>
                        </div>
                        <div class=" col-sm-10 mb-5 mb-sm-3 ">
                            <textarea type="text" class="form-control form-control-user" style="height: 100px" id="permasalahan"
                                name="permasalahan" placeholder="Permasalahan"></textarea>
                        </div>
                </div>
                {{-- endpelapor --}}
            </div>
            <button class="col-sm-3 m-3 mb-1 btn btn-primary btn-user btn-block">Selesai</button>
        </form>
    </div>
@endsection
