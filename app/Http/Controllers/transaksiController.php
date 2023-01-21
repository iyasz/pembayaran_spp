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

        $transaki = 'TRX/PAYMENT-SPP/'.now()->timestamp.random_int(100,999);

        if($siswa == TRUE){
            transaksi::create([
                'no_transaksi' => $transaki,
                'admin_id' => $req->admin_id,
                'siswa_id' => $req->siswa_id,
                'cara_bayar' => $req->cara_bayar,
                'tgl_transaksi' => $req->tgl_transaksi,
                'total' => $req->total,
                'status' => $req->status,
                'note' => $req->note,
            ]);

            // transaksi::create($req->except('_token', 'add'));
            return redirect('/transaksi')->with('success', 'Data Berhasil Disimpan!');
        }else{
            return redirect('/transaksi')->with('failed', 'Data Gagal Disimpan!');
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

        return redirect('/transaksi')->with('success', 'Data Berhasil Diubah!');
    }
}
