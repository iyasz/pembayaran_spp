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
        return redirect('/kelas');
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
        return redirect('/kelas');
    }
}
