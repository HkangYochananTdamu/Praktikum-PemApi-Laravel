<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAddressRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Setel ke true agar request selalu diijinkan
    }

    public function rules()
    {
        return [
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'province' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ];
    }
}

