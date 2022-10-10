@extends('home.layouts.main')
@section('container')
    <div class=" mb-1 mt-3 border shadow">
        <form action="/store-inventaris" method="post">
            @csrf
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 m-3 border-bottom border-3 border-primary">

                <ul class="navbar-nav justify-content-end flex-grow-1 pe-2">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/home/inventaris" style="color: blue">
                            <span data-feather="chevron-left"></span> Kembali
                        </a>
                    </li>
                    <li>
                        <h1 class="h2">Inventaris</h1>
                    </li>
                </ul>
            </div>

            <div class="form-group row ms-3 mt-3">
                {{-- barang --}}
                <div class="col-sm-11 mb-0 mb-sm-1  bg-darkborder shadow">
                    <div class="form-group row  justify-content-center mt-3">
                        <div class="col-sm-3 mb-5 mb-sm-3">
                            <label>Kode Inventaris</label>
                            <input type="text" class="form-control form-control-user" id="kodeInventaris" name="kodeInventaris"
                                >
                        </div>
                        <div class="col-sm-3">
                            <label>Kategori</label>
                            <input type="text" class="form-control form-control-user" id="kategori" name="kategori"
                                >
                        </div>
                        <div class="col-sm-3">
                            <label>Merk</label>
                            <input type="text" class="form-control form-control-user" id="merk" name="merk"
                               >
                        </div>
                    </div>
                    <div class="form-group row  justify-content-center mt-3">
                        <div class="col-sm-3 mb-5 mb-sm-3">
                            <label>Tipe</label>
                            <input type="text" class="form-control form-control-user" id="tipe" name="tipe"
                               >
                        </div>
                        <div class="col-sm-3">
                            <label>Nomor Seri</label>
                            <input type="text" class="form-control form-control-user" id="nomorSeri" name="nomorSeri"
                                >
                        </div>
                        <div class="col-sm-3">
                            <label>Tahun Pembelian</label>
                            <input type="text" class="form-control form-control-user" id="tahunPembelian"
                                name="tahunPembelian" >
                        </div>
                    </div>
                    <div class="form-group row  justify-content-center">
                        <div class="col-sm-3 mb-5 mb-sm-3">
                            <label>Kondisi</label>
                            <input type="text" class="form-control form-control-user" id="kondisi" name="kondisi"
                               >
                        </div>
                        <div class="col-sm-3">
                            <label>Lokasi Fisik</label>
                            <input type="text" class="form-control form-control-user" id="lokasiFisik" name="lokasiFisik"
                               >
                        </div>
                        <div class="col-sm-3 mb-5 mb-sm-3">
                            <label for="floatingInput">Nama Bidang</label>
                            <select class="form-select" id="bidang" name="bidang"
                                aria-label="Floating label select example" placeholder="Nama Bidang">
                                <option value="SEKERTARIAT">SEKERTARIAT</option>
                                <option value="BIDANG E-GOVERMENT">BIDANG E-GOVERMENT</option>
                                <option value="BIDANG APLIKASI INFORMATIKA">BIDANG APLIKASI INFORMATIKA</option>
                                <option value="UPTD PUSAT LAYANAN DIGITAL DATA DAN INFORMASI GEOSPASIAL">UPTD PUSAT LAYANAN
                                    DIGITAL DATA DAN INFORMASI GEOSPASIAL</option>
                                <option value="BIDANG STATISTIK">BIDANG STATISTIK</option>
                                <option value="BIDANG PERSANDIAN DAN KEAMANAN INFORMASI">BIDANG PERSANDIAN DAN KEAMANAN
                                    INFORMASI</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row  justify-content-center">
                        <div class="col-sm-3 mb-5 mb-sm-3">
                            <label>Pengguna</label>
                            <input type="text" class="form-control form-control-user" id="pengguna" name="pengguna"
                                >
                        </div>
                        <div class="col-sm-3">
                            <label>Keterangan</label>
                            <input type="text" class="form-control form-control-user" id="keterangan" name="keterangan"
                                >
                        </div>
                    </div>
                    <div class="row  justify-content-center">
                        <button class="col-sm-3 mb-3  btn btn-primary btn-user btn-block">Selesai</button>
                    </div>
                </div>
                {{-- endbarang --}}
            </div>
        </form>
    </div>
@endsection
