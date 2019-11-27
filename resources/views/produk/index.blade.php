@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Produk</div>

                {{-- Ini yang diubah --}}
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA</th>
                                <th>STOK</th>
                                <th>NAMA KATEGORI</th>
                                <th>CREATED AT</th>
                                <th>UPDATED AT</th>
                                <th>PROSES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data_produk as $a)
                                <tr>
                                    <td>{{ $a->id }}</td>
                                    <td>{{ $a->nama }}</td>
                                    <td>{{ $a->stok }}</td>
                                    <td>{{ $a->nama_kategori }}</td>
                                    <td>{{ $a->created_at }}</td>
                                    <td>{{ $a->updated_at }}</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm">Ubah</a>
                                        <a href="#" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection