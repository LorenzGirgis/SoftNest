<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'current_password' => 'required|string|min:8|current_password',
            'password' => 'required|string|min:8',
            'confirm_password' => 'required|same:password',
        ];
    }
}