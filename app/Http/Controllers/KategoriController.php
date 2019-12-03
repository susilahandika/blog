<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        // $data_kategori = Kategori::all();
        $data_kategori = Kategori::paginate(5);
        
        return view('kategori/index', compact('data_kategori'));
    }

    public function create()
    {
        return view('kategori/create');
    }

    public function store(Request $request)
    {
        $data_kategori = $request->except('_token');

        Kategori::create($data_kategori);

        return redirect('kategori');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        // Mengambil data di database
        $data_kategori = Kategori::where('id', $id)->first();

        // Menuju view kategori/edit dan mengirimkan data kategori
        return view('kategori/edit', compact('data_kategori'));
    }

    public function update(Request $request, $id)
    {
        // Mengambil data yang dikirimkan oleh form kecuali _token, _method
        $data_kategori = $request->except('_token', '_method');

        // Mengubah data didalam database
        Kategori::where('id', $id)->update($data_kategori);

        // Kembali ke route kategori
        return redirect('kategori');
    }

    public function destroy($id)
    {
        //
    }
}
