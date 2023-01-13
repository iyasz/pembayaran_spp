<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class guruController extends Controller
{
    public function index()
    {
        // $guru = guru::with(['kelas', 'jurusan']);
        $guru = guru::all();
        return view('guru.guru', ['guru' => $guru]);
    }
}
