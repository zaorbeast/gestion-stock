<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class userController extends Controller
{
    public function profile()
    {
        $user = User::all();
        return view('usersprofile', compact('user'));
    }
    public function profiles()
    {
        $user = User::find(Auth::user()->id);
        if (Auth::user()->role_as == '1') {
            redirect('/dashboard')->with('status', "Users only are allowed");
        } else {
            return view('userprofile', compact('user'));
        }
    }
    public function createUser()
    {
        return view('auth.register');
    }
    public function create(Request $request)
    {
        $rules = array('name' => 'required', 'email' => 'required|email', 'password' => 'required', 'passconfirm' => 'required');
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        } else {
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->password = Hash::make($request->input('password'));
            if ($request->input('password') == $request->input('passconfirm')) {
                $user->save();
                return redirect('/profile');
            } else {
                return response()->json("les mots de pass ne sont pas conforme");
            }
        }
    }
    public function grant($id)
    {
        $user = User::find($id);
        $user->role_as = 1;
        $user->update();
        return redirect('/profile');
    }
    public function revoc($id)
    {
        $user = User::find($id);
        $user->role_as = 0;
        $user->update();
        return redirect('/profile');
    }
    public function changePass(Request $request, $id)
    {
        $user = User::find($id);
        if (Auth::user()->password != Hash::make($request->input('old'))) {
            return response()->json(["encien1"]);
        } else {

            $user->password = Hash::make($request->input('new'));
            $user->update();
            return redirect('logout');
        }
    }
}
