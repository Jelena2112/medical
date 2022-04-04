<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function changeUserType(Request $request)
    {
         User::where(['id'=> $request->get('user_id')])
             ->update(['type' => $request->get('type')]);

         return redirect()->back();
    }

    public function getUserInfo()
    {
        return view('userInfo',['user' => Auth::user()]);
    }
}
