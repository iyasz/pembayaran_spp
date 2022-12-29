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
        kelas::create($request->except('_token','addClass'));
        return redirect('/kelas')->with('createSuccess', 'data');
    }

    public function updateview($id)
    {
        $kelas = kelas::find($id);
        return view('kelas.updatekelas', ['kelas' => $kelas]);
    }

    public function update($id, Request $request)
    {
        $kelas = kelas::find($id);
        $kelas->update($request->except('_token','addClass'));
        return redirect('/kelas')->with('updateSuccess', 'data');
    }

    public function destroy($id)
    {
        $kelas = kelas::find($id);
        $kelas->delete();
        return redirect('/kelas')->with('deleteSuccess', 'data');
    }

    public function detail($id)
    {
        $kelas = kelas::find($id);
        return view('kelas.detailkelas', ['kelas' => $kelas]);
    }
}
