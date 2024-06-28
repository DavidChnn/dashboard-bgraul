<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Fetch all users and show them on the view
    public function index()
    {
        $users = User::all();
        return view('masterdata.pic', compact('users'));
    }

    // Show form for editing the specified user
    public function edit($id)
    {
        $user = User::find($id);
        if ($user) {
            return view('masterdata.edit', compact('user'));
        } else {
            return redirect()->route('masterdata.pic')->with('error', 'User not found');
        }
    }

    // Update the specified user in storage
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if ($user) {
            $request->validate([
                'name' => 'string|max:255',
                'email' => 'string|email|max:255|unique:users,email,' . $id,
                'dept' => 'string|max:255',
                'password' => 'string|min:6|nullable',
                'role' => 'string|max:255',
            ]);

            $user->update([
                'name' => $request->name ?? $user->name,
                'email' => $request->email ?? $user->email,
                'dept' => $request->dept ?? $user->dept,
                'password' => $request->password ? Hash::make($request->password) : $user->password,
                'role' => $request->role ?? $user->role,
            ]);

            return redirect()->route('masterdata.pic')->with('success', 'User updated successfully');
        } else {
            return redirect()->route('masterdata.pic')->with('error', 'User not found');
        }
    }

    // Remove the specified user from storage
    public function destroy($id)
    {
        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('masterdata.pic')->with('success', 'User deleted successfully');
        } else {
            return redirect()->route('masterdata.pic')->with('error', 'User not found');
        }
    }

    // Show form for creating a new user
    public function create()
    {
        return view('masterdata.create');
    }

    // Store a newly created user in storage
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'dept' => 'required|string|max:255',
            'password' => 'required|string|min:6',
            'role' => 'required|string|max:255',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'dept' => $request->dept,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('masterdata.pic')->with('success', 'User added successfully');
    }
}
