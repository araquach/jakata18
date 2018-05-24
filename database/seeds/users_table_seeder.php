<?php

use Illuminate\Database\Seeder;

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
            'name' => 'Adam Carter',
            'email' => 'adam@jakatasalon.co.uk',
            'password' => Hash::make('blonde123'),
            'salon_id' => '1',
            'role' => '1',
            'remember_token' => null,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Jimmy Sharpe',
            'email' => 'jimmy@jakatasalon.co.uk',
            'password' => Hash::make('jim123'),
            'salon_id' => '2',
            'role' => '1',
            'remember_token' => null,
        ]);
    }
}
