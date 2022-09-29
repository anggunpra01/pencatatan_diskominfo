@extends('home.layouts.main')

@section('container')
<div class="mb-5 mt-3 border shadow col-lg-5">
    <div class=" m-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Laporan</h1>
    </div>
    <div class="table-responsive col-lg-15 m-3">
    <table class="table table-striped table-sm">
      <tbody>
        <tr>
            <a href="/home/laporan/{{ $laporan->id }}/edit" class="badge bg-warning"><span data-feather="edit" ></span></a>
        </tr>
        <tr>
            <th>Tanggal Mencatat</th>
            <td>{{ $laporan->tanggalmencatat }}</td>
          </tr>
        <tr>
          <th>NIP Pencatat</th>
          <td>{{ $laporan->nippencatat }}</td>
        </tr>
        <tr>
            <th>Nama Pencatat</th>
            <td>{{ $laporan->namapencatat }}</td>
        </tr>
        <tr>
            <th>Nama Pelapor</th>
            <td>{{ $laporan->namapelapor }}</td>
        </tr>
        <tr>
            <th>Nama Bidang</th>
            <td>{{ $laporan->namabidang }}</td>
        </tr>
        <tr>
            <th>Nomor Hp Pelapor</th>
            <td>{{ $laporan->nomorhp }}</td>
        </tr>
        <tr>
            <th>Permasalahan</th>
            <td>{{ $laporan->permasalahan }}</td>
        </tr>
        <tr>
            <th>Nip Eksekutor</th>
            <td>{{ $laporan->nipeksekutor }}</td>
        </tr>
        <tr>
            <th>Nama Eksekutor</th>
            <td>{{ $laporan->namaeksekutor }}</td>
        </tr>
        <tr>
            <th>Kategori</th>
            <td>{{ $laporan->kategori }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $laporan->status }}</td>
        </tr>
        <tr>
            <th>Solusi Permasalahan</th>
            <td>{{ $laporan->solusi }}</td>
        </tr>
        <tr>
            <th>Tanggal Selesai</th>
            <td>{{ $laporan->tanggalselesai }}</td>
        </tr>
        <tr>
            <th>Nama Vendor</th>
            <td>{{ $laporan->namavendor }}</td>
        </tr>
        <tr>
            <th>Mulai Service</th>
            <td>{{ $laporan->mulaiservice }}</td>
        </tr>
        <tr>
            <th>Selesai Service</th>
            <td>{{ $laporan->selesaiservice }}</td>
        </tr>
      </tbody>
    </table>
    </div>
</div>

@endsection