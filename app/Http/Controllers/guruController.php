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
            return redirect('/guru')->with('createSuccess', 'data');
        }else{
            return redirect('/guru')->with('createFailed', 'Failed');
        }
     
    }

    public function destroy($id)
    {
        $find = guru::find($id);
        $find->delete();
        return redirect('/guru')->with('deleteSuccess', 'data');
    }

    public function detail($id)
    {
        $guru = guru::with(['kelas','jurusan'])->get()->find($id);
        return view('guru.detailguru', ['guru' => $guru]);
    }
}
