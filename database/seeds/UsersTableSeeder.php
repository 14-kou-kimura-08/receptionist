<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            ["id" => 1, "name" => "管理者", "email" => "tech@kurashicom.jp", "password" => Hash::make("tech@kurashicom.jp"), ],
        ]);
    }
}
