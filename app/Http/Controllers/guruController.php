<?php

namespace App\Http\Controllers;

use App\Models\guru;
use App\Models\jurusan;
use App\Models\kelas;
use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index()
    {
        // $guru = guru::with(['kelas', 'jurusan']);
        $guru = guru::all();
        return view('guru.guru', ['guru' => $guru]);
    }

    public function createview()
    {
        // $guru = guru::with(['kelas', 'jurusan'])->get();
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('guru.createguru', ['kelas' => $kelas, 'jurusan' => $jurusan]);
    }

    public function create(Request $request)
    {
        guru::create($request->except('_token', 'addGuru'));
        return redirect('/guru')->with('createSuccess', 'data');
    }
}
