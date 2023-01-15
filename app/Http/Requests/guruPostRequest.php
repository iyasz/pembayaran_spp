<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class guruPostRequest extends FormRequest
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
            'name' => ['required', 'max:100'],
            'is_hometeacher' => ['required', 'in:2,1'],
            'kelas_id' => ['digits_between:1,2', 'numeric'],
            'jurusan_id' => ['digits_between:1,2', 'numeric'],
        ];
    }

    public function messages()
    {
        return [
            
            'name.required' => 'Nama Harus Diisi!',
            'name.max' => 'Panjang Nama Tidak Boleh Lebih 100 Character!',

            'is_hometeacher.required' => 'Status Harus Diisi!',
            'is_hometeacher.in' => 'Status Tidak Valid!',

            'kelas_id.digits_between' => 'Kelas Tidak Valid!',
            'jurusan_Id.digits_between' => 'Jurusan Tidak Valid!',
            
            'kelas_id.numeric' => 'Kelas Tidak Valid!',
            'jurusan_Id.numeric' => 'Jurusan Tidak Valid!',
        ];
    }
}
