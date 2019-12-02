<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;

class ProdukController extends Controller
{
    
    public function index()
    {
        $data_produk = Produk::select('produk.id', 'produk.nama', 'produk.id_kategori', 'kategori.nama_kategori', 'produk.created_at', 'produk.updated_at')
                        ->join('kategori', 'kategori.id', 'produk.id_kategori')
                        ->get();

        // dd($data_produk);
        return view('produk/index', compact('data_produk'));
    }

    public function create()
    {
        $data_kategori = Kategori::all();

        return view('produk/create', compact('data_kategori'));
    }

    public function store(Request $request)
    {
        $data_produk = $request->except('_token');

        Produk::create($data_produk);

        return redirect('produk');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data_produk = Produk::where('id', $id)->first();
        $data_kategori = Kategori::all();

        return view('produk/edit', compact('data_produk', 'data_kategori'));
    }   

    public function update(Request $request, $id)
    {
        $data_produk = $request->except('_token', '_method');

        Produk::where('id', $id)->update($data_produk);

        return redirect('produk');
    }

    public function destroy($id)
    {
        //
    }
}
