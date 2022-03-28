<?php

namespace Database\Seeders;

use App\Models\UserTypeModel;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Psy\Util\Str;

class SeedUserType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $types = ['doctor', 'user', 'admin', 'zubar', 'hirurg'];

        foreach ($types as $type)
        {
            UserTypeModel::create([
                'user_type' => $type
            ]);
        }


//       UserTypeModel::create([
//           'id' => 1,
//           'user_type' => 'doctor'
//       ]);
//
//        UserTypeModel::create([
//            'user_type' => 'user'
//        ]);
//
//        UserTypeModel::create([
//            'user_type' => 'admin'
//        ]);
//
//        UserTypeModel::create([
//            'user_type' => 'zubar'
//        ]);
//
//        UserTypeModel::create([
//            'user_type' => 'hirurg'
//        ]);
    }
}
