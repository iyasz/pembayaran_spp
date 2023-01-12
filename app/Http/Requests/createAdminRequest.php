<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createAdminRequest extends FormRequest
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
            'username' => ['required', 'unique:admins', 'max:100'],
            'email' => ['required', 'unique:admins', 'max:100'],
            'password' => ['required', 'max:100'],
            'gender' => ['required', 'in:M,W'],
            'telp' => ['required', 'uniqe:admins', 'max:20'],
            'alamat' => ['required', 'max:150'],
        ];
    }

    public function messages()
    {
        return[
            'name.required' => "Nama Wajib Diisi!",
            'username.required' => "Username Wajib Diisi!",
            'email.required' => "Email Wajib Diisi!",
            'password.required' => "Password Wajib Diisi!",
            'gender.required' => "Gender Wajib Diisi!",
            'telp.required' => "Telepon Wajib Diisi!",
            'alamat.required' => "Alamat Wajib Diisi!",

            'name.max' => "Panjang Nama Maximal :max Character!",
            'username.max' => "Panjang Username Maximal :max Character!",
            'email.max' => "Panjang Email Maximal :max Character!",
            'password.max' => "Panjang Password Maximal :max Character!",
            'gender.in' => "Gender Tidak Sesuai!",
            'telp.max' => "Panjang Telepon Maximal :max Character!",
            'alamat.max' => "Panjang Alamat Maximal :max Character!",

            'username.unique' => "Username Telah Digunakan!",
            'email.unique' => "Email Telah Digunakan!",
            'telp.unique' => "Telepon Telah Digunakan!",
        ];
    }
}
