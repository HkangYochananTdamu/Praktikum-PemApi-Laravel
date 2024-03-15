<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Setel ke true agar request selalu diijinkan
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ];
    }
}

