<?php

namespace App\Http\Controllers;

use App\Novan_MasterBarang;
use App\Novan_MasterCategoryBarang;
use Illuminate\Http\Request;

class MasterBarangController extends Controller
{
    
    public function index()
    {
        $data = [
            'barang' => Novan_MasterBarang::with('category')->get(),
        ];

       
        return view('index', $data);
    }

   
    public function create()
    {
        $data = [
            'categories' => Novan_MasterCategoryBarang::all(),
        ];
        return view('create', $data);
    }

    
    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_barang' => 'required|unique:novan__master_barangs,kode_barang',
            'nama_barang' => 'required|string',
            'category_id' => 'required'
        ]);

        $data['category_id'] = (int)$data['category_id'];
        Novan_MasterBarang::create($data);
        return redirect('/barang')->with('status', 'Data Berhasil ditambahkan');

        
    }

    
    public function show($id)
    {
        $barang = Novan_MasterBarang::with('category')->where('id', (int) $id)->firstOrFail();
        return view('show', ['barang' => $barang]);
    }

   
    public function edit($id)
    {
        $barang = Novan_MasterBarang::find((int) $id);
        $categories = Novan_MasterCategoryBarang::all();
        return view('edit', ['barang' => $barang, 'categories' => $categories]);
    }

    
    public function update(Request $request, $id)
    {
        $barang = Novan_MasterBarang::find((int) $id);
        $data = $request->validate([
            'kode_barang' => 'required',
            'nama_barang' => 'required|string',
            'category_id' => 'required'
        ]);
        $barang->fill($data)->save();
        return redirect('/barang')->with('status', 'Data Berhasil diupdate');
    }

   
    public function destroy($id)
    {
        $novan_MasterBarang = Novan_MasterBarang::find((int) $id);
        $novan_MasterBarang->delete();
        return redirect('/barang')->with('status', 'Data Berhasil dihapus');
    }
}
