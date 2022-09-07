@extends('home.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Pencatat</h1>
  </div>
  <div class="table-responsive col-lg-15">
    <a href="/home/pencatat/create" class="btn btn-dark mb-3">Buat Laporan Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Tgl pencatat</th>
          <th scope="col">Nama Pelapor</th>
          <th scope="col">Bidang Pelapor</th>
          <th scope="col">No Hp Pelapor</th>
          <th scope="col">Nama Pencatat</th>
          <th scope="col">Masalah</th>
          <th scope="col">Kategori</th>
          <th scope="col">Status</th>
          <th scope="col">Nama Eksekutor</th>
          <th scope="col">Tgl Selesai</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>15-08-2022</td>
          <td>Agus</td>
          <td>Aptika</td>
          <td>08233121</td>
          <td>Anggun</td>
          <td>01-12-22</td>
          <td>cctv</td>
          <td>self service</td>
          <td>Zulfikar</td>
          <td>22-12-22</td>

          <td>
            <a href="" class="badge bg-info"><span data-feather="eye" ></span></a>
            <a href="" class="badge bg-warning"><span data-feather="edit" ></span></a>
          </td>
        </tr>
        <tr>
      </tbody>
    </table>
  </div>
@endsection