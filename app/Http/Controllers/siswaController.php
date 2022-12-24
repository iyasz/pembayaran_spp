<?php

namespace App\Http\Controllers;

use App\Models\jurusan;
use App\Models\kelas;
use App\Models\siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index()
    {
        $siswa = siswa::all();
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('siswa.siswa', ['siswa' => $siswa,'kelas' => $kelas, 'jurusan' => $jurusan]);
    }

    public function create()
    {
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('siswa.createsiswa', ['kelas' => $kelas, 'jurusan' => $jurusan]);
    }

    public function store(Request $request)
    {
        siswa::create($request->except('_token','addStudent'));
        return redirect('/siswa');
    }

    public function destroy($id)
    {
        $find = siswa::find($id);
        $find->delete();
        return redirect('/siswa');
    }
}
