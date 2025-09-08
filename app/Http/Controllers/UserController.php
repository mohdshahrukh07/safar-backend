<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        return $this->handleAction(function () use ($request) {
            // Validate the request data
            $request->validate([
                'username' => 'required|string|max:255|unique:users',
                'firstName' => 'required|string|max:255',
                'lastName' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]);
            $user = [];
            $token = [];
            DB::transaction(function () use ($request, &$token, &$user) {
                // Create a new user instance
                $user = User::create([
                    'username' => $request->username,
                    'firstName' => $request->firstName,
                    'lastName' => $request->lastName,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);

                if (isset($user) && !empty($user)) {
                    if (!Auth::attempt($request->only('email', 'password'))) {
                        return response()->json(['message' => 'Unauthorized'], 401);
                    }

                    $user = Auth::user();
                    $token = $user->createToken('auth_token')->plainTextToken;
                }
            });

            return response()->json(['message' => 'You Successfully Signup', 'token' => $token, 'user' => $user]);
        });
    }
    public function login(Request $request)
    {
        return $this->handleAction(function () use ($request) {

            // Validate the request data
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            // Attempt to authenticate the user

            if (!Auth::attempt($request->only('email', 'password'))) {
                return response()->json(['message' => 'Unauthorized'], 401);
            }

            // Generate a token for the authenticated user
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json(['message' => 'You Successfully logged In', 'token' => $token, 'user' => $user]);
        });
    }

    public function logout(Request $request)
    {
        // Validate the request data
        $request->validate([
            'uuid' => 'required|string'
        ]);
        try {
            if (Auth::check() && auth()->user()->uuid == $request->uuid) {
                $user = Auth::user();
                $user->tokens()->delete();
                Auth::logout();
                return response()->json(['message' => 'You have successfully logged out']);
            } else {
                return response()->json(['message' => 'No user is currently logged in'], 401);
            }
        } catch (\Exception $e) {
            return response()->json(['message' => 'Logout failed', 'error' => $e->getMessage()], 500);
        }
    }
}
