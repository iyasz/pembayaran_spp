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
        $siswa = siswa::all();
        // $siswa = siswa::with(['jurusan', 'kelas'])->get();
        return view('transaksi.createtransaksi', ['siswa' => $siswa]);
    }

    public function create(trxPostRequest $req)
    {
        $siswa = siswa::find($req->siswa_id);

        if($siswa == TRUE){
            transaksi::create($req->except('_token', 'add'));
            return redirect('/transaksi')->with('createSuccess', 'data');
        }else{
            return redirect('/transaksi')->with('createFailed', 'Failed');
        }

    }

    public function detail($id)
    {
        $find = transaksi::with(['siswa.kelas', 'siswa.jurusan'])->get()->find($id);
        // $admin = transaksi::with('admin')->get();
        return view('transaksi.detailtransaksi', ['data' => $find]);
    }

    public function updateview($id)
    {
        $trx = transaksi::find($id);
        $siswa = siswa::all();

        return view('transaksi.updatetransaksi', ['trx' => $trx, 'siswa' => $siswa]);
    }

    public function update($id, Request $req)
    {
        $trx = transaksi::find($id);
        $validate = $req->validate([
            'status' => 'required|in:S,P,C',
        ]);

        $trx->update([
            'status' => $req->status,
            'note' => $req->note,
        ]);

        return redirect('/transaksi')->with('updateSuccess', 'Data');
    }
}
