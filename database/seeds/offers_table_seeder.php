<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert([
            'id' => '1',
            'salon_id' => '1',
            'client_id' => '1',
            'first_name' => 'Adam',
            'last_name' => 'Carter',
            'mobile' => '07921806884',
            'opt_out' => '0',
            'created_at' => '2020-01-17'
        ]);

        DB::table('offers')->insert([
            'id' => '2',
            'salon_id' => '1',
            'client_id' => '2',
            'first_name' => 'Jimmy',
            'last_name' => 'Sharpe',
            'mobile' => '07921806889',
            'opt_out' => '0',
            'created_at' => '2020-01-17'
        ]);
    }
}
