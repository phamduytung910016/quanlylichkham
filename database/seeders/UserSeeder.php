<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::table('users')->insert([
            ['name' => 'Phạm Duy Tùng',
             'email' => 'admin@gmail.com',
             'password' =>bcrypt('123456789'),
             'confirm_password' => bcrypt('123456789'),
             'rule' => 1,
             'phone_number'=>'0522883269',
             'sex' => 'nam'
            ]
        ]);
    }
}
