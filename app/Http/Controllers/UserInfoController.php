<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserInfoModel;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{
   public function index()
   {
       return view('profile', ['user' => Auth::user()]);
   }

   public function saveUserInfo(Request $request)
   {
       $request->validate([
           'name' => ['string'],
           'phone' => ['string'],
           'gender' => ['string', 'in:male,female'],
           'date_of_birth' => ['date'],
           'weight' => ['numeric'],
           'height' => ['numeric'],
       ]);

       $data = $request->all();
       unset($data['_token']);
       unset($data['name']);

       User::where(['id' => Auth::id()])->update(['name' => $request->name]);

       UserInfoModel::where(['user_id' => Auth::id()])->update($data);
//
//       $user = Auth::user()->userInfo;
//
//       dd($user);

       return redirect('/');

   }

   public function showAllUsers()
   {
        $users = User::all();

        return view( 'admin.allUsers', ['users' => $users]);
   }
}
