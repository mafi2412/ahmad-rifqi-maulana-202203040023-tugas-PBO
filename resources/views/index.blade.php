@extends('layout')

@section('content')
    <div class="container">
        <h1>Daftar Celana</h1>
        <a href="{{ route('celanas.create') }}" class="btn btn-primary mb-3">Tambah Celana</a>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Ukuran</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($celanas as $celana)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $celana->nama }}</td>
                        <td>{{ $celana->ukuran }}</td>
                        <td>{{ $celana->harga }}</td>
                        <td>{{ $celana->stok }}</td>
                        <td>
                            <a href="{{ route('celanas.show', $celana->id) }}" class="btn btn-info">Detail</a>
                            <a href="{{ route('celanas.edit', $celana->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('celanas.destroy', $celana->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
