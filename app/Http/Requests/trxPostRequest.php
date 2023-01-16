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
            'admin_id' => ['required', ''],
            'siswa_id' => ['required', ''],
            'cara_bayar' => ['required', ''],
            'tgl_transaksi' => ['required', ''],
            'total' => ['required', ''],
            'status' => ['required', ''],
        ];
    }

    public function messages()
    {
        return [

        ];
    }
}
