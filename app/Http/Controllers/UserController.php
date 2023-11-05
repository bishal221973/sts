<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(User $user)
    {
        $users = User::latest()->get();
        return view("users.index", compact("user", "users"));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "name" => 'required',
            "email" => 'required',
            "gender" => 'nullable',
            "contact" => 'nullable',
            "password" => 'required',
        ]);

        if ($request->hasFile($request->avatar)) {
            $data['avatar'] = $request->file($request->avatar)->store();
        }
        $user = User::create($data);
        $user->assignRole("admin");

        return redirect()->back()->with("success", "New record saved.");
    }

    public function edit(User $user)
    {
        $users = User::latest()->get();
        return view("users.index", compact("user", "users"));
    }

    public function update(Request $request,User $user)
    {
        $data = $request->validate([
            "name" => 'required',
            "email" => 'required',
            "gender" => 'nullable',
            "contact" => 'nullable',
        ]);

        if ($request->hasFile($request->avatar)) {
            if($user->avatar){
                Storage::delete($user->avatar);
            }
            $data['avatar'] = $request->file($request->avatar)->store();
        }
        $user->update($data);

        return redirect()->route('users.index')->with("success", "Selected record updated.");
    }

    public function show(User $user){
        if($user->avatar){
            Storage::delete($user->avatar);
        }
        $user->delete();

        return redirect()->back()->with("success","Selected usere removed.");
    }

    public function changePassword(Request $request,User $user){
        $customMessages = [
            'password.regex' => 'Password must contain uppercase, lowercase, special character and number.',
            // Other custom messages
        ];
        $request->validate([
            'current_password' => 'required|min:8',
            'password' => 'required|min:8|confirmed',
        ]);

        if (Hash::check($request->current_password, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);

            return redirect()->back()->with('success', 'Password updated successfully');
        } else {
            return redirect()->back()->with('error', 'Current password is incorrect');
        }
    }
}
