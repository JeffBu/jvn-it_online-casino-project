<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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
            
        });
    }
}
