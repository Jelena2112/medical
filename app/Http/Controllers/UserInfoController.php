<?php

namespace App\Http\Controllers;

use App\Models\UserInfoModel;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{
   public function index()
   {
       return view('profile', ['userInfo' => Auth::user()->userInfo]);
   }

   public function saveUserInfo(Request $request)
   {
       $request->validate([
           'phone' => ['string'],
           'gender' => ['string', 'in:male,female'],
           'date_of_birth' => ['date'],
           'weight' => ['numeric'],
           'height' => ['numeric'],
       ]);

       $data = $request->all();
       unset($data['_token']);

       UserInfoModel::where(['user_id' => Auth::id()])->update($data);
//
//       $user = Auth::user()->userInfo;
//
//       dd($user);

       return redirect('/');

   }
}
