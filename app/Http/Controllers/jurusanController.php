<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;

class jurusanController extends Controller
{
    function index(){
        $jurusan = jurusan::with('siswa')->get();
        return view('jurusan.jurusan', ['jurusan' => $jurusan]);
    }

    function create(){
        $jurusan = jurusan::all();
        return view('jurusan.createjurusan', ['jurusan' => $jurusan]);
    }

    function store(Request $request){
        jurusan::create($request->except('_token','addJurusan'));
        return redirect('/jurusan')->with('createSuccess', 'data');
    }

    function updateview($id){
        $find = jurusan::find($id);
        return view('jurusan.updatejurusan', ['find' => $find]);
    }

    function update($id, Request $request){
        $find = jurusan::find($id);
        $find->update($request->except('_token','addJurusan'));
        return redirect('/jurusan')->with('updateSuccess', 'data');
    }

    function destroy($id){
        $find = jurusan::find($id);
        $find->delete();
        return redirect('/jurusan')->with('deleteSuccess', 'data');
    }

    function detail($id){
        $find = jurusan::find($id);

        return view('jurusan.detailjurusan', ['jurusan' => $find]);
    }
}
