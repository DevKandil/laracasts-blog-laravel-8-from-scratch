<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create() {
        return view('register.create');
    }

    public function store() {

        $attributes = request()->validate([
            'name'      => ['required', 'max:255'],
            'username'  => ['required', 'max:255', 'min:4', Rule::unique('users', 'username')], // Validate with array
            'email'     => 'required|max:255|unique:users,email', // Validate with String
            'password'  => ['required', 'max:255', 'min:8']
        ]);

        $attributes['profile_pic'] = 'thumbnails/lary-avatar.svg';

        $user = User::create($attributes);

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
