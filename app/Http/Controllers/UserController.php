<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    use ValidatesRequests;
    /* Views */

    public function viewLogin()
    {
        return view('login');
    }

    public function viewSignUp()
    {
        return view('signup');
    }

    public function viewUsers()
    {
        $users = User::all();
        return view('usersDashboard')->with('users', $users);
    }


    public function login(Request $request)
    {
        return redirect('/');
    }

    /* Store users*/
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|min:3|max:30',
            'email' => 'required|string|email|unique:users,email|max:60',
            'password' => 'required|string|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'subscription' => $request->subscription
        ]);

        return redirect()->route('login');
    }

    /* Delete user */
    public function deleteUser(Request $request)
    {
        $user = User::find($request->user_id);

        if (!$user) {
            return redirect()->back()->with('error', 'Usuario no encontrado');
        }

        $user->delete();
        return redirect()->back()->with('success', 'Usuario eliminado correctamente');
    }
}
