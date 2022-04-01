<?php

namespace App\Http\Controllers;

use App\Models\DentalRecordsModel;
use App\Models\User;
use Illuminate\Http\Request;

class DentalRecordsController extends Controller
{
    public function getUserDentalRecords(User $user)
    {
//      dd($user->userDentalRecord->current_teeth);

        return view('admin/dental', ['user' => $user]);

    }

    public function updateUserDentalRecord(Request $request)
    {
        $request->validate([
            'current_teeth' => ['string'],
            'missing_teeth' => ['string'],
            'notes' => ['string']
        ]);

        $update = $request->all();
        unset($update['_token']);

        DentalRecordsModel::where(['user_id' => $update['user_id']])
            ->update($update);

        return redirect()->back();
    }
}
