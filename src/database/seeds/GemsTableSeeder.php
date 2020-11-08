<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gems')->insert([
            'gem' => 'AAA',
            'holding_reriod'=> 4,
            'interest_rate'=> 1.2,
            'low_price'=> 10000,
            'high_price'=> 30000,
            'fee'=> 20,
        ]);
    }
}
