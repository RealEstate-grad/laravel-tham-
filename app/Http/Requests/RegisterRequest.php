<?php

// app/Http/Requests/RegisterRequest.php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users to make this request
    }

    public function rules()
    {
        return [
            'username' => 'required|username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed', // 'confirmed' checks for password confirmation
        ];
    }
}
