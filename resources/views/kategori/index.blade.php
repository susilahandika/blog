@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Kategori</div>

                {{-- Ini yang diubah --}}
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAMA KATEGORI</th>
                                <th>CREATED AT</th>
                                <th>UPDATED AT</th>
                                <th>PROSES</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($data_kategori as $a)
                            <tr>
                                <td>{{ $a->id }}</td>
                                <td>{{ $a->nama_kategori }}</td>
                                <td>{{ $a->created_at }}</td>
                                <td>{{ $a->updated_at }}</td>
                                <td>
                                    <a href="{{ route('kategori.edit', $a->id) }}" class="btn btn-warning btn-sm">Ubah</a>
                                    <a href="{{ route('kategori.destroy', $a->id) }}" class="btn btn-danger btn-sm">Hapus</a>

                                    {{-- <form action="{{ route('kategori.destroy', $a->id) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $data_kategori->render() }}

                    <a href="{{ route('kategori.create') }}" class="btn btn-primary">Tambah</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

<script>

function run_delete(id){
    if(confirm('yakin akan menghapus data?')){
        window.location.href ="kategori/" + id;
    }
}

</script>

