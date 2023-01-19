<?php

namespace App\Http\Controllers;

use App\Http\Requests\guruPostRequest;
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

    public function create(guruPostRequest $request)
    {

        $find = kelas::find($request->kelas_id);
        $find2 = jurusan::find($request->jurusan_id);

        if($find == TRUE AND $find2 == TRUE){
            guru::create($request->except('_token', 'addGuru'));
            return redirect('/guru')->with('success', 'Data Berhasil Disimpan!');
        }else{
            return redirect('/guru')->with('failed', 'Data Gagal Disimpan!');
        }
     
    }

    public function destroy($id)
    {
        $find = guru::find($id);
        $find->delete();
        return redirect('/guru')->with('success', 'Data Berhasil Dihapus!');
    }

    public function detail($id)
    {
        $guru = guru::with(['kelas','jurusan'])->get()->find($id);
        return view('guru.detailguru', ['guru' => $guru]);
    }

    public function updateview($id)
    {
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        $guru = guru::find($id);
        return view('guru.updateguru', ['guru' => $guru, 'kelas' => $kelas, 'jurusan' => $jurusan]);
    }

    public function update($id, guruPostRequest $request)
    {
        $guru = guru::find($id);
        $guru->update($request->except('_token', 'updateGuru'));
        return redirect('/guru')->with('success', 'Data Berhasil Diubah!');
    }
}
