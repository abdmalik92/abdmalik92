<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'malik',
                'email' => 'malik@yopmail.com',
                'email_verified_at' => null,
                'password' => Hash::make('12345'),
                'remember_token' => null,
                'created_at' => '2022-03-28 09:00:00',
                'updated_at' => '2022-03-28 09:00:00',
                'status' => 1,
            ],
        ]);
    }
}
