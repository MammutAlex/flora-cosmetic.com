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
        \App\User::create([
            'email' => 'info@flora-cosmetic.com',
            'password' => bcrypt('qjwQ164GDBoY'),
        ]);
    }
}
