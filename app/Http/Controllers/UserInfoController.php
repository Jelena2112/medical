<?php

namespace App\Http\Controllers;

use App\Models\UserInfoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserInfoController extends Controller
{
   public function index()
   {
       return view('profile');
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

   }
}
