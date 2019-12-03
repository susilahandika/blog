<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use App\Kategori;

class ProdukController extends Controller
{
    
    public function index()
    {
        // $data_produk = Produk::all();
        $data_produk = Produk::select('*')
                        ->join('kategori', 'produk.id_kategori', 'kategori.id')
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
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
