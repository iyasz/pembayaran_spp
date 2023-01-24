<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class trxPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'siswa_id' => ['required'],
            'cara_bayar' => ['required', 'in:C,T'],
            'tgl_transaksi' => ['required'],
            'total' => ['required'],
            // , 'digits_between:4,8', 'numeric'
            'bukti' => ['required', 'image','mimes:jpeg,jpg,png'],
            'status' => ['required', 'in:P,C,S'],
        ];
    }

    public function messages()
    {
        return [
            'siswa_id.required' => 'Kolom Siswa Harus Diisi!',
            'cara_bayar.required' => 'Kolom Cara Bayar Harus Diisi!',
            'tgl_transaksi.required' => 'Kolom Tanggal Transaksi Harus Diisi!',
            'total.required' => 'Kolom Total Harus Diisi!',
            'bukti.required' => 'Bukti Transaksi Harus Diisi!',
            'status.required' => 'Kolom Status Harus Diisi!',

            'cara_bayar.in' => 'Cara Bayar Tidak valid',
            'status.in' => 'Status Tidak valid',

            'total.digits_between' => 'Jumlah Terlalu Banyak Atau Sedikit',
            'total.numeric' => 'Total Harus Angka',

            'bukti.image' => 'Bukti Transaksi Harus Gambar!',
            'bukti.mimes' => 'Gambar Harus JPG Atau PNG!!',


        ];
    }
}
