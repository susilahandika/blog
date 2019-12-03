@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('kategori.update', $data_kategori->id) }}" method="post">
                        {{-- Ini wajib diisi --}}
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <label for="">Nama Kategori</label>
                        <input class="form-control" type="text" name="nama_kategori" id="" value="{{ $data_kategori->nama_kategori }}">

                        <br>
                        <input class="btn btn-primary" type="submit" value="Ubah Data">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection