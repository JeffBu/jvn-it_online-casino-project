<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

use App\Models\User;
use App\Models\Player;

class UserController extends Controller
{
    public function playerRegistration(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'max:255'],
            'birthdate' => ['required', 'before:18 years ago'],
            'email' => ['required','email:rfc,dns', 'unique:users'],
            'phone' => ['required', 'numeric', 'digits:11'],
            'username' => ['required', 'max:20', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->numbers()],
        ]);

        if($validator->fails())
        {
            return redirect()->route('register')
                ->withErrors($validator)
                ->withInput();
        }

        $validated = $validator->validated();

        DB::transaction(function () use ($validated) {
            $user = User::create([
                'username' => $validated['username'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'phone' => $validated['phone'],
                'role_id' => 1,
                'remember_token' => Str::random(60),
            ]);

            Player::create([
                'user_id' => $user->id,
                'name' => $validated['name'],
                'birthdate' => $validated['birthdate'],
                'is_verified' => 0,
                'is_active' => 0
            ]);
        });

        return redirect()->route('login');
    }
}
