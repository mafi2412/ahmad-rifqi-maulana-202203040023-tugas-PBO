@extends('layout')

@section('content')
    <div class="container">
        <h1>{{ $celana->nama }}</h1>
        <p>Ukuran: {{ $celana->ukuran }}</p>
        <p>Harga: Rp{{ $celana->harga }}</p>
        <p>Stok: {{ $celana->stok }}</p>
        <a href="{{ route('celanas.index') }}" class="btn btn-primary">Kembali ke daftar</a>
    </div>
@endsection
