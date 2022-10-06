@extends('home.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">

    <h1 class="h2">Inventaris</h1>
  </div>
  <div class="table-responsive col-lg-20">
    <a href="/home/inventaris/create" class="btn btn-primary mb-3">Buat Laporan Baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">Nomor</th>
          <th scope="col">Kode Inventaris</th>
          <th scope="col">Kategori</th>
          <th scope="col">Tahun Pembelian</th>
          <th scope="col">Lokasi Fisik</th>
          <th scope="col">Bidang</th>
          <th scope="col">Pengguna</th>
          <th scope="col">Action</th>

          
        </tr>
      </thead>
      <tbody>
        @foreach ($inventarist as $post )  
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->kode_inventaris }}</td>
          <td>{{ $post->kategori }}</td>
          <td>{{ $post->tahun_pembelian }}</td>
          <td>{{ $post->lokasi_fisik }}</td>
          <td>{{ $post->bidang }}</td>
          <td>{{ $post->pengguna}}</td>
          <td>
            <a href="/home/inventaris/{{ $post->id }}" class="badge bg-info"><span data-feather="eye" ></span></a>
            <a href="{{ url('inventaris/' . $post->id) }}" class="badge bg-warning"><span data-feather="edit" ></span></a>
            <form action="/home/inventaris/{{ $post->id }}" method="post" class="d-inline">
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