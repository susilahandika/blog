<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $request->validate([
            'nama_kategori' => 'required|min:3',
        ]);

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
        $data_kategori = Kategori::where('id', $id)->first();

        return view('kategori/edit', compact('data_kategori'));
    }

    public function update(Request $request, $id)
    {
        $data_kategori = $request->except('_token', '_method');

        Kategori::where('id', $id)->update($data_kategori);

        return redirect('kategori');
    }

    public function destroy($id)
    {
        // echo "ID yang dihapus adalah $id";
        Kategori::where('id', $id)->delete();

        return redirect('kategori');

    }
}
