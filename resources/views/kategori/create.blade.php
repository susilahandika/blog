@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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