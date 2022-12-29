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
        return redirect('/siswa')->with('createSuccess', 'data');
    }

    public function destroy($id)
    {
        $find = siswa::find($id);
        $find->delete();
        return redirect('/siswa')->with('deleteSuccess', 'data');
    }

    public function updateview($id)
    {
        $siswa = siswa::find($id);
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('siswa.updatesiswa',['siswa' => $siswa, 'kelas' => $kelas, 'jurusan' => $jurusan]);
    }

    public function update($id, Request $request)
    {
        $find = siswa::find($id);
        $find->update($request->except('_token','updateStudent'));
        return redirect('/siswa')->with('updateSuccess', 'data');
    }

    public function detail($id)
    {
        $find = siswa::find($id);
        return view('siswa.detailsiswa', ['siswa' => $find]);
    }

}
