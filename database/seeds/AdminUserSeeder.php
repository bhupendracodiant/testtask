<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            $users=array(
                'name' =>Str::random(10),
                'email' => Str::random(10) ."@gmail.com",
                'password' =>Hash::make(123456),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'usertype' =>1,
                'status' =>1
            );

                User::insert($users);
        }
    }
}
