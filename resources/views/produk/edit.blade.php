@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('produk.update', $data_produk->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <label for="">Nama Produk</label>
                        <input class="form-control" type="text" name="nama" id="" value="{{ $data_produk->nama }}">

                        <label for="">Stok</label>
                        <input class="form-control" type="text" name="stok" id="" value="{{ $data_produk->stok }}">

                        <label for="">Kategori Produk</label>
                        <select class="form-control" name="id_kategori" id="">
                            @foreach ($data_kategori as $a)
                            <option value="{{ $a->id }}" <?php echo ($a->id == $data_produk->id_kategori) ? 'selected' : '' ?>>{{ $a->nama_kategori }}</option>
                            @endforeach
                        </select>

                        <br>
                        <input class="btn btn-primary" type="submit" value="Ubah Data">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection