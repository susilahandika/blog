@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('produk.store') }}" method="post">
                        {{ csrf_field() }}

                        <label for="">Nama Produk</label>
                        <input class="form-control" type="text" name="nama" id="">

                        <label for="">Stok</label>
                        <input class="form-control" type="text" name="stok" id="">

                        <label for="">Kategori Produk</label>
                        <select class="form-control" name="id_kategori" id="">
                            @foreach ($data_kategori as $a)
                                <option value="{{ $a->id }}">{{ $a->nama_kategori }}</option>
                            @endforeach
                        </select>

                        <br>
                        <input class="btn btn-primary" type="submit" value="Tambah Data">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection