<?php

namespace App\Http\Controllers;

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
        $siswa = siswa::all();
        return view('transaksi.createtransaksi', ['siswa' => $siswa]);
    }

    public function create(Request $req)
    {
        transaksi::create($req->except('_token', 'add'));
        return redirect('/transaksi');
    }

    public function delete($id)
    {
        $find = transaksi::find($id);
        $find->delete();
        return redirect('/transaksi');
    }

    public function detail($id)
    {
        $find = transaksi::find($id);
        // $admin = transaksi::with('admin')->get();
        return view('transaksi.detailtransaksi', ['data' => $find]);
    }
}
