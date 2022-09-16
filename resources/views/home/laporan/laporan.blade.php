@extends('home.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Laporan</h1>
  </div>
  <div class="table-responsive col-lg-15">
    <a href="/home/laporan/create" class="btn btn-dark mb-3">Buat Laporan Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Nomor</th>
          <th scope="col">Tanggal Catatan</th>
          <th scope="col">Nama Pelapor</th>
          <th scope="col">Bidang Pelapor</th>
          <th scope="col">Kategori</th>
          <th scope="col">Status</th>
          <th scope="col">Nama Eksekutor</th>
          <th scope="col">Tanggal Selesai</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        @foreach ($laporans as $post )  
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->tanggalmencatat }}</td>
          <td>{{ $post->namapelapor }}</td>
          <td>{{ $post->namabidang }}</td>
          <td>{{ $post->kategori }}</td>
          <td>{{ $post->status }}</td>
          <td>{{ $post->namaeksekutor }}</td>
          <td>{{ $post->tanggalselesai }}</td>
          <td>
            <a href="/home/laporan/show" class="badge bg-info"><span data-feather="eye" ></span></a>
            <a href="" class="badge bg-warning"><span data-feather="edit" ></span></a>
            <form action="/home/laporan" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"  ><span data-feather="trash" ></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection