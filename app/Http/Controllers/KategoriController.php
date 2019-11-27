<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
        $data_kategori = Kategori::all();
        
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
