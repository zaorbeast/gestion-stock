<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function profile()
    {
        $user=User::all();
        return view('usersprofile',compact('user'));
    }
    public function profiles()
    {
        $user=User::find(Auth::user()->id);
        if (Auth::user()->role_as=='1') {
            redirect('/dashboard')->with('status',"Users only are allowed");
        } else {
            return view('userprofile',compact('user'));
        }
        
    }
  
}
