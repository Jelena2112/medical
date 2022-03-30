<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DentalRecordsController extends Controller
{
    public function getUserDentalRecords(User $user)
    {
//      dd($user->userDentalRecord->current_teeth);

        return view('admin/dental', ['user' => $user]);

    }
}
