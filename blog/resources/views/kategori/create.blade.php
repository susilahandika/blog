@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Tambah Kategori</div>

                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="POST">
                        {{-- CSRF wajib ada di form --}}
                        @csrf
                        {{-- {{ csrf_field() }} --}}

                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama_kategori" id="">

                        <br>
                        <input type="submit" class="btn btn-primary" value="Simpan Data">
                    </form>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection