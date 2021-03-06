<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecordModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicalRecordController extends Controller
{
   public function medicalRecord(User $user)
   {
       if(MedicalRecordModel::where(['user_id' => $user->id])->count() < 1)
       {
           MedicalRecordModel::create([
               'user_id' => $user->id,
               'doctor_id' => Auth::user()->id
           ]);
       }
//       dd(Auth::user()->toArray());
//       dd($user->userMedicalRecord->doctor->name);

       return view('admin/medical', ['user' => $user]);

   }

   public function updateUserMedicalRecord(Request $request)
   {
       $request->validate([
           'notes ' => ['string']
       ]);
//        dd($request);
       $update = $request->all();
       unset($update['_token']);

//       dd($update);

       MedicalRecordModel::where(['user_id' => $update['user_id']])
           ->update($update);

       return redirect()->back();
   }
}
