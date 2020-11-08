<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => Str::random(10).'@gmail.com',
            'user' => Str::random(10),
            'password' => Hash::make('password'),
            'affiliate_id' => 0,
            'eth_address' => '0x0000000000000000000000000000000000',
            'status' => 0
        ]);
    }
}
