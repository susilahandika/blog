@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="post">
                        {{-- Ini wajib diisi --}}
                        {{ csrf_field() }}

                        <label for="">Nama Kategori</label>
                        <input class="form-control" type="text" name="nama_kategori" id="">

                        <br>
                        <input class="btn btn-primary" type="submit" value="Simpan Data">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection