<?php

namespace App\Http\Controllers;

use App\Http\Requests\trxPostRequest;
use App\Models\admin;
use App\Models\siswa;
use App\Models\transaksi;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    public function index()
    {
        $trx = transaksi::with('siswa')->get();
        return view('transaksi.transaksi', ['trx' => $trx]);
    }

    public function createview()
    {
        $siswa = siswa::with(['jurusan', 'kelas'])->get();
        return view('transaksi.createtransaksi', ['siswa' => $siswa]);
    }

    public function create(trxPostRequest $req)
    {
        transaksi::create($req->except('_token', 'add'));
        return redirect('/transaksi')->with('createSuccess', 'success');
    }

    public function detail($id)
    {
        $find = transaksi::with(['siswa.kelas', 'siswa.jurusan'])->get()->find($id);
        // $admin = transaksi::with('admin')->get();
        return view('transaksi.detailtransaksi', ['data' => $find]);
    }
}
