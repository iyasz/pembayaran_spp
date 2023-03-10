<?php

namespace App\Http\Controllers;

use App\Models\kelas;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index()
    {       
        $kelas = kelas::all();
        return view('kelas.kelas', ['kelas' => $kelas]);
    }
    
    public function createview()
    {
        return view('kelas.createkelas');
    }

    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:3|unique:kelas',
        ];

        $messages = [
            'name.required' => 'Nama Harus Diisi!',
            'name.max' => 'Nama Terlalu Panjang!',
            'name.unique' => 'Nama Sudah Terdaftar!',
        ];

        $validate = $request->validate($rules, $messages);


        kelas::create($request->except('_token','addClass'));
        return redirect('/kelas')->with('success', 'Data Berhasil Disimpan!');
    }

    public function updateview($id)
    {
        $kelas = kelas::find($id);
        return view('kelas.updatekelas', ['kelas' => $kelas]);
    }

    public function update($id, Request $request)
    {
        $kelas = kelas::find($id);
 
        $rules = [
            'name' => 'required|max:3|unique:kelas',
        ];

        $messages = [
            'name.required' => 'Nama Harus Diisi!',
            'name.max' => 'Nama Terlalu Panjang!',
            'name.unique' => 'Nama Sudah Terdaftar!',
        ];
        
        $validate = $request->validate($rules, $messages);
    
        $kelas->update($request->except('_token','addClass'));
        return redirect('/kelas')->with('success', 'Data Berhasil Diubah!');
    }

    public function destroy($id)
    {
        $kelas = kelas::find($id);
        $kelas->delete();
        return redirect('/kelas')->with('success', 'Data Berhasil Dihapus');
    }

    public function detail($id)
    {
        $kelas = kelas::find($id);
        return view('kelas.detailkelas', ['kelas' => $kelas]);
    }
}
