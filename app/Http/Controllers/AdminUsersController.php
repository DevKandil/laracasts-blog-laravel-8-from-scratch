<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminUsersController extends Controller
{
    public function index() {
        return view('admin.users.index', [
            'users' => User::first()->paginate(8)
        ]);
    }


    public function create()
    {
        return view('admin.users.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name'      => ['required', 'max:255'],
            'profile_pic' => 'required|image',
            'username'  => ['required', 'max:255', 'min:4', Rule::unique('users', 'username')], // Validate with array
            'email'  => ['required', 'max:255', Rule::unique('users', 'email')], // Validate with array
            'password'  => ['required', 'max:255', 'min:8']
        ]);

        $attributes['profile_pic'] = request()->file('profile_pic')->store('avatars');

        User::create($attributes);

        return redirect('/admin/users')->with('success', 'User Created Successfully!');
    }

    public function edit(User $user)
    {
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'name' => ['required'],
            'username' => ['required', Rule::unique('users','username')->ignore($user->id)],
            'email' => ['required', Rule::unique('users','email')->ignore($user->id)],
            'profile_pic' => ['image'],
            'updated_at' => now()

        ]);

        if (isset($attributes['profile_pic'])) {
            $attributes['profile_pic'] = request()->file('profile_pic')->store('avatars');
        }

        $user->update($attributes);

        return redirect('/admin/users')->with('success', 'User Updated Successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect('/admin/users')->with('success', 'User Deleted Successfully!');

    }


}
