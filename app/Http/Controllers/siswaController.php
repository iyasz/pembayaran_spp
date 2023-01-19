<?php

namespace App\Http\Controllers;

use App\Http\Requests\siswaPostRequest;
use App\Models\jurusan;
use App\Models\kelas;
use App\Models\siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function index()
    {
        $siswa = siswa::get();
        return view('siswa.siswa', ['siswa' => $siswa]);
    }

    public function create()
    {
        $kelas = kelas::all();
        $jurusan = jurusan::all();
        return view('siswa.createsiswa', ['kelas' => $kelas, 'jurusan' => $jurusan]);
    }

    public function store(siswaPostRequest $request)
    {
        $kelas = kelas::find($request->kelas_id);
        $jurusan = jurusan::find($request->jurusan_id);

        if($kelas == TRUE && $jurusan == TRUE){
            siswa::create($request->except('_token','addStudent'));
            return redirect('/siswa')->with('createSuccess', 'data');
        }else{
            return redirect('/siswa')->with('failed', 'data');
        }
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

    public function update($id, siswaPostRequest $request)
    {
        $find = siswa::find($id);
        $kelas = kelas::find($request->kelas_id);
        $jurusan = jurusan::find($request->jurusan_id);

        if($kelas == TRUE && $jurusan == TRUE){
            // $find->update([
            //     'name' => $request->name,
            //     'alamat' => $request->alamat,
            //     'kelas_id' => $request->kelas_id,
            //     'jurusan_id' => $request->jurusan_id,
            // ]);
           $find->update($request->except('_token','updateStudent'));
             return redirect('/siswa')->with('updateSuccess', 'data');
        }else{
            return redirect('/siswa')->with('failed', 'data');
        }

    }

    public function detail($id)
    {
        $find = siswa::find($id);
        return view('siswa.detailsiswa', ['siswa' => $find]);
    }

    public function restoreview()
    {
        $siswa = siswa::onlyTrashed();
        return view('siswa.restore', ['siswa' => $siswa]);
    }

}
