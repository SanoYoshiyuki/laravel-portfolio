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
            'tel' => 0000000000,
            'affiliate_id' => 0,
            'pin' => 0000,
            'bank' => 'ゆうちょ銀行',
            'bank_account_number' => 00000000,
            'bank_deposit_type' => '普通',
            'bank_branch' => 'テスト支店'
        ]);
    }
}
