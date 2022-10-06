@extends('home.layouts.main')
@section('container')
    <div class=" mb-1 mt-3 border shadow">
        <form action="/create" method="post">
            @csrf
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-1 pb-2 mb-1 m-3 border-bottom border-3 border-primary">

                <ul class="navbar-nav justify-content-end flex-grow-1 pe-2">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="/home/inventaris" style="color: blue">
                                 <span data-feather="chevron-left" ></span> Kembali
                                </a>
                            </li>
                            <li>
                                <h1 class="h2">Laporan</h1>
                            </li>
                 </ul>
            </div>

            <div class="form-group row ms-3 mt-3">
                {{-- barang--}}
                <div class="col-sm-11 mb-0 mb-sm-1  bg-darkborder shadow">
                    <div class="form-group row  justify-content-center mt-3">
                        <div class="col-sm-3 mb-5 mb-sm-3">
                            <input type="text" class="form-control form-control-user" id="kode_inventaris" name="kode_inventaris"
                                placeholder="Kode Inventaris">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-user" id="kategori" name="kategori"
                                placeholder="Kategori">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-user" id="merk" name="merk"
                            placeholder="Merk">
                        </div>
                    </div>
                    <div class="form-group row  justify-content-center mt-3">
                        <div class="col-sm-3 mb-5 mb-sm-3">
                            <input type="text" class="form-control form-control-user" id="tipe" name="tipe"
                                placeholder="Tipe">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-user" id="nomor_seri" name="nomor_seri"
                                placeholder="Nomor Seri">
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control form-control-user" id="tahun_pembelian" name="tahun_pembelian"
                            placeholder="Tahun Pembelian">
                        </div>
                    </div>
                    <div class="form-group row  justify-content-center">
                      <div class="col-sm-3 mb-5 mb-sm-3">
                          <input type="text" class="form-control form-control-user" id="kondisi" name="kondisi"
                              placeholder="Kondisi">
                      </div>
                      <div class="col-sm-3">
                          <input type="text" class="form-control form-control-user" id="lokasi_fisik" name="lokasi_fisik"
                              placeholder="Lokasi Fisik">
                      </div>
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
                    </div>
                    <div class="form-group row  justify-content-center">
                      <div class="col-sm-3 mb-5 mb-sm-3">
                        <input type="text" class="form-control form-control-user" id="pengguna" name="pengguna"
                        placeholder="Pengguna">
                      </div>
                      <div class="col-sm-3">
                        <input type="text" class="form-control form-control-user"
                            id="keterangan" name="keterangan" placeholder="Keterangan">
                    </div>
                    <button class="col-sm-3  btn btn-primary btn-user btn-block justify-content-center">Selesai</button>
                    </div>
                </div>
                {{-- endbarang --}}
            </div>
        </form>
    </div>
@endsection
