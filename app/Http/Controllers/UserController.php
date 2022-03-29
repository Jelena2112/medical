<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function changeUserType(Request $request)
    {
         User::where(['id'=> $request->get('user_id')])
             ->update(['type' => $request->get('type')]);

         return redirect()->back();
    }
}
