<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use Illuminate\Http\Request;

class jurusanController extends Controller
{
    function index(){
        $jurusan = jurusan::all();
        return view('jurusan.jurusan', ['jurusan' => $jurusan]);
    }

    function create(){
        $jurusan = jurusan::all();
        return view('jurusan.createjurusan', ['jurusan' => $jurusan]);
    }

    function store(Request $request){
        jurusan::create($request->except('_token','addJurusan'));
        return redirect('/jurusan');
    }
}
