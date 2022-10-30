@extends('uts.master')
@section('barang')

<div class="container-fluid">
  <div class="container">
    <h1 class="text-center mb-4 mt-4 font-monospace fw-bold">Daftar Skincare</h1>
    @foreach($barang as $brg=>$barangs)
    <div class="card text-center border-secondary mb-3">
      <div class="card-header">
        Barang ke-{{ $barangs->id}}
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $barangs->nama_barang }}</h5>
        <p class="card-text font-monospace">Rp {{ $barangs->harga }} ,-</p>
        <a href="{{route('detail.view', $barangs->id)}}" class="btn btn-outline-info btn-sm">Lihat Detail</a>
      </div>
      <div class="card-footer text-muted font-monospace">{{ $barangs->tanggal_upload }}
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection