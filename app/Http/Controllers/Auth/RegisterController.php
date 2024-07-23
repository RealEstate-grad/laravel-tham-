<?php

// app/Http/Controllers/Auth/RegisterController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        // Create a new user instance
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'username' => $request->username,
        ]);

        // Optionally, you can log the user in or return a success response
        // Auth::login($user);

        return response()->json(['message' => 'User registered successfully!'], 201);
    }
}