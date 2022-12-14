@extends('home.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
    <h1 class="h2">Laporan</h1>
  </div>
  <div class="table-responsive col-lg-20">

    @if (session()->has('success'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if (session()->has('loginError'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    <a href="/home/laporan/create" class="btn btn-primary mb-3">Buat Laporan Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Token</th>
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
          <td>{{ $post->token }}</td>
          <td>{{ $post->tanggalmencatat}}</td>
          <td>{{ $post->namapelapor }}</td>
          <td>{{ $post->namabidang }}</td>
          <td>{{ $post->kategori }}</td>
          <td>{{ $post->status }}</td>
          <td>{{ $post->namaeksekutor}}</td>

          <td>{{ $post->tanggalselesai }}</td>
          <td>
            <a href="/home/laporan/{{ $post->id }}" class="badge bg-info"><span data-feather="eye" ></span></a>
            <a href="{{ url('laporan/' . $post->id) }}" class="badge bg-warning"><span data-feather="edit" ></span></a>
            <form action="/home/laporan/{{ $post->id }}" method="post" class="d-inline">
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