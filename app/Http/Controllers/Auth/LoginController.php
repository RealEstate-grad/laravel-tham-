<?php

// app/Http/Controllers/Auth/LoginController.php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Validate the request data
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'username' => 'required|username',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Authentication passed
            return response()->json(['message' => 'Login successful!'], 200);
        }

        // Authentication failed
        return response()->json(['message' => 'Invalid credentials.'], 401);
    }
}