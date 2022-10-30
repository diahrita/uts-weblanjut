@extends('uts.master')
@section('barang')
<div class="container-fluid">
  <div class="container">
    <div class="card mb-3">
      <center>
        <img src="{{ asset('img/'.$detail->foto) }}" style="width: 240px;" class="card-img-top" alt="...">
      </center>

      <div class="card-body">
        <h5 class="card-title"> Nama Barang : {{ $detail->nama_barang }}</h5>
        <p class="card-text font-monospace">Stok : {{ $detail->stok }}</p>
        <p class="card-text font-monospace">Review : {{ $detail->review }}</p>
        <p class="card-text font-monospace"><small class="text-muted">{{ $detail->tanggal_upload }}</small></p>
        <a href="{{route('barang.view')}}" class="btn btn-outline-danger btn-sm">Kembali</a>
      </div>
    </div>
  </div>

</div>

@endsection