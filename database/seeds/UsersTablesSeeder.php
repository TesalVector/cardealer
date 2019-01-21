<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'TeslaVector',
            'email' => 'tesla@gmail.com',
            'password' => Hash::make('screenfun1994'),
            'card' => '5fj458jf894j',
            'remember_token' => str_random(10),
        ]);
    }
}
