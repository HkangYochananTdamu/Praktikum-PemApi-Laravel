<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Setel ke true agar request selalu diijinkan
    }

    public function rules()
    {
        return [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:contacts',
            'phone' => 'required|string|max:20',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ];
    }
}
