<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();

            // Check if the user has the role of "customer" (role_id 3) or "driver" (role_id 4)
            if (in_array($user->role_id, [3, 4])) {
                $token = $user->createToken('VerZ')->plainTextToken;

                return response()->json([
                    'token' => $token,
                    'role' => $user->role->name,
                ], 200);
            } else {
                return response()->json(['error' => 'Login not allowed'], 401);
            }
        } else {
            return response()->json(['error' => 'Unauthenticated'], 401);
        }
    }
}
