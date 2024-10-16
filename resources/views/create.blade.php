@extends('layout')

@section('content')
    <div class="container">
        <h1>Tambah Celana</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('celanas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Celana</label>
                <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama') }}">
            </div>
            <div class="mb-3">
                <label for="ukuran" class="form-label">Ukuran Celana</label>
                <input type="text" name="ukuran" class="form-control" id="ukuran" value="{{ old('ukuran') }}">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga Celana</label>
                <input type="number" name="harga" class="form-control" id="harga" value="{{ old('harga') }}">
            </div>
            <div class="mb-3">
                <label for="stok" class="form-label">Stok Celana</label>
                <input type="number" name="stok" class="form-control" id="stok" value="{{ old('stok') }}">
            </div>
            <button type="submit" class="btn btn-success">Tambah</button>
        </form>
    </div>
@endsection
