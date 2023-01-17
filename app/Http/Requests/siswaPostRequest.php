<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class siswaPostRequest extends FormRequest
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
            'name' => ['required', 'max:150'],
            'nis' => ['required', 'numeric', 'unique:siswa', 'digits_between:15,19'],
            'telp' => ['required', 'numeric', 'unique:siswa', 'digits_between:5,15'],
            'alamat' => ['required', 'max:500'],
            'kelas_id' => ['required'],
            'jurusan_id' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama Tidak Boleh Kosong!',
            'nis.required' => 'Nis Tidak Boleh Kosong!',
            'telp.required' => 'Telepon Tidak Boleh Kosong!',
            'alamat.required' => 'Alamat Tidak Boleh Kosong!',
            'kelas_id.required' => 'Kelas Tidak Boleh Kosong!',
            'jurusan_id.required' => 'Jurusan Tidak Boleh Kosong!',

            'name.max' => 'Nama Terlalu Panjang!',
            'alamat.max' => 'Nama Terlalu Panjang!',

            'nis.numeric' => 'Nis Harus Berupa Number!',
            'nis.numeric' => 'Telepon Harus Berupa Number!',

            'nis.unique' => 'Nis Sudah Terdaftar!',
            'telp.unique' => 'Telepon Sudah Terdaftar!',
            
            'nis.digits_between' => 'Nis Terlalu Panjang/Pendek!',
            'telp.digits_between' => 'Telepon Terlalu Panjang/Pendek!',
        ];
    }
}
