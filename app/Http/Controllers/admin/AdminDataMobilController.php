<?php

namespace App\Http\Controllers\admin;

use App\Models\DataMobil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDataMobilController extends Controller
{
    public function index()
    {
        $dataMobil = DataMobil::latest()->paginate(10);
        return view('admin.data-mobil.data-mobil', compact('dataMobil'));
    }

    public function insert()
    {    
        return view('admin.data-mobil.insert-data-mobil');
    }

    public function insertAction(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required|integer',
            'stock' => 'required|integer',
        ]);

        DataMobil::create([  
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

        return redirect()->route('admin.data-mobil')->with('success','You have successfully Insert Data Mobil!');
    }

    public function edit($id)
    {
        $row = DataMobil::find($id);

        return view('admin.data-mobil.edit-data-mobil', compact('row'));
    }

    public function editAction(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'harga' => 'required|integer',
            'stock' => 'required|integer',
        ]);

        $editDataMobil = DataMobil::find($request->id);
        $editDataMobil->nama = $request->nama;
        $editDataMobil->harga = $request->harga;
        $editDataMobil->stock = $request->stock;
        $editDataMobil->save();

        return redirect()->route('admin.data-mobil')->with('success','You have successfully Edit Data Mobil!');
    }

    public function delete($id)
    {
        $row = DataMobil::find($id);
        
        $row->delete();

        return redirect()->route('admin.data-mobil')->with('delete','You have successfully Delete Data Mobil!');
    }
}
